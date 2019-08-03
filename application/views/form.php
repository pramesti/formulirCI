<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Pendaftaran</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Font Icon -->
    <link rel="stylesheet" href="<?= base_url('assets/fonts/material-icon/css/material-design-iconic-font.min.css')?>"> 
    <!-- Main css -->
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css')?>">
</head>
<body>

    <div class="main">

        <div class="container" style="margin-left:350px;">
            <form method="POST" class="appointment-form" id="appointment-form" action="<?= base_url('index.php/formulir/submituser')?>">
                <h2>Formulir Pendaftaran <br> Dewan Eksekutif Mahasiswa Universitas (Dema-U)
                </h2>
                <div class="form-group-1">
                    <input type="text" name="nama" id="nama" placeholder="Masukkan Nama Lengkap" required />
                    <input type="text" name="nim" id="nim" placeholder="Masukkan NIM" required />
                    <input type="text" name="fakultas" id="fakultas" placeholder="Masukkan Fakultas" required />
                    <input type="text" name="jurusan" id="jurusan" placeholder="Masukkan Jurusan" required />
                    <input type="text" name="ipk" id="ipk" placeholder="Masukkan IPK" required />
                    <input type="number" name="no_hp" id="phone_number" placeholder="Nomer HP" required />
                    
                </div>
                <div class="form-group-2">
                    <h3>Riwayat Pendidikan</h3>
                    <div class="row">
                        <div class="col">
                            <input class="rs1-wrap-input100" style="width:200px" type="text" name="nama_sd" placeholder="SD"  required />
                        </div>
                        <div class="col">
                            <input class="rs1-wrap-input100" style="width:200px" type="number" name="tahun_sd" placeholder="Tahun" required />
                        </div>
                    </div>
                <div class="row">
                        <div class="col">
                            <input class="rs1-wrap-input100" style="width:200px" type="text" name="nama_smp" placeholder="SMP"  required />
                        </div>
                        <div class="col">
                            <input class="rs1-wrap-input100" style="width:200px" type="number" name="tahun_smp" placeholder="Tahun" required />
                        </div>
                    </div>
                <div class="row">
                        <div class="col">
                            <input class="rs1-wrap-input100" style="width:200px" type="text" name="nama_sma" placeholder="SMA"  required />
                        </div>
                        <div class="col">
                            <input class="rs1-wrap-input100" style="width:200px" type="number" name="tahun_sma" placeholder="Tahun" required />
                        </div>
                    </div>
                <div class="row">
                        <div class="col">
                            <input class="rs1-wrap-input100" style="width:200px" type="text" name="nama_s1" placeholder="S1"  />
                        </div>
                        <div class="col">
                            <input class="rs1-wrap-input100" style="width:200px" type="number" name="tahun_s1" placeholder="Tahun"  />
                        </div>
                    </div>
                    <h3>Pengalaman Organisasi</h3>
                    <div class="row">
                        <div class="col">
                            <input class="rs1-wrap-input100" style="width:200px" type="text" name="nama_organisasi" placeholder="Nama Organisasi"  />
                        </div>
                        <div class="col">
                            <input class="rs1-wrap-input100" style="width:200px" type="number" name="jabatan" placeholder="Jabatan"  />
                        </div>
                    </div>
                <div class="row">
                        <div class="col">
                            <input class="rs1-wrap-input100" style="width:200px" type="text" name="nama_organisasi1" placeholder="Nama Organisasi"  />
                        </div>
                        <div class="col">
                            <input class="rs1-wrap-input100" style="width:200px" type="number" name="jabatan1" placeholder="Jabatan"  />
                        </div>
                    </div>
                <div class="row">
                        <div class="col">
                            <input class="rs1-wrap-input100" style="width:200px" type="text" name="nama_organisasi2" placeholder="Nama Organisasi"  />
                        </div>
                        <div class="col">
                            <input class="rs1-wrap-input100" style="width:200px" type="number" name="jabatan2" placeholder="Jabatan"  />
                        </div>
                    </div>
                <div class="row">
                        <div class="col">
                            <input class="rs1-wrap-input100" style="width:200px" type="text" name="nama_organisasi3" placeholder="Nama Organisasi"   />
                        </div>
                        <div class="col">
                            <input class="rs1-wrap-input100" style="width:200px" type="number" name="jabatan3" placeholder="Jabatan"  />
                        </div>
                    </div>
                <div class="form-submit">
                    <input type="submit" name="submit" id="submit" class="submit" value="Daftar" />
                </div>
                <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
                <script>
                  <?php if($this->session->flashdata('success')){ ?>
                    swal("Berhasil!", "<?= $this->session->flashdata('success') ?>", "success");
                  <?php } ?>
                </script>
            </form>
        </div>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>