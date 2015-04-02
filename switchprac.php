<!DOCTYPE html>
    <html>
        <?php
            $color = "white";
            switch($color) {
                case "red":
                case "blue":
                case "green":
                    echo "Nice basic color!";
                    break;
                case "black":
                    echo "Too dark!";
                    break;
                case "white":
                    echo "Too bright!";
                    break;
            }
        ?>
    </html>

