<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            background-image: url('https://cdn.discordapp.com/attachments/1160333239190294701/1167201506932563998/72423da071789f4f882c31dee0c030f7-transformed.jpg?ex=654d441c&is=653acf1c&hm=7cd9f111e64e12f9c5d7d6169246726a21d32c944ef33bd14d9d8e481ff9522d&');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 400px;
            margin: 100px auto;
            padding: 20px;
            background-color: #A74D27;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            color: white;
            text-align: center;
        }

        .container input[type="text"],
        .container textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            margin-bottom: 20px;
        }

        .container select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            margin-bottom: 20px;
        }

        .container button {
            width: 100%;
            padding: 10px;
            background-color: #ff6f00;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        input[type="text"], select, button {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
        }

        button:hover {
            background-color: #5D3629;
        }
        .caixinhas{
            width: 25px;
            position: relative;
            right: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <form method="post">
            <h1>Calculadora</h1>
            <input class="caixinhas" type="text" name="num1" placeholder="Número 1" value="<?php echo isset($_POST['num1']) ? $_POST['num1'] : ''; ?>">
            <select name="operator">
                <option value="add" <?php if (isset($_POST['operator']) && $_POST['operator'] == 'add') echo 'selected'; ?>>+</option>
                <option value="sub" <?php if (isset($_POST['operator']) && $_POST['operator'] == 'sub') echo 'selected'; ?>>-</option>
                <option value="mul" <?php if (isset($_POST['operator']) && $_POST['operator'] == 'mul') echo 'selected'; ?>>*</option>
                <option value="div" <?php if (isset($_POST['operator']) && $_POST['operator'] == 'div') echo 'selected'; ?>>/</option>
                <option value="sqrt" <?php if (isset($_POST['operator']) && $_POST['operator'] == 'sqrt') echo 'selected'; ?>>Raiz Quadrada</option>
            </select>
            <input class="caixinhas" type="text" name="num2" placeholder="Número 2" value="<?php echo isset($_POST['num2']) ? $_POST['num2'] : ''; ?>">
            <button type="submit" name="calculate">Calcular</button>
            <input class="caixinhas" type="text" name="result" value="<?php
                if(isset($_POST['calculate'])) {
                    $num1 = $_POST['num1'];
                    $num2 = $_POST['num2'];
                    $operator = $_POST['operator'];

                    switch($operator) {
                        case 'add':
                            $result = $num1 + $num2;
                            break;
                        case 'sub':
                            $result = $num1 - $num2;
                            break;
                        case 'mul':
                            $result = $num1 * $num2;
                            break;
                        case 'div':
                            if($num2 == 0) {
                                $result = 'Erro: Divisão por zero!';
                            } else {
                                $result = $num1 / $num2;
                            }
                            break;
                        case 'sqrt':
                            $result = sqrt($num1);
                            break;
                            break;
                    }

                    echo $result;
                }
            ?>" disabled>
        </form>
    </div>
</body>
</html>