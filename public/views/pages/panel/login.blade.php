@extends('layouts.blank')

@section('title', 'webbeyaz')

@section('content')

	<!-- Start Account Area -->
	<div class="account-area">
		<div class="d-table">
			<div class="d-table-cell">
				<div class="container">
					<div class="account-content">
						<div class="account-header">
							<a href="{{ site_url('panel/login') }}">
								<img src="{{ asset_url('images/main-logo.svg') }}" alt="webbeyaz">
							</a>
							<h3>
								Hesabına Giriş Yap
							</h3>

							@if ($error)

								<div class="alert alert-{{ $error['class'] }}" role="alert">
									{{ $error['text'] }}
								</div>

							@endif

						</div>
						<form action="" method="post" class="account-wrap">
							<div class="form-group mb-24 icon">
								<input type="text" name="username" placeholder="Kullanıcı Adı" class="form-control">
								<img src="{{ asset_url('images/icon/user-square.svg') }}" alt="sms">
							</div>
							<div class="form-group mb-24 icon">
								<input type="password" name="password" placeholder="Şifre" class="form-control">
								<img src="{{ asset_url('images/icon/key.svg') }}" alt="key">
							</div>
							<div class="form-group mb-24">
								<a href="{{ site_url('panel/forgot') }}" class="forgot">
									Şifreni mi unuttun?
								</a>
							</div>
							<div class="form-group mb-24">
								<button type="submit" class="default-btn">
									Giriş Yap
								</button>
							</div>
							<div class="form-group mb-24 text-center">
								<p class="account">
									Henüz bir hesabın yok mu?
									<a href="{{ site_url('panel/register') }}">
										Hesap oluştur
									</a>
								</p>
							</div>
						</form>
						<ul class="account-social-link">
							<li>
								<a href="https://www.google.com/" target="_blank">
									<i class='bx bxl-google' ></i>
								</a>
							</li>
							<li>
								<a href="https://www.facebook.com/" target="_blank">
									<i class='bx bxl-facebook'></i>
								</a>
							</li>
							<li>
								<a href="https://www.twitter.com/" target="_blank">
									<i class='bx bxl-twitter'></i>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Account Area -->

@endsection

