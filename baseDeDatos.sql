CREATE DATABASE TORTERIA;
use TORTERIA;

CREATE TABLE CLIENTE(
    id_cliente INT NOT NULL AUTO_INCREMENT,
    nombre_cliente VARCHAR(20),
    primer_apellido VARCHAR(10),
    segundo_apellido VARCHAR(10),
    direccion VARCHAR(30),
    email VARCHAR(25) UNIQUE,
    contrasena VARCHAR(12),
	edad INT NOT NULL,
    PRIMARY KEY (id_cliente)
	);

CREATE TABLE EMAIL(
    idEmail INT NOT NULL AUTO_INCREMENT,
    email VARCHAR(25),
    PRIMARY KEY (idEmail)
);
    
CREATE TABLE CUPON (
    id_cupon INT NOT NULL AUTO_INCREMENT,
    codigo_cupon varchar(6),
    fecha_creacion DATE,
    fecha_vencimiento DATE,
    idCliente INT NOT NULL,
    idCompra INT NULL,
	PRIMARY KEY (id_cupon),
	FOREIGN KEY (idCliente) REFERENCES CLIENTE(id_cliente));
    
CREATE TABLE COMPRA (
    id_compra INT NOT NULL AUTO_INCREMENT,
    fecha_compra DATE,
    idCliente int not null,
    idCupon INT NOT NULL,
    PRIMARY KEY (id_compra),
    FOREIGN KEY (idCliente) REFERENCES CLIENTE(id_cliente),
    FOREIGN KEY (idCupon) REFERENCES CUPON(id_cupon));

CREATE TABLE MENU (
    id_platillo INT NOT NULL AUTO_INCREMENT,
    tipo_patillo INT NOT NULL,
    nombre_platillo VARCHAR(20),
    precio DECIMAL NOT NULL,
    descripcion VARCHAR(120),
    PRIMARY KEY (id_platillo));

CREATE TABLE INGREDIENTE_EXTRA (
    id_ingrediente INT NOT NULL AUTO_INCREMENT,
    nombre_ingrediente VARCHAR(20),
    precio DECIMAL NOT NULL,
    descripcion VARCHAR(45),
    PRIMARY KEY (id_ingrediente));

CREATE TABLE ORDEN (
    idCompra INT NOT NULL,
    idPlatillo INT NOT NULL,
    idIngrediente INT NOT NULL,
    FOREIGN KEY (idCompra) REFERENCES COMPRA(id_compra),
    FOREIGN KEY (idPlatillo) REFERENCES MENU(id_platillo),
    FOREIGN KEY (idIngrediente) REFERENCES INGREDIENTE_EXTRA(id_ingrediente));




-- Insertar 5 cupones para el cliente con ID 7
INSERT INTO CUPON (codigo_cupon, fecha_creacion, fecha_vencimiento, idCliente, idCompra)
VALUES ('CUPON1', '2023-01-01', '2023-02-01', 7, NULL);

INSERT INTO CUPON (codigo_cupon, fecha_creacion, fecha_vencimiento, idCliente, idCompra)
VALUES ('CUPON2', '2023-03-01', '2023-04-01', 7, NULL);

INSERT INTO CUPON (codigo_cupon, fecha_creacion, fecha_vencimiento, idCliente, idCompra)
VALUES ('CUPON3', '2023-05-01', '2023-06-01', 7, NULL);

INSERT INTO CUPON (codigo_cupon, fecha_creacion, fecha_vencimiento, idCliente, idCompra)
VALUES ('CUPON4', '2023-07-01', '2023-08-01', 7, NULL);

INSERT INTO CUPON (codigo_cupon, fecha_creacion, fecha_vencimiento, idCliente, idCompra)
VALUES ('CUPON5', '2023-09-01', '2023-10-01', 7, NULL);

-- Inserts para el cliente con ID 9
INSERT INTO CUPON (codigo_cupon, fecha_creacion, fecha_vencimiento, idCliente, idCompra)
VALUES ('CUPON6', '2023-01-01', '2023-02-01', 9, NULL);

INSERT INTO CUPON (codigo_cupon, fecha_creacion, fecha_vencimiento, idCliente, idCompra)
VALUES ('CUPON7', '2023-03-01', '2023-04-01', 9, NULL);

INSERT INTO CUPON (codigo_cupon, fecha_creacion, fecha_vencimiento, idCliente, idCompra)
VALUES ('CUPON8', '2023-05-01', '2023-06-01', 9, NULL);

-- Inserts para el cliente con ID 10
INSERT INTO CUPON (codigo_cupon, fecha_creacion, fecha_vencimiento, idCliente, idCompra)
VALUES ('CUPON9', '2023-07-01', '2023-08-01', 10, NULL);

INSERT INTO CUPON (codigo_cupon, fecha_creacion, fecha_vencimiento, idCliente, idCompra)
VALUES ('CUPO10', '2023-09-01', '2023-10-01', 10, NULL);