		<footer>
			<div class="container">
				<div class="copyright">
					<p>&copy; <?php $thisYear = date('Y'); echo $thisYear == '2014' ? $thisYear : '2014 - '.$thisYear ?> Auschina Business Association, Inc.  | 
						<a href="<?php echo Page::getPage('aboutcontact')->link() ?>"><?php echo Page::getPage('aboutcontact')->label() ?></a> 
					</p>
					<p></p> 
				</div>
				<div class="tag-cloud">
					<?php 
					$tags = array(
						
					);
					foreach ($tags as $tag => $url){
						echo '<a class="tagcloud-tag" href="'.$url.'">'.$tag.'</a>';
					}
					?>
				</div>
				<div class="footer-description">
					<hgroup class="footer-logo-img-wrapper clearfix">
						<img src="/img/logo-footer.png" alt="Auschina Business Association"/>
						<h2>中澳商会</h2>
						<h2>Auschina Business Association, Inc</h2>
					</hgroup>
					<div class="footer-mission-statement">
						<?php content('footer.mission') ?>
					</div>
				</div>
				<nav>
					<ul class="grid-container footer-nav-ul">
						<?php for ($x=0; $x<0; $x++){ // Commented out, for future introduction? ?>
						<ul class="grid-15 footer-ul">
							<li>item</li>
							<li>item</li>
						</ul>
						<?php } ?>
					</ul>
				</nav>
			</div>
		</footer>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="js/cycle2.jquery.min.js"></script>
        <script src="js/iefix.cycle2.jquery.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
