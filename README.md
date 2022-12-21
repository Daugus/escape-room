# Escape room

## Clonar e instalar

```bash
git clone git@github.com:Daugus/escape-room.git
cd escape-room
composer install && npm i
```

## Configurar XAMPP

Editar configuración de Apache (`C:\xampp\apache\conf\httpd.conf`).

Cambiar `DocumentRoot` y `Directory` (línea ~250) a la carpeta public del repositorio.

Ejemplo:

```apache
DocumentRoot "C:\Users\ik_2dw3\Documents\Clase\Retos\escape-room\public"
<Directory "C:\Users\ik_2dw3\Documents\Clase\Retos\escape-room\public" >
```

## Iniciar servidor para desarrollo

```bash
npm run dev
```

## Crear ficheros js y css finales

```bash
npm run build
```

Los archivos se generarán en `./public/build/assets`.
