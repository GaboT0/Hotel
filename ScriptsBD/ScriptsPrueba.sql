/*
SP para crear una reservación
fecha inicial,fecha,final,id_huesped,id_habitacion,id_empleado
*/
exec CreateReservation '20230115','20230120',1,1,5;
/*
Función para calcular el costo de una reservación
fecha inicial,fecha,final,tipo_habitación
*/
select dbo.calcular_precio('20230115','20230120',1);
/*
Función para validar la disponibilidad de una habitación 
fecha inicial,fecha final,id_habitacion
*/
select dbo.validar_fecha_reservacion('20230115','20230120',1)
