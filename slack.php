<?php
	define('SUBDOMAIN','trippkiproject');
	define('TOKEN','xoxp-195992848498-195992848546-235577021173-7e33d3bff91b330fb1e36e43f59b8b6e');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Trippki</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/img/favicon.ico">
	<?php include("inc/css.php"); ?>
	<?php include("inc/js.php"); ?>
  </head>

  <body class="front">
  <?php include("./inc/tracker-pixel.php"); ?>

<div class="wrap wow fadeIn" data-wow-duration=".1s" data-wow-delay="0s">
<div class="row justify-content-center">
  <div class="col-md-12">

<?php include("inc/header.php"); ?>

		<div style="text-align: center; margin-top: 80px; margin-bottom: 180px">
			<div>
				<img src="assets/img/slack.svg" style="width: 300px; height: 100px;" />
			</div>



			<h2 style=" margin-top: 45px">Join <?=SUBDOMAIN?> on Slack!</h2>

			<?php
				$showform = false;
				$error = false;
				if (isset($_POST['first'])){
					if (strlen($_POST['first']) > 1 && strlen($_POST['last']) > 1 && strlen($_POST['mail']) > 5){
						sendForm();
					} else {
						$showform = true;
						$error = true;
					}
				} else {
					$showform = true;
				}

			if ($showform){
				if ($error){
			?>

			<p>
				Please fill in all fields
			</p>

			<?php
					}

				showForm();
				}
			?>
		</div>





  </div>
 </div>
</div><!--/End  wrapper -->

	<?php include("inc/footer.php"); ?>

  </body>
</html>



<?php

	function sendForm(){
		$email = $_POST['mail'];
		$first = $_POST['first'];
		$last = $_POST['last'];

     $slackInviteUrl='https://'.SUBDOMAIN.'.slack.com/api/users.admin.invite?t='.time();

	    $fields = array(
	            'email' => urlencode($email),
	            'first_name' => urlencode($first),
	            'token' => TOKEN,
	            'set_active' => urlencode('true'),
	            '_attempts' => '1'
	    );

	    // url-ify the data for the POST
	            $fields_string='';
	            foreach($fields as $key=>$value) { $fields_string .= $key.'='.$value.'&'; }
	            rtrim($fields_string, '&');

	    // open connection
	            $ch = curl_init();

	    // set the url, number of POST vars, POST data
	            curl_setopt($ch,CURLOPT_URL, $slackInviteUrl);
	            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	            curl_setopt($ch,CURLOPT_POST, count($fields));
	            curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);

	    // exec
	            $replyRaw = curl_exec($ch);
	            $reply=json_decode($replyRaw,true);
	            if($reply['ok']==false) {
		            	echo '<p class="mtb" style="color: #9d3d3d">';
	                    echo 'Something went wrong, try again!';
	                    echo '</p>';
	                    showForm();
	            }
	            else {
		            	echo '<p class="mtb" style="color: #719E6F">';
	                    echo 'Invited successfully. Check your email. It should arrive within a couple minutes';
	                    echo '</p>';
	            }

	    // close connection
	            curl_close($ch);
	}

	function showForm(){

		?>

			<form method="post">
			<div class="form-wrapper">
			<div class="row">
				<div class="col-md-4">

				<p>
					First Name
				</p>
					</div>
					<div class="col-md-8">
				<input type="text" name="first" style="width: 100%; border-color: #3eb890; " <?php
		if(isset($_POST['first'])){
		echo strlen($_POST['first']) > 0 ? 'value="'.$_POST['first'].'"' : '';
					   }
					   ?> />

					</div>
					<div class="col-md-4">

				<p>
					Last Name
				</p>
				</div>
					<div class="col-md-8">

				<input type="text" name="last" style="width: 100%;border-color: #3eb890; " <?php
		if(isset($_POST['last'])){
			echo strlen($_POST['last']) > 0 ? 'value="'.$_POST['last'].'"' : '';
					   }
					   ?> />
					   </div>
					<div class="col-md-4">

				<p>
					Email address
				</p>
				</div>
					<div class="col-md-8">

				<input type="text" name="mail" style="width: 100%;border-color: #3eb890;" <?php
		if(isset($_POST['mail'])){
		echo strlen($_POST['mail']) > 0 ? 'value="'.$_POST['mail'].'"' : '';
					   }
					   ?> />

					   </div>
					<div class="col-md-12">

				<p>
					<input type="submit" value="Sign me up!" />
				</p>
				  </div>
				    </div>
				 </div>
			</form>

		<?php

	}
