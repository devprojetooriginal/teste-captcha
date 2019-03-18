

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <title>Document</title>

</head>

<body>

    <h1>Exemplo de formulário com o reCaptcha</h1>

    

    <form action="?" method="post">

    Digite seu nome: <input type="text" name="nome"><br><br>

    Deixe sua mensagem: <br>

    <textarea name="mensagem" rows="7" cols="35"></textarea><br><br>

    <div class="g-recaptcha" data-sitekey="6LdiYZgUAAAAAEiqDJQlxMH2BxrAbKRP69ROGll6"></div>

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <input type="submit" value="Submit" name="formulario">

    </form>

</body>

</html>
