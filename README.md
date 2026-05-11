# Laboratorio Autoload PSR-4

Este proyecto demuestra una configuración de autoload PSR-4 en PHP.

## Instrucciones de ejecución

1. Instala las dependencias de Composer si aún no lo has hecho:

```bash
composer install
```

2. Genera o actualiza el autoload:

```bash
composer dump-autoload
```

3. Ejecuta el archivo de prueba:

```bash
php index.php
```

## Resultado esperado

Deberías ver:

```
¡Hola Luis, tu clase se cargó correctamente con PSR-4!
```

## Buenas prácticas incluidas

- `vendor/` está excluido en `.gitignore`
- `src/Usuario.php` usa namespace `Luis\LaboratorioAutoload`
- `index.php` carga todo mediante `vendor/autoload.php`

## Ventajas de PSR-4

- Mantenibilidad: evita múltiples `include`/`require` manuales.
- Estandarización: usa convenciones comunes para namespaces y rutas de archivos.
- Eficiencia de memoria: la carga automática solo resuelve clases cuando se usan.

## Capturas de pantalla

Incluye tus capturas de pantalla de terminal aquí cuando termines la práctica.
