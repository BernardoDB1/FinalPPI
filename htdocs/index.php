<!DOCTYPE html>
<html lang="en">
<body>
<?php
        session_start();
        if($_SESSION!=null){
            if($_SESSION['usuarioAtual']!=null){
                header('Location: home.php');
            }
        }
    ?>
</body>
</html>