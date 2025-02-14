<div class="hero" id="highlighted" style="height:220px;">
		<div class="inner">
			<!--owl carosuel start-->
			<div id="highlighted-slider" class="">
					<div class="item-slider" data-toggle="owlcarousel" data-owlcarousel-settings='{"singleItem":true, "navigation":true, "transitionStyle":"fadeUp","autoplay":true}'>
						<div class="item">
							<div class="row">
								<div class="col-md-12 text-left-md item-caption">
									<h2 class="h1 text-weight-light ">
									&nbsp; &nbsp;
									</h2>
									<div class="clearfix" style="height:20px;">&nbsp;</div>

									<form accept-charset="UTF-8" role="form" action="{{ route('queryVisa') }}" method="GET">
                                        @csrf
										<div class="row">
										<div class="col-md-2">&nbsp;</div>
										<div class="col-md-3">
											<div class="form-group">
													<div class="input-group input-group-lg">
														<span class="input-group-addon"><i class="fa fa-circle-o-notch"></i></span>
														<input type="text" class="form-control" placeholder="Visa type" name="visa_type" id="search_keys">
													</div>
												</div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
													<div class="input-group input-group-lg">
														<span class="input-group-addon"><i class="fa fa-location-arrow"></i></span>
														<input type="text" class="form-control" placeholder="Country" name="visa_location" id="search_locations">
													</div>
												</div>
										</div>
										<div class="col-md-2">
											<button class="btn btn-lg btn-primary btn-block" type="submit"><i class="glyphicon glyphicon-search"></i></button>
										</div>
										</div>
									</form>

									<div class="col-md-2">&nbsp;</div>
									<div class="col-md-10">
										<span style="color:#fff; font-weight:bold; font-size:26px; text-transform:uppercase;">We Have <span class="text-primary">{{ $totalVisa->count() }}</span> visa offers for you</span>
									</div>
								</div>
							</div>
						</div>
				</div>
			</div>
			<!--owl carosuel end-->
		</div>
	</div>
