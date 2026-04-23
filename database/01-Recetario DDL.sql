USE ESDLC;

/* Los tipos de datos son de prueba, se tienen que modificar para adaptarse al dataset */

CREATE TABLE recetas(
id_receta VARCHAR(50) PRIMARY KEY UNIQUE,
nombre VARCHAR(50),
descripcion VARCHAR(50),
instrucciones TEXT,
imagen TEXT,
tiempo ENUM('10 Min', '20 Min', '30 min', '1 Hora', '2 Horas'),
dificultad ENUM('Fácil', 'Medio', 'Hard'),
tecnicas_culinarias ENUM('Ahumar','curar','secar','Plancha','Caramelizar'),
tipo_cocina ENUM('Italiana', 'Japonesa', 'Francesa', 'Española', 'India', 'China'),
valor_nutricional SMALLINT,
fecha_publicacion DATE,
FULLTEXT(nombre)
);

CREATE TABLE cuentas(
id_cuenta VARCHAR(50) PRIMARY KEY UNIQUE,
nombre VARCHAR(50),
correo VARCHAR(50),
contraseña VARCHAR(50)
);

CREATE TABLE seguir(
seguidor VARCHAR(50),
seguido VARCHAR(50),
PRIMARY KEY (seguidor, seguido),
FOREIGN KEY (seguidor) REFERENCES cuentas(id_cuenta) ON DELETE CASCADE ON UPDATE CASCADE,
FOREIGN KEY (seguido) REFERENCES cuentas(id_cuenta) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE interactuar(
cuenta VARCHAR(50),
receta VARCHAR(50),
PRIMARY KEY (cuenta, receta),
FOREIGN KEY (cuenta) REFERENCES cuentas(id_cuenta) ON DELETE CASCADE ON UPDATE CASCADE,
FOREIGN KEY (receta) REFERENCES recetas(id_receta) ON DELETE CASCADE ON UPDATE CASCADE,
valoracion ENUM('0','1','2','3','4','5','6','7','8','9','10'),
comentario VARCHAR(300),
votos_positivos INT,
fecha_publicacion DATE
);

CREATE TABLE ingredientes(
id_ingrediente VARCHAR(50) PRIMARY KEY UNIQUE,
nombre VARCHAR(50),
ud_base VARCHAR(3),
alergenos ENUM('Lactosa','Gluten','Soja','Huevos','Sésamo')
);

CREATE TABLE incluir(
id_receta VARCHAR(50),
id_ingrediente VARCHAR(50),
PRIMARY KEY (id_receta, id_ingrediente),
FOREIGN KEY (id_receta) REFERENCES recetas(id_receta) ON DELETE CASCADE ON UPDATE CASCADE,
FOREIGN KEY (id_ingrediente) REFERENCES ingredientes(id_ingrediente) ON DELETE CASCADE ON UPDATE CASCADE
);
