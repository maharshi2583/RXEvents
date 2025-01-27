<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery - RxEvents</title>
    <?php include 'css.php' ; ?>
</head>

<body>
    <!-- header -->
    <?php include 'header.php' ; ?>

    <section class="container-fluid py-5" id="breadcrums">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h1 class="mainheading">Gallery</h1>
            </div>
        </div>
    </section>

    <section class="container my-5" id="gallery">
        <div class="row row-cols-1 row-cols-md-3 row-cols-lg-4 g-4">
            <?php 
                // array of images add images path and alt text here
                $gallery = array(
                    array(
                        'imgSrc' => 'https://cdn.pixabay.com/photo/2023/05/22/10/49/houses-8010401_1280.jpg', 
                        'text'=>'Image Gallery 1'),
                    array(
                        'imgSrc' => 'https://cdn.pixabay.com/photo/2023/07/13/05/36/mountains-8123933_1280.jpg', 
                        'text'=>'Image Gallery 2'),
                    array(
                        'imgSrc' => 'https://cdn.pixabay.com/photo/2022/12/12/21/35/stream-7651969_1280.jpg', 
                        'text'=>'Image Gallery 3'),
                    array(
                        'imgSrc' => 'https://cdn.pixabay.com/photo/2022/10/24/20/22/muhlviertel-7544316_1280.jpg', 
                        'text'=>'Image Gallery 4'),
                );

                // loop to print images in gallery
                foreach($gallery as $gallery_image){
                    $imgSrc = htmlspecialchars($gallery_image['imgSrc']);
                    $altText = htmlspecialchars($gallery_image['text']);
                    echo '<div class="col">
                            <div class="card">
                                <div class="card-image">
                                    <a href="' . $imgSrc . '"
                                        data-fancybox="gallery">
                                        <img src="' . $imgSrc . '"
                                            alt="' . $altText . '" class="img-fluid">
                                    </a>
                                </div>
                            </div>
                        </div>';
                    };
            ?>
        </div>
    </section>

    <!-- footer -->
    <?php include 'footer.php'; ?>
    <?php include 'javascripts.php'; ?>
</body>

</html>