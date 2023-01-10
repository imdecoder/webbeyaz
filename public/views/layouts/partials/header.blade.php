<!-- Start Header Area -->
<div class="header-area header-style-two">
	<div class="container-fluid">
		<div class="header-content-wrapper">
			<div class="header-content d-flex justify-content-between align-items-center">
				<div class="header-left-content d-flex">
					<div class="responsive-burger-menu d-block d-lg-none">
						<span class="top-bar"></span>
						<span class="middle-bar"></span>
						<span class="bottom-bar"></span>
					</div>
					<div class="main-logo">
						<a href="{{ site_url() }}">
							<img src="{{ asset_url('images/main-logo.svg') }}" alt="WebBeyaz">
						</a>
					</div>
					<form action="{{ site_url('search') }}" method="post" class="search-bar d-flex">
						<img src="{{ asset_url('images/icon/search-normal.svg') }}" alt="Ara">
						<input type="search" name="search" placeholder="Ara" class="form-control" aria-label="Ara">
					</form>
					<div class="option-item for-mobile-devices d-block d-lg-none">
						<i class="search-btn ri-search-line"></i>
						<i class="close-btn ri-close-line"></i>
						<div class="search-overlay search-popup">
							<div class="search-box">
								<form action="{{ site_url('search') }}" method="post" class="search-form">
									<input type="text" name="search" placeholder="Ara" class="search-input">
									<button type="submit" class="search-button">
										<i class="ri-search-line"></i>
									</button>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="header-right-content d-flex align-items-center">
					<div class="header-right-option">
						<a href="#" class="dropdown-item fullscreen-btn" id="fullscreen-button">
							<img src="{{ asset_url('images/icon/maximize.svg') }}" alt="Tam Ekran">
						</a>
					</div>
					<div class="header-right-option dropdown apps-option">
						<button class="dropdown-item dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
							<img src="{{ asset_url('images/icon/app.svg') }}" alt="Uygulamalar">
						</button>
						<div class="dropdown-menu">
							<div class="dropdown-header d-flex justify-content-between align-items-center bg-linear">
								<span class="title d-inline-block">Uygulamalar</span>
								<span class="edit-btn d-inline-block">Düzenle</span>
							</div>
							<div class="dropdown-wrap" data-simplebar>
								<div class="d-flex flex-wrap align-items-center">
									<a href="#" class="dropdown-item">
										<img src="{{ asset_url('images/apps/icon-account.png') }}" alt="Hesabım">
										<span class="d-block mb-0">Hesabım</span>
									</a>
									<a href="#" class="dropdown-item">
										<img src="{{ asset_url('images/apps/icon-google.png') }}" alt="Google">
										<span class="d-block mb-0">Google</span>
									</a>
									<a href="#" class="dropdown-item">
										<img src="{{ asset_url('images/apps/icon-map.png') }}" alt="Haritalar">
										<span class="d-block mb-0">Haritalar</span>
									</a>
									<a href="#" class="dropdown-item">
										<img src="{{ asset_url('images/apps/icon-youtube.png') }}" alt="YouTube">
										<span class="d-block mb-0">YouTube</span>
									</a>
									<a href="#" class="dropdown-item">
										<img src="{{ asset_url('images/apps/icon-playstore.png') }}" alt="Play">
										<span class="d-block mb-0">Play</span>
									</a>
									<a href="#" class="dropdown-item">
										<img src="{{ asset_url('images/apps/icon-gmail.png') }}" alt="Gmail">
										<span class="d-block mb-0">Gmail</span>
									</a>
									<a href="#" class="dropdown-item">
										<img src="{{ asset_url('images/apps/icon-drive.png') }}" alt="Drive">
										<span class="d-block mb-0">Drive</span>
									</a>
									<a href="#" class="dropdown-item">
										<img src="{{ asset_url('images/apps/icon-calendar.png') }}" alt="Takvim">
										<span class="d-block mb-0">Takvim</span>
									</a>
									<a href="#" class="dropdown-item">
										<img src="{{ asset_url('images/apps/icon-bitbucket.png') }}" alt="Bitbucket">
										<span class="d-block mb-0">Bitbucket</span>
									</a>
									<a href="#" class="dropdown-item">
										<img src="{{ asset_url('images/apps/icon-github.png') }}" alt="GitHub">
										<span class="d-block mb-0">Github</span>
									</a>
									<a href="#" class="dropdown-item">
										<img src="{{ asset_url('images/apps/icon-dribbble.png') }}" alt="Dribbble">
										<span class="d-block mb-0">Dribbble</span>
									</a>
									<a href="#" class="dropdown-item">
										<img src="{{ asset_url('images/apps/icon-mail-chimp.png') }}" alt="Mailchimp">
										<span class="d-block mb-0">Mailchimp</span>
									</a>
								</div>
							</div>
							<div class="dropdown-footer">
								<a href="#" class="dropdown-item">
									Tümünü Göster
								</a>
							</div>
						</div>
					</div>
					<div class="header-right-option notification-option messenger-option dropdown">
						<div class="dropdown-item dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<div class="messages-btn">
								<img src="{{ asset_url('images/icon/message.svg') }}" alt="Mesajlar">
								<span class="badge">3</span>
							</div>
						</div>
						<div class="dropdown-menu">
							<div class="dropdown-header d-flex justify-content-between align-items-center bg-linear">
								<span class="title d-inline-block">5 Yeni Mesaj</span>
								<span class="mark-all-btn d-inline-block">Tümünü okundu işaretle</span>
							</div>
							<div class="dropdown-wrap" data-simplebar>
								<a href="#" class="dropdown-item d-flex">
									<div class="icon">
										<img src="{{ asset_url('images/user/user-1.png') }}" alt="User 1">
									</div>
									<div class="content">
										<span class="d-block">Alex Dew</span>
										<p class="m-0">
											Lorem ipsum dolor sit, amet consectetur
										</p>
										<p class="sub-text mb-0">
											2 sec ago
										</p>
									</div>
								</a>
								<a href="#" class="dropdown-item d-flex">
									<div class="icon">
										<img src="{{ asset_url('images/user/user-2.png') }}" alt="User 2">
									</div>
									<div class="content">
										<span class="d-block">Anne Kew</span>
										<p class="m-0">
											Lorem ipsum dolor sit, amet consectetur
										</p>
										<p class="sub-text mb-0">
											5 sec ago
										</p>
									</div>
								</a>
								<a href="#" class="dropdown-item d-flex">
									<div class="icon">
										<img src="{{ asset_url('images/user/user-3.png') }}" alt="User 3">
									</div>
									<div class="content">
										<span class="d-block">Huhon Smith</span>
										<p class="m-0">
											Lorem ipsum dolor sit, amet consectetur
										</p>
										<p class="sub-text mb-0">
											3 min ago
										</p>
									</div>
								</a>
								<a href="#" class="dropdown-item d-flex">
									<div class="icon">
										<img src="{{ asset_url('images/user/user-4.png') }}" alt="User 4">
									</div>
									<div class="content">
										<span class="d-block">Yelax Spin</span>
										<p class="m-0">
											Lorem ipsum dolor sit, amet consectetur
										</p>
										<p class="sub-text mb-0">
											7 min ago
										</p>
									</div>
								</a>
								<a href="#" class="dropdown-item d-flex">
									<div class="icon">
										<img src="{{ asset_url('images/user/user-5.png') }}" alt="User 5">
									</div>
									<div class="content">
										<span class="d-block">Steven</span>
										<p class="m-0">
											Lorem ipsum dolor sit, amet consectetur
										</p>
										<p class="sub-text mb-0">
											1 sec ago
										</p>
									</div>
								</a>
							</div>
							<div class="dropdown-footer">
								<a href="#" class="dropdown-item">
									Tümünü Göster
								</a>
							</div>
						</div>
					</div>
					<div class="header-right-option notification-option dropdown">
						<div class="dropdown-item dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<div class="notification-btn">
								<img src="{{ asset_url('images/icon/notification.svg') }}" alt="Bildirimler">
								<span class="badge">4</span>
							</div>
						</div>
						<div class="dropdown-menu">
							<div class="dropdown-header d-flex justify-content-between align-items-center bg-linear">
								<span class="title d-inline-block">6 Yeni Bildirim</span>
								<span class="mark-all-btn d-inline-block">Tümünü okundu işaretle</span>
							</div>
							<div class="dropdown-wrap" data-simplebar>
								<a href="#" class="dropdown-item d-flex align-items-center">
									<div class="icon">
										<i class="bx bx-message-rounded-dots"></i>
									</div>
									<div class="content">
										<span class="d-block">Just sent a new message!</span>
										<p class="sub-text mb-0">
											2 sec ago
										</p>
									</div>
								</a>
								<a href="#" class="dropdown-item d-flex align-items-center">
									<div class="icon">
										<i class="bx bx-user"></i>
									</div>
									<div class="content">
										<span class="d-block">New customer registered</span>
										<p class="sub-text mb-0">
											5 sec ago
										</p>
									</div>
								</a>
								<a href="#" class="dropdown-item d-flex align-items-center">
									<div class="icon">
										<i class="bx bx-layer"></i>
									</div>
									<div class="content">
										<span class="d-block">Apps are ready for update</span>
										<p class="sub-text mb-0">
											3 min ago
										</p>
									</div>
								</a>
								<a href="#" class="dropdown-item d-flex align-items-center">
									<div class="icon">
										<i class="bx bx-hourglass"></i>
									</div>
									<div class="content">
										<span class="d-block">Your item is shipped</span>
										<p class="sub-text mb-0">
											7 min ago
										</p>
									</div>
								</a>
								<a href="#" class="dropdown-item d-flex align-items-center">
									<div class="icon">
										<i class="bx bx-comment-dots"></i>
									</div>
									<div class="content">
										<span class="d-block">Steven commented on your post</span>
										<p class="sub-text mb-0">
											1 sec ago
										</p>
									</div>
								</a>
							</div>
							<div class="dropdown-footer">
								<a href="#" class="dropdown-item">
									Tümünü Göster
								</a>
							</div>
						</div>
					</div>
					<div class="header-right-option dropdown profile-nav-item pt-0 pb-0">
						<a href="#" class="dropdown-item dropdown-toggle avatar d-flex align-items-center" id="navbarDropdown-4" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							<img src="{{ asset_url('images/eminarif.jpg') }}" alt="Emin Arif Pirinç">
							<div class="d-none d-lg-block d-md-block">
								<h3>
									Emin Arif Pirinç
								</h3>
								<span>Yönetici</span>
							</div>
						</a>
						<div class="dropdown-menu">
							<div class="dropdown-header d-flex flex-column align-items-center">
								<div class="figure mb-3">
									<img src="{{ asset_url('images/eminarif.jpg') }}" alt="Emin Arif Pirinç" class="rounded-circle">
								</div>

								<div class="info text-center">
									<span class="name">Emin Arif Pirinç</span>
									<p class="mb-3 email">
										eminarifpirinc@gmail.com
									</p>
								</div>
							</div>
							<div class="dropdown-wrap">
								<ul class="profile-nav p-0 pt-3">
									<li class="nav-item">
										<a href="{{ site_url('panel/profile') }}" class="nav-link">
											<i class="ri-user-line"></i>
											<span>Profile</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="{{ site_url('panel/chat') }}" class="nav-link">
											<i class="ri-mail-send-line"></i>
											<span>Mesajlar</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="{{ site_url('panel/profile/edit') }}" class="nav-link">
											<i class="ri-edit-box-line"></i>
											<span>Profili Düzenle</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="{{ site_url('panel/profile/settings') }}" class="nav-link">
											<i class="ri-settings-5-line"></i>
											<span>Profil Ayarları</span>
										</a>
									</li>
								</ul>
							</div>

							<div class="dropdown-footer">
								<ul class="profile-nav">
									<li class="nav-item">
										<a href="{{ site_url('panel/logout') }}" class="nav-link">
											<i class="ri-login-circle-line"></i>
											<span>Çıkış Yap</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="header-right-option template-option">
						<a href="{{ site_url('panel/settings') }}">
							<img src="{{ asset_url('images/icon/setting.svg') }}" alt="Ayarlar">
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Header Area -->
