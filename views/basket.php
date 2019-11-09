<h2>Корзина</h2>
<hr>
<form action="orders" method="post">
<button id="to_order">
    Оформить заказ
</button>
</form>
<hr>
<?php
foreach ($products as $product):?>
    <div class="item">
        <h2><?= $product['name'] ?></h2>
        <p>Описание:&nbsp;<?= $product['description'] ?></p>
        <p>Цена:&nbsp;<?= $product['price'] ?></p>

        <button class="delete" data-id="<?= $product['id_basket'] ?>">Удалить</button>
    </div>

<? endforeach; ?>

<script>
    $(document).ready(function () {
        $(".delete").on('click', function (event) {
            let id = event.currentTarget.dataset.id;
            console.log(id);
            $.ajax({
                url: "/basket/DelItem/",
                type: "POST",
                dataType: "json",
                data: {
                    id: id
                },
                error: function () {
                    console.log('error');
                },
                success: function (answer) {
                    $('#_count').text(answer['count']);
                    event.currentTarget.closest("div").remove();
                }
            })
        });
    });

</script>