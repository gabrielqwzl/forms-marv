<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>⦮ BEM VINDO ⦯</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="codigo.ico" href="icone.png"> <!-- ícone -->
</head>
<body>
    <div class="form-container">
        <form id="storyForm" action="process_form.php" method="post">
            <h2>Conte pra gente quem você é!</h2>
            <div class="form-group">
                <label for="name">Nome completo</label>
                <input type="text" id="name" name="name" placeholder="Digite seu nome completo" required>
            </div>
            <div class="form-group">
                <label for="congregation">Frequenta alguma Congregação?</label>
                <select id="congregation" name="congregation" required>
                    <option value="">Selecione uma opção</option>
                    <option value="Sim">Sim</option>
                    <option value="Não">Não</option>
                    <option value="Prefiro não dizer">Prefiro não dizer</option>
                </select>
            </div>
            <div class="form-group">
                <label for="dob">Data de nascimento</label>
                <input type="date" id="dob" name="dob" required>
            </div>
            <div class="form-group">
                <label for="group">Deseja fazer parte de um grupo da igreja?</label>
                <select id="group" name="group" required>
                    <option value="">Selecione uma opção</option>
                    <option value="Sim">Sim</option>
                    <option value="Não">Não</option>
                </select>
            </div>
            <div class="form-group">
                <label for="prayer">Podemos estar orando por sua casa ou seu negócio?</label>
                <select id="prayer" name="prayer" required>
                    <option value="">Selecione uma opção</option>
                    <option value="Casa">Casa</option>
                    <option value="Negócio">Negócio</option>
                    <option value="Ambos">Ambos</option>
                    <option value="Não">Não</option>
                </select>
            </div>
            <div class="form-group">
                <label for="marital_status">Estado civil</label>
                <select id="marital_status" name="marital_status" required>
                    <option value="">Selecione uma opção</option>
                    <option value="Solteiro(a)">Solteiro(a)</option>
                    <option value="Casado(a)">Casado(a)</option>
                    <option value="Divorciado(a)">Divorciado(a)</option>
                    <option value="Viúvo(a)">Viúvo(a)</option>
                </select>
            </div>
            <div class="form-group">
                <label for="children">Quantos filhos possui?</label>
                <input type="number" id="children" name="children" min="0" required>
            </div>
            <div class="form-group">
                <label for="address">Endereço</label>
                <input type="text" id="address" name="address" placeholder="Digite seu endereço" required>
            </div>
            <div class="form-group">
                <label for="message">Conte um pouco da sua história</label>
                <textarea id="message" name="message" rows="4" placeholder="Escreva sua história aqui" required></textarea>
            </div>
            <div class="form-group">
                <label for="phone">Número de telefone</label>
                <input type="tel" id="phone" name="phone" placeholder="Digite seu número de telefone" pattern="\+?\d{10,15}" required>
            </div>
            <button type="submit">Enviar</button>
        </form>
        <div class="footerD">
            <p>Desenvolvido por João Gabriel &copy; 2024</p>
        </div>
    </div>
</body>
</html>
