<?php include('./inc/header.php') ?>
	<section class="index-reception">
		<div class="container">
			


			<h3>فرم آزمایشات ارسالی به آزمایشگاه دکتر امینی</h3>

			
			

			<form action="action_page.php">
				<br>
				<input class="azname" type="text" placeholder="آزمایشگاه ارسال کننده">
				<br /><br /><br /><br />
				
				<table>


					<tr>
						<th class="first">		نام و نام خانوادگی</th>	
						<th td class="second">	سن</th>	 	
						<th td class="third">	نوع نمونه</th>	
						<th td class="forth">	آزمایشات درخواستی</th>
						<th td class="five">	توضیحات<br /> (سابقه بیمار)</th>
						<th td class="six">		شماره پذیرش آزمایشگاه امینی</th>
					</tr>



					<tr class="answer">
						<td class="first">		<input type="text" >	</td>
						<td td class="second">	<input type="number" >	</td>
						<td td class="third">	<input type="text" >	</td>
						<td td class="forth">	<input type="text" >	</td>
						<td td class="five">	<input type="text" >	</td>	
						<td td class="six">		<input type="number" >	</td>
						
					</tr>

					


				</table>


				<br /><br /><br />
				<input type="reset" value="ارسال" >

				<input type="submit" value="پرینت" >


			</form> 






		</div>
	</section>
<?php include('./inc/footer.php') ?>