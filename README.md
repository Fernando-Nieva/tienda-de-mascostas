# 🐾 Tienda de Mascotas

Proyecto desarrollado para **Programación III** — Tecnicatura Universitaria en Programación (TUP) — **UTN**.

Aplicación web CRUD en **Laravel 13** para la gestión de mascotas. Permite registrar, listar, buscar y paginar mascotas usando el ORM Eloquent con vistas Blade.

---

## 🧰 Tecnologías

| Tecnología | Versión |
|---|---|
| Laravel | 13.x |
| PHP | 8.3+ |
| Base de datos | SQLite |
| Frontend | Blade + CSS personalizado |
| Tipografía | Inter (Google Fonts) |
| Build | Vite |

---

## ✨ Funcionalidades

- **Registro de mascotas** — Formulario con validación (nombre, especie, edad)
- **Listado paginado** — Tabla con 5 mascotas por página
- **Búsqueda** — Filtro por nombre o especie
- **Paginación personalizada** — Navegación entre páginas con diseño moderno
- **Mensajes flash** — Feedback visual al registrar una mascota

---

## 🗄️ Base de datos

### Tabla `pets`

| Columna | Tipo | Descripción |
|---|---|---|
| `id` | BIGINT UNSIGNED PK | Identificador único |
| `name` | VARCHAR(255) | Nombre de la mascota |
| `species` | VARCHAR(255) | Especie (Perro, Gato, Loro, etc.) |
| `age` | INTEGER | Edad en años |
| `created_at` | TIMESTAMP | Fecha de creación |
| `updated_at` | TIMESTAMP | Fecha de actualización |

### Datos de prueba

```bash
php artisan db:seed
```

Genera **50 mascotas** aleatorias usando Factory + Faker.

---

## 🚀 Instalación

```bash
git clone https://github.com/Fernando-Nieva/tienda-de-mascostas.git
cd tienda-de-mascostas
composer install
npm install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan db:seed
php artisan serve
```

Luego acceder a `http://localhost:8000`.

---

## 📁 Estructura del proyecto

```
app/
├── Http/Controllers/
│   └── PetController.php      # Lógica CRUD (index, create, store)
├── Models/
│   └── Pet.php                # Modelo Eloquent con HasFactory
├── Providers/
│   └── AppServiceProvider.php  # Configuración de paginación

database/
├── factories/
│   └── PetFactory.php          # Datos falsos para pruebas
├── migrations/
│   └── create_pets_table.php   # Esquema de la tabla pets
└── seeders/
    └── DatabaseSeeder.php      # Genera 50 mascotas

resources/views/
├── layouts/
│   └── app.blade.php           # Layout reutilizable
├── pets/
│   ├── index.blade.php         # Listado con tabla y filtro
│   └── create.blade.php        # Formulario de registro
├── components/
│   ├── nav-link.blade.php      # Componente de navegación
│   ├── input-field.blade.php   # Campo de formulario
│   ├── btn.blade.php           # Botón reutilizable
│   ├── alert.blade.php         # Mensaje de alerta
│   └── card.blade.php          # Contenedor tarjeta
└── vendor/pagination/
    └── custom.blade.php        # Paginación personalizada

public/css/
└── style.css                   # Estilos CSS personalizados

routes/
└── web.php                     # Rutas web
```

---

## 🧪 Rutas disponibles

| Método | URI | Controlador | Nombre |
|---|---|---|---|
| GET | `/` | `PetController@index` | `pets.index` |
| GET | `/mascotas` | `PetController@index` | — |
| GET | `/mascotas/crear` | `PetController@create` | `pets.create` |
| POST | `/mascotas` | `PetController@store` | `pets.store` |

---

## 🎨 Diseño y UX

- **Layout reutilizable** con header, nav y footer común
- **CSS externo** con estilos modernos (gradientes, sombras, transiciones)
- **Componentes Blade** para código limpio y reutilizable
- **Tabla** con zebrado, badges de especie y hover
- **Paginación** con botones numerados y diseño propio
- **Emojis** en navegación y botones para mejor experiencia visual

---

## 👨‍💻 Autor

**Fernando Nieva** — TUP UTN
