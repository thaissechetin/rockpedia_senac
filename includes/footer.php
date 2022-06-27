</main>
<footer class="fixed-bottom">
    <p class="text-center lead">RockPedia | Senac Penha &copy; 2022</p>
</footer>

<!-- vanilla -->
<script src="js/vanilla-masker.min.js"></script>
<script src="js/form.js"></script>

<!-- Slick -->
<script src="js/jquery-3.6.0.min.js"></script>
<script src="js/slick/slick.min.js"></script>
<script>
    $('#slider').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [{
                breakpoint: 1024,
                settings: {
                    infinite: true,
                    arrows: true,
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 768,
                settings: {
                    infinite: true,
                    arrows: true,
                    slidesToShow: 1
                }
            }
        ]
    });
</script>
<!-- bootstrap js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!-- nosso script -->
<script src="js/evento.js"></script>
<script src="js/letra.js"></script>
<script src="js/senha.js"></script>

</body>

</html>
<?php ob_end_flush(); ?>