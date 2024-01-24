@extends('master.main')
@section('title', 'Create Data')
@section('content')


<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Create Data Jadwal</h1>


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"></h6>

        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <form action="{{ route('simpan-jadwal') }}" method="post">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="hari" style="font-weight: bold;"> Hari</label>
                            {{-- <input type="text" name="hari" id="hari" class="form-control" placeholder="Masukkan Hari"> --}}
                            <select id="hari" name="hari" class="form-control">
                                <option value="Senin">Senin</option>
                                <option value="Selasa">Selasa</option>
                                <option value="Rabu">Rabu</option>
                                <option value="Kamis">Kamis</option>
                                <option value="Jumat">Jumat</option>
                                <option value="Sabtu">Sabtu</option>
                                <option value="Minggu">Minggu</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="waktu_mulai" style="font-weight: bold;"> Waktu Mulai</label>
                            <input type="time" name="waktu_mulai" id="waktu_mulai" class="form-control" placeholder="Masukkan Waktu Mulai" required>
                        </div>
                        <div class="form-group">
                            <label for="waktu_selesai" style="font-weight: bold;"> Waktu Selelsai</label>
                            <input type="time" name="waktu_selesai" id="waktu_selesai" class="form-control" placeholder="Masukkan Waktu Selesai" required>
                        </div>
                        <div class="form-group">
                            <label for="divisi_id" style="font-weight: bold;">Pilih Divisi</label>
                                <select name="divisi_id" id="divisi_id" class="form-control">
                                    @foreach($divisis as $divisi)
                                        <option value="{{ $divisi->id }}" @if($divisi->id) selected @endif>{{ $divisi->nama }}</option>
                                     @endforeach
                                </select>
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
