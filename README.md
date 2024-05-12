# Guía Básica para Configurar un Proyecto Laravel con Laragon

Esta guía te ayudará a configurar un proyecto Laravel utilizando Laragon, un entorno de desarrollo local para PHP. Cubriremos los pasos necesarios para instalar Laragon, mover tu proyecto Laravel a la carpeta `www`, y utilizar los comandos de Laravel para instalar dependencias, ejecutar migraciones y seeders.

## Instalación de Laragon

1. Descarga Laragon desde [su sitio web oficial](https://laragon.org/download/).
2. Ejecuta el instalador descargado y sigue las instrucciones de instalación.
3. Una vez instalado, ejecuta Laragon desde tu menú de inicio.

## Configurar Proyecto Laravel

1. Abre Laragon y haz clic en el icono de "www" en la barra de herramientas para abrir la carpeta `www`.
2. Copia tu proyecto Laravel dentro de la carpeta `www`.
3. Abre Laragon y asegúrate de que el servidor Apache y MySQL estén ejecutándose.

## Comandos de Laravel

### Instalar Dependencias

Abre una terminal en la carpeta de tu proyecto Laravel (puedes hacerlo desde Laragon haciendo clic derecho en tu proyecto y seleccionando "Terminal Here") y ejecuta el siguiente comando para instalar las dependencias del proyecto:

```bash
composer install
```
### Ejecutar migraciones y seeders

```bash
php artisan migrate
php artisan db:seed
```

Con estos pasos podemo iniciar facilmente este entorno, al entrar en nuestra web, navegamos en la url a /register, creamos un perfil administrador y lo vemos de forma generica, obviamente este proyecto es una demo, no incluye mas de lo que se puede observar. 
