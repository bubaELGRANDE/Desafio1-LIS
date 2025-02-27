<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            width: 100%;
            height: 100vh;
        }

        form {
            position: relative;
            width: auto;
            max-width: 250px;
            gap: 1rem;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .select {
            width: 100%;
            position: relative;
            cursor: pointer;
            border-radius: 1rem;
            padding: 0.5rem;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            color: rgb(35, 35, 124);

        }

        .selected {
            width: 100%;
            margin-bottom: 0.2rem;
            position: relative;
            display: flex;
            gap: 1rem;
            padding: 0.5rem;
            border-radius: 0.2rem;
            border: 1px solid rgb(35, 35, 124);
        }

        .option {
            position: relative;
            display: flex;
            gap: 1rem;
            padding: 0.5rem;
            background-color: aliceblue;
        }

        .option:hover {
            background-color: rgb(199, 226, 251);
        }

        .options {
            display: none;
        }

        .hidden {
            visibility: hidden;
        }

        .value-form {
            color: rgb(35, 35, 124);
            font-weight: bold;
            outline: none;
            padding: 0.5rem;
            border: 1px solid rgb(35, 35, 124);
        }

        h3 {
            color: rgb(35, 35, 124);
        }
    </style>

</head>

<body>
    <div class="container">
        <h1><i>MiConversor</i>💰</h1>
        <form method="post" action="index.php">
            <input type="number" name="num" id="num" class="value-form">

            <div class="select" id="currencySelect1">
                <div class="selected" id="selectedOption1">
                    <img src="https://flagcdn.com/w40/us.png" alt="USD">
                    <span>Dólares Americanos</span>
                </div>
                <div class="options" id="optionsList1">
                    <div class="option op1" data-value="1" data-flag="https://flagcdn.com/w40/us.png">
                        <img src="https://flagcdn.com/w40/us.png" alt="USD"> Dólares Americanos
                    </div>
                    <div class="option op1" data-value="2" data-flag="https://flagcdn.com/w40/eu.png">
                        <img src="https://flagcdn.com/w40/eu.png" alt="EUR"> Euros
                    </div>
                    <div class="option op1" data-value="3" data-flag="https://flagcdn.com/w40/jp.png">
                        <img src="https://flagcdn.com/w40/jp.png" alt="JPY"> Yen Japonés
                    </div>
                    <div class="option op1" data-value="4" data-flag="https://flagcdn.com/w40/gb.png">
                        <img src="https://flagcdn.com/w40/gb.png" alt="GBP"> Libra Esterlina
                    </div>
                </div>
            </div>

            <button type="submit">
                ==>
            </button>

            <div class="select" id="currencySelect2">
                <div class="selected" id="selectedOption2">
                    <img src="https://flagcdn.com/w40/us.png" alt="USD">
                    <span>Dólares Americanos</span>
                </div>
                <div class="options" id="optionsList2">
                    <div class="option op2" data-value="1" data-flag="https://flagcdn.com/w40/us.png">
                        <img src="https://flagcdn.com/w40/us.png" alt="USD"> Dólares Americanos
                    </div>
                    <div class="option op2" data-value="2" data-flag="https://flagcdn.com/w40/eu.png">
                        <img src="https://flagcdn.com/w40/eu.png" alt="EUR"> Euros
                    </div>
                    <div class="option op2" data-value="3" data-flag="https://flagcdn.com/w40/jp.png">
                        <img src="https://flagcdn.com/w40/jp.png" alt="JPY"> Yen Japonés
                    </div>
                    <div class="option op2" data-value="4" data-flag="https://flagcdn.com/w40/gb.png">
                        <img src="https://flagcdn.com/w40/gb.png" alt="GBP"> Libra Esterlina
                    </div>
                </div>
            </div>

            <input type="number" name="inicio" id="inicio" class="hidden">
            <input type="number" name="destino" id="destino" class="hidden">
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
                                $res = '<h3>' . $_POST['num'] . 'dolar americano</h3><p>=</p><h3>' . $conver . 'Dolar americano</h3>';
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
                                $res = '<h3>' . $_POST['num'] . ' Euros </h3><p>=</p><h3>' . $conver . 'dolar americano</h3>';
                                break;
                            case 2:
                                $conver = $pre * 0.95;
                                $res = '<h3>' . $_POST['num'] . ' Euros </h3><p>=</p><h3>' . $conver . ' Euro</h3>';
                                break;
                            case 3:
                                $conver = $pre * 149.57;
                                $res = '<h3>' . $_POST['num'] . ' Euros </h3><p>=</p><h3>' . $conver . ' Yen Japones</h3>';
                                break;
                            case 4:
                                $conver = $pre * 0.79;
                                $res = '<h3>' . $_POST['num'] . ' Euros </h3><p>=</p><h3>' . $conver . ' Libra esterlina</h3>';
                                break;
                        }
                        break;
                    case 3:
                        $pre = $_POST['num'] / 149.57;
                        switch ($_POST["destino"]) {
                            case 1:
                                $conver = $pre;
                                $res = '<h3>' . $_POST['num'] . ' Yen Japones</h3><p>=</p><h3>' . $conver . 'dolar americano</h3>';
                                break;
                            case 2:
                                $conver = $pre * 0.95;
                                $res = '<h3>' . $_POST['num'] . ' Yen Japones</h3><p>=</p><h3>' . $conver . ' Euro</h3>';
                                break;
                            case 3:
                                $conver = $pre * 149.57;
                                $res = '<h3>' . $_POST['num'] . ' Yen Japones</h3><p>=</p><h3>' . $conver . ' Yen Japones</h3>';
                                break;
                            case 4:
                                $conver = $pre * 0.79;
                                $res = '<h3>' . $_POST['num'] . ' Yen Japones</h3><p>=</p><h3>' . $conver . ' Libra esterlina</h3>';
                                break;
                        }
                        break;
                    case 4:
                        $pre = $_POST['num'] / 0.79;
                        switch ($_POST["destino"]) {
                            case 1:
                                $conver = $pre;
                                $res = '<h3>' . $_POST['num'] . ' Libra esterlina </h3><p>=</p><h3>' . $conver . 'dolar americano</h3>';
                                break;
                            case 2:
                                $conver = $pre * 0.95;
                                $res = '<h3>' . $_POST['num'] . ' Libra esterlina </h3><p>=</p><h3>' . $conver . ' Euro</h3>';
                                break;
                            case 3:
                                $conver = $pre * 149.57;
                                $res = '<h3>' . $_POST['num'] . ' Libra esterlina </h3><p>=</p><h3>' . $conver . ' Yen Japones</h3>';
                                break;
                            case 4:
                                $conver = $pre * 0.79;
                                $res = '<h3>' . $_POST['num'] . ' Libra esterlina </h3><p>=</p><h3>' . $conver . ' Libra esterlina</h3>';
                                break;
                        }
                        break;
                    default:
                        $res = 'no se selecciono una opcion';
                }
            } else {
                echo 'Ingresa un numero';
            }

            echo $res;
        } else {
            echo 'No se ejecutado';
        }
        ?>


    </div>
    <script>
        const currencySelect1 = document.getElementById("currencySelect1");
        const selectedOption1 = document.getElementById("selectedOption1");
        const optionsList1 = document.getElementById("optionsList1");

        const currencySelect2 = document.getElementById("currencySelect2");
        const selectedOption2 = document.getElementById("selectedOption2");
        const optionsList2 = document.getElementById("optionsList2");

        currencySelect1.addEventListener("click", () => {
            optionsList1.style.display = optionsList1.style.display === "block" ? "none" : "block";
        });
        currencySelect2.addEventListener("click", () => {
            optionsList2.style.display = optionsList2.style.display === "block" ? "none" : "block";
        });

        document.querySelectorAll(".op1").forEach(option => {
            option.addEventListener("click", () => {
                const flag = option.getAttribute("data-flag");
                const text = option.innerText;
                document.getElementById("inicio").value = option.dataset.value
                selectedOption1.innerHTML = `<img src="${flag}" alt="${text}"> <span>${text}</span>`;
                optionsList1.style.display = "none";

            });
        });

        document.querySelectorAll(".op2").forEach(option => {
            option.addEventListener("click", () => {
                const flag = option.getAttribute("data-flag");
                const text = option.innerText;
                document.getElementById("destino").value = option.dataset.value
                selectedOption2.innerHTML = `<img src="${flag}" alt="${text}"> <span>${text}</span>`;
                optionsList2.style.display = "none";
            });
        });

        // Cerrar el menú si se hace clic fuera
        document.addEventListener("click", (event) => {
            if (!currencySelect1.contains(event.target)) {
                optionsList1.style.display = "none";
            }

            if (!currencySelect2.contains(event.target)) {
                optionsList2.style.display = "none";
            }
        });

        document.querySelector("form").addEventListener("submit", function (event) {
            console.log("Enviando formulario...");
            console.log("Número:", document.getElementById("num").value);
            console.log("Inicio:", document.getElementById("inicio").value);
            console.log("Destino:", document.getElementById("destino").value);
        });

    </script>

</body>

</html>