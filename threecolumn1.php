<?php
	include('partials/_head.php');
	include('partials/_headerWrapper.php');
	?>
		<!-- Main -->
		<div id="main-wrapper" class="subpage">
			<div class="container">
				<div class="row">
					<div class="6u skel-cell-mainContent">
						<!-- Content -->
						<article class="first">
							<?php echo $this->generateBlock('main'); ?>
						</article>
					</div>
					<div class="3u">
						<!-- Sidebar 1 -->
						<section>
							<?php echo $this->generateBlock('home2'); ?>
						</section>
					</div>
					<div class="3u">
						<!-- Sidebar 2 -->
						<section>
							<?php echo $this->generateBlock('home3'); ?>
						</section>
					</div>
				</div>
			</div>
		</div>
<?php
include('partials/_footerWrapper.php');
include('partials/_end.php');
?>
