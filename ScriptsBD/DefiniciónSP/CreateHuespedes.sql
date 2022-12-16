Declare @idHues int
Declare @Nombre varchar(50)
Declare @ApP varchar(50)
Declare @ApM varchar(50)
Declare @Dir varchar(100)
Declare @Correo varchar(100)
Declare @Telefono varchar(12)
Set @idHues =1001
Set @Nombre= 'Diana'
Set @ApP= 'Ruiz'
Set @ApM= 'Mendez'
Set @Dir='Wallabee p.sherman 201'
Set @Correo= 'Correo@correo.com'
Set @Telefono ='12345678'
Insert into [Huesped] (idHues,Nombre,ApP,ApM,Dir,Correo,Telefono) Values(@idHues,@Nombre,@ApP,@ApM,@Dir,@Correo,@Telefono);


create Procedure CreateHuesped
 @idHues int,
 @Nombre varchar(50),
 @ApP varchar(50),
 @ApM varchar(50),
 @Dir varchar(100),
 @Correo varchar(100),
 @Telefono varchar(12)

 as
 Insert into Huesped (idHues,Nombre,ApP,ApM,Dir,Correo,Telefono) Values(@idHues,@Nombre,@ApP,@ApM,@Dir,@Correo,@Telefono);

