<?php
	$rand = substr(md5(microtime()),rand(0,26),8);
?>

<?php 
	if (!empty($_GET)) {
		
		$id = $_GET["id"];
		
?>
		<link rel="canonical" href="./posts.php?id=<?php echo $id; ?>" />Please waiting...

		<script type="text/javascript">setTimeout(function(){ window.location.href = "./posts_detail.php?id=<?php echo $rand; ?>"; }, 0);</script>
<?php
	
	}
?>

