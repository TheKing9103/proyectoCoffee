<?php
    require_once "models/DataBase.php";
    if (!isset($_REQUEST['c'])) {
        require_once "controllers/Adimin.php";
        $controller = new Dashboard;
        $controller->main();
    } else {
        $controller = $_REQUEST['c'];
        require_once "controllers/" . $controller . ".php";
        $controller = new $controller;
        $action = isset($_REQUEST['a']) ? $_REQUEST['a'] : 'main';
        call_user_func(array($controller, $action));
    }

/*


Esta línea incluye el archivo "models/DataBase.php" en el script actual. Este archivo probablemente sea responsable de establecer una conexión a la base de datos.

**```php
if (!isset($_REQUEST['c'])) {
```**

Esta línea verifica si existe una variable llamada "c" en el array superglobal $_REQUEST. El array superglobal $_REQUEST contiene todos los datos enviados al script a través de los métodos GET y POST.

**```php
require_once "controllers/Adimin.php";
$controller = new Dashboard;
$controller->main();
```**

Si la variable "c" no existe, se ejecuta este bloque de código. Asume que el usuario está accediendo al controlador predeterminado, que es "Dashboard". Incluye el archivo "controllers/Adimin.php", que probablemente contenga la clase de controlador Dashboard. Luego, crea un objeto del controlador Dashboard y llama a su método main().

**```php
} else {
```**

Esta línea marca el comienzo del bloque else, que se ejecuta si la variable "c" existe.

**```php
$controller = $_REQUEST['c'];
require_once "controllers/" . $controller . ".php";
```**

Esta línea asigna el valor de la variable "c" a la variable $controller. La variable "c" contiene el nombre del controlador a utilizar. Luego, incluye el archivo de controlador correspondiente, que se encuentra en el directorio "controllers".

**```php
$controller = new $controller;
```**

Esta línea crea una instancia de la clase de controlador utilizando la técnica de instanciación dinámica. La técnica de instanciación dinámica le permite crear una instancia de una clase sin conocer su nombre de antemano. En este caso, el nombre de la clase se almacena en la variable $controller.

**```php
$action = isset($_REQUEST['a']) ? $_REQUEST['a'] : 'main';
```**

Esta línea verifica si existe una variable llamada "a" en el array superglobal $_REQUEST. Si existe, asigna su valor a la variable $action. De lo contrario, asigna el valor "main" a la variable $action.

**```php
call_user_func(array($controller, $action));
```**

Esta línea llama al método de acción especificado del objeto de controlador. La función call_user_func() le permite llamar a un método sin conocer su nombre de antemano. En este caso, el nombre del método se almacena en la variable $action.

En resumen, este código es responsable de enrutar las solicitudes al controlador y acción apropiados según los parámetros de la URL. También maneja el caso predeterminado cuando no se especifica un controlador o acción específicos.

Aquí hay algunos ejemplos de cómo se puede usar este código:

* Si la URL es `http://example.com/`, el código usará el controlador `Dashboard` y el método `main()`.
* Si la URL es `http://example.com/c=Productos`, el código usará el controlador `Productos` y el método `main()`.
* Si la URL es `http://example.com/c=Productos/a=mostrar`, el código usará el controlador `Productos` y el método `mostrar()`.

Espero que esto ayude!


*/



?>

