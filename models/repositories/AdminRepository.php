<?php

namespace app\models\repositories;

use app\models\entities\Admin;
use app\models\Repository;

class AdminRepository extends Repository
{

    public function getOrders()
  {
    $sql1 = "SELECT * FROM `orders` WHERE 1";
    return $this->db->queryAll($sql1);
  }

  public function getFullOrder($session_id)
  {
    $sql2 = "SELECT `product_id` FROM `basket` WHERE `session_id`= '$session_id'";
    return $this->db->queryAll($sql2);
  }


    public function getItem($id) {
    $sql3 = "SELECT * FROM `products` WHERE `id`= $id";
    return $this->db->queryOne($sql3);
  }


  public function getTableName()
  {
    return null;
  }

  public function getEntityClass()
  {
    return Admin::class;
  }
}