<?php
	include('config.php');
	include('fungsi.php');

	// mendapatkan data edit
	if(isset($_GET['jenis'])) {
		$jenis	= $_GET['jenis'];
	}

	if (isset($_POST['tambah'])) {
		$jenis	= $_POST['jenis'];
		$nama 	= $_POST['nama'];

		tambahData($jenis,$nama);

		header('Location: '.$jenis.'.php');
	}

	include('header.php');
?>

<section class="content">
	<h2>Add <?php echo $jenis?></h2>

	<form class="ui form" method="post" action="tambah.php">
		<div class="inline field">
			<label>Name <?php echo $jenis ?></label>
			<input type="text" name="new" placeholder="<?php echo $jenis?> name">
			<input type="hidden" name="jenis" value="<?php echo $jenis?>">
		</div>
		<br>
		<input class="ui green button" type="submit" name="tambah" value="Save">
	</form>
</section>

<?php include('footer.php'); ?>