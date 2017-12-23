@extends('layouts.master')

@section('title', 'Clean Blog')

@section('content')

	<section id="content">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h4 class="heading">Recent Works</h4>

					<div id="filters-container" class="cbp-l-filters-button">
						<div data-filter="*" class="cbp-filter-item-active cbp-filter-item">All
							<div class="cbp-filter-counter"></div>
						</div>
						<div data-filter=".identity" class="cbp-filter-item">Identity
							<div class="cbp-filter-counter"></div>
						</div>
						<div data-filter=".web-design" class="cbp-filter-item">Web Design
							<div class="cbp-filter-counter"></div>
						</div>
						<div data-filter=".graphic" class="cbp-filter-item">Graphic
							<div class="cbp-filter-counter"></div>
						</div>
						<div data-filter=".logo" class="cbp-filter-item">Logo
							<div class="cbp-filter-counter"></div>
						</div>
					</div>


					<div id="grid-container" class="cbp-l-grid-projects">
						<ul>
							<li class="cbp-item graphic">
								<div class="cbp-caption">
									<div class="cbp-caption-defaultWrap">
										<img src="img/works/501.jpg" alt="" />
									</div>
									<div class="cbp-caption-activeWrap">
										<div class="cbp-l-caption-alignCenter">
											<div class="cbp-l-caption-body">
												<a href="img/works/501.jpg" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="Dashboard<br>by Paul Flavius Nechita">view larger</a>
											</div>
										</div>
									</div>
								</div>
								<div class="cbp-l-grid-projects-title">Dashboard</div>
								<div class="cbp-l-grid-projects-desc">Web Design / Graphic</div>
							</li>
							<li class="cbp-item web-design logo">
								<div class="cbp-caption">
									<div class="cbp-caption-defaultWrap">
										<img src="img/works/502.jpg" alt="" />
									</div>
									<div class="cbp-caption-activeWrap">
										<div class="cbp-l-caption-alignCenter">
											<div class="cbp-l-caption-body">
												<a href="img/works/502.jpg" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="World Clock Widget<br>by Paul Flavius Nechita">view larger</a>
											</div>
										</div>
									</div>
								</div>
								<div class="cbp-l-grid-projects-title">World Clock Widget</div>
								<div class="cbp-l-grid-projects-desc">Logo / Web Design</div>
							</li>
							<li class="cbp-item graphic logo">
								<div class="cbp-caption">
									<div class="cbp-caption-defaultWrap">
										<img src="img/works/503.jpg" alt="" />
									</div>
									<div class="cbp-caption-activeWrap">
										<div class="cbp-l-caption-alignCenter">
											<div class="cbp-l-caption-body">

												<a href="http://vimeo.com/14912890" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="To-Do Dashboard<br>by Tiberiu Neamu">view video</a>
											</div>
										</div>
									</div>
								</div>
								<div class="cbp-l-grid-projects-title">To-Do Dashboard</div>
								<div class="cbp-l-grid-projects-desc">Graphic / Logo</div>
							</li>
							<li class="cbp-item web-design graphic">
								<div class="cbp-caption">
									<div class="cbp-caption-defaultWrap">
										<img src="img/works/504.jpg" alt="" />
									</div>
									<div class="cbp-caption-activeWrap">
										<div class="cbp-l-caption-alignCenter">
											<div class="cbp-l-caption-body">

												<a href="img/works/504.jpg" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="Events and  More<br>by Tiberiu Neamu">view larger</a>
											</div>
										</div>
									</div>
								</div>
								<div class="cbp-l-grid-projects-title">Events and More</div>
								<div class="cbp-l-grid-projects-desc">Web Design / Graphic</div>
							</li>
							<li class="cbp-item identity web-design">
								<div class="cbp-caption">
									<div class="cbp-caption-defaultWrap">
										<img src="img/works/509.jpg" alt="" />
									</div>
									<div class="cbp-caption-activeWrap">
										<div class="cbp-l-caption-alignCenter">
											<div class="cbp-l-caption-body">

												<a href="img/works/509.jpg" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="WhereTO App<br>by Tiberiu Neamu">view larger</a>
											</div>
										</div>
									</div>
								</div>
								<div class="cbp-l-grid-projects-title">WhereTO App</div>
								<div class="cbp-l-grid-projects-desc">Web Design / Identity</div>
							</li>
							<li class="cbp-item identity web-design">
								<div class="cbp-caption">
									<div class="cbp-caption-defaultWrap">
										<img src="img/works/510.jpg" alt="" />
									</div>
									<div class="cbp-caption-activeWrap">
										<div class="cbp-l-caption-alignCenter">
											<div class="cbp-l-caption-body">

												<a href="img/works/510.jpg" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="Ski * Buddy<br>by Tiberiu Neamu">view larger</a>
											</div>
										</div>
									</div>
								</div>
								<div class="cbp-l-grid-projects-title">Ski * Buddy</div>
								<div class="cbp-l-grid-projects-desc">Identity / Web Design</div>
							</li>
							<li class="cbp-item graphic logo">
								<div class="cbp-caption">
									<div class="cbp-caption-defaultWrap">
										<img src="img/works/511.jpg" alt="" />
									</div>
									<div class="cbp-caption-activeWrap">
										<div class="cbp-l-caption-alignCenter">
											<div class="cbp-l-caption-body">

												<a href="img/works/511.jpg" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="Seemple* Music for iPad<br>by Tiberiu Neamu">view larger</a>
											</div>
										</div>
									</div>
								</div>
								<div class="cbp-l-grid-projects-title">Seemple* Music for iPad</div>
								<div class="cbp-l-grid-projects-desc">Graphic / Logo</div>
							</li>
							<li class="cbp-item graphic logo">
								<div class="cbp-caption">
									<div class="cbp-caption-defaultWrap">
										<img src="img/works/513.jpg" alt="" />
									</div>
									<div class="cbp-caption-activeWrap">
										<div class="cbp-l-caption-alignCenter">
											<div class="cbp-l-caption-body">

												<a href="img/works/513.jpg" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="Seemple* Music for iPad<br>by Tiberiu Neamu">view larger</a>
											</div>
										</div>
									</div>
								</div>
								<div class="cbp-l-grid-projects-title">Seemple* Music for iPad</div>
								<div class="cbp-l-grid-projects-desc">Graphic / Logo</div>
							</li>
							<li class="cbp-item identity web-design">
								<div class="cbp-caption">
									<div class="cbp-caption-defaultWrap">
										<img src="img/works/514.jpg" alt="" />
									</div>
									<div class="cbp-caption-activeWrap">
										<div class="cbp-l-caption-alignCenter">
											<div class="cbp-l-caption-body">

												<a href="img/works/514.jpg" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="Ski * Buddy<br>by Tiberiu Neamu">view larger</a>
											</div>
										</div>
									</div>
								</div>
								<div class="cbp-l-grid-projects-title">Ski * Buddy</div>
								<div class="cbp-l-grid-projects-desc">Identity / Web Design</div>
							</li>
							<li class="cbp-item identity web-design">
								<div class="cbp-caption">
									<div class="cbp-caption-defaultWrap">
										<img src="img/works/516.jpg" alt="" />
									</div>
									<div class="cbp-caption-activeWrap">
										<div class="cbp-l-caption-alignCenter">
											<div class="cbp-l-caption-body">

												<a href="img/works/516.jpg" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="Ski * Buddy<br>by Tiberiu Neamu">view larger</a>
											</div>
										</div>
									</div>
								</div>
								<div class="cbp-l-grid-projects-title">Ski * Buddy</div>
								<div class="cbp-l-grid-projects-desc">Identity / Web Design</div>
							</li>
						</ul>
					</div>

					<div class="cbp-l-loadMore-button">
						<a href="ajax/loadMore.html" class="cbp-l-loadMore-button-link">LOAD MORE</a>
					</div>

				</div>
			</div>
		</div>
	</section>

	{{--<footer></footer>--}}
	<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
	<!-- javascript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="js/jquery.min.js"></script>
	<script src="js/modernizr.custom.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.appear.js"></script>
	<script src="js/stellar.js"></script>
	<script src="js/classie.js"></script>
	<script src="js/uisearch.js"></script>
	<script src="js/jquery.cubeportfolio.min.js"></script>
	<script src="js/google-code-prettify/prettify.js"></script>
	<script src="js/animate.js"></script>
	<script src="js/custom.js"></script>


	</body>

	</html>
@endsection