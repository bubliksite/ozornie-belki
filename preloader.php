<div class="preloader-new">
	<div class="preloader-body">
		<div class="cssload-container">
			<span><img src="images/acorn-preloader.png" alt="" style="transform: rotate(-90deg);"></span>
			<span><img src="images/acorn-preloader.png" alt=""></span>
			<span><img src="images/acorn-preloader.png" alt="" style="transform: rotate(180deg);"></span>
			<span><img src="images/acorn-preloader.png" alt="" style="transform: rotate(90deg);"></span>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(function(){
		$('.preloader-new').fadeIn(0);
		$(window).load(function() {
			$('.preloader-new').delay(250).fadeOut(150);
		});
	});
</script>