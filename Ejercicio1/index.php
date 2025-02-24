<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post">
        <span>Longuitud</span>
        <input name="num" id="num" type="number" placeholder="datos">
        <span>Unidad</span>
        <select name="inicio" id="inicio">
            <option value="1">Dolar Americano</option>
            <option value="2">Euro</option>
            <option value="3">Yen Japone</option>
            <option value="4">Libra esterlina</option>
        </select>
        <select name="destino" id="destino">
            <option value="1">Dolar Americano</option>
            <option value="2">Euro</option>
            <option value="3">Yen Japone</option>
            <option value="4">Libra esterlina</option>
        </select>
        <button type="submit">Convertir</button>
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === "POST") {
        if (isset($_POST["num"])) {
            $res = '';
            switch ($_POST["inicio"]) {
                case 1:
                    switch ($_POST["destino"]) {
                        case 1:
                            $conver = $_POST["num"];
                            $res = '<h3>' . $_POST['num'] . 'dolar americano</h3><p>=</p><h3>' . $conver . 'dolar americano</h3>';
                            break;
                        case 2:
                            $conver = $_POST["num"] * 0.95;
                            $res = '<h3>' . $_POST['num'] . 'dolar americano</h3><p>=</p><h3>' . $conver . ' Euro</h3>';
                            break;
                        case 3:
                            $conver = $_POST["num"] * 149.57;
                            $res = '<h3>' . $_POST['num'] . 'dolar americano</h3><p>=</p><h3>' . $conver . ' Yen Japones</h3>';
                            break;
                        case 4:
                            $conver = $_POST["num"] * 0.79;
                            $res = '<h3>' . $_POST['num'] . 'dolar americano</h3><p>=</p><h3>' . $conver . ' Libra esterlina</h3>';
                            break;
                    }
                    break;
                case 2:
                    $pre = $_POST['num'] * 1.05;
                    switch ($_POST["destino"]) {
                        case 1:
                            $conver = $pre;
                            $res = '<h3>' . $_POST['num'] . 'dolar americano</h3><p>=</p><h3>' . $conver . 'dolar americano</h3>';
                            break;
                        case 2:
                            $conver = $pre * 0.95;
                            $res = '<h3>' . $_POST['num'] . 'dolar americano</h3><p>=</p><h3>' . $conver . ' Euro</h3>';
                            break;
                        case 3:
                            $conver = $pre * 149.57;
                            $res = '<h3>' . $_POST['num'] . 'dolar americano</h3><p>=</p><h3>' . $conver . ' Yen Japones</h3>';
                            break;
                        case 4:
                            $conver = $pre * 0.79;
                            $res = '<h3>' . $_POST['num'] . 'dolar americano</h3><p>=</p><h3>' . $conver . ' Libra esterlina</h3>';
                            break;
                    }
                    break;
                case 3:
                    $pre = $_POST['num'] / 149.57;
                    switch ($_POST["destino"]) {
                        case 1:
                            $conver = $pre;
                            $res = '<h3>' . $_POST['num'] . 'dolar americano</h3><p>=</p><h3>' . $conver . 'dolar americano</h3>';
                            break;
                        case 2:
                            $conver = $pre * 0.95;
                            $res = '<h3>' . $_POST['num'] . 'dolar americano</h3><p>=</p><h3>' . $conver . ' Euro</h3>';
                            break;
                        case 3:
                            $conver = $pre * 149.57;
                            $res = '<h3>' . $_POST['num'] . 'dolar americano</h3><p>=</p><h3>' . $conver . ' Yen Japones</h3>';
                            break;
                        case 4:
                            $conver = $pre * 0.79;
                            $res = '<h3>' . $_POST['num'] . 'dolar americano</h3><p>=</p><h3>' . $conver . ' Libra esterlina</h3>';
                            break;
                    }
                    break;
                case 4:
                    $pre = $_POST['num'] / 0.79;
                    switch ($_POST["destino"]) {
                        case 1:
                            $conver = $pre;
                            $res = '<h3>' . $_POST['num'] . 'dolar americano</h3><p>=</p><h3>' . $conver . 'dolar americano</h3>';
                            break;
                        case 2:
                            $conver = $pre * 0.95;
                            $res = '<h3>' . $_POST['num'] . 'dolar americano</h3><p>=</p><h3>' . $conver . ' Euro</h3>';
                            break;
                        case 3:
                            $conver = $pre * 149.57;
                            $res = '<h3>' . $_POST['num'] . 'dolar americano</h3><p>=</p><h3>' . $conver . ' Yen Japones</h3>';
                            break;
                        case 4:
                            $conver = $pre * 0.79;
                            $res = '<h3>' . $_POST['num'] . 'dolar americano</h3><p>=</p><h3>' . $conver . ' Libra esterlina</h3>';
                            break;
                    }
                    break;
                default:
                    $res = 'no se selecciono una opcion';
            }
        }
        else{
            echo 'Ingresa un numero';
        }

        echo $res;
    } else {
        echo 'noda';
    }
    ?>
</body>

</html>