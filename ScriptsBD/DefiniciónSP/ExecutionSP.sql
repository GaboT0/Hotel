/*Ejecución del CRUD para Empleados*/
exec CreateEmployee 6,'Omar','Torres','Rivas',2;
execute ReadEmployees ;
execute UpdateEmployee 1,'Ramon','Mora','Ocasio',1;
execute DeleteEmployee 6;

/*Ejecución del CRUD para reservaciones*/
execute CreateReservation '20231220','20231229',1,1,1
execute ReadReservaciones 2;
execute UpdateReservacion 2,1,1,1,'20230201','20230210';
execute DeleteReservacion 4;

/*Ejecución del CRUD para Huespedes*/
execute CreateHuesped 1002,'Luis','Rosas','Lopez','Lateral Colima 21','corrreo1@correo.com',987654321
execute ReadHuepedes 1;
execute UpdateHuesped 1001,'Dianix','Ruiz','Mendez','Wallabee p.sherman 201','Correo@correo.com','12345678'
execute DeleteHuesped 1001