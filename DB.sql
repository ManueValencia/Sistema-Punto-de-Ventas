drop database laexquisita;

create database laexquisita;
use laexquisita;

/*drop table cliente;*/
create table if not exists cliente(
/*nombre,apellidop,apellidop,email,pass,fecha,codigop*/

	idCliente int primary key not null AUTO_INCREMENT,
	nombre varchar(50) not null,
	apellidop varchar(50) not null,
	apellidom varchar(50) not null,
	email varchar(50) not null,
	pass varchar(50) not null,
	tel int not null,
	fecha date default null,
	codigop int not null
)ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;



/*drop table producto;*/
create table if not exists producto(
/*nombre,descripcion, Precio, tamaño, cantidad,img */
idProducto int not null primary key auto_increment,
nombre varchar(40)not null,
descripcion varchar(200)not null,
precio int not null,
tamanio varchar(10)not null,
cantidad int not null,
img varchar(100),

idTipo int not null, constraint idTipo foreign key(idTipo) references tipo(idTipo)
on delete cascade on update cascade

)ENGINE=INNODB;

create table if not exists carrito(
/*nombre,descripcion, Precio, tamaño, cantidad,img */
idCarrito int not null primary key auto_increment,
nombre varchar(40)not null,
descripcion varchar(200)not null,
precio int not null,
tamanio varchar(10)not null,
cantidad int not null,
img varchar(100),

idProducto int not null, constraint idProducto foreign key(idProducto) references producto(idProducto)
on delete cascade on update cascade,

idCliente int not null, constraint idCliente foreign key(idCliente) references cliente(idCliente)
on delete cascade on update cascade



)ENGINE=INNODB;


create table if not exists tipo(
idTipo int not null primary key auto_increment,
nombre varchar(50) not null
)ENGINE=INNODB;

insert into tipo(nombre) value ('Pastel') , ('Galleta'), ('Tarta');

Insert into producto (nombre,descripcion,precio,tamanio,cantidad, img, idTipo) 
values
			/*PASTELES*/
		('Pastel de xv','1ipsum dolor sit amet, consectetur adipisicing elit, 
								sed do eiusmod.Lorem ipsum dolor sit amet, consectetur 
								adipisicing elit, sed do eiusmod.Lorem ipsum dolor sit
                                amet, consecte drgeg srgw.',800,'mediano',1,'p1.jpg',1),
                                
		('pastel infantil','3ipsum dolor sit amet, consectetur adipisicing elit, 
								sed do eiusmod.Lorem ipsum dolor sit amet, consectetur 
								adipisicing elit, sed do eiusmod.Lorem ipsum dolor sit
                                amet, consecte drgeg srgw.',430,'grande',1,'p2.jpg',1),
		
        ('pastel de bodas','3ipsum dolor sit amet, consectetur adipisicing elit, 
								sed do eiusmod.Lorem ipsum dolor sit amet, consectetur 
								adipisicing elit, sed do eiusmod.Lorem ipsum dolor sit
                                amet, consecte drgeg srgw.',1500,'pisos',1,'p3.jpg',1), 
                                
        ('pastel de baby shower','3ipsum dolor sit amet, consectetur adipisicing elit, 
								sed do eiusmod.Lorem ipsum dolor sit amet, consectetur 
								adipisicing elit, sed do eiusmod.Lorem ipsum dolor sit
                                amet, consecte drgeg srgw.',590,'mediano',1,'p4.jpg',1),                            
                                
		('pastel de chocolate','3ipsum dolor sit amet, consectetur adipisicing elit, 
								sed do eiusmod.Lorem ipsum dolor sit amet, consectetur 
								adipisicing elit, sed do eiusmod.Lorem ipsum dolor sit
                                amet, consecte drgeg srgw.',400,'grande',1,'p5.jpg',1),                       
                                
                                
				/*TARTAS*/           
		
        ('Chocoflan','2ipsum dolor sit amet, consectetur adipisicing elit, 
								sed do eiusmod.Lorem ipsum dolor sit amet, consectetur 
								adipisicing elit, sed do eiusmod.Lorem ipsum dolor sit
                                amet, consecte drgeg srgw.',300,'mediano',1,'t1.jpg',2),
                                
		('Tarta de chocolate','2ipsum dolor sit amet, consectetur adipisicing elit, 
								sed do eiusmod.Lorem ipsum dolor sit amet, consectetur 
								adipisicing elit, sed do eiusmod.Lorem ipsum dolor sit
                                amet, consecte drgeg srgw.',250,'mediano',1,'t2.jpg',2),                        
                                
		('Tarta de queso','2ipsum dolor sit amet, consectetur adipisicing elit, 
								sed do eiusmod.Lorem ipsum dolor sit amet, consectetur 
								adipisicing elit, sed do eiusmod.Lorem ipsum dolor sit
                                amet, consecte drgeg srgw.',350,'mediano',1,'t3.jpg',2),                        
                                
		('Tarta con frutos','2ipsum dolor sit amet, consectetur adipisicing elit, 
								sed do eiusmod.Lorem ipsum dolor sit amet, consectetur 
								adipisicing elit, sed do eiusmod.Lorem ipsum dolor sit
                                amet, consecte drgeg srgw.',380,'mediano',1,'t4.jpg',2),                        
                                
       	('Tarta de oreo','2ipsum dolor sit amet, consectetur adipisicing elit, 
								sed do eiusmod.Lorem ipsum dolor sit amet, consectetur 
								adipisicing elit, sed do eiusmod.Lorem ipsum dolor sit
                                amet, consecte drgeg srgw.',360,'mediano',1,'t5.jpg',2),                          
                                
                                
				/*GALLETAS*/              
		
        ('Galletas de chocolate','3ipsum dolor sit amet, consectetur adipisicing elit, 
								sed do eiusmod.Lorem ipsum dolor sit amet, consectetur 
								adipisicing elit, sed do eiusmod.Lorem ipsum dolor sit
                                amet, consecte drgeg srgw.',40,'mediana',13,'g1.jpg',3),
        
        ('Galletas con dulce','3ipsum dolor sit amet, consectetur adipisicing elit, 
								sed do eiusmod.Lorem ipsum dolor sit amet, consectetur 
								adipisicing elit, sed do eiusmod.Lorem ipsum dolor sit
                                amet, consecte drgeg srgw.',30,'chicas',13,'g2.jpg',3),
		
		('Galletas de avena','3ipsum dolor sit amet, consectetur adipisicing elit, 
								sed do eiusmod.Lorem ipsum dolor sit amet, consectetur 
								adipisicing elit, sed do eiusmod.Lorem ipsum dolor sit
                                amet, consecte drgeg srgw.',35,'gramnde',13,'g3.jpg',3), 
		
         ('Galletas de naranja','3ipsum dolor sit amet, consectetur adipisicing elit, 
								sed do eiusmod.Lorem ipsum dolor sit amet, consectetur 
								adipisicing elit, sed do eiusmod.Lorem ipsum dolor sit
                                amet, consecte drgeg srgw.',45,'chicas',13,'g4.jpg',3),
                                
		('Galletas de figuras(varias)','3ipsum dolor sit amet, consectetur adipisicing elit, 
								sed do eiusmod.Lorem ipsum dolor sit amet, consectetur 
								adipisicing elit, sed do eiusmod.Lorem ipsum dolor sit
                                amet, consecte drgeg srgw.',25,'chicas',13,'g5.jpg',3);                     
                                

select * from cliente;
select * from producto;
select * from carrito;