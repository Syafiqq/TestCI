<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Colorful Flat by tB3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link id="callCss" rel="stylesheet" href="<?php echo base_url('themes/custom/homepage/css/bootstrap.min.css') ?>"
          type="text/css" media="screen" charset="utf-8"/>

    <link id="callCss" rel="stylesheet" href="<?php echo base_url('themes/custom/homepage/css/style.css') ?>"
          type="text/css" media="screen" charset="utf-8"/>
    <link href="<?php echo base_url('themes/custom/homepage/css/bootstrap-responsive.min.css') ?>" rel="stylesheet">

</head>
<body>
<div id="headerSection">
    <div class="container">
        <div class="span3 logo"><a href="#"><img src="<?php echo base_url('themes/custom/homepage/img/logo1.png') ?>"
                                                 alt=""/></a></div>

        <div class="navbar">


            <div class="nav-collapse">
                <ul class="nav">
                    <li><a href="#ourServices">What we do?</a></li>
                    <li><a href="#portfolioSection">Portfolio</a></li>
                    <li><a href="#meetourteamSection">Team</a></li>
                    <li><a href="#recentpostSection">Blog</a></li>
                    <li><a href="#contactSection">Support</a></li>
                </ul>
            </div>

            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
    </div>
</div>
<!--Header Ends================================================ -->

<div id="carouselSection" class="cntr">
    <div id="myCarousel" class="carousel slide">

        <div class="carousel-inner">
            <div class="item active">
                <a class="cntr" href="#"><img src="<?php echo base_url('themes/custom/homepage/img/1.png') ?>"
                                              alt=""></a>
            </div>

            <div class="item">
                <a class="cntr" href="#"><img src="<?php echo base_url('themes/custom/homepage/img/1.png') ?>"
                                              alt=""></a>
            </div>


        </div>
        <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
        <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
    </div>
</div>

<!-- Sectionone block ends======================================== -->


<!-- Our Services======================================== -->
<div id="ourServices">
    <div class="container">
        <div class="row">

            <div class="row-fluid">
                <div class="span4">

                    <div class="info-img">
                        <img src="<?php echo base_url('themes/custom/homepage/img/img-1.png') ?>"></div>
                    <h4>Flat Design</h4>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et quam est. Mauris faucibus tellus
                        ac auctor posuere. </p>
                </div>
                <div class="span4">
                    <div class="info-img"><img src="<?php echo base_url('themes/custom/homepage/img/img-2.png') ?>">
                    </div>
                    <h4>Great Ideas</h4>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et quam est. Mauris faucibus tellus
                        ac auctor posuere. </p>
                </div>
                <div class="span4">
                    <div class="info-img"><img src="<?php echo base_url('themes/custom/homepage/img/img-3.png') ?>">
                    </div>
                    <h4>Browser Compatibility</h4>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et quam est. Mauris faucibus tellus
                        ac auctor posuere. </p>
                </div>
            </div>


        </div>
    </div>
</div>

<!-- Our Portfolio======================================== -->
<div id="portfolioSection">
    <div class="span6"><h1 class="cntr">Portfolio</h1>

        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et quam est. Mauris faucibus tellus ac auctor
            posuere. </p></div>
    <div class="container">
        <ul class="nav nav-pills">
            <li class="active"><a href="#all" data-toggle="tab">ALL</a></li>
            <li><a href="#web" data-toggle="tab">WEB</a></li>
            <li><a href="#mobile" data-toggle="tab">MOBILE</a></li>
            <li><a href="#photo" data-toggle="tab">PHOTOGRAPHY</a></li>

        </ul>
        <div class="clr"></div>
        <div class="tabbable tabs">
            <div class="tab-content label-primary">

                <div class="tab-pane active" id="all">
                    <ul class="thumbnails">

                        <li class="span4">
                            <div class="thumbnail">
                                <div class="blockDtl">
                                    <a href="#myModal1" role="button" data-toggle="modal"><img
                                            src="<?php echo base_url('themes/custom/homepage/img/img-4.png') ?>" alt=""></a>
                                </div>
                            </div>
                        </li>
                        <li class="span4">
                            <div class="thumbnail">
                                <div class="blockDtl">
                                    <a href="#"><img
                                            src="<?php echo base_url('themes/custom/homepage/img/img-5.png') ?>" alt=""></a>
                                </div>
                            </div>
                        </li>
                        <li class="span4">
                            <div class="thumbnail">
                                <div class="blockDtl">
                                    <a href="#"><img
                                            src="<?php echo base_url('themes/custom/homepage/img/img-6.png') ?>" alt=""></a>
                                </div>
                            </div>
                        </li>
                        <li class="span4">
                            <div class="thumbnail">
                                <div class="blockDtl">
                                    <a href="#"><img
                                            src="<?php echo base_url('themes/custom/homepage/img/img-7.png') ?>" alt=""></a>
                                </div>
                            </div>
                        </li>
                        <li class="span4">
                            <div class="thumbnail">
                                <div class="blockDtl">
                                    <a href="#"><img
                                            src="<?php echo base_url('themes/custom/homepage/img/img-8.png') ?>" alt=""></a>
                                </div>
                            </div>
                        </li>
                        <li class="span4">
                            <div class="thumbnail">
                                <div class="blockDtl">
                                    <a href="#"><img
                                            src="<?php echo base_url('themes/custom/homepage/img/img-9.png') ?>" alt=""></a>
                                </div>
                            </div>
                        </li>


                    </ul>

                </div>

                <div class="tab-pane" id="web">
                    <ul class="thumbnails">

                        <li class="span4">
                            <div class="thumbnail">
                                <div class="blockDtl">
                                    <a href="#myModal1" role="button" data-toggle="modal"><img
                                            src="<?php echo base_url('themes/custom/homepage/img/img-5.png') ?>" alt=""></a>
                                </div>
                            </div>
                        </li>
                        <li class="span4">
                            <div class="thumbnail">
                                <div class="blockDtl">
                                    <a href="#"><img
                                            src="<?php echo base_url('themes/custom/homepage/img/img-4.png') ?>" alt=""></a>
                                </div>
                            </div>
                        </li>
                        <li class="span4">
                            <div class="thumbnail">
                                <div class="blockDtl">
                                    <a href="#"><img
                                            src="<?php echo base_url('themes/custom/homepage/img/img-6.png') ?>" alt=""></a>
                                </div>
                            </div>
                        </li>
                        <li class="span4">
                            <div class="thumbnail">
                                <div class="blockDtl">
                                    <a href="#"><img
                                            src="<?php echo base_url('themes/custom/homepage/img/img-7.png') ?>" alt=""></a>
                                </div>
                            </div>
                        </li>
                        <li class="span4">
                            <div class="thumbnail">
                                <div class="blockDtl">
                                    <a href="#"><img
                                            src="<?php echo base_url('themes/custom/homepage/img/img-8.png') ?>" alt=""></a>
                                </div>
                            </div>
                        </li>
                        <li class="span4">
                            <div class="thumbnail">
                                <div class="blockDtl">
                                    <a href="#"><img
                                            src="<?php echo base_url('themes/custom/homepage/img/img-9.png') ?>" alt=""></a>
                                </div>
                            </div>
                        </li>


                    </ul>

                </div>

                <div class="tab-pane" id="mobile">
                    <ul class="thumbnails">

                        <li class="span4">
                            <div class="thumbnail">
                                <div class="blockDtl">
                                    <a href="#myModal1" role="button" data-toggle="modal"><img
                                            src="<?php echo base_url('themes/custom/homepage/img/img-5.png') ?>" alt=""></a>
                                </div>
                            </div>
                        </li>
                        <li class="span4">
                            <div class="thumbnail">
                                <div class="blockDtl">
                                    <a href="#"><img
                                            src="<?php echo base_url('themes/custom/homepage/img/img-6.png') ?>" alt=""></a>
                                </div>
                            </div>
                        </li>
                        <li class="span4">
                            <div class="thumbnail">
                                <div class="blockDtl">
                                    <a href="#"><img
                                            src="<?php echo base_url('themes/custom/homepage/img/img-4.png') ?>" alt=""></a>
                                </div>
                            </div>
                        </li>
                        <li class="span4">
                            <div class="thumbnail">
                                <div class="blockDtl">
                                    <a href="#"><img
                                            src="<?php echo base_url('themes/custom/homepage/img/img-7.png') ?>" alt=""></a>
                                </div>
                            </div>
                        </li>
                        <li class="span4">
                            <div class="thumbnail">
                                <div class="blockDtl">
                                    <a href="#"><img
                                            src="<?php echo base_url('themes/custom/homepage/img/img-8.png') ?>" alt=""></a>
                                </div>
                            </div>
                        </li>
                        <li class="span4">
                            <div class="thumbnail">
                                <div class="blockDtl">
                                    <a href="#"><img
                                            src="<?php echo base_url('themes/custom/homepage/img/img-9.png') ?>" alt=""></a>
                                </div>
                            </div>
                        </li>


                    </ul>

                </div>

                <div class="tab-pane" id="photo">
                    <ul class="thumbnails">

                        <li class="span4">
                            <div class="thumbnail">
                                <div class="blockDtl">
                                    <a href="#myModal1" role="button" data-toggle="modal"><img
                                            src="<?php echo base_url('themes/custom/homepage/img/img-7.png') ?>" alt=""></a>
                                </div>
                            </div>
                        </li>
                        <li class="span4">
                            <div class="thumbnail">
                                <div class="blockDtl">
                                    <a href="#"><img
                                            src="<?php echo base_url('themes/custom/homepage/img/img-4.png') ?>" alt=""></a>
                                </div>
                            </div>
                        </li>
                        <li class="span4">
                            <div class="thumbnail">
                                <div class="blockDtl">
                                    <a href="#"><img
                                            src="<?php echo base_url('themes/custom/homepage/img/img-6.png') ?>" alt=""></a>
                                </div>
                            </div>
                        </li>


                    </ul>

                </div>


                <a href="#" class="btn btn-large btn-primary disabled">SHOW MORE</a>


            </div>
        </div>
    </div>
</div>


<!-- Blog Section -->
<div id="blogSection">

    <div class="container">

        <div class="row span12">


            <div class="span8">

                <div class="inner">
                    <h1>Layered Neatly Photoshop Template</h1>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et quam est. Mauris faucibus tellus
                        ac auctor posuere. Integer lobortis purus a felis adipiscing, eget ornare justo semper. Etiam
                        commodo tincidunt ante.</p>

                    <a href="#" class="btn btn-large btn-primary">SHOW MORE</a>
                </div>

            </div>

            <div class="span4">
                <img src="<?php echo base_url('themes/custom/homepage/img/img-10.png') ?>" alt=""/>
            </div>

        </div>

        <hr class="soften clear"/>

        <div class="row span12">

            <div class="span4">
                <img src="<?php echo base_url('themes/custom/homepage/img/img-10.png') ?>" alt=""/>
            </div>

            <div class="span8">

                <div class="inner">
                    <h1>Layered Neatly Photoshop Template</h1>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et quam est. Mauris faucibus tellus
                        ac auctor posuere. Integer lobortis purus a felis adipiscing, eget ornare justo semper. Etiam
                        commodo tincidunt ante.</p>

                    <a href="#" class="btn btn-large btn-primary">SHOW MORE</a>
                </div>

            </div>


        </div>


    </div>
</div>

<!-- Meet our team======================================== -->
<div id="meetourteamSection">
    <div class="span6"><h1 class="cntr">MEET OUR TEAM</h1>

        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et quam est. Mauris faucibus tellus ac auctor
            posuere. </p></div>
    <div class="container">

        <div class="tabbable tabs">
            <div class="tab-content label-primary">

                <div class="tab-pane active" id="all">
                    <ul class="thumbnails">

                        <li class="span4">
                            <div class="thumbnail">
                                <div class="blockDtl">
                                    <a href="#"><img
                                            src="<?php echo base_url('themes/custom/homepage/img/img-11.png') ?>"
                                            alt=""></a>
                                    <h4>JOHN SMITH</h4>
                                    <h5>Creative Director</h5>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et quam est. </p>
                                    <a class="facebook" href="#"></a>
                                    <a class="twitter" href="#"></a>
                                    <a class="pin" href="#"></a>
                                </div>
                            </div>
                        </li>
                        <li class="span4">
                            <div class="thumbnail">
                                <div class="blockDtl">
                                    <a href="#"><img
                                            src="<?php echo base_url('themes/custom/homepage/img/img-11.png') ?>"
                                            alt=""></a>
                                    <h4>JOHN SMITH</h4>
                                    <h5>Creative Director</h5>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et quam est. </p>
                                    <a class="facebook" href="#"></a>
                                    <a class="twitter" href="#"></a>
                                    <a class="pin" href="#"></a>
                                </div>
                            </div>
                        </li>
                        <li class="span4">
                            <div class="thumbnail">
                                <div class="blockDtl">
                                    <a href="#"><img
                                            src="<?php echo base_url('themes/custom/homepage/img/img-11.png') ?>"
                                            alt=""></a>
                                    <h4>JOHN SMITH</h4>
                                    <h5>Creative Director</h5>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et quam est. </p>
                                    <a class="facebook" href="#"></a>
                                    <a class="twitter" href="#"></a>
                                    <a class="pin" href="#"></a>
                                </div>
                            </div>
                        </li>


                    </ul>


                </div>


            </div>
        </div>
    </div>
</div>

<!-- recent post======================================== -->
<div id="recentpostSection">
    <div class="span6"><h1 class="cntr">RECENT POST</h1>

        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et quam est. Mauris faucibus tellus ac auctor
            posuere. </p></div>
    <div class="container">

        <div class="tabbable tabs">
            <div class="tab-content label-primary">

                <div class="tab-pane active" id="all">
                    <ul class="thumbnails">

                        <li class="span4">
                            <div class="thumbnail">
                                <div class="blockDtl">
                                    <a href="#"><img
                                            src="<?php echo base_url('themes/custom/homepage/img/img-12.png') ?>"
                                            alt=""></a>
                                    <h4>Really Interesting Post</h4>
                                    <h6>October 27</h6>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et quam est. </p>

                                </div>
                            </div>
                        </li>
                        <li class="span4">
                            <div class="thumbnail">
                                <div class="blockDtl">
                                    <a href="#"><img
                                            src="<?php echo base_url('themes/custom/homepage/img/img-12.png') ?>"
                                            alt=""></a>
                                    <h4>Really Interesting Post</h4>
                                    <h6>October 27</h6>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et quam est. </p>

                                </div>
                            </div>
                        </li>
                        <li class="span4">
                            <div class="thumbnail">
                                <div class="blockDtl">
                                    <a href="#"><img
                                            src="<?php echo base_url('themes/custom/homepage/img/img-12.png') ?>"
                                            alt=""></a>
                                    <h4>Really Interesting Post</h4>
                                    <h6>October 27</h6>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et quam est. </p>

                                </div>
                            </div>
                        </li>


                    </ul>
                    <a href="#" class="btn btn-large btn-primary disabled">SHOW MORE</a>

                </div>


            </div>
        </div>
    </div>
</div>


<!-- Contact Section -->
<div id="contactSection">
    <div class="span6"><h1 class="cntr">Contact Us</h1>

        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et quam est. Mauris faucibus tellus ac auctor
            posuere. </p></div>
    <div class="container">
        <div class="row">
            <div class="span8">

                <form class="form-horizontal">
                    <fieldset>
                        <div class="control-group">

                            <div class="controls">
                                <input type="text" class="input-xlarge" id="input01">

                            </div>
                        </div>
                        <div class="control-group">

                            <div class="controls">
                                <input type="text" class="input-xlarge" id="input11">

                            </div>
                        </div>
                        <div class="control-group">

                            <div class="controls">
                                <textarea class="input-xlarge" id="textarea" rows="3" style="height:210px"></textarea>
                            </div>
                        </div>


                        <button type="submit" class="btn btn-large btn-primary disabled">Send Message</button>

                    </fieldset>
                </form>
            </div>


        </div>
    </div>

    <div class="footerSection container">


        <div class=" span4 socialicon">
            <a class="facebook" href="http://www.facebook.com/xtendify"></a>
            <a class="twitter" href="http://www.twitter.com/xtendify"></a>
            <a class="html5" href="#"></a>
            <a class="icon2" href="#"></a>
        </div>


        <div class="span8 copyright"><p> Copyright 2014 | Developed By <a href="http://www.tb3.co.in">tB3</a></p></div>
    </div>


</div>
<!-- Wrapper end -->


<a href="#" class="go-top"><i class="icon-arrow-up"></i></a>

<!-- Javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

<script src="<?php echo base_url('themes/custom/homepage/js/jquery-1.9.1.min.js') ?>"></script>
<script src="<?php echo base_url('themes/custom/homepage/js/bootstrap.min.js') ?>" type="text/javascript"></script>
<script src="<?php echo base_url('themes/custom/homepage/js/jquery.scrollTo-1.4.3.1-min.js') ?>"
        type="text/javascript"></script>
<script src="<?php echo base_url('themes/custom/homepage/js/jquery.easing-1.3.min.js') ?>"></script>
<script src="<?php echo base_url('themes/custom/homepage/js/default.js') ?>"></script>

<script type="text/javascript">

    $(document).ready(function ()
    {
        $('#myCarousel').carousel({
            interval: 7000
        });

    });


</script>


</body>
</html>