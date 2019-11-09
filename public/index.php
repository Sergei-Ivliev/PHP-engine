<?php
session_start();

use app\models\entities\{Products, DataEntity, Basket, Users, Orders};
use app\engine\{Autoload, Render, Request, TwigRender};
use app\models\repositories\{ProductRepository, OrdersRepository,UserRepository};

require_once '../vendor/autoload.php';
include "../config/config.php";
//include "../engine/Autoload.php";

spl_autoload_register([new Autoload(), 'loadClass']);


//$repo = (new OrdersRepository());
//$one = $repo->getOne(48);
//$one->setFormed(4);
//$repo->save($one);

//
//$newParam = (new OrdersRepository())->getOne(15)->setFormed(1);
////    $newParam = (new OrdersRepository())->setFormed(1);
///** @var DataEntity $newParam */
//(new OrdersRepository())->save($newParam);

//$repo = (new ProductRepository());
//$product = $repo->getOne(1);
//$product->setPrice(3030);
//$repo->save($product);




try {
  $request = new Request();

  $controllerName = $request->getControllerName() ?: 'product';
  $actionName = $request->getActionName();

  $controllerClass = "app\\controllers\\" . ucfirst($controllerName) . "Controller";


  if (class_exists($controllerClass)) {
//  $controller = new $controllerClass(new TwigRender());
    $controller = new $controllerClass(new Render());
    $controller->runAction($actionName);
  } else {
    throw new \Exception("No Controller");
  }

} catch (\PDOException $e) {
  echo $e->getMessage();
  var_dump($e->getTrace());
} catch (\Exception $e) {
  var_dump($e);
}

/** @var Products $product */

//(new Basket(null, '654646540rt64h06',3))->save();
//$user = new Users(null, 'Thomas', '000');
//$user->save();
//var_dump($user);


//$product2 = Products::getOne(15);
//$product2->save('price', '212');
//var_dump($product2);

//$product3 = Products::getAll();
//var_dump($product3);

//$user1 = Users::getAll();
//var_dump($user1);