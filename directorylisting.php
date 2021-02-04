<?php 
$did = $_GET['did'];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://15.207.46.236/directory/getuserbycategoryid");
curl_setopt($ch, CURLOPT_POST, 1);// set post data to true
curl_setopt($ch, CURLOPT_POSTFIELDS,"id=".$did);  // post data
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$json = curl_exec($ch);
curl_close ($ch);
$result = json_decode($json,true);
// print_r($result);

$data = $result['Data'];
// print_r($data);

$ch_business_cat = curl_init();
curl_setopt($ch_business_cat, CURLOPT_URL, "http://15.207.46.236/admin/businessCategory");
curl_setopt($ch_business_cat, CURLOPT_POST, 1);// set post data to true
curl_setopt($ch_business_cat, CURLOPT_POSTFIELDS,false);  // post data
curl_setopt($ch_business_cat, CURLOPT_RETURNTRANSFER, true);
$json_1 = curl_exec($ch_business_cat);
curl_close ($ch_business_cat);

$newcategory = json_decode($json_1,true);

$data_category = $newcategory['Data'];

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>The National Dawn</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Bootstrap News Template - Free HTML Templates" name="keywords">
        <meta content="Bootstrap News Template - Free HTML Templates" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <link rel="stylesheet" href="css/custom.css">

        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600&display=swap" rel="stylesheet"> 

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/slick/slick.css" rel="stylesheet">
        <link href="lib/slick/slick-theme.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
        <?php include "header.php" ?>
        
        <!-- Tab News Start-->
        <div class="tab-news">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 category">
                        <!-- <ul class="nav nav-pills nav-justified">
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#popular">Business Category</a>
                            </li>
                        </ul> -->
                        <h5 class="cate_name">Business Category</h5>
                        <div class="mn-list">
                            <ul>
                                <?php 
                                for($i =0; $i < count($data_category); $i++){ ?>
                                <li><a class="text-primary" href="directorylisting.php?did=<?php echo $data_category[$i]['_id'] ?>"><?php echo $data_category[$i]['categoryName'] ?></a></li>
                                <?php }
                                ?>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-9">
                        <ul class="nav nav-pills nav-justified">
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#popular"><?php echo $data[0]['business_category']['categoryName'] ?></a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div id="featured" class="container tab-pane active">
                            <?php 
                                if( count($data) != 0){
                                    for($i =0; $i < count($data); $i++){ 
                                        ?>
                                        <div class="container">
                                            <div class="tn-news row">
                                                <div class="tn-img col">
                                                    <img class="img-fluid img-thumbnail" src="<?php echo $data[$i]['img'] ?>" style="border:1px solid black; height:150px;"/>
                                                </div>
                                                <div class="tn-title col-6">
                                                    <a href="userprofile.php?uid=<?php echo $data[$i]['_id'] ?>" class="text-break"><i class="fas fa-user-tie" style="color : #007bff; width: 30px"></i><?php echo $data[$i]['name'] ?></a><br>
                                                    <a href="userprofile.php?uid=<?php echo $data[$i]['_id'] ?>" class="text-break"><i class="fas fa-map-marked-alt" style="color : #007bff; width: 30px"></i> <?php echo $data[$i]['company_name'] ?></a><br>
                                                    <a href="userprofile.php?uid=<?php echo $data[$i]['_id'] ?>" class="text-break"><i class="fas fa-mobile-alt" style="color : #007bff; width: 30px"></i> <?php echo $data[$i]['mobile'] ?></a><br>
                                                    <a href="userprofile.php?uid=<?php echo $data[$i]['_id'] ?>" class="text-break"><i class="fas fa-envelope-square" style="color : #007bff; width: 30px"></i> <?php echo $data[$i]['email'] ?></a><br>
                                                </div>
                                                <div class="demo col">
                                                    <!-- <div> -->
                                                        <a href="userprofile.php?uid=<?php echo $data[$i]['_id'] ?>"><button type="button" class="btn btn-primary btn-sm btn-block btnclass"><i class="fa fa-eye"></i> View More</button></a>
                                                    <!-- </div> -->
                                                </div>
                                            </div>
                                        </div>
                                   <?php  }
                                }
                                else{?>
                                   <div class="tn-news">
                                        <div class="alert alert-danger" role="alert" style="margin: 160px;">
                                            OOPS Sorry No Data Found !!!
                                        </div>
                                    </div>
                                <?php }
                            ?>
                            </div>
                            <!-- <div id="popular" class="container tab-pane fade">
                                <div class="tn-news">
                                    <div class="tn-img">
                                        <img src="img/news-350x223-4.jpg" />
                                    </div>
                                    <div class="tn-title">
                                        <a href="">Lorem ipsum dolor sit amet</a>
                                    </div>
                                </div>
                                <div class="tn-news">
                                    <div class="tn-img">
                                        <img src="img/news-350x223-5.jpg" />
                                    </div>
                                    <div class="tn-title">
                                        <a href="">Lorem ipsum dolor sit amet</a>
                                    </div>
                                </div>
                                <div class="tn-news">
                                    <div class="tn-img">
                                        <img src="img/news-350x223-1.jpg" />
                                    </div>
                                    <div class="tn-title">
                                        <a href="">Lorem ipsum dolor sit amet</a>
                                    </div>
                                </div>
                            </div> -->
                            <!-- <div id="latest" class="container tab-pane fade">
                                <div class="tn-news">
                                    <div class="tn-img">
                                        <img src="img/news-350x223-2.jpg" />
                                    </div>
                                    <div class="tn-title">
                                        <a href="">Lorem ipsum dolor sit amet</a>
                                    </div>
                                </div>
                                <div class="tn-news">
                                    <div class="tn-img">
                                        <img src="img/news-350x223-3.jpg" />
                                    </div>
                                    <div class="tn-title">
                                        <a href="">Lorem ipsum dolor sit amet</a>
                                    </div>
                                </div>
                                <div class="tn-news">
                                    <div class="tn-img">
                                        <img src="img/news-350x223-4.jpg" />
                                    </div>
                                    <div class="tn-title">
                                        <a href="">Lorem ipsum dolor sit amet</a>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Tab News Start-->

        <?php include "footer.php" ?>

        <!-- Back to Top -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/slick/slick.min.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>


<!-- <div class="container">
                                            <div class="row justify-content-md-center">
                                                <div class="col col-lg-2">
                                                    <img src="<?php echo $data[$i]['img'] ?>" height="150px" width="150px" style="border:1px solid black;"/>
                                                </div>
                                                <div class="col-md-auto">
                                                    <a href=""><i class="fas fa-user-tie" style="color : #007bff; width: 30px"></i><?php echo $data[$i]['name'] ?></a><br>
                                                    <a href=""><i class="fas fa-map-marked-alt" style="color : #007bff; width: 30px"></i> <?php echo $data[$i]['company_name'] ?></a><br>
                                                    <a href=""><i class="fas fa-mobile-alt" style="color : #007bff; width: 30px"></i> <?php echo $data[$i]['mobile'] ?></a><br>
                                                    <a href=""><i class="fas fa-envelope-square" style="color : #007bff; width: 30px"></i> <?php echo $data[$i]['email'] ?></a><br>
                                                </div>
                                                <div class="col col-lg-2">
                                                    <button type="button" class="btn btn-primary btn-sm btn-block btnclass"><i class="fa fa-eye"></i> View More</button>
                                                </div>
                                            </div>
                                        </div> -->