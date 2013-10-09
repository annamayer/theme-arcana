<div id="header-wrapper">
	<header class="container" id="site-header"><div class="row">
			<div class="12u">
				<?php 
					echo $this->generateManagedLogo();
				?>
					<nav id="nav">
					<?php
						$pages = \Ip\Menu\Helper::getZoneItems('menu1', 1, 1);
						echo $this->generateMenu('top', $pages);
					?>
					</nav>
			</div>
		</div>
	</header>
</div>