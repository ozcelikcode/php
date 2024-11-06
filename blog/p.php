<?php require "inc/header.php"; ?>

<div class="main-wrapper">

	<article class="blog-post px-3 py-5 p-md-5">
		<div class="container">

			<?php

			$p = @$_GET["p"]; // ?article= sayfayı çalıştırır.

			$dataList = $db->prepare("SELECT * FROM articles WHERE article_id=?");
			$dataList->execute([$p]);

			$dataList = $dataList->fetch(PDO::FETCH_ASSOC);

			?>

			<header class="blog-post-header">
				<h2 class="title mb-2"><?php echo $dataList["article_title"]; ?></h2>
				<div class="meta mb-3"><span class="date">Published 3 months ago</span><span class="time">5 min read</span><span class="comment"><a href="#">4 comments</a></span></div>
			</header>

			<div class="blog-post-body">
				<figure class="blog-banner">
					<a href="https://made4dev.com"><img class="img-fluid" src="assets/images/blog/blog-post-banner.jpg" alt="image"></a>
					<figcaption class="mt-2 text-center image-caption">Image Credit: <a href="https://made4dev.com?ref=devblog" target="_blank">made4dev.com (Premium Programming T-shirts)</a></figcaption>
				</figure>

				<p>
					<?php echo $dataList["article"]; ?>
				</p>

			</div>

			<nav class="blog-nav nav nav-justified my-5">
				<a class="nav-link-prev nav-item nav-link rounded-left" href="index.html">Previous<i class="arrow-prev fas fa-long-arrow-alt-left"></i></a>
				<a class="nav-link-next nav-item nav-link rounded-right" href="blog-list.html">Next<i class="arrow-next fas fa-long-arrow-alt-right"></i></a>
			</nav>

			<div class="blog-comments-section">
				<div id="disqus_thread"></div>
				<script>
					(function() { // REQUIRED CONFIGURATION VARIABLE: EDIT THE SHORTNAME BELOW
						var d = document,
							s = d.createElement('script');

						// IMPORTANT: Replace 3wmthemes with your forum shortname!
						s.src = 'https://3wmthemes.disqus.com/embed.js';

						s.setAttribute('data-timestamp', +new Date());
						(d.head || d.body).appendChild(s);
					})();
				</script>
				<noscript>
					Please enable JavaScript to view the
					<a href="https://disqus.com/?ref_noscript" rel="nofollow">
						comments powered by Disqus.
					</a>
				</noscript>
			</div>
			<!--//blog-comments-section-->

		</div>
		<!--//container-->
	</article>

	<?php require "inc/footer.php"; ?>