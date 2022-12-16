/*SP para eliminar empleados, recibe como parametro el ID del empleado*/
go
create Procedure DeleteEmployee
@idEmpl int
as
delete 
from empleados 
where idEmpl=@idEmpl
go
