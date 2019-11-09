<br>
Каталог: <br>

<? foreach ($products as $product): ?>
    <h2><a href="/product/card/?id=<?= $product['id'] ?>">
            <?= $product['name'] ?></a></h2>
    <p><?= $product['description'] ?></p>
    <p>Цена: <?= $product['price'] ?></p>

    <button class="action" data-id="<?= $product['id'] ?>">Купить</button><br>
<? endforeach; ?>

<br>
<a href="/product/catalog/?page=<?= $page ?>"> Еще</a>

<script>
    $(document).ready(function () {
        $(".action").on('click', function (event) {
            let id = event.currentTarget.dataset.id;
            console.log(id);
            $.ajax({
                url: "/basket/AddBasket/",
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

                }
            })
        });
    });

</script>