<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html lang="en">
<?php include_once('common/head.php'); ?>

<body id="page-top" class="index">

	<!-- Navigation -->
	<?php include_once('common/nav.php'); ?>
	<!-- Slider -->
	<?php include_once('common/slider.php'); ?>
	<!-- Pricing -->
	<?php include_once('common/pricing.php'); ?>
	<!-- Feature -->
	<?php include_once('common/feature.php'); ?>

	<?php include_once('common/footer.php'); ?>

	<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
	<div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
		<a class="btn btn-primary" href="#page-top">
			<i class="fa fa-chevron-up"></i>
		</a>
	</div>

	

	<!-- jQuery -->
	<script src="<?php echo base_url(); ?>vendor/jquery/dist/jquery.js"></script>

	<!-- Bootstrap Core JavaScript -->
	<script src="<?php echo base_url(); ?>vendor/bootstrap/dist/js/bootstrap.js"></script>

	<!-- Plugin JavaScript -->
	<script src="<?php echo base_url(); ?>vendor/jquery.easing/jquery.easing.js"></script>
	<script src="<?php echo base_url(); ?>vendor/jquery.mousewheel/jquery.mousewheel.js"></script>
	<script src="<?php echo base_url(); ?>vendor/vaccordion/js/jquery.vaccordion.js"></script>

	<!-- Contact Form JavaScript -->
	<script src="<?php echo base_url(); ?>vendor/bootstrap.validation/jqBootstrapValidation.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/contact_me.js"></script>

	<!-- Theme JavaScript -->
	<script src="<?php echo base_url(); ?>assets/js/freelancer.js"></script>
	<script type="text/javascript">
			$(function() {
				$('#va-accordion').vaccordion({
					visibleSlices	: 4,
					expandedHeight	: 450,
					animOpacity		: 0.1,
					contentAnimSpeed: 100,
					accordionW		: "100%"
				});
			});
		</script>
</body>

</html>
