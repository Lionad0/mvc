<h1>MENU PAGE</h1>
<a href="<?= BASEURL;?>/menu/add">Tambah Menu</a>

<br>
<?php Flasher::flash(); ?>
<br>
<?php foreach($data['menu'] as $e) : ?>
    <ul>
        <li>
            <a href="<?= BASEURL;?>/menu/detail/<?= $e['id_menu']; ?>"><?=$e['nama_menu'];?></a><br>
            <a href="<?= BASEURL;?>/menu/update/<?= $e['id_menu']; ?>" style="font-size:14px; color: blue;">ubah</a>
            <a href="<?= BASEURL;?>/menu/delete/<?= $e['id_menu']; ?>" style="font-size:14px; color: red;">hapus</a>
            
        </li>
        <hr>
    </ul>
<?php endforeach; ?>