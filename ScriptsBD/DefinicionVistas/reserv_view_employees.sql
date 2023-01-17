create view reserv_view_employees
as
select Empleados.idEmpl,
CONCAT(Empleados.Nombre,' ',Empleados.ApP,' ',Empleados.ApM) empleado_full_name,
Reservaciones.idHues,
Reservaciones.idHab,
Reservaciones.beg_dte,
Reservaciones.end_dte,
Reservaciones.CostoF
from 
Empleados join Reservaciones 
on Empleados.idEmpl = Reservaciones.idEmpl;

Select * from reserv_view_employees