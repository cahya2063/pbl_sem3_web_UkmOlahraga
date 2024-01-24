{{-- @extends('master.main')
@section('title', 'Edit Data')
@section('content')


    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Edit Data Pendaftaran</h1>


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary"></h6>

            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <form action="{{ route('update-pendaftaran', $pendaftar->id) }}" method="post">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="jabatan" style="font-weight: bold;"> Jabatan_1</label>
                                <select id="jabatan" name="jabatan" class="form-control">
                                    <option value="Ketua">Ketua</option>
                                    <option value="Wakil Ketua">Wakil Ketua</option>
                                    <option value="Sekretaris">Sekretaris</option>
                                    <option value="Bendahara">Bendahara</option>
                                    <option value="Anggota">Anggota</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="jabatan_1" style="font-weight: bold;"> Jabatan_2</label>
                                <select id="jabatan_1" name="jabatan_1" class="form-control">
                                    <option value="Ketua">Ketua</option>
                                    <option value="Wakil Ketua">Wakil Ketua</option>
                                    <option value="Sekretaris">Sekretaris</option>
                                    <option value="Bendahara">Bendahara</option>
                                    <option value="Anggota">Anggota</option>
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

@endsection --}}
