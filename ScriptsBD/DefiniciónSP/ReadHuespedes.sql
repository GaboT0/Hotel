create Procedure ReadHuepedes
@idHues int = null
as
if @idHues is null
begin
select * from Huesped
end
else
begin
	select * from 
	Huesped 
	where idHues=@idHues
end;
