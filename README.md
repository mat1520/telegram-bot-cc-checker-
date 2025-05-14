# Telegram Bot Webhook

Bot de Telegram para verificación de tarjetas con webhook.

## Características

- Verificación de tarjetas de crédito
- Soporte para Visa, Mastercard y American Express
- Webhook para respuestas instantáneas
- Sistema de permisos por usuario
- Interfaz intuitiva

## Requisitos

- PHP >= 7.4
- Extensión JSON
- Extensión cURL
- Token de Bot de Telegram

## Instalación

1. Clonar el repositorio:
```bash
git clone https://github.com/TU_USUARIO/telegram-bot-webhook.git
cd telegram-bot-webhook
```

2. Instalar dependencias:
```bash
composer install
```

3. Configurar el bot:
- Editar `index.php` y actualizar el token del bot
- Configurar el ID del propietario

4. Configurar el webhook:
```php
$telegram->setWebhook('https://tu-dominio.com/index.php');
```

## Uso

1. Iniciar el bot:
```
/start - Iniciar el bot
/help - Mostrar ayuda
/webhook - Verificar estado del webhook
```

2. Verificar una tarjeta:
```
Enviar en formato: Número|Mes|Año|CVV
Ejemplo: 4111111111111111|12|2025|123
```

## Despliegue

El bot está configurado para desplegarse en Railway.app:

1. Crear cuenta en [Railway.app](https://railway.app)
2. Conectar con GitHub
3. Seleccionar el repositorio
4. Railway detectará automáticamente la configuración PHP

## Seguridad

- Solo el propietario puede usar el bot
- Los datos de las tarjetas se procesan de forma segura
- No se almacenan datos sensibles

## Licencia

Este proyecto es privado y no está disponible para uso público. 