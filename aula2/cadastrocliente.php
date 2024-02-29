<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <title>Cadastro Geral</title>
</head>
<body>
    <main id="principal">
        <header id="banner">
            <a href="index.php">HOME</a>
        </header>
        <section id="corpo">
            <form action="inserircliente.php" method="POST">
                Nome: <input type="text" name="cxnome"><br>
                Email: <input type="text/css" name="cxemail"><br>
                <input type="submit" value="Gravar">
            </form>
        </section>
    </main>
</body>
</html>