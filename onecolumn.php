<?php
	include('partials/_head.php');
	include('partials/_headerWrapper.php');
	?>
		<!-- Main -->
		<div id="main-wrapper" class="subpage">
			<div class="container">
				<div class="row">
					<div class="12u skel-cell-mainContent">
						<!-- Content -->
						<article class="first last">
							<?php echo $this->generateBlock('main'); ?>
						</article>
					</div>
				</div>
			</div>
		</div>
		<!-- Footer -->
<?php
include('partials/_footerWrapper.php');
include('partials/_end.php');
?>