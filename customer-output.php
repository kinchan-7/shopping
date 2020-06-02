
<?php require 'header.php'; ?>
<?php require 'pdo.php'; ?>


<div class="main">
<?php
//ログインしている場合
if (isset($_SESSION['customer'])) {
	$id=$_SESSION['customer']['id'];
	$sql=$pdo->prepare('select * from customer where id!=? and login=?');
	$sql->execute([$id, $_REQUEST['login']]);

//ログインしていない場合
} else {
	$sql=$pdo->prepare('select * from customer where login=?');
	$sql->execute([$_REQUEST['login']]);
}

//検索結果が空の場合（ログイン名が重複していない場合）
if (empty($sql->fetchAll())) {
	if (isset($_SESSION['customer'])) {
		$sql=$pdo->prepare('update customer set name=?, address=?, '.
			'login=?, password=? where id=?');
		$sql->execute([
			$_REQUEST['name'], $_REQUEST['address'],
			$_REQUEST['login'], $_REQUEST['password'], $id]);
		$_SESSION['customer']=[
			'id'=>$id, 'name'=>$_REQUEST['name'],
			'address'=>$_REQUEST['address'], 'login'=>$_REQUEST['login'],
			'password'=>$_REQUEST['password']];
		echo 'お客様情報を更新しました。';
	} else {
		$sql=$pdo->prepare('insert into customer (name, address, login, password) values(?,?,?,?)');
		$sql->execute([
			$_REQUEST['name'], $_REQUEST['address'],
			$_REQUEST['login'], $_REQUEST['password']]);
		echo 'お客様情報を登録しました。';
	}
} else {
	echo 'ログイン名がすでに使用されていますので、変更してください。';
}
?>
</div>
<?php require 'footer.php'; ?>
