<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CSS-Scroll Logo Color Change</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	

	<div class="background">
	</div>

	<div class="section">
		<div class="section-img">
			<div class="section-img-inner" style="background-image: url('http://localhost/reyamicrocreamery/modules/ui/img/different_logo/Reyaa_Different Colours.png');">
				
			</div>
		</div>
		<div class="section-body">
			<div class="section-text">
				<h2>
					Adidas Predator 20+
				</h2>
				<img src="http://localhost/reyamicrocreamery/modules/ui/img/g1.jpg">
			</div>
		</div>
	</div>

	<div class="section">
		<div class="section-img">
			<div class="section-img-inner" style="background-image: url('http://localhost/reyamicrocreamery/modules/ui/img/different_logo/Reyaa_Different Colours - 1.png');">
				
			</div>
		</div>
		<div class="section-body">
			<div class="section-text">
				<h2>
					Adidas COPA 20+
				</h2>
				<img src="http://localhost/reyamicrocreamery/modules/ui/img/g2.jpg">
			</div>
		</div>
	</div>

	<div class="section">
		<div class="section-img">
			<div class="section-img-inner" style="background-image: url('http://localhost/reyamicrocreamery/modules/ui/img/different_logo/Reyaa_Different Colours - 2.png');">
				
			</div>
		</div>
		<div class="section-body">
			<div class="section-text">
				<h2>
					Adidas X 19+
				</h2>
				<img src="http://localhost/reyamicrocreamery/modules/ui/img/g3.jpg">
			</div>
		</div>
	</div>

	<div class="section">
		<div class="section-img">
			<div class="section-img-inner" style="background-image: url('http://localhost/reyamicrocreamery/modules/ui/img/different_logo/Reyaa_Different Colours - 3.png');">
				
			</div>
		</div>
		<div class="section-body">
			<div class="section-text">
				<h2>
					Adidas Predator 20.3 LL
				</h2>
				<img src="http://localhost/reyamicrocreamery/modules/ui/img/g4.jpg">
			</div>
		</div>
	</div>


	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>

	<script type="text/javascript">
		$(window).scroll(function(){
			let o=$(window),i=$("body"),t=$(".section"), s=o.scrollTop()+o.height()/3;
			t.each(function(){
				$(this).position().top<=s&&$(this).position().top+$(this).height()>s&&(i.removeClass(function(o,i){
					return i.match(/(^|\s)color-s\+/g) ||[].join("")
				}),$(".section").removeClass("active"),$(this).addClass("active"))
			})}
			).scroll();
	</script>
</body>
</html>