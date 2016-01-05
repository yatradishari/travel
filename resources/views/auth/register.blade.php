@extends('app')

@section('content')
<!-- start: REGISTER BOX -->
			<div class="box-register">
				<h3>Sign Up</h3>
				<p>
					Enter your account details below:
				</p>
				<form class="form-register" method="post" action="{{ url('/auth/register') }}">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<div class="errorHandler alert alert-danger no-display">
						<i class="fa fa-remove-sign"></i> You have some form errors. Please check below.
					</div>
                    @if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif					
					<fieldset>
						<div class="form-group">
							<span class="input-icon">
								<input type="text" class="form-control" name="company_name" placeholder="Company Name" required value="{{ old('company_name') }}">
								<i class="fa fa-user"></i> </span>
						</div>	
						<div class="form-group">
							<span class="input-icon">
								<input type="text" class="form-control" name="phone_no" placeholder="Phone or Mobile Number" required value="{{ old('phone_no') }}">
								<i class="fa fa-phone"></i> </span>
						</div>							
						<div class="form-group">
							<span class="input-icon">
								<input type="email" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}">
								<i class="fa fa-envelope"></i> </span>
						</div>
						<div class="form-group">
							<span class="input-icon">
								<input type="password" class="form-control" id="password" name="password" placeholder="Password">
								<i class="fa fa-lock"></i> </span>
						</div>
						<div class="form-group">
							<div>
								<label for="agree" class="checkbox-inline">
									<input type="checkbox" class="grey agree" id="agree" name="agree">
									I agree to the Terms of Service and Privacy Policy
								</label>
							</div>
						</div>
						<div class="form-actions">
							<a href="{{ url('/auth/login') }}" class="btn btn-light-grey go-back">
								<i class="fa fa-circle-arrow-left"></i> Login
							</a>
							<button type="submit" class="btn btn-bricky pull-right register">
								Submit <i class="fa fa-arrow-circle-right"></i>
							</button>
						</div>
					</fieldset>
				</form>
</div>
@endsection
