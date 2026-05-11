UNIVERSIDAD TECNOLÓGICA  
FACULTAD DE INGENIERÍA EN SISTEMAS COMPUTACIONALES  
CAMPUS VICTOR LEVIS SASSO  
  
DESARROLLO DE SOFTWARE VII  
  
Laboratorio #Auto
 
  
 	  	  	  	  	Fecha: 11-05-2026  I Semestre 2026  
  
INSTRUCTOR: Ing. Irina Fong  	  
  	  
Estudiante: Luis De Los Rios  
 
GRUPO DE ESTUDIANTES: LICENCIATURA EN DESARROLLO DE SOFTWARE  
 
 
Introducción  
 
Model-View-Controller (MVC) es a la vez un patrón de diseño y un patrón de arquitectura. Se considera más bien un patrón arquitectónico, ya que intenta resolver estos problemas en la aplicación y afecta a la aplicación por completo. Los patrones de diseño se limitan a resolver un problema técnico específico. 
MVC divide una aplicación en tres secciones lógicas principales: 
•	Modelo 
•	Ver 
•	Controlador 
El Model El componente gobierna y controla la(s) base(s) de datos de la aplicación. Es el único componente en MVC que puede interactuar con la base de datos, ejecutar consultas, recuperar, actualizar, eliminar y crear datos. No sólo eso, sino que también es responsable de garan zar la evolución de la estructura de la base de datos de una etapa a otra manteniendo un conjunto de migraciones de bases de datos. El Modelo responde a instrucciones provenientes del Controlador para realizar determinadas acciones en la base de datos. 
•	Controladores (app/H p/Controllers): Con enen la lógica de negocio y coordinan la interacción entre modelos y vistas. 
 
•	Rutas (routes/web.php): Definen las URL de la aplicación y enlazan cada ruta con un controlador o una vista. 
 
•	Vistas (resources/views): Archivos Blade que muestran la interfaz al usuario. 
 
•	Modelos (app/Models): Representan las tablas de la base de datos y permiten interactuar con ellas mediante Eloquent ORM. 
 
Base De Datos 
 
DB_CONNECTION=mysql
APP_URL=h p://localhost 
 
php ar san migrate 
 
Dificultades y Soluciones 
Error de versión de PHP: El composer.json requería PHP ^8.3, pero estaba instalada la versión 8.2.29. 
Solución: Actualizar PHP a la versión 8.3 o superior. 
 
Problema con Vite no reconocido: Al ejecutar npm run dev, aparecía el error "vite" no se reconoce como un comando interno o externo. 
Solución: Ejecutar npm install para reinstalar dependencias y eliminar la carpeta node_modules. 
 
Error de configuración del .env: Laravel no encontraba la base de datos. 
Solución: Configurar correctamente DB_CONNECTION=sqlite y crear el archivo database.sqlite. 
 
<img width="1853" height="582" alt="Captura de pantalla 2026-05-11 081403" src="https://github.com/user-attachments/assets/4ffb8bb1-1951-4609-accf-e22c16e13d5d" />
<img width="914" height="470" alt="Captura de pantalla 2026-05-11 081352" src="https://github.com/user-attachments/assets/46a2c04c-f4f5-45de-988f-4ab9ddbf73e3" />
<img width="1363" height="786" alt="Captura de pantalla 2026-05-11 080438" src="https://github.com/user-attachments/assets/3952f6ee-58fd-4763-b2b6-4fbc0f3fffed" />
<img width="1472" height="371" alt="Captura de pantalla 2026-05-11 080316" src="https://github.com/user-attachments/assets/08abf94f-2976-489b-a5ff-cd088f6f1a2c" />

      
 
Referencias 
  
 
h ps://www.codemag.com/Ar cle/2205071/Building-MVC-Applica ons-inPHP-Laravel-Part-1  
h ps://laracasts.com/?utm_source=copilot.com  h ps://getcomposer.org/doc?utm_source=copilot.com  h ps://laravel.com/docs?utm_source=copilot.com  
