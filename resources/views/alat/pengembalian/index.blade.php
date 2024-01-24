@extends('master.main')
@section('title', 'Alat')
@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800 mb-4">Tabel Pengembalian Alat</h1>


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
            </div>
            <div class="card-body">
                <div class="table-responsive" style="overflow-x: auto;">

                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Nim</th>
                                <th>Prodi</th>
                                <th>Barang</th>
                                <th>Jumlah Barang</th>
                                <th>Tanggal Pinjam</th>
                                <th>Tanggal Kembali</th>
                                <th>Deskripsi</th>
                                <th>Gambar</th>

                                @if (auth()->user()->role == 'administator')
                                <th>Aksi</th>
                                @endif
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($dtpengembalian as $data)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                    <td>{{ $data->nama }}</td>
                                    <td>{{ $data->nim }}</td>
                                    <td>{{ $data->prodi }}</td>
                                    <td>{{ $data->nama_barang }}</td>
                                    <td>{{ $data->jml_barang }}</td>
                                    <td>{{ date('d-m-Y', strtotime ($data->tggl_pinjam)) }}</td>
                                    <td>{{ date('d-m-Y', strtotime ($data->tggl_kembali)) }}</td>
                                    <td>{{ $data->deskripsi }}</td>
                                    <td>
                                    @if ($data->bukti)
                                        <img src="data:image/png;base64, {{ $data->bukti }}" alt="Gambar dari Base64"
                                            style="max-width: 200px; max-height: 200px;">
                                    @else
                                        Tidak ada bukti
                                    @endif
                                </td>

                                @if (auth()->user()->role == 'administator')
                                <td class="text-center" style="width: 9%;">
                                    <form onsubmit="return confirm('Apakah Anda Yakin Menghapus?');"
                                        action="{{ route('delete-pengembalian', $data->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-sm btn-danger"><i
                                                class="fas fa-trash-alt"></i> Hapus</button>
                                    </form>
                                </td>
                                @endif
                            </tr>
                        @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

    {{-- sweet alert --}}
    @include('sweetalert::alert')

@endsection
