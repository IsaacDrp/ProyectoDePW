CREATE DATABASE TORTERIA;
use TORTERIA;

CREATE TABLE CLIENTE(
    id_cliente INT NOT NULL AUTO_INCREMENT,
    nombre_cliente VARCHAR(25),
    primer_apellido VARCHAR(20),
    segundo_apellido VARCHAR(20),
    direccion VARCHAR(50),
    email VARCHAR(255) UNIQUE,
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
    linkImagen VARCHAR(45),
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




-- Insertar 5 cupones para el cliente con ID 1
INSERT INTO CUPON (codigo_cupon, fecha_creacion, fecha_vencimiento, idCliente, idCompra)
VALUES ('CUPON1', '2023-01-01', '2023-02-01', 1, NULL);

INSERT INTO CUPON (codigo_cupon, fecha_creacion, fecha_vencimiento, idCliente, idCompra)
VALUES ('CUPON2', '2023-03-01', '2023-04-01', 1, NULL);

INSERT INTO CUPON (codigo_cupon, fecha_creacion, fecha_vencimiento, idCliente, idCompra)
VALUES ('CUPON3', '2023-05-01', '2023-06-01', 1, NULL);

INSERT INTO CUPON (codigo_cupon, fecha_creacion, fecha_vencimiento, idCliente, idCompra)
VALUES ('CUPON4', '2023-07-01', '2023-08-01', 1, NULL);

INSERT INTO CUPON (codigo_cupon, fecha_creacion, fecha_vencimiento, idCliente, idCompra)
VALUES ('CUPON5', '2023-09-01', '2023-10-01', 1, NULL);

-- Inserts para el cliente con ID 9
INSERT INTO CUPON (codigo_cupon, fecha_creacion, fecha_vencimiento, idCliente, idCompra)
VALUES ('CUPON6', '2023-01-01', '2023-02-01', 2, NULL);

INSERT INTO CUPON (codigo_cupon, fecha_creacion, fecha_vencimiento, idCliente, idCompra)
VALUES ('CUPON7', '2023-03-01', '2023-04-01', 2, NULL);

INSERT INTO CUPON (codigo_cupon, fecha_creacion, fecha_vencimiento, idCliente, idCompra)
VALUES ('CUPON8', '2023-05-01', '2023-06-01', 2, NULL);

-- Inserts para el cliente con ID 10
INSERT INTO CUPON (codigo_cupon, fecha_creacion, fecha_vencimiento, idCliente, idCompra)
VALUES ('CUPON9', '2023-07-01', '2023-08-01', 3, NULL);

INSERT INTO CUPON (codigo_cupon, fecha_creacion, fecha_vencimiento, idCliente, idCompra)
VALUES ('CUPO10', '2023-09-01', '2023-10-01', 3, NULL);


-- Insertar torta vegetariana
INSERT INTO MENU (tipo_patillo, nombre_platillo, precio, descripcion, linkImagen)
VALUES (1, 'Torta Vegetariana', 45.00, 'Torta llena de vegetales frescos y queso', 'imagen_vegetariana.jpg');

-- Insertar milanesa de res
INSERT INTO MENU (tipo_patillo, nombre_platillo, precio, descripcion, linkImagen)
VALUES (1, 'Milanesa de Res', 58.00, 'Deliciosa milanesa de res empanizada', 'imagen_milanesa_res.jpg');

-- Insertar milanesa de pollo
INSERT INTO MENU (tipo_patillo, nombre_platillo, precio, descripcion, linkImagen)
VALUES (1, 'Milanesa de Pollo', 58.00, 'Deliciosa milanesa de pollo empanizada', 'imagen_milanesa_pollo.jpg');

-- Insertar torta hawaiana
INSERT INTO MENU (tipo_patillo, nombre_platillo, precio, descripcion, linkImagen)
VALUES (1, 'Torta Hawaiana', 55.00, 'Exquisita torta con jamón, piña y queso', 'imagen_hawaiana.jpg');

-- Insertar torta de pierna
INSERT INTO MENU (tipo_patillo, nombre_platillo, precio, descripcion, linkImagen)
VALUES (1, 'Torta de Pierna', 55.00, 'Deliciosa torta con pierna de cerdo y condimentos especiales', 'imagen_pierna.jpg');

-- Insertar torta de chorizo
INSERT INTO MENU (tipo_patillo, nombre_platillo, precio, descripcion, linkImagen)
VALUES (1, 'Torta de Chorizo', 50.00, 'Sabrosa torta con chorizo, queso y condimentos especiales', 'imagen_chorizo.jpg');

-- Insertar torta de jamón (precio 45)
INSERT INTO MENU (tipo_patillo, nombre_platillo, precio, descripcion, linkImagen)
VALUES (1, 'Torta de Jamón', 45.00, 'Deliciosa torta de jamón con queso y vegetales', 'imagen_jamon.jpg');

-- Insertar torta de huevo
INSERT INTO MENU (tipo_patillo, nombre_platillo, precio, descripcion, linkImagen)
VALUES (1, 'Torta de Huevo', 35.00, 'Torta deliciosa con huevo, queso y condimentos especiales', 'imagen_huevo.jpg');

-- Insertar desayuno Huevo a la Mexicana
INSERT INTO MENU (tipo_patillo, nombre_platillo, precio, descripcion, linkImagen)
VALUES (2, 'Huevo a la Mexicana', 45.00, 'Huevos revueltos con tomate, cebolla, y chile al estilo mexicano', 'imagen_huevo_mexicana.jpg');

-- Insertar desayuno Huevo con Jamón
INSERT INTO MENU (tipo_patillo, nombre_platillo, precio, descripcion, linkImagen)
VALUES (2, 'Huevo con Jamón', 45.00, 'Huevos revueltos con trozos de jamón', 'imagen_huevo_jamon.jpg');

-- Insertar desayuno Huevos al Gusto
INSERT INTO MENU (tipo_patillo, nombre_platillo, precio, descripcion, linkImagen)
VALUES (2, 'Huevos al Gusto', 45.00, 'Huevos preparados según tu gusto con ingredientes a elección', 'imagen_huevos_al_gusto.jpg');

-- Insertar desayuno Sopa Maruchan Preparada
INSERT INTO MENU (tipo_patillo, nombre_platillo, precio, descripcion, linkImagen)
VALUES (2, 'Sopa Maruchan', 25.00, 'Sopa instantánea Maruchan preparada con ingredientes adicionales', 'imagen_sopa_maruchan.jpg');


-- Insertar refresco Coca-Cola 600ml
INSERT INTO MENU (tipo_patillo, nombre_platillo, precio, descripcion, linkImagen)
VALUES (3, 'Coca-Cola 600ml', 22.00, 'Refresco Coca-Cola en presentación de 600ml', 'imagen_coca_cola.jpg');

-- Insertar refresco Coca-Cola de Vidrio 500ml
INSERT INTO MENU (tipo_patillo, nombre_platillo, precio, descripcion, linkImagen)
VALUES (3, 'Coca Vidrio 500ml', 22.00, 'Refresco Coca-Cola en botella de vidrio de 500ml', 'imagen_coca_cola_vidrio.jpg');

-- Insertar refresco Coca-Cola de Vidrio 350ml
INSERT INTO MENU (tipo_patillo, nombre_platillo, precio, descripcion, linkImagen)
VALUES (3, 'Coca Vidrio 350ml', 20.00, 'Refresco Coca-Cola en botella de vidrio de 350ml', 'imagen_coca_cola_vidrio_350ml.jpg');

-- Insertar refresco Sidral Mundet
INSERT INTO MENU (tipo_patillo, nombre_platillo, precio, descripcion, linkImagen)
VALUES (3, 'Sidral Mundet', 20.00, 'Refresco Sidral Mundet', 'imagen_sidral_mundet.jpg');

-- Insertar refresco Mirinda
INSERT INTO MENU (tipo_patillo, nombre_platillo, precio, descripcion, linkImagen)
VALUES (3, 'Mirinda', 20.00, 'Refresco Mirinda', 'imagen_mirinda.jpg');

-- Insertar refresco Squirt Quitased
INSERT INTO MENU (tipo_patillo, nombre_platillo, precio, descripcion, linkImagen)
VALUES (3, 'Squirt Quitased', 20.00, 'Refresco Squirt Quitased', 'imagen_squirt_quitased.jpg');

-- Insertar jugo Boing de Mango en presentación de vidrio
INSERT INTO MENU (tipo_patillo, nombre_platillo, precio, descripcion, linkImagen)
VALUES (3, 'Boing de Mango', 20.00, 'Jugo Boing de Mango en presentación de vidrio', 'imagen_boing_mango_vidrio.jpg');

-- Insertar jugo Del Valle Manzana en presentación de vidrio
INSERT INTO MENU (tipo_patillo, nombre_platillo, precio, descripcion, linkImagen)
VALUES (3, 'Del Valle Manzana', 20.00, 'Jugo Del Valle sabor Manzana en presentación de vidrio', 'imagen_del_valle_manzana_vidrio.jpg');

-- Insertar jugo Jumex Durazno en presentación de vidrio
INSERT INTO MENU (tipo_patillo, nombre_platillo, precio, descripcion, linkImagen)
VALUES (3, 'Jumex de Durazno', 20.00, 'Jugo Jumex sabor Durazno en presentación de vidrio', 'imagen_jumex_durazno_vidrio.jpg');

-- Insertar jugo Boing Uva en presentación de vidrio
INSERT INTO MENU (tipo_patillo, nombre_platillo, precio, descripcion, linkImagen)
VALUES (3, 'Boing de Uva', 20.00, 'Jugo Boing sabor Uva en presentación de vidrio', 'imagen_boing_uva_vidrio.jpg');

ALTER TABLE CUPON
ADD CONSTRAINT fk_idCliente
FOREIGN KEY (idCliente) 
REFERENCES CLIENTE(id_cliente)
ON DELETE CASCADE;