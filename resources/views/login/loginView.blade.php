@extends('layout.login')

@section('container')

<body class="bg-login">
	<!-- wrapper -->
	<div class="wrapper">
		<div class="section-authentication-login d-flex align-items-center justify-content-center mt-4">
			<div class="row">
				<div class="col-12 col-lg-8 mx-auto">
					<div class="card radius-15 overflow-hidden">
						<div class="row g-0">
							<div class="col-xl-6">
								<div class="card-body p-5">
									<div class="text-center">
										{{-- <img src="/assets/images/logo-icon.png" width="80" alt=""> --}}
										<h3 class="mt-4 font-weight-bold" style="color: green"><img src="{{ asset('assets/images/sticker/kazuha-sticker.png') }}" class="image-sticker" alt="" style="width: 150px;"> <img src="{{ asset('assets/images/sticker/yae-sticker.png') }}" class="image-sticker" alt="" style="width: 150px;">Welcome Back Moots!</h3>
									</div>
									<div class="">
									
										<div class="d-grid">
											<a class="btn my-4 shadow-sm btn-white" href="javascript:;"> <span class="d-flex justify-content-center align-items-center">
											<img class="me-2" src="/assets/images/icons/search.svg" width="16" alt="Image Description">
											<span>Sign in with Google</span>
												</span>
											</a> <a href="javascript:;" class="btn btn-facebook"><i class="bx bxl-facebook"></i>Sign in with Facebook</a>
										</div>
										<div class="login-separater text-center mb-4"> <span>OR SIGN IN WITH EMAIL</span>
											<hr>
										</div>
										<div class="form-body">
											<form action="{{ route('auths') }}" id="form-login" method="post" class="row g-3">
												@csrf
												<div class="col-12">
													<label for="inputUsername" class="form-label" style="green">Username</label>
													<input type="text" id="username-login" name="username" class="form-control" id="inputEmailAddress" placeholder="Username" value="{{ old('username') }}">
													@error('username')
													<div class="validasi">
														{{ $message }}
													</div>
													@enderror
												</div>

												<div class="col-12">
													<label for="inputChoosePassword" class="form-label">Password</label>
													<div class="input-group" id="show_hide_password">
														<input type="password" id="password-login" name="password" class="form-control border-end-0" id="inputChoosePassword" placeholder="Password"> <a href="javascript:;" class="input-group-text bg-transparent"><i class="bx bx-hide"></i></a>
													</div>
													@error('password')
													<div class="validasi">
														{{ $message }}
													</div>
													@enderror
												</div>
												<div class="col-md-6">
													<div class="form-check form-switch">
														<input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked="">
														<label class="form-check-label" for="flexSwitchCheckChecked">Remember Me</label>
													</div>
												</div>
												<div class="col-md-6 text-end">	<a href="authentication-forgot-password.html" style="color: green">Forgot Password ?</a>
												</div>
												<div class="col-12">
													<div class="d-grid">
														<button type="submit" id="submit-login" class="btn btn-success" style="background-color: rgb(3, 155, 87)"><i class="bx bxs-lock-open"></i>Sign in</button>
													</div>
												</div>
												<div class="col-12 text-center">
													<p>Don't have an account yet? <a href="{{ route('index_register') }}" style="color: green;">Sign up here</a></p>
												</div>
											</form>
										</div>
									</div>
								</div>
							 </div>
							<div class="col-xl-6 bg-login-color d-flex align-items-center justify-content-center">
								<img src="assets/images/login-images/login-frent-img.jpg" class="img-fluid" alt="..." style="height: 100%">
							</div>
						</div>
						<!--end row-->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end wrapper -->
</body>


@endsection