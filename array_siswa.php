<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
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
        <div class="header p-3 bg-primary text-white">
            <h3>Daftar Nilai Siswa</h3>
        </div>
        <div class="container mt-5">
            <?php
 $ns1 = ['id'=>1,'nim'=>'01101','uts'=>80,'uas'=>84,'tugas'=>78];
 $ns2 = ['id'=>2,'nim'=>'01121','uts'=>70,'uas'=>50,'tugas'=>68];
 $ns3 = ['id'=>3,'nim'=>'01130','uts'=>60,'uas'=>86,'tugas'=>70];
 $ns4 = ['id'=>4,'nim'=>'01134','uts'=>90,'uas'=>91,'tugas'=>82];
 $ns5 = ['id'=>5,'nim'=>'01135','uts'=>$_POST['tugas_uts'],'uas'=>$_POST['tugas_uas'],'tugas'=>$_POST['tugas_praktikum']];

 $ar_nilai = [$ns1, $ns2 , $ns3, $ns4, $ns5];
 ?>
            <table class="table table-striped" width="100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NIM</th>
                        <th>UTS</th>
                        <th>UAS</th>
                        <th>Tugas</th>
                        <th>Nilai Akhir</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
 $nomor = 1;
  foreach($ar_nilai as $ns){
  echo '<tr><td>'.$nomor.'</td>';
  echo '<td>'.$ns['nim'].'</td>';
  echo '<td>'.$ns['uts'].'</td>';
  echo '<td>'.$ns['uas'].'</td>';
  echo '<td>'.$ns['tugas'].'</td>';
  $nilai_akhir = ($ns['uts'] + $ns['uas']+$ns['tugas'])/3;
  echo '<td>'.number_format($nilai_akhir,2,',','.').'</td>';
  echo '<tr/>';
  $nomor++;
  }
  ?>
                </tbody>
            </table>
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