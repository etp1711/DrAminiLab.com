<div class="myconvs">
			<canvas class="mydesign" id="myCanvas" width="460" height="320">


				<script>

					var c = document.getElementById("myCanvas");
					var ctx = c.getContext("2d");
					


					ctx.moveTo(130,20);
					ctx.lineTo(330,20);


					ctx.lineTo(385,160);


					ctx.lineTo(330,300);


					ctx.lineTo(130,300);


					ctx.lineTo(75,160);



					ctx.lineTo(130,20);

	
					ctx.stroke();
				ctx.style= "background-color:red;"
					</script>
			</div>	
			


			section.middle .about .myconvs{
	margin:					0 auto;
	width: 					500px;
	min-width: 				350px;
	
}

section.middle .about .myconvs .mydesign{
	margin:					0 auto;
	width: 					500px;
	min-width: 				350px;
	border:					0px solid red;	

}