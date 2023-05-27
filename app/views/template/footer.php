</div>
    <?php if(isset($data['title'])) : ?>
        <?php if($data['title'] == 'Home') { ?>
            <script src="<?= BASEURL; ?>/js/home.js"></script>
        <?php }else if($data['title'] == 'Reservation') { ?>
            <script src="<?= BASEURL; ?>/js/reservation_index.js"></script>
        <?php }else if($data['title'] == 'Reservation Detail') { ?> 
            <script src="<?= BASEURL; ?>/js/reservation_detail.js"></script>
        <?php } ?>
    <?php endif; ?>
</body>
</html>