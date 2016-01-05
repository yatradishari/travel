@extends('admin_common')

@section('content')
		<!-- start: MAIN CONTAINER -->
		<div class="main-container">
			<div class="navbar-content">
				<!-- start: SIDEBAR -->
				<div class="main-navigation navbar-collapse collapse">
					<!-- start: MAIN MENU TOGGLER BUTTON -->
					<div class="navigation-toggler">
						<i class="clip-chevron-left"></i>
						<i class="clip-chevron-right"></i>
					</div>
					<!-- end: MAIN MENU TOGGLER BUTTON -->
                    @include('layout.admin_menu')
				</div>
				<!-- end: SIDEBAR -->
			</div>
			<!-- start: PAGE -->
			<div class="main-content">
				<!-- start: PANEL CONFIGURATION MODAL FORM -->
				<div class="modal fade" id="panel-config" tabindex="-1" role="dialog" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
									&times;
								</button>
								<h4 class="modal-title">Panel Configuration</h4>
							</div>
							<div class="modal-body">
								Here will be a configuration form
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">
									Close
								</button>
								<button type="button" class="btn btn-primary">
									Save changes
								</button>
							</div>
						</div>
						<!-- /.modal-content -->
					</div>
					<!-- /.modal-dialog -->
				</div>
				<!-- /.modal -->
				<!-- end: SPANEL CONFIGURATION MODAL FORM -->
				<div class="container">
					<!-- start: PAGE HEADER -->
					<div class="row">
						<div class="col-sm-12">
							<!-- start: STYLE SELECTOR BOX -->
							<!--div id="style_selector" class="hidden-xs">
								<div id="style_selector_container">
									<div class="style-main-title">
										Style Selector
									</div>
									<div class="box-title">
										Choose Your Layout Style
									</div>
									<div class="input-box">
										<div class="input">
											<select name="layout">
												<option value="default">Wide</option><option value="boxed">Boxed</option>
											</select>
										</div>
									</div>
									<div class="box-title">
										Choose Your Header Style
									</div>
									<div class="input-box">
										<div class="input">
											<select name="header">
												<option value="fixed">Fixed</option><option value="default">Default</option>
											</select>
										</div>
									</div>
									<div class="box-title">
										Choose Your Footer Style
									</div>
									<div class="input-box">
										<div class="input">
											<select name="footer">
												<option value="default">Default</option><option value="fixed">Fixed</option>
											</select>
										</div>
									</div>
									<div class="box-title">
										Backgrounds for Boxed Version
									</div>
									<div class="images boxed-patterns">
										<a id="bg_style_1" href="#"><img alt="" src="assets/images/bg.png"></a>
										<a id="bg_style_2" href="#"><img alt="" src="assets/images/bg_2.png"></a>
										<a id="bg_style_3" href="#"><img alt="" src="assets/images/bg_3.png"></a>
										<a id="bg_style_4" href="#"><img alt="" src="assets/images/bg_4.png"></a>
										<a id="bg_style_5" href="#"><img alt="" src="assets/images/bg_5.png"></a>
									</div>
									<div class="box-title">
										5 Predefined Color Schemes
									</div>
									<div class="images icons-color">
										<a id="light" href="#"><img class="active" alt="" src="assets/images/lightgrey.png"></a>
										<a id="dark" href="#"><img alt="" src="assets/images/darkgrey.png"></a>
										<a id="black_and_white" href="#"><img alt="" src="assets/images/blackandwhite.png"></a>
										<a id="navy" href="#"><img alt="" src="assets/images/navy.png"></a>
										<a id="green" href="#"><img alt="" src="assets/images/green.png"></a>
									</div>
									<div class="box-title">
										Style it with LESS
									</div>
									<div class="images">
										<div class="form-group">
											<label>
												Basic
											</label>
											<input type="text" value="#ffffff" class="color-base">
											<div class="dropdown">
												<a class="add-on dropdown-toggle" data-toggle="dropdown"><i style="background-color: #ffffff"></i></a>
												<ul class="dropdown-menu pull-right">
													<li>
														<div class="colorpalette"></div>
													</li>
												</ul>
											</div>
										</div>
										<div class="form-group">
											<label>
												Text
											</label>
											<input type="text" value="#555555" class="color-text">
											<div class="dropdown">
												<a class="add-on dropdown-toggle" data-toggle="dropdown"><i style="background-color: #555555"></i></a>
												<ul class="dropdown-menu pull-right">
													<li>
														<div class="colorpalette"></div>
													</li>
												</ul>
											</div>
										</div>
										<div class="form-group">
											<label>
												Elements
											</label>
											<input type="text" value="#007AFF" class="color-badge">
											<div class="dropdown">
												<a class="add-on dropdown-toggle" data-toggle="dropdown"><i style="background-color: #007AFF"></i></a>
												<ul class="dropdown-menu pull-right">
													<li>
														<div class="colorpalette"></div>
													</li>
												</ul>
											</div>
										</div>
									</div>
									<div style="height:25px;line-height:25px; text-align: center">
										<a class="clear_style" href="#">
											Clear Styles
										</a>
										<a class="save_style" href="#">
											Save Styles
										</a>
									</div>
								</div>
								<div class="style-toggle close"></div>
							</div-->
							<!-- end: STYLE SELECTOR BOX -->

							@include('layout.breadcrumb')
						</div>
					</div>
					<!-- end: PAGE HEADER -->
					<!-- start: PAGE CONTENT -->
					<div class="row">
						<div class="col-md-12">
						<!-- start: FORM VALIDATION 2 PANEL -->
						
						
						    <div class="panel panel-default">
								<div class="panel-heading">
									<i class="fa fa-external-link-square"></i>
									Add new tour
									<div class="panel-tools">
										<a class="btn btn-xs btn-link panel-collapse collapses" href="#">
										</a>
										<a class="btn btn-xs btn-link panel-config" href="#panel-config" data-toggle="modal">
											<i class="fa fa-wrench"></i>
										</a>
										<a class="btn btn-xs btn-link panel-refresh" href="#">
											<i class="fa fa-refresh"></i>
										</a>
										<a class="btn btn-xs btn-link panel-expand" href="#">
											<i class="fa fa-resize-full"></i>
										</a>
										<a class="btn btn-xs btn-link panel-close" href="#">
											<i class="fa fa-times"></i>
										</a>
									</div>
								</div>
								<div class="panel-body">
									<h2><i class="fa fa-pencil-square teal"></i> Tour</h2>
									<p>
										Create one account to manage everything you do with ClipOne, from your shopping preferences to your ClipOne activity.
									</p>
									<hr>
									
									
                                   <form action="/users/savetour" role="form" id="form2" method="post" class="addtour_box">
								   <input type="hidden" name="_token" value="{{ csrf_token() }}">
										<div class="row">
											<div class="col-md-12">
												<div class="errorHandler alert alert-danger no-display">
													<i class="fa fa-times-sign"></i> You have some form errors. Please check below.
												</div>
												<div class="successHandler alert alert-success no-display">
													<i class="fa fa-ok"></i> Your form validation is successful!
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
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label class="control-label">
														Tour Title <span class="symbol required"></span>
													</label>
													<input type="text" onkeyup="setinurl(this.value);" placeholder="Tour title" class="form-control" id="tour_title" name="tour_title" required>
												</div>
												<div class="form-group">
													<label class="control-label">
														Start Date <span class="symbol required"></span>
													</label>
													<input type="date" placeholder="Start date (yyyy/mm/dd)" class="form-control" id="start_date" name="start_date" required>
												</div>
												<div class="form-group">
													<label class="control-label">
														End Date <span class="symbol required"></span>
													</label>
													<input type="date" placeholder="End date (yyyy/mm/dd)" class="form-control" id="end_date" name="end_date" required>
												</div>
												<div class="form-group">
													<label class="control-label">
														Package <span class="symbol required"></span>
													</label>
													<input type="text" class="form-control" name="package" id="package" placeholder="Tour package in Rs." required>
												</div>
												<!--div class="form-group">
													<label class="control-label">
														Dropdown <span class="symbol required"></span>
													</label>
													<select class="form-control" id="dropdown" name="dropdown">
														<option value="">Select...</option>
														<option value="Category 1">Category 1</option>
														<option value="Category 2">Category 2</option>
														<option value="Category 3">Category 5</option>
														<option value="Category 4">Category 4</option>
													</select>
												</div-->
											</div>
											<div class="col-md-6">
												<!--div class="form-group">
													<label class="control-label">
														Services <em>(select at least two)</em> <span class="symbol required"></span>
													</label>
													<div>
														<div class="checkbox">
															<label>
																<input type="checkbox" class="grey" value="" name="services" id="service1">
																Service 1
															</label>
														</div>
														<div class="checkbox">
															<label>
																<input type="checkbox" class="grey" value="" name="services"  id="service2">
																Service 2
															</label>
														</div>
														<div class="checkbox">
															<label>
																<input type="checkbox" class="grey" value="" name="services"  id="service3">
																Service 3
															</label>
														</div>
														<div class="checkbox">
															<label>
																<input type="checkbox" class="grey" value="" name="services"  id="service4">
																Service 4
															</label>
														</div>
													</div>
												</div-->
												<!--div class="form-group connected-group">
													<label class="control-label">
														Credit Card <em>(e.g: 0000 0000 0000 0000)</em> <span class="symbol required"></span>
													</label>
													<input type="text" class="form-control" id="creditcard" name="creditcard">
												</div-->
												<div class="form-group connected-group">
													<label class="control-label">
														URL <em>(e.g: http://www.{{$_SERVER['HTTP_HOST']}}/custom url)</em> <span class="symbol required"></span>
													</label>
													<input type="text" class="form-control" id="tour_public_url" name="tour_public_url" placeholder="Public rul" required>
												</div>
												<!--div class="row">
													<div class="col-md-4">
														<div class="form-group">
															<label class="control-label">
																Zip Code <span class="symbol required"></span>
															</label>
															<input class="form-control" type="text" name="zipcode2" id="zipcode2">
														</div>
													</div>
													<div class="col-md-8">
														<div class="form-group">
															<label class="control-label">
																City <span class="symbol required"></span>
															</label>
															<input class="form-control tooltips" type="text" data-original-title="We'll display it when you write reviews" data-rel="tooltip"  title="" data-placement="top" name="city2" id="city2">
														</div>
													</div>
												</div-->
											</div>
										</div>
										<!--div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<label class="control-label">
														Summernote <span class="symbol required"></span>
													</label>
													<div class="summernote"></div>
													<textarea class="form-control no-display" id="editor1" name="editor1" cols="10" rows="10"></textarea>
												</div>
											</div>
										</div-->
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<label class="control-label">
														Description <span class="symbol required"></span>
													</label>
													<textarea class="ckeditor form-control" id="editor2" name="description" cols="10" rows="10" required></textarea>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<div>
													<span class="symbol required"></span>Required Fields
													<hr>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-8">
												<p>
													&nbsp;
												</p>
											</div>
											<div class="col-md-4">
												<button class="btn btn-yellow btn-block" type="submit">
													Register <i class="fa fa-arrow-circle-right"></i>
												</button>
											</div>
										</div>
									</form>									
									
									
								
								</div>
							</div>
							
							<!-- end: FORM VALIDATION 2 PANEL -->
						</div>
					</div>
					<!-- end: PAGE CONTENT-->
				</div>
			</div>
			
			
			
			<!-- end: PAGE -->
		</div>
		<!-- end: MAIN CONTAINER -->
<script>
function setinurl(v){ //alert(v);
    var v = v.trim();
	v = v.replace(/ +(?= )/g,'');
	v = v.split(' ').join('-');
	$("#tour_public_url").val(v);
}
</script>		
@endsection
