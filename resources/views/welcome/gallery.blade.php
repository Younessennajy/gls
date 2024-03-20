@include('head')

    <div id="galerie" class="galerie container">
        <div class="section-title mt-5">
            <h2>Gallery</h2>
            <span class="d-flex">
                <span class="C-black"></span>
                <span class="C-red"></span>
                <span class="C-gold"></span>
            </span>
        </div>
        <div class="row">
            <?php
                $imagePaths = [
                            "img/img3.jpeg",
                                "img/img7.jpeg",
                                    "img/img5.jpeg",
                                        "img/img6.jpeg",
                                            "img/img8.jpeg",
                                                "img/img9.jpeg",
                                                    "img/img4.jpeg",
                                                        "img/img10.jpeg",
                                                            "img/img2.jpeg",
                ];

                foreach ($imagePaths as $index => $imagePath) {
                    echo "<div class='col-lg-3 col-md-4 col-sm-6'>";
                    echo "<div class='image-container'>";
                    echo "<a href='$imagePath' data-lightbox='image-gallery' data-title='Image $index'><img src='$imagePath' class='img-fluid' alt='Image'></a>";
                    echo "</div>";
                    echo "</div>";
                }
            ?>
        </div>
    </div>

