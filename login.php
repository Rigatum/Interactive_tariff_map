<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Authorization</title>
</head>
<body>

    <h2 style="text-align:center;padding-top:100px" >Вход в панель администратора</h2>
    
    <form action="admin/admin.php" method="post" style="text-align:center;padding-top:60px">
    <div class="form-group">
    <input type="text" placeholder="Введите логин" name="login">
    </div>
    <div class="form-group">
    <input type="text" placeholder="Введите пароль" name="password">
    </div>
        <button type="submit" class="btnn btn-primary">Войти</button>
    </form>

</body>
</html>