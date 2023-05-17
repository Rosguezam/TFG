# TFG
Como abrir el proyecto en tu equipo:<br>
<br>
INSTALACIÓN XAMPP<br>
<br>
Lo primero que debemos hacer es descargar XAMPP, para ello a continuación dejo el enlace de descarga, tan solo tendremos que elegir para qué sistema operativo queremos el programa, lo tenemos disponible para Windows, Linux y OS X.<br>
<br>
https://www.apachefriends.org/es/index.html<br>
<br>
Tras descargarlo tendremos el fichero .exe ejecutable en la carpeta de descargas, uno vez allí clicamos sobre él.<br>
Saldrán varios cuadros de diálogo pidiendo permiso para ejecutar este fichero, debemos aceptar. EL propio XAMPP mostrará un mensaje aconsejando no instalarlo en el directorio de instalación de programas de Windows, el cuál tendremos que aceptar dando a Ok.<br>
La primera pantalla que aparecerá tras esto es la de bienvenida, la pasaremos dándole a Next. En la siguiente pantalla podremos elegir los componentes de XAMPP que queremos instalar, para este trabajo al menos sería necesario APAche, MySQL, PHP y PHPMyAdmin, tras seleccionar los componentes que queremos clicamos en Next.
En la siguiente ventana elegimos la ruta de instalación, tras decidir y establecer cuál será le damos a Next.<br>
A continuación nos ofrecerá descargar un paquete de Bitnami, no hace falta descargarlo puesto que no es necesario para nuestro proyecto. Así que desmarcamos y seleccionamos de nuevo Next. Tras esto le damos a Next a la siguiente pantalla y por fin nos saldrá el estado de instalación de XAMPP.
Tras finalizarse debemos darle a Finish y ya estaría el programa instalado.<br>

USO DE LA APLICACIÓN<br>
Desde la barra de navegación de Windows escribimos XAMPP y accedemos a él, nos aparecerá un cuadro con los componentes que tiene, para nuestro proyecto debemos pulsar en Start tanto en Apache como en MySQL, para saber si están activados solo tenemos que mirar el color de fondo de las letras de los módulos que hemos iniciado, si están verdes los componentes están activos.<br>
Aparecerán mensajes diciendo que el Firewall lo bloqueó, sin embargo, debemos permitir el acceso.Es importante también marcar la casilla de redes privadas o no funcionará la comunicación del navegador web con XAMPP.<br>

EJECUCIÓN DEL PROYECTO<br>
Una vez que hemos realizado los pasos anteriores nos descargamos el proyecto en el siguiente enlace de git:<br>
https://github.com/Rosguezam/TFG<br>
La carpeta ProyectoFinGrado la tenemos que meter dentro de la carpeta htdocs que sigue la siguiente ruta:<br>
xampp\htdocs<br>
Esto es muy importante , si no hacemos esto no podremos ver en local el proyecto.<br>
A continuación abrimos una página en nuestro navegador e introducimos la siguiente url:<br>
http://localhost/ProyectoFinGrado/<br>
Esta sería la vista inicial del proyecto.<br>

BASE DE DATOS<br>
Para la base de datos hay dos opciones:
1.	<b>Importar la base de datos.</b>
La carpeta que la contiene se encuentra dentro del proyecto en la carpeta BaseDatos, el archivo se llama trabajofingrado.sql
A continuación buscamso este url en nuestro navegador:
http://localhost/phpmyadmin/

Lo siguiente que debemos hacer es clicar sobre el botón Nueva, tras esto introducimos el nombre de la base de datos, debe ser el mismo que el de la que estamos importando , en nuestro caso debe ser trabajofingrado.
Una vez creada clicamos sobre ella , lo siguiente que debemos hacer es presionar el botón que aparece arriba a la derecha con el nombre Importar.
Seleccionamos el archivo y le damos a continuar. Esperamos que se cargue la base de datos y ya estaría lista. 

2.	<b>Crear la base de datos y las tablas con secuencias SQL.</b>
Clicamos sobre nueva y a la derecha en SQL. Para crear la tabla metemos la siguiente sentencia SQL:

                                                CREATE DATABASE trabajofingrado;
                                                
Una vez creada la base de datos y volvemos a ticar sobre SQL e introducimos esta vez para crear la tabla users, que alamacenará los datos de los usuarios:

                                                CREATE TABLE users (
                                                  id INT UNIQUE AUTO_INCREMENT,
                                                  email VARCHAR(200),
                                                  password VARCHAR(200),
                                                  PRIMARY KEY (id)
                                                );
                                                
Volvemos a dirigirnos a SQL y esta vez creamos la tabla pillbox, que contendrá los datos del pastillero mediante la siguiente secuencia SQL:

                                              CREATE TABLE pillbox (
                                                id INT PRIMARY KEY AUTO_INCREMENT,
                                                usuario_id INT,
                                                nombre VARCHAR(100) NOT NULL,
                                                dosis VARCHAR(20),
                                                descripcion VARCHAR(255),
                                                tomas_diarias VARCHAR(30),
                                                principio_activo VARCHAR(50),
                                                forma_farmaceutica VARCHAR(50),
                                                via_administracion VARCHAR(50),
                                                FOREIGN KEY (usuario_id) REFERENCES users(id),
                                                );

Y así tendríamos creada nuestra base de datos.<br>
 Vídeos que pueden ayudar en el proceso:<br>
1-Para la base de datos<br>
https://www.youtube.com/watch?v=J_ow7VIQhxw&ab_channel=alb3Rth0o<br>

2-Instalación XAMPP<br>
https://www.youtube.com/watch?v=MtllDrDm4cM&ab_channel=WordPressaTope<br>

