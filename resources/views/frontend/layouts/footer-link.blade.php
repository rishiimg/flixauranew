<script>
    window.addEventListener("scroll", function() {
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




<!-- Fancybox Initialization Script gallery -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Sab unique data-fancybox attributes ko find karo
        const uniqueGalleries = [...new Set(Array.from(document.querySelectorAll('[data-fancybox]')).map(item => item.getAttribute('data-fancybox')))];

        uniqueGalleries.forEach(function(gallery) {
            Fancybox.bind(`[data-fancybox="${gallery}"]`, {
                Carousel: {
                    infinite: false,
                },
            });
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
            640: {
                slidesPerView: 2,
                spaceBetween: 10
            },
            768: {
                slidesPerView: 4,
                spaceBetween: 10
            },
            1024: {
                slidesPerView: 4,
                spaceBetween: 10
            },
        },
    });
</script>


<!-- testimonals  -->

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const swiper = new Swiper('.testimonialSwiper', {
            slidesPerView: 1,
            spaceBetween: 10,
            loop: true, // Set loop to false
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            breakpoints: {
                640: {
                    slidesPerView: 2,
                    spaceBetween: 10
                },
                708: {
                    slidesPerView: 3,
                    spaceBetween: 10
                },
                868: {
                    slidesPerView: 4,
                    spaceBetween: 10
                },
                1024: {
                    slidesPerView: 4,
                    spaceBetween: 10
                },
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
    document.addEventListener("DOMContentLoaded", function() {
        const swiper = new Swiper('.blogSwiper', {
            slidesPerView: 1,
            spaceBetween: 50,
            loop: true,
            // autoplay: {
            //     delay: 2500,
            //     disableOnInteraction: false,
            // },
            breakpoints: {
                320: {
                    slidesPerView: 1,
                    spaceBetween: 10
                },

                640: {
                    slidesPerView: 2,
                    spaceBetween: 10
                },
                768: {
                    slidesPerView: 3,
                    spaceBetween: 10
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 10
                },
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

<!-- cat  -->
<script>
    let isOpenNew = false;

    function toggleCategories() {
        isOpenNew = !isOpenNew;
        const sidebar = document.getElementById('categorySidebar');
        const label = document.getElementById('categoryLabel');

        if (isOpenNew) {
            sidebar.classList.remove('translate-x-full');
            sidebar.classList.add('translate-x-0');
            label.innerText = 'Close';
        } else {
            sidebar.classList.remove('translate-x-0');
            sidebar.classList.add('translate-x-full');
            label.innerText = 'Categories';
        }
    }
</script>


<script>
    document.addEventListener("DOMContentLoaded", function() {
        const swiper = new Swiper('.category', {
            slidesPerView: 1,
            spaceBetween: 0,
            loop: true, // Set loop to false
            navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
            breakpoints: {
                320: {
                    slidesPerView: 1,
                    spaceBetween: 0,
                },
                640: {
                    slidesPerView: 2,
                    spaceBetween: 0,
                },
                708: {
                    slidesPerView: 3,
                    spaceBetween: 0,
                },
                868: {
                    slidesPerView: 4,
                    spaceBetween: 0,
                },
                1024: {
                    slidesPerView: 4,
                    spaceBetween: 0
                },
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

<!-- aos  -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>