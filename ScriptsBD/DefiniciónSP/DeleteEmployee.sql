/*SP para eliminar empleados, recibe como parametro el ID del empleado*/
go
create Procedure DeleteEmployee
@correo nvarchar(50),
@pass varchar(15)
as
declare @id int =0
select @id=idEmpl from Empleados where Correo=@correo and Contrasena=@pass
if @id <> 0
begin
 delete from Reservaciones where idEmpl=@id
 delete from Empleados where idEmpl=@id
 select @id as id
end
else
select @id as id
go

drop procedure DeleteEmployee

EXEC DeleteEmployee 'd@vertising.org','2165'