<?php include('head.php');?>

<div class="row margin-top-login center-align">
	<h2>
	<span class="light-blue-text">
	<i class="mdi-editor-mode-edit prefix"></i>
	Penilaian
	</span>
	</h2>
</div>

<div class="container center-align">
<form action="<?php echo base_url();?>nilai/submit_nilai" method="post">
	<div class="input-field white-text white">
	  <select name="user_id" required>
	    <option value="" disabled selected>Pilih Presenter</option>
	    <?php
	    foreach($presenter as $p){
	    ?>
	    	<option value="<?php echo $p->user_id;?>"><?php echo $p->user_nama;?></option>
	    <?php
	    }
	    ?>
	  </select>
	</div>

	<table class="centered responsive-table stripped hoverable card">
		<thead>
			<tr>
				<td class="center">Aspek</td>
				<td class="center" colspan="3">Nilai</td>
			</tr>
		</thead>

		<tbody>
			<tr>
				<td>Penyajian</td>
				<td>
					<p>
					    <input class="with-gap" name="nilai1" type="radio" value="90" id="nilai1" required/>
					    <label for="nilai1">90</label>
					</p>
				</td>
				<td>
					<p>
					    <input class="with-gap" name="nilai1" type="radio" value="95" id="nilai2" required/>
					    <label for="nilai2">95</label>
					</p>
				</td>
				<td>
					<p>
					    <input class="with-gap" name="nilai1" type="radio" value="100" id="nilai3" required/>
					    <label for="nilai3">100</label>
					</p>
				</td>
			</tr>

			<tr>
				<td>Penguasaan Materi</td>
				<td>
					<p>
					    <input class="with-gap" name="nilai2" type="radio" value="90" id="nilai4" required/>
					    <label for="nilai4">90</label>
					</p>
				</td>
				<td>
					<p>
					    <input class="with-gap" name="nilai2" type="radio" value="95" id="nilai5" required/>
					    <label for="nilai5">95</label>
					</p>
				</td>
				<td>
					<p>
					    <input class="with-gap" name="nilai2" type="radio" value="100" id="nilai6" required/>
					    <label for="nilai6">100</label>
					</p>
				</td>
			</tr>

			<tr>
				<td>Tata Bahasa</td>
				<td>
					<p>
					    <input class="with-gap" name="nilai3" type="radio" value="90" id="nilai7" required/>
					    <label for="nilai7">90</label>
					</p>
				</td>
				<td>
					<p>
					    <input class="with-gap" name="nilai3" type="radio" value="95" id="nilai8" required/>
					    <label for="nilai8">95</label>
					</p>
				</td>
				<td>
					<p>
					    <input class="with-gap" name="nilai3" type="radio" value="100" id="nilai9" required/>
					    <label for="nilai9">100</label>
					</p>
				</td>
			</tr>

			<tr>
				<td>Penampilan</td>
				<td>
					<p>
					    <input class="with-gap" name="nilai4" type="radio" value="90" id="nilai10" required/>
					    <label for="nilai10">90</label>
					</p>
				</td>
				<td>
					<p>
					    <input class="with-gap" name="nilai4" type="radio" value="95" id="nilai11" required/>
					    <label for="nilai11">95</label>
					</p>
				</td>
				<td>
					<p>
					    <input class="with-gap" name="nilai4" type="radio" value="100" id="nilai12" required/>
					    <label for="nilai12">100</label>
					</p>
				</td>
			</tr>
		</tbody>
	</table>
	<button class="waves-effect waves-light btn" type="submit"><i class="mdi-content-send right"></i>Submit</button>

	<button class="waves-effect waves-light btn" type="reset"><i class="mdi-action-cached right"></i>Reset</button>
</form>
	<button class="waves-effect waves-light btn" onclick="window.location='<?php echo base_url();?>nilai/keluar'"><i class="mdi-av-replay right"></i>Keluar</button>
</div>
	