    <div class="footer">
        <span>Copyright © 2023 LWD Food</span>
    </div>
</div>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>


    </script>
    <?php if(isset($data['title'])) : ?>
        <?php if($data['title'] == 'Home') { ?>
            <script src="<?= BASEURL; ?>/js/home.js"></script>
            <script>
            var swiper = new Swiper(".mySwiper", {
                slidesPerView: 3,
                spaceBetween: 30,
                pagination: {
                el: ".swiper-pagination",
                clickable: true,
                },
            });
            </script>
        <?php }else if($data['title'] == 'Reservation') { ?>
            <script src="<?= BASEURL; ?>/js/reservation_index.js?<?= time(); ?>"></script>
        <?php }else if($data['title'] == 'Reservation Detail') { ?> 
            <script src="<?= BASEURL; ?>/js/reservation_detail.js"></script>
        <?php } ?>
    <?php endif; ?>
</body>
</html>