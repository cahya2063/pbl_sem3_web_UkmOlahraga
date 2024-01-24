@extends('master.main')
@section('title', 'Alat')
@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800 mb-4">Tabel Peminjaman Alat</h1>


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            {{-- <div class="card-header py-3">
                <a href="{{ route('create-pinjam') }}" class="btn btn-primary btn-sm ml-auto"><i class="fas fa-plus"></i>
                    Tambah</a>
            </div> --}}
            <div class="card-body">
                <div class="table-responsive">

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
                                <th>Foto Alat</th>
                                {{-- <th>Aksi</th> --}}
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($dtPeminjaman as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->nim }}</td>
                                    <td>{{ $item->prodi }}</td>
                                    <td>{{ $item->nama_barang }}</td>
                                    <td>{{ $item->jml_barang }}</td>
                                    <td>{{ date('d-m-Y', strtotime($item->tggl_pinjam)) }}</td>

                                    <td>
                                    @if ($item->bukti)
                                        <img src="data:image/png;base64, {{ $item->bukti }}" alt="Gambar dari Base64"
                                            style="max-width: 200px; max-height: 200px;">
                                    @else
                                        Tidak ada cv
                                    @endif
                                {{-- </td>

                                    <td class="text-center" style="width: 15%;">
                                        <form action="{{ route('create-kembali', $item->id) }}" onsubmit="return confirm('Apakah Anda Yakin Mengembalikan?');">
                                            @csrf
                                            <button type="submit" class="btn btn-sm btn-primary">
                                                <i class="bi bi-arrow-return-left"></i> Kembalikan
                                            </button>
                                        </form>
                                    </td>


                                </tr> --}}
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
