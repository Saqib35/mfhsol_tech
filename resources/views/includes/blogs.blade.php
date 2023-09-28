<div class="row vs-carousel" data-slide-show="3" data-md-slide-show="2">
   <?php
        for ($i = 1; $i <= 6; $i++) {
                        ?>
                            <div class="col-xl-4">
                                <div class="vs-blog blog-style1">
                                    <div class="blog-img">
                                        <img src="assets/img/blog/blog-1-<?= $i ?>.jpg" alt="Blog Image" class="w-100" />
                                        <div class="blog-content">
                                            <div class="blog-meta">
                                                <a href="blog.php"><i class="far fa-calendar"></i>24 Feb, 2022<?= $i ?></a>
                                                <a href="blog.php"><i class="fal fa-user"></i>by admin<?= $i ?></a>
                                            </div>
                                            <h3 class="blog-title h5"><a href="blog-details.php">Contrary to popular belief ipsum is not simply<?= $i ?></a></h3>
                                            <a href="blog-details.php" class="link-btn">Read Details<i class="far fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                </div>