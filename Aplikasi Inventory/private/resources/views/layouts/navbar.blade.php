<nav class="navbar navbar-expand-lg navbar-light bg-primary">
	<a class="navbar-brand" href="#">Navbar</a>
			<button class="navbar-toggle" type="button" data-toggle="collapse" data-
			target="#navbaSupportedContet" aria-
			controls="navbarSupportedContent" aria-expanded="false"
			aria-label="Toggle Navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="{{ url('beranda')}}">
							Beranda <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Login</a>
					</li>
				</ul>
				<form class="form-inline my-2 my-lg-0">
					<input class="form-control mr-sm-2" type="search" 
					placeholder="Search" aria-label="Search">
					<button class="btn btn-outline-success my-2 my-sm-0"
					type="submit">Search</button>
				</form>
			</div>
</nav>