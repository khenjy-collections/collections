<?php switch ($this->session->userdata($base_url . $tabel9_field6)) {
  case $tabel9_field6_value3:
  // case $tabel9_field6_value4:
    break;

  default:
    redirect(site_url() . 'welcome/no_level');
}
?>

<!-- halaman print untuk pesanan -->

<base href="<?= base_url('assets/') ?>">
<!DOCTYPE html>
<html lang="en">

<?php $this->load->view($head) ?>

<body>

  <!-- border garis putus-putus -->
  <div class="container" style="border-style: dashed;">
    <?php foreach ($tbl7 as $tl7) : ?>
      <h1 class="text-center"><?= $title ?><?= $phase ?></h1>
      <p class="text-center"><?= $tl7->$tabel7_field2; ?> | <?= $tl7->$tabel7_field8; ?> | <?= $tl7->$tabel7_field7; ?></p>
      <p class="text-center"><?= $tl7->$tabel7_field6; ?></p>
    <?php endforeach; ?>

    <!-- menampilkan data pesanan sebagai ps -->

    <!-- menampilkan data pemesan -->
    <table class="table">
      <thead class="thead">
        <tr>
          <th><?= $tabel12_field1_alias ?></th>
          <th><?= $tabel12_field2_alias ?></th>
          <th><?= $tabel12_field4_alias ?></th>
          <th><?= $tabel12_field3_alias ?></th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($tbl12 as $tl12) : ?>
          <tr>
            <td width=""><?= $tl12->$tabel12_field1 ?></td>
            <td width=""><?= $tl12->$tabel12_field2 ?></td>
            <td width=""><?= $tl12->$tabel12_field4 ?></td>
            <td width=""><img src="img/tabel12/<?= $tl12->$tabel12_field3 ?>" width="100"></td>
          </tr>
        <?php endforeach ?>
      </tbody>
    </table>

  </div>

  <script src="jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <script src="fontawesome/js/all.js"></script>

  <script>
    window.print();
  </script>
</body>

</html>