@extends('master.main')
@section('title', 'Divisi')
@section('content')


    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800 mb-4">Tabel Divisi</h1>


        <!-- DataTales Example -->
        <div class="card shadow mb-4">

            <div class="card-header py-3">
                @if (auth()->user()->role == 'administator')
                    <a href="{{ route('create-divisi') }}" class="btn btn-primary btn-sm ml-auto"><i class="fas fa-plus"></i>
                        Tambah</a>
                @endif
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                @if (auth()->user()->role == 'administator')
                                    <th>Aksi</th>
                                @endif
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($dtDivisi as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->nama }}</td>

                                    @if (auth()->user()->role == 'administator')
                                    <td class="text-center" style="width: 15%;">
        @include('switch', ['name' => 'example_'.$loop->iteration, 'label' => 'presensi', 'checked' => true])
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
