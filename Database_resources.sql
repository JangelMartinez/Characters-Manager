CREATE DATABASE IF NOT EXISTS Resources;
USE Resources;

CREATE TABLE IF NOT EXISTS Users(
	ID int(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	email varchar(100) NOT NULL UNIQUE,
	password char(40) NOT NULL,
	token char(40) DEFAULT NULL, -- Token de seguridad
	created datetime DEFAULT CURRENT_TIMESTAMP
);


CREATE TABLE IF NOT EXISTS Personaje(
	ID int(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	ID_user int(10) NOT NULL,
	name varchar(100) NOT NULL,
	surname varchar (150),
	listable boolean DEFAULT true,
	sexo ENUM ('masculino', 'femenino', 'no-binario'),
	identidad_genero varchar(100),
	ori_sexual varchar(100),
	raza varchar (100),
	religion varchar (100),
	profesión varchar (100),
	objetivo text,
	personalidad text,
	idiomas text,
	tipo_alimentacion varchar(100),
	fecha_nacimiento date,
	Historia text,
	Notas text,
	color_pelo varchar(50) DEFAULT NULL,
	corte_pelo varchar(50) DEFAULT NULL,
	color_ojos varchar(50) DEFAULT NULL,
	photo varchar(100), -- URL
	complexion varchar(50),
	altura tinyint unsigned,
	ropa text,
	gestos text,
	CONSTRAINT FOREIGN KEY (ID_user) REFERENCES Users(ID) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE IF NOT EXISTS personajes_relacionados(
	ID int(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	ID_personaje_principal int(10) NOT NULL,
	ID_personaje_secundario int(10) NOT NULL,
	tipo_relacion varchar(100) DEFAULT NULL,
	CONSTRAINT FOREIGN KEY (ID_personaje_principal) REFERENCES Personaje(ID) ON DELETE CASCADE ON UPDATE CASCADE,
	CONSTRAINT FOREIGN KEY (ID_personaje_secundario) REFERENCES Personaje(ID) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE IF NOT EXISTS more_info(
	ID int(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	ID_personaje int(10) NOT NULL,
	Tipo ENUM ('Habilidad','Debilidad','Objeto','Mascota','Afición'),
	Descripcion text,
	CONSTRAINT FOREIGN KEY (ID_personaje) REFERENCES Personaje(ID) ON DELETE CASCADE ON UPDATE CASCADE
);


CREATE TABLE IF NOT EXISTS favoritos(
	ID_user int(10) NOT NULL,
	ID_personaje int(10) NOT NULL,
	Notas text,
	CONSTRAINT FOREIGN KEY (ID_personaje) REFERENCES Personaje(ID) ON DELETE CASCADE ON UPDATE CASCADE,
	CONSTRAINT FOREIGN KEY (ID_user) REFERENCES Users(ID) ON DELETE CASCADE ON UPDATE CASCADE
);

