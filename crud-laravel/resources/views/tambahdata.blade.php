@extends('layout.admin')
@section('content')
<body>
	<br>
	<br>
    <h1 class="text-center mb-5 mt-5">Tambah Data Pegawai</h1>

    <div class="container mb-5">
    	<div class="row justify-content-center">
    		<div class="col-8">
    			<div class="card">
	    			<div class="card-body">
	    				<form action="/insertdata" method="POST" enctype="multipart/form-data">
	    				  @csrf
						  <div class="mb-3">
						    <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
						    <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
						  </div>
						  <div class="mb-3">
						    <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
						    <select class="form-select" name="jeniskelamin" aria-label="Default select example">
							  <option selected>Pilih Jenis Kelamin</option>
							  <option value="cowo">cowo</option>
							  <option value="cewe">cewe</option>
							</select>
						  </div>
						  <div class="mb-3">
						    <label for="exampleInputEmail1" class="form-label">No Telepon</label>
						    <input type="number" name="notelepon" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
						  </div>
						  <div class="mb-3">
						    <label for="exampleInputEmail1" class="form-label">Masukkan Foto</label>
						    <input type="file" name="foto" class="form-control">
						  </div>
						  <button type="submit" class="btn btn-primary">Simpan</button>
						</form>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
@endsection