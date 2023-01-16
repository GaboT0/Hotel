go
create Procedure CreateReservation
 @beg_dte nvarchar(8),
 @end_dte nvarchar(8),
 @idHues int,
 @idHab int,
 @idEmpl int,
 @flg bit = null
 as
 declare @precio_f money;
 set @precio_f= (select dbo.calcular_precio(@beg_dte,@end_dte,@idHab));
 /*En la variable flg determina si el rango de inicio y fin de las reservaciones existentes para la habitaci�n coinciden con la que se intenta crear*/
 select @flg =(select dbo.validar_fecha_reservacion(@beg_dte,@end_dte,@idHab))

if @flg is null 
begin
insert into Reservaciones (idHues,idHab,idEmpl,beg_dte,end_dte,CostoF) values(@idHues,@idHab,@idEmpl,convert(datetime,@beg_dte, 103),convert(datetime,@end_dte, 103),@precio_f)
select 'Reservacion exitosa' value
end
else
begin
select 'Habitacion no disponible' value
end