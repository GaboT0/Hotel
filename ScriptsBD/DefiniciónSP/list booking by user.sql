create procedure list_booking_by_user
@usr_id int
as
select Reservaciones.idResv,
CONCAT(Huesped.Nombre,' ',Huesped.ApP,' ',Huesped.ApM) huesped_full_name,
CONCAT(Empleados.Nombre,' ',Empleados.ApP,' ',Empleados.ApM) empleado_full_name,
Reservaciones.beg_dte,
Reservaciones.end_dte,
datediff(DAY,Reservaciones.beg_dte,Reservaciones.end_dte) dias,
Reservaciones.CostoF
from Reservaciones 
join Huesped
on Reservaciones.idHues=Huesped.idHues
join Empleados
on Empleados.idEmpl=Reservaciones.idEmpl
where Reservaciones.idHues=@usr_id;
