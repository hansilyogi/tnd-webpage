<?php 
$uid = $_GET['uid'];

$ch_user = curl_init();
curl_setopt($ch_user, CURLOPT_URL, "http://15.207.46.236/admin/getsingleid");
curl_setopt($ch_user, CURLOPT_POST, 1);// set post data to true
curl_setopt($ch_user, CURLOPT_POSTFIELDS,"id=".$uid);  // post data
curl_setopt($ch_user, CURLOPT_RETURNTRANSFER, true);
$json_user = curl_exec($ch_user);
curl_close ($ch_user);
$result_user = json_decode($json_user,true);

$data_2 =  $result_user['Data'];

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Bootstrap News Template - Free HTML Templates" name="keywords">
        <meta content="Bootstrap News Template - Free HTML Templates" name="description">
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">       

        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/slick/slick.css" rel="stylesheet">
        <link href="lib/slick/slick-theme.css" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>

        <link href="css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="css/userprofile.css">
        <link rel="stylesheet" href="css/inquiry.css">
        <link rel="stylesheet" href="css/aboutus.css">
        <link rel="stylesheet" href="css/contactus.css">
        <link rel="stylesheet" href="css/custom.css">

    </head>
    <body>
        <?php 
            for($i = 0; $i < count($data_2); $i++){?>
                <div class="brand">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-3 col-md-4">
                                <div class="b-logo">
                                    <a href="index.html">
                                        <img src="img/demo.png" alt="Logo">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-4">
                                <div class="b-ads">
                                    <!-- <h5>Name : <?php echo $data_2[$i]['name'] ?></h5>
                                    <h5>Company Name : <?php echo $data_2[$i]['company_name'] ?></h5> -->
                                </div>
                            </div>
                            
                            <div class="col-lg-3 col-md-4">
                                    <div class="social ml-auto">
                                        <a href="<?php echo $data_2[$i]['faceBook'] ?>"><i class="fab fa-facebook-f"></i></a>
                                        <a href="<?php echo $data_2[$i]['twitter'] ?>"><i class="fab fa-twitter"></i></a>
                                        <a href="<?php echo $data_2[$i]['instagram'] ?>"><i class="fab fa-instagram"></i></a>
                                        <a href="<?php echo $data_2[$i]['linkedIn'] ?>"><i class="fab fa-linkedin-in"></i></a>
                                        <a href="<?php echo $data_2[$i]['youTube'] ?>"><i class="fab fa-youtube"></i></a>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php }
        ?>

        <div class="container demo">
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headinginquiry">
                        <h4 class="panel-title">
                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsezero" aria-expanded="true" aria-controls="collapsezero">
                                <i class="more-less glyphicon glyphicon-plus"></i>
                                    INQUIRY
                            </a>
                        </h4>
                    </div>
                    <div id="collapsezero" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headinginquiry">
                        <div class="panel-body">
                            <div class="container register-form">
                                <div class="form">
                                    <div class="note">
                                        <p>Inquire Here </p>
                                    </div>
                                    <div class="form-content">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Your Name *" value=""/>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Phone Number *" value=""/>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Your Email *" value=""/>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <textarea type="text" class="form-control" placeholder="Enter Discription *" value="" cols='3' rows="9"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="button" class="btnSubmit text-break" style="width:65px;">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <h4 class="panel-title">
                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <i class="more-less glyphicon glyphicon-plus"></i>
                                    About Us
                            </a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                        <div class="aboutus-section">
                            <div class="container">
                                <div class="row">
                                    <div class="col-3 col-md-4 col-sm-6 col-xs-12 d-flex justify-content-center">
                                        <div class="aboutus">
                                            <h2 class="aboutus-title text-break"><?php echo $data_2[0]['name'] ?></h2>
                                            <div class="feature">
                                                <div class="feature-box">
                                                    <div class="clearfix">
                                                        <div class="iconset">
                                                            <!-- <span class="glyphicon glyphicon-cog icon"></span> -->
                                                        </div>
                                                        <div class="feature-content">
                                                            <h4>Mobile </h4>
                                                            <p> <?php echo $data_2[0]['mobile'] ?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="feature-box">
                                                    <div class="clearfix">
                                                        <div class="iconset">
                                                            <!-- <span class="glyphicon glyphicon-cog icon"></span> -->
                                                        </div>
                                                        <div class="feature-content">
                                                            <h4>Email </h4>
                                                            <p> <?php echo $data_2[0]['email'] ?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="feature-box">
                                                    <div class="clearfix">
                                                        <div class="iconset">
                                                            <!-- <span class="glyphicon glyphicon-cog icon"></span> -->
                                                        </div>
                                                        <div class="feature-content">
                                                            <h4>Address </h4>
                                                            <p> <?php echo $data_2[0]['address'] ?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="feature-box">
                                                    <div class="clearfix">
                                                        <div class="iconset">
                                                            <!-- <span class="glyphicon glyphicon-cog icon"></span> -->
                                                        </div>
                                                        <div class="feature-content">
                                                            <h4>Date of Birth </h4>
                                                            <p> <?php echo $data_2[0]['date_of_birth'] ?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="feature-box">
                                                    <div class="clearfix">
                                                        <div class="iconset">
                                                            <!-- <span class="glyphicon glyphicon-cog icon"></span> -->
                                                        </div>
                                                        <div class="feature-content">
                                                            <h4>Gender </h4>
                                                            <p> <?php echo $data_2[0]['gender'] ?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="feature-box">
                                                    <div class="clearfix">
                                                        <div class="iconset">
                                                            <!-- <span class="glyphicon glyphicon-cog icon"></span> -->
                                                        </div>
                                                        <div class="feature-content">
                                                            <h4>Company Name </h4>
                                                            <p> <?php echo $data_2[0]['company_name'] ?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-md-4 col-sm-6 col-xs-12 d-flex justify-content-center">
                                        <div class="aboutus-banner">
                                            <img src="<?php echo $data_2[0]['img']?>" alt="" class="img-fluid">
                                        </div><br><br>
                                    </div>
                                    <div class="col-4 col-md-4 col-sm-6 col-xs-12 d-flex justify-content-center">
                                        <div class="feature">
                                            <div class="feature-box">
                                                <div class="clearfix">
                                                    <div class="iconset">
                                                        <!-- <span class="glyphicon glyphicon-cog icon"></span> -->
                                                    </div>
                                                    <div class="feature-content">
                                                        <h4>Spouse Name</h4>
                                                        <p> <?php echo $data_2[0]['spouse_name'] ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="feature-box">
                                                <div class="clearfix">
                                                    <div class="iconset">
                                                        <!-- <span class="glyphicon glyphicon-cog icon"></span> -->
                                                    </div>
                                                    <div class="feature-content">
                                                        <h4>Spouse Date of Birth</h4>
                                                        <p> <?php echo $data_2[0]['spouse_birth_date'] ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="feature-box">
                                                <div class="clearfix">
                                                    <div class="iconset">
                                                        <!-- <span class="glyphicon glyphicon-cog icon"></span> -->
                                                    </div>
                                                    <div class="feature-content">
                                                        <h4>Member</h4>
                                                        <p> <?php echo $data_2[0]['memberOf'][0]['memberShipName'] ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="feature-box">
                                                <div class="clearfix">
                                                    <div class="iconset">
                                                        <!-- <span class="glyphicon glyphicon-cog icon"></span> -->
                                                    </div>
                                                    <div class="feature-content">
                                                        <h4>Business Category</h4>
                                                        <p> <?php echo $data_2[0]['business_category']['categoryName'] ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="feature-box">
                                                <div class="clearfix">
                                                    <div class="iconset">
                                                        <!-- <span class="glyphicon glyphicon-cog icon"></span> -->
                                                    </div>
                                                    <div class="feature-content">
                                                        <h4> About Business</h4>
                                                        <p> <?php echo $data_2[0]['about_business'] ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="feature-box">
                                                <div class="clearfix">
                                                    <div class="iconset">
                                                        <!-- <span class="glyphicon glyphicon-cog icon"></span> -->
                                                    </div>
                                                    <div class="feature-content">
                                                        <h4> Experience</h4>
                                                        <p> <?php echo $data_2[0]['experience'] ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingTwo">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <i class="more-less glyphicon glyphicon-plus"></i>
                                        Contact Us
                            </a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="panel-body">
                            <div class="jumbotron jumbotron-sm">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-12 col-lg-12">
                                            <h1 class="h1">
                                                Contact us <small>Feel free to contact us</small></h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="well well-sm">
                                            <form>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="name">
                                                            Name</label>
                                                        <input type="text" class="form-control" id="name" placeholder="Enter name" required="required" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="email">
                                                            Email Address</label>
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                                            </span>
                                                            <input type="email" class="form-control" id="email" placeholder="Enter email" required="required" /></div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="subject">
                                                            Subject</label>
                                                        <select id="subject" name="subject" class="form-control" required="required">
                                                            <option value="na" selected="">Choose One:</option>
                                                            <option value="service">General Customer Service</option>
                                                            <option value="suggestions">Suggestions</option>
                                                            <option value="product">Product Support</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="name">
                                                            Message</label>
                                                        <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                                            placeholder="Message"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                                                        Send Message</button>
                                                </div>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <form>
                                        <legend><span class="glyphicon glyphicon-globe"></span> Our office</legend>
                                        <address>
                                            <strong><?php echo $data_2[$i]['company_name'] ?></strong><br>
                                            795 Folsom Ave, Suite 600<br>
                                            San Francisco, CA 94107<br>
                                            <abbr title="Phone">
                                                P:</abbr>
                                            (123) 456-7890
                                        </address>
                                        <address>
                                            <strong>Full Name</strong><br>
                                            <a href="mailto:#">first.last@example.com</a>
                                        </address>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingThree">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <i class="more-less glyphicon glyphicon-plus"></i>
                                Videos
                            </a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                        <div class="panel-body">
                            No Video Found.
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingFour">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                <i class="more-less glyphicon glyphicon-plus"></i>
                                Products / Services
                            </a>
                        </h4>
                    </div>
                    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                        <div class="panel-body">
                            No Service Found.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/slick/slick.min.js"></script>

        <script src="js/userprofile.js"></script>
    </body>
</html>