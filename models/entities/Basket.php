<?php

namespace app\models\entities;

class Basket extends DataEntity
{
  public $id;
  public $session_id;
  public $product_id;

  public $properties = [
      'id' => false,
      'session_id' => false,
      'product_id' => false,
  ];

  public function __construct($session_id = null, $product_id = null)
  {
    $this->session_id = $session_id;
    $this->product_id = $product_id;
  }


  /**
   * @param null $id
   */
  public function setId($id): void
  {
    $this->id = $id;
    $this->properties['id'] = true;
  }

  /**
   * @param null $session_id
   */
  public function setSessionId($session_id): void
  {
    $this->session_id = $session_id;
    $this->properties['session_id'] = true;

  }

  /**
   * @param null $product_id
   */
  public function setProductId($product_id): void
  {
    $this->product_id = $product_id;
    $this->properties['product_id'] = true;

  }


  public function getTableName()
  {
    return "basket";
  }
}