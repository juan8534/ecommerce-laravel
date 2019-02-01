# ecommerce-laravel

Dependencias:
-php version 5.6
-composer
-mysql 5.6

Luego de tener todas las dependencias descargamos el repositorio y nos dirigimos a la carpeta llamada base-de-datos e importamos el archivo sql a nuestro motor de base de datos.

Nos dirigimos hasta el proyecto y modificamos el archivo .env que contiene la conexion a nuestra base de datos modificando los siguientes valores:

DB_CONNECTION=mysql
DB_HOST="nombre de nuestro host" (localhost)
DB_PORT="puerto mysql" (3306)
DB_DATABASE="nombre base de datos" (products_course)
DB_USERNAME="nombre usuario"
DB_PASSWORD="contraseña"

Luego de importar la base de datos de manera local procedemos a entrar desde un terminal a la raiz del proyecto:

**D:\ecommerce-laravel**
 
 y digitamos el siguiente comando:
 
 **composer update**
 
 por medio de este comando se descargaran todas las dependencias de nuestro proyecto.
 
 Una vez descargadas todas las dependencias y configurada la conexion a nuestra base de datos ejecutamos el siguiente comando:
 
 **php artisan run serve**
 
 se nos mostrara una url con su respectivo puerto al cual podremos acceder.
