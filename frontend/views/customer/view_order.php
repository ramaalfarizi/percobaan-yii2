<?php
foreach ($orders as $order) {
    foreach ($order->customers as $customer) {
        $temp_customer_id = $customer->id;
?>
        <h4 style="margin: 0; margin-top: 30px;"><?= $customer->nama ?></h4>
    <?php
    }

    if ($order->customer_id == $temp_customer_id) {
    ?>
        <p style="margin: 0;">Nomor order: <?= $order->id ?></p>
        <p style="margin: 0;">Tanggal order: <?= $order->date ?></p>
        <h6 style="margin: 0; margin-top: 10px;">Item:</h6>
        <ul style="list-style-type: square;">
            <?php
            foreach ($order->items as $item) {
                if ($order->id == $item['order_id']) {
            ?>
                    <li style="margin: 0;"><?= $item['name'] ?></li>
            <?php
                }
            }
            ?>
        </ul>
<?php
    }
}
?>