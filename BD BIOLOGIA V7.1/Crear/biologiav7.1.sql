/*usuarios.tipo: ADMINISTRADOR, PROFESOR, ALUMNO*/
create table Usuario(
	Rut varchar(20) not null,
	Nombre varchar(50) default null, 
	ApellidoP varchar(50) default null, 
	ApellidoM varchar(50) default null, 
	Correo varchar(50) default null, 
	Password varchar(50) default null, 
	TipoUsuario varchar(20) default null,
	primary key(Rut)
);

create table Asignatura(
	Id int(11) not null,
	NombreAsignatura varchar(50) default null,
	RutProfersorACargo varchar(20) default null,
	primary key(Id),
	foreign key(RutProfersorACargo) references Usuario(Rut) 
	on delete no action on update no action
);
	
/*guias.estado: ACTIVA, INACTIVA*/
create table Guia(
	Id int(11) not null,
	Titulo varchar(50) default null,
	Descripcion varchar(500) default null,
	Fecha date default null,
	IdAsignatura int(11) default null,
	Estado varchar(20) default null,
	primary key(Id),
	foreign key(IdAsignatura) references Asignatura(Id)
	on delete no action on update no action
);			
			
create table UsuarioAsignatura(
	RutUusuario varchar(20) not null,
	IdAsignatura int (11) not null,
	foreign key(RutUsuario) references Usuario(Rut)
	on delete no action on update no action,
	foreign key(IdAsignatura) references Asignatura(Id)
	on delete no action on update no action
);
			
create table Repositorio(
    Id mediumint not null AUTO_INCREMENT,
    RutAlumno varchar(12) default null,
	Ruta varchar(50) not null,
	DescripcionBreve varchar(600) default null,
	TipoTenido text default null,
    Preparacion varchar(20) default null,
	Diametro int(11) default null,
	Aumento int(11) default null,
    Fecha date default null,
	RutaDibujo varchar(200) default null,
	primary key(Id),
	foreign key(RutAlumno) references Usuario(Rut) 
	on delete no action on update no action
);

/*preguntas.tipo_respuesta: TITULO, TEXTO, AREA, MULTIPLE*/
create table Pregunta(
	Id int not null,
	Enunciado varchar(100) default null,
	TipoRespuesta varchar(50) default null,
	primary key(Id)
);

/*seleccion_multiple.tipo: CHECKBOX, RADIO o LISTA*/
create table SeleccionMultiple(
	IdPregunta int(11) default null,
	ValorAlternativa varchar(50) default null,
	Tipo varchar(10) default null,
	foreign key(IdPregunta) references Pregunta(Id) 
	on delete no action on update no action 
);

create table Contenido(
    IdPregunta int(11),
	IdGuia int(11),
	Respuesta text,
	foreign key(IdGuia) references Guia(Id) 
	on delete no action on update no action,
	foreign key(IdPregunta) references Pregunta(Id) 
	on delete no action on update no action
);

create table Respuesta(
	IdPregunta int(11) default null,
	IdGuia int(11) default null,
	Respuesta varchar(500) default null,
	Fecha date default null,
	RutUsuario varchar(20) default null,
	foreign key(IdGuia) references Guia(Id) 
	on delete no action on update no action,
	foreign key(RutUsuario) references Usuario(Rut) 
	on delete no action on update no action
);