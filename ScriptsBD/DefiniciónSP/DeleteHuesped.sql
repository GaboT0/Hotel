/*SP para eliminar Huespedes, recibe como parametro el ID del huesped*/
go
create Procedure DeleteHuesped
@correo nvarchar(50),
@pass varchar(15)
as
declare @id int =0
select @id=idHues from Huesped where Correo=@correo and Contrasena=@pass
if @id <> 0
begin
 delete from Reservaciones where idHues=@id
 delete from Huesped where idHues=@id
 select @id as id
end
else
select @id as id
go


DROP procedure DeleteHuesped

EXEC DeleteHuesped 'lmoughton1@weebly.com','I9FLXVmRA'
