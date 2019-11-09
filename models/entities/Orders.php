<?php


namespace app\models\entities;


class Orders extends DataEntity
{
  public $id;
  public $session_id;
  public $login;
  public $phone;
  public $formed;
  public $paid;
  public $processed;

  public $properties = [
      'id' => false,
      'session_id' => false,
      'login' => false,
      'phone' => false,
      'formed' => false,
      'paid' => false,
      '$processed' => false
  ];

  public function __construct(
      $session_id = null,
      $login = null,
      $phone = null,
      $formed = null,
      $paid = null,
      $processed = null
  )
  {
    $this->session_id = $session_id;
    $this->login = $login;
    $this->phone = $phone;
    $this->formed = $formed;
    $this->paid = $paid;
    $this->processed = $processed;
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
   * @param null $login
   */
  public function setLogin($login): void
  {
    $this->login = $login;
    $this->properties['login'] = true;
  }

  /**
   * @param null $phone
   */
  public function setPhone($phone): void
  {
    $this->phone = $phone;
    $this->properties['phone'] = true;
  }

  /**
   * @param null $formed
   */
  public function setFormed($formed): void
  {
    $this->formed = $formed;
    $this->properties['formed'] = true;
  }

  /**
   * @param null $paid
   */
  public function setPaid($paid): void
  {
    $this->paid = $paid;
    $this->properties['paid'] = true;
  }

  /**
   * @param null $processed
   */
  public function setProcessed($processed): void
  {
    $this->processed = $processed;
    $this->properties['processed'] = true;
  }


  public function getTableName()
  {
    return "orders";
  }
}