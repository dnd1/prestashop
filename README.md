# Instalaciona

1. Crear imagen:

		$ docker build -t php-ext .

2. Levantar stack

		$ docker-compose up

3. Instanciar

 * Ir a http://localhost:8080
 * Configurar la BD (Se debe conectar al contenedor mysql, no a localhost. Para saber la ip se puede hacer `docker ps` y luego `docker inspect`.)
