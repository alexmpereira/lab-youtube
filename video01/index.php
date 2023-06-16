<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="login-page">
        <div class="form">
            <form class="register-form" method="POST" action="backend/realizar-login.php">
                <input type="text" name="username" placeholder="Username"/>
                <input type="password" name="password" placeholder="Senha"/>
                <button type="submit">Logar</button>
                <p class="message">Esqueceu a Senha? <a href="#">clique aqui</a></p>
            </form>
        </div>
    </div>
</body>
</html>