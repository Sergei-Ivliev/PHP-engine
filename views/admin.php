<hr>
<h4> Управление заказами </h4>
<hr>

<?php

/** @var OBJECT $orders */
foreach ($orders as $one_order):?>
  <div class="one_order">
    <p>id: <?= $one_order['id'] ?></p>
    <p>Login: <?= $one_order['login'] ?></p>
    <p>Phone: <?= $one_order['phone'] ?></p>
    <p>Session: <?= $one_order['session_id'] ?></p>
  </div>

  <input type="button"
         onclick="location.href='/admin/single/?session_id=<?= $one_order['session_id'] ?>&id=<?= $one_order['id'] ?>';
             " value="Открыть заказ"/>

  <hr>

<? endforeach;
?>

<script>
    $('#adm').hide();
</script>