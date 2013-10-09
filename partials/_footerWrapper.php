<?php
$copyright = '&copy; Untitled. All rights reserved. | Images: <a href="http://fotogrph.com/">fotogrph</a> + <a href="http://iconify.it/">Iconify.it</a> | Design: <a href="http://html5up.net/">HTML5 UP</a>';
if ($this->getThemeOption('showFooter')){ ?>
<!-- Footer -->
<div id="footer-wrapper">
	<footer id="site-footer">
		<div  class="row">
			<div class="4u">
				<section class="first">
				<?php 
					echo $this->generateBlock('home6', true); 
				?>
				</section>
			</div>
			<div class="4u">
				<section>
				<?php 
					echo $this->generateBlock('home7', true); 
				?>
				</section>
			</div>
			<div class="4u">
				<section class="last">
					<?php 
					echo $this->generateBlock('home8', true); 
				?>
				</section>
			</div>
		</div>
		<div class="row">
			<div class="12u">
				<div class="divider"></div>
			</div>
		</div>
		<div class="row">
			<div class="12u">
				<div id="copyright">
					&copy; Untitled. All rights reserved. | Design: <a href="http://html5up.net">HTML5 UP</a> | Images: <a href="http://fotogrph.com">fotogrph</a>
				</div>
			</div>
		</div>
	</footer>
</div><?php
}else{
?>
<!-- Footer -->
<div id="footer-wrapper">
	<footer id="site-footer">
		<div class="row">
			<div class="12u">
				<div id="copyright">
					&copy; Untitled. All rights reserved. | Design: <a href="http://html5up.net">HTML5 UP</a> | Images: <a href="http://fotogrph.com">fotogrph</a>
				</div>
			</div>
		</div>
	</footer>
</div>
<?php
}
?>