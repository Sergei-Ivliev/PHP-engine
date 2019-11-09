<?php


namespace app\models\repositories;

use app\models\entities\Orders;
use app\models\Repository;

class OrdersRepository extends Repository
{
    public function FormOrder($session_id, $login, $phone)
    {
        $sql = "INSERT INTO `orders`(`session_id`, `login`, `phone`) VALUES (`$session_id`, `$login`, `$phone`)";
        return $this->db->execute($sql, [
            'session' => $session_id,
            'login' => $login,
            'phone' => $phone
        ]);
    }

  public function OrderStatus($params)
    {

      $response = [$params['id'], $params['status']];
      header('Content-Type: application/json; charset=utf-8');
      echo json_encode($response);

      $repo = (new OrdersRepository());
      $newParam = $repo->getOne($params['id']);

      switch ($params['status']) {
        case 'formed':
          echo $newParam->setFormed(1);
          break;
        case 'paid':
          echo $newParam->setPaid(1);
          break;
        case 'processed':
          echo $newParam->setProcessed(1);
          break;
      }
      $repo->save($newParam);

      exit;
    }

    public function getTableName()
    {
        return 'orders';
    }

    public function getEntityClass()
    {
        return Orders::class;
    }
}