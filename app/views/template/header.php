<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@900&display=swap" rel="stylesheet">
     <!-- Swiper  -->
    <?= ($data['title'] == 'Home' ? '<link rel="stylesheet" href="' . BASEURL . '/css/swiper-bundle.min.css">' : ''); ?>
    
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/<?= lcfirst($data['title']); ?>.css?version=<?= time(); ?>">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/style.css?version=<?= time(); ?>">
    
    <title><?php echo $data['title']; ?></title>
</head>
<body>
    <div class="container">
        <nav>
            <a href="<?= BASEURL; ?>"><img class="icon" src="<?= BASEURL; ?>/assets/Icons/house.png" alt=""></a>
            <a href="<?= BASEURL; ?>/about" class="about"><img class="icon" src="<?= BASEURL; ?>/assets/Icons/Info.png" alt=""></a>
            
            <?php if(!isset($_SESSION['user_status'])) { ?>
                <a href="<?= BASEURL; ?>/menu" class="menu"><img class="icon" src="<?= BASEURL; ?>/assets/Icons/Hamburger.png" alt=""></a>
                <a href="<?= BASEURL; ?>/reservation"><img class="icon" src="<?= BASEURL; ?>/assets/Icons/reservation.png" alt=""></a>
                <a href="<?= BASEURL; ?>/login"><img class="icon" src="<?= BASEURL; ?>/assets/Icons/user.png" alt=""></a>
                <?php } else { ?>
                    <?php if($_SESSION['user_status'] == 'admin'){ ?>
                        <a href="<?= BASEURL; ?>/dashboard">Dashboard</a>
                    <?php } else { ?>
                        <a href="<?= BASEURL; ?>/menu" class="menu"><img class="icon" src="<?= BASEURL; ?>/assets/Icons/Hamburger.png" alt=""></a>
                        <a href="<?= BASEURL; ?>/reservation"><img class="icon" src="<?= BASEURL; ?>/assets/Icons/reservation.png" alt=""></a>
                    <?php } ?>
                <a href="<?= BASEURL; ?>/logout">Log out</a>
            <?php } ?>
        </nav>
