<h1>UPDATE MENU</h1>
<form action="" method="post" enctype="multipart/form-data">
    <input type="hidden" name="gambar_lama" value="<?= $data['detail']['gambar_menu']; ?>">
    <label for="">Nama Menu: </label>
    <input type="text" name="nama_menu" value="<?= $data['detail']['nama_menu']; ?>"><br>
    <label for="">Harga Menu: </label>
    <input type="number" name="harga_menu" value="<?= $data['detail']['harga_menu']; ?>"><br>
    <label for="">Gambar Menu:</label><br>
    <img width="100px"src="<?= BASEURL . '//menuImg/' . $data['detail']['gambar_menu']; ?>" alt=""><br>
    <input type="file" name="gambar_menu"><br>
    <label for="">Ketersediaan: </label><br>
    <input type="radio" name="ketersediaan" value="1" <?php if($data['detail']['ketersediaan'] == 1) echo 'checked'; ?>>
    <label for="">Tersedia</label>
    <input type="radio" name="ketersediaan" value="0" <?php if($data['detail']['ketersediaan'] == 0) echo 'checked'; ?> >
    <label for="">Tidak Tersedia</label><br>
    <button type="submit" name="update">UPDATE DATA</button>
</form>