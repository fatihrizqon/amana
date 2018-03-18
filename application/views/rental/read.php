<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form role="form" method="post" action="<?php echo base_url('rental/update/').$rental['id_rental'];?>">

<label for="">Nama</label>
<input type="text" name="nama" value="<?php echo $rental['nama']; ?>">
		
<br>

<label for="">Telepon</label>
<input type="text" name="telepon"  value="<?php echo $rental['telepon']; ?>">

<br>

<label for="">Mobil</label>
<select>
<?php foreach($mobil as $data){ ?>
    <option value="<?php echo $data['id_mobil']; ?>">
    <?php
     echo $data['tipe'];  
     echo ' '.$data['warna']; 
     echo ' '.$data['plat_nomor'];
     echo ' '.$data['transmisi'];   
    ?>
    </option>
<?php } ?>
</select>
<br>

<label for="">Tanggal Pesan</label>
<input type="text"  value="<?php print(date("Y-m-d")); ?>">

<br>

<label for="">Pembayaran</label>
<input type="text" name="pembayaran" id="" value="<?php echo $rental['pembayaran']; ?>" >

<br>
    
<label for="">Sewa</label>
<input type="datetime-local"  value="
<?php 

$tanggal_sewa= $rental['tanggal_kembali']; 
echo $tanggal_sewa;
?>">

<label for="">Kembali</label>
<input type="datetime-local" name="tanggal_kembali" id="" value="<?php echo $rental['tanggal_kembali']; ?>" >

<br>
<button>Simpan</button>

</form>
</body>
</html>