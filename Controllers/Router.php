<?php
class Router{
	public $router;

	public function __construct($router){

		$session_options = array(
//				'use_only_cookies' => 1,
//				'auto_start' => 1,
//read_and_close' => true
		);

		if(!isset($_SESSION))  session_start($session_options);
		if (!isset($_SESSION['ok'])) $_SESSION['ok'] = false;

		if( $_SESSION['ok'] ){
			$this->route = isset($_GET['ruta']) ? $_GET['ruta'] :'home';
			$controller = new ViewController();

			switch ($this->route) {
				/*Toda las posibles rutas que existiran en la aplicacion pasadas por el metodo get que esta definido en el index, lo cual al fin de cuentas son la navegacion de la app*/
				case 'home':
					$controller->load_view('home');
				
					break;
				case 'alarma':
				/*Carga la vista pasada en el metodo load_view que es un metodo del controlador ViewController*/
				/*Se usa esta vista para simplificar el volumen de vistas, las operaciones de editar, eliminar y agregar se cargaran con modales*/
					if ( !isset($_POST['ruta']) ) $controller->load_view('alarms');
					break;

				case 'articulos':

					if ( !isset($_POST['ruta']) ) $controller->load_view('articles');
					break;

				case 'partos':

					if ( !isset($_POST['rutas']) ) $controller->load_view('births');
					break;

				case 'empleados':
					if ( !isset($_POST['rutas']) ) $controller->load_view('employee');
						break;

				case 'examenes':
					if ( !isset($_POST['rutas']) ) $controller->load_view('exams');
						break;

				case 'reproductoras':
					if ( !isset($_POST['rutas']) ) $controller->load_view('female');
						break;

				case 'gestacion':
					if ( !isset($_POST['rutas']) ) $controller->load_view('gestation');
						break;

				case 'instalaciones':
					if ( !isset($_POST['rutas']) ) $controller->load_view('instalation');
						break;

				case 'reproductores':
					if ( !isset($_POST['rutas']) ) $controller->load_view('male');
						break;

				case 'celos':
					if ( !isset($_POST['rutas']) ) $controller->load_view('mating');
						break;

				case 'medicina':
					if ( !isset($_POST['rutas']) ) $controller->load_view('medicine');
						break;

				case 'porcinos':
					if ( !isset($_POST['rutas']) ) $controller->load_view('porcine');
						break;

				case 'razas':
					if ( !isset($_POST['rutas']) ) $controller->load_view('race');
						break;

				case 'salir':
					$user_session = new SessionController();
					$user_session->logout();

				default:
					$controller->load_view('error404');
					break;
			}


		}else{
			if(!isset($_POST['user']) && !isset($_POST['pass'])){
			$login_form = new ViewController();
			$login_form->load_view('login');

			}else{
				$user_session = new SessionController();
				$session = $user_session->login($_POST['user'],$_POST['pass']);
				if(empty($session)){
					$login_form = new ViewController();
					$login_form->load_view('login');
					header('Location: ./?error=El usuario '.$_POST['user'] . ' y la contraseña no coinciden' );
				}else{
					/*Si es que todo solio correcto y el usuario se autentico, guarde toda la informacion que se necesita usar de la tabla de empleados*/
					/*$_SESSION['ok'] = true;
					foreach ($session as $row) {
						$_SESSION['user'] = $row['user'];
						$_SESSION['email'] = $row['email'];
						$_SESSION['name'] = $row['name'];
						$_SESSION['birthday'] = $row['birthday'];
						$_SESSION['pass'] = $row['pass'];
						$_SESSION['role'] = $row['role'];
					}
					header('Location: ./');*/

				}
			}

		}
	}
}