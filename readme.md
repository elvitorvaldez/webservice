<p align="center"><img src="https://davidgro1982.000webhostapp.com/loginvv/public/img/39993.jpg" width="15%" class="img-rounded"></p>



## Web Service hecho en Laravel

Este inicio de sesión muestra las operaciones básicas de un CRUD con los verbos HTTP solicitados para web service

- GET
- POST
- PUT
- DELETE

## Repositorio

Para hacer funcionar este repositorio en un ambiente local (además de clonar el repositorio), se requiere

- Montar la de la base de datos
- Modificar lo siguiente en el archivo .env 
	<br>-Los accesos a su base de datos local

## Funcionamiento (flujo)

Para probar este web service mediante postman, se requiere lo siguiente


Método GET 

- http://localhost/webservice/public/ListarCalif/{idAlumno}
- Invocará al método index de CalificacionesController
- Se pasa directamente la url colocando el id de un alumno con calificaciones registradas

Método POST

- http://localhost/webservice/public/AgregarCalif
- Invocará al método store de CalificacionesController
- En la sección body se agregan tres keys: id_t_usuarios {1}, id_t_materias {1} y calificacion {85}, mis datos doomies dueron los encerrados entre llaves

Método PUT

- http://localhost/webservice/public/CambiarCalif
- Invocará al método update de CalificacionesController
- En la sección body se agregan dos keys: id_t_calificacion {6}, y calificacion {70}, mis datos doomies dueron los encerrados entre llaves

Método DELETE

- http://localhost/webservice/public/BorrarCalif
- Invocará al método destroy de CalificacionesController
- En la sección body se agrega un keys: id_t_calificacion {6}, mis datos doomies dueron los encerrados entre llaves




