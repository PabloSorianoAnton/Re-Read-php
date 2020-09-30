## Semana del 21 - 25 de septiembre 2020 :white_check_mark:
Evolucionamos la página estática asociada al proyecto [reread](https://dannylarrea.github.io/reread "Proyecto HTML reread") a una página dinámica utilizando ```PHP``` y una [BBDD](https://github.com/dannylarrea/reread-php/blob/dev/db/reread.sql)
- Cambiamos la extensión de los ficheros .html a .php :bangbang: las rutas que se utilizan dentro de los ficheros también se han de cambiar!!
- Asociamos la base de datos con el proyecto, para ello creamos el **connection.php**
- Editamos el fichero **ebooks.php**: pintamos (con la ayuda del ```echo```) las [imágenes de los libros](https://github.com/dannylarrea/reread-php/tree/dev/img) recuperadas mediante una consulta en la base de datos

## Lunes 28 de septiembre 2020 (evolutivo a desarrollar) :mega::mega::mega:
**PHP**
1. Una vez realizado correctamente los cambios de la primera semana de clases, se ha de crear un **pull request** de ```dev → master``` para actualizar la rama master con el código final de dev
2. Hacer dinámico el apartado **Top ventas** (columna de la derecha):
    - Crear una nueva rama en GitHub para el desarrollo: **topventas** (recordad en local hacer ```git pull``` para bajar la rama)
    - Se ha de implementar este evolutivo en los tres ficheros .php:
        - index.php
        - libros.php
        - ebooks.php


- - - -
#### Recursos para escribir el fichero README.md:
- https://github.com/tchapi/markdown-cheatsheet
- https://github.com/ikatyang/emoji-cheat-sheet/blob/master/README.md