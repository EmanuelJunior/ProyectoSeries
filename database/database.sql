CREATE DATABASE streaming_app;
USE streaming_app;

/*ESTA BASE DE DATOS SOLO FUNCIONA CREARLA SI LO HACEMOS EN UNA CONSULTA
SQL EN EL LOCALHOST/PHPMYADMIN*/

CREATE TABLE usuarios(
id 					int(255) auto_increment not null, 
nombre_completo		varchar(255) not null,
celular				int(10) not null,
correo				varchar(50) not null,
password			varchar(255) not null,
CONSTRAINT pk_usuarios PRIMARY KEY(id),
CONSTRAINT uq_correo UNIQUE(correo),
CONSTRAINT uq_celular UNIQUE(celular)
)ENGINE=InnoDb;

CREATE TABLE interfaz_usuario(
id 					int(255) auto_increment not null,
usuario_id			int(255) not null,
imagen				varchar(255),
nombre_usuario		varchar(50) not null,
CONSTRAINT pk_interfaz_usuario PRIMARY KEY(id),
CONSTRAINT fk_usuario_id FOREIGN KEY(usuario_id) REFERENCES usuarios(id)
)ENGINE=InnoDb;

CREATE TABLE planes(
id 					int(255) auto_increment not null,
nombre_plan 		varchar(80) not null,
tiempo_duracion 	time not null,
precio				int(255) not null,
beneficios			text not null,
CONSTRAINT pk_planes PRIMARY KEY(id),
CONSTRAINT uq_nombre_plan UNIQUE(nombre_plan)
)ENGINE=InnoDb;

CREATE TABLE pago(
id 						int(255) auto_increment not null,
planes_id           	int(255) not null,
nombre_tarjeta			varchar(80) not null, 
numero_tarjeta      	int(16) not null,
dinero              	int(255) not null,
password_seguridad 	varchar(255) not null,
CONSTRAINT pk_pago PRIMARY KEY(id),
CONSTRAINT uq_numero_tarjeta UNIQUE(numero_tarjeta),
CONSTRAINT fk_planes_id FOREIGN KEY(planes_id) REFERENCES planes(id)
)ENGINE=InnoDb;

CREATE TABLE administradores(
id 					int(255) auto_increment not null,
nombre_completo		varchar(100)not null,
direccion			varchar(255) not null,
correo          	varchar(255) not null,
password			varchar(255) not null,
CONSTRAINT pk_administradores PRIMARY KEY(id)
)ENGINE=InnoDb;


CREATE TABLE categorias_peliculas(
id 					int(255) auto_increment not null,
administrador_id	int(255) not null,
nombre_categoria 	varchar(100) not null,
CONSTRAINT pk_categorias_peliculas PRIMARY KEY(id),
CONSTRAINT fk_administrador_id_peliculas FOREIGN KEY(administrador_id) REFERENCES administradores(id),
CONSTRAINT uq_nombre_categoria UNIQUE(nombre_categoria)
)ENGINE=InnoDb;

CREATE TABLE categorias_series(
id 					int(255) auto_increment not null,
administrador_id	int(255) not null,
nombre_categoria 	varchar(100) not null,
CONSTRAINT pk_categorias_series PRIMARY KEY(id),
CONSTRAINT fk_administrador_id_series FOREIGN KEY(administrador_id) REFERENCES administradores(id),
CONSTRAINT uq_nombre_categoria UNIQUE(nombre_categoria)
)ENGINE=InnoDb;


CREATE TABLE peliculas(
id 					int(255) auto_increment not null,
categoria_id		int(255) not null,
nombre_pelicula 	varchar(100) not null,
director 			varchar(80) not null,
sinopsis 			text not null,
imagen 				varchar(255) not null,
video 				varchar(255) not null,
fecha				date not null,
duracion 			time,
CONSTRAINT pk_peliculas PRIMARY KEY(id),
CONSTRAINT fk_categoria_id_peliculas FOREIGN KEY(categoria_id) REFERENCES categorias_peliculas(id),
CONSTRAINT uq_nombre_pelicula UNIQUE(nombre_pelicula)
)ENGINE=InnoDb;

CREATE TABLE series(
id  			int(255) auto_increment not null,
categoria_id 	int(255) not null,
nombre_serie 	varchar(60) not null,
director 	 	varchar(80) not null,
sinopsis 		text not null,
imagen 			varchar(255) not null,
CONSTRAINT pk_series PRIMARY KEY(id),
CONSTRAINT fk_categoria_id_series FOREIGN KEY(categoria_id) REFERENCES categorias_series(id),
CONSTRAINT uq_nombre_serie UNIQUE(nombre_serie)
)ENGINE=InnoDb;

CREATE TABLE actores(
id 				int(255) auto_increment not null,
pelicula_id 	int(255),
series_id 	 	int(255),
nombre_actor 	varchar(80) not null,
edad  			int(3) not null,
nacionalidad 	varchar(100) not null,
CONSTRAINT pk_actores PRIMARY KEY(id),
CONSTRAINT fk_pelicula_id FOREIGN KEY(pelicula_id) REFERENCES peliculas(id),
CONSTRAINT fk_series_id_actor FOREIGN KEY(series_id) REFERENCES series(id),
CONSTRAINT uq_nombre_actor UNIQUE(nombre_actor)
)ENGINE=InnoDb;

CREATE TABLE temporadas(
id 					int(255) auto_increment not null,
series_id  			int(255) not null,
nombre_temporada 	varchar(100) not null,
sinopsis 			text not null,
CONSTRAINT pk_temporadas PRIMARY KEY(id),
CONSTRAINT fk_series_id FOREIGN KEY(series_id) REFERENCES series(id)
)ENGINE=InnoDb;


CREATE TABLE capitulos(
id 					int(255) auto_increment not null,
temporada_id 		int(255) not null,
nombre_capitulo 	varchar(80) not null,
sinopsis 			text not null,
imagen 				varchar(255) not null,
video 				varchar(255) not null,
duracion 			time,
CONSTRAINT pk_capitulos PRIMARY KEY(id),
CONSTRAINT fk_temporada_id FOREIGN KEY(temporada_id) REFERENCES temporadas(id),
CONSTRAINT uq_nombre_capitulo UNIQUE(nombre_capitulo)
)ENGINE=InnoDb;
