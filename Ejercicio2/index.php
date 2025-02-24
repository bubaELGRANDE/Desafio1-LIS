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
        <select name="un" id="un">
            <option value="1">Metros</option>
            <option value="2">Pulgadas</option>
            <option value="3">Yardas</option>
            <option value="4">Pies</option>
        </select>
        <button type="submit">Convertir</button>
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === "POST") {
        $res = '';
        switch ($_POST["un"]) {
            case 1:
                $p = $_POST["num"] * 39.3701;
                $y = $_POST["num"] * 1.09361;
                $pi = $_POST["num"] * 3.28084;
                $res = '<h3>Convirtiendo' . $_POST['num'] . ' metros a:</h3><p>Pulgadas:' . $p . '</p><p>Yardas:' . $y . '</p><p>Pies:' . $pi . '</p>';
                break;
            case 2:
                $m = $_POST["num"] / 39.3701;
                $y = $_POST["num"] / 36;
                $pi = $_POST["num"] / 12;
                $res = '<h3>Convirtiendo' . $_POST['num'] . 'pulgadas a:</h3>
                            <p>Metros:' . $m . '</p>
                            <p>Yardas:' . $y . '</p>
                            <p>Pies:' . $pi . '</p>';
                break;
            case 3:
                $m = $_POST["num"] / 1.094;
                $p = $_POST["num"] * 36;
                $pi = $_POST["num"] * 3;
                $res = '<h3>Convirtiendo' . $_POST['num'] . 'yardas a:</h3>
                                <p>Metros:' . $m . '</p>
                                <p>Pulgadas:' . $p . '</p>
                                <p>Pies:' . $pi . '</p>';
                break;
            case 4:
                $m = $_POST["num"] / 3.281;
                $p = $_POST["num"] * 12;
                $y = $_POST["num"] / 3;
                $res = '<h3>Convirtiendo' . $_POST['num'] . 'pies a:</h3>
                                    <p>Metros:' . $m . '</p>
                                    <p>Pulgadas:' . $p . '</p>
                                    <p>Yardas:' . $y . '</p>';
                break;
            default:
                $res = 'no se selecciono una opcion';
        }

        echo $res;
    } else {
        echo 'noda';
    }
    ?>
</body>

</html>