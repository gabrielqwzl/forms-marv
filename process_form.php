<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmação</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(to right, #000000, #000000);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            animation: fadeIn 1.5s ease-in-out;
            color: #fff;
            padding: 20px;
            box-sizing: border-box;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        .confirmation-container {
            background: rgba(255, 255, 255, 0.9);
            padding: 2.5em;
            border-radius: 12px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
            color: #333;
            box-sizing: border-box;
        }

        .confirmation-container:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
        }

        .confirmation-container h2 {
            margin-bottom: 1.5em;
            font-size: 2.5em;
            color: #333;
            text-align: center;
            animation: slideIn 1s ease-in-out;
        }

        @keyframes slideIn {
            from {
                transform: translateY(-20px);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .confirmation-container p {
            font-size: 1.2em;
            text-align: center;
        }

        .button-container {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-top: 2em;
        }

        .button {
            display: block;
            padding: 0.75em 1.5em;
            background-color: #6a11cb;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1.1em;
            font-weight: 500;
            text-transform: uppercase;
            transition: background-color 0.3s ease, box-shadow 0.3s ease, transform 0.3s ease;
            text-align: center;
            text-decoration: none;
        }

        .button:hover {
            background-color: #000000;
            box-shadow: 0 8px 15px rgba(37, 117, 252, 0.2);
            transform: translateY(-2px);
        }

        .button:focus {
            outline: none;
            box-shadow: 0 0 8px rgba(106, 17, 203, 0.3);
        }
    </style>
</head>

<body>
    <div class="confirmation-container">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Capture os dados do formulário
            $name = htmlspecialchars($_POST['name']);
            $congregation = htmlspecialchars($_POST['congregation']);
            $dob = htmlspecialchars($_POST['dob']);
            $group = htmlspecialchars($_POST['group']);
            $prayer = htmlspecialchars($_POST['prayer']);
            $marital_status = htmlspecialchars($_POST['marital_status']);
            $children = htmlspecialchars($_POST['children']);
            $message = htmlspecialchars($_POST['message']);
            $phone = htmlspecialchars($_POST['phone']);

            // Capture a data e hora atuais
            $timestamp = date("Y-m-d H:i:s");

            // Formate os dados para o arquivo .txt
            $data = "Data e Hora: $timestamp\n";
            $data .= "Nome completo: $name\n";
            $data .= "Congregação: $congregation\n";
            $data .= "Data de nascimento: $dob\n";
            $data .= "Grupo: $group\n";
            $data .= "Oração: $prayer\n";
            $data .= "Estado civil: $marital_status\n";
            $data .= "Filhos: $children\n";
            $data .= "História: $message\n";
            $data .= "Telefone: $phone\n";
            $data .= "-------------------------\n";

            // Defina o caminho do arquivo
            $file = 'form_data.txt';

            // Escreva os dados no arquivo
            if (file_put_contents($file, $data, FILE_APPEND | LOCK_EX)) {
                // Executa o script Python para atualizar o Excel
                $output = shell_exec("python C:/xampp/htdocs/formulario02/armazenar_em_excel.py 2>&1");

                echo "<h2>Obrigado por compartilhar sua história!</h2>";
                echo "<p>Entraremos em contato com você em breve.</p>";
            } else {
                echo "<h2>Erro</h2>";
                echo "<p>Desculpe, ocorreu um erro ao salvar seus dados. Por favor, tente novamente.</p>";
            }
        } else {
            echo "<h2>Método de solicitação inválido.</h2>";
        }
        ?>
        <div class="button-container">
            <a href="index.php" class="button">Voltar</a>
        </div>
    </div>
</body>

</html>
