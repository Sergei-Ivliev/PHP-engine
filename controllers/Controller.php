<?php

namespace app\controllers;

use app\interfaces\IRenderer;
//use app\models\entities\{Products, Basket, Users};
use app\models\repositories\{BasketRepository, UserRepository};

abstract class Controller implements IRenderer
{
  protected $action;
  protected $layout = 'main';
  protected $useLayout = true;
  private $renderer;


  public function __construct(IRenderer $renderer)
  {
    $this->renderer = $renderer;
  }


  public function runAction($action = null) {
    $this->action = $action ?: 'index';
    $method = "action" . ucfirst($this->action);
    if (method_exists($this, $method)) {

      $this->$method();
    }
    else {
      echo "404";
    }

  }

  public function render($template, $params = [])
  {
    if ($this->useLayout) {
      return $this->renderTemplate("layouts/{$this->layout}", [
          'content' => $this->renderTemplate($template, $params),
          'count' => (new BasketRepository())->getCountWhere('session_id', session_id()),
          'auth' => (new UserRepository())->isAuth(),
          'username' => (new UserRepository())->getName()
      ]);
    } else {
      return $this->renderTemplate($template, $params); //для JSON
    }
  }


  public function renderTemplate($template, $params = [])
  {
    return $this->renderer->renderTemplate($template, $params);

  }

}