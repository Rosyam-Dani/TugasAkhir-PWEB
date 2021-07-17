<?php 
    $r=-1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Pengunjung</title>
    <link rel="stylesheet" href="css/guest.css">
</head>
<body>
    <div class="container">
        <div class="back">
            <span onclick="back()"></span>
            <span onclick="back()"></span>
            <span onclick="back()"></span>
        </div>
        <h2 align="center">Table Daftar Pengunjung</h2>
        <br><br>
        <div class="table">
            <table cellspacing="0" cellpadding="0" >
                <tr>
                    <th>No</th>
                    <th align="center">Foto</th>
                    <th>Nama</th>
                    <th>Nomor HP</th>
                    <th>Email</th>
                    <th>Komentar</th>
                </tr>
                <?php
                    $n = 1;
                    $s = 1;
                    $fp = fopen("dataGuest.txt", "r");
                    while ($isi = fgets($fp, 50000)) {
                        $pisah = explode("|", $isi);
                        
                ?>
                <tr id=<?php echo '"tr'.$s++.'"' ?> >
                    <td>
                        <?php echo $n; ?>
                    </td>
                    <td>
                        <img alt="Tidak ada Foto" src=
                        <?php
                            $out = fopen("simpan.txt", "r");
                            while(!feof($out)){
                                $r = fgets($out);
                                if($n==$r){
                                    echo '"Aset/Foto/'.$r.'.png" >';
                                }
                            }
                            fclose($out);
                        ?>
                    </td>
                    <td>
                        <?php echo $pisah[0]; ?>
                    </td>
                    <td>
                        <?php echo $pisah[1]; ?>
                    </td>
                    <td>
                        <?php echo $pisah[2]; ?>
                    </td>
                    <td>
                        <?php echo $pisah[3]; ?>
                    </td>
                </tr>
                <?php $n++; } ?>
            </table>
        </div>
    </div>
        <?php
            for($i=1; $i<=$s; $i++){
                if($i%2==0){
                    echo '<script>document.getElementById("tr'.$i.'").style.backgroundColor = "rgb(216, 216, 216)"</script>';
                }
            }
            echo '<script>function back(){ window.location="index.php"}</script>';
        ?>
</body>
</html>