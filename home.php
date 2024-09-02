<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- My CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Bunga Majemuk</title>
</head>

<body style="background-color: #263159;">
    <section id="komputer">
        <div class="form-check form-switch d-flex justify-content-center mt-5">
            <input class="form-check-input" type="checkbox" role="switch" id="switch" checked onchange="switchMode()">
            <label class="form-check-label ms-3" style="color: #fff;" for="flexSwitchCheckChecked" id="label">Change Mode</label>
        </div>
        <div class="container">
            <div class="card p-5 mt-5 shadow p-3 mb-5 bg-body rounded">
                <div class="img">
                    <img class="rounded float-end" src="futurevalue/assets/img/imgSMK.png" alt="logoSMk" width="50px">
                </div>
                <div class="image">
                    <img class="rounded mx-auto d-block" src="futurevalue/assets/img/logoRPL.png" alt="Logo RPL" width="150px">
                    <h5 class="text-center">Maulana Yusuf PPLG</h5>
                    <hr style="width: 300px" class="rounded mx-auto d-block">
                    <p style="text-align: center;">Student | 12108510</p>
                </div>
                <nav class="navbar navbar-expand-lg rounded mx-auto d-block">
                    <div class="container">
                        <div class="" id="navbarNavAltMarkup">
                            <div class="navbar-nav">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                                <a class="nav-link active" aria-current="page" href="futurevalue/index.php">Future Value</a>
                                <a class="nav-link active" aria-current="page" href="presentvalue/presenvalue.php">Present Value</a>
                                <a class="nav-link active" aria-current="page" href="anuitas/anuitas.php">Anuitas</a>
                            </div>
                        </div>
                    </div>
                </nav>
                <div class="row mt-3">
                    <div class="col-md-10">
                        <h3>Bunga <a style="color: red;">Majemuk</a> </h3>
                        <p>Bunga majemuk dihitung berdasarkan modal awal yang sudah ditambahkan dengan
                            bunga atau bisa disebut bahwa bunga majemuk adalah bunga yang bisa dinyatakan dalam: </p>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-6 p-5">
                        <div class="card shadow p-0 mb-5 bg-body rounded rounded">
                            <img src="futurevalue/assets/img/rumusF.jpg" class="card-img-top" alt="rumus future value">
                            <div class="card-body">
                                <p class="card-text">Future value adalah nilai masa depan dari kas/uang yang diterima saat ini. Nilai masa depan kas/uang dimasa depan dihitung dengan memfaktorkan kas/uang menggunakan tingkat return tertentu yang bisa dihasilkan oleh kas/uang, bisa juga menggunakan laju inflasi.</p>
                                <p class="card-text">Keterangan :
                                <ul style="list-style-type: none;">
                                    <li>Mt = Modal/nilai akhir (future value)</li>
                                    <li>Mo = Modal/nilai awal (present value)</li>
                                    <li>B = besar bunga</li>
                                    <li>i = rate bunga dalam (%)</li>
                                    <li>t = priode waktu</li>
                                </ul>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 p-5">
                        <div class="card shadow p-0 mb-5 bg-body rounded rounded">
                            <img src="futurevalue/assets/img/rumusP.jpg" class="card-img-top" alt="rumus future value">
                            <div class="card-body">
                                <p class="card-text">Present value adalah nilai sekarang dari kas/uang yang akan diterima dimasa depan. Kas/uang yang seharusnya diperoleh dimasa depan didiskon menggunakan suatu tingkat diskon tertentu untuk menghasilkan nilai sekarang. Semakin besar tingkat diskon, maka akan semakin kecil nilai sekarang dari kas/uang.</p>
                                <p class="card-text">Keterangan :
                                <ul style="list-style-type: none;">
                                    <li>Mt = Modal/nilai akhir (future value)</li>
                                    <li>Mo = Modal/nilai awal (present value)</li>
                                    <li>B = besar bunga</li>
                                    <li>i = rate bunga dalam (%)</li>
                                    <li>t = priode waktu</li>
                                </ul>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>
        function switchMode() {
            let body = document.querySelector('body');
            let switchEl = document.querySelector('#switch');
            let label = document.querySelector('#label');
            if (switchEl.checked) {
                body.style.background = '#263159';
                label.style.color = '#fff';
            } else {
                body.style.background = '#fff';
                label.style.color = '#263159';
            }
        }
    </script>
</body>

</html>