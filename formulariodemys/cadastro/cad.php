<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados do cadastro</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="container mt-5">
        <h1>Cadastro concluído!</h1>
    </header>
    <main class="container">
        <?php 
        $nome = $_GET["nome"] ?? "Sem nome";
        $email = $_GET["email"] ?? "Sem E-mail";
        $telefone = $_GET["telefone"] ?? "Sem telefone";
        $data = $_GET["data"] ?? "Sem data";

        echo "<p>Nome: <strong>$nome</strong></p>";
        echo "<p>E-mail: <strong>$email</strong></p>";
        echo "<p>Telefone: <strong>$telefone</strong></p>";
        echo "<p>Data de nascimento: <strong>$data</strong></p>";
        ?>
        <p><a href="../login/index.html" class="btn btn-primary">Voltar para a página anterior</a></p>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
