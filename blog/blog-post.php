<?php require "inc/header.php"; ?>

<div class="main-wrapper">

	<article class="blog-post px-3 py-5 p-md-5">
		<div class="container">
			<header class="blog-post-header">
				<h2 class="title mb-2">Why Every Developer Should Have A Blog</h2>
				<div class="meta mb-3"><span class="date">Published 3 months ago</span><span class="time">5 min read</span><span class="comment"><a href="#">4 comments</a></span></div>
			</header>

			<div class="blog-post-body">
				<figure class="blog-banner">
					<a href="https://made4dev.com"><img class="img-fluid" src="assets/images/blog/blog-post-banner.jpg" alt="image"></a>
					<figcaption class="mt-2 text-center image-caption">Image Credit: <a href="https://made4dev.com?ref=devblog" target="_blank">made4dev.com (Premium Programming T-shirts)</a></figcaption>
				</figure>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. </p>

				<h3 class="mt-5 mb-3">Code Block Example</h3>
				<p>You can get more info at <a href="https://highlightjs.org/" target="_blank">https://highlightjs.org/</a>. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. </p>

				<pre><code>Console.WriteLine("Hello World");</code></pre>

				<h3 class="mt-5 mb-3">Typography</h3>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
				<h5 class="my-3">Bullet Points:</h5>
				<ul class="mb-5">
					<li class="mb-2">Lorem ipsum dolor sit amet consectetuer.</li>
					<li class="mb-2">Aenean commodo ligula eget dolor.</li>
					<li class="mb-2">Aenean massa cum sociis natoque penatibus.</li>
				</ul>
				<ol class="mb-5">
					<li class="mb-2">Lorem ipsum dolor sit amet consectetuer.</li>
					<li class="mb-2">Aenean commodo ligula eget dolor.</li>
					<li class="mb-2">Aenean massa cum sociis natoque penatibus.</li>
				</ol>
				<h5 class="my-3">Quote Example:</h5>
				<blockquote class="blockquote m-lg-5 py-3 pl-4 px-lg-5">
					<p class="mb-2">You might not think that programmers are artists, but programming is an extremely creative profession. It's logic-based creativity.</p>
					<footer class="blockquote-footer">John Romero</footer>
				</blockquote>

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