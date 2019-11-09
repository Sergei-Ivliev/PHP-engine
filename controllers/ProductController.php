<?php

namespace app\controllers;

use app\models\repositories\ProductRepository;

class ProductController extends Controller
{

  public function actionIndex()
  {
    echo $this->render("index");
  }

  public function actionCard()
  {
    $id = (int)$_GET['id'];
    $product = (new ProductRepository())->getOne($id);
    echo $this->render("card", [
        'product' => $product
    ]);
  }

  public function actionCatalog()
  {
    $page = (int)$_GET['page'] ?? 0;
    $page++;
    $limit = $page * 2;
    $products = (new ProductRepository())->getLimit(0, $limit);
    echo $this->render("catalog", [
        'products' => $products,
        'page' => $page
    ]);
  }

  public function actionApiCatalog()
  {
    $page = (int)$_GET['page'] ?? 0;
    $page++;
    $limit = $page * 2;
    $products = (new ProductRepository())->getLimit(0, $limit);
    header('Content-Type: application/json');

    echo json_encode([
        'products' => $products,
        'page' => $page
    ], JSON_UNESCAPED_UNICODE | JSON_NUMERIC_CHECK);
  }

}