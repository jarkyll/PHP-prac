<!DOCTYPE html>
	<html>
		<?php
			$ver = 0;
			if( isset($_GET["answer"]))
				// isset checks if null or not
				// get will get the ver num
				$ver = $_GET["answer"];

			switch($ver) {
				default:
					echo "Which version of PHP is being used?<br /><br />";
					echo "<a href=\"?answer=3\">3</a><br />";
     				echo "<a href=\"?answer=4\">4</a><br />";
        			echo "<a href=\"?answer=5\">5</a><br />";
        			break;
        		case 3:
     			   echo "Ugh that's old, upgrade now!";
        		   break;
    			case 4:
        			echo "Still on version 4? Give PHP 5 a try!";
        			break;
    			case 5:
        			echo "Good choice!";
        			break;
				}
			?>



	</html>