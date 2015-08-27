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

				<div class="left">
					<h1>برنامه آزمایشها</h1>
					<img src="images/left.jpg">
					<h5>مراجعین و سایر آزمایشگاه ها برنامه انجام آزمایشها را در این قسمت میتوانند مشاهده نمایند </h5>
					<a href="testplan.php" class="more" target="blank" >ادامه</a>
				</div>

				<div class="middle">
					<h1>راهنمای بیماران</h1>
					<img src="images/middle.jpg">
					<h5>مراجعین گرامی در این قسمت میتوانید از نحوه چگونگی انجام آزمایشها و شرایط لازم آزمایشها اطلاع یابید  </h5>
					<a href="#guide.php" class="more" target="blank">ادامه</a>
				</div>

				<div class="right">
					<h1>آزمایشهای جدید</h1>
					<img src="images/right.jpg">
					<h5>در این بـخش به معرفـی و نمایش آزمایشهای جدید آزمایشـــــگاه می پردازیم </h5>
					<a href="#labparts.php" class="more" target="blank">ادامه</a>
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
						<li><span>چارت سازمانی</span></li>
						<li><span>مقادیر بحرانی بخش ها</span></li>	
						<li><span>سوالات متداول</span></li>	
						<li><span><a href="index-submenus/iframe-sites.php" target="ilink">سایتهای مرتبط</a></span> 
				</div>


				<div class="left-part">
					<iframe class="frame" src="index-submenus/iframe-organs.php" name="ilink" scrolling="no"></iframe>
				</div>



			</div>
		</div>



		<div class="news-text">
			<div class="bigtext">
				<p>همگام با<br /><span class="middle">تکنــولوژی امــروز ،<span/><br /><span class="third">به پشتوانه تجربه دیروز ...<span/></p>
				<!--   <br /><a href="">ادامه</a>  -->
			</div>
				<a class="more" href=""></a>
		</div>											



		


		<!-- ......... -->
		<!-- Portion -->




			
	</section>




	
<?php include('./inc/footer.php') ?>