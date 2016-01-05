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
						    <div>
						    <a href="/users/addtour" class="btn btn-yellow">Add Tour</a>
							</div>
							<!--div class="alert alert-info">
								Please try to re-size your browser window in order to see the tables in responsive mode. 
							</div-->
							<!-- start: RESPONSIVE TABLE PANEL -->
							<div class="panel panel-default">
								<div class="panel-heading">
									<i class="fa fa-external-link-square"></i>
									Responsive Table
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
									<div class="table-responsive">
										<table class="table table-bordered table-hover" id="sample-table-1">
											<thead>
												<tr>
													<th class="center">
													<div class="checkbox-table">
														<label>
															<input type="checkbox" class="flat-grey">
														</label>
													</div></th>
													<th>Tour Title</th>
													<th>Start Date</th>
													<th>End Date</th>
													<th>Package</th>
													<th>Status</th>
													<th><i class="fa fa-time"></i> Update </th>
													
												</tr>
											</thead>
											<tbody>
											   @if($tour_count == 0)
											    <tr>
												 <td colspan="6" style="text-align:center;">
												  No data found.
												 </td>
												</tr>
											   @elseif($tour_count > 0)	
											   @foreach($tour_list as $tour_lists)
												<tr>
													<td class="center">
													<div class="checkbox-table">
														<label>
															<input type="checkbox" class="flat-grey">
														</label>
													</div></td>
													<td>
													{{$tour_lists->tour_title}}
													</td>
													<td>{{$tour_lists->start_date}}</td>
													<td>{{$tour_lists->end_date}}</td>
													<td>Rs.{{$tour_lists->package}}</td>
													<td>{{$tour_lists->isblocked}}</td>
													<td><span class="label label-sm label-warning">Expiring</span></td>
												</tr>
												@endforeach
											   @endif	
												<!--tr>
													<td class="center">
													<div class="checkbox-table">
														<label>
															<input type="checkbox" class="flat-grey">
														</label>
													</div></td>
													<td>
													<a href="#">
														beta.com
													</a></td>
													<td>$70</td>
													<td>3,330</td>
													<td>Jen 15</td>
													<td><span class="label label-sm label-success">Registered</span></td>
												</tr>
												<tr>
													<td class="center">
													<div class="checkbox-table">
														<label>
															<input type="checkbox" class="flat-grey">
														</label>
													</div></td>
													<td>
													<a href="#">
														gamma.com
													</a></td>
													<td>$25</td>
													<td>3,330</td>
													<td>Mar 09</td>
													<td><span class="label label-sm label-danger">Expired</span></td>
												</tr>
												<tr>
													<td class="center">
													<div class="checkbox-table">
														<label>
															<input type="checkbox" class="flat-grey">
														</label>
													</div></td>
													<td>
													<a href="#">
														delta.com
													</a></td>
													<td>$50</td>
													<td>3,330</td>
													<td>Feb 10</td>
													<td><span class="label label-sm label-inverse">Flagged</span></td>
												</tr>
												<tr>
													<td class="center">
													<div class="checkbox-table">
														<label>
															<input type="checkbox" class="flat-grey">
														</label>
													</div></td>
													<td>
													<a href="#">
														epsilon.com
													</a></td>
													<td>$35</td>
													<td>3,330</td>
													<td>Feb 18</td>
													<td><span class="label label-sm label-success">Registered</span></td>
												</tr>
												<tr>
													<td class="center">
													<div class="checkbox-table">
														<label>
															<input type="checkbox" class="flat-grey">
														</label>
													</div></td>
													<td>
													<a href="#">
														zeta.com
													</a></td>
													<td>$45</td>
													<td>3,330</td>
													<td>Feb 13</td>
													<td><span class="label label-sm label-warning">Expiring</span></td>
												</tr>
												<tr>
													<td class="center">
													<div class="checkbox-table">
														<label>
															<input type="checkbox" class="flat-grey">
														</label>
													</div></td>
													<td>
													<a href="#">
														eta.com
													</a></td>
													<td>$70</td>
													<td>3,330</td>
													<td>Jen 15</td>
													<td><span class="label label-sm label-success">Registered</span></td>
												</tr>
												<tr>
													<td class="center">
													<div class="checkbox-table">
														<label>
															<input type="checkbox" class="flat-grey">
														</label>
													</div></td>
													<td>
													<a href="#">
														theta.com
													</a></td>
													<td>$25</td>
													<td>3,330</td>
													<td>Mar 09</td>
													<td><span class="label label-sm label-danger">Expired</span></td>
												</tr>
												<tr>
													<td class="center">
													<div class="checkbox-table">
														<label>
															<input type="checkbox" class="flat-grey">
														</label>
													</div></td>
													<td>
													<a href="#">
														iota.com
													</a></td>
													<td>$50</td>
													<td>3,330</td>
													<td>Feb 10</td>
													<td><span class="label label-sm label-inverse">Flagged</span></td>
												</tr>
												<tr>
													<td class="center">
													<div class="checkbox-table">
														<label>
															<input type="checkbox" class="flat-grey">
														</label>
													</div></td>
													<td>
													<a href="#">
														kappa.com
													</a></td>
													<td>$35</td>
													<td>3,330</td>
													<td>Feb 18</td>
													<td><span class="label label-sm label-success">Registered</span></td>
												</tr-->
									

											</tbody>
										</table>
									</div>
								</div>
							</div>
							<!-- end: RESPONSIVE TABLE PANEL -->
						</div>
					</div>
					<!-- end: PAGE CONTENT-->
				</div>
			</div>
			
			
			
			<!-- end: PAGE -->
		</div>
		<!-- end: MAIN CONTAINER -->
@endsection
