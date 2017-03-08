<?php get_header(); ?>

<div class="container">

	<!-- main slider carousel -->
	<div class="row">
			<div class="col-md-12" id="slider">

							<div class="col-md-12" id="carousel-bounding-box">
									<div id="myCarousel" class="carousel slide">
											<!-- main slider carousel items -->
											<div class="carousel-inner">
													<div class="active item" data-slide-number="0">
															<img src="http://placehold.it/1200x480&amp;text=one" class="img-responsive">
													</div>
													<div class="item" data-slide-number="1">
														<img src="http://placehold.it/1200x480/888/FFF" class="img-responsive">
													</div>
													<div class="item" data-slide-number="2">
															<img src="http://placehold.it/1200x480&amp;text=three" class="img-responsive">
													</div>
													<div class="item" data-slide-number="3">
															<img src="http://placehold.it/1200x480&amp;text=four" class="img-responsive">
													</div>
													<div class="item" data-slide-number="4">
															<img src="http://placehold.it/1200x480&amp;text=five" class="img-responsive">
													</div>
													<div class="item" data-slide-number="5">
															<img src="http://placehold.it/1200x480&amp;text=six" class="img-responsive">
													</div>
													<div class="item" data-slide-number="6">
															<img src="http://placehold.it/1200x480&amp;text=seven" class="img-responsive">
													</div>
													<div class="item" data-slide-number="7">
															<img src="http://placehold.it/1200x480&amp;text=eight" class="img-responsive">
													</div>
											</div>
											<!-- main slider carousel nav controls -->
											<!-- <a class="carousel-control left" href="#myCarousel" data-slide="prev">‹</a> -->

											<!-- <a class="carousel-control right" href="#myCarousel" data-slide="next">›</a> -->
									</div>
							</div>

			</div>


			<!-- thumb navigation carousel -->
			<div class="col-md-12 hidden-sm hidden-xs" id="slider-thumbs">

					<!-- thumb navigation carousel items -->
				<ul class="list-inline carousel-thumbnails">
				<li> <a id="carousel-selector-0" class="selected">
					<img src="http://placehold.it/80x60&amp;text=one" class="img-responsive">
				</a></li>
				<li> <a id="carousel-selector-1">
					<img src="http://placehold.it/80x60&amp;text=two" class="img-responsive">
				</a></li>
				<li> <a id="carousel-selector-2">
					<img src="http://placehold.it/80x60&amp;text=three" class="img-responsive">
				</a></li>
				<li> <a id="carousel-selector-3">
					<img src="http://placehold.it/80x60&amp;text=four" class="img-responsive">
				</a></li>
							<li> <a id="carousel-selector-4">
					<img src="http://placehold.it/80x60&amp;text=five" class="img-responsive">
				</a></li>
				<li> <a id="carousel-selector-5">
					<img src="http://placehold.it/80x60&amp;text=six" class="img-responsive">
				</a></li>
				<li> <a id="carousel-selector-6">
					<img src="http://placehold.it/80x60&amp;text=seven" class="img-responsive">
				</a></li>
				<li> <a id="carousel-selector-7">
					<img src="http://placehold.it/80x60&amp;text=eight" class="img-responsive">
				</a></li>
					</ul>

			</div>
	</div>
	<!--/main slider carousel-->

</div>
<?php get_footer(); ?>

<script type="text/javascript">
$('#myCarousel').carousel({
	interval: 4000
});

// handles the carousel thumbnails
$('[id^=carousel-selector-]').click( function(){
	var id_selector = $(this).attr("id");
	var id = id_selector.substr(id_selector.length -1);
	id = parseInt(id);
$('#myCarousel').carousel(id);
$('[id^=carousel-selector-]').removeClass('selected');
$(this).addClass('selected');
});

// when the carousel slides, auto update
$('#myCarousel').on('slid', function (e) {
	var id = $('.item.active').data('slide-number');
	id = parseInt(id);
$('[id^=carousel-selector-]').removeClass('selected');
$('[id=carousel-selector-'+id+']').addClass('selected');
});
</script>
