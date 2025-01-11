Facturación de Supermercado en PHP

Este proyecto es una aplicación desarrollada en PHP que permite gestionar y calcular la facturación en un supermercado. A través de un formulario web, se recolectan datos del cliente y de los productos, se calculan valores como IVA, descuentos, y el total a pagar, y se genera un reporte detallado de la factura.

Características

1. Recolección de datos del cliente:

Número de factura.

Fecha de venta.

Nombre, cédula, dirección, teléfono, y correo electrónico.



2. Gestión de productos:

Registro de productos con detalles como código, nombre, cantidad, valor unitario, IVA, descuentos, y valor neto.

Cálculo automático de IVA y descuentos según los valores ingresados.



3. Cálculo de totales:

IVA total, descuentos totales, y valor neto total.

Producto de mayor y menor valor.



4. Interfaz intuitiva:

Estilo moderno con colores oscuros y diseño centrado para una experiencia amigable.



5. Reporte final:

Generación de una factura organizada con totales y detalles relevantes.




Tecnologías Utilizadas

PHP: Para la lógica del servidor y el procesamiento de datos.

HTML y CSS: Para la interfaz de usuario.

XAMPP: Requisito para ejecutar el proyecto en un entorno local.


Requisitos

1. XAMPP instalado en tu computadora.

Descarga desde: https://www.apachefriends.org/es/index.html



2. Navegador web compatible (Chrome, Firefox, etc.).



Configuración

1. Descarga y coloca el proyecto:

Descarga los archivos y colócalos en la carpeta htdocs de XAMPP.

Ejemplo:

C:\xampp\htdocs\FacturacionSupermercado-PHP\



2. Inicia XAMPP:

Abre el panel de control de XAMPP y enciende el módulo Apache.



3. Accede al proyecto:

En tu navegador, ve a la URL:

http://localhost/FacturacionSupermercado-PHP/supermercado.php




Uso del Proyecto

1. Formulario inicial:

Ingresa los datos del cliente.

Indica la cantidad de productos a registrar.

Haz clic en "Generar" para mostrar el formulario de productos.



2. Formulario de productos:

Ingresa los detalles de cada producto:

Código, nombre, cantidad, valor unitario.

IVA (en porcentaje) y descuento (en porcentaje).


Haz clic en "Calcular" para generar la factura.



3. Factura generada:

Revisa los detalles de la factura, incluyendo:

Totales de IVA, descuentos, y valor neto.

Productos de mayor y menor valor.


El reporte final se muestra en una tabla organizada.




Detalles del Código

1. Formulario principal: Recoge la información básica del cliente y la cantidad de productos.


2. Procesamiento de productos: Calcula valores como IVA y descuentos con validaciones.


3. Reporte final: Genera un resumen detallado de la factura con todos los totales.



Estructura del Proyecto

FacturacionSupermercado-PHP/
├── supermercado.php  # Código principal del proyecto
└── README.md         # Instrucciones y detalles del proyecto

Notas

Los valores de IVA deben estar entre 0% y 19%.

Los descuentos deben estar entre 0% y 90%.

El valor promedio de los productos vendidos se calcula automáticamente si hay productos registrados.


Créditos

Proyecto desarrollado por Daniel Esteban Alegría Zamora.

