<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Ejercicio 3</title>
</head>
<body>
<div class="container mt-5">
        <h1 class="text-center">Kilometraje/galón por vehiculo</h1>
            <form method="post" class="mt-4">
                <div class="mb-3">
                    <label for="vehiculos" id="vehiculos" class="form-label">Selecciona el vehiculo a utilizar:</label>
                    <select name="vehiculos" id="vehiculos" class="form-select">
                    <option value="0" selected disabled>seleccione</option>
                    <option value="1">Camion (5Ton)</option>
                        <option value="2">Camion (3Ton)</option>
                        <option value="3">Pickup</option>
                        <option value="4">Panel</option>
                        <option value="5">Motocicleta</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="cantidad" class="form-label">Ingrese los kilometos a recorrer:</label>
                    <input type="float" name="amount" id="amount" class="form-control" required>
                </div>
           
            <button type="submit" class="btn btn-primary w-50">Generar gasto del vehiculo</button>
            </form>

            <?php
            if ($_SERVER['REQUEST_METHOD']=== 'POST'){
                $conver = 0;
                $kiloemtraje = (float)$_POST['amount'];
                switch($_POST['vehiculos']){
                    case 0: echo"Seleciona una opcion distinta.";
                    break;
                    case 1: $conver = (float) $_POST['amount'] / 12;
                        echo"<br>";
                        echo"Seleccionaste Camion de 5Ton.";
                        echo"<br>";
                        echo"Recorreras: " .$kiloemtraje  ." km," ." gastaras aproximadamente " .round($conver,2) ." galones.";
                    break;
                    case 2: $conver = (float)$_POST['amount'] / 16;
                        echo"<br>";
                        echo"Seleccionaste Camion de 3Ton.";
                        echo"<br>";
                        echo"Recorreras: " .$kiloemtraje  ." km," ." gastaras aproximadamente " .round($conver,2) ." galones.";
                    break;
                    case 3: $conver = (float)$_POST['amount'] / 22;
                        echo"<br>";
                        echo"Seleccionaste Pickup.";
                        echo"<br>";
                        echo"Recorreras: " .$kiloemtraje  ." km," ." gastaras aproximadamente " .round($conver,2) ." galones.";
                    break;
                    case 4: $conver = (float)$_POST['amount'] / 28;
                        echo"<br>";
                        echo"Seleccionaste Panel.";
                        echo"<br>";
                        echo"Recorreras: " .$kiloemtraje  ." km," ." gastaras aproximadamente " .round($conver,2) ." galones.";
                    break;
                    case 5: $conver = (float)$_POST['amount'] / 42;
                        echo"<br>";
                        echo"Seleccionaste Motocicleta.";
                        echo"<br>";
                        echo"Recorreras: " .$kiloemtraje  ." km," ." gastaras aproximadamente " .round($conver,2) ." galones.";
                    break;
                }
             
            }       
        ?>
       
</div>
    
</body>
</html>