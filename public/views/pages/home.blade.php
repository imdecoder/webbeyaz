@extends('client.layouts.main')

@section('content')

	<!-- Start Welcome Back Area -->
	<div class="welcome-back-area">
		<div class="container-fluid">
			<div class="welcome-back-content">
				<span>Welcome Back</span>
				<h2>JOHN SMILGA</h2>
				<p>Your students completed 80% of the tasks.</p>

				<img class="welcome-img" src="{{ asset_url('images/welcome.png') }}" alt="welcome image">
			</div>
		</div>
	</div>
	<!-- End Welcome Back Area -->

	<!-- Start Student Progress Area -->
	<div class="student-progress-area">
		<div class="container-fluid">
			<div class="row justify-content-center">
				<div class="col-lg-8">
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

					<div class="media-files-content card-box-style rounded">
						<div class="main-title border-style d-flex justify-content-between align-items-center">
							<h3>Activity Statistics</h3>

							<select class="form-select form-control" aria-label="Default select example">
								<option selected>7 days</option>
								<option value="1">15 days</option>
								<option value="2">10 days</option>
								<option value="3">5 days</option>
							</select>
						</div>

						<div class="table-height" data-simplebar>
							<table class="table align-middle">
								<tbody>
								<tr>
									<td class="user-img">
										<a href="index.html">
											<img src="{{ asset_url('images/students/student-1.jpg') }}" alt="student-1">
										</a>
										<h6>UI/UX Fundamental Design Course</h6>
									</td>

									<td>
										<span>35 Videos + 12 Lectures</span>
									</td>

									<td class="members blue-dot">
										<span>Only View</span>
									</td>

									<td>
										<span>60 Members</span>
									</td>

									<td class="members">
										<span>74.2 MB</span>
									</td>

									<td>
										<button>
											<img src="{{ asset_url('images/icon/download.svg') }}" alt="download">
										</button>
									</td>
								</tr>

								<tr>
									<td class="user-img">
										<a href="index.html">
											<img src="{{ asset_url('images/students/student-2.jpg') }}" alt="student-2">
										</a>
										<h6>Mobile App Development</h6>
									</td>

									<td>
										<span>35 Videos + 12 Lectures</span>
									</td>

									<td class="members green-dot">
										<span>Edit Available</span>
									</td>

									<td>
										<span>56 Members</span>
									</td>

									<td class="members">
										<span>74.2 MB</span>
									</td>

									<td>
										<button>
											<img src="{{ asset_url('images/icon/download.svg') }}" alt="download">
										</button>
									</td>
								</tr>

								<tr>
									<td class="user-img">
										<a href="index.html">
											<img src="{{ asset_url('images/students/student-3.jpg') }}" alt="student-3">
										</a>
										<h6>Video Editing Fundamental</h6>
									</td>

									<td>
										<span>35 Videos + 12 Lectures</span>
									</td>

									<td class="members blue-dot">
										<span>Only View</span>
									</td>

									<td>
										<span>60 Members</span>
									</td>

									<td class="members">
										<span>74.2 MB</span>
									</td>

									<td>
										<button>
											<img src="{{ asset_url('images/icon/download.svg') }}" alt="download">
										</button>
									</td>
								</tr>

								<tr>
									<td class="user-img">
										<a href="index.html">
											<img src="{{ asset_url('images/students/student-4.jpg') }}" alt="student-4">
										</a>
										<h6>Use Research Journey</h6>
									</td>

									<td>
										<span>35 Videos + 12 Lectures</span>
									</td>

									<td class="members green-dot">
										<span>Edit Available</span>
									</td>

									<td>
										<span>56 Members</span>
									</td>

									<td class="members">
										<span>74.2 MB</span>
									</td>

									<td>
										<button>
											<img src="{{ asset_url('images/icon/download.svg') }}" alt="download">
										</button>
									</td>
								</tr>

								<tr class="user-img">
									<td>
										<a href="index.html">
											<img src="{{ asset_url('images/students/student-5.jpg') }}" alt="student-5">
										</a>
										<h6>UI/UX Advance Design Course</h6>
									</td>

									<td>
										<span>35 Videos + 12 Lectures</span>
									</td>

									<td class="members blue-dot">
										<span>Only View</span>
									</td>

									<td>
										<span>60 Members</span>
									</td>

									<td class="members">
										<span>74.2 MB</span>
									</td>

									<td>
										<button>
											<img src="{{ asset_url('images/icon/download.svg') }}" alt="download">
										</button>
									</td>
								</tr>

								<tr class="user-img">
									<td>
										<a href="index.html">
											<img src="{{ asset_url('images/students/student-6.jpg') }}" alt="student-6">
										</a>
										<h6>Use Research Journey</h6>
									</td>

									<td>
										<span>35 Videos + 12 Lectures</span>
									</td>

									<td class="members green-dot">
										<span>Edit Available</span>
									</td>

									<td>
										<span>56 Members</span>
									</td>

									<td class="members">
										<span>74.2 MB</span>
									</td>

									<td>
										<button>
											<img src="{{ asset_url('images/icon/download.svg') }}" alt="download">
										</button>
									</td>
								</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>

				<div class="col-lg-4">
					<div class="upcoming-group-lessons-content card-box-style rounded">
						<div class="main-title border-style d-flex justify-content-between align-items-center">
							<h3>Upcoming Group Lessons</h3>

							<a href="#" class="view-btn">
								View All
							</a>
						</div>

						<div class="row justify-content-center">
							<div class="col-lg-12 col-sm-6">
								<div class="single-group d-flex justify-content-between align-items-center">
									<div>
										<h3>UI/UX Design Course</h3>
										<span class="date">11:00 AM - 01:30 PM</span>
										<ul class="group-img">
											<li>
												<a href="#">
													<img src="{{ asset_url('images/group/group-1.png') }}" alt="group-1">
												</a>
											</li>
											<li>
												<a href="#">
													<img src="{{ asset_url('images/group/group-2.png') }}" alt="group-2">
												</a>
											</li>
											<li>
												<a href="#">
													<img src="{{ asset_url('images/group/group-3.png') }}" alt="group-3">
												</a>
											</li>
											<li>
												<a href="#">
													<img src="{{ asset_url('images/group/group-4.png') }}" alt="group-4">
												</a>
											</li>
											<li>
												<a href="#" class="total-man">
													<img src="{{ asset_url('images/group/group-5.png') }}" alt="group-5">
													<span>32+</span>
												</a>
											</li>
										</ul>
									</div>

									<ul class="add-member-wrap">
										<li>
											<div class="dropdown">
												<button class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
													<img src="{{ asset_url('images/icon/dots.svg') }}" alt="dots">
												</button>

												<div class="dropdown-menu">
													<a class="dropdown-item d-flex align-items-center" href="#">
														<i class='bx bx-log-in-circle' ></i>
														Leave Group
													</a>
													<a class="dropdown-item d-flex align-items-center" href="#">
														<i class='bx bx-trash'></i> Delete Group
													</a>
													<a class="dropdown-item d-flex align-items-center" href="#">
														<i class='bx bx-block'></i> Block Group
													</a>
												</div>
											</div>
										</li>
										<li>
											<button class="add-member-btn">
												Add Member
											</button>
										</li>
									</ul>
								</div>
							</div>

							<div class="col-lg-12 col-sm-6">
								<div class="single-group d-flex justify-content-between align-items-center">
									<div>
										<h3>Fundamental UX Course</h3>
										<span class="date">01:30 PM - 02:30 PM</span>
										<ul class="group-img">
											<li>
												<a href="#">
													<img src="{{ asset_url('images/group/group-3.png') }}" alt="group-3">
												</a>
											</li>
											<li>
												<a href="#">
													<img src="{{ asset_url('images/group/group-4.png') }}" alt="group-4">
												</a>
											</li>
											<li>
												<a href="#" class="total-man">
													<img src="{{ asset_url('images/group/group-5.png') }}" alt="group-5">
													<span>32+</span>
												</a>
											</li>
										</ul>
									</div>

									<ul class="add-member-wrap">
										<li>
											<div class="dropdown">
												<button class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
													<img src="{{ asset_url('images/icon/dots.svg') }}" alt="dots">
												</button>

												<div class="dropdown-menu">
													<a class="dropdown-item d-flex align-items-center" href="#">
														<i class='bx bx-log-in-circle' ></i>
														Leave Group
													</a>
													<a class="dropdown-item d-flex align-items-center" href="#">
														<i class='bx bx-trash'></i> Delete Group
													</a>
													<a class="dropdown-item d-flex align-items-center" href="#">
														<i class='bx bx-block'></i> Block Group
													</a>
												</div>
											</div>
										</li>
										<li>
											<button class="add-member-btn">
												Add Member
											</button>
										</li>
									</ul>
								</div>
							</div>

							<div class="col-lg-12 col-sm-6">
								<div class="single-group d-flex justify-content-between align-items-center">
									<div>
										<h3>UI Motion Fundamental</h3>
										<span class="date">03:30 PM - 05:30 PM</span>
										<ul class="group-img">
											<li>
												<a href="#">
													<img src="{{ asset_url('images/group/group-4.png') }}" alt="group-4">
												</a>
											</li>
											<li>
												<a href="#" class="total-man">
													<img src="{{ asset_url('images/group/group-5.png') }}" alt="group-5">
													<span>32+</span>
												</a>
											</li>
										</ul>
									</div>

									<ul class="add-member-wrap">
										<li>
											<div class="dropdown">
												<button class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
													<img src="{{ asset_url('images/icon/dots.svg') }}" alt="dots">
												</button>

												<div class="dropdown-menu">
													<a class="dropdown-item d-flex align-items-center" href="#">
														<i class='bx bx-log-in-circle' ></i>
														Leave Group
													</a>
													<a class="dropdown-item d-flex align-items-center" href="#">
														<i class='bx bx-trash'></i> Delete Group
													</a>
													<a class="dropdown-item d-flex align-items-center" href="#">
														<i class='bx bx-block'></i> Block Group
													</a>
												</div>
											</div>
										</li>
										<li>
											<button class="add-member-btn">
												Add Member
											</button>
										</li>
									</ul>
								</div>
							</div>

							<div class="col-lg-12 col-sm-6">
								<div class="single-group d-flex justify-content-between align-items-center">
									<div>
										<h3>UI/UX Design Course</h3>
										<span class="date">11:00 AM - 01:30 PM</span>
										<ul class="group-img">
											<li>
												<a href="#">
													<img src="{{ asset_url('images/group/group-1.png') }}" alt="group-1">
												</a>
											</li>
											<li>
												<a href="#">
													<img src="{{ asset_url('images/group/group-2.png') }}" alt="group-2">
												</a>
											</li>
											<li>
												<a href="#">
													<img src="{{ asset_url('images/group/group-3.png') }}" alt="group-3">
												</a>
											</li>
											<li>
												<a href="#">
													<img src="{{ asset_url('images/group/group-4.png') }}" alt="group-4">
												</a>
											</li>
											<li>
												<a href="#" class="total-man">
													<img src="{{ asset_url('images/group/group-5.png') }}" alt="group-5">
													<span>32+</span>
												</a>
											</li>
										</ul>
									</div>

									<ul class="add-member-wrap">
										<li>
											<div class="dropdown">
												<button class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
													<img src="{{ asset_url('images/icon/dots.svg') }}" alt="dots">
												</button>

												<div class="dropdown-menu">
													<a class="dropdown-item d-flex align-items-center" href="#">
														<i class='bx bx-log-in-circle' ></i>
														Leave Group
													</a>
													<a class="dropdown-item d-flex align-items-center" href="#">
														<i class='bx bx-trash'></i> Delete Group
													</a>
													<a class="dropdown-item d-flex align-items-center" href="#">
														<i class='bx bx-block'></i> Block Group
													</a>
												</div>
											</div>
										</li>
										<li>
											<button class="add-member-btn">
												Add Member
											</button>
										</li>
									</ul>
								</div>
							</div>

							<div class="col-lg-12 col-sm-6">
								<div class="single-group d-flex justify-content-between align-items-center">
									<div>
										<h3>UI/UX Design Course</h3>
										<span class="date">11:00 AM - 01:30 PM</span>
										<ul class="group-img">
											<li>
												<a href="#">
													<img src="{{ asset_url('images/group/group-1.png') }}" alt="group-1">
												</a>
											</li>
											<li>
												<a href="#">
													<img src="{{ asset_url('images/group/group-2.png') }}" alt="group-2">
												</a>
											</li>
											<li>
												<a href="#">
													<img src="{{ asset_url('images/group/group-3.png') }}" alt="group-3">
												</a>
											</li>
											<li>
												<a href="#">
													<img src="{{ asset_url('images/group/group-4.png') }}" alt="group-4">
												</a>
											</li>
											<li>
												<a href="#" class="total-man">
													<img src="{{ asset_url('images/group/group-5.png') }}" alt="group-5">
													<span>32+</span>
												</a>
											</li>
										</ul>
									</div>

									<ul class="add-member-wrap">
										<li>
											<div class="dropdown">
												<button class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
													<img src="{{ asset_url('images/icon/dots.svg') }}" alt="dots">
												</button>

												<div class="dropdown-menu">
													<a class="dropdown-item d-flex align-items-center" href="#">
														<i class='bx bx-log-in-circle' ></i>
														Leave Group
													</a>
													<a class="dropdown-item d-flex align-items-center" href="#">
														<i class='bx bx-trash'></i> Delete Group
													</a>
													<a class="dropdown-item d-flex align-items-center" href="#">
														<i class='bx bx-block'></i> Block Group
													</a>
												</div>
											</div>
										</li>
										<li>
											<button class="add-member-btn">
												Add Member
											</button>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="calendar-wrap style-three">
							<div id="calendar"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Student Progress Area -->

@endsection
