
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
					<a href="guide.php" class="more" target="blank">ادامه</a>
				</div>

				<div class="right">
					<h1>بخشهای آزمایشگاه</h1>
					<img src="images/right.jpg">
					<h5>در این بـخش به معرفـی و نمایش بخشـهای مختلف آزمایشـــــگاه می پردازیم </h5>
					<a href="labparts.php" class="more" target="blank">ادامه</a>
				</div>
				<div class="badboy"></div>
			</div>
		</div>
		<!-- ......... -->



		<!-- Text Part  -->
		<div class="text-part">
			<div class="content">
				<div class="right-part">
					<h5>خط مشی آزمایشگاه خط مشی آزمایشگاه خط مشی آزمایشگاه خط مشی آزمایشگاهخط مشی آزمایشگاه خط مشی آزمایشگاه خط مشی آزمایشگاه خط مشی آزمایشگاهخط مشی آزمایشگاه خط مشی آزمایشگاه خط مشی آزمایشگاه خط مشیه</h5>
					<li><span><a href="">سازمانهای طرف قرار داد</a></span></li>
					<li><span>تقدیر نامه ها</span></li>
					<li><span>خط مشی آزمایشگاه خط مشی آزمایشگاه خط مشی آزمایشگاه خط مشی آزمایشگاه</span></li>
					<li><span>خط مشی آزمایشگاه خط مشی آزمایشگاه خط مشی آزمایشگاه خط مشی آزمایشگاه</span></li>
					<li><span>خط مشی آزمایشگاه خط مشی آزمایشگاه خط مشی آزمایشگاه خط مشی آزمایشگاه</span></li>			
				</div>
				<div class="left-part">
					<div class="bigtext">
						<p>همگام با<br /><span class="middle">تکنــولوژی امــروز ،<span/><br /><span class="third">به پشتوانه تجربه دیروز<span/></p>
						<br /><a href="">ادامه</a>
					</div>
					<a class="more" href=""></a>
				</div>
			</div>
		</div>
		<!-- ......... -->
		<!-- Portion -->




		<!--  5 LINES   -->
		<div class="lines">
			<h3>سازمان های طرف قرار داد</h3>


			<div class="organ">
				<ul>
					<li><img src="images/organ/1.jpg"></li>
					<li><img src="images/organ/2.jpg"></li>
					<li><img src="images/organ/3.jpg"></li>
					<li><img src="images/organ/4.jpg"></li>
					<li><img src="images/organ/5.jpg"></li>
					<li><img src="images/organ/6.jpg"></li>
					<li><img src="images/organ/7.jpg"></li>
					<li><img src="images/organ/8.jpg"></li>
					<li><img src="images/organ/9.jpg"></li>
					<li><img src="images/organ/10.jpg"></li>
					<li><img src="images/organ/11.jpg"></li>
				</ul>

			</div>



			<div class="taghdir">
				<ul>
					<li><img src="images/taghdir/1.jpg"></li>
					<li><img src="images/taghdir/2.jpg"></li>
					<li><img src="images/taghdir/3.jpg"></li>
					
				</ul>

			</div>

		</div>


	
	</section>




	
<?php include('./inc/footer.php') ?>