﻿<?php include('./inc/rotate/uphead.php') ?>
	<!-- For Rotate -->
	<style type="text/css">
	section.middle .employment{
     -webkit-transition:	all 900ms;}
	body.preload section.middle .employment{
        -webkit-transform:rotate(0deg) scale(0.2,0.2) translateY(0px) translateX(0px);}
</style><script type="text/javascript">window.onload=function(){document.body.className = '';}</script>
<!-- End Of Rotate -->
<?php include('./inc/rotate/downhead.php') ?>
<!--End Of Header With Rotate -->



	<section class="middle">
		<div class="employment">
			<div class="contain">
				<h2>آزمایشگاه دکتر امینی همواره به دنبال نیروهای متخصص و متعهد آزمایشگاهی می باشد.<br />در صورت تمایل برای همکاری در آزمایشگاه لطفا موارد ذیل را تکمیل نمائید .</h2>
				<br /><br /><br />
				<form action="employment-mail.php" name="employment" id="employment" method="post" target="ifrm">
				<div class="form-div">
						<div class="first">
							<h3>مشخصات و اطلاعات تماس</h3>
							<input name="namein" id="namein" class="namein em-name"   type="text" placeholder="نام :" />
							<input name="familin" id="familin" class="familin em-family" type="text" placeholder="نام خانوادگی :" />
							<input name="birthin" id="birthin" class="birthin em-city"   type="text" placeholder="محل تولد :" />
							<input name="agein" id="agein" class="agein em-age"    type="number" min="1340" max="1373"placeholder="سال تولد :"  />

							<input name="telin" id="telin" class="telin em-phone"        type="text" placeholder="تلفن :" />
							<input name="mobin" id="mobin" class="mobin em-mobile" 		 type="text" placeholder="همراه :" />
							<input name="emailin" id="emailin" class="emailin em-email"  type="text" placeholder="ایمیل :" />
							<input name="adresin" id="adresin" class="adresin em-adress" type="text" placeholder="آدرس :" />	
						
						</div>
						<div class="second">
							<h3>شرایط همکاری</h3>
							<select name="conditin" id="conditin" class="conditin"><!-- Jensiat -->
								<option value="0">وضعیت تاهل</option>
	  							<option class="color">متاهل</option>
	  							<option class="color">مجرد</option>
	  						</select>

							<select name="evidencein" id="evidencein" class="evidencein"><!-- Madrak -->
								<option value="0" >مدرک تحصیلی</option>
	  							<option value="1"	class="color">فوق دیپلم</option>
	  							<option value="2"	class="color">لیسانس</option>
	  							<option value="3"	class="color">فوق لیسانس</option>
	  							<option value="4"	class="color">دکترا</option>
							</select>

							<input name="Field-Study" id="study" class="s"   type="text" placeholder="رشته تحصیلی :" />
							<input name="Field-Study" id="study" class="s"   type="text" placeholder="نام دانشگاه :" />
							<input name="average" id="average" class="average-ma"   type="text" placeholder="معدل :" />

							<select name="partin" id="partin" class="partin"><!-- Bakhsh -->
								<option value="0">بخش مورد نظر :</option>
	  							<option class="color">انگل شناسی</option>
	  							<option class="color">هورمون شناسي</option>
	  							<option class="color">ميكروب شناسی</option>
	  							<option class="color">هماتولوژی</option>
	  							<option class="color">پاتولوژی</option>
	  							<option class="color">بیوشیمی</option>
	  							<option class="color">نمونه گیری</option>
	  							<option class="color">پذیرش</option>
							</select>

							<select name="shiftin" id="shiftin" class="shiftin"><!-- Shift -->
								<option value="0">شیفت مورد نظر :</option>
	  							<option class="color">صبح</option>
	  							<option class="color">بعد از ظهر</option>
	  							<option class="color">مهم نیست</option>
	  						</select>

						</div>

						
						<!-- Sabegheh -->
						<div class="description">
							<textarea name="historyin" id="historyin" class="historyin r-hist" placeholder="سابقه :"></textarea>
							<textarea name="explainin" id="explainin" class="explainin l-desc" placeholder="توضیحات :"></textarea>

						</div>

						<div class="btns">
							<input id="keys" type="submit" value="ارسال" class="submit"/>
							<input id="keys" type="reset" value="جدید" class="reset"/>
						</div>
				
				</div>
				</form>
				
			</div>
		</div>
	</section>	
	
<?php include('./inc/footer.php') ?>