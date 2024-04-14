<script src="{{asset('web/assets/js/jquery.js')}}"></script>
<script src="{{asset('web/assets/js/waypoints.js')}}"></script>
<script src="{{asset('web/assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('web/assets/js/swiper-bundle.js')}}"></script>
<script src="{{asset('web/assets/js/slick.js')}}"></script>
<script src="{{asset('web/assets/js/magnific-popup.js')}}"></script>
<script src="{{asset('web/assets/js/counterup.js')}}"></script>
<script src="{{asset('web/assets/js/wow.js')}}"></script>
<script src="{{asset('web/assets/js/nice-select.js')}}"></script>
<script src="{{asset('web/assets/js/meanmenu.js')}}"></script>
<script src="{{asset('web/assets/js/isotope-pkgd.js')}}"></script>
<script src="{{asset('web/assets/js/imagesloaded-pkgd.js')}}"></script>
<script src="{{asset('web/assets/js/ajax-form.js')}}"></script>
<script src="{{asset('web/assets/js/main.js')}}"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Set the interval for auto-rotation (in milliseconds)
        var interval = 3000; // Adjust as needed

        // Get all brand items
        var brandItems = document.querySelectorAll('.brand-slider-active .brand-item');

        // Set initial index
        var currentIndex = 0;

        // Function to show next brand item
        function showNextBrand() {
            // Hide current brand item
            brandItems[currentIndex].style.display = 'none';

            // Increment index
            currentIndex++;

            // Reset index if it exceeds the length of brand items
            if (currentIndex >= brandItems.length) {
                currentIndex = 0;
            }

            // Show next brand item
            brandItems[currentIndex].style.display = 'block';
        }

        // Show the first brand item initially
        brandItems[currentIndex].style.display = 'block';

        // Start auto-rotation
        var autoRotation = setInterval(showNextBrand, interval);

        // Stop auto-rotation on mouse hover
        document.querySelector('.brand-slider-active').addEventListener('mouseover', function() {
            clearInterval(autoRotation);
        });

        // Resume auto-rotation on mouse leave
        document.querySelector('.brand-slider-active').addEventListener('mouseleave', function() {
            autoRotation = setInterval(showNextBrand, interval);
        });
    });
</script>
