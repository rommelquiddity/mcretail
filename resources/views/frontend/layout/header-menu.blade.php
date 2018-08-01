@php
	$second_segment = Request::segment(2);
	$third_segment = Request::segment(3);
@endphp

<header>
	<div class="transparent-bg">
		<div id="logo">
			<h1>
				<a href="{{ url('/') }}">
					<span class="alt-text">Mccormick Retail</span>
				</a>
			</h1>
		</div>
		<div id="main-menu">
			<nav>
				<ul>
					<li><a href="">Products</a></li>
					<li><a href="">Recipes</a>
						<ul class="sub-menu">
							<li>Glossary of terms</li>
							<li>Tips and Technique</li>
							<li>Food Plating</li>
							<li>Explore Flavors</li>
						</ul>
					</li>
					<li><a href="">Cooking Tips</a></li>
					<li><a href="">Contact Us</a></li>
				</ul>
			</nav>
		</div>
	</div>
</header>