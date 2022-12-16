Create procedure inContact
@Nombre varchar(50),
@Correo varchar(100),
@Telefono varchar(12),
@Mensaje varchar(300),
@EsCliente bit,
@FechaResv date

AS BEGIN
SET NOCOUNT ON

IF @FechaResv = '1900-01-01'
	BEGIN
		insert into Contacto (Nombre,Correo,Telefono,Mensaje,EsCliente,FechaResv) 
		values(@Nombre,@Correo,@Telefono,@Mensaje,@EsCliente,CONVERT (date, GETDATE()));
	END
ELSE
	BEGIN
		insert into Contacto (Nombre,Correo,Telefono,Mensaje,EsCliente,FechaResv) 
		values(@Nombre,@Correo,@Telefono,@Mensaje,@EsCliente,@FechaResv);
	END
END


EXEC inContact 'Gabriel Tlaltilolpa','tlaltilolpillo@gmail.com','5542424646','Hola me gustaria hacer un reembolso',1,'2025-05-08';