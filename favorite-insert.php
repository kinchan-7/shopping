
<?php require 'header.php'; ?>
<?php require 'pdo.php'; ?>
<div class="main">
<?php
if (isset($_SESSION['customer'])) {
	$sql=$pdo->prepare('insert into favorite (customer_id, product_id) values(?,?)');
	$sql->execute([$_SESSION['customer']['id'], $_REQUEST['id']]);
	echo 'お気に入りに商品を追加しました。';
	echo '<hr>';
	require 'favorite.php';
} else {
	echo 'お気に入りに商品を追加するには、ログインしてください。';
}
?>
</div>
<?php require 'footer.php'; ?>
