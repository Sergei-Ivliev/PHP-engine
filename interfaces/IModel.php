<?php


namespace app\interfaces;

use app\models\entities\DataEntity;

interface IModel
{
  public function getOne($id);

  public function getAll();

  public function getTableName();

}