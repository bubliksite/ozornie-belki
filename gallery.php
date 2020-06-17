<section class="section section-sm section-fluid bg-default text-center" id="gallery">
	<div class="container col-lg-7 col-md-12">
		<h3 class="wow fadeInLeft neucha-font">Галерея</h3>
		<div class="isotope-filters isotope-filters-horizontal col-12">
			<ul class="isotope-filters-list nav nav-pills jusify-content-center" id="gallery-tab" role="tablist">
				<li class="nav-item"><a class="active nav-link" id="nav-gallery-tab" data-toggle="pill" href="#nav-gallery" role="tab" aria-controls="nav-gallery" aria-selected="true">Галерея</a>
				</li>
				<li class="nav-item"><a class="nav-link" id="nav-park-tab" data-toggle="pill" href="#nav-park" role="tab" aria-controls="nav-park" aria-selected="false">Парк</a></li>
				<li class="nav-item"><a class="nav-link" id="nav-attractions-tab" data-toggle="pill" href="#nav-attractions" role="tab" aria-controls="nav-attractions" aria-selected="false">Аттракционы</a></li>
				<li class="nav-item"><a class="nav-link" id="nav-animals-tab" data-toggle="pill" href="#nav-animals" role="tab" aria-controls="nav-animals" aria-selected="false">Мини-зоопарк</a></li>
			</ul>
		</div>

		<div id="gallery-tabContent" class="my-5 tab-content">
			<div class="tab-pane fade show active" id="nav-gallery" role="tabpanel" aria-labelledby="nav-gallery-tab">
				<!-- Desktop Gallery All-->
				<div class="row row-30 desktop-only d-flex" data-lightgallery="group">
				<!-- Картинки берутся из временной галлереи. При наполнении сайта переписать цикл (например создать массив в database.php для данной галлереи) -->
					<?php for ($i = 0; $i < count($allImages); $i++) : ?>
						<div class="col-sm-6 col-lg-4 col-xxl-3 thumbnail-classic">
							<div class="thumbnail-classic-figure"><a href="images/<?php echo $allImages[$i]->picture; ?>.jpg" data-lightgallery="item"><img src="images/<?php echo $allImages[$i]->thumbnail; ?>.jpg" alt="" width="420" height="350"/></a></div>
						</div>
					<?php endfor ?>

				</div>
				<!-- Mobile Gallery All-->
				<div class="row row-30 mobile-only">
					<div id="carouselMainGallery" class="carousel slide col-12" data-ride="carousel">
						<ol class="carousel-indicators">
							<!-- Картинки берутся из временной галлереи. При наполнении сайта переписать цикл (например создать массив в database.php для данной галлереи) -->
							<?php for ($i = 0; $i < count($allImages); $i++) : ?>
								<li data-target="#carouselMainGallery" data-slide-to="<?php echo $i; ?>" class="<?php echo ($i == 0) ? 'active' : '' ?>"></li>
							<?php endfor ?>

						</ol>
						<div class="carousel-inner">
							<!-- Картинки берутся из временной галлереи. При наполнении сайта переписать цикл (например создать массив в database.php для данной галлереи) -->
							<?php for ($i = 0; $i < count($allImages); $i++) : ?>
								<div class="carousel-item <?php echo ($i == 0) ? 'active' : '' ?>">
									<img src="images/<?php echo $allImages[$i]->picture; ?>.jpg" class="d-block w-100" alt="...">
								</div>
							<?php endfor ?>

						</div>
						<a class="carousel-control-prev" href="#carouselMainGallery" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-2x fa-arrow-left"></i></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#carouselMainGallery" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-2x fa-arrow-right"></i></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
				</div>
			</div>

			<div class="tab-pane fade" id="nav-park" role="tabpanel" aria-labelledby="nav-park-tab">
				<!-- Desktop Gallery Park -->
				<div class="row row-30 desktop-only d-flex" data-lightgallery="group">
					<!-- Здесь изменен цикл, чтобы фотографии из предыдущей вкладки не повторялись. При наполнении сайта переписать цикл (например создать массив в database.php для данной галлереи и обязательно заменить значения итератора) -->
					<?php for ($i = 4; $i < 8; $i++) : ?>
						<div class="col-sm-6 col-lg-4 col-xxl-3 thumbnail-classic">
							<div class="thumbnail-classic-figure"><a href="images/<?php echo $allImages[$i]->picture; ?>.jpg" data-lightgallery="item"><img src="images/<?php echo $allImages[$i]->thumbnail; ?>.jpg" alt="" width="420" height="350"/></a></div>
						</div>
					<?php endfor ?>

				</div>
				<!-- Mobile Gallery Park-->
				<div class="row row-30 mobile-only">
					<div id="carouselParkGallery" class="carousel slide col-12" data-ride="carousel">
						<ol class="carousel-indicators">
							<!-- Здесь изменен цикл, чтобы фотографии из предыдущей вкладки не повторялись. При наполнении сайта переписать цикл (например создать массив в database.php для данной галлереи и обязательно заменить значения итератора) -->
							<?php for ($i = 0; $i < 4; $i++) : ?>
								<li data-target="#carouselParkGallery" data-slide-to="<?php echo $i; ?>" class="<?php echo ($i == 0) ? 'active' : '' ?>"></li>
							<?php endfor ?>

						</ol>
						<div class="carousel-inner">
							<!-- Здесь изменен цикл, чтобы фотографии из предыдущей вкладки не повторялись. При наполнении сайта переписать цикл (например создать массив в database.php для данной галлереи и обязательно заменить значения итератора) -->
							<?php for ($i = 0; $i < 4; $i++) : ?>
								<div class="carousel-item <?php echo ($i == 0) ? 'active' : '' ?>">
									<img src="images/<?php echo $allImages[$i+4]->picture; ?>.jpg" class="d-block w-100" alt="...">
								</div>
							<?php endfor ?>

						</div>
						<a class="carousel-control-prev" href="#carouselParkGallery" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-2x fa-arrow-left"></i></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#carouselParkGallery" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-2x fa-arrow-right"></i></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
				</div>
			</div>

			<div class="tab-pane fade col-12" id="nav-attractions" role="tabpanel" aria-labelledby="nav-attractions-tab">
				<div class="row row-30">
					<div id="carouselAnimalGallery" class="carousel slide col-12" data-ride="carousel">
						<ol class="carousel-indicators">
							<!-- Здесь изменен цикл, чтобы фотографии из предыдущей вкладки не повторялись. При наполнении сайта переписать цикл (например создать массив в database.php для данной галлереи и обязательно заменить значения итератора) -->
							<?php for ($i = 0; $i < count($attractions); $i++) : ?>
								<li data-target="#carouselAnimalGallery" data-slide-to="<?php echo $i; ?>" class="<?php echo ($i == 0) ? 'active' : '' ?>"></li>
							<?php endfor ?>

						</ol>
						<div class="carousel-inner">
							<!-- Здесь изменен цикл, чтобы фотографии из предыдущей вкладки не повторялись. При наполнении сайта переписать цикл (например создать массив в database.php для данной галлереи и обязательно заменить значения итератора) -->
							<?php for ($i = 0; $i < count($attractions); $i++) : ?>
								<div class="carousel-item <?php echo ($i == 0) ? 'active' : '' ?>">
									<img src="images/<?php echo $attractions[$i]->name; ?>.jpg" class="d-block w-100" alt="...">
									<h6 class="mt-3 text-left" style="text-transform: unset;"><?php echo $attractions[$i]->title; ?></h6>
									<p class="text-muted text-left"><?php echo $attractions[$i]->description; ?></p>
								</div>
							<?php endfor ?>

						</div>
						<a class="carousel-control-prev" href="#carouselAnimalGallery" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-2x fa-arrow-left"></i></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#carouselAnimalGallery" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-2x fa-arrow-right"></i></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
				</div>
			</div>

			<div class="tab-pane fade col-12" id="nav-animals" role="tabpanel" aria-labelledby="nav-animals-tab">
				<div class="row row-30">
					<div id="carouselAttractionGallery" class="carousel slide col-12" data-ride="carousel">
						<ol class="carousel-indicators">
							<!-- Здесь изменен цикл, чтобы фотографии из предыдущей вкладки не повторялись. При наполнении сайта переписать цикл (например создать массив в database.php для данной галлереи и обязательно заменить значения итератора) -->
							<?php for ($i = 0; $i < count($animals); $i++) : ?>
								<li data-target="#carouselAttractionGallery" data-slide-to="<?php echo $i; ?>" class="<?php echo ($i == 0) ? 'active' : '' ?>"></li>
							<?php endfor ?>

						</ol>
						<div class="carousel-inner">
							<!-- Здесь изменен цикл, чтобы фотографии из предыдущей вкладки не повторялись. При наполнении сайта переписать цикл (например создать массив в database.php для данной галлереи и обязательно заменить значения итератора) -->
							<?php for ($i = 0; $i < count($animals); $i++) : ?>
								<div class="carousel-item <?php echo ($i == 0) ? 'active' : '' ?>">
									<img src="images/<?php echo $animals[$i]->image; ?>.jpg" class="d-block w-100" alt="...">
									<h6 class="mt-3 text-left" style="text-transform: unset;"><?php echo $animals[$i]->title; ?></h6>
									<p class="text-muted text-left"><?php echo $animals[$i]->description; ?></p>
								</div>
							<?php endfor ?>

						</div>
						<a class="carousel-control-prev" href="#carouselAttractionGallery" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-2x fa-arrow-left"></i></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#carouselAttractionGallery" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-2x fa-arrow-right"></i></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>