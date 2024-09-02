<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Futur | Value</title>
</head>

<body style="background-color: #263159;">
    <div class="form-check form-switch d-flex justify-content-center mt-5">
        <input class="form-check-input" type="checkbox" role="switch" id="switch" checked onchange="switchMode()">
        <label class="form-check-label ms-3" style="color: #fff;" for="flexSwitchCheckChecked" id="label">Change Mode</label>
    </div>
    <div class="container">
        <div class="row mt-5 d-flex justify-content-center">
            <div class="col-md-8">
                <div class="card p-5 shadow p-3 mb-5 bg-body rounded">
                    <div class="card-body">
                        <h2>Bunga Majemuk | Future Value</h2>
                        <form action="future.php" method="POST">
                            <div class="mb-3 mt-3">
                                <label for="modal" class="form-label">Besar Pinjaman: </label>
                                <input type="text" class="form-control" id="modal" name="besar_pinjaman">
                            </div>
                            <div class="mb-3">
                                <label for="rate" class="form-label">Bunga(%): </label>
                                <input type="text" class="form-control" id="rate" name="rate_bunga">
                            </div>
                            <div class="mb-3">
                                <label for="priode" class="form-label">Lama Pinjaman(bulan): </label>
                                <input type="text" class="form-control" id="priode" name="priode_waktu">
                            </div>
                            <button type="submit" class="btn btn-primary">Hitung</button>
                            <a class="btn btn-danger" href="/bunga">Back</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>
        function switchMode() {
            let body = document.querySelector('body');
            let switchEl = document.querySelector('#switch');
            let label = document.querySelector('#label');
            if (switchEl.checked) {
                body.style.background = '#263159';
                label.style.color = '#fff';
            }else {
                body.style.background = '#fff';
                label.style.color = '#263159';
            }
        }
    </script>
</body>

</html>