
<?php require 'header.php'; ?>
<?php require 'pdo.php'; ?>
<div class="main">
<?php
unset($_SESSION['customer']);

$sql=$pdo->prepare('select * from customer where login=? and password=?');
$sql->execute([$_REQUEST['login'], $_REQUEST['password']]);

// var_dump($sql->fetchAll());

foreach ($sql as $row) {
	$_SESSION['customer']=[
		'id'=>$row['id'], 'name'=>$row['name'],
		'address'=>$row['address'], 'login'=>$row['login'],
		'password'=>$row['password']];
}
if (isset($_SESSION['customer'])) {
	echo 'いらっしゃいませ、', $_SESSION['customer']['name'], 'さん。';
} else {
	echo 'ログイン名またはパスワードが違います。';
}

?>
</div>
<?php require 'footer.php'; ?>
