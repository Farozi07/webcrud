<!doctype html>
<html lang="en">

<head>
    <title>Detail {{ $phone->merek }} {{ $phone->nama }}</title>
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
        <div class="container mt-3">
            <div class="row">
                <div class="col-12">
                    <div class="pt-3">
                        <h1>Data Handphone {{ $phone->merek }} {{ $phone->nama }}</h1>
                    </div>
                    <hr>
                    <ul>
                        <li>IMEI: {{ $phone->imei }}</li>
                        <li>MEREK: {{ $phone->merek }}</li>
                        <li>NAMA: {{ $phone->nama }}</li>
                        <li>STATUS: {{ $phone->status == 'resmi' ? 'Resmi' : 'Tidak Resmi' }}</li>
                        <li>JUMLAH: {{ $phone->jumlah }}</li>
                        <li>HARGA: Rp.{{ $phone->harga }}</li>
                    </ul>
                </div>
            </div>
            <a href="{{ route('phone.index') }}" class="btn btn-primary">Kembali</a>
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
