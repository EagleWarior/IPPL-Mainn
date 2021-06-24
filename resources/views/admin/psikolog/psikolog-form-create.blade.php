@extends('admin.dashboard.master')

@section('title', 'Dashboard')

@section('content')
<section class="content">
      <div class="container-fluid">
            <!-- left column -->
              <!-- general form elements -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Tambah Psikolog</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="post" action="/addpsikolog" enctype="multipart/form-data">
                  @csrf
                  <div class="card-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Username</label>
                      <input name="username" type="text" class="form-control" placeholder="Masukan Username">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Password</label>
                      <input name="password" type="password" class="form-control" placeholder="Masukkan Password">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Nama</label>
                      <input name="nama" type="text" class="form-control" placeholder="Masukan Nama">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Umur</label>
                      <input name="umur" type="text" class="form-control" placeholder="Masukan Umur">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputFile">Gambar</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input name="foto_psikolog" type="file" class="custom-file-input" id="exampleInputFile">
                          <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                        <div class="input-group-append">
                          <span class="input-group-text">Upload</span>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email</label>
                      <input name="email" type="email" class="form-control" placeholder="Masukan email">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Nomor Telpon</label>
                      <input name="no_telp"  class="form-control" placeholder="Masukan Nomor Telpon">
                    </div>
                    <div class="form-group">
                        <label>alamat</label>
                        <textarea name="alamat" class="form-control" rows="3" placeholder="Masukan alamat"></textarea>
                    </div>
                    <div class="form-group">  
                      <label> Kategori</label>  
                      <select name="kategori" class="form-control"> 
                          <option selected disabled>Pilih Kategori</option>
                          <option value="Psikolog Keluarga">Psikolog Keluarga</option>
                          <option value="Psikolog Kepribadian">Psikolog Kepribadian</option>
                      </select> 
                    </div>                          
                    
                    <div class="form-group">
                      <label for="exampleInputEmail1">Biaya</label>
                      <input name="biaya" type="text" class="form-control" placeholder="Masukan Biaya">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Nomor Rekening</label>
                      <input name="no_rek" type="number" class="form-control" placeholder="Masukan Nomor Rekening">
                    </div>
                    <div class="form-group">  
                      <label>Tipe Bank</label>  
                      <select name="tipe_bank" class="form-control"> 
                          <option selected disabled>Pilih Tipe</option>
                          <option>BNI</option>
                          <option>BRI</option>
                      </select> 
                    </div> 
                  </div>
                  <!-- /.card-body -->
  
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div>
              <!-- /.card -->
      </div><!-- /.container-fluid -->
    </section>
@endsection