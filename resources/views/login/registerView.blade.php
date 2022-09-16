@extends('layout.login')

@section('container')

<body class="bg-register">
	<!-- wrapper -->
	<div class="wrapper">
		<div class="section-authentication-register d-flex align-items-center justify-content-center">
			<div class="row">
				<div class="col-12 col-lg-10 mx-auto">
					<div class="card radius-15 overflow-hidden">
						<div class="row g-0">
							<div class="col-xl-6">
								<div class="card-body p-md-5">
									<div class="text-center">
										<img src="assets/images/logo-icon.png" width="80" alt="">
										<h3 class="mt-4 font-weight-bold" style="color: green;">Create an Account</h3>
									</div>
									<div class="">
										<div class="d-grid">
											<a class="btn my-4 shadow-sm btn-white" href="javascript:;"> <span class="d-flex justify-content-center align-items-center">
											<img class="me-2" src="assets/images/icons/search.svg" width="16" alt="Image Description">
											<span>Sign Up with Google</span>
												</span>
											</a> <a href="javascript:;" class="btn btn-facebook"><i class="bx bxl-facebook me-1"></i>Sign Up with Facebook</a>
										</div>
										<div class="login-separater text-center mb-4"> <span>OR SIGN UP WITH EMAIL</span>
											<hr>
										</div>
										<div class="form-body">
											<form class="row g-3">
												<div class="col-sm-6">
													<label for="inputFirstName" class="form-label" style="color: green;">First Name</label>
													<input type="email" class="form-control" id="inputFirstName" placeholder="Jhon">
												</div>
												<div class="col-sm-6">
													<label for="inputLastName" class="form-label" style="color: green;">Last Name</label>
													<input type="email" class="form-control" id="inputLastName" placeholder="Deo">
												</div>
												<div class="col-12">
													<label for="inputEmailAddress" class="form-label" style="color: green;">Email Address</label>
													<input type="email" class="form-control" id="inputEmailAddress" placeholder="example@user.com">
												</div>
												<div class="col-12">
													<label for="inputChoosePassword" class="form-label" style="color: green;">Password</label>
													<div class="input-group" id="show_hide_password">
														<input type="password" class="form-control border-end-0" id="inputChoosePassword" value="12345678" placeholder="Enter Password"> <a href="javascript:;" class="input-group-text bg-transparent"><i class="bx bx-hide"></i></a>
													</div>
												</div>
												<div class="col-12">
													<label for="inputSelectCountry" class="form-label" style="color: green;">Country</label>
													<select class="form-select" id="inputSelectCountry" aria-label="Default select example">
														<option selected="">India</option>
														<option value="1">United Kingdom</option>
														<option value="2">America</option>
														<option value="3">Dubai</option>
													</select>
												</div>
												<div class="col-12">
													<div class="form-check form-switch">
														<input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked">
														<label class="form-check-label" for="flexSwitchCheckChecked">I read and agree to Terms &amp; Conditions</label>
													</div>
												</div>
												<div class="col-12">
													<div class="d-grid">
														<button type="submit" class="btn btn-success"><i class="bx bx-user me-1"></i>Sign up</button>
													</div>
												</div>
											</form>
										</div>
									</div>

								</div>
							</div>
							<div class="col-xl-6 bg-login-color d-flex align-items-center justify-content-center">
								<img src="assets/images/login-images/register-frent-img.jpg" class="img-fluid" alt="...">
							</div>
						</div>
						<!--end row-->
					</div>
				</div>
			</div>
		</div>
	</div>
	
</body>

@endsection