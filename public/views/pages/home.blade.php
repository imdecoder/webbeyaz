@extends('layouts.main')

@section('title', 'webbeyaz')

@section('content')

	<!-- Start Welcome Back Area -->
	<div class="welcome-back-area">
		<div class="container-fluid">
			<div class="welcome-back-content">
				<span>Hoşgeldin</span>
				<h2>
					{{ $user_logged ? $user_data->firstname . ' ' . $user_data->lastname : 'Ziyaretçi' }}
				</h2>
				<p>
					Bu katalog üzerinden araç, ürün, vb. sorgulamaları yapabilirsin.
				</p>
				<img src="{{ asset_url('images/welcome.png') }}" alt="Hoşgeldin" class="welcome-img">
			</div>
		</div>
	</div>
	<!-- End Welcome Back Area -->

	<!-- Start Overview Back Area -->
	<div class="overview-content-area">
		<div class="container-fluid">
			<div class="row">
				<a href="{{ site_url('araclar/otomobiller-ticari-araclar') }}" class="col-lg-3 col-sm-6">
					<div class="single-audience d-flex justify-content-between align-items-center">
						<div class="audience-content">
							<h5>
								Otomobiller + Ticari Araçlar
							</h5>
							<h4>
								19,202
							</h4>
						</div>
						<div class="icon">
							<img src="{{ asset_url('images/icon/note-2.svg') }}" alt="Otomobiller + Ticari Araçlar">
						</div>
					</div>
				</a>
				<a href="#" class="col-lg-3 col-sm-6">
					<div class="single-audience d-flex justify-content-between align-items-center">
						<div class="audience-content">
							<h5>
								Kamyon + Otobüs
							</h5>
							<h4>
								19,202
							</h4>
						</div>
						<div class="icon">
							<img src="{{ asset_url('images/icon/note-2.svg') }}" alt="Kamyon + Otobüs">
						</div>
					</div>
				</a>
				<a href="#" class="col-lg-3 col-sm-6">
					<div class="single-audience d-flex justify-content-between align-items-center">
						<div class="audience-content">
							<h5>
								Off Highway Uygulamaları
							</h5>
							<h4>
								19,202
							</h4>
						</div>
						<div class="icon">
							<img src="{{ asset_url('images/icon/note-2.svg') }}" alt="Off Highway Uygulamaları">
						</div>
					</div>
				</a>
				<a href="#" class="col-lg-3 col-sm-6">
					<div class="single-audience d-flex justify-content-between align-items-center">
						<div class="audience-content">
							<h5>
								Motosiklet
							</h5>
							<h4>
								19,202
							</h4>
						</div>
						<div class="icon">
							<img src="{{ asset_url('images/icon/note-2.svg') }}" alt="Motosiklet">
						</div>
					</div>
				</a>
			</div>
		</div>
	</div>
	<!-- End Overview Back Area -->

	<!-- Start Student Progress Area -->
	<div class="student-progress-area">
		<div class="container-fluid">
			<div class="row justify-content-center">
				<div class="col-lg-12">
					<div class="row justify-content-center">
						<div class="col-xxl-6">
							<div class="student-progress-content card-box-style rounded">
								<div class="main-title border-style d-flex justify-content-between align-items-center">
									<h3>Student's Progress</h3>

									<a href="#" class="view-btn">View All</a>
								</div>

								<ul class="student-list-wrap" data-simplebar>
									<li class="d-flex justify-content-between">
										<img src="{{ asset_url('images/students/student-1.jpg') }}" alt="student-1">
										<div class="progress-wrap">
											<div class="student-present d-flex justify-content-between">
												<span class="student-name">Victor James</span>
												<span class="present">65%</span>
											</div>

											<div class="progress">
												<div class="progress-bar" role="progressbar" aria-label="Example with label" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
										</div>
									</li>
									<li class="d-flex justify-content-between">
										<img src="{{ asset_url('images/students/student-2.jpg') }}" alt="student-2">
										<div class="progress-wrap">
											<div class="student-present d-flex justify-content-between">
												<span class="student-name">Amelia Zebin</span>
												<span class="present">28%</span>
											</div>

											<div class="progress student-1">
												<div class="progress-bar" role="progressbar" aria-label="Example with label" style="width: 28%;" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
										</div>
									</li>
									<li class="d-flex justify-content-between">
										<img src="{{ asset_url('images/students/student-3.jpg') }}" alt="student-3">
										<div class="progress-wrap">
											<div class="student-present d-flex justify-content-between">
												<span class="student-name">Jonathon Ronan</span>
												<span class="present">84%</span>
											</div>

											<div class="progress student-2">
												<div class="progress-bar" role="progressbar" aria-label="Example with label" style="width: 48%;" aria-valuenow="84" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
										</div>
									</li>
									<li class="d-flex justify-content-between">
										<img src="{{ asset_url('images/students/student-4.jpg') }}" alt="student-4">
										<div class="progress-wrap">
											<div class="student-present d-flex justify-content-between">
												<span class="student-name">Jane Carter</span>
												<span class="present">50%</span>
											</div>

											<div class="progress student-4">
												<div class="progress-bar" role="progressbar" aria-label="Example with label" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
										</div>
									</li>
									<li class="d-flex justify-content-between">
										<img src="{{ asset_url('images/students/student-5.jpg') }}" alt="student-4">
										<div class="progress-wrap">
											<div class="student-present d-flex justify-content-between">
												<span class="student-name">Angela Jolly</span>
												<span class="present">62%</span>
											</div>

											<div class="progress student-3">
												<div class="progress-bar" role="progressbar" aria-label="Example with label" style="width: 62%;" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-xxl-6">
							<div class="works-stats-content card-box-style rounded">
								<div class="main-title border-style d-flex justify-content-between align-items-center">
									<h3>Works Stats</h3>

									<select class="form-select form-control" aria-label="Default select example">
										<option selected>Today</option>
										<option value="1">16 days</option>
										<option value="2">17 days</option>
										<option value="3">18 days</option>
									</select>
								</div>

								<div class="works-chart text-center">
									<div id="works_chart_2"></div>
								</div>

								<div class="row justify-content-center">
									<div class="col-lg-4 col-sm-4">
										<div class="single-works">
											<span class="title">Lesson Discuss</span>
											<h4>2.5 <span>Hrs</span></h4>
										</div>
									</div>

									<div class="col-lg-4 col-sm-4">
										<div class="single-works border-style-4fcb8d">
											<span class="title">Taking Class</span>
											<h4>6.4 <span>Hrs</span></h4>
										</div>
									</div>

									<div class="col-lg-4 col-sm-4">
										<div class="single-works border-style-fec107">
											<span class="title">Work In Progress</span>
											<h4>1,202 <span>+32.50%</span></h4>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row justify-content-center">
						<div class="col-xxl-8">
							<div class="activity-content card-box-style rounded">
								<div class="main-title mb-0 d-flex justify-content-between align-items-center">
									<h3>Activity Statistics</h3>

									<select class="form-select form-control" aria-label="Default select example">
										<option selected>7 days</option>
										<option value="1">15 days</option>
										<option value="2">10 days</option>
										<option value="3">5 days</option>
									</select>
								</div>

								<div class="sessions-chart">
									<div id="sessions_chart_2"></div>
								</div>

								<ul class="activity-wrap">
									<li class="single-activity">
										<span class="title">Lessons (Avg)</span>
										<h4>35.56%</h4>
									</li>
									<li class="single-activity border-style-4fcb8d">
										<span class="title">Tasks (Avg)</span>
										<h4>64.44%</h4>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-xxl-4">
							<div class="total-student-wrap">
								<div class="row justify-content-center">
									<div class="col-lg-12 col-sm-6 col-md-4">
										<div class="single-total d-flex justify-content-between align-items-center">
											<div>
												<span>TOTAL STUDENTS</span>
												<h2>9,670</h2>
											</div>
											<a href="index.html" class="view-btn">
												View All
											</a>
										</div>
									</div>
									<div class="col-lg-12 col-sm-6 col-md-4">
										<div class="single-total d-flex justify-content-between align-items-center">
											<div>
												<span class="color-1765fd">TOTAL COURSES</span>
												<h2>110</h2>
											</div>
											<a href="index.html" class="view-btn">
												View All
											</a>
										</div>
									</div>
									<div class="col-lg-12 col-sm-6 col-md-4">
										<div class="single-total d-flex justify-content-between align-items-center">
											<div>
												<span class="color-5c31d6">TOTAL LESSONS</span>
												<h2>1,130</h2>
											</div>
											<a href="index.html" class="view-btn">
												View All
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Student Progress Area -->

@endsection
