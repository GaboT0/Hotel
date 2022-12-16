Create Procedure UpdateReservacion
 @idResv int,
 @idHues int,
 @idHab int,
 @idEmpl int,
 @beg_dte nvarchar(8),
 @end_dte nvarchar(8),
  @flg bit=null,
 @flg2 bit=null
 as
 select @flg=(select 1 from
Reservaciones
where idResv=@idResv)

if @flg is null
begin
select 'La reservación no existe' value
end
else 
begin
	 select @flg2 =(select 1 val from Reservaciones
	where idHab=@idHab 
	and( @beg_dte between  beg_dte
	and end_dte
	or @end_dte between beg_dte 
	and end_dte)
	and idResv!=@idResv)

	if @flg2 is null 
	begin
		update Reservaciones 
		set beg_dte=@beg_dte,
		end_dte=@end_dte
		where idResv=@idResv
	select 'Reservacion exitosa' value
	end
	else
	begin
	select 'Habitacion no disponible' value
	end
end;