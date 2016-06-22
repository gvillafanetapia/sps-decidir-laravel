Laravel SPS Decidir Wrapper
===========================

Wrapper para integrar SPS Decidir a Laravel.<br />

Instalación
============

Agregar `gvillafane/sps-decidir-laravel` como dependencia en composer.json

```javascript
{
    "require": {
        "gvillafane/sps-decidir-laravel": "0.1.*"
    }
}
```

Publicar el archivo de configuración con el siguiente comando:

```php
php artisan vendor:publish
```

Configurar el service provider en `app/config/app.php`.

```php
'SPSDecidirWrapper\SPSDecidirServiceProvider'
```

Para usar la facade agregarla en `app/config/app.php`.

```php
'SPS' => 'SPSDecidirWrapper\Facades\SPS'
```

Uso
======

TBC


