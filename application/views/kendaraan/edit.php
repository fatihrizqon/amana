<form role="form" method="post" action="<?php echo base_url('kendaraan/update/').$kendaraan['id_kendaraan'];?>">

    <label for="">Tipe</label>
    <input type="text" name="tipe" value="<?php echo $kendaraan['tipe']; ?>">
    <br>
    
    <label for="">Plat Nomor</label>
    <input type="text" name="plat_nomor" value="<?php echo $kendaraan['plat_nomor']; ?>">
    <br>

    <label for="">Warna</label>
    <input type="text" name="warna" value="<?php echo $kendaraan['warna']; ?>">
    <br>

    <label for="">Transmisi</label>
    <input type="text" name="transmisi" value="<?php echo $kendaraan['transmisi']; ?>">
    <br>

    <label for="">Tahun</label>
    <input type="text" name="tahun" value="<?php echo $kendaraan['tahun']; ?>">
    <br>

    <label for="">Harga</label>
    <input type="text" name="harga" value="<?php echo $kendaraan['harga']; ?>">

    <button>Simpan</button>
</form>