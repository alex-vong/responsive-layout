<section class="article-grid">
	<div class="inner-column">

		<div class="article-grid-container">
			<section class="article-grid-main-card article-card">
				<h3>This is an &#34;Article grid&#34; module. This is it&#39;s heading.</h3>
				<p class="supporting-text">Again, we totally just made that up. It is a box with boxes in it.</p>
			</section>

			<?php 

			$articleMain = [
				"head" => "This is an article card",
				"text" => "It is basically a mini call to action, right?",
				"button" => "Act!",
				];

			$articleSupport = [
				"head" => "This is the title of an article card",
				"text" => "Here's a little infor to help you understand if this is an article you want to read",
				"button" => "Read More!",
				];
			?>


			<div class="article-card-container">
				<section class="article-card">
					<h3> <?=$articleMain['head']?> </h3>
					<p class="supporting-text"> <?=$articleMain['text']?> </p>
					<a href="#" class='button'><?=$articleMain['button']?></a>
				</section>

				<?php for ($i = 1; $i <= 5; $i++) {?>

				<section class="article-card">
					<h3> <?=$articleSupport['head']?> </h3>
					<p class="supporting-text"> <?=$articleSupport['text']?> </p>
					<a href="#" class='button'><?=$articleSupport['button']?></a>
				</section>

				<?php } ?>


				<!-- <section class="article-card">
					<h3><?=$articleSupport['head']?></h3>
					<p class="supporting-text"><?=$articleSupport['text']?></p>
					<button><?=$articleSupport['button']?></button>
				</section>

				<section class="article-card">
					<h3>This is the title of an article.</h3>
					<p class="supporting-text">Here's a little info to help you understand if this is an aritcle you want to read</p>
					<button>Read More</button>
				</section>

				<section class="article-card">
					<h3>This is the title of an article.</h3>
					<p class="supporting-text">Here's a little info to help you understand if this is an aritcle you want to read</p>
					<button>Read More</button>
				</section>

				<section class="article-card">
					<h3>This is the title of an article.</h3>
					<p class="supporting-text">Here's a little info to help you understand if this is an aritcle you want to read</p>
					<button>Read More</button>
				</section>

				<section class="article-card">
					<h3>This is the title of an article.</h3>
					<p class="supporting-text">Here's a little info to help you understand if this is an aritcle you want to read</p>
					<button>Read More</button>
				</section> --> 
			</div>

		</div>
	</div>
</section>