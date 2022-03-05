<!DOCTYPE html> 
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Doccure</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
		
		<!-- Favicons -->
		<link href="{{asset('img/favicon.png')}}')}}" rel="icon">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="{{asset('website/css/bootstrap.min.css')}}">
		
		<!-- Fontawesome CSS -->
		<link rel="stylesheet" href="{{asset('website/plugins/fontawesome/css/fontawesome.min.css')}}">
		<link rel="stylesheet" href="{{asset('website/plugins/fontawesome/css/all.min.css')}}">
		
		<!-- Main CSS -->
		<link rel="stylesheet" href="{{asset('website/css/style.css')}}">
		
		
	
	</head>
	<body>

		<!-- Main Wrapper -->
		<div class="main-wrapper">
		
			<!-- Header -->
			<header class="header">
				<nav class="navbar navbar-expand-lg header-nav">
					<div class="navbar-header">
						<a id="mobile_btn" href="javascript:void(0);">
							<span class="bar-icon">
								<span></span>
								<span></span>
								<span></span>
							</span>
						</a>
						<a href="{{route('blogs')}}" class="navbar-brand logo">
							<img src="{{asset('website/img/logo.png')}}" class="img-fluid" alt="Logo">
						</a>
					</div>
					<div class="main-menu-wrapper">
						<div class="menu-header">
							<a href="{{route('blogs')}}" class="menu-logo">
								<img src="{{asset('website/img/logo.png')}}" class="img-fluid" alt="Logo">
							</a>
							<a id="menu_close" class="menu-close" href="javascript:void(0);">
								<i class="fas fa-times"></i>
							</a>
						</div>
						<ul class="main-nav">
							<li>
								<a href="{{route('blogs')}}">blogs</a>
							</li>
								
								
							
							
							
							
						</ul>
					</div>		 
					<ul class="nav header-navbar-rht">
						<li class="nav-item contact-item">
							<div class="header-contact-img">
								<i class="far fa-hospital"></i>							
							</div>
							<div class="header-contact-detail">
								<p class="contact-header">Contact</p>
								<p class="contact-info-header"> +1 315 369 5943</p>
							</div>
						</li>
						@if(!Auth::check())
							<li class="nav-item">
								<a class="nav-link header-login" href="{{route('login')}}">login / Signup </a>
							</li>
						@else
						<li class="nav-item">
							<a class="nav-link header-login" href="{{route('home')}}">Dashboard </a>
						</li>
						@endif
					</ul>
				</nav>
			</header>
			<!-- /Header -->
			
			<!-- Breadcrumb -->
			<div class="breadcrumb-bar">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-md-12 col-12">
							<nav aria-label="breadcrumb" class="page-breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="{{route('blogs')}}">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Blog</li>
								</ol>
							</nav>
							<h2 class="breadcrumb-title">Blog List</h2>
						</div>
					</div>
				</div>
			</div>
			<!-- /Breadcrumb -->
			
			<!-- Page Content -->
			<div class="content">
				<div class="container">
             
					<div class="row">
					
						<div class="col-lg-8 col-md-12">
							<div class="blog-view">
								<div class="blog blog-single-post">
									<div class="blog-image">
										<a href="{{route('blog',$article->id)}}"><img class="img-fluid" src="{{asset('website/img/blog/blog-01.jpg')}}" alt="Post Image"></a>
									</div>
									<h3 class="blog-title"><a href="{{route('blog',$article->id)}}">{{$article->title}}</a></h3>
								<div class="blog-info clearfix">
									<div class="post-left">
										<ul>
											<li>
												<div class="post-author">
													<a href="{{route('blog',$article->id)}}"><img src="{{asset('website/img/doctors/doctor-thumb-01.jpg')}}" alt="Post Author"> <span>{{$article->user->name}}</span></a>
												</div>
											</li>
											<li><i class="far fa-clock"></i>{{$article->created_at->toDateString()}}</li>
											<li><i class="far fa-comments"></i>{{$article->comments->count()}} Comments</li>
											<li><i class="fa fa-tags"></i>{{$article->category->name}}</li>
										</ul>
									</div>
								</div>
								<div class="blog-content">
									<h5>{{$article->subtitle}}</h5>
									<p>{{$article->describe}}</p>
									<p>{{$article->describe}}</p>
									<p>{{$article->describe}}</p>
									
								</div>
								</div>
								
								<div class="card blog-share clearfix">
									<div class="card-header">
										<h4 class="card-title">Share the post</h4>
									</div>
									<div class="card-body">
										<ul class="social-share">
											<li><a href="#" title="Facebook"><i class="fab fa-facebook"></i></a></li>
											<li><a href="#" title="Twitter"><i class="fab fa-twitter"></i></a></li>
											<li><a href="#" title="Linkedin"><i class="fab fa-linkedin"></i></a></li>
											<li><a href="#" title="Google Plus"><i class="fab fa-google-plus"></i></a></li>
											<li><a href="#" title="Youtube"><i class="fab fa-youtube"></i></a></li>
										</ul>
									</div>
								</div>
								<div class="card author-widget clearfix">
								<div class="card-header">
									<h4 class="card-title">About Author</h4>
									</div>
								<div class="card-body">
									<div class="about-author">
										<div class="about-author-img">
											<div class="author-img-wrap">
												<a href=""><img class="img-fluid rounded-circle" alt="" src="{{asset('website/img/doctors/doctor-thumb-01.jpg')}}"></a>
											</div>
										</div>
										<div class="author-details">
											<a  class="blog-author-name">{{$article->user->name}}</a>
											<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
										</div>
									</div>
								</div>
								</div>
								<div class="card blog-comments clearfix">
									<div class="card-header">
										<h4 class="card-title">Comments ({{$article->comments->count()}})</h4>
									</div>
									<div class="card-body pb-0">
									<ul class="comments-list">
										@foreach ($article->comments as $comment)
										<li>
											<div class="comment">
												<div class="comment-author">
													<img class="avatar" alt="" src="{{asset('website/img/doctors/doctor-thumb-01.jpg')}}">
												</div>
												<div class="comment-block">
													<span class="comment-by">
														<span class="blog-author-name">{{$comment->user->name}}</span>
													</span>
													<p>{{$comment->content}}</p>
													<p class="blog-date">{{$comment->created_at}}</p>
												</div>
											</div>
										</li>
										@endforeach
										
										
									</ul>
								</div>
								</div>
								
								<div class="card new-comment clearfix">
									<div class="card-header">
										<h4 class="card-title">Leave Comment</h4>
									</div>
									<div class="card-body">
										<form action="{{route('user.AddComment')}}" method="POST">
											@csrf
											<input type="hidden"  name="article_id" value="{{$article->id}}" >
											<div class="form-group">
												<label>Comments</label>
												<textarea rows="4" class="form-control @error('content') is-invalid @enderror" name="content">{{old('content')}}</textarea>
												@error('content')
													<span class="invalid-feedback" role="alert">
														<strong>{{ $message }}</strong>
													</span>
                                                @enderror
											</div>
											@if(Auth::check())
											<div class="submit-section">
												<button class="btn btn-primary submit-btn" type="submit">Submit</button>
											</div>
											@else
											<div class="submit-section">
												<a class="btn btn-primary submit-btn" href="{{route('login')}}" type="button">login</a>
											</div>
											@endif
										</form>
									</div>
								</div>
								
							</div>
						</div>
					
						
						<!-- Blog Sidebar -->
						<div class="col-lg-4 col-md-12 sidebar-right theiaStickySidebar">

							

							<!-- Latest Posts -->
							<div class="card post-widget">
								<div class="card-header">
									<h4 class="card-title">Latest Posts</h4>
								</div>
								<div class="card-body">
									<ul class="latest-posts">
										@foreach($lastArticles as $lastArticle)
										<li>
											<div class="post-thumb">
												<a href="{{route('blog',$lastArticle->id)}}">
													<img class="img-fluid" src="{{asset('website/img/blog/blog-01.jpg')}}" alt="">
												</a>
											</div>
											<div class="post-info">
												<h4>
													<a href="{{route('blog',$lastArticle->id)}}">{{$lastArticle->subtitle}}</a>
												</h4>
												<p>{{$article->created_at->toDateString()}}</p>
											</div>
										</li>
										@endforeach
									</ul>
								</div>
							</div>
							<!-- /Latest Posts -->

							<!-- Categories -->
							<div class="card category-widget">
								<div class="card-header">
									<h4 class="card-title">Blog Categories</h4>
								</div>
								<div class="card-body">
									<ul class="categories">
										@foreach ($categories as $category)
										<li><a href="#">{{$category->name}} <span>({{$category->articles->count()}})</span></a></li>
										@endforeach
										
										
									</ul>
								</div>
							</div>
							<!-- /Categories -->

							
							
						</div>
						<!-- /Blog Sidebar -->
						
					</div>
				</div>

			</div>		
			<!-- /Page Content -->
   
			<!-- Footer -->
			<footer class="footer">
				
				<!-- Footer Top -->
				<div class="footer-top">
					<div class="container-fluid">
						<div class="row">
							<div class="col-lg-3 col-md-6">
							
								<!-- Footer Widget -->
								<div class="footer-widget footer-about">
									<div class="footer-logo">
										<img src="{{asset('website/img/footer-logo.png')}}" alt="logo">
									</div>
									<div class="footer-about-content">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
										<div class="social-icon">
											<ul>
												<li>
													<a href="#" target="_blank"><i class="fab fa-facebook-f"></i> </a>
												</li>
												<li>
													<a href="#" target="_blank"><i class="fab fa-twitter"></i> </a>
												</li>
												<li>
													<a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
												</li>
												<li>
													<a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
												</li>
												<li>
													<a href="#" target="_blank"><i class="fab fa-dribbble"></i> </a>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<!-- /Footer Widget -->
								
							</div>
							
							<div class="col-lg-3 col-md-6">
							
								<!-- Footer Widget -->
								<div class="footer-widget footer-menu">
									<h2 class="footer-title">For Patients</h2>
									<ul>
										<li><a href="search.html"><i class="fas fa-angle-double-right"></i> Search for Doctors</a></li>
										<li><a href="login.html"><i class="fas fa-angle-double-right"></i> Login</a></li>
										<li><a href="register.html"><i class="fas fa-angle-double-right"></i> Register</a></li>
										<li><a href="booking.html"><i class="fas fa-angle-double-right"></i> Booking</a></li>
										<li><a href="patient-dashboard.html"><i class="fas fa-angle-double-right"></i> Patient Dashboard</a></li>
									</ul>
								</div>
								<!-- /Footer Widget -->
								
							</div>
							
							<div class="col-lg-3 col-md-6">
							
								<!-- Footer Widget -->
								<div class="footer-widget footer-menu">
									<h2 class="footer-title">For Doctors</h2>
									<ul>
										<li><a href="appointments.html"><i class="fas fa-angle-double-right"></i> Appointments</a></li>
										<li><a href="chat.html"><i class="fas fa-angle-double-right"></i> Chat</a></li>
										<li><a href="login.html"><i class="fas fa-angle-double-right"></i> Login</a></li>
										<li><a href="doctor-register.html"><i class="fas fa-angle-double-right"></i> Register</a></li>
										<li><a href="doctor-dashboard.html"><i class="fas fa-angle-double-right"></i> Doctor Dashboard</a></li>
									</ul>
								</div>
								<!-- /Footer Widget -->
								
							</div>
							
							<div class="col-lg-3 col-md-6">
							
								<!-- Footer Widget -->
								<div class="footer-widget footer-contact">
									<h2 class="footer-title">Contact Us</h2>
									<div class="footer-contact-info">
										<div class="footer-address">
											<span><i class="fas fa-map-marker-alt"></i></span>
											<p> 3556  Beech Street, San Francisco,<br> California, CA 94108 </p>
										</div>
										<p>
											<i class="fas fa-phone-alt"></i>
											+1 315 369 5943
										</p>
										<p class="mb-0">
											<i class="fas fa-envelope"></i>
											doccure@example.com
										</p>
									</div>
								</div>
								<!-- /Footer Widget -->
								
							</div>
							
						</div>
					</div>
				</div>
				<!-- /Footer Top -->
				
				<!-- Footer Bottom -->
                <div class="footer-bottom">
					<div class="container-fluid">
					
						<!-- Copyright -->
						<div class="copyright">
							<div class="row">
								<div class="col-md-6 col-lg-6">
									<div class="copyright-text">
										<p class="mb-0">&copy; 2019 Doccure. All rights reserved.</p>
									</div>
								</div>
								<div class="col-md-6 col-lg-6">
								
									<!-- Copyright Menu -->
									<div class="copyright-menu">
										<ul class="policy-menu">
											<li><a href="term-condition.html">Terms and Conditions</a></li>
											<li><a href="privacy-policy.html">Policy</a></li>
										</ul>
									</div>
									<!-- /Copyright Menu -->
									
								</div>
							</div>
						</div>
						<!-- /Copyright -->
						
					</div>
				</div>
				<!-- /Footer Bottom -->
				
			</footer>
			<!-- /Footer -->
		   
		</div>
		<!-- /Main Wrapper -->
	  
		<!-- jQuery -->
		<script src="{{asset('website/js/jquery.min.js')}}"></script>
		
		<!-- Bootstrap Core JS -->
		<script src="{{asset('website/js/popper.min.js')}}"></script>
		<script src="{{asset('website/js/bootstrap.min.')}}"></script>
		
		<!-- Sticky Sidebar JS -->
        <script src="{{asset('website/plugins/theia-sticky-sidebar/ResizeSensor.js')}}"></script>
        <script src="{{asset('website/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js')}}"></script>
		
		<!-- Custom JS -->
		<script src="{{asset('website/js/script.js')}}"></script>
		
	</body>
</html>