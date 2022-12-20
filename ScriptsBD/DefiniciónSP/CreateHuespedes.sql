
Declare @Nombre varchar(50)
Declare @ApP varchar(50)
Declare @ApM varchar(50)
Declare @Dir varchar(100)
Declare @Correo varchar(100)
Declare @Telefono varchar(12)
Declare @Contraseña varchar(15) not null

Set @Nombre= 'Diana'
Set @ApP= 'Ruiz'
Set @ApM= 'Mendez'
Set @Dir='Wallabee p.sherman 201'
Set @Correo= 'Correo@correo.com'
Set @Telefono ='12345678'
Insert into [Huesped] (Nombre,ApP,ApM,Dir,Correo,Telefono) Values(@Nombre,@ApP,@ApM,@Dir,@Correo,@Telefono);


CREATE PROCEDURE CreateHuesped
 @Nombre varchar(50),
 @ApP varchar(50),
 @ApM varchar(50),
 @Dir varchar(100),
 @Correo varchar(100),
 @Telefono varchar(12),
 @Pass varchar(15)
AS BEGIN
SET NOCOUNT ON
declare @e int
SELECT @e=count(*) from Huesped where Correo = @Correo
--Select @@ROWCOUNT as filas
if @e = 0
    BEGIN
	Insert into Huesped (Nombre,ApP,ApM,Dir,Correo,Telefono,Contrasena)
     Values(@Nombre,@ApP,@ApM,@Dir,@Correo,@Telefono,@Pass);
	 select @e as exist
	end
else
	begin
	select @e as exist
	end
END

DROP PROCEDURE CreateHuesped

EXEC CreateHuesped 'Jeromy','Nelthorp','Mum','International','mum0@yhoco.jp','6087384170','XGWJ9t'

