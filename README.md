# Pasos instalación del proyecto

## Primero
```
$ composer install (genera dependencias)
```

## Copiar archivo .env
```
env.example (copiar contenido y pegar en archivo .env)
```

## Generar clave
```
$ php artisan key:generate  (clave )
```

## Subir cambios por cmd a github
```
$ git checkout develop
$ git add .
$ git commit -m  "modificación de "
$ git push -u origin develop
$ git status
$ git checkout -- <file>
```
## Comandos migración BDpweb
```
$ php artisan migrate
```

## Insertar contenidos de SQL en la Base de Datos

1. ./DOCUMENTACION/regiones_provincias_comunas.sql

```
$ php artisan db:seed
$ composer dumpautoload
$ php artisan migrate:reset
```

DROP DATABASE projectosp3;	
CREATE DATABASE projectosp3;


## Para crear un controlador
```
php artisan make:controller *nombreControlador* --resource
```

## Para volver atras 
```
<a href="javascript:history.back(1)"><button class="btn btn-primary btn-lg">Volver</button></a>
```

NOTAS DE DESARROLLO:

#las tablas se llaman desde el modelo con mayuscula"# sp3" 
