create Procedure ReadEmployees
@correo int = null
as
if @correo is null
begin
select * from empleados
end
else
begin
	select * from 
	empleados 
	where Correo=@correo
end;
