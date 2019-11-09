<?php

use app\models\repositories\ProductRepository;

?>
    <hr>
    <p>Session id: <?= $session_id ?>&emsp;

        <button class="status" id="formed" data-status="formed" data-id="<?= /** @var INT $id_order */
        $id_order ?>">Оформлен
        </button>&emsp;
        <button class="status" id="paid" data-status="paid" data-id="<?= $id_order ?>">Оплачен</button>&emsp;
        <button class="status" id="processed" data-status="processed" data-id="<?= $id_order ?>">Обработан</button>

    <p>Order id: <?= $id_order ?>&emsp;</p>
    <hr>

        <script>
            $(document).ready(function () {
                $(".status").one('click', function (event) {
                    let id = event.currentTarget.dataset.id;
                    let status = event.currentTarget.dataset.status;
                    console.log(id, status);

                    $.ajax({
                        url: "/orders/OrderStatus/",
                        type: "POST",
                        dataType: "text",
                        data: {
                            id: id,
                            status: status
                        },
                        error: function (request) {
                            let statusCode = request.status;
                            console.log(statusCode);
                        },
                        success: function (response) {
                            console.log(response);
                            event.currentTarget.style = "background: #98FB98";
                        }
                    })
                });
            });

        </script>

<?php
/** @var OBJECT $single_order */
foreach ($single_order as $item) {
    $item = (new ProductRepository())->getOne($item['product_id']);
    foreach ($item as $key => $value) {
        if ($key == 'properties') continue;
        echo $key . ":  " . $value . "<br>";
    }
};

