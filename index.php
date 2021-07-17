<?php
    $getData = true;
    $dataFile = fopen("fileSub.txt", "r");
    $jmlFile = fread($dataFile, 1);
    fclose($dataFile);
    $ada = false;
    $f = true;
    $fileFoto = true;
    $nmDer = $nmBer = $emailEr = $hpEr = $coment = $fileEr = "";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $foto = (object) @$_FILES['upload'];
        $nm = $_POST['nmD'];
        $nm2 = $_POST['nmB'];
        $nmm = $nm." ".$nm2;
        $hp = $_POST['noHp'];
        $mail = $_POST['email'];
        $comment = $_POST['coment'];
        $ekstensi = [
            'image/png',
            'image/jpg',
            'image/jpeg',
            'image/webp'
        ];
        //Validasi Data
        if(empty($_POST['nmD'])){
            $nmDer = "Nama Tidak Boleh Kosong!";
            $getData = false;
        }else{
            $name = data_input($_POST['nmD']);
            if (!preg_match("/^[a-zA-Z-' ]*$/",$name)){
                $nmDer = "Nama tidak valid!";
                $getData = false;
            }
        }
        if(empty($_POST['nmB'])){
            $nmBer = "Nama Tidak Boleh Kosong!";
            $getData = false;
        }else{
            $name = data_input($_POST['nmB']);
            if (!preg_match("/^[a-zA-Z-' ]*$/",$name)){
                $nmBer = "Nama tidak valid!";
                $getData = false;
            }
        }
        if (empty($_POST["email"])){
            $emailEr = "Masukkan email anda";
            $getData = false;
        }else{
            $email = data_input($_POST["email"]);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
              $emailEr = "Invalid email format";
              $getData = false;
            }
        }
        if(empty($_POST['noHp'])) {
            $hpEr = 'NO HP tidak boleh kosong';
            $getData = false;
        } else if(!is_numeric($_POST['noHp'])) {
            $hpEr = 'NO HP harus angka';
            $getData = false;
        } else if(strlen($_POST['noHp']) != 12) {
            $hpEr = 'NO HP harus berjumlah 12 angka';
            $getData = false;
        }
        //Bagian Upload File
        if (!@$foto->name) {
            $f = false;
        }
        if(!@$foto->size > 1000 * 3000){
            $fileEr = "Ukuran file maksimal 3MB\n ";
            $fileFoto = false;
        }
        if (!in_array(@$foto->type, $ekstensi)) {
            $fileEr = "Ekstensi file tidak diizinkan!";
            $fileFoto = false;
        }
        $txt = "";
        if($fileFoto==true){
            if($f==true && $getData==true){
                $myFile = fopen("simpan.txt", "a+");
                $txt = (string)$jmlFile."\n";
                fwrite($myFile,$txt);
                fclose($myFile);
                $tempName = $_FILES["upload"]["tmp_name"];
		        $nama_baru =  "Aset/Foto/".$txt.".png";
                if(move_uploaded_file($tempName,$nama_baru)){

                }else{
                    $fileEr = "File Gagal di Upload";
                }
            }
        }
        $fp = fopen("dataGuest.txt", "r");
        while ($isi = fgets($fp, 50000)) {
            $pisah = explode("|", $isi);
            if($pisah[0] == $nmm || $pisah[1] == $hp || $pisah[2] == $mail){
                $ada = true;
            }
        }
        fclose($fp);
        if($getData==true){
            if($ada==false){
                echo '<script>alert("Data Pengunjung Ditambahkan")</script>';
                $myFile = fopen("dataGuest.txt", "a+") or die("Tidak Dapat Menemukan file!");
                $txt = $nmm."|".$hp."|".$mail."|".$comment."|"."\n";
                fwrite($myFile,$txt);
                fclose($myFile);
            }else{
                echo '<script>alert("Data Sudah Ada! Ulangi")</script>';
            }
        }else{
            echo '<script>alert("Tidak Bisa Mengirim Data!")</script>';
        }
    }

    function data_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Tugas 2 | Layouting CSS</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <div class="atas">
        <div class="logo">
            <h3>PWEB<span>.</span></h3>
        </div>
        <div class="nav">
        <ul>
            <li><a href="#home">HOME</a></li>
            <li><a href="#about">ABOUT</a></li>
            <li><a href="#partner">PARTNERS</a></li>
            <li><a href="#service">SERVICE</a></li>
            <li><a href="#contact">CONTACT</a></li>
            <li><a href="guest.php">GUEST</a></li>
        </ul>
        </div>
        <div class="uad">
            <a href="https://uad.ac.id/id/">UAD</a>
        </div>
    </div>
    <div class="banner" id="home">
        <div class="test">
            <center>
            <small>TUGAS AKHIR PWEB</small>
            <h2>ROSYAMDANI</h2>
            <a href="#about"><button>ABOUT ME</button></a>
            </center>
        </div>
    </div>
    <div id="about">
    <br>
        <div class="about">
            <center><h2>A<span>bout</span> M<span>e</span></h2></center>
            <br>
            <table cellspacing="1">
                <tr>
                    <th style="background-color: black; color: white; text-align: left; padding-left: 40px;">NAMA : </th>
                    <th class="kolom" style="background-color: black; text-align: left; margin-left: 20px;">ROSYAMDANI</th>
                </tr>
                <tr>
                    <td class="kolom-satu" style="background-color: gray;">NIM :</td>
                    <td class="kolom" style="background-color:gray;">2000018114</td>
                </tr>
                <tr>
                    <td class="kolom-satu" style="background-color: gray;">Pekerjaan :</td>
                    <td class="kolom" style="background-color: gray;">Mahasiswa</td>
                </tr>
                <tr>
                    <td class="kolom-satu" style="background-color: gray;">Universitas :</td>
                    <td class="kolom" style="background-color: gray;">Universitas Ahmad DAhlan</td>
                </tr>
                <tr>
                    <td class="kolom-satu" style="background-color: gray;">Jenis Kelamin :</td>
                    <td class="kolom" style="background-color: gray;">Laki Laki</td>
                </tr>
                <tr>
                    <td class="kolom-satu" style="background-color: gray;">Alamat :</td>
                    <td class="kolom" style="background-color: gray;">Jl. Raya Kerumut, Pringgabaya, LOTIM NTB</td>
                </tr>
            </table>
        </div>
    </div>
    <section id="partner" class="partner">
        <div class="contain">
            <h3>P<span>artners</span></h3><br>
            <div class="kotakk">
                <div class="boxx">
                    <div class="fot">
                        <a href="https://www.facebook.com/aldi.haryanto.7127"><img src="Aset/aldi.png"></a>
                        <p>Aldi Haryanto</p>
                    </div>
                </div>
                <div class="boxx">
                    <div class="fot">
                        <a href="#myfacebook"><img src="Aset/Rosyam.png"></a>
                        <p>Rosyamdani</p>
                    </div>
                </div>
                <div class="boxx">
                    <div class="fot">
                        <a href="https://www.facebook.com/widya.eksandra.1"><img src="Aset/sandra.png"></a>
                        <p>Widya Eksandra</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="service" class="service">
        <h3>S<span>ervice</span></h3>
        <div class="container">
                <div class="box">
                    <div class="col-4">
                        <div class="icon">MA</div>
                        <h4>MOBILE APPS</h4>
                    </div>
                </div>
                <div class="box">
                    <div class="col-4">
                        <div class="icon">WD</div>
                        <h4>WEB DEVELOPMENT</h4>
                    </div>
                </div>
                    <div class="box">
                        <div class="col-4">
                            <div class="icon">D</div>
                            <h4>DESIGN</h4>
                        </div>
                    </div>
                    <div class="box">
                        <div class="col-4">
                            <div class="icon">DM</div>
                            <h4>DIGITAL MARKETING</h4>
                        </div>
                    </div>
            </div>
            </section>
                <div id="contact">
                <div class="form">
                    <h2>P<span>engunjung</span></h2><br><br>
                    <form action=<?php echo '"'.htmlspecialchars($_SERVER["PHP_SELF"]).'"'?> method="post" enctype="multipart/form-data">
                        <input class="in" type="text" name="nmD" placeholder="Nama Depan"><span class="val">*<?php echo $nmDer ?></span>
                        <input class="in" type="text" name="nmB" placeholder="Nama Belakang"><span class="val">*<?php echo $nmBer ?></span>
                        <input class="in" type="email" name="email" placeholder="Email"><span class="val">*<?php echo $emailEr ?></span>
                        <input class="in" type="text"name="noHp" placeholder="No. HP"><span class="val">* <?php echo $hpEr ?></span>
                        <input class="in" type="file" name="upload" placeholder="Upload Foto Anda"><span class="val"><?php echo $fileEr ?></span>
                        <textarea rows="4" cols="80" name="coment" placeholder="Tulis pesan anda disini!"></textarea><?php echo $coment ?>
                        <br>
                        <input class="btn" type="submit" onclick="jml()" name="submit" value="Kirim">
                    </form>
                </div>
                <div class="cont">
                    <h3>M<span>y</span> A<span>dress</span></h3>
                    <div class="box">
                        <div class="col-5">
                            <h4>Alamat</h4>
                            <p>Jl. Pohgading-Tanjung, Kerumut Lotim</p>
                        </div>
                        <div class="col-5">
                            <h4>Email</h4>
                            <p>rosamdani91@gmail.com</p>
                        </div>
                        <div class="col-5">
                            <h4>No HP</h4>
                            <p>087885727458</p>
                        </div>
                        <div class="col-5">
                            <h4>Status</h4>
                            <p>Belum Kawin</p>
                        </div>
                        <div class="map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3945.148625495664!2d116.62326031486835!3d-8.581705193831946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcc47ced3832675%3A0x8d42896b0f28f2bf!2sPohgading%20Tim.%2C%20Pringgabaya%2C%20Kabupaten%20Lombok%20Timur%2C%20Nusa%20Tenggara%20Bar.%2083654!5e0!3m2!1sid!2sid!4v1625819308919!5m2!1sid!2sid" width="85%" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
                    <div class="sosmed">
                        <ul>
                            <li id="myfacebook"><a href="https://www.facebook.com/rosam.dany.7">Facebook</a></li>
                            <li><a href="https://www.instagram.com/rosyam_dani91/">Instagram</a></li>
                            <li><a href="https://wa.me/+6281930030467">WhatsApp</a></li>
                        </ul>
                    </div>
                </div>
            <!-- footer-->
            <footer>
            <div class="foot">
                <small>CopyRights &copy; Rosyamdani-All Right Reserved</small>
                <h4>Jumlah Pengunjung : 
                    <?php
                        $filecounter="counter.txt";
                        $fl=fopen($filecounter,"r+");
                        $hit= 0;
                        $hit=fread($fl,filesize($filecounter));
                        echo($hit);
                        fclose($fl);
                        $fl=fopen($filecounter,"w+");
                        $hit=$hit+1;
                        fwrite($fl,$hit,strlen($hit));
                        fclose($fl);
                    ?>
                </h4>
            </div>
        </footer>
        <?php
            echo '<script>function jml(){ '.
                $fileSubmit="fileSub.txt";
                $fl=fopen($fileSubmit,"r+");
                $jum=fread($fl,filesize($fileSubmit));
                fclose($fl);
                $fl=fopen($fileSubmit,"w+");
                $jum=$jum+1;
                fwrite($fl,$jum,strlen($jum));
                fclose($fl)
                .' }</script>';
        ?>
    </body>
</html>
