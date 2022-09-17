@extends('layout.dashboard')

@section('container')


<body>
	<!-- wrapper -->
	<div class="wrapper">
		<!--sidebar-wrapper-->
		<div class="sidebar-wrapper" data-simplebar="true">
			<div class="sidebar-header">
				<div class="">
					<img src="assets/images/logo-icon.png" class="logo-icon-2" alt="" />
				</div>
				<div>
					<h4 class="logo-text">Syndash</h4>
				</div>
				<a href="javascript:;" class="toggle-btn ms-auto"> <i class="bx bx-menu"></i>
				</a>
			</div>
			<!--navigation-->
			<ul class="metismenu" id="menu">
				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon icon-color-1"><i class="bx bx-home-alt"></i>
						</div>
						<div class="menu-title">Dashboard</div>
					</a>
					<ul>
						<li> <a href="index.html"><i class="bx bx-right-arrow-alt"></i>Analytics</a>
						</li>
						<li> <a href="index2.html"><i class="bx bx-right-arrow-alt"></i>Sales</a>
						</li>
					</ul>
				</li>
				<li class="menu-label">Web Apps</li>
				<li>
					<a href="emailbox.html">
						<div class="parent-icon icon-color-2"><i class="bx bx-envelope"></i>
						</div>
						<div class="menu-title">Email</div>
					</a>
				</li>
				<li>
					<a href="chat-box.html">
						<div class="parent-icon icon-color-3"> <i class="bx bx-conversation"></i>
						</div>
						<div class="menu-title">Chat Box</div>
					</a>
				</li>
				<li>
					<a href="file-manager.html">
						<div class="parent-icon icon-color-4"><i class="bx bx-archive"></i>
						</div>
						<div class="menu-title">File Manager</div>
					</a>
				</li>
				<li>
					<a href="contact-list.html">
						<div class="parent-icon icon-color-5"><i class="bx bx-group"></i>
						</div>
						<div class="menu-title">Contatcs</div>
					</a>
				</li>
				<li>
					<a href="to-do.html">
						<div class="parent-icon icon-color-6"><i class="bx bx-task"></i>
						</div>
						<div class="menu-title">Todo List</div>
					</a>
				</li>
				<li>
					<a href="invoice.html">
						<div class="parent-icon icon-color-7"><i class="bx bx-file"></i>
						</div>
						<div class="menu-title">Invoice</div>
					</a>
				</li>
				<li>
					<a href="fullcalender.html">
						<div class="parent-icon icon-color-8"> <i class="bx bx-calendar-check"></i>
						</div>
						<div class="menu-title">Calendar</div>
					</a>
				</li>
				<li class="menu-label">UI Elements</li>
				<li>
					<a href="widgets.html">
						<div class="parent-icon icon-color-9"><i class="bx bx-ghost"></i>
						</div>
						<div class="menu-title">Widgets</div>
					</a>
				</li>
				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon icon-color-10"><i class="bx bx-spa"></i>
						</div>
						<div class="menu-title">Components</div>
					</a>
					<ul>
						<li> <a href="component-alerts.html"><i class="bx bx-right-arrow-alt"></i>Alerts</a>
						</li>
						<li> <a href="component-bedges.html"><i class="bx bx-right-arrow-alt"></i>Badge</a>
						</li>
						<li> <a href="component-buttons.html"><i class="bx bx-right-arrow-alt"></i>Buttons</a>
						</li>
						<li> <a href="component-cards.html"><i class="bx bx-right-arrow-alt"></i>Cards</a>
						</li>
						<li> <a href="component-carousels.html"><i class="bx bx-right-arrow-alt"></i>Carousel</a>
						</li>
						<li> <a href="component-acordians.html"><i class="bx bx-right-arrow-alt"></i>Acordians</a>
						</li>
						<li> <a href="component-list-groups.html"><i class="bx bx-right-arrow-alt"></i>List Groups</a>
						</li>
						<li> <a href="component-media-object.html"><i class="bx bx-right-arrow-alt"></i>Media Objects</a>
						</li>
						<li> <a href="component-modals.html"><i class="bx bx-right-arrow-alt"></i>Modal</a>
						</li>
						<li> <a href="component-navs.html"><i class="bx bx-right-arrow-alt"></i>Navs</a>
						</li>
						<li> <a href="components-navbar.html"><i class="bx bx-right-arrow-alt"></i>Navbar</a>
						</li>
						<li> <a href="component-paginations.html"><i class="bx bx-right-arrow-alt"></i>Pagination</a>
						</li>
						<li> <a href="component-popovers-tooltips.html"><i class="bx bx-right-arrow-alt"></i>Popovers & Tooltips</a>
						</li>
						<li> <a href="component-progress-bars.html"><i class="bx bx-right-arrow-alt"></i>Progress</a>
						</li>
						<li> <a href="component-spinners.html"><i class="bx bx-right-arrow-alt"></i>Spinners</a>
						</li>
						<li> <a href="component-notifications.html"><i class="bx bx-right-arrow-alt"></i>Notifications</a>
						</li>
						<li> <a href="components-avtars-chips.html"><i class="bx bx-right-arrow-alt"></i>Avatrs & Chips</a>
						</li>
					</ul>
				</li>
				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon icon-color-11"><i class="bx bx-repeat"></i>
						</div>
						<div class="menu-title">Content</div>
					</a>
					<ul>
						<li> <a href="content-grid-system.html"><i class="bx bx-right-arrow-alt"></i>Grid System</a>
						</li>
						<li> <a href="content-typography.html"><i class="bx bx-right-arrow-alt"></i>Typography</a>
						</li>
						<li> <a href="content-text-utilities.html"><i class="bx bx-right-arrow-alt"></i>Text Utilities</a>
						</li>
					</ul>
				</li>
				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon icon-color-12"> <i class="bx bx-donate-blood"></i>
						</div>
						<div class="menu-title">Icons</div>
					</a>
					<ul>
						<li> <a href="icons-line-icons.html"><i class="bx bx-right-arrow-alt"></i>Line Icons</a>
						</li>
						<li> <a href="icons-boxicons.html"><i class="bx bx-right-arrow-alt"></i>Boxicons</a>
						</li>
						<li> <a href="icons-feather-icons.html"><i class="bx bx-right-arrow-alt"></i>Feather Icons</a>
						</li>
					</ul>
				</li>
				<li class="menu-label">Forms & Tables</li>
				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon icon-color-1"> <i class="bx bx-comment-edit"></i>
						</div>
						<div class="menu-title">Forms</div>
					</a>
					<ul>
						<li> <a href="form-elements.html"><i class="bx bx-right-arrow-alt"></i>Form Elements</a>
						</li>
						<li> <a href="form-input-group.html"><i class="bx bx-right-arrow-alt"></i>Input Groups</a>
						</li>
						<li> <a href="form-layouts.html"><i class="bx bx-right-arrow-alt"></i>Forms Layouts</a>
						</li>
						<li> <a href="form-validations.html"><i class="bx bx-right-arrow-alt"></i>Form Validation</a>
						</li>
						<li> <a href="form-wizard.html"><i class="bx bx-right-arrow-alt"></i>Form Wizard</a>
						</li>
						<li> <a href="form-text-editor.html"><i class="bx bx-right-arrow-alt"></i>Text Editor</a>
						</li>
						<li> <a href="form-file-upload.html"><i class="bx bx-right-arrow-alt"></i>File Upload</a>
						</li>
						<li> <a href="form-date-time-pickes.html"><i class="bx bx-right-arrow-alt"></i>Date Pickers</a>
						</li>
						<li> <a href="form-select2.html"><i class="bx bx-right-arrow-alt"></i>Select2</a>
						</li>
					</ul>
				</li>
				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon icon-color-2"><i class="bx bx-grid-alt"></i>
						</div>
						<div class="menu-title">Tables</div>
					</a>
					<ul>
						<li> <a href="table-basic-table.html"><i class="bx bx-right-arrow-alt"></i>Basic Table</a>
						</li>
						<li> <a href="table-datatable.html"><i class="bx bx-right-arrow-alt"></i>Data Table</a>
						</li>
						<li> <a href="table-editable.html"><i class="bx bx-right-arrow-alt"></i>Editable Table</a>
						</li>
					</ul>
				</li>
				<li class="menu-label">Pages</li>
				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon icon-color-3"><i class="bx bx-lock"></i>
						</div>
						<div class="menu-title">Authentication</div>
					</a>
					<ul>
						<li> <a href="authentication-login.html" target="_blank"><i class="bx bx-right-arrow-alt"></i>Login</a>
						</li>
						<li> <a href="authentication-register.html" target="_blank"><i class="bx bx-right-arrow-alt"></i>Register</a>
						</li>
						<li> <a href="authentication-forgot-password.html" target="_blank"><i class="bx bx-right-arrow-alt"></i>Forgot Password</a>
						</li>
						<li> <a href="authentication-reset-password.html" target="_blank"><i class="bx bx-right-arrow-alt"></i>Reset Password</a>
						</li>
						<li> <a href="authentication-lock-screen.html" target="_blank"><i class="bx bx-right-arrow-alt"></i>Lock Screen</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="user-profile.html">
						<div class="parent-icon icon-color-4"><i class="bx bx-user-circle"></i>
						</div>
						<div class="menu-title">User Profile</div>
					</a>
				</li>
				<li>
					<a href="timeline.html">
						<div class="parent-icon icon-color-5"> <i class="bx bx-video-recording"></i>
						</div>
						<div class="menu-title">Timeline</div>
					</a>
				</li>
				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon icon-color-6"><i class="bx bx-error"></i>
						</div>
						<div class="menu-title">Errors</div>
					</a>
					<ul>
						<li> <a href="errors-404-error.html" target="_blank"><i class="bx bx-right-arrow-alt"></i>404 Error</a>
						</li>
						<li> <a href="errors-500-error.html" target="_blank"><i class="bx bx-right-arrow-alt"></i>500 Error</a>
						</li>
						<li> <a href="errors-coming-soon.html" target="_blank"><i class="bx bx-right-arrow-alt"></i>Coming Soon</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="faq.html">
						<div class="parent-icon icon-color-7"><i class="bx bx-help-circle"></i>
						</div>
						<div class="menu-title">FAQ</div>
					</a>
				</li>
				<li>
					<a href="pricing-table.html">
						<div class="parent-icon icon-color-8"><i class="bx bx-diamond"></i>
						</div>
						<div class="menu-title">Pricing</div>
					</a>
				</li>
				<li class="menu-label">Charts & Maps</li>
				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon icon-color-9"><i class="bx bx-line-chart"></i>
						</div>
						<div class="menu-title">Charts</div>
					</a>
					<ul>
						<li> <a href="charts-apex-chart.html"><i class="bx bx-right-arrow-alt"></i>Apex</a>
						</li>
						<li> <a href="charts-chartjs.html"><i class="bx bx-right-arrow-alt"></i>Chartjs</a>
						</li>
						<li> <a href="charts-highcharts.html"><i class="bx bx-right-arrow-alt"></i>Highcharts</a>
						</li>
					</ul>
				</li>
				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon icon-color-10"><i class="bx bx-map-alt"></i>
						</div>
						<div class="menu-title">Maps</div>
					</a>
					<ul>
						<li> <a href="map-google-maps.html"><i class="bx bx-right-arrow-alt"></i>Google Maps</a>
						</li>
						<li> <a href="map-vector-maps.html"><i class="bx bx-right-arrow-alt"></i>Vector Maps</a>
						</li>
					</ul>
				</li>
				<li class="menu-label">Others</li>
				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon icon-color-11"><i class="bx bx-menu"></i>
						</div>
						<div class="menu-title">Menu Levels</div>
					</a>
					<ul>
						<li> <a class="has-arrow" href="javascript:;"><i class="bx bx-right-arrow-alt"></i>Level One</a>
							<ul>
								<li> <a class="has-arrow" href="javascript:;"><i class="bx bx-right-arrow-alt"></i>Level Two</a>
									<ul>
										<li> <a href="javascript:;"><i class="bx bx-right-arrow-alt"></i>Level Three</a>
										</li>
									</ul>
								</li>
							</ul>
						</li>
					</ul>
				</li>
				<li>
					<a href="https://codervent.com/syndash/documentation/index.html" target="_blank">
						<div class="parent-icon icon-color-12"><i class="bx bx-folder"></i>
						</div>
						<div class="menu-title">Documentation</div>
					</a>
				</li>
				<li>
					<a href="https://themeforest.net/user/codervent" target="_blank">
						<div class="parent-icon"><i class="bx bx-support"></i>
						</div>
						<div class="menu-title">Support</div>
					</a>
				</li>
			</ul>
			<!--end navigation-->
		</div>
		<!--end sidebar-wrapper-->
		<!--header-->
		<header class="top-header">
			<nav class="navbar navbar-expand">
				<div class="left-topbar d-flex align-items-center">
					<a href="javascript:;" class="toggle-btn">	<i class="bx bx-menu"></i>
					</a>
				</div>
				<div class="flex-grow-1 search-bar">
					<div class="input-group">
						 <button class="btn btn-search-back search-arrow-back" type="button"><i class="bx bx-arrow-back"></i></button>
						 <input type="text" class="form-control" placeholder="search" />
						 <button class="btn btn-search" type="button"><i class="lni lni-search-alt"></i></button>
					</div>
				</div>
				<div class="right-topbar ms-auto">
					<ul class="navbar-nav">
						<li class="nav-item search-btn-mobile">
							<a class="nav-link position-relative" href="javascript:;">	<i class="bx bx-search vertical-align-middle"></i>
							</a>
						</li>
						<li class="nav-item dropdown dropdown-lg">
							<a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="javascript:;" data-bs-toggle="dropdown">	<span class="msg-count">6</span>
								<i class="bx bx-comment-detail vertical-align-middle"></i>
							</a>
							<div class="dropdown-menu dropdown-menu-end">
								<a href="javascript:;">
									<div class="msg-header">
										<h6 class="msg-header-title">6 New</h6>
										<p class="msg-header-subtitle">Application Messages</p>
									</div>
								</a>
								<div class="header-message-list">
									<a class="dropdown-item" href="javascript:;">
										<div class="d-flex align-items-center">
											<div class="user-online">
												<img src="assets/images/avatars/avatar-1.png" class="msg-avatar" alt="user avatar">
											</div>
											<div class="flex-grow-1">
												<h6 class="msg-name">Daisy Anderson <span class="msg-time float-end">5 sec
													ago</span></h6>
												<p class="msg-info">The standard chunk of lorem</p>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="javascript:;">
										<div class="d-flex align-items-center">
											<div class="user-online">
												<img src="assets/images/avatars/avatar-2.png" class="msg-avatar" alt="user avatar">
											</div>
											<div class="flex-grow-1">
												<h6 class="msg-name">Althea Cabardo <span class="msg-time float-end">14
													sec ago</span></h6>
												<p class="msg-info">Many desktop publishing packages</p>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="javascript:;">
										<div class="d-flex align-items-center">
											<div class="user-online">
												<img src="assets/images/avatars/avatar-3.png" class="msg-avatar" alt="user avatar">
											</div>
											<div class="flex-grow-1">
												<h6 class="msg-name">Oscar Garner <span class="msg-time float-end">8 min
													ago</span></h6>
												<p class="msg-info">Various versions have evolved over</p>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="javascript:;">
										<div class="d-flex align-items-center">
											<div class="user-online">
												<img src="assets/images/avatars/avatar-4.png" class="msg-avatar" alt="user avatar">
											</div>
											<div class="flex-grow-1">
												<h6 class="msg-name">Katherine Pechon <span class="msg-time float-end">15
													min ago</span></h6>
												<p class="msg-info">Making this the first true generator</p>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="javascript:;">
										<div class="d-flex align-items-center">
											<div class="user-online">
												<img src="assets/images/avatars/avatar-5.png" class="msg-avatar" alt="user avatar">
											</div>
											<div class="flex-grow-1">
												<h6 class="msg-name">Amelia Doe <span class="msg-time float-end">22 min
													ago</span></h6>
												<p class="msg-info">Duis aute irure dolor in reprehenderit</p>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="javascript:;">
										<div class="d-flex align-items-center">
											<div class="user-online">
												<img src="assets/images/avatars/avatar-6.png" class="msg-avatar" alt="user avatar">
											</div>
											<div class="flex-grow-1">
												<h6 class="msg-name">Cristina Jhons <span class="msg-time float-end">2 hrs
													ago</span></h6>
												<p class="msg-info">The passage is attributed to an unknown</p>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="javascript:;">
										<div class="d-flex align-items-center">
											<div class="user-online">
												<img src="assets/images/avatars/avatar-7.png" class="msg-avatar" alt="user avatar">
											</div>
											<div class="flex-grow-1">
												<h6 class="msg-name">James Caviness <span class="msg-time float-end">4 hrs
													ago</span></h6>
												<p class="msg-info">The point of using Lorem</p>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="javascript:;">
										<div class="d-flex align-items-center">
											<div class="user-online">
												<img src="assets/images/avatars/avatar-8.png" class="msg-avatar" alt="user avatar">
											</div>
											<div class="flex-grow-1">
												<h6 class="msg-name">Peter Costanzo <span class="msg-time float-end">6 hrs
													ago</span></h6>
												<p class="msg-info">It was popularised in the 1960s</p>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="javascript:;">
										<div class="d-flex align-items-center">
											<div class="user-online">
												<img src="assets/images/avatars/avatar-9.png" class="msg-avatar" alt="user avatar">
											</div>
											<div class="flex-grow-1">
												<h6 class="msg-name">David Buckley <span class="msg-time float-end">2 hrs
													ago</span></h6>
												<p class="msg-info">Various versions have evolved over</p>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="javascript:;">
										<div class="d-flex align-items-center">
											<div class="user-online">
												<img src="assets/images/avatars/avatar-10.png" class="msg-avatar" alt="user avatar">
											</div>
											<div class="flex-grow-1">
												<h6 class="msg-name">Thomas Wheeler <span class="msg-time float-end">2 days
													ago</span></h6>
												<p class="msg-info">If you are going to use a passage</p>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="javascript:;">
										<div class="d-flex align-items-center">
											<div class="user-online">
												<img src="assets/images/avatars/avatar-11.png" class="msg-avatar" alt="user avatar">
											</div>
											<div class="flex-grow-1">
												<h6 class="msg-name">Johnny Seitz <span class="msg-time float-end">5 days
													ago</span></h6>
												<p class="msg-info">All the Lorem Ipsum generators</p>
											</div>
										</div>
									</a>
								</div>
								<a href="javascript:;">
									<div class="text-center msg-footer">View All Messages</div>
								</a>
							</div>
						</li>
						<li class="nav-item dropdown dropdown-lg">
							<a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="javascript:;" data-bs-toggle="dropdown">	<i class="bx bx-bell vertical-align-middle"></i>
								<span class="msg-count">8</span>
							</a>
							<div class="dropdown-menu dropdown-menu-end">
								<a href="javascript:;">
									<div class="msg-header">
										<h6 class="msg-header-title">8 New</h6>
										<p class="msg-header-subtitle">Application Notifications</p>
									</div>
								</a>
								<div class="header-notifications-list">
									<a class="dropdown-item" href="javascript:;">
										<div class="d-flex align-items-center">
											<div class="notify bg-light-primary text-primary"><i class="bx bx-group"></i>
											</div>
											<div class="flex-grow-1">
												<h6 class="msg-name">New Customers<span class="msg-time float-end">14 Sec
													ago</span></h6>
												<p class="msg-info">5 new user registered</p>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="javascript:;">
										<div class="d-flex align-items-center">
											<div class="notify bg-light-danger text-danger"><i class="bx bx-cart-alt"></i>
											</div>
											<div class="flex-grow-1">
												<h6 class="msg-name">New Orders <span class="msg-time float-end">2 min
													ago</span></h6>
												<p class="msg-info">You have recived new orders</p>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="javascript:;">
										<div class="d-flex align-items-center">
											<div class="notify bg-light-shineblue text-shineblue"><i class="bx bx-file"></i>
											</div>
											<div class="flex-grow-1">
												<h6 class="msg-name">24 PDF File<span class="msg-time float-end">19 min
													ago</span></h6>
												<p class="msg-info">The pdf files generated</p>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="javascript:;">
										<div class="d-flex align-items-center">
											<div class="notify bg-light-cyne text-cyne"><i class="bx bx-send"></i>
											</div>
											<div class="flex-grow-1">
												<h6 class="msg-name">Time Response <span class="msg-time float-end">28 min
													ago</span></h6>
												<p class="msg-info">5.1 min avarage time response</p>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="javascript:;">
										<div class="d-flex align-items-center">
											<div class="notify bg-light-purple text-purple"><i class="bx bx-home-circle"></i>
											</div>
											<div class="flex-grow-1">
												<h6 class="msg-name">New Product Approved <span
													class="msg-time float-end">2 hrs ago</span></h6>
												<p class="msg-info">Your new product has approved</p>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="javascript:;">
										<div class="d-flex align-items-center">
											<div class="notify bg-light-warning text-warning"><i class="bx bx-message-detail"></i>
											</div>
											<div class="flex-grow-1">
												<h6 class="msg-name">New Comments <span class="msg-time float-end">4 hrs
													ago</span></h6>
												<p class="msg-info">New customer comments recived</p>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="javascript:;">
										<div class="d-flex align-items-center">
											<div class="notify bg-light-success text-success"><i class='bx bx-check-square'></i>
											</div>
											<div class="flex-grow-1">
												<h6 class="msg-name">Your item is shipped <span class="msg-time float-end">5 hrs
													ago</span></h6>
												<p class="msg-info">Successfully shipped your item</p>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="javascript:;">
										<div class="d-flex align-items-center">
											<div class="notify bg-light-sinata text-sinata"><i class='bx bx-user-pin'></i>
											</div>
											<div class="flex-grow-1">
												<h6 class="msg-name">New 24 authors<span class="msg-time float-end">1 day
													ago</span></h6>
												<p class="msg-info">24 new authors joined last week</p>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="javascript:;">
										<div class="d-flex align-items-center">
											<div class="notify bg-light-mehandi text-mehandi"><i class='bx bx-door-open'></i>
											</div>
											<div class="flex-grow-1">
												<h6 class="msg-name">Defense Alerts <span class="msg-time float-end">2 weeks
													ago</span></h6>
												<p class="msg-info">45% less alerts last 4 weeks</p>
											</div>
										</div>
									</a>
								</div>
								<a href="javascript:;">
									<div class="text-center msg-footer">View All Notifications</div>
								</a>
							</div>
						</li>
						<li class="nav-item dropdown dropdown-user-profile">
							<a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;" data-bs-toggle="dropdown">
								<div class="d-flex user-box align-items-center">
									<div class="user-info">
										<p class="user-name mb-0">Jessica Doe</p>
										<p class="designattion mb-0">Available</p>
									</div>
									<img src="assets/images/avatars/avatar-1.png" class="user-img" alt="user avatar">
								</div>
							</a>
							<div class="dropdown-menu dropdown-menu-end">	
								<a class="dropdown-item" href="javascript:;"><i
										class="bx bx-user"></i><span>Profile</span></a>
								<a class="dropdown-item" href="javascript:;"><i
										class="bx bx-cog"></i><span>Settings</span></a>
								<a class="dropdown-item" href="javascript:;"><i
										class="bx bx-tachometer"></i><span>Dashboard</span></a>
								<a class="dropdown-item" href="javascript:;"><i
										class="bx bx-wallet"></i><span>Earnings</span></a>
								<a class="dropdown-item" href="javascript:;"><i
										class="bx bx-cloud-download"></i><span>Downloads</span></a>
								<div class="dropdown-divider mb-0"></div>	<a class="dropdown-item" href="#" id="logout-dashboard"><i
										class="bx bx-power-off"></i><span>Logout</span></a>
							</div>
						</li>
						<li class="nav-item dropdown dropdown-language">
							<a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;" data-bs-toggle="dropdown">
								<div class="lang d-flex">
									<div><i class="flag-icon flag-icon-um"></i>
									</div>
									<div><span>En</span>
									</div>
								</div>
							</a>
							<div class="dropdown-menu dropdown-menu-end">
								<a class="dropdown-item" href="javascript:;"><i
										class="flag-icon flag-icon-de"></i><span>German</span></a>
								<a class="dropdown-item" href="javascript:;"><i
										class="flag-icon flag-icon-fr"></i><span>French</span></a>
								<a class="dropdown-item" href="javascript:;"><i
										class="flag-icon flag-icon-um"></i><span>English</span></a>
								<a class="dropdown-item" href="javascript:;"><i
										class="flag-icon flag-icon-in"></i><span>Hindi</span></a>
								<a class="dropdown-item" href="javascript:;"><i
										class="flag-icon flag-icon-cn"></i><span>Chinese</span></a>
								<a class="dropdown-item" href="javascript:;"><i
										class="flag-icon flag-icon-ae"></i><span>Arabic</span></a>
							</div>
						</li>
					</ul>
				</div>
			</nav>
		</header>
		<!--end header-->
		<!--page-wrapper-->
		<div class="page-wrapper">
			<!--page-content-wrapper-->
			<div class="page-content-wrapper">
				<div class="page-content">
					<div class="row">
						<div class="col-12 col-lg-3">
							<div class="card radius-15 bg-voilet">
								<div class="card-body">
									<div class="d-flex align-items-center">
										<div>
											<h2 class="mb-0 text-white">649 <i class='bx bxs-up-arrow-alt font-14 text-white'></i> </h2>
										</div>
										<div class="ms-auto font-35 text-white"><i class="bx bx-cart-alt"></i>
										</div>
									</div>
									<div class="d-flex align-items-center">
										<div>
											<p class="mb-0 text-white">Item Delivered</p>
										</div>
										<div class="ms-auto font-14 text-white">+23.4%</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-lg-3">
							<div class="card radius-15 bg-primary-blue">
								<div class="card-body">
									<div class="d-flex align-items-center">
										<div>
											<h2 class="mb-0 text-white">114 <i class='bx bxs-down-arrow-alt font-14 text-white'></i> </h2>
										</div>
										<div class="ms-auto font-35 text-white"><i class="bx bx-support"></i>
										</div>
									</div>
									<div class="d-flex align-items-center">
										<div>
											<p class="mb-0 text-white">Refund Request</p>
										</div>
										<div class="ms-auto font-14 text-white">+14.7%</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-lg-3">
							<div class="card radius-15 bg-rose">
								<div class="card-body">
									<div class="d-flex align-items-center">
										<div>
											<h2 class="mb-0 text-white">98 <i class='bx bxs-up-arrow-alt font-14 text-white'></i> </h2>
										</div>
										<div class="ms-auto font-35 text-white"><i class="bx bx-tachometer"></i>
										</div>
									</div>
									<div class="d-flex align-items-center">
										<div>
											<p class="mb-0 text-white">Cancelled Orders</p>
										</div>
										<div class="ms-auto font-14 text-white">-12.9%</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-lg-3">
							<div class="card radius-15 bg-sunset">
								<div class="card-body">
									<div class="d-flex align-items-center">
										<div>
											<h2 class="mb-0 text-white">208 <i class='bx bxs-up-arrow-alt font-14 text-white'></i> </h2>
										</div>
										<div class="ms-auto font-35 text-white"><i class="bx bx-user"></i>
										</div>
									</div>
									<div class="d-flex align-items-center">
										<div>
											<p class="mb-0 text-white">New Users</p>
										</div>
										<div class="ms-auto font-14 text-white">+13.6%</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--end row-->
					<div class="card radius-15">
						<div class="card-header border-bottom-0">
							<div class="d-lg-flex align-items-center">
								<div>
									<h5 class="mb-2 mb-lg-0">Sales Update</h5>
								</div>
								<div class="ms-lg-auto mb-2 mb-lg-0">
									<div class="btn-group-round">
										<div class="btn-group">
											<button type="button" class="btn btn-white">Daiiy</button>
											<button type="button" class="btn btn-white">Weekly</button>
											<button type="button" class="btn btn-white">Monthly</button>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="card-body">
							<div id="chart1"></div>
						</div>
					</div>

					<div class="row">
                      <div class="col-12 col-lg-6">
						<div class="card radius-15">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<h5 class="mb-0">Revenue By Device</h5>
									</div>
									<div class="dropdown ms-auto">
										<div class="cursor-pointer font-24 dropdown-toggle dropdown-toggle-nocaret" data-bs-toggle="dropdown"><i class="bx bx-dots-horizontal-rounded"></i>
										</div>
										<div class="dropdown-menu dropdown-menu-right">	<a class="dropdown-item" href="javascript:;">Action</a>
											<a class="dropdown-item" href="javascript:;">Another action</a>
											<div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Something else here</a>
										</div>
									</div>
								</div>
								<div id="chart2"></div>
								<div class="legends">
									<div class="row">
										<div class="col-12 col-lg-5">
											<div class="d-flex align-items-center justify-content-between">
												<div class="text-secondary"><i class='bx bxs-circle font-13 text-primary-blue me-2'></i>Desktop</div>
												<div>$850.04</div>
												<div class="text-secondary">64.4%</div>
											</div>
											<div class="my-2"></div>
											<div class="d-flex align-items-center justify-content-between">
												<div class="text-secondary"><i class='bx bxs-circle font-13 text-shineblue me-2'></i>Mobile</div>
												<div>$755.08</div>
												<div class="text-secondary">48.6%</div>
											</div>
										</div>
										<div class="col-12 col-lg-2">
											<div class="vertical-separater"></div>
										</div>
										<div class="col-12 col-lg-5">
											<div class="d-flex align-items-center justify-content-between">
												<div class="text-secondary"><i class='bx bxs-circle font-13 text-primary me-2'></i>Tablet</div>
												<div>$687.03</div>
												<div class="text-secondary">24.7%</div>
											</div>
											<div class="my-2"></div>
											<div class="d-flex align-items-center justify-content-between">
												<div class="text-secondary"><i class='bx bxs-circle font-13 text-red me-2'></i>Unknown</div>
												<div>$142.07</div>
												<div class="text-secondary">14.8%</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					  </div>
					  <div class="col-12 col-lg-6">
						<div class="card radius-15">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<h5 class="mb-0">Traffic</h5>
									</div>
									<div class="dropdown ms-auto">
										<div class="cursor-pointer font-24 dropdown-toggle dropdown-toggle-nocaret" data-bs-toggle="dropdown"><i class="bx bx-dots-horizontal-rounded"></i>
										</div>
										<div class="dropdown-menu dropdown-menu-right">	<a class="dropdown-item" href="javascript:;">Action</a>
											<a class="dropdown-item" href="javascript:;">Another action</a>
											<div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Something else here</a>
										</div>
									</div>
								</div>
								<div class="row mt-3 g-3">
									<div class="col-12 col-lg-6">
										<div class="card radius-15 border shadow-none">
											<div class="card-body">
												<div class="d-flex align-items-center">
													<div>
														<p class="mb-0">Store Visits</p>
													</div>
													<div class="ms-auto text-success"><span>+22%</span>
													</div>
												</div>
												<h4 class="mb-0">8950</h4>
											</div>
										</div>
									</div>
									<div class="col-12 col-lg-6">
										<div class="card radius-15 border shadow-none">
											<div class="card-body">
												<div class="d-flex align-items-center">
													<div>
														<p class="mb-0">Visitors</p>
													</div>
													<div class="ms-auto text-purple"><span>-24%</span>
													</div>
												</div>
												<h4 class="mb-0">1520</h4>
											</div>
										</div>
									</div>
								</div>
								<div id="chart3"></div>
							</div>
						</div>
					</div>
					</div><!--end row-->


					<div class="row">
						<div class="col-12 col-lg-4 d-flex">
							<div class="card radius-15 w-100">
								<div class="card-body">
									<div class="d-lg-flex align-items-center">
										<div>
											<h5 class="mb-4">Top Categories</h5>
										</div>
										<div class="dropdown ms-auto">
											<div class="cursor-pointer font-24 dropdown-toggle dropdown-toggle-nocaret" data-bs-toggle="dropdown"><i class="bx bx-dots-horizontal-rounded"></i>
											</div>
											<div class="dropdown-menu dropdown-menu-right">	<a class="dropdown-item" href="javascript:;">Action</a>
												<a class="dropdown-item" href="javascript:;">Another action</a>
												<div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Something else here</a>
											</div>
										</div>
									</div>
									<div class="progress-wrapper mb-4">
										<p class="mb-1">Electronics <span class="float-end">45%</span>
										</p>
										<div class="progress radius-15" style="height:5px;">
											<div class="progress-bar" role="progressbar" style="width: 45%"></div>
										</div>
									</div>
									<div class="progress-wrapper mb-4">
										<p class="mb-1">Clothing <span class="float-end">55%</span>
										</p>
										<div class="progress radius-15" style="height:5px;">
											<div class="progress-bar bg-voilet" role="progressbar" style="width: 55%"></div>
										</div>
									</div>
									<div class="progress-wrapper mb-4">
										<p class="mb-1">Furniture <span class="float-end">64%</span>
										</p>
										<div class="progress radius-15" style="height:5px;">
											<div class="progress-bar bg-red-light" role="progressbar" style="width: 64%"></div>
										</div>
									</div>
									<div class="progress-wrapper mb-4">
										<p class="mb-1">Accessories <span class="float-end">78%</span>
										</p>
										<div class="progress radius-15" style="height:5px;">
											<div class="progress-bar bg-sunset" role="progressbar" style="width: 78%"></div>
										</div>
									</div>
									<div class="progress-wrapper mb-4">
										<p class="mb-1">Jewellery <span class="float-end">82%</span>
										</p>
										<div class="progress radius-15" style="height:5px;">
											<div class="progress-bar bg-wall" role="progressbar" style="width: 82%"></div>
										</div>
									</div>
									<div class="progress-wrapper">
										<p class="mb-1">Mobiles <span class="float-end">89%</span>
										</p>
										<div class="progress radius-15" style="height:5px;">
											<div class="progress-bar bg-dark" role="progressbar" style="width: 89%"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-lg-8 d-flex">
							<div class="card radius-15 w-100">
								<div class="card-body">
									<div class="d-flex align-items-center mb-3">
										<div>
											<h5 class="mb-0">Sales Forecast</h5>
										</div>
										<div class="dropdown ms-auto">
											<div class="cursor-pointer text-dark font-24 dropdown-toggle dropdown-toggle-nocaret" data-bs-toggle="dropdown"><i class="bx bx-dots-horizontal-rounded"></i>
											</div>
											<div class="dropdown-menu dropdown-menu-right">	<a class="dropdown-item" href="javascript:;">Action</a>
												<a class="dropdown-item" href="javascript:;">Another action</a>
												<div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Something else here</a>
											</div>
										</div>
									</div>
									<div class="row g-3">
										<div class="col-12 col-lg-6">
											<div class="card radius-15 border shadow-none mb-0">
												<div class="card-body">
													<div class="d-flex flex-row align-items-center">
														<div class="">
															<p class="text-secondary mb-0">Revenue</p>
															<h4 class="mb-0 ">+24.5%</h4>
														</div>
														<div class="fs-2 ms-auto">
															<i class='bx bx-wallet-alt'></i>
														</div>
													</div>
													<div id="chart4" class="ms-auto mt-1"></div>
												</div>
											</div>
										</div>
										<div class="col-12 col-lg-6">
											<div class="card radius-15 border shadow-none mb-0">
												<div class="card-body">
													<div class="d-flex flex-row align-items-center">
														<div class="">
															<p class="text-secondary mb-0">Net Profit</p>
															<h4 class="mb-0">-2.7%</h4>
														</div>
														<div class="fs-2 ms-auto">
															<i class='bx bx-bar-chart-alt-2' ></i>
														</div>
													</div>
													<div id="chart5" class="ms-auto mt-1"></div>
												</div>
											</div>
										</div>
										<div class="col-12 col-lg-6">
											<div class="card radius-15 border shadow-none mb-0">
												<div class="card-body">
													<div class="d-flex flex-row align-items-center">
														<div class="">
															<p class="text-secondary mb-0">Orders</p>
															<h4 class="mb-0">+32.6%</h4>
														</div>
														<div class="fs-2 ms-auto">
															<i class='bx bx-shopping-bag'></i>
														</div>
													</div>
													<div id="chart6" class="ms-auto mt-1"></div>
												</div>
											</div>
										</div>
										<div class="col-12 col-lg-6">
											<div class="card radius-15 border shadow-none mb-0">
												<div class="card-body">
													<div class="d-flex flex-row align-items-center">
														<div class="">
															<p class="text-secondary mb-0">Visitors</p>
															<h4 class="mb-0">+60.2%</h4>
														</div>
														<div class="fs-2 ms-auto">
															<i class='bx bx-group'></i>
														</div>
													</div>
													<div id="chart7" class="ms-auto mt-1"></div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--end row-->
					<div class="row">
						<div class="col-12 col-lg-8 d-flex">
							<div class="card radius-15 w-100 overflow-hidden">
								<div class="card-header border-bottom-0">
									<div class="d-flex align-items-center">
										<div>
											<h5 class="mb-0">Revenue By Locations</h5>
										</div>
										<div class="dropdown ms-auto">
											<div class="cursor-pointer font-24 dropdown-toggle dropdown-toggle-nocaret" data-bs-toggle="dropdown"><i class="bx bx-dots-horizontal-rounded"></i>
											</div>
											<div class="dropdown-menu dropdown-menu-right">	<a class="dropdown-item" href="javascript:;">Action</a>
												<a class="dropdown-item" href="javascript:;">Another action</a>
												<div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Something else here</a>
											</div>
										</div>
									</div>
								</div>
								<div class="card-body">
									<div id="location-map"></div>
								</div>
								<div class="table-responsive">
									<table class="table mb-0">
										<thead>
											<tr>
												<th scope="col" class="text-blue-ribbon">Countries</th>
												<th scope="col" class="text-brink-pink">Orders</th>
												<th scope="col" class="text-mountain-meadow">Earnings</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td class="d-flex align-items-center"><i class="flag-icon flag-icon-um me-2"></i>
													<div>United States</div>
												</td>
												<td>13,495</td>
												<td class="text-semibold">$58,430.75</td>
											</tr>
											<tr>
												<td class="d-flex align-items-center"><i class="flag-icon flag-icon-nl me-2"></i>
													<div>Netherlands</div>
												</td>
												<td>11,495</td>
												<td class="text-semibold">$68,253.90</td>
											</tr>
											<tr>
												<td class="d-flex align-items-center"><i class="flag-icon flag-icon-us me-2"></i>
													<div>United Kingdom</div>
												</td>
												<td>09,348</td>
												<td class="text-semibold">$87,295.70</td>
											</tr>
											<tr>
												<td class="d-flex align-items-center"><i class="flag-icon flag-icon-ca me-2"></i>
													<div>Canada</div>
												</td>
												<td>07,845</td>
												<td class="text-semibold">$64,914.20</td>
											</tr>
											<tr>
												<td class="d-flex align-items-center"><i class="flag-icon flag-icon-au me-2"></i>
													<div>Australia</div>
												</td>
												<td>05,945</td>
												<td class="text-semibold">$94,335.60</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
						<div class="col-12 col-lg-4 d-flex">
							<div class="card radius-15 w-100">
							  <div class="card-body">
							  <div class="card radius-15 border shadow-none">
								<div class="card-body">
									<div class="d-flex align-items-center">
										<h5 class="mb-0">New Users</h5>
										<p class="mb-0 ms-auto"><i class="bx bx-dots-horizontal-rounded float-right font-24"></i>
										</p>
									</div>
									<div class="d-flex align-items-center mt-3 gap-2">
										<img src="assets/images/avatars/avatar-1.png" width="45" height="45" class="rounded-circle" alt="">
										<div class="flex-grow-1">
											<p class="font-weight-bold mb-0">Neil Wagner</p>
											<p class="text-secondary mb-0">United Kingdom</p>
										</div>
										<a href="javascript:;" class="btn btn-sm btn-light-primary px-4 radius-10">Add</a>
									</div>
									<hr>
									<div class="d-flex align-items-center gap-2">
										<img src="assets/images/avatars/avatar-2.png" width="45" height="45" class="rounded-circle" alt="">
										<div class="flex-grow-1">
											<p class="font-weight-bold mb-0">Sampoll Dinga</p>
											<p class="text-secondary mb-0">America</p>
										</div> <a href="javascript:;" class="btn btn-sm btn-light-primary px-4 radius-10">Add</a>
									</div>
									<hr>
									<div class="d-flex align-items-center gap-2">
										<img src="assets/images/avatars/avatar-3.png" width="45" height="45" class="rounded-circle" alt="">
										<div class="flex-grow-1">
											<p class="font-weight-bold mb-0">Loona Ting</p>
											<p class="text-secondary mb-0">Canada</p>
										</div> <a href="javascript:;" class="btn btn-sm btn-light-primary px-4 radius-10">Add</a>
									</div>
									<hr>
									<div class="d-flex align-items-center gap-2">
										<img src="assets/images/avatars/avatar-4.png" width="45" height="45" class="rounded-circle" alt="">
										<div class="flex-grow-1">
											<p class="font-weight-bold mb-0">Lee Jong</p>
											<p class="text-secondary mb-0">China</p>
										</div> <a href="javascript:;" class="btn btn-sm btn-light-primary px-4 radius-10">Add</a>
									</div>
								</div>
							</div>
							<div class="card radius-15 border shadow-none mb-0">
								<div class="card-body">
									<h4 class="mb-0">87.52%</h4>
									<p class="mb-0">Bounce Rate</p>
								</div>
								<div id="chart8"></div>
							</div>
						  </div>
						 </div>

						</div>
					</div>
					<!--end row-->
					<div class="card radius-15 overflow-hidden">
						<div class="card-header border-bottom-0">
							<div class="d-flex align-items-center">
								<div>
									<h5 class="mb-0">Recent Orders</h5>
								</div>
								<div class="ms-auto">
									<button type="button" class="btn btn-white btn-sm px-4 radius-15">View More</button>
								</div>
							</div>
						</div>
						<div class="card-body p-0">
							<div class="table-responsive">
								<table class="table mb-0">
									<thead>
										<tr>
											<th>Photo</th>
											<th>Product Name</th>
											<th>Customer</th>
											<th>Product id</th>
											<th>Price</th>
											<th>Status</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												<div class="product-img bg-transparent border">
													<img src="assets/images/icons/smartphone.png" width="35" alt="">
												</div>
											</td>
											<td>Honor Mobile 7x</td>
											<td>Mitchell Daniel</td>
											<td>#835478</td>
											<td>$54.68</td>
											<td><a href="javascript:;" class="btn btn-sm btn-light-success btn-block radius-30">Delivered</a>
											</td>
										</tr>
										<tr>
											<td>
												<div class="product-img bg-transparent border">
													<img src="assets/images/icons/watch.png" width="35" alt="">
												</div>
											</td>
											<td>Hand Watch</td>
											<td>Milona Burke</td>
											<td>#987546</td>
											<td>$43.78</td>
											<td><a href="javascript:;" class="btn btn-sm btn-light-warning btn-block radius-30">Pending</a>
											</td>
										</tr>
										<tr>
											<td>
												<div class="product-img bg-transparent border">
													<img src="assets/images/icons/laptop.png" width="35" alt="">
												</div>
											</td>
											<td>Mini Laptop</td>
											<td>Craig Clayton</td>
											<td>#325687</td>
											<td>$62.21</td>
											<td><a href="javascript:;" class="btn btn-sm btn-light-success btn-block radius-30">Delivered</a>
											</td>
										</tr>
										<tr>
											<td>
												<div class="product-img bg-transparent border">
													<img src="assets/images/icons/shirt.png" width="35" alt="">
												</div>
											</td>
											<td>Slim-T-Shirt</td>
											<td>Clark Andola</td>
											<td>#658972</td>
											<td>$75.68</td>
											<td><a href="javascript:;" class="btn btn-sm btn-light-danger btn-block radius-30">Cancelled</a>
											</td>
										</tr>
										<tr>
											<td>
												<div class="product-img bg-transparent border">
													<img src="assets/images/icons/wine-glass.png" width="35" alt="">
												</div>
											</td>
											<td>Mini Laptop</td>
											<td>Craig Clayton</td>
											<td>#325687</td>
											<td>$62.21</td>
											<td><a href="javascript:;" class="btn btn-sm btn-light-success btn-block radius-30">Delivered</a>
											</td>
										</tr>
										<tr>
											<td>
												<div class="product-img bg-transparent border">
													<img src="assets/images/icons/headphones.png" width="35" alt="">
												</div>
											</td>
											<td>Honor Mobile 7x</td>
											<td>Mitchell Daniel</td>
											<td>#835478</td>
											<td>$54.68</td>
											<td><a href="javascript:;" class="btn btn-sm btn-light-success btn-block radius-30">Delivered</a>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--end page-content-wrapper-->
		</div>
		<!--end page-wrapper-->
		<!--start overlay-->
		<div class="overlay toggle-btn-mobile"></div>
		<!--end overlay-->
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
		<!--footer -->
		<div class="footer">
			<p class="mb-0">Syndash @2020 | Developed By : <a href="https://themeforest.net/user/codervent" target="_blank">codervent</a>
			</p>
		</div>
		<!-- end footer -->
	</div>
	<!--start switcher-->
	<div class="switcher-body">
		<button class="btn btn-primary btn-switcher shadow-sm" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"><i class="bx bx-cog bx-spin"></i></button>
		<div class="offcanvas offcanvas-end shadow border-start-0 p-2" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling">
		  <div class="offcanvas-header border-bottom">
			<h5 class="offcanvas-title" id="offcanvasScrollingLabel">Theme Customizer</h5>
			<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
		  </div>
		  <div class="offcanvas-body">
			<h6 class="mb-0">Theme Variation</h6>
			<hr>
			<div class="form-check form-check-inline">
			  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="lightmode" value="option1" checked>
			  <label class="form-check-label" for="lightmode">Light</label>
			</div>
			<hr>
			<div class="form-check form-check-inline">
			  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="darkmode" value="option2">
			  <label class="form-check-label" for="darkmode">Dark</label>
			</div>
			<hr>
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="radio" name="inlineRadioOptions" id="darksidebar" value="option3">
				<label class="form-check-label" for="darksidebar">Semi Dark</label>
			  </div>
			  <hr>
			 <div class="form-check form-check-inline">
				<input class="form-check-input" type="radio" name="inlineRadioOptions" id="ColorLessIcons" value="option3">
				<label class="form-check-label" for="ColorLessIcons">Color Less Icons</label>
			  </div>
		  </div>
		</div>
	   </div>


@endsection