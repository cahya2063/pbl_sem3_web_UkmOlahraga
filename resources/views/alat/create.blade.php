@extends('master.main')
@section('title', 'Create Data')
@section('content')


<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Create Data Alat</h1>


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"></h6>

        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <form action="{{ route('simpan-alat') }}" method="post">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="nama_barang" style="font-weight: bold;"> Nama</label>
                            <input type="text" name="nama_barang" id="nama_barang" class="form-control" placeholder="Masukkan Nama Alat" required>
                        </div>
                        <div class="form-group">
                            <label for="stok" style="font-weight: bold;"> Stok</label>
                            <input type="number" name="stok" id="stok" class="form-control" placeholder="Masukkan Stok" required>
                        </div>
                        <div class="form-group">
                            <label for="tggl_masuk" style="font-weight: bold;"> Tanggal Masuk</label>
                            <input type="date" name="tggl_masuk" id="tggl_masuk" class="form-control" placeholder="Masukkan Waktu Selesai" required>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Simpan Data</button>
                        </div>

                    </form>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

@endsection
