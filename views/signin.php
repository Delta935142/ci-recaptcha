<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo $this->lang->line('sign_title'); ?></title>

<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/css/styles.css" rel="stylesheet">
<script src='https://www.google.com/recaptcha/api.js'></script>
<!--[if lt IE 9]>
<script src="<?php echo base_url(); ?>assets/js/html5shiv.js"></script>
<script src="<?php echo base_url(); ?>assets/js/respond.min.js"></script>
<![endif]-->

</head>

<body>
	
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading"><?php echo $this->lang->line('sign_title'); ?></div>
				<div class="panel-body">							
					<form id="login_form" role="form" action="<?php echo base_url().'sign/in/'; ?>" method="POST">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="<?php echo $this->lang->line('sign_email'); ?>" id="email" name="email" type="email" autofocus="">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="<?php echo $this->lang->line('sign_password'); ?>" id="password" name="password" type="password">
							</div>
							<div class="form-group">
								<div class="g-recaptcha" data-sitekey="site_key"></div>
							</div>
							<div class="checkbox">
								<label>
									<input id="remember" name="remember" type="checkbox"><?php echo $this->lang->line('sign_rememberme'); ?>
								</label>
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary"><?php echo $this->lang->line('sign_in'); ?></button>
						</fieldset>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	
	
		

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/jquery.cookie.js"></script>
	<script>
		$('#login_form').submit(function() {
			if ($('#remember').prop('checked')) {
				var email = $('#email').val();
				$.cookie('email', email, { expires: 14 });
				$.cookie('remember', true, { expires: 14 });
			} else {
				$.cookie('email', null);
				$.cookie('remember', null);
			}
		});


		$(document).ready(function() {
			var remember = $.cookie('remember');
			if ( remember == 'true' ) {
				var email = $.cookie('email');
				$('#email').attr("value", email);
				$('#remember').prop("checked", true);
			}
		});

		!function ($) {
			$(document).on("click","ul.nav li.parent > a > span.icon", function(){		  
				$(this).find('em:first').toggleClass("glyphicon-minus");	  
			}); 
			$(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>	
</body>

</html>
