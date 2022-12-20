Create procedure validarP
@Correo varchar(100),
@Contraseña varchar(15)
AS BEGIN
SET NOCOUNT ON
    declare @exist int
    SELECT @exist = COUNT(*) from Huesped where Correo = @Correo AND Contrasena = @Contraseña
    SELECT @exist as num
END
DROP PROCEDURE validarP
EXEC validarP 'jmum0@yahoo.co.jp','XGWJ9t'