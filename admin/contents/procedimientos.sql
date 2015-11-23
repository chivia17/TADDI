delimiter $
create procedure insCarrera(
	in cv varchar(15), 
	in nom varchar(100)
	)
	begin
		insert into carreras(
			cveCarrera, 
			NombreCarrera
		) 
		values (
			cv,
			nom
		);
	end $
create procedure insCoordinador(
	in id int(12),
	in rfc varchar(13), 
	in nombre varchar(100), 
	in paterno varchar(100), 
	in materno varchar(100), 
	in pass varchar(13), 
	in cveC varchar(15)
	)
	begin
		insert into Coordinadores(
			idCoordinador,
			rfc,
			nombreCoordinador,
			apellPCoordi,
			apellMCoordi,
			contrasena,
			cveCarrera
		) 
		values(
			id,
			rfc,
			nombre,
			paterno,
			materno,
			pass,
			cveC
		);
	end $
create procedure insGrupos(
	in id varchar(45), 
	in nombre varchar(45), 
	in salon varchar (3), 
	in hora varchar(5), 
	in cveC varchar(15),
	in idP int(11),
	in idT varchar(13)
	)
	begin 
		insert into Grupos(
			idGrupos,
			NombreGrupo,
			Salon,
			Hora,
			cveCarrera,
			idPeriodo,
			idTutores
		) 
		values(
			id,
			nombre,
			salon,
			hora,
			cveC,
			idP,
			idT
		);
	end $
create procedure insTutores(
	in id varchar(13),
	in nombre varchar(100),
	in paterno varchar(100), 
	in materno varchar(100),
	in pass varchar(13),
	in activo int(1),
	in cveC varchar(15)
	)
	begin
		insert into Tutores(
			idTutores,
			nombreTutor,
			apellPTutor,
			apellMTutor,
			contrasena,
			activo,
			cveCarrera
		)
		values(
			id,
			nombre,
			paterno,
			materno,
			pass,
			activo,
			cveC
		);
	end $
	
create procedure catCarrera (
	)
	begin 
		select cveCarrera as `Clave`, NombreCarrera as `Nombre Carrera`
		from carreras order by NombreCarrera;		
	end $

create procedure catCoordi(
	)
	begin 
		select concat (apellPCoordi,' ',apellMCoordi,' ',nombreCoordinador) as `Coordinador`,NombreCarrera as `Carrera`
		from Coordinadores inner join carreras on Carreras.cveCarrera=Coordinadores.cveCarrera order by apellPCoordi;		
	end $
create procedure catTutores(
	)
	begin 
		select concat(apellPTutor,' ',apellMTutor,' ',nombreTutor) as `Tutor`,NombreGrupo as `Grupo`
		from Tutores inner join Grupos on Tutores.idTutores=Grupos.idTutores order by apellPTutor;
		end $
create procedure catGrupos(
	)
	begin 
		select NombreGrupo as `Grupo`,NombreCarrera as `Carrera`
		from Grupos inner join carreras on Grupos.cveCarrera=Carreras.cveCarrera order by NombreCarrera;		
	end $

create procedure catImagenes(
	)
	begin
		select url as `Imagen`,descripcion as `Descripción` 
		from Logos;
	end $

create procedure alClave(
	in id int(8)
	)
	begin 
		select concat(apellPAlumno,' ',apellMAlumno,' ',nombreAlumno) as `Nombre`, idAlumnos as `N.C.`,NombreCarrera as `Carrera`,estatus
		from Alumnos inner join Carreras on Alumnos.cveCarrera=Carreras.cveCarrera
		where 
			id=idAlumnos;
	end $

create procedure tutClave(
	in nombre varchar(100)
	)
	begin
		select concat(apellPTutor,' ',apellMTutor,' ',nombreTutor) as `Nombre`,idTutores as `ID`,NombreCarrera as `Carrera` 
		from Tutores inner join Carreras on Tutores.cveCarrera=Carreras.cveCarrera
		where 
			nombre=idTutores;
	end $
create procedure cambioCarrera(
	in id int(8),
	in nvaC varchar(15),
	in nvoG varchar(45)
	)
	begin
	update Alumnos set cveCarrera=nvaC,activo=1, idGrupo=nvoG
	where
		id=idAlumnos;
	end $
create procedure cambioGrupo(
	in id int(8),
	in nvoG varchar(45)
	)
	begin 
	update Alumnos set idGrupo=nvoG
	where
		id=idAlumnos;
	end $
create procedure updatePassAl(
	in id int(8),
	in nvPass varchar(256)
	)
	begin
		update Alumnos set contrasena=nvPass
		where
			idAlumno=id;
	end $
create procedure updatePassT(
	in id varchar(13),
	in nvPass varchar(13)
	)
	begin 
		update Tutores set contrasena=nvPass
		where 
			idTutores=id;
	end $
create procedure updatePassCo(
	in id int(11),
	in nvPass varchar(13)
	)
	begin 
		update Coordinadores set contrasena=nvPass
		where idCoordinador=id;
	end $
create procedure modPassAdmin(
	in id int(12),
	in pass varchar(10)
	)
	begin
		update administrador set
			contrasena=pass
		where 
			idAdministrador=id;
	end $
create procedure borrarAlumnos(
	)
	begin 
		delete from Alumnos
		where estatus='Titulado' or estatus='Baja permanente';
	end $
create procedure bajaLog(
	in id int(8)
	)
	begin 
		update Alumnos set activo=0 
			where idAlumnos=id;
	end $
delimiter ;
