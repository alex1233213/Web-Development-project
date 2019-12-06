<?php
	require_once "userSession.php";

?>


<?php
   require_once "header.php";
?>


		<?php
				if(isset($_SESSION['reserveError'])) {
				echo "<h2 class=\"message\">".$_SESSION['reserveError']."</h2>";
			}
		?>


<?php
	unset($_SESSION['reserveError']);
   require_once "footer.php";
?>
