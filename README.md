# 🌱 plotsAdmin

**plotsAdmin** es una plataforma web desarrollada por **TerraWorks**, diseñada para que los administradores de parcelas puedan actualizar el estado de sus propiedades de manera sencilla y eficiente.

---

## 🌍 Demo
🔗 Accede a la plataforma aquí: **[plotsAdmin](https://plotadmin.terraworks.cl/public/)**

---

## 🚀 Características

✅ **Autenticación segura:** Registro e inicio de sesión de administradores.

✅ **Gestión de parcelas:** Actualización del estado de las parcelas en tiempo real.

✅ **Dashboard intuitivo:** Interfaz amigable y moderna para administrar la información.

---

## 📦 Instalación
### 1️⃣ Clonar el repositorio
```sh
git clone https://github.com/Terra-Works/plotsAdmin.git
cd plotsAdmin
```

### 2️⃣ Instalar dependencias
```sh
npm install  # Para frontend
composer install  # Para backend (Laravel)
```

### 3️⃣ Configurar entorno
```sh
cp .env.example .env
```
Edita `.env` con las credenciales de tu base de datos y configuración del sistema.

```sh
php artisan key:generate
```

### 4️⃣ Ejecutar el servidor
```sh
npm run dev  # Para frontend con Vite/Webpack
php artisan serve  # Para backend en Laravel
```

---

## 🛠 Tecnologías utilizadas
🖥️ **Frontend:** (React, Vue, Blade, etc.)  
⚙️ **Backend:** Laravel  
🗄️ **Base de datos:** MySQL / PostgreSQL  
🔐 **Autenticación:** Laravel Sanctum / Passport  

---

## 📜 Licencia
📄 Este proyecto está bajo la licencia **MIT**. Puedes ver más detalles en el archivo [LICENSE](LICENSE).

---

## 📞 Contacto
📧 ¿Tienes preguntas o sugerencias? Contáctanos en **[TerraWorks](https://github.com/Terra-Works)** 🚀
