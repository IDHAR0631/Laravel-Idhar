<!DOCTYPE html>
<html>
<head>
    <title>Data Pegawai - www.malasngoding.com</title>
    <!-- Link ke Bootstrap CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Link ke CSS kustom -->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</head>
<body>

    <div class="container mt-5">
        <div class="card">
            <div class="card-body">
                
                <h2 class="text-center"><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
 
                <h3 class="mt-4">Data Pegawai</h3>
 
                <form action="/pegawai/cari" method="GET" class="form-inline mb-3">
                    <input class="form-control" type="text" name="cari" placeholder="Cari Pegawai .." value="{{ old('cari') }}">
                    <button class="btn btn-primary ml-3" type="submit">CARI</button>
                </form>

                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th>Nama</th>
                                <th>Jabatan</th>
                                <th>Umur</th>
                                <th>Alamat</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pegawai as $p)
                            <tr>
                                <td>{{ $p->pegawai_nama }}</td>
                                <td>{{ $p->pegawai_jabatan }}</td>
                                <td>{{ $p->pegawai_umur }}</td>
                                <td>{{ $p->pegawai_alamat }}</td>
                                <td>
                                    <a class="btn btn-warning btn-sm" href="/pegawai/edit/{{ $p->pegawai_id }}">Edit</a>
                                    <a class="btn btn-danger btn-sm" href="/pegawai/hapus/{{ $p->pegawai_id }}">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
 
                <div class="mt-4">
                    Halaman : {{ $pegawai->currentPage() }} <br/>
                    Jumlah Data : {{ $pegawai->total() }} <br/>
                    Data Per Halaman : {{ $pegawai->perPage() }} <br/>
                </div>
 
                <div class="d-flex justify-content-center">
                    {{ $pegawai->links() }}
                </div>
            </div>
        </div>
    </div>

    <!-- Link ke Bootstrap JS dan dependensi -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
