USE [Hotel]
GO

/****** Object:  StoredProcedure [dbo].[CreateEmployee]    Script Date: 15/12/2022 10:40:16 p. m. ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

create procedure [dbo].[CreateEmployee] 

 @Nombre nvarchar(50),
 @ApP nvarchar(50),
 @ApM nvarchar(50),
 @Dir nvarchar(50),
 @Correo nvarchar(50),
 @Telefono nvarchar(12),
 @tipoEmp int,
 @Pass varchar(15)
as BEGIN
SET NOCOUNT ON
declare @e int
SELECT @e=count(*) from Empleados where Correo = @Correo
if @e = 0
    BEGIN
insert into  Empleados (Nombre,ApP,ApM,Dir,Correo,Telefono,TipoEm,Contrasena)
     Values(@Nombre,@ApP,@ApM,@Dir,@Correo,@Telefono,@tipoemp,@Pass);
	 select @e as exist
	end
else
	begin
	select @e as exist
	end
END

GO

--EXEC CreateEmployee  ,  , , , , , , 
