create Procedure ReadReservaciones
@idResv int = null
as
if @idResv is null
begin
select * from Reservaciones
end
else
begin
	select * from 
	Reservaciones 
	where idResv=@idResv
end;

