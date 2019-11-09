<?php
$session_id = session_id();
?>
<br>
<form action="/orders/FormOrder" method="post" id="to_order">
  <input type="text" name="login" placeholder="   e@mail"> Введите e@mail<br><br>
  <input type="text" name="phone" placeholder="   79087654321"> Ваш номер телефона<br><br>
</form>
<button id="ordering"
        type="submit"
        form="to_order"
        name="session_id"
        value="<?= $session_id ?>">
  Заказать
</button>