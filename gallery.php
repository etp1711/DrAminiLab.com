<?php include('./inc/rotate/uphead.php') ?>
	<!-- For Rotate -->
	<style type="text/css">
	section.Ajaxloader div.gallery{
     -webkit-transition:	all 900ms;}
	body.preload section.Ajaxloader div.gallery{
        -webkit-transform:rotate(0deg) scale(0.2,0.2) translateY(0px) translateX(5000px);}
</style><script type="text/javascript">window.onload=function(){document.body.className = '';}</script>
<!-- End Of Rotate -->
<?php include('./inc/rotate/downhead.php') ?>


	<section class="Ajaxloader">
		<div class="gallery" id="loader">
			<ul>
				<li>
					<a href="./images/gallery/1.jpg" rel="prettyphoto[gallery1]" title="آزمایشگاه دکتر امینی">
						<img src="./images/gallery/1.jpg" alt="">
						<div class="effe"></div>
					</a>
					<p></p>
				</li>
				<li>
					<a href="./images/gallery/2.jpg" rel='prettyphoto[gallery1]' title="آزمایشگاه دکتر امینی">
						<img src="./images/gallery/2.jpg" alt="">
						<div class="effe"></div>
					</a>
					<p></p>
				</li>
				<li>
					<a href="./images/gallery/3.jpg" rel='prettyphoto[gallery1]' title="آزمایشگاه دکتر امینی">
						<img src="./images/gallery/3.jpg" alt="">
						<div class="effe"></div>
					</a>
					<p></p>
				</li>
				<li>
					<a href="./images/gallery/4.jpg" rel='prettyphoto[gallery1]' title="آزمایشگاه دکتر امینی">
						<img src="./images/gallery/4.jpg" alt="">
						<div class="effe"></div>
					</a>
					<p></p>
				</li>
				<li>
					<a href="./images/gallery/5.jpg" rel='prettyphoto[gallery1]' title="آزمایشگاه دکتر امینی">
						<img src="./images/gallery/5.jpg" alt="" >
						<div class="effe"></div>
					</a>
					<p></p>
				</li>
				<li>
					<a href="./images/gallery/6.jpg" rel='prettyphoto[gallery1]' title="آزمایشگاه دکتر امینی">
						<img src="./images/gallery/6.jpg" alt="">
						<div class="effe"></div>
					</a>
					<p></p>
				</li>
				<li>
					<a href="./images/gallery/7.jpg" rel='prettyphoto[gallery1]' title="آزمایشگاه دکتر امینی">
						<img src="./images/gallery/7.jpg" alt="">
						<div class="effe"></div>
					</a>
					<p></p>
				</li>
				<li>
					<a href="./images/gallery/8.jpg" rel='prettyphoto[gallery1]' title="آزمایشگاه دکتر امینی">
						<img src="./images/gallery/8.jpg" alt="">
						<div class="effe"></div>
					</a>
					<p></p>
				</li>
				<li>
					<a href="./images/gallery/9.jpg" rel='prettyphoto[gallery1]' title="آزمایشگاه دکتر امینی">
						<img src="./images/gallery/9.jpg" alt="">
						<div class="effe"></div>
					</a>
					<p></p>
				</li>
			</ul>
			<div class="badboy"></div>
			<div class="number-page">
				<a href="gallery.php">1</a>
				<a href="gallery-2.php">2</a>
				<a href="gallery-3.php">3</a>
			</div>
			<div class="badboy"></div><br />
		</div>
	</section>

<script type="text/javascript" charset="utf-8">
  $(document).ready(function(){
    $("a[rel^='prettyphoto']").prettyPhoto({
    	autoplay_slideshow: true,
    });
  });
</script>


	
<?php include('./inc/footer.php') ?>