<?php
//ngambil data dari form sebelumnya
$nisn = $_POST['nisn'];
$asalsekolah = $_POST['asalsekolah'];
$tahunlulus = $_POST['tahunlulus'];

$nama = $_POST['nama'];
$nik = $_POST['nik'];
$ttl = $_POST['ttl'];
$jk = $_POST['jk'];
$desa = $_POST['desa'];
$kec = $_POST['kec'];
$kab = $_POST['kab'];
$email = $_POST['email'];

$nokk = $_POST['nokk'];
$namaayah = $_POST['namaayah'];
$agamaayah = $_POST['agamaayah'];
$pekerjaanayah = $_POST['pekerjaanayah'];
$namaibu = $_POST['namaibu'];
$agamaibu = $_POST['agamaibu'];
$pekerjaanibu = $_POST['pekerjaanibu'];
$desaortu = $_POST['desaortu'];
$kecortu = $_POST['kecortu'];
$kabortu = $_POST['kabortu'];

?>
<!--
    Nama : Rz
    NIM : A11.2022.14741
    TANGGAL : 27/9/2022
    MATKULL : PEMPROGRAMAN BERBASIS WEB
-->
<!DOCTYPE html>
<head>
    <title>Registrasi FORM - PPDB 2022</title>
    <style>
        .h2form{
            text-align: center;
            background-color: blanchedalmond;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }
        .tableform{
            background-color: blanchedalmond;
            font-family: 'Courier New', Courier, monospace;
        }
    </style>
</head>
<body>
    <h2 class="h2form">Result FORM - PPDB 2022</h2>
        <table class="tableform">
            <th><b>DATA SEKOLAH</b></th>
            <tr>
                <td>NISN</td>
                <td>:</td>
                <td><?php echo $nisn;?></td>
            </tr>
            <tr>
                <td>Asal sekolah</td>
                <td>:</td>
                <td><?php echo $asalsekolah;?></td>
            </tr>
            <tr>
                <td>Tahun lulus</td>
                <td>:</td>
                <td><?php echo $tahunlulus;?></td>
            </tr>
            <th><b>DATA CALON PESERTA</b></th>
            <tr>
                <td>Nama lengkap</td>
                <td>:</td>
                <td><?php echo $nama;?></td>
            </tr>
            <tr>
                <td>NIK</td>
                <td>:</td>
                <td><?php echo $nik;?></td>
            </tr>
            <tr>
                <td>Tempat/Tanggal lahir</td>
                <td>:</td>
                <td><?php echo $ttl;?></td>
            </tr>
            <tr>
                <td>Jenis kelamin</td>
                <td>:</td>
                <td><?php echo $jk;?></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><?php echo $desa;?>,</td>
                <td><?php echo $kec;?></td>
                <td>- <?php echo $kab;?></td>
            </tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td><?php echo $email;?></td>
            </tr>
            <th><b>DATA ORANG TUA</b></th>
            <tr>
                <td>Nomor kartu keluarga</td>
                <td>:</td>
                <td><?php echo $nokk;?></td>
            </tr>
            <tr>
                <td>Nama ayah</td>
                <td>:</td>
                <td><?php echo $namaayah;?></td>
            </tr>
            <tr>
                <td>Agama</td>
                <td>:</td>
                <td><?php echo $agamaayah;?></td>
            </tr>
            <tr>
                <td>Pekerjaan</td>
                <td>:</td>
                <td><?php echo $pekerjaanayah;?></td>
            </tr>
            <tr>
                <td>Nama ibu</td>
                <td>:</td>
                <td><?php echo $namaibu;?></td>
            </tr>
            <tr>
                <td>Agama</td>
                <td>:</td>
                <td><?php echo $agamaibu;?></td>
            </tr>
            <tr>
                <td>Pekerjaan</td>
                <td>:</td>
                <td><?php echo $pekerjaanibu;?></td>
            </tr>
            <tr>
                <td>Alamat Orang Tua</td>
                <td>:</td>
                <td><?php echo $desaortu;?>,</td>
                <td><?php echo $kecortu;?></td>
                <td>- <?php echo $kabortu;?></td>
            </tr>
        </table>
    </form>
</body>