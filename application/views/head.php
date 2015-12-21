<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php echo $title ;?></title>
        <link rel="stylesheet" href="<?php echo base_url();?>berkas/css/style.css"/>
        <link rel="stylesheet" href="<?php echo base_url();?>berkas/css/materialize.min.css"/>
        <script src="<?php echo base_url();?>berkas/js/jquery.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>berkas/js/materialize.min.js" type="text/javascript"></script>
        <script type="text/javascript">
        	$(document).ready(function() {
			    $('select').material_select();
			});
        </script>
    </head>
    <body class="purple darken-4">