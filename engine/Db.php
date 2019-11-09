<?php

namespace app\engine;

use app\traits\Tsingletone;

class Db
{
  use Tsingletone;

  private $config = [
      'driver' => 'mysql',
      'host' => 'localhost',
      'login' => 'root',
      'password' => '',
      'database' => 'shop',
      'charset' => 'utf8'
  ];

  private $connection = null;

  private function getConnection()
  {
    if (is_null($this->connection)) {
      $this->connection = new \PDO($this->prepareDsnString(),
          $this->config['login'],
          $this->config['password']
      );
    }
    $this->connection->setAttribute(
        \PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_ASSOC);
    $this->connection->setAttribute(
        \PDO::ATTR_EMULATE_PREPARES, false);
    return $this->connection;
  }

  private function prepareDsnString()
  {
    return sprintf("%s:host=%s;dbname=%s;charset=%s",
        $this->config['driver'],
        $this->config['host'],
        $this->config['database'],
        $this->config['charset']
    );
  }

  private function query($sql, $params)
  {
    $pdoStatement = $this->getConnection()->prepare($sql);
    $pdoStatement->execute($params);
    return $pdoStatement;
  }

  /**
   * @param $sql
   * @param $params
   * @param $class
   * @return mixed
   * @throws \Exception
   */
  public function queryObject($sql, $params, $class)
  {
    $pdoStatement = $this->query($sql, $params);
    $pdoStatement->setFetchMode(\PDO::FETCH_CLASS | \PDO::FETCH_PROPS_LATE, $class);
    $obj =  $pdoStatement->fetch();
    if (!$obj) {
      throw new \Exception("Продукт не найден", 404);
//      return false;
    }
    return $obj;
  }

  public function execute($sql, $params)
  {
    $this->query($sql, $params);
    return true;
  }

  public function queryOne($sql, $param = [])
  {
    return $this->queryAll($sql, $param)[0];
  }

  public function queryAll($sql, $param = [])
  {
    return $this->query($sql, $param)->fetchAll();
  }

  public function __toString()
  {
    return "Db";
  }


  public function lastInsertId()
  {
    return $this->connection->lastInsertId();
  }


}