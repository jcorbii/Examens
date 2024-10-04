# IAW_UD01_EXAMEN
## Examen de la Unidad Didáctica 1 de IAW

En esta prueba práctica se evaluará tu conocimiento sobre los temas vistos en la Unidad Didáctica 1 de la asignatura de Implantación de Aplicaciones Web. El ejercicio consiste en crear una página web de documentación sencilla utilizando Markdown, MkDocs y Git para su creación, edición y publicación.

1. La documentación debe estar creada con MkDocs y contener los todos los `Comandos de Git` que ves más abajo. El orden da las secciones es libre y a tu elección, pero se recomienda seguir el orden de los comandos en la tabla de abajo.
2. La documentación debe estar creada en una rama de tu propio repositorio destinada a esto, y al finalizar, publicarla en Github Pages.
3. Además del contendido, se evaluará la presentación y organización de la información, así como la corrección de la redacción y ortografía. También se tomará en cuenta la calidad de los commits y la estructura de la rama.
4. En cuanto a Markdown, se evaluará el uso de los elementos básicos y avanzados de Markdown, así como la correcta estructuración del documento. Deberás incluir tablas, listas, enlaces, imágenes y código dentro de la documentación.
5. Entrega el enlace a tu repositorio, donde se puedan ver las 2 ramas. Una rama con el código fuente y otra con la documentación.
6. Entrega a la página de Github Pages donde se pueda ver la documentación.

## Comandos de Git
============

### Conseguir y crear proyectos

| Comando | Descripción |
| ------- | ----------- |
| `git init` | Inicializa un repositorio local de Git |
| `git clone ssh://git@github.com/[nombreDeUsuario]/[nombre-del-repo].git` | Crea una copia local de un repositorio remoto |

### Comandos básicos

| Comando | Descripción |
| ------- | ----------- |
| `git status` | Comprobar el status actual |
| `git add [nombre-del-archivo.txt]` | Añade un archivo a la zona de subir cambios |
| `git add -A` | Añade todos los archivos del repositorio a la zona de subir cambios |
| `git commit -m "[Mensaje del commit]"` | Crea un mensaje explicativo de los cambios |
| `git rm -r [nombre-del-archivo.txt]` | Elimina un archivo (o carpeta) |

### Ramas y fusiones

| Comando | Descripción |
| ------- | ----------- |
| `git branch` | Muestra una lista de las ramas que existen en este proyecto (el asterisco señala la rama activa) |
| `git branch -a` | Muestra una lista de todas las ramas (locales y remotas) |
| `git branch [nombre de la rama]` | Crea una nueva rama |
| `git branch -d [nombre de la rama]` | Elimina una rama local |
| `git push origin --delete [nombre de la rama]` | Elimina una rama remota |
| `git checkout -b [nombre de la rama]` | Crea una nueva rama y nos desplaza hasta ella |
| `git checkout -b [nombre de la rama] origin/[nombre de la rama]` | Clona una rama remota y nos desplaza hasta ella |
| `git branch -m [nombre de la rama antigua] [nombre de la rama nueva]` | Renombra una rama local |
| `git checkout [nombre de la rama]` | Cambia a una rama concreta |
| `git checkout -` | Cambia a la última rama activa |
| `git checkout -- [nombre-del-archivo.txt]` | Descarta cambios en un archivo |
| `git merge [nombre de la rama]` | Combina una rama concreta con la rama activa |
| `git merge [nombre de la rama de origen] [nombre de la rama de destino]` | Combina una rama concreta (rama de origen) con una rama nueva (rama de destino) |
| `git stash` | Revierte los últimos cambios y errores en el directorio actual |
| `git stash clear` | Revierte todos los cambios en el directorio actual |

### Compartir y actualizar proyectos

| Comando | Descripción |
| ------- | ----------- |
| `git push origin [nombre de la rama]` | Envía una rama local al repositorio remoto |
| `git push -u origin [nombre de la rama]` | Envía cambios al repositorio remoto (y te posiciona en la rama concreta) |
| `git push` | Envía cambios al repositorio remoto (en la rama actual) |
| `git push origin --delete [nombre de la rama]` | Elimina una rama remota |
| `git pull` | Actualiza el repositorio local al último commit enviado |
| `git pull origin [nombre de la rama]` | Trae / agarra todos los cambios de un repositorio remoto |
| `git remote add origin ssh://git@github.com/[nombreDeUsuario]/[nombre-del-repo].git` | Añade cambios a un repositorio remoto |
| `git remote set-url origin ssh://git@github.com/[nombreDeUsuario]/[nombre-del-repo].git` | Ubica la rama remota de un repositorio remoto mediante su SSH |

### Inspeccionar y comparar

| Comando | Descripción |
| ------- | ----------- |
| `git log` | Visualiza los cambios |
| `git log --summary` | Visualiza los cambios (en detalle) |
| `git log --oneline` | Visualiza los cambios (resumido)) |
| `git diff [source branch] [target branch]` | Vista previa de los cambios antes de hacer un merge |
