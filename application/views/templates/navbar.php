<header class="mdl-layout__header dark-green-tea mdl-shadow--2dp">
  <div class="mdl-layout__header-row">
    <!-- Title -->
    <span class="mdl-layout-title">myApp</span>
    <!-- Add spacer, to align navigation to the right -->
    <div class="mdl-layout-spacer"></div>
    <!-- Navigation -->
    <nav class="mdl-navigation">
      <a class="mdl-navigation__link" href="<?php echo base_url(); ?>">Rental</a>
    </nav>
  </div>
</header>
<div class="mdl-layout__drawer">
  <span class="mdl-layout-title">AMN-TRANS</span>
  <nav class="mdl-navigation">
    <a class="mdl-navigation__link" href="<?php echo base_url()."rental"; ?>">Data Rental</a>
    <a class="mdl-navigation__link" href="<?php echo base_url()."kendaraan"; ?>">Data Kendaraan</a>
    <a class="mdl-navigation__link" href="">Data Kursus Mengemudi</a>
    <a class="mdl-navigation__link" href="">Data Kursus Baca Al-Qur'an</a>
    <a class="mdl-navigation__link" href="">Data Keuangan</a>
  </nav>
</div>
