<div class="slider sliderv2">
	<div class="container">
		<div class="row">
			<div class="slider-single-item">

				<?php foreach ($movies as $movie) : ?>
					<div class="movie-item">
						<div class="row">
							<div class="col-md-8 col-sm-12 col-xs-12">
								<div class="title-in">
									<div class="cate">
										<?php $colors = array("blue", "yell", "orange"); ?>
										<?php $i = 0; ?>
										<?php foreach (explode("/", $movie->genre) as $genre) : ?>
										<?php echo '<span class="' . $colors[$i] . '">' . $genre . '</span>'; ?>
										<?php $i++; ?>
										<?php endforeach; ?>
									</div>
									<h1>
										<?php echo '<a href="MovieSingleController?id=' . $movie->id . '">' . $movie->engname . '<br/>' . $movie->thainame . '</a>' ?>
									</h1>
									<br/><br/>
									<div class="mv-details">
										<p>
											<i class="ion-android-star"></i>
											<?php foreach ($scores as $score) : ?>
												<?php if ($score['movieid'] == $movie->id) : ?>
													<?php echo '<span>' . $score['avg'] / 10 . '</span> /10</p>' ?>
												<?php endif; ?>
											<?php endforeach; ?>
										<ul class="mv-infor">
											<li> ความยาว : <?php echo $movie->runtime; ?> นาที</li>
											<li> ความเหมาะสม : <?php echo $movie->age; ?> </li>
											<li> วันที่เข้าฉาย : <?php echo $movie->date; ?></li>
										</ul>
									</div>
									<div class="btn-transform transform-vertical">
										<div>
											<a href="<?php echo site_url('MovieSingleController?id=' . $movie->id) ?>" class="item item-1 redbtn">เพิ่มเติม</a>
										</div>
										<div>
											<a href="<?php echo site_url('MovieSingleController?id=' . $movie->id) ?>" class="item item-2 redbtn hvrbtn">เพิ่มเติม</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-12 col-xs-12">
								<div class="mv-img-2">
									<a href="MovieSingleController?id=<?php echo $movie->id ?>">
										<?php echo '<img height="414" width="270" src="data:image/jpeg;base64,' . base64_encode($movie->poster) . '"/>'; ?>
									</a>
								</div>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</div>
<div class="movie-items  full-width">
	<div class="row">
		<div class="col-md-12">
			<div class="title-hd">
				<h2>ภาพยนตร์</h2>
				<a href="SearchController?search=" class="viewall">ดูทั้งหมด
					<i class="ion-ios-arrow-right"></i>
				</a>
			</div>
			<div class="tabs">
				<ul class="tab-links">
					<li class="active">
						<a href="#tab1-h2"># เมษายน 2018</a>
					</li>
				</ul>
				<div class="tab-content">
					<div id="tab1-h2" class="tab active">
						<div class="row">
							<div class="slick-multiItem2">
								<?php foreach ($movies as $movie) : ?>
								<div class="slide-it">
										<div class="movie-item">
											<div class="mv-img">
												<?php echo '<img src="data:image/jpeg;base64,' . base64_encode($movie->poster) . '"/>'; ?>
											</div>
											<div class="hvr-inner">
												<a href="<?php echo site_url('MovieSingleController?id=' . $movie->id) ?>"> เพิ่มเติม
													<i class="ion-android-arrow-dropright"></i>
												</a>
											</div>
											<div class="title-in">
												<p>
													<i class="ion-android-star"></i>
													<?php foreach ($scores as $score) : ?>
												<?php if ($score['movieid'] == $movie->id) : ?>
													<?php echo '<span>' . $score['avg'] / 10 . '</span> /10' ?>
												<?php endif; ?>
											<?php endforeach; ?>
												</p>
											</div>
										</div>
									</div>
								<?php endforeach; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="trailers full-width">
	<div class="row ipad-width">
		<div class="col-md-9 col-sm-12 col-xs-12">
			<div class="title-hd">
				<h2>ตัวอย่างภาพยนตร์</h2>
			</div>
			<div class="videos">
				<div class="slider-for-2 video-ft">
					<?php foreach ($trailers as $trailer) : ?>
						<div>
							<?php echo '<iframe class="item-video" src="" data-src="https://www.youtube.com/embed/' . $trailer->link . '"></iframe>'; ?>
						</div>
					<?php endforeach; ?>
				</div>
				<div class="slider-nav-2 thumb-ft">
					<?php foreach ($movies as $movie) : ?>
						<?php foreach ($trailers as $trailer) : ?>
							<?php if ($movie->trailerid == $trailer->id) : ?>
								<div class="item">
									<div class="trailer-img">
										<?php echo '<img src=data:image/jpeg;base64,' . base64_encode($trailer->icon) . '>'; ?>
									</div>
									<div class="trailer-infor">
										<?php echo '<h4 class="desc">' . $movie->engname . '</h4>' ?>
										<?php echo '<p>' . $trailer->duration . '</p>' ?>
									</div>
								</div>
							<?php	endif; ?>
						<?php endforeach; ?>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
		<div class="col-md-3 col-sm-12 col-xs-12">
			<div class="sidebar">
				<div class="celebrities">
					<h4 class="sb-title">อันดับภาพยนตร์ทําเงิน ประจําสัปดาห์</h4>
					<?php foreach ($grossing as $gross) : ?>
					<?php foreach ($movies as $movie) : ?>
					<?php if ($gross->id == $movie->id) : ?>
						<div class="celeb-item">
							<a href="<?php echo site_url('MovieSingleController?id=' . $movie->id) ?>">
								<?php echo '<img width="50" src="data:image/jpeg;base64,' . base64_encode($movie->poster) . '"/>'; ?>
							</a>
							<div class="celeb-author">
								<h6>
									<?php echo '<a href="#">' . $movie->engname . '</a>' ?>
								</h6>
								<?php echo '<span>' . $movie->weekgross . ' ล้านบาท ( รายได้รวม ' . $movie->totalgross . ' ล้าน )</span>' ?>
							</div>
						</div>
							<?php endif; ?>
							<?php endforeach; ?>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>
</div>