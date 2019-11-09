<?php


namespace app\controllers;

use app\models\entities\Orders;
use app\models\repositories\OrdersRepository;
use app\engine\Request;

class OrdersController extends Controller
{
  public function actionIndex()
  {
    $params = (new Request())->getParams();
    $session_id = $params['session_id'];
    echo $this->render("orders", [
        'session_id' => $session_id
    ]);
  }

  public function actionFormOrder()
  {
    (new OrdersRepository())->save(new Orders(session_id(),
        (new Request())->getParams()['login'],
        (new Request())->getParams()['phone']));

    session_regenerate_id();

    header("Location: /");
  }

  public function actionOrderStatus()
  {
    $params = (new Request())->getParams();
    (new OrdersRepository())->OrderStatus($params);

//    $response = [$params['id'], $params['status']];
//    header('Content-Type: application/json; charset=utf-8');
//    echo json_encode($response);
//
//    $repo = (new OrdersRepository());
//    $newParam = $repo->getOne($params['id']);
//
//    switch ($params['status']) {
//      case 'formed':
//        echo $newParam->setFormed(1);
//        break;
//      case 'paid':
//        echo $newParam->setPaid(1);
//        break;
//      case 'processed':
//        echo $newParam->setProcessed(1);
//        break;
//    }
//    $repo->save($newParam);
//
//    exit;
  }

}