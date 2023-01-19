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
/*
Vista para obtener las reservaciones realizadas por usuario
*/
select * from reserv_view_employees;

/*
SP para listar las reservaciones realizadas por día
fecha de reservación
*/
exec list_sales_per_day '20230116';

/*
SP para listar reservaciones realizadas por usuario
*/
exec list_booking_by_user 100