<?php 
    $no_telp = explode(', ', $data['no_telp']);
?>

<h1>Kode Reservasi: <?= $data['kode_reservasi'] ?></h1>
<ul>
    <li>Nama Pemesan: <?= $data['nama_depan'] . ' ' . $data['nama_belakang']; ?></li>
    <li>Nomor Telepon (main): <?= $no_telp[0]; ?></li>
    <li>Nomor Telepon (backup): <?= $no_telp[1]; ?></li>
    <li>Tanggal Reservasi: <?= $data['tanggal_reservasi']; ?></li>
    <li>Status Reservasi: <?php echo $data['status_reservasi'] == 0 ? "belum selesai " : "selesai" ?></li>
</ul>

<input type="text" value="<?= BASEURL ?>/reservation/detail/<?= $data['kode_reservasi'] ?>" size="40" id="reserveLink" readonly>
<button id="copyLink">Copy</button>