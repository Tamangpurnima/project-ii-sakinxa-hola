
<header class="header d-flex flex-row">
		<div class="header_content d-flex flex-row align-items-center">
			<!-- Logo -->
			<div class="logo_container">
				<div class="logo">
					<img src="{{asset('home/images/logo.png')}}" height="100px" width="100px" alt="">
				</div>
			</div>

			<!-- Main Navigation -->
			<nav class="main_nav_container">
				<div class="main_nav">
					<ul class="main_nav_list">
						<li class="main_nav_item"><a href="/">Home</a></li>
						<li class="main_nav_item"><a href="/recommend">Recommend Me</a></li>
						<li class="main_nav_item"><a href="courses">Courses</a></li>
						<li class="main_nav_item"><a href="college">College</a></li>
						<li class="main_nav_item"><a href="aboutus">About Us</a></li>
						<li class="main_nav_item"><a href="contact">Contact</a></li>
						
					</ul>
				</div>
			</nav>
		</div>
		
		<div class="header_side d-flex flex-row justify-content-center align-items-center">

			@auth('student')
				<!-- Display student-specific dropdown menu -->
				<div class="dropdown">
					<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
						{{ Auth::guard('student')->user()->name }}
					</button>
					<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
						<li><a class="dropdown-item" href="myprofile">My Profile</a></li>
						<li><a class="dropdown-item" href="inquiry">My Inquiry</a></li>
						<li><a class="dropdown-item" href="mycollege">My College</a></li>
						<li><a class="dropdown-item" href="changepassword">Change Password</a></li>
						<li><a class="dropdown-item" href="/student/logout">Logout</a></li>
					</ul>
				</div>
				@else
					@if (Route::has('login'))
						<a href="/login">
							<button type="button" class="btn btn-primary mr-2">Login</button>
						</a>
					@endif
					@if (Route::has('register'))
						<a href="/register">
							<button type="button" class="btn btn-primary">Sign up</button>
						</a>
					@endif
			@endauth
		
		<!-- @guest
			@if (Route::has('login'))
				<a href="/login">
					<button type="button" class="btn btn-primary">Login</button>
				</a>
			@endif

			@if (Route::has('register'))
				<a href="/register">
					<button type="button" class="btn btn-primary">Sign up</button>
				</a>
			@endif
		@else
			
		@endguest -->



		</div>
		<!-- Hamburger -->
		<div class="hamburger_container">
			<i class="fas fa-bars trans_200"></i>
		</div>

	</header>