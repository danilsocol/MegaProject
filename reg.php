<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="styleReg.css">
    </head>

    <body>
        <div class="form">
            <h1>Регистрация</h1>
            <form action="check.php" method="POST">

                <input class="input-form" type="text" name="login" placeholder="Логин">
                <br>

                <input class="input-form" input type="text" name="name" placeholder="Имя" >
                <br>

                <input class="input-form" input type="text" name="pass" placeholder="Пароль">
                <br>

                <input class="input-form" input type="text" name="passRet" placeholder="Повторите Пароль">
                <br>

                <button class="btn btn-success" type="submit"> Зарегистрироваться</button>
                   
            </form>
        </div>
    </body>
</html>