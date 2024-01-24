@extends('master.main')
@section('title', 'Pendaftaran')
@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800 mb-4">Tabel Pendaftaran</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">

            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Nim</th>
                                <th>Prodi</th>
                                <th>Divisi 1</th>
                                <th>Divisi 2</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($dtPendaftaran as $item)
                                {{-- @if ($item->status == 'menunggu') --}}
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->nim }}</td>
                                    <td>{{ $item->prodi }}</td>
                                    <td>{{ $item->divisi_1 }}</td>
                                    <td>
                                        @if ($item->divisi_2)
                                            {{ $item->divisi_2 }}
                                        @else
                                            "tidak memilih"
                                        @endif
                                    </td>

                                    {{-- kalau yang if di aktifkan ini di off --}}
                                    <td class="text-center" style="width: 3%;">
                                        @if ($item->status == 'menunggu')
                                            <span class="badge badge-warning">Belum
                                                <br> Terverifikasi
                                            </span>
                                        @elseif ($item->status == 'terima')
                                            <span class="badge badge-success" style="padding: 4px 10px;"> Terima
                                            </span>
                                        @elseif ($item->status == 'tolak')
                                            <span class="badge badge-danger" style="padding: 4px 14px;"> Tolak
                                            </span>
                                        @endif
                                    </td>
                                    {{-- *** --}}

                                    <td class="text-center" style="width: 9%;">
                                        <a href="{{ route('detail-pendaftaran', $item->id) }}"
                                            class="btn btn-primary  btn-sm"><i class="fas fa-eye"></i> Detail</a>
                                    </td>
                                </tr>
                                {{-- @endif --}}
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
