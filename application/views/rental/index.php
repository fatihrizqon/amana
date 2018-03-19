<main class="mdl-layout__content">
<div class="mdl-grid">
  <div class="mdl-cell mdl-cell--4-col" align="center">
    <div class="data-rental-container mdl-shadow--2dp">
      <br>
      <label for=""></label><b>Data :</b> 
      <?php 
      echo date('l jS \of F Y h:i:s A'); 
      ?></p>
      <ul class="demo-list-control mdl-list">
        <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            <i class="material-icons  mdl-list__item-avatar">person</i>
            Jumlah Rental :
          </span>
          <span class="mdl-list__item-secondary-action">
          <?php echo $this->db->count_all('rental'); ?>
          </span>
        </li>
        <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            <i class="material-icons  mdl-list__item-avatar">money</i>
            Total Pemasukan :
          </span>
          <span class="mdl-list__item-secondary-action">
          <?php echo "Rp."."200000".",-"; ?>
          </span>
        </li>
      </ul>





    </div>
  </div>
  <div class="mdl-cell mdl-cell--4-col" align="center">
    <div class="data-rental-container">
      <label for=""></label>Minggu Ini</p>
    </div>
  </div>
  <div class="mdl-cell mdl-cell--4-col" align="center">
    <div class="data-rental-container">
      <label for=""></label>Bulan Ini</p>
    </div>
  </div>

  <div class="mdl-cell mdl-cell--6-col" align="center">
    <div class="data-rental-container">
      Bulan Kemarin
    </div>
  </div>
  <div class="mdl-cell mdl-cell--6-col" align="center">
    <div class="data-rental-container">
      Daftar Laporan
    </div>
  </div>

  <div class="mdl-cell mdl-cell--12-col">
    <div class="table-responsive">
    <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp">
      <thead>
        <th class="mdl-data-table__cell--non-numeric">ID Rental</th>
        <th class="mdl-data-table__cell--non-numeric">Nama</th>
        <th class="mdl-data-table__cell--non-numeric">Telepon</th>
        <th class="mdl-data-table__cell--non-numeric">Mobil</th>
        <th class="mdl-data-table__cell--non-numeric">Tanggal Pesan</th>
        <th class="mdl-data-table__cell--non-numeric">Tanggal Sewa</th>
        <th class="mdl-data-table__cell--non-numeric">Tanggal Kembali</th>
        <th class="mdl-data-table__cell--non-numeric">Tagihan</th>
        <th class="mdl-data-table__cell--non-numeric">Lama Sewa</th>
        <th class="mdl-data-table__cell--non-numeric">Total Bayar</th>
        <th class="mdl-data-table__cell--non-numeric">Status Pembayaran</th>
        <th class="mdl-data-table__cell--non-numeric">Operator</th>
        <th class="mdl-data-table__cell--non-numeric">Pilihan</th>
      </thead>

      <tbody>
      <?php foreach($rental as $data){?>
      <tr align="center">
      <td><?php echo $data['id_rental']; ?> </td>
      <td><?php echo $data['nama']; ?> </td>
      <td><?php echo $data['telepon']; ?> </td>
      <td><?php
      echo $data['tipe'];
      echo ' '.$data['warna'];
      echo ' '.$data['plat_nomor'];
      echo ' '.$data['transmisi'];
      ?> </td>
      <td><?php echo $data['tanggal_pesan']; ?> </td>
      <td><?php echo $data['tanggal_sewa']; ?> </td>
      <td><?php echo $data['tanggal_kembali']; ?> </td>
      <td><?php

      $tanggal_sewa = new DateTime($data['tanggal_sewa']);
      $tanggal_kembali = new DateTime($data['tanggal_kembali']);
      $diff = $tanggal_kembali->diff($tanggal_sewa);
      $day = $diff->format("%d");
      $hours = $diff->format("%h");
      $converHoursFromDay = $day * 24;
      $total = $converHoursFromDay + $hours;
      // 12 Jam
      if($total <= 12 && $day == 0){
          $price = $data['harga']-50000;
          $totalPayment = $price;
      }
      // Diatas 12 Jam
      elseif($total <= 24 && $day == 0){
          $price1 = $data['harga']-50000;
          $price2 = ($total - 12) * 18000;
          $totalPayment = $price1 + $price2;
      }
      // 1 Hari lebih
      elseif($total > 12 && $day > 0){
        $dayPrice = $data['harga']*$day;
        if($hours == 0 ){
            $hoursPrice = 0;
          }elseif($hours <= 24 ){
            $hoursPrice = $hours*20000;
          }else{
            $hoursPrice = 200000;
          }
            $totalPayment = $dayPrice + $hoursPrice;
      }else{
          $price = 0;
      }
      echo $totalPayment;
      ?> </td>

      <td>
      <?php echo $day." Hari ".$hours." Jam ";?>
      </td>

      <td><?php
      $payment = $totalPayment-$data['pembayaran'];
      echo $payment;
      ?> </td>

      <td><?php
      if($data['pembayaran']==0){
          echo "Belum Lunas";
      }elseif($payment!=0){

          echo "Down Payment (DP) : ".$data['pembayaran'];
      }elseif($totalPayment==$data['pembayaran']){
          echo "Lunas";
      }else{
          echo "Unknown";
      }
      ?> </td>
      <td><?php echo $data['id_users']; ?> </td>
      <td> <a href="<?php echo base_url().'rental/read/'.$data['id_rental'];  ?>"> Edit </a> | <a href="<?php echo base_url().'rental/delete/'.$data['id_rental'];  ?>">Hapus</a> </td>
      </tr>
      <?php } ?>
      </tbody>
    </table>
    </div>
  </div>



</div>
</main>
