//Zepto
window.onload=function(){
	
var footslide = document.getElementsByClassName('footslide').item(0),
		trainfoot = footslide.getElementsByClassName('trainfoot').item(0),
		listsfoot = footslide.getElementsByClassName('btnsfoot').item(0).getElementsByTagName('li'),
		currentSlide = 0;

	(gotoslide = function (n) {
		if(n>listsfoot.length-1) n=0;
		if(n<0) n=listsfoot.length-1;
		trainfoot.style.left=(100*n)+'px';
		listsfoot.item(currentSlide).className = '';
		listsfoot.item(n).className = 'active';
		currentSlide=n;
	})(0); // set active of first li

	nextSlide = function(){
		gotoslide(currentSlide+1);
	}

	prvSlide = function(){
		gotoslide(currentSlide-1);
	}

	var autoPlayIv = false;
	(autoPlayStart = footslide.onmouseout = function(){
		if(autoPlayIv) return;
		autoPlayIv = setInterval(nextSlide, 5000);
	})(); // run auto play

	autoPlayStop = footslide.onmouseover = function(){
		clearInterval(autoPlayIv);
		autoPlayIv = false;
	}

	footslide.getElementsByClassName('next').item(0).onclick=nextSlide;
	footslide.getElementsByClassName('prv').item(0).onclick=prvSlide;

	for (var i=0; i<listsfoot.length; i++) {
		(function(j){
			listsfoot.item(j).onclick=function(){
				gotoslide(j);
			}
		})(i);
	}
























$(function(){

	var slides	= $('div.slide'),
		train	 = $('div.scroll div.train'),
		lists	 = $('div.scroll ul.btn li'),
		pics	  = $('div.scroll div.train > div  div'),
		current=0,picsize=940,flag=false;
	
	(gotoslide = function(n){

		if(n>=lists.length) n=0;
		if(n<0) n=lists.length-1;
		train.css({left : (-n*picsize)+'px'});
		pics.eq(current-1).removeClass('pic');
		lists.eq(current).removeClass('active');
		lists.eq(n).addClass('active');
		pics.eq(n).addClass('pic');
		current=n;

	})(0);
	
	
	(autoplay=function(){
		gotoslide(current+1);
	});
	
	(autoPlayStart=function(){
		if(flag) return;
		t=setInterval(autoplay,4000);	
	})();
	
	(autoPlayStop=function(){
		clearInterval(t);
		flag=false;
	});
	
	(prvSlide=function(){
		gotoslide(current-1);
	});
	
	$('div.slide .next').click(function(){
		gotoslide(current+1);
	});
	
	$('div.slide .prev').click(function(){
		gotoslide(current-1);
	});
	
	lists.click(function(){
		gotoslide($(this).index());
	});
	
	slides.mouseover(autoPlayStop);
	slides.mouseout(autoPlayStart);
	
})