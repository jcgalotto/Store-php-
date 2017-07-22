function	confirmarBaja(){

		var mensaje = 'Si pulsa el boton "Aceptar", se eliminara el producto';

		if (confirm(mensaje)) {

			return true;
		}

		window.location = 'panel-productos.php';
		return false;

}

function	confirmarBajaU(){

		var mensaje = 'Si pulsa el boton "Aceptar", se eliminara el usuario';

		if (confirm(mensaje)) {

			return true;
		}

		window.location = 'panel-usuarios.php';
		return false;

}

function	confirmarBajaCat(){

		var mensaje = 'Si pulsa el boton "Aceptar", se eliminara la categoria';

		if (confirm(mensaje)) {

			return true;
		}

		window.location = 'panel-categorias.php';
		return false;

}
