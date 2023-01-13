-- PARA HUESPEDES

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


--PARA EMPLEADOS

Create procedure validarADP
@Correo varchar(100),
@Contraseña varchar(15)
AS BEGIN
SET NOCOUNT ON
  declare @exist int = 0
  SELECT @exist = COUNT(*) from Empleados where Correo = @Correo AND Contrasena = @Contraseña
  if @exist = 1
  begin 
	declare @tipo int = 0
	SELECT top(1) @tipo=TipoEm from Empleados where Correo = @Correo AND Contrasena = @Contraseña
	select @tipo as Tipo
  end
  else
  select @exist as Tipo
END

EXEC validarADP 'dfossickd@n.org' , '35448'