/*SP para eliminar empleados, recibe como parametro el ID del empleado*/
go
create Procedure Deletereservacion
@idResv int
as
delete 
from Reservaciones 
where idResv=@idResv
go;
