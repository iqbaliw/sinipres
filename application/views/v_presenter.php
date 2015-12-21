<?php include('head.php');?>

<div class="row margin-top-login center-align">
	<h2>
	<span class="light-blue-text">
	<i class="mdi-content-content-paste prefix"></i>
	Data Nilai <?php echo $nama;?>
	</span>
	</h2>
</div>

<div class="container center-align">
	<div class="card" style="height:350px;overflow:scroll">
		<table class="centered responsive-table stripped hoverable">
			<thead>
				<tr>
					<td class="center">No.</td>
					<td class="center" colspan="4">Nilai</td>
					<td class="center">Total</td>
					<td class="center">Rata-rata</td>
				</tr>
			</thead>
		<tbody>
		<?php
		$no = 1;
		$sum = 0;
		foreach($nilai as $n){
		?>
			<tr>
				<td><?php echo $no++.'.';?></td>
				<td><?php echo $n->nilai1;?></td>
				<td><?php echo $n->nilai2;?></td>
				<td><?php echo $n->nilai3;?></td>
				<td><?php echo $n->nilai4;?></td>
				<td><?php echo $n->total;?></td>
				<td><?php echo $n->avg;?></td>
			</tr>
		<?php
			$sum += $n->avg;
		}

		$total = $sum;
		?>
		</tbody>
		</table>
	</div>

	<?php
	$baris = $jumlah_nilai->num_rows();
	?>

	<div class="card">
		<p class="center-align">Nilai Akhir: <?php if($baris!=0){echo $total/$baris;}else{echo 'Belum ada penilaian.';}?></p>
	</div>

	<button class="waves-effect waves-light btn" onclick="window.location='<?php echo base_url();?>presenter/keluar'"><i class="mdi-av-replay right"></i>Keluar</button>
</div>