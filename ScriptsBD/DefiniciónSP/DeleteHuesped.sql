/*SP para eliminar Huespedes, recibe como parametro el ID del huesped*/
go
create Procedure DeleteHuesped
@idHues int 
as
Delete from Huesped where idHues=@idHues
go

