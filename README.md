# Examen práctico para backend (LARAVEL)

[![License](https://img.shields.io/packagist/l/laravel/framework)](https://packagist.org/packages/laravel/lumen-framework)

## Se requiere un administrador de los roles de un sistema, este sistema tendrá diferentes permisos por rol

## ¿Qué podemos hacer? 

- Roles
    - Insertar un nuevo rol
    - Listar todos los roles existentes
    - Listar los permisos de un rol
    - Mostrar la informacion de un rol especifico
    - Actualizar la informacion de un rol 
    - Eliminar un rol (esto eliminará tambien sus permisos)

- Permisos de los roles
    - Agregar un permiso a un rol
    - Agregar muchos permisos a un rol 
    - Eliminar un permiso a un rol

- Permisos
    - Crear un nuevo permiso
    - Mostrar la informacion de un permiso 
    - Actualizar la informacion de un permiso
    - Eliminar un permiso

## Base de datos
La base de datos está manejada por el sistema gestor de base de datos mysql
Contiene 3 tablas: 
- rols
- permisos
- permisos_de_roles

**Y otras generadas por el propio laravel como se puede observar en el siguiente esquema:** 
![Diagrama de la base de datos](/comgit/img/diagrama.png)

## **Peticiones / test**

### Permisos

![Todas las peticiones para los **permisos**](/comgit/img/peticiones_permisos.png)

-- Listar todos los permisos posibles **Method:** get

```
  localhost:8001/permisos
```
![Listar todos los permisos posibles](/comgit/img/permisos_posibles.png)

-- Crear un nuevo permiso **Method:**  post


```
  localhost:8001/permisos
```

![Crear un nuevo permiso ](/comgit/img/crear_permiso.png)

-- Actualizar un permiso **Method:**  put / patch

```
  localhost:8001/permisos/{id}
```

![Actualizar un permiso ](/comgit/img/actualizar_permiso.png)

-- Eliminar un permiso **Method:**  delete

```
  localhost:8001/permisos/{id}
```

![Eliminar un permiso ](/comgit/img/permiso_eliminado.png)


Si un permiso no existe al eliminar o actualizar nos lanza un error 404

![Permiso no encontrado](/comgit/img/permiso_not_found.png)

### Roles

![Todas las peticiones para los **roles**](/comgit/img/peticiones_roles.png)

-- Listar todos los roles posibles **Method:** get

```
  localhost:8001/roles
```
![Listar todos los roles posibles](/comgit/img/roles_posibles.png)

-- Crear un nuevo rol **Method:**  post

```
  localhost:8001/roles
```

![Crear un nuevo rol](/comgit/img/crear_rol.png)

Validacion de campos al crear un rol

![Validacion de campos al crear un rol](/comgit/img/validacion_rol.png)

-- Actualizar un rol **Method:**  put / patch

```
  localhost:8001/roles/{id}
```
Si no se modifica algún dato lanza un error

![Si no se modifica algún dato lanza un error](/comgit/img/erro_no_update_data.png)

Igualmente cuenta con validacion de campos

![Validacion de campos al crear un rol](/comgit/img/validacion_rol.png)


-- Eliminar un rol **Method:**  delete

```
  localhost:8001/roles/{id}
```

![Eliminar un rol ](/comgit/img/eliminar_rol.png)

Si el rol no existe lanza un error 404
![Permiso no encontrado](/comgit/img/permiso_not_found.png)
