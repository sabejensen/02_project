<?php 
    $title = "Home";
    include '_header.php'; 
?>

<!-- CONTENT HERE -->
    <main>
        <div class='image-slider'>
            <figure>
                <picture>
                    <source srcset="./images/slide-1_l.jpg" media="(min-width: 35rem)">
                    <img src="./images/slide-1_s.jpg" alt="slide-1">
                </picture>
            </figure>
            <figure>
                <picture>
                    <source srcset="./images/slide-2_l.jpg" media="(min-width: 35rem)">
                    <img src="./images/slide-2_s.jpg" alt="slide-2">
                </picture>
            </figure>
            <figure>
                <picture>
                    <source srcset="./images/slide-3_l.jpg" media="(min-width: 35rem)">
                    <img src="./images/slide-3_s.jpg" alt="slide-3">
                </picture>
            </figure>
            <figure>
                <picture>
                    <source srcset="./images/slide-4_l.jpg" media="(min-width: 35rem)">
                    <img src="./images/slide-4_s.jpg" alt="slide-4">
                </picture>
            </figure>
        </div>

        <h1>Recent Blog Articles</h1>
        <div class="flexed">
            <div class="blog-item">
                <a href="#">
                    <figure>
                        <img src="./images/blog-1.jpg">
                        <figcaption>10 Photos of Cruise Sunrises</figcaption>
                    </figure>
                    <div class="blog-date"><p>Jan 1, 2021</p></div>
                </a>
            </div>
            <div class="blog-item">
                <a href="#">
                    <figure>
                        <img src="./images/blog-2.jpg">
                        <figcaption>Waterslides on the Ocean</figcaption>
                    </figure>
                    <div class="blog-date"><p>Nov 19, 2020</p></div>
                </a>
            </div>
            <div class="blog-item">
                <a href="#">
                    <figure>
                        <img src="./images/blog-3.jpg">
                        <figcaption>Best Cruise Buffet Items</figcaption>
                    </figure>
                    <div class="blog-date"><p>June 2, 2020</p></div>
                </a>
            </div>
            <div class="blog-item">
                <a href="#">
                    <figure>
                        <img src="./images/blog-4.jpg">
                        <figcaption>5 Exotic Locations for Your Next Cruise</figcaption>
                    </figure>
                    <div class="blog-date"><p>May 6, 2020</p></div>
                </a>
            </div>
        </div>
   </main>
    

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="slick/slick.min.js"></script>
<script>
    $(document).ready(function() {
        $('.image-slider').slick({
            dots: true,
            arrows: false, 
            speed: 1000,
            infinite: true,
            cssEase: 'ease-out',
            autoplay: true,
            autoplaySpeed: 8000
        })
    })
</script>

<?php include '_footer.php'; ?>