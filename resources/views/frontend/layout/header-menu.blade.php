@php
	$second_segment = Request::segment(2);
	$third_segment = Request::segment(3);
@endphp

<header>
	<div id="header" class="transparent-bg">
		<div class="container">
			<div id="logo">
				<h1>
					<a href="{{ url('/') }}">
						<span class="alt-text">Mccormick Retail</span>
					</a>
				</h1>
			</div>
			<div id="main-menu">
				<a class="mob-login" href="">LOGIN</a>
				<button class="nav-close-mob href=""></button>
				<div class="clearfix"></div>
				<nav>
					<ul>
						<li><a href="">Products</a></li>
						<li><a href="">Recipes</a>
							<ul class="sub-menu">
								<li class="transparent-bg"><a href="">Glossary of terms</a></li>
								<li class="transparent-bg"><a href="">Tips and Technique</a></li>
								<li class="transparent-bg"><a href="">Food Plating</a></li>
								<li class="transparent-bg"><a href="">Explore Flavors</a></li>
							</ul>
						</li>
						<li><a href="">Cooking Tips</a></li>
						<li><a href="">Contact Us</a></li>
					</ul>
				</nav>
			</div>
			<div id="user-login-signup">
				<a class="signup-link" href="#">No account yet? Sign up here</a>
				<a class="login-link" href="">Login</a>
			</div>
			<button id="nav-toggle">
				<span></span>
				<span></span>
				<span></span>
			</button>
		</div>
	</div>
</header>