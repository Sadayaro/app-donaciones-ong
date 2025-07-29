# ONG WebApp

Este repositorio contiene el código fuente de la aplicación web para la organización sin fines de lucro. Aquí se gestionan proyectos, eventos, donaciones en línea y notificaciones de campañas.

---

## Requisitos

- Node.js v16 o superior  
- PHP 8.0 o superior  
- Composer y npm instalados  
- MySQL o MariaDB para la base de datos  

---

## Instalación

1. Clonar el repositorio  
   ```bash
   git clone https://github.com/tu-usuario/ong-webapp.git
   ```  
2. Instalar dependencias backend  
   ```bash
   cd ong-webapp
   composer install
   ```  
3. Instalar dependencias frontend  
   ```bash
   npm install
   ```  
4. Configurar variables de entorno en `.env`  
5. Ejecutar migraciones y seeders  
   ```bash
   php artisan migrate --seed
   npm run dev
   ```  

---

## Estrategia de ramas

| Tipo de rama           | Prefijo        | Uso                                                |
|------------------------|----------------|----------------------------------------------------|
| Funcionalidad          | feature/       | Desarrollo de nuevas funciones                     |
| Corrección de errores  | bugfix/        | Arreglo de bugs identificados                      |
| Hotfix                 | hotfix/        | Corrección urgente en producción                   |

Mantener `main` siempre estable. Solo se mergean ramas que hayan superado revisiones y pruebas automáticas.

---

## Flujo de Pull Requests

1. Crear rama desde `main`  
   ```bash
   git checkout main
   git pull
   git checkout -b feature/nombre-descriptivo
   ```  
2. Desarrollar cambios y hacer commits atómicos  
3. Empujar la rama a GitHub  
   ```bash
   git push origin feature/nombre-descriptivo
   ```  
4. Abrir Pull Request desde la interfaz de GitHub  
   - Completar plantilla de PR con descripción, checklist y capturas  
   - Asignar al menos dos revisores  
   - Etiquetas: enhancement, needs-review, ready-to-test  

---

## Gestión de Issues

- Crear issues claros con título y descripción del problema  
- Proponer soluciones o pasos a seguir  
- Etiquetas recomendadas: bug, enhancement, question, priority/high  
- Asignar responsables y vincular a milestones  
- Utilizar proyecto Kanban para seguimiento  

---

## Integración Continua

Este proyecto incluye un workflow de GitHub Actions que ejecuta:

- Instalación de dependencias  
- Linter de código  
- Pruebas unitarias y de integración  

Los checks son obligatorios para mergear en `main`.

---

## Contribuir

- Leer el archivo de **Contribución** (`CONTRIBUTING.md`) antes de empezar  
- Seguir la guía de estilo de código  
- Firmar commits con convenciones de mensajes  
- Mantener la documentación actualizada en README y wiki  

---

## Licencia

Este proyecto está bajo la licencia MIT. Consulte el archivo `LICENSE` para detalles.
