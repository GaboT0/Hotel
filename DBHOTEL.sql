CREATE DATABASE Hotel;

USE Hotel;

CREATE TABLE TipoEmpleado(
idTEmpl int Primary key not null,
TipoEmpleado varchar(50) not null,
Sueldo money not null
);

CREATE TABLE Empleados(
idEmpl int Primary key not null,
Nombre varchar(50) not null,
ApP varchar(100) not null,
ApM varchar(100) not null,
TipoEm int not null,
FOREIGN KEY (TipoEm) REFERENCES TipoEmpleado(idTEmpl)
);


CREATE TABLE TipoHabitacion(
idTHab int primary key not null,
nCamas int not null,
nPersonas int not null,
Precio money not null,
Descrip varchar(300) not null
);

CREATE TABLE Habitaciones(
idHab int primary key not null,
disp bit not null,
tipoHab int not null,
FOREIGN KEY (tipoHab) REFERENCES TipoHabitacion(idTHab)
);

CREATE TABLE Huesped(
idHues int primary key not null,
Nombre varchar(50) not null,
ApP varchar(50) not null,
ApM varchar(50) not null,
Dir varchar(100) not null,
Correo varchar(100) not null,
Telefono varchar(12) not null,

);

CREATE TABLE Reservaciones(
idResv int primary key not null,
idHues int FOREIGN KEY REFERENCES Huesped(idHues) not null,
idHab int FOREIGN KEY REFERENCES Habitaciones(idHab) not null,
idEmpl int FOREIGN KEY REFERENCES Empleados(idEmpl) not null

);

CREATE TABLE Contacto(
idCont int primary key not null,
Nombre varchar(50) not null,
Correo varchar(100) not null,
Telefono varchar(12) not null,
Mensaje varchar(300) not null,
EsCliente bit not null,
FechaResv date
);

