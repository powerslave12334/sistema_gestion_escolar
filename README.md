##  Titulo
🎓 Sistema de Gestión Escolar
## Badges

![Laravel](https://img.shields.io/badge/Laravel-FF2D20?logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-777BB4?logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-4479A1?logo=mysql&logoColor=white)
![License](https://img.shields.io/badge/License-MIT-green)
![Status](https://img.shields.io/badge/Status-En%20Desarrollo-blue)

Un sistema integral de gestión escolar desarrollado con Laravel y MySQL, diseñado para administrar todos los aspectos académicos, administrativos y comerciales de una institución educativa.
Incluye módulos de usuarios, alumnos, calificaciones, inventario, tienda en línea, reportes y más.
## Acknowledgements

🧭 Tabla de contenidos
- [🚀 Características principales](#-características-principales)
- [🧱 Estructura del proyecto](#-estructura-del-proyecto)
- [⚙️ Instalación](#️-instalación)
- [🧩 Módulos disponibles](#-módulos-disponibles)
- [💡 Uso](#-uso)
- [🤝 Contribuciones](#-contribuciones)
- [📄 Licencia](#-licencia)
- [👤 Autor](#-autor)
- [🎥 Capturas de pantalla (opcional)](#-capturas-de-pantalla-opcional)
## Caracteristicas
Características principales

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
## ⚙️ Instalación

🔹 Requisitos previos

PHP >= 8.1

Composer

MySQL

Node.js & npm

Extensiones habilitadas: pdo_mysql, openssl, mbstring, tokenizer, xml

🔹 Pasos de instalación

1. Clona este repositorio:
```bash
git clone https://github.com/powerslave12334/sistema_gestion_escolar.git
cd sistema_gestion_escolar

```
2. Instala las dependencias:
```bash
composer install
npm install && npm run build

```
3. Configura el entorno:
```bash
cp .env.example .env
php artisan key:generate

```
4. Ejecuta las migraciones y los seeders:
```bash
php artisan migrate --seed

```
5. Inicia el servidor:
```bash
php artisan serve

```
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
```
## Módulos disponibles

Módulo	Descripción
👥 Usuarios ->	Gestión de roles y permisos (admin, docente, alumno).
🎓 Alumnos -> Registro, matrícula, historial académico.
🧑‍🏫 Docentes ->	Asignación de materias y grupos.
📚 Materias	Control -> de asignaturas y horarios.
🧾 Calificaciones ->	Registro y consulta de notas.
## 📄 Licencia
Este proyecto está bajo la licencia MIT.
Puedes usarlo, modificarlo y distribuirlo libremente bajo los términos de dicha licencia.

[MIT](https://choosealicense.com/licenses/mit/)


## 👤 Autor

-Desarrollado con ❤️ por [@powerslave12334](https://github.com/powerslave12334/sistema_gestion_escolar)
