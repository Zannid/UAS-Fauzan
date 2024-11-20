<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="icon" href="smk.png">
    
    <title>UAS</title>
  </head>
  <body>
    <style>
        td{
            color: rgb(50, 50, 224);
        }
        p{
            color: rgb(50, 50, 224);
        }
    </style>
   
    <?php

    

    if (isset($_POST['proses'])) {
        $no = $_POST['no'];
        $nama = $_POST['nama'];
        $unit = $_POST['unit'];
        $tgl = $_POST['tgl'];
        $jabatan = $_POST['jabatan'];
        $bpjs = $_POST['bpjs'];
        $kerja = $_POST['kerja'];
        $pinjaman = $_POST['pinjaman'];
        $status = $_POST['status'];
        $tabungan = $_POST['tabungan'];
        $lain = $_POST['lain'];
       

        echo"

       
    <div class='container mx-auto mt-2 p-2' width='50%'>
    <div class='row' style='width: 35rem;'>
        <div class='col-md-6-mxauto'>
                <div class='card shadow-lg p-2 mb-5 bg-body rounded' style='width: 25rem; left: 250px;'>
  <div class='card-header bg-primary text-white'>
     <center>$nama</center>
  </div>

      
        <div class='card-body-text-primary'>
            <center>
                <p class='fs-2'>STRUK GAJI</p>
            </center>
            <center>
            <table>
                <tr>
                    <td>No</td>
                    <td>:</td>
                    <td>$no</td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td>$nama</td>
                </tr>
                <tr>
                    <td>Unit Pendidikan</td>
                    <td>:</td>
                    <td>$unit</td>
                </tr>
                <tr>
                    <td>Tanggal Gaji </td>
                    <td>:</td>
                    <td>$tgl</td>
                </tr>
            ";

        class penggajihan{
            public $potong;
            public $bonus;
            public $gaji;

        
            public function gaji($jabatan2,$kerja2,$status2){
                if ($jabatan2 == "Kepala Sekolah") {
                    $this->gaji = 10000000;
                }elseif ($jabatan2 == "Wakasek") {
                    $this->gaji = 7000000;
                }elseif ($jabatan2 == "Guru") {
                    $this->gaji = 5000000;
                }elseif ($jabatan2 == "Karyawan") {
                    $this->gaji = 2500000;
                }else{
                    echo"Isi jabatan";
                }

                if ($kerja2 > 5) {
                    $tunjangan = 1000000;
                }else {
                    $tunjangan = 0;
                }
                
               
                echo"
                
                    <tr>
                        <td>Jabatan</td>
                        <td>:</td>
                        <td>$jabatan2</td>
                    </tr>
                    <tr>
                        <td>Gaji</td>
                        <td>:</td>
                        <td>$this->gaji</td>
                    </tr>
                    <tr>
                        <td>Lama Kerja</td>
                        <td>:</td>
                        <td>$kerja2</td>
                    </tr>
                    <tr>
                        <td>Tunjangan Lama Kerja</td>
                        <td>:</td>
                        <td>$tunjangan</td>
                    </tr>
                    <tr>
                        <td>Status Kerja</td>
                        <td>:</td>
                        <td>$status2</td>
                    </tr>";


                    if ($status2 == "Tetap") {
                        $this->bonus = 1000000;
                    }else {
                        $this->bonus = 0;
                    }
   
   
  
                echo"
                <tr>
                    <td>Bonus</td>
                    <td>:</td>
                    <td>$this->bonus</td>
                    </tr>";
                  
                
            }
                public function potongan($bpjs2, $pinjaman2, $tabungan2, $lain2){
                    $this->potong = $bpjs2 + $pinjaman2 + $tabungan2 + $lain2;
                    echo"
                   
                        <tr>
                            <td>BPJS</td>
                            <td>:</td>
                            <td>$bpjs2</td>
                        </tr>
                        <tr>
                            <td>Pinjaman</td>
                            <td>:</td>
                            <td>$pinjaman2</td>
                        </tr>
                        <tr>
                            <td>Tabungan</td>
                            <td>:</td>
                            <td>$tabungan2</td>
                        </tr>
                        <tr>
                            <td>Lainnya</td>
                            <td>:</td>
                            <td>$lain2</td>
                        </tr>
                        <tr>
                            
                            <td>Total Potongan</td>
                            <td>:</td>
                            <td>$this->potong</td>
                        
                        </tr>
                        
                   ";
                
$gajibersih = ($this->gaji + $this->bonus) - ($bpjs2 + $pinjaman2 + $tabungan2 + $lain2);          
                   
                    echo"
                     <tr>
                            
                            <td>Gaji Bersih</td>
                            <td>:</td>
                            <td><b>$gajibersih</b></td>
                        
                        </tr>
                     </table></center>
                   
                </div>
                </div>
                </div>
            </div>
         </div>

        ";
                }
           
            }

            $cetak = new penggajihan();
            echo $cetak->gaji($jabatan,$kerja,$status);
            echo $cetak->potongan($bpjs, $pinjaman, $tabungan, $lain);
           
            
          
}
                    
   


    
    ?>




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>