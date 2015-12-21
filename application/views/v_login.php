<?php include('head.php');?>

<div class="row margin-top-login center-align">
	<h2>
	<span class="light-blue-text">
	<i class="mdi-device-dvr prefix"></i>
	SINIPRES
	</span>
	</h2>
</div>

<div class="container">
	<form class="card-panel" method="post" action="<?php echo base_url();?>login/masuk">
		<div class="input-field">
	      	<i class="mdi-social-person-outline prefix"></i>
	        <input id="user_name" type="text" name="user_name" class="validate"required>
	        <label for="user_name">Username</label>
      	</div>

      	<div class="input-field">
	      	<i class="mdi-action-lock-outline prefix"></i>
	        <input id="user_pass" type="password" name="user_password" class="validate" required>
	        <label for="user_pass">Password</label>
      	</div>

    <div class="left">
      	<button class="btn waves-effect waves-light" type="submit" name="action"><i class="mdi-content-send left"></i>Login
	  	</button>

	  	<button class="btn waves-effect waves-light" type="reset" name="action"><i class="mdi-action-cached left"></i>Ulang
	  	</button>
	</div>

	<div class="right">
    	<a class="btn waves-effect waves-light" href="<?php echo base_url();?>jadi_presenter"><i class="mdi-social-person-add left"></i>Jadi Presenter</a>
    </div>
    </form>
</div>

<?php
if($this->session->flashdata('pesan') != ''){
	echo '
	<div class="container">
		<div class="card-panel red darken-4 grey-text lighten-5">
		'.$this->session->flashdata('pesan').'
		</div>
	</div>
	';
}
?>

<div style="clear:both"></div>

<?php include('footer.php'); ?>