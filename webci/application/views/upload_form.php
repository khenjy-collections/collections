<div class="hlm_single" id="latar">



		<h2>Tambahkan Berita</h2><hr/>

		<div style="color: red;"><?php echo validation_errors(); ?></div>
		<?php echo form_open_multipart('upload/do_upload');?>




	            <input type="text" name="title" class="form-control" placeholder="Judul Berita" required/><br/>
	            <textarea id="ckeditor" name="tek" class="form-control" required></textarea><br/>



		<select name="category">
            <option value="">Pilih Kategori</option>
            <option value="Sekretariat">Sekretariat</option> <!-- first option contains value="" -->
            <option value="Inovasi dan Teknologi">Inovasi dan Teknologi</option>
            <option value="Ekonomi dan Pembangunan">Ekonomi dan Pembangunan</option>
            <option value="Sosial dan Pemerintahan">Sosial dan Pemerintahan</option> 
        </select><br><br>

	            <input type="file" name="fileupload" required><br>
	            <input type="hidden" name="user_id" value=" <?php echo $this->session->userdata('user_id');?>">
	            <button class="button_utm" type="submit">Publish</button>
            <?php echo form_close(); ?>
</div>
	
	<script src="<?php echo base_url().'assets/jquery/jquery-2.2.3.min.js'?>"></script>

	<script src="<?php echo base_url().'assets/ckeditor/ckeditor.js'?>"></script>
	<script type="text/javascript">
	  $(function () {
	    CKEDITOR.replace('ckeditor');
	  });
	</script>
