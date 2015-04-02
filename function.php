<!DOCTYPE html>
	<html>
		<?php
			function GreetCoder($name, $msg = "Hello, coder!") {
			    echo "A message to " . $name . ": " . $msg;
			}

			GreetCoder("Nabeel Virani");
			echo "<br /><br />";
			GreetCoder("Nichi", "ruff ruff ruff");
		?>
	</html>