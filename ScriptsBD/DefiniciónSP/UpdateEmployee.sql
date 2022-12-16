USE [Hotel]
GO

/****** Object:  StoredProcedure [dbo].[UpdateEmployee]    Script Date: 15/12/2022 10:42:11 p. m. ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

create procedure [dbo].[UpdateEmployee]
 @idEmpl int,
 @NewNombre nvarchar(50),
 @NewApP nvarchar(50),
 @NewApM nvarchar(50),
 @NewtipoEmp int
 as
 
Update
	Empleados
	set Nombre=@NewNombre,
		ApP=@NewApP,
		ApM=@NewApP,
		TipoEm=@NewtipoEmp
	where idEmpl=@idEmpl
GO


