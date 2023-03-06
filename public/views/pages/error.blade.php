@extends('layouts.blank')

@section('title', 'webbeyaz')

@section('content')

	<!-- Start Error Area -->
	<div class="error-area">
		<div class="d-table">
			<div class="d-table-cell">
				<div class="container">
					<div class="error-content card-box-style">
						<h1>404</h1>
						<h3>Oops! Sayfa Bulunamadı</h3>
						<p>Aradığınız sayfa bulunamadı.</p>
						<a href="{{ site_url() }}" class="btn btn btn-primary">
							Anasayfaya Git
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Error Area -->

@endsection
