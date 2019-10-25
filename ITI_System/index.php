<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Limitless - Responsive Web Application Kit by Eugene Kopyov</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="assets/css/icons/icomoon/styles.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/bootstrap_limitless.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/layout.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/components.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/colors.min.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script src="assets/js/main/jquery.min.js"></script>
	<script src="assets/js/main/bootstrap.bundle.min.js"></script>
	<script src="assets/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script src="assets/js/plugins/visualization/d3/d3.min.js"></script>
	<script src="assets/js/plugins/visualization/d3/d3_tooltip.js"></script>
	<script src="assets/js/plugins/forms/styling/switchery.min.js"></script>
	<script src="assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
	<script src="assets/js/plugins/ui/moment/moment.min.js"></script>
	<script src="assets/js/plugins/pickers/daterangepicker.js"></script>
	<script src="assets/js/demo_pages/charts/echarts/columns_waterfalls.js"></script>
	<script src="assets/js/plugins/visualization/echarts/echarts.min.js"></script>
	<script src="assets/js/demo_pages/charts/echarts/lines.js"></script>

	<script src="assets/js/plugins/uploaders/dropzone.min.js"></script>
	<script src="assets/js/plugins/forms/styling/uniform.min.js"></script>

	<script src="assets/js/app.js"></script>
	<script src="assets/js/demo_pages/dashboard.js"></script>
	<script src="assets/js/demo_pages/widgets_stats.js"></script>
	<script src="assets/js/demo_pages/widgets_content.js"></script>
	<!-- /theme JS files -->

</head>

<body>

	<!-- Main navbar -->
	<div class="navbar navbar-expand-md navbar-dark">
		<div class="navbar-brand">
			<a href="index.php" class="d-inline-block">
				<img src="assets/images/logo_light.png" alt="">
			</a>
		</div>

		<div class="d-md-none">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
				<i class="icon-tree5"></i>
			</button>
			<button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
				<i class="icon-paragraph-justify3"></i>
			</button>
		</div>

		<div class="collapse navbar-collapse" id="navbar-mobile">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a href="#" class="navbar-nav-link sidebar-control sidebar-main-toggle d-none d-md-block">
						<i class="icon-paragraph-justify3"></i>
					</a>
				</li>

				<li class="nav-item dropdown">
					<a href="#" class="navbar-nav-link dropdown-toggle caret-0" data-toggle="dropdown">
						<i class="icon-git-compare"></i>
						<span class="d-md-none ml-2">Git updates</span>
						<span class="badge badge-pill bg-warning-400 ml-auto ml-md-0">9</span>
					</a>

					<div class="dropdown-menu dropdown-content wmin-md-350">
						<div class="dropdown-content-header">
							<span class="font-weight-semibold">Git updates</span>
							<a href="#" class="text-default"><i class="icon-sync"></i></a>
						</div>

						<div class="dropdown-content-body dropdown-scrollable">
							<ul class="media-list">
								<li class="media">
									<div class="mr-3">
										<a href="#" class="btn bg-transparent border-primary text-primary rounded-round border-2 btn-icon"><i class="icon-git-pull-request"></i></a>
									</div>

									<div class="media-body">
										Drop the IE <a href="#">specific hacks</a> for temporal inputs
										<div class="text-muted font-size-sm">4 minutes ago</div>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<a href="#" class="btn bg-transparent border-warning text-warning rounded-round border-2 btn-icon"><i class="icon-git-commit"></i></a>
									</div>
									
									<div class="media-body">
										Add full font overrides for popovers and tooltips
										<div class="text-muted font-size-sm">36 minutes ago</div>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<a href="#" class="btn bg-transparent border-info text-info rounded-round border-2 btn-icon"><i class="icon-git-branch"></i></a>
									</div>
									
									<div class="media-body">
										<a href="#">Chris Arney</a> created a new <span class="font-weight-semibold">Design</span> branch
										<div class="text-muted font-size-sm">2 hours ago</div>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<a href="#" class="btn bg-transparent border-success text-success rounded-round border-2 btn-icon"><i class="icon-git-merge"></i></a>
									</div>
									
									<div class="media-body">
										<a href="#">Eugene Kopyov</a> merged <span class="font-weight-semibold">Master</span> and <span class="font-weight-semibold">Dev</span> branches
										<div class="text-muted font-size-sm">Dec 18, 18:36</div>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<a href="#" class="btn bg-transparent border-primary text-primary rounded-round border-2 btn-icon"><i class="icon-git-pull-request"></i></a>
									</div>
									
									<div class="media-body">
										Have Carousel ignore keyboard events
										<div class="text-muted font-size-sm">Dec 12, 05:46</div>
									</div>
								</li>
							</ul>
						</div>

						<div class="dropdown-content-footer bg-light">
							<a href="#" class="text-grey mr-auto">All updates</a>
							<div>
								<a href="#" class="text-grey" data-popup="tooltip" title="Mark all as read"><i class="icon-radio-unchecked"></i></a>
								<a href="#" class="text-grey ml-2" data-popup="tooltip" title="Bug tracker"><i class="icon-bug2"></i></a>
							</div>
						</div>
					</div>
				</li>
			</ul>

			<span class="badge bg-success ml-md-3 mr-md-auto">Online</span>

			<ul class="navbar-nav">
				<li class="nav-item dropdown">
					<a href="#" class="navbar-nav-link dropdown-toggle caret-0" data-toggle="dropdown">
						<i class="icon-people"></i>
						<span class="d-md-none ml-2">Users</span>
					</a>
					
					<div class="dropdown-menu dropdown-menu-right dropdown-content wmin-md-300">
						<div class="dropdown-content-header">
							<span class="font-weight-semibold">Users online</span>
							<a href="#" class="text-default"><i class="icon-search4 font-size-base"></i></a>
						</div>

						<div class="dropdown-content-body dropdown-scrollable">
							<ul class="media-list">
								<li class="media">
									<div class="mr-3">
										<img src="assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<a href="#" class="media-title font-weight-semibold">Jordana Ansley</a>
										<span class="d-block text-muted font-size-sm">Lead web developer</span>
									</div>
									<div class="ml-3 align-self-center"><span class="badge badge-mark border-success"></span></div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<a href="#" class="media-title font-weight-semibold">Will Brason</a>
										<span class="d-block text-muted font-size-sm">Marketing manager</span>
									</div>
									<div class="ml-3 align-self-center"><span class="badge badge-mark border-danger"></span></div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<a href="#" class="media-title font-weight-semibold">Hanna Walden</a>
										<span class="d-block text-muted font-size-sm">Project manager</span>
									</div>
									<div class="ml-3 align-self-center"><span class="badge badge-mark border-success"></span></div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<a href="#" class="media-title font-weight-semibold">Dori Laperriere</a>
										<span class="d-block text-muted font-size-sm">Business developer</span>
									</div>
									<div class="ml-3 align-self-center"><span class="badge badge-mark border-warning-300"></span></div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<a href="#" class="media-title font-weight-semibold">Vanessa Aurelius</a>
										<span class="d-block text-muted font-size-sm">UX expert</span>
									</div>
									<div class="ml-3 align-self-center"><span class="badge badge-mark border-grey-400"></span></div>
								</li>
							</ul>
						</div>

						<div class="dropdown-content-footer bg-light">
							<a href="#" class="text-grey mr-auto">All users</a>
							<a href="#" class="text-grey"><i class="icon-gear"></i></a>
						</div>
					</div>
				</li>

				<li class="nav-item dropdown">
					<a href="#" class="navbar-nav-link dropdown-toggle caret-0" data-toggle="dropdown">
						<i class="icon-bubbles4"></i>
						<span class="d-md-none ml-2">Messages</span>
						<span class="badge badge-pill bg-warning-400 ml-auto ml-md-0">2</span>
					</a>
					
					<div class="dropdown-menu dropdown-menu-right dropdown-content wmin-md-350">
						<div class="dropdown-content-header">
							<span class="font-weight-semibold">Messages</span>
							<a href="#" class="text-default"><i class="icon-compose"></i></a>
						</div>

						<div class="dropdown-content-body dropdown-scrollable">
							<ul class="media-list">
								<li class="media">
									<div class="mr-3 position-relative">
										<img src="assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>

									<div class="media-body">
										<div class="media-title">
											<a href="#">
												<span class="font-weight-semibold">James Alexander</span>
												<span class="text-muted float-right font-size-sm">04:58</span>
											</a>
										</div>

										<span class="text-muted">who knows, maybe that would be the best thing for me...</span>
									</div>
								</li>

								<li class="media">
									<div class="mr-3 position-relative">
										<img src="assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>

									<div class="media-body">
										<div class="media-title">
											<a href="#">
												<span class="font-weight-semibold">Margo Baker</span>
												<span class="text-muted float-right font-size-sm">12:16</span>
											</a>
										</div>

										<span class="text-muted">That was something he was unable to do because...</span>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<div class="media-title">
											<a href="#">
												<span class="font-weight-semibold">Jeremy Victorino</span>
												<span class="text-muted float-right font-size-sm">22:48</span>
											</a>
										</div>

										<span class="text-muted">But that would be extremely strained and suspicious...</span>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<div class="media-title">
											<a href="#">
												<span class="font-weight-semibold">Beatrix Diaz</span>
												<span class="text-muted float-right font-size-sm">Tue</span>
											</a>
										</div>

										<span class="text-muted">What a strenuous career it is that I've chosen...</span>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<div class="media-title">
											<a href="#">
												<span class="font-weight-semibold">Richard Vango</span>
												<span class="text-muted float-right font-size-sm">Mon</span>
											</a>
										</div>
										
										<span class="text-muted">Other travelling salesmen live a life of luxury...</span>
									</div>
								</li>
							</ul>
						</div>

						<div class="dropdown-content-footer justify-content-center p-0">
							<a href="#" class="bg-light text-grey w-100 py-2" data-popup="tooltip" title="Load more"><i class="icon-menu7 d-block top-0"></i></a>
						</div>
					</div>
				</li>

				<li class="nav-item dropdown dropdown-user">
					<a href="#" class="navbar-nav-link d-flex align-items-center dropdown-toggle" data-toggle="dropdown">
						<img src="assets/images/placeholders/placeholder.jpg" class="rounded-circle mr-2" height="34" alt="">
						<span>Victoria</span>
					</a>

					<div class="dropdown-menu dropdown-menu-right">
						<a href="#" class="dropdown-item"><i class="icon-user-plus"></i> My profile</a>
						<a href="#" class="dropdown-item"><i class="icon-coins"></i> My balance</a>
						<a href="#" class="dropdown-item"><i class="icon-comment-discussion"></i> Messages <span class="badge badge-pill bg-blue ml-auto">58</span></a>
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item"><i class="icon-cog5"></i> Account settings</a>
						<a href="#" class="dropdown-item"><i class="icon-switch2"></i> Logout</a>
					</div>
				</li>
			</ul>
		</div>
	</div>
	<!-- /main navbar -->


	<!-- Page content -->
	<div class="page-content">

		<!-- Main sidebar -->
		<div class="sidebar sidebar-dark sidebar-main sidebar-expand-md">

			<!-- Sidebar mobile toggler -->
			<div class="sidebar-mobile-toggler text-center">
				<a href="#" class="sidebar-mobile-main-toggle">
					<i class="icon-arrow-left8"></i>
				</a>
				Navigation
				<a href="#" class="sidebar-mobile-expand">
					<i class="icon-screen-full"></i>
					<i class="icon-screen-normal"></i>
				</a>
			</div>
			<!-- /sidebar mobile toggler -->


			<!-- Sidebar content -->
			<div class="sidebar-content">

				<!-- User menu -->
				<div class="sidebar-user">
					<div class="card-body">
						<div class="media">
							<div class="mr-3">
								<a href="#"><img src="assets/images/placeholders/placeholder.jpg" width="38" height="38" class="rounded-circle" alt=""></a>
							</div>

							<div class="media-body">
								<div class="media-title font-weight-semibold">Victoria Baker</div>
								<div class="font-size-xs opacity-50">
									<i class="icon-pin font-size-sm"></i> &nbsp;Santa Ana, CA
								</div>
							</div>

							<div class="ml-3 align-self-center">
								<a href="#" class="text-white"><i class="icon-cog3"></i></a>
							</div>
						</div>
					</div>
				</div>
				<!-- /user menu -->


				<!-- Main navigation -->
				<div class="card card-sidebar-mobile">
					<ul class="nav nav-sidebar" data-nav-type="accordion">

						<!-- Main -->
						<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Main</div> <i class="icon-menu" title="Main"></i></li>
						<li class="nav-item">
							<a href="index.php" class="nav-link active">
								<i class="icon-home4"></i>
								<span>
									Dashboard
								</span>
							</a>
						</li>
						
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-user-tie"></i> <span>Maestros</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Pickers">
								
								<li class="nav-item"><a href="EditarMaestros.php" class="nav-link">Editar Maestros</a></li>
								
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-users4"></i> <span>Alumnos</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Form layouts">
								
								<!--<li class="nav-item"><a href="form_layout_vertical_styled.php" class="nav-link disabled">Custom styles <span class="badge bg-transparent align-self-center ml-auto">Coming soon</span></a></li>-->
								<li class="nav-item-divider"></li>
								<li class="nav-item"><a href="AgregarAlumnos.php" class="nav-link">Agregar Alumnos</a></li>
								<!--<li class="nav-item"><a href="form_layout_horizontal_styled.php" class="nav-link disabled">Custom styles <span class="badge bg-transparent align-self-center ml-auto">Coming soon</span></a></li>-->
								<li class="nav-item"><a href="EditarAlumnos.php" class="nav-link">Editar Alumnos</a></li>
							</ul>
						</li>

						<li class="nav-item nav-item-submenu"> 
							<a href="#" class="nav-link"><i class="icon-bus"></i> <span>Transporte</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Text editors">
								<li class="nav-item"><a href="Transporte.php" class="nav-link">Datos del Transporte</a></li>
								
							</ul>
						</li>




						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-grid"></i> <span>Módulos</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Basic components">
								<li class="nav-item"><a href="ListadoDeMaterias.php" class="nav-link">Materias</a></li>
								<li class="nav-item"><a href="Grupos.php" class="nav-link">Grupos</a></li>
								
							</ul>
						</li>

						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-puzzle2"></i> <span>Tutorías</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Content styling">
								<li class="nav-item"><a href="AgregarTutorias.php" class="nav-link">Agregar una tutoría</a></li>
								<li class="nav-item"><a href="EditarTutoria.php" class="nav-link">Editar una tutoría</a></li>
							</ul>
						</li>


						
						

					</ul>
				</div>
				<!-- /main navigation -->

			</div>
			<!-- /sidebar content -->
			
		</div>
		<!-- /main sidebar -->


		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Page header -->
			<div class="page-header page-header-light">
				<div class="page-header-content header-elements-md-inline">
					<div class="page-title d-flex">
						<h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Home</span> - Dashboard</h4>
						<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
					</div>

					<div class="header-elements d-none">
						<div class="d-flex justify-content-center">
							<a href="#" class="btn btn-link btn-float text-default"><i class="icon-bars-alt text-primary"></i><span>Statistics</span></a>
							<a href="#" class="btn btn-link btn-float text-default"><i class="icon-calculator text-primary"></i> <span>Invoices</span></a>
							<a href="#" class="btn btn-link btn-float text-default"><i class="icon-calendar5 text-primary"></i> <span>Schedule</span></a>
						</div>
					</div>
				</div>

				<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
					<div class="d-flex">
						<div class="breadcrumb">
							<a href="index.php" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
							<span class="breadcrumb-item active">Dashboard</span>
						</div>

						<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
					</div>

					<div class="header-elements d-none">
						<div class="breadcrumb justify-content-center">
							<a href="#" class="breadcrumb-elements-item">
								<i class="icon-comment-discussion mr-2"></i>
								Support
							</a>

							<div class="breadcrumb-elements-item dropdown p-0">
								<a href="#" class="breadcrumb-elements-item dropdown-toggle" data-toggle="dropdown">
									<i class="icon-gear mr-2"></i>
									Settings
								</a>

								<div class="dropdown-menu dropdown-menu-right">
									<a href="#" class="dropdown-item"><i class="icon-user-lock"></i> Account security</a>
									<a href="#" class="dropdown-item"><i class="icon-statistics"></i> Analytics</a>
									<a href="#" class="dropdown-item"><i class="icon-accessibility"></i> Accessibility</a>
									<div class="dropdown-divider"></div>
									<a href="#" class="dropdown-item"><i class="icon-gear"></i> All settings</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /page header -->


			<!-- Content area -->
			<div class="content">

				<!-- Main charts -->
				<div class="row">
					<div class="col-xl-7">

						

						<!-- Basic columns -->
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Visitantes</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<div class="chart-container">
									<div class="chart has-fixed-height" id="columns_basic"></div>
								</div>
							</div>
						</div>
						<!-- /basic columns -->

						

						<!-- Basic line -->
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Estadísticas de la semana</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<div class="chart-container">
									<div class="chart has-fixed-height" id="line_basic"></div>
								</div>
							</div>
						</div>
						<!-- /basic line -->
					</div>

					<div class="col-xl-5">
						
						
						<!-- Seamless button group -->
						<div class="mb-3">
							<div class="row row-tile no-gutters">
								<div class="col-6">
									<button type="button" class="btn btn-light btn-block btn-float m-0">
										<i class="icon-github4 icon-2x"></i>
										<span>Github</span>
									</button>

									<button type="button" class="btn btn-light btn-block btn-float m-0">
										<i class="icon-dropbox text-blue-400 icon-2x"></i>
										<span>Dropbox</span>
									</button>
								</div>
									
								<div class="col-6">
									<button type="button" class="btn btn-light btn-block btn-float m-0">
										<i class="icon-dribbble3 text-pink-400 icon-2x"></i>
										<span>Dribbble</span>
									</button>

									<button type="button" class="btn btn-light btn-block btn-float m-0">
										<i class="icon-google-drive text-success-400 icon-2x"></i>
										<span>Google Drive</span>
									</button>
								</div>
							</div>
						</div>
						<!-- /seamless button group -->
						

						<!-- Widget with centered text and colored icon -->
						<div class="card">
							<div class="card-body text-center">
								<i class="icon-html5 icon-3x text-warning mt-1 mb-3"></i>
								<h6 class="font-weight-semibold">Knowledge Base</h6>
								<p class="mb-3">Inanimately alongside candidly much and jeez conductively hid submissively hatchet</p>
								<a href="#">Read more &rarr;</a>
							</div>
						</div>
						<!-- /widget with centered text and colored icon -->

						<!-- Widget with rounded icon -->
						<div class="card">
							<div class="card-body text-center">
							<i class="icon-book icon-2x text-success-400 border-success-400 border-3 rounded-round p-3 mb-3 mt-1"></i>
								<h5 class="card-title">Knowledge Base</h5>
								<p class="mb-3">Ouch found swore much dear conductively hid submissively hatchet vexed far</p>
								<a href="#" class="btn bg-success-400">Browse articles</a>
							</div>
						</div>
						<!-- /widget with rounded icon -->

						<!-- Testimonials -->
						<div class="card bg-pink-400 text-white text-center p-3" style="background-image: url(../../../../global_assets/images/backgrounds/panel_bg.png); background-size: contain;">
							<div>
								<a href="#" class="btn btn-lg btn-icon mb-3 mt-1 btn-outline text-white border-white bg-white rounded-round border-2">
									<i class="icon-quotes-right"></i>
								</a>
							</div>

							<blockquote class="blockquote mb-0">
								<p>"assets is to ye belonging enjoyment preferred. Astonished and acceptance men two discretion"</p>
								<footer class="blockquote-footer text-white">
									<span>
										Someone famous in <cite title="Source Title">Source Title</cite>
									</span>
								</footer>
							</blockquote>
						</div>
						<!-- /testimonials -->
					</div>
					
				</div>
				<!-- /main charts -->


				<!-- Dashboard content -->
				<div class="row">
					<div class="col-xl-8">

						<!-- Marketing campaigns -->
						<div class="card">
							<div class="card-header header-elements-sm-inline">
								<h6 class="card-title">Rendimiento Escolar</h6>
								<div class="header-elements">
									<span class="badge bg-success badge-pill">28 active</span>
									<div class="list-icons ml-3">
				                		<div class="list-icons-item dropdown">
				                			<a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>
											<div class="dropdown-menu">
												<a href="#" class="dropdown-item"><i class="icon-sync"></i> Datos</a>
												<a href="#" class="dropdown-item"><i class="icon-list-unordered"></i>Detalles</a>
												<a href="#" class="dropdown-item"><i class="icon-pie5"></i> Estadísticas</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-cross3"></i>Limpiar Lista</a>
											</div>
				                		</div>
				                	</div>
			                	</div>
							</div>

							

							<div class="card-body d-sm-flex align-items-sm-center justify-content-sm-between flex-sm-wrap">
								<div class="d-flex align-items-center mb-3 mb-sm-0">
									<div id="campaigns-donut"></div>
									<div class="ml-3">
										<h5 class="font-weight-semibold mb-0">38,289 <span class="text-success font-size-sm font-weight-normal"><i class="icon-arrow-up12"></i> (+16.2%)</span></h5>
										<span class="badge badge-mark border-success mr-1"></span> <span class="text-muted">May 12, 12:30 am</span>
									</div>
								</div>

								<div class="d-flex align-items-center mb-3 mb-sm-0">
									<div id="campaign-status-pie"></div>
									<div class="ml-3">
										<h5 class="font-weight-semibold mb-0">2,458 <span class="text-danger font-size-sm font-weight-normal"><i class="icon-arrow-down12"></i> (-4.9%)</span></h5>
										<span class="badge badge-mark border-danger mr-1"></span> <span class="text-muted">Oct 4, 4:00 am</span>
									</div>
								</div>

								<div>
									<a href="#" class="btn bg-indigo-300"><i class="icon-statistics mr-2"></i> Ver reporte</a>
								</div>
							</div>

							<div class="table-responsive">
								<table class="table text-nowrap">
									<thead>
										<tr>
											<th>Grupo</th>
											<th>Materia</th>
											<th>Progreso</th>
											<th>Alumnos</th>
											<th>Status</th>
											<th class="text-center" style="width: 20px;"><i class="icon-arrow-down12"></i></th>
										</tr>
									</thead>
									<tbody>
										<tr class="table-active table-border-double">
											<td colspan="5">Hoy</td>
											<td class="text-right">
												<span class="progress-meter" id="today-progress" data-progress="30"></span>
											</td>
										</tr>
										<tr>
											<td>
												<div class="d-flex align-items-center">
													<div class="mr-3">
														<a href="#">
															<img src="assets/images/brands/facebook.png" class="rounded-circle" width="32" height="32" alt="">
														</a>
													</div>
													<div>
														<a href="#" class="text-default font-weight-semibold">Grupo 1- ITI</a>
														<div class="text-muted font-size-sm">
															<span class="badge badge-mark border-blue mr-1"></span>
															02:00 - 03:00
														</div>
													</div>
												</div>
											</td>
											<td><span class="text-muted">TIC's</span></td>
											<td><span class="text-success-600"><i class="icon-stats-growth2 mr-2"></i> 2.43%</span></td>
											<td><h6 class="font-weight-semibold mb-0">33</h6></td>
											<td><span class="badge bg-blue">Active</span></td>
											<td class="text-center">
												<div class="list-icons">
													<div class="list-icons-item dropdown">
														<a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu7"></i></a>
														<div class="dropdown-menu dropdown-menu-right">
															<a href="#" class="dropdown-item"><i class="icon-file-stats"></i> View statement</a>
															<a href="#" class="dropdown-item"><i class="icon-file-text2"></i> Edit campaign</a>
															<a href="#" class="dropdown-item"><i class="icon-file-locked"></i> Disable campaign</a>
															<div class="dropdown-divider"></div>
															<a href="#" class="dropdown-item"><i class="icon-gear"></i> Settings</a>
														</div>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="d-flex align-items-center">
													<div class="mr-3">
														<a href="#">
															<img src="assets/images/brands/youtube.png" class="rounded-circle" width="32" height="32" alt="">
														</a>
													</div>
													<div>
														<a href="#" class="text-default font-weight-semibold">Grupo 2- PYMES</a>
														<div class="text-muted font-size-sm">
															<span class="badge badge-mark border-danger mr-1"></span>
															13:00 - 14:00
														</div>
													</div>
												</div>
											</td>
											<td><span class="text-muted">Administración</span></td>
											<td><span class="text-success-600"><i class="icon-stats-growth2 mr-2"></i> 3.12%</span></td>
											<td><h6 class="font-weight-semibold mb-0">30</h6></td>
											<td><span class="badge bg-danger">Bajo</span></td>
											<td class="text-center">
												<div class="list-icons">
													<div class="list-icons-item dropdown">
														<a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu7"></i></a>
														<div class="dropdown-menu dropdown-menu-right">
															<a href="#" class="dropdown-item"><i class="icon-file-stats"></i> View statement</a>
															<a href="#" class="dropdown-item"><i class="icon-file-text2"></i> Edit campaign</a>
															<a href="#" class="dropdown-item"><i class="icon-file-locked"></i> Disable campaign</a>
															<div class="dropdown-divider"></div>
															<a href="#" class="dropdown-item"><i class="icon-gear"></i> Settings</a>
														</div>
													</div>
												</div>
											</td>
										</tr>
										
									</tbody>
								</table>
							</div>
						</div>
						<!-- /marketing campaigns -->


						<!-- Quick stats boxes -->
						<div class="row">
							<div class="col-lg-4">

								<!-- Members online -->
								<div class="card bg-teal-400">
									<div class="card-body">
										<div class="d-flex">
											<h3 class="font-weight-semibold mb-0">3,450</h3>
											<span class="badge bg-teal-800 badge-pill align-self-center ml-auto">+53,6%</span>
					                	</div>
					                	
					                	<div>
											Vistas del año
											<div class="font-size-sm opacity-75">489 avg</div>
										</div>
									</div>

									<div class="container-fluid">
										<div id="members-online"></div>
									</div>
								</div>
								<!-- /members online -->

							</div>

							<div class="col-lg-4">

								<!-- Current server load -->
								<div class="card bg-pink-400">
									<div class="card-body">
										<div class="d-flex">
											<h3 class="font-weight-semibold mb-0">49.4%</h3>
											<div class="list-icons ml-auto">
						                		<div class="list-icons-item dropdown">
						                			<a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown"><i class="icon-cog3"></i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a href="#" class="dropdown-item"><i class="icon-sync"></i> Update data</a>
														<a href="#" class="dropdown-item"><i class="icon-list-unordered"></i> Detailed log</a>
														<a href="#" class="dropdown-item"><i class="icon-pie5"></i> Statistics</a>
														<a href="#" class="dropdown-item"><i class="icon-cross3"></i> Clear list</a>
													</div>
						                		</div>
					                		</div>
					                	</div>
					                	
					                	<div>
											Concurrentes
											<div class="font-size-sm opacity-75">34.6% avg</div>
										</div>
									</div>

									<div id="server-load"></div>
								</div>
								<!-- /current server load -->

							</div>

							<div class="col-lg-4">

								<!-- Today's revenue -->
								<div class="card bg-blue-400">
									<div class="card-body">
										<div class="d-flex">
											<h3 class="font-weight-semibold mb-0">$18,390</h3>
											<div class="list-icons ml-auto">
						                		<a class="list-icons-item" data-action="reload"></a>
						                	</div>
					                	</div>
					                	
					                	<div>
											Hoy
											<div class="font-size-sm opacity-75">$2398 avg</div>
										</div>
									</div>

									<div id="today-revenue"></div>
								</div>
								<!-- /today's revenue -->

							</div>
						</div>
						<!-- /quick stats boxes -->


						


						<!-- Latest posts -->
						<div class="card">
							

							<div class="card-body pb-0">
								<div class="row">
									<div class="col-xl-6">
										<h6 class="card-title">Clima</h6>
										<div id="cont_37f52a4439beb1b2a2086af0a55f0a58"><script type="text/javascript" async src="https://www.meteored.mx/wid_loader/37f52a4439beb1b2a2086af0a55f0a58"></script></div>
									</div>
								</div>
							</div>
						</div>
						<!-- /latest posts -->

					</div>

					<div class="col-xl-4">

						<!-- Progress counters -->
						<div class="row">
							<div class="col-sm-6">

								<!-- Available hours -->
								<div class="card text-center">
									<div class="card-body">

					                	<!-- Progress counter -->
										<div class="svg-center position-relative" id="hours-available-progress"></div>
										<!-- /progress counter -->


										<!-- Bars -->
										<div id="hours-available-bars"></div>
										<!-- /bars -->

									</div>
								</div>
								<!-- /available hours -->

							</div>

							<div class="col-sm-6">

								<!-- Productivity goal -->
								<div class="card text-center">
									<div class="card-body">

										<!-- Progress counter -->
										<div class="svg-center position-relative" id="goal-progress"></div>
										<!-- /progress counter -->

										<!-- Bars -->
										<div id="goal-bars"></div>
										<!-- /bars -->

									</div>
								</div>
								<!-- /productivity goal -->

							</div>
						</div>
						<!-- /progress counters -->


					


						



					</div>
				</div>
				<!-- /dashboard content -->

			</div>
			<!-- /content area -->


			<!-- Footer -->
			<div class="navbar navbar-expand-lg navbar-light">
				<div class="text-center d-lg-none w-100">
					<button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-footer">
						<i class="icon-unfold mr-2"></i>
						Footer
					</button>
				</div>

				<div class="navbar-collapse collapse" id="navbar-footer">
					<span class="navbar-text">
						&copy; 2015 - 2018. <a href="#">Limitless Web App Kit</a> by <a href="http://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a>
					</span>

					<ul class="navbar-nav ml-lg-auto">
						<li class="nav-item"><a href="https://kopyov.ticksy.com/" class="navbar-nav-link" target="_blank"><i class="icon-lifebuoy mr-2"></i> Support</a></li>
						<li class="nav-item"><a href="http://demo.interface.club/limitless/docs/" class="navbar-nav-link" target="_blank"><i class="icon-file-text2 mr-2"></i> Docs</a></li>
						<li class="nav-item"><a href="https://themeforest.net/item/limitless-responsive-web-application-kit/13080328?ref=kopyov" class="navbar-nav-link font-weight-semibold"><span class="text-pink-400"><i class="icon-cart2 mr-2"></i> Purchase</span></a></li>
					</ul>
				</div>
			</div>
			<!-- /footer -->

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->

</body>
</html>
