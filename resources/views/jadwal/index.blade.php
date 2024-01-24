@extends('master.main')
@section('title', 'Jadwal Latihan')
@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800 mb-4">Tabel Jadwal</h1>


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                @if (auth()->user()->role == 'administator')

                <a href="{{ route('create-jadwal') }}" class="btn btn-primary btn-sm ml-auto"><i class="fas fa-plus"></i>
                    Tambah</a>
                    @endif
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Hari</th>
                                <th>Waktu Mulai</th>
                                <th>Waktu Selesai</th>
                                <th>Divisi</th>
                                @if (auth()->user()->role == 'administator')
                                <th>Aksi</th>
                                @endif
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($dtJadwal as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->hari }}</td>
                                    <td>{{ $item->waktu_mulai }}</td>
                                    <td>{{ $item->waktu_selesai }}</td>
                                    <td>
                                        @if ($item->divisi)
                                            {{ $item->divisi->nama }}
                                        @else
                                            "tidak ada divisi yang cocok"
                                        @endif
                                    </td>

                                    @if (auth()->user()->role == 'administator')
                                    <td class="text-center" style="width: 15%;">
                                        <form onsubmit="return confirm('Apakah Anda Yakin Menghapus?');"
                                            action="{{ route('delete-jadwal', $item->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')

                                            <a href="{{ route('edit-jadwal', $item->id) }}" {{ $item->id }}
                                                class="btn btn-sm btn-primary"><i class="fas fa-edit"></i> Edit</a>

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
