@extends('frontend.layouts.app')
@section('title','Profile')
@push('css')
@endpush

@section('content')

<div class="tt-breadcrumb">
	<div class="container">
		<ul>
			<li><a href="{{route('welcome')}}">Home</a></li>
			<li>Account</li>
		</ul>
	</div>
</div>
<div id="tt-pageContent">
	<div class="container-indent">
		<div class="container container-fluid-custom-mobile-padding">
			<h1 class="tt-title-subpages noborder">ACCOUNT</h1>
			<div class="tt-shopping-layout">
				<h2 class="tt-title">YOUR PROFILE</h2>

				<div class="tt-wrapper">
					<h6 class="tt-title">Change Your Password</h6>
					<div class="form-default">
						<form  enctype="multipart/form-data" action="{{route('user.changepassword.store')}}" method="post">
                            @csrf
							<div class="form-group">
								<label class="control-label">Current Password*</label>
								<input type="password" class="form-control border-primary @error('current_password') is-invalid @enderror" type="password" name="current_password" autocomplete="off" placeholder="Enter Your Current Password" />

                                @error('current_password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
								<label class="control-label">New Password*</label>
								<input type="password" class="form-control border-primary @error('password') is-invalid @enderror" type="password" name="password" autocomplete="off" placeholder="Enter New Password"/>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                            <div class="form-group">
								<label class="control-label">Confirm New Password*</label>
								<input type="password" class="form-control border-primary @error('password') is-invalid @enderror" type="password" name="password_confirmation" autocomplete="off" placeholder="Enter New Password Again"/>

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
							</div>


							<div class="row tt-offset-21">
								<div class="col-auto">
									<button type="submit" class="btn">Update</button>
								</div>

							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
@push('js')
@endpush
