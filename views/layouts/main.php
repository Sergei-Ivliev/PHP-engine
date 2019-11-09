<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <title>Main</title>
</head>
<body>
<a href="/">Главная</a>
<a href="/product/catalog">Каталог</a>
<a href="/basket">Корзина&nbsp;</a><span id="_count"><?= $count ?></span>
<br>
<br>


<? if ($auth and ($username == 'admin')): ?>
  <?= $username ?> <a id="adm" href="/admin">[Управление]</a><a href="/user/logout/"> [ Выход]</a>
<? elseif ($auth): ?>
  Добро пожаловать <?= $username ?> <a href="/user/logout/"> [ Выход]</a>
<? else: ?>
  <form action="/user/login/" method="post">
    <input type="text" name="login" placeholder="   Логин">
    <input type="text" name="pass" placeholder="   Пароль">
    <input type="submit" name="submit" value="Войти">
  </form>
<? endif; ?>
<?= $content ?>
</body>
</html>