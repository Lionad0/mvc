<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title><?php echo $data['title']; ?></title>
</head>
<body>

    <nav>
        <a href="<?= BASEURL; ?>">Home</a>
        <a href="<?= BASEURL; ?>/About">About</a>
        
        <?php if(!isset($_SESSION['user_status'])) { ?>
            <a href="<?= BASEURL; ?>">Menu</a>
            <a href="<?= BASEURL; ?>/Reservation">Reservation</a>
            <a href="<?= BASEURL; ?>/Login">Log in</a>
            <?php } else { ?>
                <?php if($_SESSION['user_status'] == 'admin'){ ?>
                    <a href="<?= BASEURL; ?>/Menu">Menu Info</a>
                <?php } else { ?>
                    <a href="<?= BASEURL; ?>/Reservation">Reservation</a>
                <?php } ?>
            <a href="<?= BASEURL; ?>/Logout">Log out</a>
        <?php } ?>
    </nav>

   
