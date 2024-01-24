@extends('master.main')
@section('title', 'Edit Data')
@section('content')


    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Edit Data Jadwal</h1>


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary"></h6>

            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <form action="{{ route('update-jadwal', $jadwals->id) }}" method="post">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="hari" style="font-weight: bold;"> Hari</label>
                                <input type="text" name="hari" id="hari" class="form-control"
                                    value="{{ $jadwals->hari }}">
                            </div>
                            <div class="form-group">
                                <label for="waktu_mulai" style="font-weight: bold;"> Waktu Mulai</label>
                                <input type="text" name="waktu_mulai" id="waktu_mulai" class="form-control"
                                    value="{{ $jadwals->waktu_mulai }}">
                            </div>
                            <div class="form-group">
                                <label for="waktu_selesai" style="font-weight: bold;"> Waktu Selesai</label>
                                <input type="text" name="waktu_selesai" id="waktu_selesai" class="form-control"
                                    value="{{ $jadwals->waktu_selesai }}">
                            </div>
                            <div class="form-group">
                                <label for="divisi_id" style="font-weight: bold;">Pilih Divisi</label>
                                <select name="divisi_id" id="divisi_id" class="form-control">

                                    @foreach ($divisis as $divisi)
                                        <option value="{{ $divisi->id }}"
                                            @if ($divisi->id == $jadwals->divisi_id)
                                            selected @endif>{{ $divisi->nama }}</option>
                                    @endforeach
                                </select>
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
