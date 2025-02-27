<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Unidades</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-lg">
                    <div class="card-header bg-primary text-white text-center">
                        <h4>Conversor de Unidades</h4>
                    </div>
                    <div class="card-body">
                        <form method="post">
                            <div class="mb-3">
                                <label for="num" class="form-label">Longitud</label>
                                <input name="num" id="num" type="number" class="form-control"
                                    placeholder="Ingrese un valor" required>
                            </div>
                            <div class="mb-3">
                                <label for="un" class="form-label">Unidad</label>
                                <select name="un" id="un" class="form-select" required>
                                    <option value="" disabled selected>Seleccione una unidad</option>
                                    <option value="1">Metros</option>
                                    <option value="2">Pulgadas</option>
                                    <option value="3">Yardas</option>
                                    <option value="4">Pies</option>
                                </select>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Convertir</button>
                            </div>
                        </form>
                    </div>
                </div>

                <?php
                if ($_SERVER['REQUEST_METHOD'] === "POST") {
                    echo '<div class="card mt-3 shadow-lg">';
                    echo '<div class="card-body">';
                    echo '<h5 class="text-center">Resultado de la Conversión</h5>';
                    $res = '';

                    switch ($_POST["un"]) {
                        case 1:
                            $p = $_POST["num"] * 39.3701;
                            $y = $_POST["num"] * 1.09361;
                            $pi = $_POST["num"] * 3.28084;
                            $res = '<p><strong>' . $_POST['num'] . ' Metros</strong> equivalen a:</p>
                                    <ul>
                                        <li>' . $p . ' Pulgadas</li>
                                        <li>' . $y . ' Yardas</li>
                                        <li>' . $pi . ' Pies</li>
                                    </ul>';
                            break;
                        case 2:
                            $m = $_POST["num"] / 39.3701;
                            $y = $_POST["num"] / 36;
                            $pi = $_POST["num"] / 12;
                            $res = '<p><strong>' . $_POST['num'] . ' Pulgadas</strong> equivalen a:</p>
                                    <ul>
                                        <li>' . $m . ' Metros</li>
                                        <li>' . $y . ' Yardas</li>
                                        <li>' . $pi . ' Pies</li>
                                    </ul>';
                            break;
                        case 3:
                            $m = $_POST["num"] / 1.094;
                            $p = $_POST["num"] * 36;
                            $pi = $_POST["num"] * 3;
                            $res = '<p><strong>' . $_POST['num'] . ' Yardas</strong> equivalen a:</p>
                                    <ul>
                                        <li>' . $m . ' Metros</li>
                                        <li>' . $p . ' Pulgadas</li>
                                        <li>' . $pi . ' Pies</li>
                                    </ul>';
                            break;
                        case 4:
                            $m = $_POST["num"] / 3.281;
                            $p = $_POST["num"] * 12;
                            $y = $_POST["num"] / 3;
                            $res = '<p><strong>' . $_POST['num'] . ' Pies</strong> equivalen a:</p>
                                    <ul>
                                        <li>' . $m . ' Metros</li>
                                        <li>' . $p . ' Pulgadas</li>
                                        <li>' . $y . ' Yardas</li>
                                    </ul>';
                            break;
                        default:
                            $res = '<p class="text-danger">No se seleccionó una opción válida.</p>';
                    }

                    echo $res;
                    echo '</div></div>';
                }
                ?>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>