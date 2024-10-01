<script>
    window.addEventListener("scroll", function () {
      var scroll = window.scrollY;
      var navbar = document.querySelector("body");
      if (scroll <= 120) {
        navbar.classList.remove("group/nav");
      } else {
        navbar.classList.add("group/nav");
      }
    });
</script>


<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
    const swiper = new Swiper('.heroSwiper', {
        loop: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
</script>


<!-- Fancybox Initialization Script -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        Fancybox.bind("[data-fancybox='gallery']", {
            Carousel: {
                infinite: false,
            },
        });
    });
</script>


<!-- video swiper  -->

<script>
    const swiper1 = new Swiper('.videoSwiper', {
        loop: true,
        spaceBetween: 10,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            640: { slidesPerView: 2, spaceBetween: 10 },
            768: { slidesPerView: 4, spaceBetween: 10 },
            1024: { slidesPerView: 4, spaceBetween: 10 },
        },
    });
</script>


<!-- testimonals  -->

 <script>
    document.addEventListener("DOMContentLoaded", function () {
        const swiper = new Swiper('.testimonialSwiper', {
            slidesPerView: 4,
            spaceBetween: 50,
            loop: false, // Set loop to false
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            breakpoints: {
            640: { slidesPerView: 2, spaceBetween: 10 },
            768: { slidesPerView: 4, spaceBetween: 10 },
            1024: { slidesPerView: 4, spaceBetween: 10 },
        },
        });

        document.getElementById('prevButton').addEventListener('click', () => {
            swiper.slidePrev();
        });

        document.getElementById('nextButton').addEventListener('click', () => {
            swiper.slideNext();
        });
    });
</script> 

<!-- blog  -->

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const swiper = new Swiper('.blogSwiper', {
            slidesPerView:1,
            spaceBetween: 50,
            loop:true, 
            // autoplay: {
            //     delay: 2500,
            //     disableOnInteraction: false,
            // },
            breakpoints: {
            320: { slidesPerView: 1, spaceBetween: 10 },

            640: { slidesPerView: 2, spaceBetween: 10 },
            768: { slidesPerView: 3, spaceBetween: 10 },
            1024: { slidesPerView: 3, spaceBetween: 10 },
        },
        });

        document.getElementById('prevButton').addEventListener('click', () => {
            swiper.slidePrev();
        });

        document.getElementById('nextButton').addEventListener('click', () => {
            swiper.slideNext();
        });
    });
</script> 