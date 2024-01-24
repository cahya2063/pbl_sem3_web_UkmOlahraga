{{-- @extends('master.main')
@section('title', 'Create Data')
@section('content')
    <div class="container-fluid">
        <h1 class="h3 mb-4 text-gray-800">Create Pinjam Alat</h1>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary"></h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <form action="{{ route('simpan-pinjam') }}" method="POST">
                        @csrf


                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="nim">Nim</label>
                            <input type="text" name="nim" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="prodi">Prodi</label>
                            <input type="text" name="prodi" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="nama_barang">Nama Alat</label>
                            <select name="nama_barang" class="form-control">
                                @foreach ($alat as $item)
                                    <option value="{{ $item->nama_barang }}">{{ $item->nama_barang }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="jml_barang">Jumlah Barang</label>
                            <input type="number" name="jml_barang" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="tggl_pinjam">Tanggal Pinjam</label>
                            <input type="date" name="tggl_pinjam" class="form-control" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @include('sweetalert::alert')
@endsection --}}
