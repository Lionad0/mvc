<h1>DASHBOARD</h1>
<a href="<?= BASEURL;?>/menu/add">Tambah Menu</a>

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