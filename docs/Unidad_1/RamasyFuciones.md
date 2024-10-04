# Examen: Unidad 01  



### Módulo SXI

**Autor:** CORBÍ MICÓ, JORDI  
**Correo:** jorcormic@alu.edu.gva.es

# Entrega

## Comandos de Git

### Ramas y fusiones

| Comando  | Descripción |
|---------------|---------------|
| git branch | Muestra una lista de las ramas que existen en este proyecto (el asterisco señala la rama activa) |
| git branch -a | Muestra una lista de todas las ramas (locales y remotas) |
| git branch [nombre de la rama] | Crea una nueva rama |
| git branch -d [nombre de la rama] | Elimina una rama local |
| git push origin --delete [nombre de la rama] | Elimina una rama remota |
| git checkout -b [nombre de la rama] | Crea una nueva rama y nos desplaza hasta ella |
| git checkout -b [nombre de la rama] origin/[nombre de la rama] | Clona una rama remota y nos desplaza hasta ella |
| git branch -m [nombre de la rama] [nombre de la rama] | Renombra una rama local |
| git checkout [nombre de la rama] | Cambia a una rama concreta |
| git checkout -	| Cambia a la última rama activa |
| git checkout -- [nombre-del-archivo.txt] | Descarta cambios en un archivo |
| git merge [nombre de la rama] | Combina una rama concreta con la rama activa |
| git merge [nombre de la rama] [nombre de la rama] | Combina una rama concreta (rama de origen) con una rama nueva (rama de destino) |
| git stash | Revierte los últimos cambios y errores en el directorio actual |
| git stash clear | Revierte todos los cambios en el directorio actual |

![alt text](<img/Captura desde 2024-10-04 12-37-55.png>)