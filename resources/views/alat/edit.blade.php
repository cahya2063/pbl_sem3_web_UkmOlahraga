@extends('master.main')
@section('title', 'Edit Data')
@section('content')


<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Edit Data alat</h1>


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"></h6>

        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <form action="{{ route('update-alat', $alat->id) }}" method="post">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="nama_barang" style="font-weight: bold;"> Nama</label>
                            <input type="text" name="nama_barang" id="nama_barang" class="form-control" value="{{ $alat->nama_barang }}">
                        </div>

                        <div class="form-group">
                            <label for="stok" style="font-weight: bold;"> Stok</label>
                            <input type="number" name="stok" id="stok" class="form-control" value="{{ $alat->stok }}">
                        </div>

                        <div class="form-group">
                            <label for="tggl_masuk" style="font-weight: bold;"> Tanggal Masuk</label>
                            <input type="date" name="tggl_masuk" id="tggl_masuk" class="form-control" value="{{ $alat->tggl_masuk }}">
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Ubah Data</button>
                        </div>

                    </form>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

@endsection
