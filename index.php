<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Tugas 2 | Layouting CSS</title>
    <link rel="stylesheet" type="text/css" href="style.css">
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
                        <img src="wulan.png">
                    </div>
                    <a href="#">Aldinna wulan Anggraini</a>
                </div>
                <div class="boxx">
                    <div class="fot">
                        <img src="Rosyam.png">
                    </div>
                    <a href="#">Rosyamdani</a>
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
                        <h2>H<span>ubungi</span> S<span>aya</span></h2><br><br>
                        <form action="index.html" method="post">
                            <input class="in" type="text" name="nama" placeholder="Nama Depan">
                            <input class="in" type="text" name="nama" placeholder="Nama Belakang">
                            <input class="in" type="email" name="nama" placeholder="Email">
                            <input class="in" type="text" name="nama" placeholder="No. HP">
                            <textarea rows="4" cols="80" placeholder="Tulis pesan anda disini!"></textarea>
                            <br>
                            <input class="btn" type="submit" name="" value="Kirim">
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
                                <p>087885727458</p></div>
                                <div class="col-5">
                                    <h4>Status</h4>
                                    <p>Belum Kawin</p>
                                </div>
                            </div>
                            <div class="map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3945.148625495664!2d116.62326031486835!3d-8.581705193831946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcc47ced3832675%3A0x8d42896b0f28f2bf!2sPohgading%20Tim.%2C%20Pringgabaya%2C%20Kabupaten%20Lombok%20Timur%2C%20Nusa%20Tenggara%20Bar.%2083654!5e0!3m2!1sid!2sid!4v1625819308919!5m2!1sid!2sid" width="85%" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                    </div>
                </div>
                    <!-- footer-->
                </div>
                <footer>
                    <div class="foot">
                        <small>CopyRights &copy; Rosyamdani-All Right Reserved</small>
                    </div>
                </footer>
            </body>
         </html>
