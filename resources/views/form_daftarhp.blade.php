<!doctype html>
<html lang="en">

<head>
    <title>Daftar HP</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    <header>
        <!-- place navbar here -->
    </header>
    <main>
        <div class="container pt-4 bg-white">
            <div class="row">
                <div class="col-md-8 col-xl-6">
                    <h1>Input Handphone</h1>
                    <hr>
                    <form action="{{ route('phone.store') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="imei" class="form-label">No IMEI</label>
                            <input type="text" id="imei" name="imei" value="{{ old('imei') }}"
                                class="form-control @error('imei') is-invalid @enderror">
                            @error('imei')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="merek">Merek</label>
                            <input type="text" id="merek" name="merek" value="{{ old('merek') }}"
                                class="form-control @error('merek') is-invalid @enderror">
                            @error('merek')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="nama">Nama</label>
                            <input type="text" id="nama" name="nama" value="{{ old('nama') }}"
                                class="form-control @error('nama') is-invalid @enderror">
                            @error('nama')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Status</label>
                            <div class="d-flex">
                                <div class="form-check me-3">
                                    <input type="radio" class="form-check-input" name="status" id="resmi"
                                        value="resmi" {{ old('status') == 'resmi' ? 'checked' : '' }}>
                                    <label for="resmi" class="form-check-label">Resmi</label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" name="status" id="tidakresmi"
                                        value="tidakresmi" {{ old('status') == 'tidakresmi' ? 'checked' : '' }}>
                                    <label for="tidakresmi" class="form-check-">Tidak Resmi</label>
                                </div>
                            </div>
                            <div>
                                @error('status')
                                    <div class="text-danger">{{ $massage }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="jumlah">Jumlah</label>
                            <input type="number" id="jumlah" name="jumlah" value="{{ old('jumlah') }}"
                                class="form-control @error('jumlah') is-invalid @enderror" min="0">
                            @error('jumlah')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="harga">Harga</label>
                            <input type="number" id="harga" name="harga" value="{{ old('harga') }}"
                                class="form-control @error('harga') is-invalid @enderror" min="0">
                            @error('harga')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary"> Masukkan</button>
                        <a href="{{ url()->previous() }}" class="btn btn-success"> Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>
