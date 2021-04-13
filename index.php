<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <?php 
    
        require_once 'app/config.php'; 
        require_once 'app/dependencias.php'
    
    ?>
    
</head>
<body style="background-color: 999999;">

    <?php
        if(isset($_GET['vista_solicitada'])){
            switch($_GET['vista_solicitada']){
                case 'barra':{
                    require_once 'view/nav.php';
                    break;
                }case 'formulario':{
                    require_once 'view/form.php';
                    break;
                }case'dafault':{
                    require_once 'index.php';
                    break;
                }

            }
        }else{
            require_once 'index.php';
        }
    ?>
</body>
</html>
