Laravel SPS Decidir Wrapper
===========================

Wrapper para integrar SPS Decidir a Laravel.<br />

Instalación
============

Agregar `gvillafane/sps-decidir-laravel` como dependencia en composer.json

```javascript
{
    "require": {
        "gvillafane/sps-decidir-laravel": "dev-master"
    }
}
```

Configurar el service provider en `app/config/app.php`.

```php
SPSDecidirWrapper\SPSDecidirServiceProvider::class
```

Publicar el archivo de configuración con el siguiente comando:

```php
php artisan vendor:publish
```

Para usar la facade agregarla en `app/config/app.php`.

```php
'SPS' => SPSDecidirWrapper\Facades\SPS::class
```

Uso
======

TBC


