<html>
<head>
<title>Form Validation</title>
</head>
<body>

<?php echo validation_errors(); ?>

<div style="margin: auto; max-width: 400px;">
	Contoh Form Validation
	<?php echo form_open('latihan/formulir'); ?>

	<p>Nama</p>
	<input type="text" name="name" value="" size="70" />

	<p>Kode pos</p>
	<input type="text" name="kodepos" value="" size="70" />

	<p>Alamat Email</p>
	<input type="text" name="email" value="" size="70" />

	<div><input type="submit" value="Submit" /></div>

	</form>
</div>

</body>
</html>