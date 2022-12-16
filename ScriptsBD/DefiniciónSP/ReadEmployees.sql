create Procedure ReadEmployees
@idEmpl int = null
as
if @idEmpl is null
begin
select * from empleados
end
else
begin
	select * from 
	empleados 
	where idEmpl=@idEmpl
end;
