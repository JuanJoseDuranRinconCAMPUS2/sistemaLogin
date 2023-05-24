# Comandos php

## "DIR"

Muestra la ruta del archivo en cuestion

### **ejemplo**

```php
echo __DIR__; //resultado: C:\xampp\htdocs\proyectosPHP\sistemaLogin\model
```

## ***spl_autoload_register***

En PHP, la función `spl_autoload_register` se utiliza para registrar una o más funciones de autoloading en el sistema de carga automática de clases.

La carga automática de clases es un mecanismo que permite cargar automáticamente las clases en tiempo de ejecución cuando se utilizan por primera vez en el código, sin necesidad de incluir manualmente los archivos de clase correspondientes.

### **ejemplo**

```php
function miAutoloader($nombreClase) {
    // Lógica para cargar el archivo de la clase
    require_once 'clases/' . $nombreClase . '.php';
}

spl_autoload_register('miAutoloader');

// Ahora puedes usar las clases sin necesidad de incluir manualmente los archivos
$objeto = new MiClase();
async function enviar(){
    let config = {
        method: "GET", 
        headers: {
            'Content-Type': 'application/json'
        }
    }
    console.log(await (await fetch("http://marcosfenixphp.rf.gd/23_05_2023/model/api.php",config)).text());
}
enviar();
```

## 