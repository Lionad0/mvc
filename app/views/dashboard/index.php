<!-- <?php 
    $phoneNum =  explode(', ', $d['no_telp'])
?> -->
<h1>DASHBOARD</h1>
<a href="<?= BASEURL;?>/dashboard/add">Tambah Menu</a>

<h3>MENU LIST</h3>
<br>
<?php Flasher::flash(); ?>
<br>
<?php foreach($data['menu'] as $e) : ?>
    <ul>
        <li>
            <a href="<?= BASEURL;?>/dashboard/detail/<?= $e['id_menu']; ?>"><?=$e['nama_menu'];?></a><br>
            <a href="<?= BASEURL;?>/dashboard/update/<?= $e['id_menu']; ?>" style="font-size:14px; color: blue;">ubah</a>
            <a href="<?= BASEURL;?>/dashboard/delete/<?= $e['id_menu']; ?>" style="font-size:14px; color: red;">hapus</a>
            
        </li>
        <hr>
    </ul>
<?php endforeach; ?>


<h3>Reservation Info</h3>
<table>
    <tr>
        <th>Kode Reservasi</th>
        <th>Nama Pemesan</th>
        <th>Nomor Telepon</th>
        <th>Nomor Backup</th>
        <th>Email</th>
        <th>Tanggal Reservasi</th>
        <th>Status Reservasi</th>
        <th>Ubah Status</th>
    </tr>

    <?php foreach($data['reservation'] as $d) : ?>
        <?php $phoneNum =  explode(', ', $d['no_telp']); ?>
        <tr>
            <td><?= $d['kode_reservasi']; ?></td>
            <td><?= $d['nama_depan'] . ' ' . $d['nama_belakang']; ?></td>
            <td><?= $phoneNum[0]; ?></td>
            <td><?= $phoneNum[1]; ?></td>
            <td><?= $d['email']; ?></td>
            <td><?= $d['tanggal_reservasi']; ?></td>
            <td><?= ($d['status_reservasi'] == 1 ? 'Selesai' : 'Belum Selesai')?></td>
            <td><a href="<?= BASEURL; ?>/dashboard/updateStatus/<?= $d['kode_reservasi']; ?>">SELESAIKAN</a></td>
        </tr>
    <?php endforeach; ?>

    </table>
 