<x-header></x-header>

<h3>ФОРМА ДЛЯ РЕГИСТРАЦИИ</h3>
<?php
if (!isset($_GET['regbtn'])) {
    ?>
    <form action="" method="GET">
        <div class="form-group">
            <label for="login">Авторизоваться:</label>
            <input type="text" class="form-control" name="login">
        </div>
        <div class="form-group">
            <label for="pass1">Пароль:</label>
            <input type="password" class="form-control" name="pass1">
        </div>
        <div class="form-group">
            <label for="pass2">Подтверждение паролья:</label>
            <input type="password" class="form-control" name="pass2">
        </div>
        <div class="form-group">
            <label for="email">Адрес электронной почты:</label>
            <input type="text" class="form-control" name="email">
        </div>
        <button type="submit" class="btn btn-dark mt-2" name="regbtn">Регистрироватся</button>
    </form>
    <?php
} else {
    if (register($_GET['login'], $_GET['pass1'], $_GET['pass2'],$_GET['email'])) {
        echo "<h3/><span style='color:green;'>Новый пользователь зарегистрирован!</span><h3/>";
    }
}
?>
<br>
<x-footer></x-footer>
