<head>
    <meta charset="UTF-8">
    <title>Главная</title>
</head>
<body>

<?php include "menu.php" ?>
<h1><?= $pageHeader ?></h1>
<?php if ( $username === null ) : ?>
    <form action="/">
        <button type="submit" name="controller" value="security">Войти</button>
        <button type="submit" name="controller" value="register">Зарегистрироваться</button>
    </form>
<?php endif; ?>
</body>