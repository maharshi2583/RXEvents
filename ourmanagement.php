<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Management - RxEvents</title>
    <?php include 'css.php' ; ?>
</head>

<body>
    <!-- header -->
    <?php include 'header.php' ; ?>

    <section class="container-fluid py-5" id="breadcrums">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h1 class="mainheading">Our Management</h1>
            </div>
        </div>
    </section>

    <!-- request a proposal -->
    <?php include 'requestAProposal.php' ; ?>

    <section class="container my-5">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            <?php 
                $members = array(
                    array('url' => 'https://media.licdn.com/dms/image/v2/C5103AQHu8VNppvw7NA/profile-displayphoto-shrink_200_200/profile-displayphoto-shrink_200_200/0/1547876025773?e=2147483647&v=beta&t=XOCOKNuxuQLM-Xvrm7yraw4Kz2fDTg5Vs7H1ELdYGic', 'name' => 'Hardik Chandarana', 'designation'=>'CEO'),
                    array('url' => 'images/rxWhiteLogo.png', 'name' => 'Hardik Chandarana', 'designation'=>'CEO'),
                    array('url' => 'https://media.licdn.com/dms/image/v2/C5103AQHu8VNppvw7NA/profile-displayphoto-shrink_200_200/profile-displayphoto-shrink_200_200/0/1547876025773?e=2147483647&v=beta&t=XOCOKNuxuQLM-Xvrm7yraw4Kz2fDTg5Vs7H1ELdYGic', 'name' => 'Hardik Chandarana', 'designation'=>'CEO'),
                );

                foreach($members as $member){
                    $url = htmlspecialchars($member['url']);
                    $name = htmlspecialchars($member['name']);
                    $designation = htmlspecialchars($member['designation']);
                    echo '<div class="col">
                            <div class="card h-100 ourmanagement-card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-center mt-2">
                                        <img src="' . $url . '" class="mb-4" width="300" height="300" alt="'.$name.'">
                                    </div>
                                    <h3 class="mainheading text-center fw-bold text-uppercase">' . $name . '</h3>
                                    <p class="text-center fw-bold mb-0">' . $designation . '</p>
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