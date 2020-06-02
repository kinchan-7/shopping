
<?php require 'header.php'; ?>
<div class="main">
<?php
if (isset($_SESSION['product'])){
    echo '<a href="purchase-input.php">購入手続きへ進む</a><br>';
}

require 'cart.php';
?>
</div>
<?php require 'footer.php'; ?>
