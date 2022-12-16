go
create Procedure CreateReservation
 @beg_dte nvarchar(8),
 @end_dte nvarchar(8),
 @idHues int,
 @idHab int,
 @idEmpl int,
 @flg bit
 as
 /*En la variable flg determina si el rango de inicio y fin de las reservaciones existentes para la habitación coinciden con la que se intenta crear*/
 select @flg =(select 1 val from Reservaciones
where idHab=@idHab 
and( @beg_dte between  beg_dte
and end_dte
or @end_dte between beg_dte 
and end_dte))

if @flg is null 
begin
insert into Reservaciones (idHues,idHab,idEmpl,beg_dte,end_dte) values(@idHues,@idHab,@idEmpl,convert(datetime,@beg_dte, 103),convert(datetime,@end_dte, 103))
select 'Reservación exitosa' value
end
else
begin
select 'Habitación no disponible' value
end





