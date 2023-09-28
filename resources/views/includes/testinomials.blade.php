<hr class="m-0" />
        <div class="container space-top space-extra-bottom">
            <div class="row">
                <span class="sec-titleh3 h3 theme-color">
                    What Our Clients Says <br />
                    About Our Web Development Work
                </span>
            </div>
            <div class="row align-items-end">
                <?php
                $numTestimonials = 6; // Change this to the number of testimonials you want

                for ($i = 1; $i <= $numTestimonials; $i++) {
                ?>
                    <div class="col-md-6 col-lg-4">
                        <div class="testi-style3">
                            <div class="testi-author">
                                <div class="author-img"><img src="assets/img/testimonial/auth-1-<?= $i ?>.png" alt="Testimonial" /></div>
                                <div class="media-body">
                                    <h3 class="testi-name">William Benjamin <?= $i ?></h3>
                                    <div class="testi-degi">IT Customer</div>
                                </div>
                            </div>
                            <p class="testi-text">“Until recently, the prevailing view assumed lorem ipsum was born as a nonsense text. “It's not Latin, though it looks like it, and it says”</p>
                            <div class="testi-rating">Rating<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>