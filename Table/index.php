<!DOCTYPE html>
<html lang="en">
<head> 
    <link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
    <?php 
        for ($x = 1 ; $x <= 10 ; $x++ ){
            echo "<tr>";
            for ($y = 1 ; $y <= 10 ; $y++ ){
                echo "<td>".$x*$y."</td>";
            }
            echo "</tr>";
        }
    ?>
    </table>

</body>
</html>