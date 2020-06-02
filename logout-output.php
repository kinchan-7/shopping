
<?php require 'header.php'; ?>
<div class="main">
<?php
if (isset($_SESSION['customer'])) {
	unset($_SESSION['customer']);
	echo 'ログアウトしました。';
} else {
	echo 'すでにログアウトしています。';
}
?>
</div>
<?php require 'footer.php'; ?>
