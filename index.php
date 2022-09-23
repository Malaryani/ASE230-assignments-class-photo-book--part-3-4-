<!doctype html>
<html lang="en">

<head>
    <!-- https://www.bootdey.com/snippets/view/single-advisor-profile#html -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet" type='text/css'>
    <link rel="stylesheet" href="assets/css/index.css" />
    <title>ASE 230 - class of Spring/Fall/Summer 20XX</title>
</head>
<?php 
    include 'data.php';
    include 'functions.php';
    function renderCard($userInformation,$i){
        echo "<div class='col-12 col-sm-6 col-lg-3'>";
                echo    "<div class='single_advisor_profile wow fadeInUp' data-wow-delay='0.2s' style='visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;'>";
                echo        "<div class='advisor_thumb'><a href='detail.php?user={$userInformation[$i][2]}'><img src={$userInformation[$i][0]} alt=''></a>";
                echo            "<div class='social-info'><a href='detail.php?user={$userInformation[$i][2]}'><i class='fa fa-facebook'></i></a><a href='detail.php?user={$userInformation[$i][2]}'><i class='fa fa-twitter'></i></a><a href='detail.php?user={$userInformation[$i][2]}'><i class='fa fa-linkedin'></i></a></div>";
                echo "</div>";
                echo        "<!-- Team Details-->";
                echo        "<div class='single_advisor_details_info'>";
                for ($y = 0; $y < $userInformation[$i][1]; $y += 1) {
                    echo        "<a href='detail.php?user={$userInformation[$i][2]}'>
                        <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-star' viewBox='0 0 16 16'>
                            <path d='M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z'/>
                        </svg>
                    </a>";
                }
                echo            "<h6>{$userInformation[$i][2]}</h6>";
                echo            "<p class='designation'>{$userInformation[$i][3]}</p>";
                echo        "</div>";
                echo    "</div>";
                echo "</div>";
    }
?>

<body>
    <div class="container text-center">
        <h1>This is ASE 230 - class of Spring/Fall/Summer 20XX</h1>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-8 col-lg-6">
                <!-- Section Heading-->
                <div class="section_heading text-center wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                    <h3>Our Creative <span> Team</span></h3>
                    <p>Appland is completely creative, lightweight, clean &amp; super responsive app landing page.</p>
                    <div class="line"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Single Advisor-->
            <?php
            for ($i = 0; $i < 4; $i += 1) {
                renderCard($userInformation,$i);
            }
            ?>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>