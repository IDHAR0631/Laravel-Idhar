<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Malas Ngoding - Tutorial Laravel #18 : Membuat Form Validasi Pada Laravel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card mt-5">
                    <div class="card-body">
                        <h3 class="text-center">www.malasngoding.com</h3>
                        <br/>
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <br/>
                        <form action="/proses" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="pegawai_nama">Nama</label>
                                <input class="form-control" type="text" name="pegawai_nama" value="{{ old('pegawai_nama') }}">
                            </div>
                            <div class="form-group">
                                <label for="pegawai_pekerjaan">Pekerjaan</label>
                                <input class="form-control" type="text" name="pegawai_pekerjaan" value="{{ old('pegawai_pekerjaan') }}">
                            </div>
                            <div class="form-group">
                                <label for="pegawai_umur">Usia</label>
                                <input class="form-control" type="text" name="pegawai_umur" value="{{ old('pegawai_umur') }}">
                            </div>
                            <div class="form-group">
                                <input class="btn btn-primary" type="submit" value="Proses">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
