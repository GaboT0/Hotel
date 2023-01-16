USE [Hotel]
GO

/****** Object:  StoredProcedure [dbo].[UpdateEmployee]    Script Date: 15/12/2022 10:42:11 p. m. ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

create procedure [dbo].[UpdateEmployee]
 @idEmpl int,
 @NewName nvarchar(50),
 @NewApP nvarchar(100),
 @NewApM nvarchar(100),
 @NewDir nvarchar(100),
 @NewTel nvarchar(12),
 @NewtipoEmp int
 as
 declare @ex int = 0
Select @ex=count(*) from Empleados Where idEmpl=@idEmpl
IF @ex = 1
begin
	Update
	Empleados
	set Nombre=@NewName,
		ApP=@NewApP,
		ApM=@NewApM,
		Dir=@NewDir,
		Telefono=@NewTel,
		TipoEm=@NewtipoEmp
	where idEmpl=@idEmpl
	Select @ex as exist
END	
ELSE
	Select @ex as exist
GO

DROP PROCEDURE UpdateEmployee
EXEC UpdateEmployee 6,'Omar','Torres','Porres','Dovetal','5542424242',2
