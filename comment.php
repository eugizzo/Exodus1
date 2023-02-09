<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>



    <style>


/* Importing fonts from Google */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

/* Reseting */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

.test {
    background-image:
    linear-gradient(to bottom, rgb(49,98,69), rgb(36,99,128)),
    url('images/bg_1.jpg');
    
    
    background-size: cover;
    color: white;
   
}

.owl-carousel .owl-item {
    transition: all 0.3s ease-in-out;
}

.owl-carousel .owl-item .card {
    padding: 30px;
    position: relative;
}

.owl-carousel .owl-stage-outer {
    overflow-y: auto !important;
    padding-bottom: 40px;
}

.owl-carousel .owl-item img {
    height: 200px;
    object-fit: cover;
    border-radius: 6px;
}

.owl-carousel .owl-item .card .name {
    position: absolute;
    bottom: -20px;
    left: 33%;
    color: #101c81;
    font-size: 1.1rem;
    font-weight: 600;
    background-color: aquamarine;
    padding: 0.3rem 0.4rem;
    border-radius: 5px;
    box-shadow: 2px 3px 15px #3c405a;
}

.owl-carousel .owl-item .card {
    opacity: 0.2;
    transform: scale3d(0.8, 0.8, 0.8);
    transition: all 0.3s ease-in-out;
}

.owl-carousel .owl-item.active.center .card {
    opacity: 1;
    transform: scale3d(1, 1, 1);
}

.owl-carousel .owl-dots {
    display: inline-block;
    width: 100%;
    text-align: center;
}

.owl-theme .owl-dots .owl-dot span {
    height: 20px;
    background: #2a6ba3 !important;
    border-radius: 2px !important;
    opacity: 0.8;
}

.owl-theme .owl-dots .owl-dot.active span,
.owl-theme .owl-dots .owl-dot:hover span {
    height: 13px;
    width: 13px;
    opacity: 1;
    transform: translateY(2px);
    background: #83b8e7 !important;
}

@media(min-width: 480.6px) and (max-width: 575.5px) {
    .owl-carousel .owl-item .card .name {
        left: 24%;
    }
}

@media(max-width: 360px) {
    .owl-carousel .owl-item .card .name {
        left: 30%;
    }
}
    </style>
    <div class="test">
    <div class="row justify-content-center pb-4">
				<div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
					<span class="subheading">Testimonial</span>
					<h1 class="mb-4">Tourist Feedback</h1>
				</div>
			</div>
    <div class="owl-carousel owl-theme mt-5">

    <?php
						$query = $connect->query("SELECT * FROM feedback ORDER BY id DESC LIMIT 15");

						if ($query->num_rows > 0) {
							while ($row = $query->fetch_assoc()) {
								$imageURL = 'endUserDashboard/profiles/' . $row["profile"];

						?>
        <div class="owl-item">
            <div class="card">
                <div class="img-card">
                    <img src="<?php echo $imageURL ?>"
                        alt="">
                </div>
                <div class="testimonial mt-4 mb-2 text-primary">
                <?php echo $row["comment"] ?>
                </div>
                <div class="name">
                <?php echo $row["name"] ?>
                </div>
            </div>
        </div>
        <?php
							}
						} ?>


       
        </div>
    </div>
    </div>
    <script>
      $(document).ready(function () {
    var silder = $(".owl-carousel");
    silder.owlCarousel({
        autoplay: true,
        autoplayTimeout: 7000,
        autoplayHoverPause: false,
        items: 1,
        stagePadding: 20,
        center: true,
        nav: false,
        margin: 50,
        dots: true,
        loop: true,
        responsive: {
            0: { items: 1 },
            480: { items: 2 },
            575: { items: 2 },
            768: { items: 2 },
            991: { items: 3 },
            1200: { items: 4 }
        }
    });
});
    </script>