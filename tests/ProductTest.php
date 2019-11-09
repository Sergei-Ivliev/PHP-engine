<?php

use app\models\entities\Products;

class ProductTest extends \PHPUnit\Framework\TestCase
{
  public function testProduct()
  {
    $name = 'Чай';
    $product = new Products($name, 'цейлонский', 300);
    $this->assertEquals($name, $product->name);
  }

}