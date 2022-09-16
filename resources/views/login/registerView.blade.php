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
									</div>
									<div class="">
										<div class="text-center">
											<h3 class="mt-4 font-weight-bold" style="color: green"><img src="{{ asset('assets/images/sticker/ganyu-sticker.png') }}" class="image-sticker" alt="" style="width: 150px;"> <img src="{{ asset('assets/images/sticker/itto-sticker.png') }}" class="image-sticker" alt="" style="width: 150px;"></h3>
										</div>
										<div class="login-separater text-center mb-4"> <span>BUAT AKUN JOKI AYDAN</span>
											<hr>
										</div>
										<div class="form-body">
											<form class="row g-3">
												<div class="col-sm-6">
													<label for="inputFirstName" class="form-label" style="color: green;">First Name</label>
													<input type="text" class="form-control" id="inputFirstName" placeholder="Ethan">
												</div>
												<div class="col-sm-6">
													<label for="inputLastName" class="form-label" style="color: green;">Last Name</label>
													<input type="text" class="form-control" id="inputLastName" placeholder="Scelter">
												</div>
												<div class="col-12">
													<label for="inputEmailAddress" class="form-label" style="color: green;">Username</label>
													<input type="text" class="form-control" id="inputEmailAddress" placeholder="aydanjoki">
												</div>
												<div class="col-12">
													<label for="inputChoosePassword" class="form-label" style="color: green;">Password</label>
													<div class="input-group" id="show_hide_password">
														<input type="password" class="form-control border-end-0" id="inputChoosePassword" value="12345678" placeholder="Enter Password"> <a href="javascript:;" class="input-group-text bg-transparent"><i class="bx bx-hide"></i></a>
													</div>
												</div>
	
												<div class="col-12">
													<div class="form-check form-switch">
														<input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" required>
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