<form role="form" method="post" action="<?php echo base_url('mobil/update/').$mobil['id_mobil'];?>">

    <label for="">Tipe</label>
    <input type="text" name="tipe" value="<?php echo $mobil['tipe']; ?>">
    <br>
    
    <label for="">Plat Nomor</label>
    <input type="text" name="plat_nomor" value="<?php echo $mobil['plat_nomor']; ?>">
    <br>

    <label for="">Warna</label>
    <input type="text" name="warna" value="<?php echo $mobil['warna']; ?>">
    <br>

    <label for="">Transmisi</label>
    <input type="text" name="transmisi" value="<?php echo $mobil['transmisi']; ?>">
    <br>

    <label for="">Tahun</label>
    <input type="text" name="tahun" value="<?php echo $mobil['tahun']; ?>">
    <br>

    <label for="">Harga</label>
    <input type="text" name="harga" value="<?php echo $mobil['harga']; ?>">

    <button>Simpan</button>
</form>