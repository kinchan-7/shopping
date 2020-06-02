
<?php require 'header.php'; ?>
<div class="main">
<?php
$id=$_REQUEST['id'];

if (!isset($_SESSION['product'])) {
	$_SESSION['product']=[];
}

$count=0;

if (isset($_SESSION['product'][$id])) {
	$count=$_SESSION['product'][$id]['count'];
}

$_SESSION['product'][$id]=[
	'name'=>$_REQUEST['name'],
	'price'=>$_REQUEST['price'],
	'count'=>$count+$_REQUEST['count']
];

echo '<p>カートに商品を追加しました。</p>';

echo '<hr>';

require 'cart.php';
?>
<a href="purchase-input.php">購入手続きへ進む</a>
</div>
<?php require 'footer.php'; ?>
