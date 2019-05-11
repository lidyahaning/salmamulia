<div class="container">
	<div class="content">
		<center>
			<h1>Tambah galeri</h1>
			<hr style="max-width:580px;">
		</center>
		<br>
		
		<div class="row">
			<div class="col-sm-2"></div>
			<div class="col-sm-8">
			<form role="form" action="simpan_galeri.php" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label for="nama_foto">Foto Galeri :</label>
					<br><img id="foto" src="#" width='220' height='200' alt="gambar yang dipilih" /><br>
					<input type="file" accept="gambar/*" name="nama_foto" id="nama_foto">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-2"></div>
			<div class="col-sm-8">
				<div class="form-group">
						<label for="judul_foto">Judul Foto :</label>
						<input type="" class="form-control" name="judul_foto" id="judul_foto" required>
						<div id="status"></div>
					</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-2"></div>
			<div class="col-sm-8">
				<form role="form" action="#" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label for="informasi_foto">Informasi Foto :</label>
						<textarea class="form-control" rows="5" name="informasi_foto" id="informasi_foto"></textarea>
						<div id="status"></div>
					</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-2"></div>
			<div class="col-sm-8">
				<p align="right">
					<button type="submit" class="btn btn-default" name="upload">Upload</button>
					<button type="reset" class="btn btn-danger" name="batal">Batal</button>
				</p>
			</div>
		</div>
		</form>
				
					
<!------------------------------------- PREVIEW IMAGE SEBELUM UPLOAD (JavaScript) ------------------------------>			
		<script>
		function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#foto').attr('src', e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }
    
    $("#nama_foto").change(function(){
        readURL(this);
    });
	</script>

		
	</div>
</div>