create procedure list_sales_per_day
@trndte nvarchar(8)
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
where CONVERT(date,resvdte)= convert(date,@trndte);