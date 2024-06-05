<!-- Navbar -->
@include('layouts.header');
<!-- /.navbar -->
<!-- Main Sidebar Container -->
@include('layouts.sidebar');
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Dashboard Pasien</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Blank Page</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <!-- Main content -->
  <section class="content">
    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Edit Data Pasien</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
          </button>
        </div>
      </div>
      <div class="card-body">
        <!-- Edit Data Pasien-->
        @foreach($pasien as $patien)
        <form action="{{url('pasien/update/'.$patien->id)}}" method="POST">
          {{csrf_field()}}
          <div class="form-group">
            <label for="kode">kode Pasien </label>
            <input type="text" class="form-control" value="{{ $patien->kode }}" id="kode" name="kode" required>
          </div>
          <div class="form-group">
            <label for="nama">Nama Pasien</label>
            <input type="text" class="form-control"  value="{{ $patien->nama }}" valid="nama" name="nama" required>
          </div>
          <div class="form-group">
            <label for="tmp_lahir">Tempat Lahir</label>
            <input type="text" class="form-control"  value="{{ $patien->tmp_lahir }}" id="tmp_lahir" name="tmp_lahir" required>
          </div>
          <div class="form-group">
            <label for="tgl_lahir">Tanggal Lahir</label>
            <input type="date" class="form-control"  value="{{ $patien->tgl_lahir }}" id="tgl_lahir" name="tgl_lahir" required>
          </div>
          <div class="form-group">
            <label for="gender">Gender</label>
            <br>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="gender" name="gender" value="p" class="custom-control-input">
              <label class="custom-control-label" for="gender">Perempuan</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="gender2" name="gender" value="l" class="custom-control-input">
              <label class="custom-control-label" for="gender2">Laki-Laki</label>
            </div>
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="Email" class="form-control"  value="{{ $patien->email }}" id="email" name="email" required>
          </div>
          <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control"  value="{{ $patien->alamat }}" id="alamat" name="alamat" required>
          </div>
          <div class="form-group">
            <label for="kelurahan_id">Kelurahan</label>
            <select id="select" name="kelurahan_id" class="form-control">
              @foreach ($kelurahans as $kelurahan)
              <option value="{{$kelurahan->id}}">{{$kelurahan->nama}}</option>
              @endforeach
            </select>
          </div>
          <br>
          <button type="submit" class="btn btn-primary btn-block"
            style="box-shadow: 0 8px 15px rgba(247, 147, 29, 0.4);">Simpan</button>
        </form>
        @endforeach
      </div>
      <div class="card-footer">
        Footer
      </div>
      <!-- /.card-footer-->
    </div>
    <!-- /.card -->

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
{{-- footer --}}
@include('layouts.footer');
{{-- tutup footer --}}