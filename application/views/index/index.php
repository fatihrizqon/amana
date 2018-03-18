<main class="mdl-layout__content">
  <div class="mdl-grid">
    <div class="mdl-layout-spacer"><!-- Spacer --></div>
    <div class="mdl-cell mdl-cell--4-col">
      <div class="rental-container">
        <h4 align="center">Reservasi Rental</h4>
        <hr>
        <form role="form" method="post" action="<?php echo base_url('rental/create');?>">
          <md-input-container flex="200">
            <label>Nama Pelanggan</label>
            <input required name="nama" ng-model="rental.nama">
            <div ng-messages="rentalForm.nama.$error">
              <div ng-message="required">This is required.</div>
            </div>
          </md-input-container>
          <br>
          <md-input-container flex="200">
            <label>Nomor Telepon</label>
            <input required name="telepon" ng-model="rental.telepon">
            <div ng-messages="rentalForm.telepon.$error">
              <div ng-message="required">This is required.</div>
            </div>
          </md-input-container>
          <br>
          <md-input-container flex="200">
            <label>Mobil</label>
            <md-select name="id_mobil" ng-model="rental.mobil" required>
              <?php foreach($mobil as $data){ ?>
                <md-option value="<?php echo $data['id_mobil']; ?>">
                  <?php
                   echo $data['tipe'];
                   echo ' '.$data['warna'];
                   echo ' '.$data['plat_nomor'];
                   echo ' '.$data['transmisi'];
                  ?>
                </md-option>
              <?php } ?>
            </md-select>
          </md-input-container>
          <br>
          <md-input-container>
            <md-datepicker name='tanggal_pesan' ng-model="rental.tanggal_pesan" md-placeholder="Enter date"></md-datepicker>
          </md-input-container>
          <br>
          <md-input-container flex="200">
            <label>Pembayaran</label>
            <input required name="pembayaran" ng-model="rental.pembayaran">
            <div ng-messages="rentalForm.pembayaran.$error">
              <div ng-message="required">This is required.</div>
            </div>
          </md-input-container>
          <br>
          <label for="">Sewa</label>
          <input type="datetime-local" name="tanggal_sewa" id="">
          <br>
          <br>
          <label for="">Kembali</label>
          <input type="datetime-local" name="tanggal_kembali" id="">
          <br>
          <div class="" align="right">
            <md-button type='submit' class="md-raised md-primary green-tea">Simpan</md-button>
          </div>
        </form>
      </div>
    </div>
    <div class="mdl-layout-spacer"><!-- Spacer --></div>
  </div>

</main>
