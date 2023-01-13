insert into TipoEmpleado (TipoEmpleado,Sueldo) values('Huesped',0);
create trigger TR_create_usr
on Huesped
after insert
as
declare @idEmpl nvarchar(50),@nombre nvarchar(20),@ApP nvarchar(50),@ApM nvarchar(50),@dir nvarchar(50),@correo nvarchar(50),@telefono nvarchar(50),@contrasena nvarchar(50)
select @nombre=Nombre,
@ApP=ApP,
@ApM=ApM,
@Dir=dir,
@correo=Correo,
@telefono=Telefono,
@contrasena=Contrasena
from inserted
insert into Empleados(Nombre,ApP,ApM,Dir,Correo,Telefono,TipoEm,Contrasena) values (@nombre,@ApP,@ApM,@dir,@correo,@telefono,4,@contrasena);
go
insert into Huesped (Nombre,ApP,ApM,Dir,Correo,Telefono,Contrasena) values('Luis','Antonio','Francisco','casita','correo@correo.com','5551273967','1234');
select * from Empleados