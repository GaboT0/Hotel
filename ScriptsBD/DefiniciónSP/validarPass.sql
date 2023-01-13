USE [Hotel]
GO

/****** Object:  StoredProcedure [dbo].[validarPass]    Script Date: 13/01/2023 01:46:01 p. m. ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

CREATE procedure [dbo].[validarPass]
@Correo varchar(100),
@Contraseña varchar(15)
AS BEGIN
SET NOCOUNT ON
    declare @exist int
    SELECT @exist = TipoEm from Empleados where Correo = @Correo AND Contrasena = @Contraseña
    SELECT @exist as num
END
GO
/*La validación se realiza en la tabla empleados, un trigger se encarga de escribir todos los registros aún cuando se insertan en huesped*/
EXEC validarPass 'jmum0@yahoo.co.jp','XGWJ9t'