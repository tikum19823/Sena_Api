# Evidencia de desempeño: GA7-220501096-AA5-EV01 diseño y desarrollo de servicios web - caso 

Tomando como referencia lo visto en el componente formativo “Construcción de API” realizar el diseño y la 
codificación de un servicio web para el siguiente caso: 
Se requiere realizar un servicio web para un registro y un inicio de sesión. El servicio recibirá un usuario y 
una contraseña, si la autenticación es correcta saldrá un mensaje de autenticación satisfactoria en caso 
contrario debe devolver error en la autenticación. 
El código debe contener comentarios 
Se debe crear el proyecto utilizando herramientas de versionamiento.

## Frameworks
  - Node Js          Backend
  - Express          Backend
  - Mysql db:  Base de datos remota para pruebas
  - Visual Studio Code.


## Archivo app.js: 
Contiene la configuración de la aplicación y la conexión con la base de datos Mongo


## Estructura de carpetas:

## Src:          Carpeta principal del proyecto
## Controller:   Contiene las rutas y configuraciones de user y login
## Routes:       Contiene las rutas del proyecto.
## Views:        Contiene la vistas Login, Register y Home.


## Instalación

1. Clonar el repositorio.
    * git clone https://github.com/usuario/nombre-del-repositorio.git
2. Instalar las dependencias:
    * npm install, express, bcrypt",
    "body-parser",
    "express",
    "express-handlebars",
    "express-myconnection",
    "express-session",
    "mysql",
    "nodemon".

3. Inicializar el servidor:
   * npm run dev

## Para el inreso de sessión usar el endpoint: 

https://localhost:3000/login

