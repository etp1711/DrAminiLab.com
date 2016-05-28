<?php include('./inc/header.php') ?>


	<section class="middle">

		<!-- Slidebar  -->
		<div class="container">
			<div class="slide">
	    		<div class="scroll">
	    			<div class="train">
						<?php
					$path = 'images/slide';
					$files = scandir($path);
					$pathpic = 'images/pics';
					$pics = scandir($pathpic);
					$len = 0;
					$i = 2;
					foreach($files as $file){
						$type = explode('.',$file);
						$type = strtolower(end($type));
						if($type ==  'jpg'){
							echo "<div ><img src='$path/$file' />";
							echo "<div ><img src='$pathpic/$pics[$i]' /></div>";
							echo '</div>';
							$len++;
							$i++;
						}
					}
				?>
			</div>
			
			<ul class="btn">
				<?php
					for($i = 0; $i<$len; $i++){
						echo "<li></li>";
					}
				?>
			</ul>
            <div class="bg-button"></div>
		</div>
        <div class="next"></div>
		<div class="prev"></div>
        
	</div>
</div>
		<!-- ......... -->

		<!-- 3 BOXXESS  -->
		<div class="threebox">
			<div class="content">



				<!-- LEFT -->
				<div class="left">
					<h1>اخبار و تازه ها</h1>
					<img src="images/1.jpg">
					<h5>مشاهده جدید ترین اخبار و تازه های آزمایشگاهی و پزشکی </h5>
					<a href="#.php" class="more" target="blank" >ادامه</a>
				</div>







			<!-- Middle -->
			<div class="middle">
				<h1>برنامه آزمایشها</h1>
				<img src="images/2.jpg">
				<h5>مراجعین محترم و آزمایشگاههای همکار<br /> آخرین نسخه برنامه انجام آزمایشها را در این قسمت میتوانید مشاهده نمائید .</h5>
				<a href="testplan.php" class="more" target="blank" >ادامه</a>
			</div>








				<!-- Right -->
				<div class="right">
					<h1>راهنمای بیماران و آزمایشگاههای همکار</h1>
					<img src="images/3.jpg">
					<h5>در این قسمت چگونگی  و شرایط  انجام آزمایشها و همچنین دانلود فرمهای مربوط به آزمایشگاه ها در این قسمت قابل ارائه است .     </h5>
					<a href="guide.php" class="more" target="blank">ادامه</a>
				</div>





				<div class="badboy"></div>
			</div>
		</div>
		<!-- ......... -->



		<!-- Text Part  -->
		<div class="iframe-part">
			<div class="content">
				
				<div class="right-part">
					<h5></h5>
						<li><span><a href="index-submenus/iframe-organs.php" target="ilink">سازمان ها و موسسات طرف قرارداد</a></span></li>	
						<li><span><a href="index-submenus/iframe-taghdir.php" target="ilink">گواهینامه ها و تقدیرنامه ها</a></span></li>
						
						<li><span><a href="index-submenus/iframe-sites.php" target="ilink">سایتهای مرتبط</a></span> 
						
				</div>


				<div class="left-part">
					<iframe class="frame" src="index-submenus/iframe-organs.php" name="ilink" scrolling="no"></iframe>
				</div>



			</div>
		</div>




		<!-- 
		<div class="news-text">
			<div class="bigtext">
				<p>همگام با<br /><span class="middle">تکنــولوژی امــروز ،<span/><br /><span class="third">به پشتوانه تجربه دیروز ...<span/></p>
				 <br /><a href="">ادامه</a> 
			</div>
				<a class="more" href=""></a>
		</div>											


		-->


		


		<!-- ......... -->
		<!-- Portion -->




<!--

<div class="forth">
						<div class="footslide"><h1>اخبار و تازه ها</h1>
							<ul>
								<li> <br /><br />
									  <a href="index-reception.php">دانلود فرمها</a>  
								<a download="index-downloads/gharbalgari.pdf"	href="index-downloads/gharbalgari.pdf">دانلود فرم پرسشنامه غربالگری</a><br /><br />
								<a download="index-downloads/ersali.pdf"		href="index-downloads/ersali.pdf">دانلود فرم آزمایشات ارسالی</a>			

								</li>
							</ul>
						</div>
					</div>




-->













			
	</section>




	
<?php include('./inc/footer.php') ?>