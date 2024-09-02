<?php
// $besar_pinjaman = [];
// $rate_bunga = [];
// $priode_waktu = [];

$besar_pinjaman = $_POST['besar_pinjaman'];
$rate_bunga = $_POST['rate_bunga'];
$priode_waktu = $_POST['priode_waktu'];

function hitung($besar_pinjaman, $rate_bunga, $priode_waktu)
{
    $bunga_bulan = (1 + $rate_bunga / 100);
    $hitung = pow($bunga_bulan, $priode_waktu);
    $hasil = $besar_pinjaman * $hitung;
    return $hasil;
}

function format_rupiah($angka)
{
    $jadi = "Rp " . number_format($angka, 2, ',', '.');
    return $jadi;
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hasil | Futur Value</title>
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
                    <img class="rounded float-end" src="assets/img/imgSMK.png" alt="logoSMk" width="50px">
                </div>
                <div class="image">
                    <img class="rounded mx-auto d-block" src="assets/img/logoRPL.png" alt="Logo RPL" width="150px">
                    <h5 class="text-center">Bunga Majemuk | Future Value</h5>
                    <hr style="width: 300px" class="rounded mx-auto d-block">
                </div>
                <nav class="navbar navbar-expand-lg rounded mx-auto d-block">
                    <div class="container">
                        <div class="navbar-collapse" id="navbarNavAltMarkup">
                            <div class="navbar-nav">
                                <a class="nav-link active" aria-current="page" href="index.php">Back</a>
                                <a class="nav-link active" aria-current="pagr" href="/bunga">Home</a>
                            </div>
                        </div>
                    </div>
                </nav>
                <div class="container">
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-5">
                            <div class="card p-4 shadow p-3 mb-5 bg-body rounded">
                                <p>Jumlah Pinjaman <?php echo format_rupiah($besar_pinjaman) ?></p>
                                <p>Bunga <?php echo $rate_bunga; ?> %</p>
                                <p>Jangka Waktu <?php echo $priode_waktu; ?> Bulan</p>
                                <?php
                                $mo = $besar_pinjaman;
                                $furure = hitung($besar_pinjaman, $rate_bunga, $priode_waktu);
                                // $hasil = $mo * $furure;
                                echo "Total setelah " . $priode_waktu . " bulan yaitu : " . format_rupiah($furure);
                                ?>
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