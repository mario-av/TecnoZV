# Documentación del Proyecto: TecnoZV 🏘️

## 1. Objetivo del Proyecto

El proyecto **TecnoZV** es una mini-aplicación desarrollada en el *framework* Laravel para simular el catálogo de una empresa de venta de pisos de segunda mano. Su propósito principal es demostrar el uso fundamental de las **Rutas**, el **Controlador** y las **Vistas** de Blade, utilizando una estructura de datos estática (un array) en lugar de una base de datos.

---

## 2. Estructura y Componentes Principales

El proyecto sigue una estructura modular para separar la lógica de presentación y la navegación:

### A. Capa de Datos (Simulación)

* **Array de Pisos:** Los datos de las viviendas (nombre, dirección, precio, etc.) están definidos dentro del controlador (`PaginaController`) mediante un array asociativo. Esto simula temporalmente el acceso a un repositorio de datos.

### B. Capa de Lógica y Control

* **`PaginaController`**: Es el único controlador del proyecto.
    * Contiene métodos para manejar cada ruta, como `welcome()`, `index()`, `atencionCliente()`, y `contacto()`.
    * El método clave es **`show($id)`**, que recibe el identificador de un piso, busca ese piso en el array de datos y pasa el objeto resultante a la vista de detalle.

### C. Capa de Enrutamiento

* **`routes/web.php`**: Define los puntos de acceso a la aplicación.
    * Se han definido cinco rutas, incluyendo una **ruta dinámica** (`/pisos/{id}`) para mostrar el detalle de cada propiedad.
    * Todas las rutas están nombradas (`home`, `pisos.listado`, `pisos.detalle`, etc.) para facilitar su uso en la navegación.

### D. Capa de Presentación (Vistas Blade)

Las vistas están organizadas en la carpeta `tecnozv` y se basan en una plantilla maestra:

* **`layout.blade.php`**: Es la plantilla base que define la estructura HTML, el encabezado (con el menú de navegación) y el pie de página. Usa la directiva `@yield` para inyectar contenido específico.
* **`welcome.blade.php`**: Muestra la página de inicio y una bienvenida.
* **`index.blade.php`**: Muestra el listado completo de todas las propiedades usando un bucle (`@foreach`) sobre el array de pisos.
* **`show.blade.php`**: Muestra la información completa de una sola propiedad, recibida individualmente del controlador.
* **`atencion.blade.php` y `contacto.blade.php`**: Contienen información y formularios estáticos para las páginas informativas.

---

## 3. Guía de Uso y Navegación

El usuario puede interactuar con la aplicación accediendo a las siguientes URLs:

| Destino | Ruta URL | Función |
| :--- | :--- | :--- |
| **Página Principal** | `/` | Bienvenida general. |
| **Catálogo** | `/pisos` | Muestra la lista completa de todas las propiedades disponibles. |
| **Detalle de Piso** | `/pisos/ID` | Muestra la ficha de un piso específico (ej: `/pisos/5`). |
| **Soporte** | `/atencioncliente` | Acceso a información de contacto y horarios de soporte. |
| **Formulario** | `/contacto` | Permite al usuario enviar una consulta. |

---

## 4. Requisitos de Envío

Para la entrega, se debe **comprimir la carpeta completa del proyecto** (p. ej., `ptecnoZV`) en un archivo ZIP. El nombre del archivo debe seguir el formato: `nombreapellidos.ZIP`.
