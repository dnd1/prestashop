# Instalaciona

1. Crear imagen:

		$ docker build -t php-ext .

2. Levantar stack

		$ docker-compose up

3. Instanciar

 * Ir a http://localhost:8080
 * Configurar la BD 

Se debe conectar al contenedor mysql, no a `localhost`. Para saber la ip se puede hacer `docker ps` y luego `docker inspect` el parámetro `ÌPAddress` tiene la ip del contenedor. Otra opción más sencilla, es simplemente usar el nombre del contenedor de BD como si fuese su dominio.


## Creación de temas

Para crear temas se deben hacer dos cosas

1. Montar un volumen para el directorio del tema.
2. Si el tema no se crea copiando y pegando, se debe actualizar la tabla `ps_theme` para incluirlo. Agregando el nombre del tema, su directorio y otros parametros de configuración.
