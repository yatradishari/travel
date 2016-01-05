@extends('admin')

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
								<div id="style_selector_container" style="display:block">
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
								<div class="style-toggle open"></div>
							</div-->
							<!-- end: STYLE SELECTOR BOX -->
                            @include('layout.breadcrumb')
						</div>
					</div>
					<!-- end: PAGE HEADER -->
					<!-- start: PAGE CONTENT -->
					<div class="row">
						<div class="col-sm-4">
							<div class="core-box">
								<div class="heading">
									<i class="clip-user-4 circle-icon circle-green"></i>
									<h2>Manage Users</h2>
								</div>
								<div class="content">
									Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
								</div>
								<a class="view-more" href="#">
									View More <i class="clip-arrow-right-2"></i>
								</a>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="core-box">
								<div class="heading">
									<i class="clip-clip circle-icon circle-teal"></i>
									<h2>Manage Orders</h2>
								</div>
								<div class="content">
									Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
								</div>
								<a class="view-more" href="#">
									View More <i class="clip-arrow-right-2"></i>
								</a>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="core-box">
								<div class="heading">
									<i class="clip-database circle-icon circle-bricky"></i>
									<h2>Manage Data</h2>
								</div>
								<div class="content">
									Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
								</div>
								<a class="view-more" href="#">
									View More <i class="clip-arrow-right-2"></i>
								</a>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-7">
							<div class="panel panel-default">
								<div class="panel-heading">
									<i class="clip-stats"></i>
									Site Visits
									<div class="panel-tools">
										<a class="btn btn-xs btn-link panel-collapse collapses" href="#">
										</a>
										<a class="btn btn-xs btn-link panel-config" href="#panel-config" data-toggle="modal">
											<i class="fa fa-wrench"></i>
										</a>
										<a class="btn btn-xs btn-link panel-refresh" href="#">
											<i class="fa fa-refresh"></i>
										</a>
										<a class="btn btn-xs btn-link panel-close" href="#">
											<i class="fa fa-times"></i>
										</a>
									</div>
								</div>
								<div class="panel-body">
									<div class="flot-medium-container">
										<div id="placeholder-h1" class="flot-placeholder"></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-5">
							<div class="row">
								<div class="col-sm-12">
									<div class="panel panel-default">
										<div class="panel-heading">
											<i class="clip-pie"></i>
											Acquisition
											<div class="panel-tools">
												<a class="btn btn-xs btn-link panel-collapse collapses" href="#">
												</a>
												<a class="btn btn-xs btn-link panel-config" href="#panel-config" data-toggle="modal">
													<i class="fa fa-wrench"></i>
												</a>
												<a class="btn btn-xs btn-link panel-refresh" href="#">
													<i class="fa fa-refresh"></i>
												</a>
												<a class="btn btn-xs btn-link panel-close" href="#">
													<i class="fa fa-times"></i>
												</a>
											</div>
										</div>
										<div class="panel-body">
											<div class="flot-mini-container">
												<div id="placeholder-h2" class="flot-placeholder"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<div class="panel panel-default">
										<div class="panel-heading">
											<i class="clip-bars"></i>
											Pageviews real-time
											<div class="panel-tools">
												<a class="btn btn-xs btn-link panel-collapse collapses" href="#">
												</a>
												<a class="btn btn-xs btn-link panel-config" href="#panel-config" data-toggle="modal">
													<i class="fa fa-wrench"></i>
												</a>
												<a class="btn btn-xs btn-link panel-refresh" href="#">
													<i class="fa fa-refresh"></i>
												</a>
												<a class="btn btn-xs btn-link panel-close" href="#">
													<i class="fa fa-times"></i>
												</a>
											</div>
										</div>
										<div class="panel-body">
											<div class="flot-mini-container">
												<div id="placeholder-h3" class="flot-placeholder"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-7">
							<div class="row space12">
								<ul class="mini-stats col-sm-12">
									<li class="col-sm-4">
										<div class="sparkline_bar_good">
											<span>3,5,9,8,13,11,14</span>+10%
										</div>
										<div class="values">
											<strong>18304</strong>
											Visits
										</div>
									</li>
									<li class="col-sm-4">
										<div class="sparkline_bar_neutral">
											<span>20,15,18,14,10,12,15,20</span>0%
										</div>
										<div class="values">
											<strong>3833</strong>
											Unique Visitors
										</div>
									</li>
									<li class="col-sm-4">
										<div class="sparkline_bar_bad">
											<span>4,6,10,8,12,21,11</span>+50%
										</div>
										<div class="values">
											<strong>18304</strong>
											Pageviews
										</div>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-sm-5">
							<div class="row space12">
								<div class="col-sm-6">
									<div class="easy-pie-chart">
										<span class="bounce number" data-percent="44"> <span class="percent">44</span> </span>
										<div class="label-chart">
											Bounce Rate
										</div>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="easy-pie-chart">
										<span class="cpu number" data-percent="82"> <span class="percent">82</span> </span>
										<div class="label-chart">
											New Visits
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-7">
							<div class="panel panel-default">
								<div class="panel-heading">
									<i class="clip-users-2"></i>
									Users
									<div class="panel-tools">
										<a class="btn btn-xs btn-link panel-collapse collapses" href="#">
										</a>
										<a class="btn btn-xs btn-link panel-config" href="#panel-config" data-toggle="modal">
											<i class="fa fa-wrench"></i>
										</a>
										<a class="btn btn-xs btn-link panel-refresh" href="#">
											<i class="fa fa-refresh"></i>
										</a>
										<a class="btn btn-xs btn-link panel-close" href="#">
											<i class="fa fa-times"></i>
										</a>
									</div>
								</div>
								<div class="panel-body panel-scroll" style="height:300px">
									<table class="table table-striped table-hover" id="sample-table-1">
										<thead>
											<tr>
												<th class="center">Photo</th>
												<th>Full Name</th>
												<th class="hidden-xs">Email</th>
												<th></th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td class="center"><img src="assets/images/avatar-1.jpg" alt="image"/></td>
												<td>Peter Clark</td>
												<td class="hidden-xs">
												<a href="#" rel="nofollow" target="_blank">
													peter@example.com
												</a></td>
												<td class="center">
												<div>
													<div class="btn-group">
														<a class="btn btn-primary dropdown-toggle btn-sm" data-toggle="dropdown" href="#">
															<i class="fa fa-cog"></i> <span class="caret"></span>
														</a>
														<ul role="menu" class="dropdown-menu pull-right">
															<li role="presentation">
																<a role="menuitem" tabindex="-1" href="#">
																	<i class="fa fa-edit"></i> Edit
																</a>
															</li>
															<li role="presentation">
																<a role="menuitem" tabindex="-1" href="#">
																	<i class="fa fa-share"></i> Share
																</a>
															</li>
															<li role="presentation">
																<a role="menuitem" tabindex="-1" href="#">
																	<i class="fa fa-times"></i> Remove
																</a>
															</li>
														</ul>
													</div>
												</div></td>
											</tr>
											<tr>
												<td class="center"><img src="assets/images/avatar-2.jpg" alt="image"/></td>
												<td>Nicole Bell</td>
												<td class="hidden-xs">
												<a href="#" rel="nofollow" target="_blank">
													nicole@example.com
												</a></td>
												<td class="center">
												<div>
													<div class="btn-group">
														<a class="btn btn-primary dropdown-toggle btn-sm" data-toggle="dropdown" href="#">
															<i class="fa fa-cog"></i> <span class="caret"></span>
														</a>
														<ul role="menu" class="dropdown-menu pull-right">
															<li role="presentation">
																<a role="menuitem" tabindex="-1" href="#">
																	<i class="fa fa-edit"></i> Edit
																</a>
															</li>
															<li role="presentation">
																<a role="menuitem" tabindex="-1" href="#">
																	<i class="fa fa-share"></i> Share
																</a>
															</li>
															<li role="presentation">
																<a role="menuitem" tabindex="-1" href="#">
																	<i class="fa fa-times"></i> Remove
																</a>
															</li>
														</ul>
													</div>
												</div></td>
											</tr>
											<tr>
												<td class="center"><img src="assets/images/avatar-3.jpg" alt="image"/></td>
												<td>Steven Thompson</td>
												<td class="hidden-xs">
												<a href="#" rel="nofollow" target="_blank">
													steven@example.com
												</a></td>
												<td class="center">
												<div>
													<div class="btn-group">
														<a class="btn btn-primary dropdown-toggle btn-sm" data-toggle="dropdown" href="#">
															<i class="fa fa-cog"></i> <span class="caret"></span>
														</a>
														<ul role="menu" class="dropdown-menu pull-right">
															<li role="presentation">
																<a role="menuitem" tabindex="-1" href="#">
																	<i class="fa fa-edit"></i> Edit
																</a>
															</li>
															<li role="presentation">
																<a role="menuitem" tabindex="-1" href="#">
																	<i class="fa fa-share"></i> Share
																</a>
															</li>
															<li role="presentation">
																<a role="menuitem" tabindex="-1" href="#">
																	<i class="fa fa-times"></i> Remove
																</a>
															</li>
														</ul>
													</div>
												</div></td>
											</tr>
											<tr>
												<td class="center"><img src="assets/images/avatar-5.jpg" alt="image"/></td>
												<td>Kenneth Ross</td>
												<td class="hidden-xs">
												<a href="#" rel="nofollow" target="_blank">
													kenneth@example.com
												</a></td>
												<td class="center">
												<div>
													<div class="btn-group">
														<a class="btn btn-primary dropdown-toggle btn-sm" data-toggle="dropdown" href="#">
															<i class="fa fa-cog"></i> <span class="caret"></span>
														</a>
														<ul role="menu" class="dropdown-menu pull-right">
															<li role="presentation">
																<a role="menuitem" tabindex="-1" href="#">
																	<i class="fa fa-edit"></i> Edit
																</a>
															</li>
															<li role="presentation">
																<a role="menuitem" tabindex="-1" href="#">
																	<i class="fa fa-share"></i> Share
																</a>
															</li>
															<li role="presentation">
																<a role="menuitem" tabindex="-1" href="#">
																	<i class="fa fa-times"></i> Remove
																</a>
															</li>
														</ul>
													</div>
												</div></td>
											</tr>
											<tr>
												<td class="center"><img src="assets/images/avatar-4.jpg" alt="image"/></td>
												<td>Ella Patterson</td>
												<td class="hidden-xs">
												<a href="#" rel="nofollow" target="_blank">
													ella@example.com
												</a></td>
												<td class="center">
												<div>
													<div class="btn-group">
														<a class="btn btn-primary dropdown-toggle btn-sm" data-toggle="dropdown" href="#">
															<i class="fa fa-cog"></i> <span class="caret"></span>
														</a>
														<ul role="menu" class="dropdown-menu pull-right">
															<li role="presentation">
																<a role="menuitem" tabindex="-1" href="#">
																	<i class="fa fa-edit"></i> Edit
																</a>
															</li>
															<li role="presentation">
																<a role="menuitem" tabindex="-1" href="#">
																	<i class="fa fa-share"></i> Share
																</a>
															</li>
															<li role="presentation">
																<a role="menuitem" tabindex="-1" href="#">
																	<i class="fa fa-times"></i> Remove
																</a>
															</li>
														</ul>
													</div>
												</div></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
						<div class="col-sm-5">
							<div class="panel panel-default">
								<div class="panel-heading">
									<i class="clip-checkbox"></i>
									To Do
									<div class="panel-tools">
										<a class="btn btn-xs btn-link panel-collapse collapses" href="#">
										</a>
										<a class="btn btn-xs btn-link panel-config" href="#panel-config" data-toggle="modal">
											<i class="fa fa-wrench"></i>
										</a>
										<a class="btn btn-xs btn-link panel-refresh" href="#">
											<i class="fa fa-refresh"></i>
										</a>
										<a class="btn btn-xs btn-link panel-close" href="#">
											<i class="fa fa-times"></i>
										</a>
									</div>
								</div>
								<div class="panel-body panel-scroll" style="height:300px">
									<ul class="todo">
										<li>
											<a class="todo-actions" href="javascript:void(0)">
												<i class="fa fa-square-o"></i>
												<span class="desc" style="opacity: 1; text-decoration: none;">Staff Meeting</span>
												<span class="label label-danger" style="opacity: 1;"> today</span>
											</a>
										</li>
										<li>
											<a class="todo-actions" href="javascript:void(0)">
												<i class="fa fa-square-o"></i>
												<span class="desc" style="opacity: 1; text-decoration: none;"> New frontend layout</span>
												<span class="label label-danger" style="opacity: 1;"> today</span>
											</a>
										</li>
										<li>
											<a class="todo-actions" href="javascript:void(0)">
												<i class="fa fa-square-o"></i>
												<span class="desc"> Hire developers</span>
												<span class="label label-warning"> tommorow</span>
											</a>
										</li>
										<li>
											<a class="todo-actions" href="javascript:void(0)">
												<i class="fa fa-square-o"></i>
												<span class="desc">Staff Meeting</span>
												<span class="label label-warning"> tommorow</span>
											</a>
										</li>
										<li>
											<a class="todo-actions" href="javascript:void(0)">
												<i class="fa fa-square-o"></i>
												<span class="desc"> New frontend layout</span>
												<span class="label label-success"> this week</span>
											</a>
										</li>
										<li>
											<a class="todo-actions" href="javascript:void(0)">
												<i class="fa fa-square-o"></i>
												<span class="desc"> Hire developers</span>
												<span class="label label-success"> this week</span>
											</a>
										</li>
										<li>
											<a class="todo-actions" href="javascript:void(0)">
												<i class="fa fa-square-o"></i>
												<span class="desc"> New frontend layout</span>
												<span class="label label-info"> this month</span>
											</a>
										</li>
										<li>
											<a class="todo-actions" href="javascript:void(0)">
												<i class="fa fa-square-o"></i>
												<span class="desc"> Hire developers</span>
												<span class="label label-info"> this month</span>
											</a>
										</li>
										<li>
											<a class="todo-actions" href="javascript:void(0)">
												<i class="fa fa-square-o"></i>
												<span class="desc" style="opacity: 1; text-decoration: none;">Staff Meeting</span>
												<span class="label label-danger" style="opacity: 1;"> today</span>
											</a>
										</li>
										<li>
											<a class="todo-actions" href="javascript:void(0)">
												<i class="fa fa-square-o"></i>
												<span class="desc" style="opacity: 1; text-decoration: none;"> New frontend layout</span>
												<span class="label label-danger" style="opacity: 1;"> today</span>
											</a>
										</li>
										<li>
											<a class="todo-actions" href="javascript:void(0)">
												<i class="fa fa-square-o"></i>
												<span class="desc"> Hire developers</span>
												<span class="label label-warning"> tommorow</span>
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-7">
							<div class="panel panel-default">
								<div class="panel-heading">
									<i class="clip-calendar"></i>
									Calendar
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
									<div id='calendar'></div>
								</div>
							</div>
						</div>
						<div class="col-sm-5">
							<div class="row">
								<div class="col-sm-12">
									<div class="panel panel-default">
										<div class="panel-heading">
											<i class="clip-bubble-4"></i>
											Chats
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
										<div class="panel-body panel-scroll" style="height:460px">
											<ol class="discussion">
												<li class="other">
													<div class="avatar">
														<img alt="" src="assets/images/avatar-4.jpg">
													</div>
													<div class="messages">
														<p>
															Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
														</p>
														<span class="time"> Timothy • 51 min </span>
													</div>
												</li>
												<li class="self">
													<div class="avatar">
														<img alt="" src="assets/images/avatar-1.jpg">
													</div>
													<div class="messages">
														<p>
															Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
														</p>
														<span class="time"> 37 mins </span>
													</div>
												</li>
												<li class="other">
													<div class="avatar">
														<img alt="" src="assets/images/avatar-3.jpg">
													</div>
													<div class="messages">
														<p>
															Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
														</p>
													</div>
												</li>
												<li class="self">
													<div class="avatar">
														<img alt="" src="assets/images/avatar-1.jpg">
													</div>
													<div class="messages">
														<p>
															Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
														</p>
													</div>
												</li>
												<li class="other">
													<div class="avatar">
														<img alt="" src="assets/images/avatar-4.jpg">
													</div>
													<div class="messages">
														<p>
															Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
														</p>
													</div>
												</li>
											</ol>
										</div>
									</div>
								</div>
								<div class="col-sm-12">
									<div class="chat-form">
										<div class="input-group">
											<input type="text" class="form-control input-mask-date" placeholder="Type a message here...">
											<span class="input-group-btn">
												<button class="btn btn-teal" type="button">
													<i class="fa fa-check"></i>
												</button> </span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- end: PAGE CONTENT-->
				</div>
			</div>
			<!-- end: PAGE -->
		</div>
		<!-- end: MAIN CONTAINER -->
@endsection
