<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta charset="utf-8" />
	<title>
		@if(isset($data['general_setting']->admin_title))
			{{$data['general_setting']->admin_title}}
		@else
			Time Saver CMS
		@endif
	</title>

	<meta name="description" content="User login page" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
	@if(isset($data['general_setting']->favicon))
		<link rel="icon" href="{{ asset('images'.DIRECTORY_SEPARATOR.'setting'.DIRECTORY_SEPARATOR.'general'.DIRECTORY_SEPARATOR.$data['general_setting']->favicon ) }}" type="image/x-icon" />
	@endif

	<!-- bootstrap & fontawesome -->
	<link rel="stylesheet" href="{{ asset('admin-panel/assets/css/bootstrap.min.css') }}" />
	<link rel="stylesheet" href="{{ asset('admin-panel/assets/font-awesome/4.5.0/css/font-awesome.min.css') }}" />

	<!-- text fonts -->
	<link rel="stylesheet" href="{{ asset('admin-panel/assets/css/fonts.googleapis.com.css') }}" />

	<!-- ace styles -->
	<link rel="stylesheet" href="{{ asset('admin-panel/assets/css/ace.min.css') }}" />

	<!--[if lte IE 9]>
	<link rel="stylesheet" href="{{ asset('admin-panel/assets/css/ace-part2.min.css') }}" />
	<![endif]-->
	<link rel="stylesheet" href="{{ asset('admin-panel/assets/css/ace-rtl.min.css') }}" />

	<!--[if lte IE 9]>
	<link rel="stylesheet" href="{{ asset('admin-panel/assets/css/ace-ie.min.css')}}" />
	<![endif]-->

	<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

	<!--[if lte IE 8]>
	<script src="{{ asset('admin-panel/assets/js/html5shiv.min.js') }}"></script>
	<script src="{{ asset('admin-panel/assets/js/respond.min.js') }}"></script>
	<![endif]-->
</head>

<body class="login-layout">
<div class="main-container">
	<div class="main-content">
		<div class="row">
			<div class="col-sm-10 col-sm-offset-1">
				<div class="login-container">
					<div class="center" style="margin-top: 30%;">
						@if(isset($data['general_setting']->site_logo))
							<img src="{{ asset('images/general_settings/'. $data['general_setting']->site_logo) }}" alt="{{ $data['general_setting']->site_title }}" style="background: white;">
						@else
							<h1>
								<i class="ace-icon fa fa-3x fa-graduation-cap blue" ></i>
								<br>
								@if(isset($data['general_setting']->admin_title))
									<span class="white" id="id-text2">{{$data['general_setting']->admin_title}}</span>
								@else
									<span class="green" style="font-size: 17pt;">
										Web Portal CMS prijava
									</span>
								@endif
							</h1>
						@endif
							<h5 class="blue" id="id-company-text">
								@if(isset($data['general_setting']->copyright))
									{!! $data['general_setting']->copyright !!}
								@else
									<a href="http://businesswithtechnology.com" target="_blank">©Meho.Solutions</a>
								@endif
							</h5>
					</div>

					<div class="space-6"></div>

					<div class="position-relative">
						<div id="login-box" class="login-box visible widget-box no-border">
							<div class="widget-body">
								<div class="widget-main">
									<h4 class="header blue lighter bigger">
										<i class="ace-icon fa fa-users red"></i>
										Molimo unesite svoje podatke
									</h4>
									<div class="space-6"></div>
									<form method="POST" action="{{ route('login') }}">
										{{ csrf_field() }}
										@if(session()->has('login_error'))
											<div class="alert alert-success">
												{{ session()->get('login_error') }}
											</div>
										@endif
										@if ($errors->has('email'))
											<div class="alert alert-success">
												{{ $errors->first('email') }}
											</div>
										@endif
										<fieldset>
											<label class="block clearfix">
												<span class="block input-icon input-icon-right">
													<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
													<i class="ace-icon fa fa-user"></i>
												</span>
											</label>

											<label class="block clearfix">
												<span class="block input-icon input-icon-right">
													<input id="password" type="password" class="form-control" name="password" required>
													<i class="ace-icon fa fa-lock"></i>
												</span>
												@if ($errors->has('password'))
													<span class="help-block">
                                                        <strong>{{ $errors->first('password') }}</strong>
                                                    </span>
												@endif
											</label>

											<div class="space"></div>

											<div class="clearfix">
												<label class="inline">
													<input type="checkbox" class="ace" />
													<span class="lbl"> Zapamti Me</span>
												</label>

												<button type="submit" class="width-35 pull-right btn btn-sm btn-primary">
													<i class="ace-icon fa fa-key"></i>
													<span class="bigger-110">Login</span>
												</button>
											</div>

											<div class="space-4"></div>
										</fieldset>
									</form>
									{{--<div class="social-or-login center">
                                        <span class="bigger-110">ili Login koristeći</span>
                                    </div>

                                    <div class="space-6"></div>

                                    <div class="social-login center">
                                        <a class="btn btn-primary">
                                            <i class="ace-icon fa fa-facebook"></i>
                                        </a>

                                        <a class="btn btn-info">
                                            <i class="ace-icon fa fa-twitter"></i>
                                        </a>

                                        <a class="btn btn-danger">
                                            <i class="ace-icon fa fa-google-plus"></i>
                                        </a>
                                    </div>--}}
								</div><!-- /.widget-main -->

								<div class="toolbar clearfix">
									<div>
										{{-- <a href="#" data-target="#signup-box" class="user-signup-link">
                                             <i class="ace-icon fa fa-arrow-left"></i>
                                             Želim se registrovati
                                         </a>--}}
									</div>
									<div>
										<a href="#" data-target="#forgot-box" class="forgot-password-link">
											Zaboravio sam password
											<i class="ace-icon fa fa-arrow-right"></i>
										</a>
									</div>
								</div>

							</div><!-- /.widget-body -->
						</div><!-- /.login-box -->



						<div id="forgot-box" class="forgot-box widget-box no-border">
							<div class="widget-body">
								<div class="widget-main">
									<h4 class="header red lighter bigger">
										<i class="ace-icon fa fa-key"></i>
										Preuzmi password
									</h4>

									<div class="space-6"></div>
									<p>
										Unesite svoju e-poštu kako biste dobili upute
									</p>

									@if (session('status'))
										<div class="alert alert-success">
											{{ session('status') }}
										</div>
									@endif

									<form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
										{{ csrf_field() }}
										<fieldset>
											<label class="block clearfix">
                                                <span class="block input-icon input-icon-right">
                                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email"  required>
                                                    <i class="ace-icon fa fa-envelope"></i>
                                                </span>
												@if ($errors->has('email'))
													<span class="help-block">
                                                        <strong>{{ $errors->first('email') }}</strong>
                                                    </span>
												@endif
											</label>

											<div class="clearfix">
												<button type="submit" class="width-35 pull-right btn btn-sm btn-danger">
													<i class="ace-icon fa fa-lightbulb-o"></i>
													<span class="bigger-110">Posalji mi!</span>
												</button>
											</div>
										</fieldset>
									</form>
								</div><!-- /.widget-main -->

								<div class="toolbar center">
									<a href="#" data-target="#login-box" class="back-to-login-link">
										Povratak na prijavu
										<i class="ace-icon fa fa-arrow-right"></i>
									</a>
								</div>
							</div><!-- /.widget-body -->
						</div><!-- /.forgot-box -->

						<div id="signup-box" class="signup-box widget-box no-border">
							<div class="widget-body">
								<div class="widget-main">
									<h4 class="header green lighter bigger">
										<i class="ace-icon fa fa-users blue"></i>
										Registracija novog korisnika
									</h4>

									<div class="space-6"></div>
									<p> Unesite svoje podatke za početak: </p>

									<form>
										<fieldset>
											<label class="block clearfix">
												<span class="block input-icon input-icon-right">
													<input type="email" class="form-control" placeholder="Email" />
													<i class="ace-icon fa fa-envelope"></i>
												</span>
											</label>

											<label class="block clearfix">
												<span class="block input-icon input-icon-right">
													<input type="text" class="form-control" placeholder="Username" />
													<i class="ace-icon fa fa-user"></i>
												</span>
											</label>

											<label class="block clearfix">
												<span class="block input-icon input-icon-right">
													<input type="password" class="form-control" placeholder="Password" />
													<i class="ace-icon fa fa-lock"></i>
												</span>
											</label>

											<label class="block clearfix">
												<span class="block input-icon input-icon-right">
													<input type="password" class="form-control" placeholder="Repeat password" />
													<i class="ace-icon fa fa-retweet"></i>
												</span>
											</label>

											<label class="block">
												<input type="checkbox" class="ace" />
												<span class="lbl">
													Prihvatam
													<a href="#">Korisnički ugovor</a>
												</span>
											</label>

											<div class="space-24"></div>

											<div class="clearfix">
												<button type="reset" class="width-30 pull-left btn btn-sm">
													<i class="ace-icon fa fa-refresh"></i>
													<span class="bigger-110">Reset</span>
												</button>

												<button type="button" class="width-65 pull-right btn btn-sm btn-success">
													<span class="bigger-110">Registrirajte se</span>

													<i class="ace-icon fa fa-arrow-right icon-on-right"></i>
												</button>
											</div>
										</fieldset>
									</form>
								</div>

								<div class="toolbar center">
									<a href="#" data-target="#login-box" class="back-to-login-link">
										<i class="ace-icon fa fa-arrow-left"></i>
										Povratak na prijavu
									</a>
								</div>
							</div><!-- /.widget-body -->
						</div><!-- /.signup-box -->

					</div><!-- /.position-relative -->

					<div class="navbar-fixed-top align-right">
						<br />						&nbsp;
						<a id="btn-login-dark" href="#">Mračno</a>
						&nbsp;
						<span class="blue">/</span>
						&nbsp;
						<a id="btn-login-blur" href="#">Zamućenje</a>
						&nbsp;
						<span class="blue">/</span>
						&nbsp;
						<a id="btn-login-light" href="#">Svjetlo</a>
						&nbsp; &nbsp; &nbsp;
					</div>
				</div>
			</div><!-- /.col -->
		</div><!-- /.row -->
	</div><!-- /.main-content -->
</div><!-- /.main-container -->

<!-- basic scripts -->

<!--[if !IE]> -->
<script src="{{ asset('admin-panel/assets/js/jquery-2.1.4.min.js') }}"></script>

<!-- <![endif]-->

<!--[if IE]>
<script src="{{ asset('admin-panel/assets/js/jquery-1.11.3.min.js') }}"></script>
<![endif]-->
<script type="text/javascript">
	if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
</script>

<!-- inline scripts related to this page -->
<script type="text/javascript">
	jQuery(function($) {
		$(document).on('click', '.toolbar a[data-target]', function(e) {
			e.preventDefault();
			var target = $(this).data('target');
			$('.widget-box.visible').removeClass('visible');//hide others
			$(target).addClass('visible');//show target
		});
	});



	//you don't need this, just used for changing background
	jQuery(function($) {
		$('#btn-login-dark').on('click', function(e) {
			$('body').attr('class', 'login-layout');
			$('#id-text2').attr('class', 'white');
			$('#id-company-text').attr('class', 'blue');

			e.preventDefault();
		});
		$('#btn-login-light').on('click', function(e) {
			$('body').attr('class', 'login-layout light-login');
			$('#id-text2').attr('class', 'grey');
			$('#id-company-text').attr('class', 'blue');

			e.preventDefault();
		});
		$('#btn-login-blur').on('click', function(e) {
			$('body').attr('class', 'login-layout blur-login');
			$('#id-text2').attr('class', 'white');
			$('#id-company-text').attr('class', 'light-blue');

			e.preventDefault();
		});

	});
</script>
</body>
</html>
