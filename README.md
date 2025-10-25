# 🎓 Sistema de Gestión Escolar

![Laravel](https://img.shields.io/badge/Laravel-FF2D20?logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-777BB4?logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-4479A1?logo=mysql&logoColor=white)
![License](https://img.shields.io/badge/License-MIT-green)
![Status](https://img.shields.io/badge/Status-En%20Desarrollo-blue)

Un sistema integral de gestión escolar desarrollado con **Laravel** y **MySQL**, diseñado para administrar todos los aspectos académicos, administrativos y comerciales de una institución educativa.  
Incluye módulos de usuarios, alumnos, calificaciones, inventario, tienda en línea, reportes y más.  

---

## 🧭 Tabla de contenidos
- [🚀 Características principales](#-características-principales)
- [🧱 Estructura del proyecto](#-estructura-del-proyecto)
- [⚙️ Instalación](#️-instalación)
- [🧩 Módulos disponibles](#-módulos-disponibles)
- [💡 Uso](#-uso)
- [🤝 Contribuciones](#-contribuciones)
- [📄 Licencia](#-licencia)
- [👤 Autor](#-autor)

---

## 🚀 Características principales
✅ Autenticación y roles de usuario (administrador, profesor, alumno)  
✅ Gestión completa de alumnos y personal docente  
✅ Registro y control de calificaciones  
✅ Administración de materias y grupos  
✅ Inventario y almacén de recursos escolares  
✅ Tienda en línea con carrito y control de ventas  
✅ Panel de administración moderno y responsivo  
✅ Reportes automáticos (PDF, Excel, etc.)  
✅ Configuración general del sistema e idiomas  
✅ Base de datos relacional en MySQL  

---

## 🧱 Estructura del proyecto
```bash
sistema_gestion_escolar/
├── app/
│   ├── Http/
│   ├── Models/
│   └── Providers/
├── bootstrap/
├── config/
├── database/
│   ├── migrations/
│   └── seeders/
├── public/
├── resources/
│   ├── views/
│   ├── js/
│   └── css/
├── routes/
│   └── web.php
├── tests/
└── .env.example

⚙️ Instalación
🔹 Requisitos previos

PHP >= 8.1

Composer

MySQL

Node.js & npm

Extensiones habilitadas: pdo_mysql, openssl, mbstring, tokenizer, xml

🔹 Pasos de instalación

Clona este repositorio:

git clone https://github.com/powerslave12334/sistema_gestion_escolar.git
cd sistema_gestion_escolar


Instala las dependencias:

composer install
npm install && npm run build


Configura el entorno:

cp .env.example .env
php artisan key:generate


Edita .env con tus credenciales de base de datos MySQL:

DB_DATABASE=sistema_gestion_escolar
DB_USERNAME=root
DB_PASSWORD=tu_contraseña


Ejecuta las migraciones y los seeders:

php artisan migrate --seed


Inicia el servidor:

php artisan serve


Luego abre tu navegador en:
👉 http://localhost:8000