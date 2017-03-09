<?php get_header(); ?>

<div class="container">

	<!-- main slider carousel -->
	<div class="row">
			<div class="col-md-12" id="slider">

				<div class="col-md-9 col-md-offset-1" id="carousel-bounding-box">
						<div id="myCarousel" class="carousel slide">
								<!-- main slider carousel items -->
								<div class="carousel-inner">
										<div class="active item" data-slide-number="0">
												<img src=" https://kellydupratweddingplanner.files.wordpress.com/2016/12/77.jpg?w=870&h=580" class="img-responsive" height="400px">
										</div>
										<div class="item" data-slide-number="1">
											<img src="https://kellydupratweddingplanner.files.wordpress.com/2016/11/pre-reception-87.jpg?w=870&h=580" class="img-responsive">
										</div>
										<div class="item" data-slide-number="2">
												<img src="https://kellydupratweddingplanner.files.wordpress.com/2016/09/binhto-eric-wedding-finals-0505.jpg?w=870&h=580" class="img-responsive">
										</div>
										<div class="item" data-slide-number="3">
												<img src="https://kellydupratweddingplanner.files.wordpress.com/2014/12/thyeddiewed_104.jpg?w=870&h=580" class="img-responsive">
										</div>
										<div class="item" data-slide-number="4">
												<img src="https://kellydupratweddingplanner.files.wordpress.com/2014/12/thyeddiewed_023.jpg?w=870&h=580" class="img-responsive">
										</div>
										<div class="item" data-slide-number="5">
												<img src="https://kellydupratweddingplanner.files.wordpress.com/2015/08/chantel-and-ryan-wedding-4.jpg?w=870&h=580" class="img-responsive">
										</div>
										<div class="item" data-slide-number="6">
												<img src="https://kellydupratweddingplanner.files.wordpress.com/2016/09/jamie-and-elliot-wedding-55.jpg?w=870&h=580" class="img-responsive">
										</div>
										<div class="item" data-slide-number="7">
												<img src="https://kellydupratweddingplanner.files.wordpress.com/2016/06/i-2wtmts5-l.jpg?w=870" class="img-responsive">
										</div>
								</div>
						</div>
				</div>

			</div>


			<!-- thumb navigation carousel -->
			<div class="col-md-12 hidden-sm hidden-xs" id="slider-thumbs">

					<!-- thumb navigation carousel items -->
				<ul class="list-inline carousel-thumbnails">
				<li> <a id="carousel-selector-0" class="selected">
					<img src="https://kellydupratweddingplanner.files.wordpress.com/2016/12/77.jpg?w=870&h=580" class="img-responsive thumbnail-carousel">
				</a></li>
				<li> <a id="carousel-selector-1">
					<img src="https://kellydupratweddingplanner.files.wordpress.com/2016/11/pre-reception-87.jpg?w=870&h=580" class="img-responsive thumbnail-carousel">
				</a></li>
				<li> <a id="carousel-selector-2">
					<img src="https://kellydupratweddingplanner.files.wordpress.com/2016/09/binhto-eric-wedding-finals-0505.jpg?w=870&h=580" class="img-responsive thumbnail-carousel">
				</a></li>
				<li> <a id="carousel-selector-3">
					<img src="https://kellydupratweddingplanner.files.wordpress.com/2014/12/thyeddiewed_104.jpg?w=870&h=580" class="img-responsive thumbnail-carousel">
				</a></li>
							<li> <a id="carousel-selector-4">
					<img src="https://kellydupratweddingplanner.files.wordpress.com/2014/12/thyeddiewed_023.jpg?w=870&h=580" class="img-responsive thumbnail-carousel">
				</a></li>
				<li> <a id="carousel-selector-5">
					<img src="https://kellydupratweddingplanner.files.wordpress.com/2015/08/chantel-and-ryan-wedding-4.jpg?w=870&h=580" class="img-responsive thumbnail-carousel">
				</a></li>
				<li> <a id="carousel-selector-6">
					<img src="https://kellydupratweddingplanner.files.wordpress.com/2016/09/jamie-and-elliot-wedding-55.jpg?w=870&h=580" class="img-responsive thumbnail-carousel">
				</a></li>
				<li> <a id="carousel-selector-7">
					<img src="https://kellydupratweddingplanner.files.wordpress.com/2016/06/i-2wtmts5-l.jpg?w=870" class="img-responsive thumbnail-carousel">
				</a></li>
					</ul>

			</div>
	</div>
	<!--/main slider carousel-->

</div>
<?php get_footer(); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script type="text/javascript" src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>

<script type="text/javascript">
$(document).ready(function(){
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
		console.log('id',id)
		$('[id^=carousel-selector-]').removeClass('selected');
		$('[id=carousel-selector-'+id+']').addClass('selected');
	});

})
</script>
