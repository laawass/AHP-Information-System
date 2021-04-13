<?php
	include('config.php');
	include('fungsi.php');

	include('header.php');
?>
<section class="content">
	<h2 class="ui header">Comparison of Criteria</h2>
	<?php showTabelPerbandingan('kriteria','kriteria'); ?>
</section>

<?php include('footer.php'); ?>