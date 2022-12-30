<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Авторизация</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1"
        crossorigin="anonymous">
    <style>
        .sign-in-form {
            margin: auto;
        }
        .username {
            margin-bottom: 10px;
            /*border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;*/
        }
        .password {
            margin-bottom: 10px;
            /*border-top-left-radius: 0;
            border-top-right-radius: 0;*/
        }
    </style>
</head>
<body>
<div class="container text-center">
    <div class="row">
        <form method="post" class="sign-in-form mt-5 mt-md-5 col-lg-4 col-md-5 col-sm-8">
            <h3>Регистрация</h3>
            <div class="alert alert-danger <?=$error === null ? 'visually-hidden' : ''?>">
                <?=$error?>
            </div>
            <label for="name" class="visually-hidden">Введите Ваше имя</label>
            <input type="text" id="name" name="name" class="form-control mt-3 username" placeholder="Введите Ваше имя" required="" autofocus="">
            <label for="username" class="visually-hidden">Введите имя пользователя</label>
            <input type="text" id="username" name="username" class="form-control mt-3 username" placeholder="Введите имя пользователя" required="">
            <label for="password_01" class="visually-hidden">Введите пароль</label>
            <input type="password" id="password01" name="password01" class="form-control password" placeholder="Введите пароль" required="">
            <label for="password_02" class="visually-hidden">Повторите пароль</label>
            <input type="password" id="password02" name="password02" class="form-control password" placeholder="Повторите пароль" required="">
            <button class="w-75 btn btn-lg btn-primary mt-1" type="submit">Зарегистрироваться</button>
            <div class="mt-3">
                <a href="/">Назад</a>
            </div>
        </form>
    </div>
</div>
</body>