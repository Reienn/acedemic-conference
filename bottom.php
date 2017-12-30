<div class="container-fluid text-center withlogo">
			<h2>PARTNERS</h2><br>
			<div class="row is-flex">
				<div class="col-sm-3 col-xs-6">
				  <span class="glyphicon glyphicon-leaf"></span>
				  <h4>LOGO</h4>
				</div>
				<div class="col-sm-3 col-xs-6">
				  <span class="glyphicon glyphicon-certificate"></span>
				  <h4>LOGO</h4>
				</div>
				<div class="col-sm-3 col-xs-6">
				  <span class="glyphicon glyphicon-wrench"></span>
				  <h4>LOGO</h4>
				</div>
				<div class="col-sm-3 col-xs-6">
				  <span class="glyphicon glyphicon-leaf"></span>
				  <h4>LOGO</h4>
				</div>
				<div class="col-sm-3 col-xs-6">
				  <span class="glyphicon glyphicon-certificate"></span>
				  <h4>LOGO</h4>
				</div>
				<div class="col-sm-3 col-xs-6">
				  <span class="glyphicon glyphicon-wrench"></span>
				  <h4>LOGO</h4>
				</div>
				<div class="col-sm-3 col-xs-6">
				  <span class="glyphicon glyphicon-leaf"></span>
				  <h4>LOGO</h4>
				</div>
				<div class="col-sm-3 col-xs-6">
				  <span class="glyphicon glyphicon-certificate"></span>
				  <h4>LOGO</h4>
				</div>
				<div class="col-sm-3 col-xs-6">
				  <span class="glyphicon glyphicon-wrench"></span>
				  <h4>LOGO</h4>
				</div>
				<div class="col-sm-3 col-xs-6">
				  <span class="glyphicon glyphicon-leaf"></span>
				  <h4>LOGO</h4>
				</div>
				<div class="col-sm-3 col-xs-6">
				  <span class="glyphicon glyphicon-certificate"></span>
				  <h4>LOGO</h4>
				</div>
				<div class="col-sm-3 col-xs-6">
				  <span class="glyphicon glyphicon-wrench"></span>
				  <h4>LOGO</h4>
				</div>
			</div>
		</div>
		<div class="container-fluid text-center withlogo">
			<h2>SPONSORS</h2><br>
			<div class="row is-flex">
				<div class="col-sm-3 col-xs-6">
				  <span class="glyphicon glyphicon-leaf"></span>
				  <h4>LOGO</h4>
				</div>
				<div class="col-sm-3 col-xs-6">
				  <span class="glyphicon glyphicon-certificate"></span>
				  <h4>LOGO</h4>
				</div>
				<div class="col-sm-3 col-xs-6">
				  <span class="glyphicon glyphicon-wrench"></span>
				  <h4>LOGO</h4>
				</div>
				<div class="col-sm-3 col-xs-6">
				  <span class="glyphicon glyphicon-leaf"></span>
				  <h4>LOGO</h4>
				</div>
				<div class="col-sm-3 col-xs-6">
				  <span class="glyphicon glyphicon-certificate"></span>
				  <h4>LOGO</h4>
				</div>
				<div class="col-sm-3 col-xs-6">
				  <span class="glyphicon glyphicon-wrench"></span>
				  <h4>LOGO</h4>
				</div>
				<div class="col-sm-3 col-xs-6">
				  <span class="glyphicon glyphicon-wrench"></span>
				  <h4>LOGO</h4>
				</div>
				<div class="col-sm-3 col-xs-6">
				  <span class="glyphicon glyphicon-leaf"></span>
				  <h4>LOGO</h4>
				</div>
			</div>
		</div>
		<footer class="container-fluid text-center">
			<h2>Contact</h2>
			<p>konf.kognitywistyczna@gmail.com</p>
			<a href="#" class="fa fa-facebook-official"></a><br><br>
			<p>© 2018 CRACOW COGNITIVE SCIENCE CONFERENCE</p>
		</footer>
		<button class="btn btn-link" id="upButton"><a href="#top" title="Do góry"><span class="glyphicon glyphicon-chevron-up"></span></a></button>
		<script>
			$(document).ready(function(){
				
				//smooth scroll
				$("a").on('click', function(event) {
					if (this.hash !== "") {
						//event.preventDefault();
						var hash = this.hash;
						$('html, body').animate({
							scrollTop: $(hash).offset().top
						}, 800, function(){
						window.location.hash = hash;
						});
					}
				});
				
				//well slide
				$(window).scroll(function() {
				  $(".well").each(function(){
					var pos = $(this).offset().top;

					var winTop = $(window).scrollTop();
					if (pos < winTop + 600) {
					  $(this).addClass("slide");
					}
				  });
				});
				
				
			});
		</script>
	</body>
</html>