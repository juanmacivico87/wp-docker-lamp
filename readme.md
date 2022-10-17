# WP DOCKER LAMP

Este repositorio contiene un contenedor de Docker para crear un servidor LAMP con un WordPress básico.

## Instalación

1. Entra en la [URL del repositorio](https://github.com/juanmacivico87/wp-docker-lamp). Seguramente, si estás leyendo esto, ya estarás en ella.
2. Ve al directorio en el que deseas tener el contenedor de Docker.
3. Abre una consola de comandos en esta ruta y ejecuta el comando ```git clone https://github.com/juanmacivico87/wp-docker-lamp.git```.
4. Abre una terminal en tu sistema operativo y dirígete a la ruta del directorio que acabas de clonar.
5. Crea un fichero ```.env``` con el siguiente formato:

```
COMPOSE_PROJECT_NAME=project_name

MYSQL_DATABASE=db_name
MYSQL_USER=db_user
MYSQL_PASSWORD=db_password
MYSQL_HOST=db_host
MYSQL_ROOT_PASSWORD=db_root_password

TIMEZONE=Europe/Madrid

WP_TABLE_PREFIX=wp_
```

6. Recuerda sustituir los valores de las variables de entorno por los que tu equipo o proyecto requieran.
7. Edita el dichero ```hosts``` de tu sistema operativo y añade las siguiente línea:

```
127.0.0.1 test.docker.com
::1 test.docker.com
```

8. Por último, levanta el contenedor con el comando ```docker-compose up -d```.

Con estos sencillos pasos, ya tienes un entorno LAMP listo para trabajar con tu WordPress.
