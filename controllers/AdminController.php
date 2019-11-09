<?php

namespace app\controllers;


use app\models\repositories\{AdminRepository};
use app\engine\Request;

class AdminController extends Controller
{
    public function actionIndex()
    {
        echo $this->render('admin', [
            'orders' => (new AdminRepository())->getOrders()
        ]);
    }

    public function actionSingle()
    {
        $params = (new Request())->getParams();
        $session_id = $params['session_id'];
        $id_order = $params['id'];
        $single_order = (new AdminRepository())->getFullOrder($session_id);
        echo $this->render("single", [
            'session_id' => $session_id,
            'single_order' => $single_order,
            'id_order' => $id_order
        ]);

    }

}