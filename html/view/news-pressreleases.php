<?php
// Welcome to the TEMPLATE PAGE of 中澳商会 网店

// This project should use:

// unsemantic.com  for grid layout
// flatuicolors.com  for colours
// HTML5 BP for boilerplate and x-browser compat
		include 'inc/header.inc.php'; ?>

		<section class="tier-blue">
			<div class="container grid-parent clearfix">
				<h1><?php heading('press') ?></h1>
				<?php echo content('press') ?>
			</div>
		</section>
		
		<section class="tier-last">
			<div class="container grid-parent clearfix">
				<aside class="grid-20">
				<?php sidebar('') ?>
				</aside>
				<div class="grid-80">
					<h2><a href="http://en.unionpay.com/news/newsroom/file_112462894.html">Australian Government soon to accept China Unionpay</a></h2>
					<div class="spaced"><img src="/img/press-release/unionpay-australia-visa.jpg"/></div>
					<?php 
					$article = 'April 10 – UnionPay International CEO Cai Jianbo meets with Tourism Australia Managing Director John O’Sullivan and his delegation in Shanghai. The two sides recall the fruits of cooperation in the recent years and reach consensus on further expanding the scope of cooperation, implementation of measures, etc.
					CEO Cai Jianbo states that UnionPay International has reached all-round cooperation with the four major banks in Australia and UnionPay cards will become accepted by about 90% of ATMs and POS terminals in two years. He says, through the good cooperation between the two sides, UnionPay cards have played an important role in supporting the bilateral cooperation between Australia and China. It is suggested that based on the more mature UnionPay card acceptance environment, the starting point of cooperation should raise from bridging the economies of Australia and China to the height of connecting the economic and trade exchanges between Asia and Australia. The large number of UnionPay cards issued in Asia will stimulate the spending by Asian tourists in Australia.
					Managing Director John O’Sullivan highly praises the role of UnionPay International in promoting the economic and trade exchanges between Australia and China, expresses his willingness to strengthen the bilateral cooperation, and welcomes UnionPay International to participate in the series of publicity activities launched by Tourism Australia in China. He hopes that UnionPay International can also play an active role in encouraging residents from South Korea and Singapore to visit Australia while deepening Australia tourism promotion in China. John O’Sullivan also says, the Visa Office of Australia will launch online visa application service for Chinese travelers by the end of this year and Tourism Australia will facilitate the use of UnionPay online service in online visa application.
					China is rated as “the most valuable tourism market of Australia”. Over the recent years, the number of Chinese tourists travelling to Australia has maintained a double-digit growth each year. To comply with this trend, UnionPay International has come into cooperation with the local mainstream institutions on many fields, especially with Tourism Australia and the tourism administrations of all states to constantly optimize the UnionPay card acceptance environment and card-using service system in Australia. Currently, UnionPay cards have become accepted by 60% of ATMs for cash withdrawal and by 220,000 merchants for purchases or tuition fee payment, etc.. Besides, the number of well-known online merchants in Australia accepting UnionPay card cross-border online shopping is also increasing.
					Earlier this week, UnionPay International concluded all-round cooperation agreements respectively with Westpac Bank Corporation and ANZ Bank, marking the all-round cooperation between UnionPay International and the major four banks in Australia, which will lead to the overall optimization of the card acceptance environment in Australia and New Zealand. 
					';
					echo '<p>', preg_replace('/\n/', '</p><p>', $article), '</p>';
					?>
				</div>				
				
			</div>
		</section>

        <?php include 'inc/footer.inc.php';