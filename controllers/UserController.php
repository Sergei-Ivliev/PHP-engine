<?php

namespace app\controllers;

use app\engine\Request;
use app\models\repositories\UserRepository;

class UserController extends Controller
{

  public function actionIndex()
  {
    $users = (new UserRepository())->getAll();
    echo $this->render("users", [
        'users' => $users
    ]);
  }

  public function actionLogout()
  {
    session_destroy();
    header("Location: /");
    exit();
  }


  public function actionLogin()
  {
    $params = (new Request())->getParams();
    if ($params['login'] == null) {
      echo("<script>
              alert('Введите имя!');
              window.location = '/';
            </script>");
    } elseif ($params['pass'] == null) {
      echo("<script>
              alert('Введите пароль!');
              window.location = '/';
            </script>");
    } else {
      $login = $params['login'];
      $pass = $params['pass'];

      if ((new UserRepository())->auth($login, $pass) == false) {
        echo("<script>
              alert('Неверный пароль!');
              window.location = '/';
            </script>");
      } else
        header("Location: /");
      exit();
    }
  }

}