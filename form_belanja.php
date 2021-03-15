<!doctype html>
<html lang="en">
    <head>
        <title>Form Belanja</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link
            rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
            crossorigin="anonymous">
    </head>
    <body>
        <header class="mb-3 bg-primary p-2 text-white">
            <h4>
                Belanja Online
            </h4>
        </header>
        <div class="row p-3">
            <div class="col-8">
                <form action="form_belanja.php" class="w-100" method="POST">
                    <div class="row">
                        <div class="text-right col-4 ">
                            <h6>Customer</h6>
                        </div>
                        <div class="col-5">

                            <input
                                type="text"
                                name="customer"
                                id="customer"
                                class="form-control"
                                required="required"
                                title="">

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-4 text-right">
                            <h6>Pilih Produk</h6>
                        </div>
                        <div class="col-5 d-flex">
                            <input
                                type="radio"
                                name="produk"
                                id="produk"
                                class="m-2"
                                value="TV"
                                required="required"
                                pattern=""
                                title="">
                            <h6 class="m-2">
                                TV
                            </h6>
                            <input
                                type="radio"
                                name="produk"
                                id="produk"
                                value="KULKAS"
                                class="m-2"
                                required="required"
                                pattern=""
                                title="">
                            <h6 class="m-2">
                                KULKAS
                            </h6>
                            <input
                                type="radio"
                                class="m-2"
                                name="produk"
                                id="produk"
                                value="MESIN CUCI"
                                required="required"
                                pattern=""
                                title="">
                            <h6 class="m-2">
                                MESIN CUCI
                            </h6>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-4 text-right">
                            <h6>Jumlah</h6>
                        </div>
                        <div class="col-5">

                            <input
                                type="number"
                                name="jumlah"
                                id="jumlah"
                                class="form-control"
                                value=""
                                required="required"
                                pattern=""
                                title="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4 text-right">
                            <button type="submit" class="btn btn-success">Kirim</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-4">
                <div class="card">
                    <img src="" alt="">
                    <div class="bg-primary text-white card-header">
                        Daftar Harga
                    </div>
                    <div class="card-body">
                        <p class="card-text">TV: 4.200.000,00</p>
                        <p class="card-text">KULKAS: 3.100.000,00</p>
                        <p class="card-text">MESIN CUCI: 3.800.000,00</p>
                    </div>
                    <div class="card-footer bg-primary text-white">Harga bisa berubah setiap saat</div>
                </div>
            </div>
        </div>
        <div class="row">
            <div id="output" class="m-3 ml-5">
                <?php
                $nama = $_POST['customer'];
                $jumlah = $_POST['jumlah'];
                $produk = $_POST['produk'];
                $haarga = 0;
                echo "Nama Customer: ".$nama;
                echo "<br>Produk Pilihan: ".$produk;
                    if ($produk == "TV") {
                        $harga =  4200000;
                    } elseif($produk == "KULKAS"){
                        $harga =  3100000;
                    } elseif($produk == "MESIN CUCI"){
                        $harga =  3800000;
                    }
                echo "<br>Jumlah beli: ".$jumlah;
                echo "<br>Total belanja: ".  number_format($jumlah * $harga, 2, ",", ".");
                ?>
            </div>

        </div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script
            src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
        <script
            src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>

    </body>
</html>