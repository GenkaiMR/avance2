create database prueba

create table puesto(
    clave int PRIMARY KEY AUTO_INCREMENT,
    nombre varchar (20) not null
)

insert into puesto (clave, nombre) values (1, 'Supervisor'),
(2, 'Operador')

create table rol(
    numero int PRIMARY KEY AUTO_INCREMENT not null,
    nombre varchar (30) not null
)

insert into rol (numero, nombre) values (1, 'Basico'),
(2, 'Administrador'),
(3, 'Administrador General')

create table usuario(
    num int primary key AUTO_INCREMENT not null,
    username varchar(15) not null,
    clave varchar(20) not null,
    rol int not null,
    foreign key (rol) references rol(numero)
)

insert into usuario(num, username, clave, rol) values (1,'admin', '13245', 3),
(2,'amedina', '123456', 2),
(3,'mramirez', '123456', 2)

create table empleado(
    numero int PRIMARY KEY AUTO_INCREMENT,
    nombre varchar (30) not null,
    primApellido varchar (30) not null,
    segApellido varchar (30) null,
    email varchar (50) not null,
    usuario int,
    puesto int,
    foreign key (usuario) references usuario(num),
    foreign key (puesto) references puesto(clave)
)

insert into empleado (numero, nombre, primApellido, segApellido, email, usuario, puesto) values
(1, 'Alan', 'Medina', 'Becerra', 'alanoswaldo53@gmail.com', 2, 1),
(2, 'Marcos', 'Ramirez', 'Navarro', 'marcos@gmail.com', 3, 1)












update empleado set usuario = 3 where numero = 2

select 
e.numero, e.nombre, e.primApellido, e.segApellido,
u.username, p.nombre as Puesto,
r.nombre as Rol
from empleado as e 
inner join usuario as u on e.usuario = u.num
inner join puesto as p on e.puesto = p.clave 
inner join rol as r on u.rol = r.numero
where u.username = 'mramirez'

SELECT 
    CONCAT(
    IFNULL(CONCAT(e.nombre, ' '), ' '),
    IFNULL(CONCAT(e.primApellido, ' '), ' '),
    IFNULL(CONCAT(e.segApellido, ' '), ' ')
) AS nombre
FROM empleado AS e 
INNER JOIN usuario AS u ON e.usuario = u.num
WHERE u.username = 'amedina'

SELECT 
                    CONCAT(IFNULL(CONCAT(e.nombre, ' '), ''),
                           IFNULL(CONCAT(e.primApellido, ' '), ''),
                           IFNULL(CONCAT(e.segApellido, ' '), '')) AS Nombre,
                    p.nombre AS Puesto,
                    r.nombre AS Rol
                FROM empleado AS e 
                INNER JOIN usuario AS u ON e.usuario = u.num
                INNER JOIN puesto AS p ON e.puesto = p.clave 
                INNER JOIN rol AS r ON u.rol = r.numero
                WHERE u.username = 'amedina'


create table empleado(
    numero int PRIMARY KEY AUTO_INCREMENT not null,
    nombre not null,
    primApellido not null,
    segApellido,
    email not null,
)

create table usuario(
    numero int PRIMARY KEY AUTO_INCREMENT not null,
    nombUsuario not null,
    contrasena not null,
)

create table rol(
    numero int PRIMARY KEY AUTO_INCREMENT not null,
    nombre not null
)

create table puesto(
    clave int PRIMARY KEY not null,
    nombre not null
)

create table cliente(
    numero  int PRIMARY KEY AUTO_INCREMENT not null,
    nombreFiscal not null unique,
    nombreCont not null,
    primApellido not null,
    segApellido,
    email not null,
    numTel not null
)

create table orden(
    numero int PRIMARY KEY AUTO_INCREMENT not null,
    fechaOrden not null,
    fechaInicio not null,
    fechaFinal not null,
)

create table lote(
    numero int PRIMARY KEY AUTO_INCREMENT not null,
    tamano not null,
    cantidad not null,
)

create table producto(
    numero  int PRIMARY KEY AUTO_INCREMENT not null,
    descripcion,
    fechaCad not null,
    fechaElab not null,
    nombreProd not null,
)

create table pedido(
    numero int PRIMARY KEY AUTO_INCREMENT not null,
    fecha not null,
)

create table tip_producto(
    codigo PRIMARY KEY not null,
    nombre not null,
    descripcion,
)

create table ingredientes(
    codigo PRIMARY KEY not null,
    descripcion,
)

create table ingr_activo(
    codigo PRIMARY KEY not null,
    nomGenerico not null,
    nomIngrediente not null,
    cantActivo
)

create table tip_presentacion(
    codigo PRIMARY KEY not null,
    presentacion not null,
    unidadMedicion not null,
)

create table tip_embalaje(
    codigo PRIMARY KEY not null,
    nombre not null,
    cantidad not null
)





select * from usuario