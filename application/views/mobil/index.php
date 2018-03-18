<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mobil</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.css"/>
</head>

<body>
<div>
<a href="<?php echo base_url(); ?>">Beranda</a>
<a href="<?php echo base_url()."mobil"; ?>">Mobil</a>
</div>
<div class="mdl-grid">
<div class="mdl-cell mdl-cell--4-col"></div>
<div class="mdl-cell mdl-cell--4-col mdl-shadow--2dp tambah-mobil">
<h4>Tambah Mobil</h4>
<form role="form" method="post" action="<?php echo base_url('mobil/create');?>">
    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
        <input class="mdl-textfield__input" type="text" id="tipe" name="tipe">
        <label class="mdl-textfield__label" for="tipe">Masukkan Tipe Mobil</label>
    </div>

    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
        <input class="mdl-textfield__input" type="text" id="plat_nomor" name="plat_nomor">
        <label class="mdl-textfield__label" for="plat_nomor">Masukkan Plat Nomor</label>
    </div>

    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
        <input class="mdl-textfield__input" type="text" id="warna" name="warna">
        <label class="mdl-textfield__label" for="warna">Masukkan Warna Mobil</label>
    </div>

    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
        <input class="mdl-textfield__input" type="text" id="transmisi" name="transmisi">
        <label class="mdl-textfield__label" for="transmisi">Masukkan Transmisi Mobil</label>
    </div>

    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
        <input class="mdl-textfield__input" type="text" id="harga" name="harga">
        <label class="mdl-textfield__label" for="harga">Masukkan Harga Sewa Mobil Per Hari</label>
    </div>
    <br>
    <div align="right">
        <button class="mdl-button mdl-js-button mdl-button--primary mdl-js-ripple-effect ">Simpan</button>
    </div>
</form>

</div>
<div class="mdl-cell mdl-cell--4-col"></div>
</div>
<hr>

<div class="mdl-grid">

<div class="mdl-cell mdl-cell--0-col"></div>

<div class="mdl-cell mdl-cell--12-col">
    <div class=" table-responsive">
    <table id="mobil" class="mdl-data-table mdl-js-data-table mdl-shadow--2dp">
    <thead>
        <th>ID Mobil</th>
        <th>Tipe</th>
        <th>Warna</th>
        <th>Plat Nomor</th>
        <th>Transmisi</th>
        <th>Harga</th>
        <th>Pilihan</th>
    </thead>
    <tbody>
    <?php
    foreach($mobil as $data){
    ?>
        <tr>
            <td><?php echo $data['id_mobil']; ?></td>
            <td><?php echo $data['tipe']; ?></td>
            <td><?php echo $data['warna']; ?></td>
            <td><?php echo $data['plat_nomor']; ?></td>
            <td><?php echo $data['transmisi']; ?></td>
            <td><?php echo $data['harga']; ?></td>
            <td> <a href="<?php echo base_url().'mobil/read/'.$data['id_mobil'];  ?>"> Edit </a> | <a href="<?php echo base_url().'mobil/delete/'.$data['id_mobil'];  ?>">Hapus</a> </td> 
        </tr>
    <?php 
    }
    ?>
    </tbody>
    </table>
    </div>
</div>
<div class="mdl-cell mdl-cell--0-col"></div>

</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.js"></script>


<script>
$(document).ready(function() {
    $('#mobil').DataTable( {
        columnDefs: [
            {
                targets: [ 0, 1, 2 ],
                className: 'mdl-data-table__cell--non-numeric'
            }
        ]
    } );
} );
</script>