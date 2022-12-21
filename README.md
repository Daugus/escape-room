# Escape room

## Git

### Configurar

```bash
git config --global user.name usuario
git config --global user.email email@ejemplo.com
git config --global push.default current

# no usar contraseña
# ubicación por defecto
ssh-keygen -t ed25519 -C "email@ejemplo.com"
eval "$(ssh-agent -s)"
ssh-add ~/.ssh/id_ed25519
```

Agregar clave ssh a GitHub:

1. Ejecutar `notepad ~/.ssh/id_ed25519` y copiar texto
1. Ir a [configuración en GitHub](https://github.com/settings/keys)
1. Click en New SSH key
    1. Poner Title (Ej: Clase)
    1. Key: pegar texto de notepad
    1. Click en Add SSH Key

### Uso

#### Ramas

##### Crear

```bash
git checkout -b nueva-rama
```

Ejemplo:

```bash
git checkout -b registrar-usuarios
```

##### Cambiar a existente

```bash
git checkout rama-existente
```

#### Commits

##### Add

Agregar todos los cambios

```bash
git add .
```

Agregar archivos específicos

```bash
git add resources/js/Formulario.vue resources/views/index.blade.php
```

##### Commit

```bash
git commit -m 'Cambios realizados'
```

Ejemplos:

```bash
git commit -m 'Agregado formulario de registro de usuarios'
```

##### Subir

```bash
git push
```

## Configurar y desplegar proyecto

### Instalar extensiones para Visual Studio Code

Instalar usando recomendaciones del workspace.

Lista:

-   [Auto Rename Tag](https://marketplace.visualstudio.com/items?itemName=formulahendry.auto-rename-tag)
-   [Blade Formatter](https://marketplace.visualstudio.com/items?itemName=shufo.vscode-blade-formatter)
-   [Blade Snippets](https://marketplace.visualstudio.com/items?itemName=onecentlin.laravel-blade)
-   [Error Lens](https://marketplace.visualstudio.com/items?itemName=usernamehw.errorlens)
-   [PHP Intelephense](https://marketplace.visualstudio.com/items?itemName=bmewburn.vscode-intelephense-client)
-   [Prettier](https://marketplace.visualstudio.com/items?itemName=esbenp.prettier-vscode)
-   [Sass](https://marketplace.visualstudio.com/items?itemName=Syler.sass-indented)
-   [Volar](https://marketplace.visualstudio.com/items?itemName=Vue.volar)
-   [Vue Snippets](https://marketplace.visualstudio.com/items?itemName=hollowtree.vue-snippets)

### Clonar e instalar

```bash
git clone git@github.com:Daugus/escape-room.git
cd escape-room
composer install && npm i
```

### Configurar XAMPP

Editar configuración de Apache (`C:\xampp\apache\conf\httpd.conf`).

Cambiar `DocumentRoot` y `Directory` (línea ~250) a la carpeta public del repositorio.

Ejemplo:

```apache
DocumentRoot "C:\Users\ik_2dw3\Documents\Clase\Retos\escape-room\public"
<Directory "C:\Users\ik_2dw3\Documents\Clase\Retos\escape-room\public" >
```

### Iniciar servidor para desarrollo

```bash
npm run dev
```

### Crear ficheros js y css finales

```bash
npm run build
```

Los archivos se generarán en `./public/build/assets`.
