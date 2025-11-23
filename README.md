# Sitio Web Personal — 

Este proyecto corresponde a la actividad "Diseño de Página Web Personal con Formulario de Contacto en PHP".

## Contenido

- Página principal con biografía, foto y hobbies.
- Página de contacto con formulario funcional.
- Validación HTML5 y validación en PHP.
- Datos guardados en base de datos.
- Diseño moderno con Bootstrap y CSS propio.

## Instalación

1. Subir los archivos a un hosting gratuito (000webhost, InfinityFree, etc.).
Enlace https://emily27.infinityfree.me/mi_sitio/index.html 
2. Crear una base de datos llamada **contactos**.
3. Crear una tabla:

```sql
CREATE TABLE mensajes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100),
    correo VARCHAR(150),
    mensaje TEXT
);
