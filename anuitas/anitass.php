<?php
$besar_pinjaman = $_POST["besar_pinjaman"];
$bunga = $_POST["bunga"];
$waktu = $_POST["waktu"];
$perbulan = $bunga / 12;
function hitungan($besar_pinjaman, $waktu, $bunga)
{
    $bunga_bulan = ($bunga / 12) / 100;
    $pembagi = 1 - (1 / pow(1 + $bunga_bulan, $waktu));
    $hasil = $besar_pinjaman / ($pembagi / $bunga_bulan);
    return $hasil;
}
function rupiah($angka)
{
    $jadi = "Rp " . number_format($angka, 2, ',', '.');
    return $jadi;
} ?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hasil | Present Value</title>
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
                    <img class="rounded float-end" src="../futurevalue/assets/img/imgSMK.png" alt="logoSMk" width="50px">
                </div>
                <div class="image">
                    <img class="rounded mx-auto d-block" src="../futurevalue/assets/img/logoRPL.png" alt=" Logo RPL" width="150px">
                    <h5 class="text-center">Bunga Anuitas</h5>
                    <hr style="width: 300px" class="rounded mx-auto d-block">
                </div>
                <nav class="navbar navbar-expand-lg rounded mx-auto d-block">
                    <div class="container">
                        <div id="navbarNavAltMarkup">
                            <div class="navbar-nav">
                                <a class="nav-link active" aria-current="page" href="/bunga">Home</a>
                                <a class="nav-link active" aria-current="page" href="anuitas.php">Back</a>
                            </div>
                        </div>
                    </div>
                </nav>
                <div class="container">
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-12">
                                <table class="table table-bordered col-lg-6" id="tampilkan">
                                    <tr>
                                        <th>Angsuran ke -</th>
                                        <th>Angsuran Pokok</th>
                                        <th>Angsuran Bunga</th>
                                        <th>Total Angsuran</th>
                                        <th>Sisa Hutang</th>
                                    </tr>
                                    <tr>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td><b><?php echo rupiah($besar_pinjaman); ?></b></td>
                                    </tr>
                                    <?php

                                    $no = 0;
                                    $hutang = $besar_pinjaman;
                                    do {
                                        $no++;
                                        $anuitas = hitungan($besar_pinjaman, $waktu, $bunga);
                                        $uang_bunga = $hutang * (($bunga / 12) / 100);
                                        $ang_pokok = $anuitas - $uang_bunga;
                                        $hutang = $hutang - $ang_pokok;
                                        $cicilan = $uang_bunga + $ang_pokok;

                                        echo "<tr>";
                                        echo "<td>" . $no . "</td>";
                                        echo "<td>" . rupiah($ang_pokok) . "</td>";
                                        echo "<td>" . rupiah($uang_bunga) . "</td>";
                                        echo "<td>" . rupiah($cicilan) . "</td>";
                                        echo "<td>" . rupiah($hutang) . "</td>";
                                        echo "</tr>";
                                    } while ($no < $waktu); ?>
                                </table>
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