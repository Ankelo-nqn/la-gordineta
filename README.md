# la-gordineta
Trabajo final full-stack, contabilizando compras y ventas


## Curso Full Stack 2022
### Sistema de gestión "La Gordineta"
#### Angel Cellillo

Desarrollo.
La resolución del presente trabajo deberá contar como mínimo con los siguientes puntos:
1- Descripción general del sistema web a desarrollar.
2- Determinar los roles o perfiles de todos los usuarios del sistema.
3- Identificar las tablas principales de la base de datos y las relaciones entre ellas.
4- Describir brevemente los diferentes módulos del sistema y las
funcionalidades que cada uno tiene para sus usuarios.


1.- Se requiere un sistema de gestión que permita controlar los ingresos y egresos de dinero de una empresa dedidaca a la venta de alimentos. Se consideraran para ello ingresos por ventas y egresos por compras de mercaderías y gastos.

2.- En el sistema se consideraran 3 tipos de usuarios:
	- Usuario "compras", encargado de los egresos de dinero por compras de mercaderías y/o gastos asociados, limitado a este ámbito
	- Usuario "ventas", encargado de registrar todos los movimientos por ventas, limitado a este ámbito
	- Usuario "administrador", con acceso a todos los puntos del sistema

3,- El sistema contará con las siguientes tablas en su base de datos:
	- usuarios
	- productos
	- rubros 
	- clientes
	- proveedores

	Relaciones entre tablas:

	- usuarios: integrará todos los datos correspondientes de los usuarios del sistema, así como también los permisos asignados a las diferentes áreas del sistema
	- productos: podrán ser accedidos por todos los usuarios del sistema a precio de venta, con restricción de usuario a los precios de costo y datos de proveedor.
	- rubros: serán asinados y accedidos unicamente por los usuarios administradores y solo vistos por otros usuarios
	- clientes: cargados por el usuario administrador, recordemos tiene acceso total a las tablas de la base, y consultados y utilizados en las registraciones por los usuarios con permisos de "ventas"
	- proveedores: cargados por el usuario administrador, y consultados y utilizados por los usuarios con permisos de "ventas"


	Campos asignados ( lista no exhaustiva ) 

		usuarios:
			nombre y apellido
			tipo de usuario
			activo/inactivo
			dni
			...
		productos:
			descripción
			precio de costo
			precio de venta
			proveedor
			stock
			...		
		rubros:
			mercaderías de reventa
			combustibles y lubricantes
			gastos generales
			...
		clientes:
			nombre
			cuit
			forma de pago
			...
		proveedores:
			nombre
			cuit
			condiciones de venta
			...
		
4.- El sistema consta de los siguientes módulos:
		
		Inicio
		Carga de movimientos
		Muestra movimientos y saldos
		...

En inicio el sistema valida al usuario y deriva al/los programas correspondientes
En cargas de movimientos, el usuario carga los datos compatibles con los permisos asignados, en este caso, egresos para los usuarios "compras", ingresos para los usuarios "ventas"
En muestra movimientos y saldos el sistema rastrea y sumariza los datos de la base de datos, recorriendo sus tablas y acumulando los datos que sean necesarios.



Conclusión:

Este es un esbozo, elemental, del sistema de gestión utilizado. Para su desarrollo se requiera utilizar lenguajes, framewords y herramientas, en mi caso: HTML, CSS, Bootstrap, MySQL, XAMPP, PHP
La idea es que en esta mecánica simple se pueda ir ampliando coordinando el día a día real con el desarrollo del sistema, que en realidad fue lo que inspiró la idea del mismo. La idea inicial surgió cuando en mi propio negocio, hasta ahora manejado con planilla de cálculo, me plantee esta idea para automatizar los cálculos que hasta ahora eran sumarizados con tablas dinámicas. Útiles pero laboriosas y propensas a errores humanos que planeo disminuir


Conclusión 2:

Me gustó mucho el desarrollo del curso. Realmente muy ameno la forma en que se expusieron los contenidos, fue muy claro para mí, que si bien tenía "idea" de lo que estábamos trabajando, nunca había podido redondear completamente las ideas haciendo algo, que aunque incipiente, sea funcional.

Muchas gracias!

pd: este documento puede consultarse on line en la siguiente dirección:
		 https://la-gordineta
	y el código desarrollado aquí:
		https://la-gordineta
