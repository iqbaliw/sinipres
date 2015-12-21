<?php include('head.php');?>

<div class="row margin-top-login center-align">
	<h2>
	<span class="light-blue-text">
	<i class="mdi-social-person-add prefix"></i>
	Jadi Presenter
	</span>
	</h2>
</div>

<div class="container center-align">
	<form class="card-panel" method="post" action="<?php echo base_url();?>jadi_presenter/register">
		<div class="input-field">
	      	<i class="mdi-editor-mode-edit prefix"></i>
	        <input id="user_nama" type="text" name="user_nama" class="validate"required>
	        <label for="user_nama">Nama</label>
      	</div>

		<div class="input-field">
	      	<i class="mdi-social-person-outline prefix"></i>
	        <input id="user_name" type="text" name="user_name" class="validate" minlength="5" required>
	        <label for="user_name">Username</label>
      	</div>

      	<div class="input-field">
	      	<i class="mdi-action-lock-outline prefix"></i>
	        <input id="user_pass" type="password" name="user_password" class="validate" minlength="7" required>
	        <label for="user_pass">Password</label>
      	</div>

      	<div class="input-field">
			<select name="id_kelas" required>
			    <option value="" disabled selected>- Pilih -</option>    
			    <?php
				    foreach($kelas as $k){
				    ?>
				    <option value="<?php echo $k->id_kelas;?>"><?php echo $k->nm_kelas;?></option>
				    <?php
				    }
				    ?>
			</select>
			<label>Kelas</label>
		</div>

      	<div class="left">
	      	<button class="btn waves-effect waves-light" type="submit" name="action"><i class="mdi-hardware-keyboard-return left"></i>Daftar
		  	</button>

		  	<button class="btn waves-effect waves-light" type="reset" name="action"><i class="mdi-action-cached left"></i>Ulang
	  		</button>
		</div>

		<div class="right">
    	<a class="btn waves-effect waves-light" href="<?php echo base_url();?>"><i class="mdi-navigation-arrow-back left"></i>Kembali</a>
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

<?php include('footer.php');?>