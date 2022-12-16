USE [Hotel]
GO

/****** Object:  StoredProcedure [dbo].[CreateEmployee]    Script Date: 15/12/2022 10:40:16 p. m. ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

create procedure [dbo].[CreateEmployee] 
 @idEmpl int,
 @Nombre nvarchar(50),
 @ApP nvarchar(50),
 @ApM nvarchar(50),
 @tipoEmp int
as
insert into Empleados (idEmpl,Nombre,ApP,ApM,TipoEm) values(@idEmpl,@nombre,@ApP,@ApP,@tipoEmp)
GO
