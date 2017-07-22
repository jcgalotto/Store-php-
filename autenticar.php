    <?php
session_start();
if (!isset($_SESSION['login'])) {

		header("location:form-login.php?error=1");

}


 ?>