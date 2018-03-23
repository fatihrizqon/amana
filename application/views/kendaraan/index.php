<main class="mdl-layout__content">

<div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
  <div class="mdl-tabs__tab-bar">
      <a href="#administrasi-kendaraan" class="mdl-tabs__tab is-active">Administrasi Kendaraan</a>
      <a href="#data-kendaraan" class="mdl-tabs__tab">Data Kendaraan</a>
  </div>

  <div class="mdl-tabs__panel is-active" id="administrasi-kendaraan">
    <div class="mdl-grid">
    <div class="mdl-cell mdl-cell--6-col mdl-shadow--2dp white-container">
    <div class="table-responsive">
    Mobil Ready
    <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp">
        <thead>
            <th class="mdl-data-table__cell--non-numeric">ID</th>
            <th class="mdl-data-table__cell--non-numeric">Jenis</th>
            <th class="mdl-data-table__cell--non-numeric">Tipe</th>
            <th class="mdl-data-table__cell--non-numeric">Warna</th>
            <th class="mdl-data-table__cell--non-numeric">Plat Nomor</th>
            <th class="mdl-data-table__cell--non-numeric">Transmisi</th>
        </thead>
        <tbody>
        <?php
        foreach($available as $data){
        ?>
            <tr>
                <td class="mdl-data-table__cell--non-numeric"><?php echo $data['id_kendaraan']; ?></td>
                <td class="mdl-data-table__cell--non-numeric"><?php 
                if($data['jenis']==1){
                    echo "Mobil";
                }else{
                    echo "Motor";
                }
                
                ?></td>
                <td class="mdl-data-table__cell--non-numeric"><?php echo $data['tipe']; ; ?></td>
                <td class="mdl-data-table__cell--non-numeric"><?php echo $data['warna']; ; ?></td>
                <td class="mdl-data-table__cell--non-numeric"><?php echo $data['plat_nomor']; ; ?></td>
                <td class="mdl-data-table__cell--non-numeric"><?php echo $data['transmisi']; ; ?></td>
            </tr>
        <?php
        }
        ?>
        </tbody>
    </table>
    </div>
    </div>
    <div class="mdl-cell mdl-cell--6-col mdl-shadow--2dp white-container">
    <div class="table-responsive">
    Mobil Unavailable
    <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp">
        <thead>
            <th class="mdl-data-table__cell--non-numeric">ID</th>
            <th class="mdl-data-table__cell--non-numeric">Jenis</th>
            <th class="mdl-data-table__cell--non-numeric">Tipe</th>
            <th class="mdl-data-table__cell--non-numeric">Warna</th>
            <th class="mdl-data-table__cell--non-numeric">Plat Nomor</th>
            <th class="mdl-data-table__cell--non-numeric">Transmisi</th>
        </thead>
        <tbody>
        <?php
        foreach($unavailable as $data){
        ?>
            <tr>
                <td class="mdl-data-table__cell--non-numeric"><?php echo $data['id_kendaraan']; ?></td>
                <td class="mdl-data-table__cell--non-numeric"><?php 
                if($data['jenis']==1){
                    echo "Mobil";
                }else{
                    echo "Motor";
                }
                
                ?></td>
                <td class="mdl-data-table__cell--non-numeric"><?php echo $data['tipe']; ; ?></td>
                <td class="mdl-data-table__cell--non-numeric"><?php echo $data['warna']; ; ?></td>
                <td class="mdl-data-table__cell--non-numeric"><?php echo $data['plat_nomor']; ; ?></td>
                <td class="mdl-data-table__cell--non-numeric"><?php echo $data['transmisi']; ; ?></td>
            </tr>
        <?php
        }
        ?>
        </tbody>
    </table>
    </div>
    </div>
    </div>
    <div class="mdl-grid">
        <div class="mdl-layout-spacer"></div>
        <div class="mdl-cell mdl-cell--6-col mdl-shadow--2dp white-container">
            <h4>Administrasi Kendaraan</h4>
                <form role="form" method="post" action="<?php echo base_url('kendaraan/create');?>">
                    <md-input-container flex="200">
                        <label>Tipe Kendaraan</label>
                        <input required name="tipe" ng-model="kendaraan.tipe">
                        <div ng-messages="kendaraanForm.tipe.$error">
                        <div ng-message="required">This is required.</div>
                        </div>
                    </md-input-container>
                    <md-input-container flex="200">
                        <label>Plat Nomor</label>
                        <input required name="plat_nomor" ng-model="kendaraan.plat_nomor">
                        <div ng-messages="kendaraanForm.plat_nomor.$error">
                        <div ng-message="required">This is required.</div>
                        </div>
                    </md-input-container>
                    <md-input-container flex="200">
                        <label>Warna Kendaraan</label>
                        <input required name="warna" ng-model="kendaraan.warna">
                        <div ng-messages="kendaraanForm.warna.$error">
                        <div ng-message="required">This is required.</div>
                        </div>
                    </md-input-container>
                    <md-input-container flex="200">
                        <label>Transmisi Kendaraan</label>
                        <input required name="Transmisi" ng-model="kendaraan.Transmisi">
                        <div ng-messages="kendaraanForm.Transmisi.$error">
                        <div ng-message="required">This is required.</div>
                        </div>
                    </md-input-container>
                    <md-input-container flex="200">
                        <label>Tahun Kendaraan</label>
                        <input required name="tahun" ng-model="kendaraan.tahun">
                        <div ng-messages="kendaraanForm.tahun.$error">
                        <div ng-message="required">This is required.</div>
                        </div>
                    </md-input-container>
                    <md-input-container flex="200">
                        <label>Harga Sewa Kendaraan</label>
                        <input required name="harga" ng-model="kendaraan.harga">
                        <div ng-messages="kendaraanForm.harga.$error">
                        <div ng-message="required">This is required.</div>
                        </div>
                    </md-input-container>
                    <br>
                    <div align="right">
                        <button class="mdl-button mdl-js-button mdl-button--primary mdl-js-ripple-effect ">Simpan</button>
                    </div>
                </form>
            </div>    
        <div class="mdl-layout-spacer"></div>
        </div>
    </div>


    <div class="mdl-tabs__panel" id="data-kendaraan">
    <div class="mdl-grid">
    <div class="mdl-layout-spacer"></div>
        <div class="mdl-cell mdl-cell--12-col table-responsive white-container mdl-shadow--2dp">
        <table id="kendaraan" class="mdl-data-table mdl-js-data-table mdl-shadow--2dp">
                <thead>
                    <th class="mdl-data-table__cell--non-numeric">ID</th>
                    <th class="mdl-data-table__cell--non-numeric">Jenis</th>
                    <th class="mdl-data-table__cell--non-numeric">Tipe</th>
                    <th class="mdl-data-table__cell--non-numeric">Warna</th>
                    <th class="mdl-data-table__cell--non-numeric">Plat Nomor</th>
                    <th class="mdl-data-table__cell--non-numeric">Transmisi</th>
                    <th class="mdl-data-table__cell--non-numeric">Pajak</th>
                    <th class="mdl-data-table__cell--non-numeric">Servis Terakhir</th>
                    <th class="mdl-data-table__cell--non-numeric">Lokasi Servis</th>
                    <th class="mdl-data-table__cell--non-numeric">Harga</th>
                    <th class="mdl-data-table__cell--non-numeric">Pilihan</th>
                </thead>
                <tbody>
                <?php
                foreach($kendaraan as $data){
                ?>
                    <tr>
                        <td class="mdl-data-table__cell--non-numeric"><?php echo $data['id_kendaraan']; ?></td>
                        <td class="mdl-data-table__cell--non-numeric">
                        <?php 
                        if($data['jenis']==1){
                            echo "Mobil";
                        }else{
                            echo "Motor";
                        }
                        ?>
                        </td>
                        <td class="mdl-data-table__cell--non-numeric"><?php echo $data['tipe']; ?></td>
                        <td class="mdl-data-table__cell--non-numeric"><?php echo $data['warna']; ?></td>
                        <td class="mdl-data-table__cell--non-numeric"><?php echo $data['plat_nomor']; ?></td>
                        <td class="mdl-data-table__cell--non-numeric"><?php echo $data['transmisi']; ?></td>
                        <td class="mdl-data-table__cell--non-numeric"><?php echo "Pajak"; ?></td> 
                        <td class="mdl-data-table__cell--non-numeric"><?php echo "Servis Terakhir"; ?></td>
                        <td class="mdl-data-table__cell--non-numeric"><?php echo "Lokasi Servis"; ?></td>  
                        <td class="mdl-data-table__cell--non-numeric"><?php echo $data['harga']; ?></td>
                        <td class="mdl-data-table__cell--non-numeric"> <a href="<?php echo base_url().'kendaraan/read/'.$data['id_kendaraan'];  ?>"> Edit </a> | <a href="<?php echo base_url().'kendaraan/delete/'.$data['id_kendaraan'];  ?>">Hapus</a> </td> 
                    </tr>
                <?php 
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
    </div>
  </div>
</div>


</main>