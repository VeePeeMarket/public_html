<?php
include 'config/index.php';
if (isset($_GET['search'])) {
  $query = $_GET['search'];
  header('location: market/?search='.$query.'');
}
if (0==0 /*strpos($_SERVER[''], 'vp') !== false*/) {
  # code...
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>
    <?php if($_SESSION['mode'] == 'customer'){ echo 'VeePee Market | The Virtual Public Market'; }elseif ($_SESSION['mode'] == 'client') {echo "VeePee Market | Client Mode";}elseif ($_SESSION['mode'] == 'spectator') { echo "VeePee Market | The Virtual Public Market"; } ?>
     </title>

  <!--*******************************Metaz****************************************-->
  <meta name="description" content="How to make money online?
  Join VeePee Market | The World's Leading Digital Market. A Platform Where You Can Establish Your Own Online Store And Trade For Free. VeePee Market Is The Best And The Most Reliable Digital Market With Fast Goods Delivery And The Best Deals. One interesting about trading anything on VeePee market is that you will be able to declare the time when you want your goods to be delivered. Also, you will be able to buy goods and pay for services with Crypto Currencies like BitCoin, Erethium, VPcoin, Vellars, etc. VeePee market has it's own CryptoCurrency which is called -- TheVPcoin. Why not try us out today. Today's Assorted Products: <?php foreach($mysqli->query('SELECT * FROM products') as $meta){ echo ' Item Name: '.$meta["item_name"].''; echo '. Description: '.$meta["description"].'. '; } ?>">
  <meta name="author" content="VENRUX intl.">
  <meta charset="utf-8" name="keywords" content="Digital, Market, Digital Market, VeePee, VenPay, Online, Marketing, Money, Buy, Sell, Goods, Services, Online, Crypto, CryptoCurrency, Venrux, how to make money online, trading, bitcoin, bitcoins,online shopping, Virtual Public Market, sell bitoin, buy bitoin<?php foreach($mysqli->query('SELECT * FROM products') as $meta){ echo ','.$meta["item_name"].'';} ?>">
  <meta name="theme-color" content="<?php if($_SESSION['dark_mode'] !== true){ ?>#4EB478<?php }else{ ?>#111<?php } ?>">
  <meta name='viewport' content='width=device-width, initial-scale=1.0, shrink-to-fit=no, user-scalable=no'>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="robots" content="index, follow">
  <!--******************************/Metaz****************************************-->

  <!--******************************Scriptz***************************************-->
  <script type="text/javascript" src="jquery.js"></script>
  <script type="text/javascript" src="fontawesome/js/all.min.js"></script>
  <script src="material-scrolltop/dist/material-scrolltop.js"></script>
  <!--******************************/Scriptz**************************************-->

  <!--******************************Stylez****************************************-->
  <link rel="shortcut icon" href="vp.png">
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="vp.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="vp.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="vp.png">
  <link rel="apple-touch-icon-precomposed" href="vp.png">
  <link rel="stylesheet" type="text/css" href="typewrite.vic.css">
  <link rel="stylesheet" type="text/css" href="fontawesome/css/fontawesome.min.css">
  <link href="animate2.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="bootstrap5/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="wowjs/css/libs/animate.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="material-scrolltop/dist/material-scrolltop.css" />
  <style type="text/css">
    html, body, header, #hero{
      height: 100%;
    }
    @font-face{
      font-family: calibri;
      src: url('fonts/calibri.ttf');
    }
    @font-face{
      font-family: palatino;
      src: url('fonts/pala.ttf');
    }
    .palatino{
      font-family: palatino;
    }
    .intro{
      background: url('uploads/dark5.gif')/* no-repeat center center fixed*/;
      /*-webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;*/
    }
    .start{color: #fff !important;text-transform: uppercase;text-decoration: none;background-image: linear-gradient(to right, dodgerblue, #241a8b);padding: 20px;border-radius: 5px;display: inline-block;border: none;transition: all 0.4s ease 0s;}
    .start:hover{
      background-image: linear-gradient(to right, #241a8b, dodgerblue);
      transition: 0.4s;
    }
    .scrollbar::-webkit-scrollbar {
      width: 10px;
    }

    .scrollbar:hover::-webkit-scrollbar {
      cursor: progress;
    }
    /* Track */
    .scrollbar::-webkit-scrollbar-track {
      box-shadow: inset 0 0 5px grey; 
      border-radius: 10px;
    }
    /* Handle */
    .scrollbar::-webkit-scrollbar-thumb {
      background: gray; 
      border-radius: 10px;
      cursor: url("vp.png"), auto;
    }
    .scrollbar::-webkit-scrollbar-button-end{
      display: block;
    }
    .dreams{
      box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
      padding: 5px;
      margin: 15px 0px 15px 0px;
      display: block;
      font-weight: bold;
    }
    .wow:first-child {
      visibility: hidden;
    }
    .first-set{
      animation-iteration-count: infinite; animation-delay: 1s;
    }
    .second-set{
       animation-iteration-count: infinite; animation-delay: 2s;
    }
    div.dreams.bg-dark.text-light{
      margin-right: 0px;
    }
    body{
      background-color: #242424;
      font-family: calibri;
    }
    body::-webkit-scrollbar {
      width: 10px;
    }
    /* Track */
    body::-webkit-scrollbar-track {
      box-shadow: inset 0 0 5px grey; 
      border-radius: 13px;
    }
    /* Handle */
    body::-webkit-scrollbar-thumb {
      background: #808080; 
      border-radius: 2px;
    }
    button.material-scrolltop.reveal{
      background-color: #808080;
      opacity: .7;
    }
    .paragraph{
      text-indent: 10%;
      font-family: calibri;
      text-align: justify;
      font-size: 20px;
      padding: 4%;
      border-radius: 2px;
      margin: 1% 5% 3% 5%;
      background-image: linear-gradient(to right, #fff, #dcdcdc);
      box-shadow:0 10px 16px 0 rgba(255,255,255,0.2),0 7px 21px 0 rgba(255,255,255,0.19) !important;
      border: 1px solid #dadce0;
      box-sizing: border-box;
    }
    .calibri{
      font-family: calibri;
    }
    #intro{
      padding: 10px;
      padding-top: 7%;
      border-top: 10% solid;
    }
    a{
      text-transform: capitalize;
      color: #4EB478;
      text-decoration: none;
      font-weight: bold;
      transition: 0.4s;
    }
    .introTitles{
      padding: 0% 5% 0% 5%;
    }
    .breakers{
      height: 12%; background-color: #fff;
      background-image: linear-gradient(to right, #111, #333);
    }
    h1{
      color: #f8f8f8;
      padding-top: 3.5%;
      text-shadow: 2px 2px 4px #000000;
    }
  </style>
  <!--*****************************/Stylez****************************************-->

  <!--[if IE]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>
<body id="body" style="user-select: none;">
  <!-- ************************************************************************************** -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #333;">
  <a href="#" class="navbar-brand"><img src="vp.png" width="55"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Select">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active"><a href="market" class="nav-link">Market<span class="sr-only">(current)</span></a></li>
      <li class="nav-item dropdown">
        <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Contents
        </a>
        <div class="dropdown-menu animated fadeIn" aria-labelledby="navbarDropdown">
          <a href="market" class="dropdown-item">VeePee Market</a>
          <a href="market?deals" class="dropdown-item">Best Deals Of The Day</a>
          <a href="market/shop/index" class="dropdown-item">Visit A Shop In VP Market</a>
          <a href="market/shop" class="dropdown-item">Open An Online Shop</a>
          <a href="market/shop" class="dropdown-item">Login To Your Shop</a>
          <a href="market/shop/sell" class="dropdown-item">Place An Item For Sale</a>
          <a href="market/shop/cash-out" class="dropdown-item">Receive A Payment</a>
        </div>
      </li>
      <li class="nav-item"><a href="#sections" class="nav-link" onclick="$('body').animate({scrollTop: $('#start').offset().top}); document.getElementById('navbarSupportedContent').classList.remove('show');">All Sections</a></li>
      <li class="nav-item"><a href="#download" class="nav-link">Download</a></li>
      <li class="nav-item"><a href="market/shop" class="nav-link">Create Your Online Shop</a></li>
      <li class="nav-item"><a href="#intro" class="nav-link" onclick="$('body').animate({scrollTop: $('#toIntro').offset().top}); document.getElementById('navbarSupportedContent').classList.remove('show');">Introduction</a></li>
      <li class="nav-item"><a href="#how" class="nav-link" onclick="$('body').animate({scrollTop: $('#how').offset().top}); document.getElementById('navbarSupportedContent').classList.remove('show');">How To Use</a></li>
      <li class="nav-item"><a href="venmail" class="nav-link">Help Center</a></li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input type="search" aria-label="Search" placeholder="Search For Anything" class="form-control-sm mr-sm-2" name="search">
      <!-- <button type="submit" class="btn btn-outline-success my-2 my-sm-0">Search</button> -->
    </form>
  </div>
</nav>
<!-- ****************************************************************************************** -->
<!--  -->
<div id="hero" class="view intro">
  <div class="container" style="position: relative; top: 20%;" align="center">
    <div class="toast show scrollbar" style="overflow-y: scroll; height: 60%; overflow-x: hidden; border: 6px solid #333;">
      <div class="toast-header bg-dark" style="padding: 5%;">
        <h1 class="text-light wow slideInLeft"><span>VeePee </span> <span class="bg-info bg-gradient rounded text-light" style="padding: 5px;">Market</span></h1>
      </div>
          <h5 class="font-normal text-break font-weight-normal wow fadeInDown text-decoration-underline">The Virtual Public Market</h5>
        <div class="toast-body wow fadeIn">
            <p class="text-bold">
              The No.1 Business Platform Where Dreams Are Converted To Reality
              <ul class="list-unstyled">
                <li class="text-left card dreams animated pulse slow first-set clearfix">
                Have You Ever Imagined Yourself Buying, Selling, And Carrying Out Your Daily Business Without Stepping Out Of Your Sweet Home For Once?
                </li>
                <li class="text-left card dreams animated pulse slow second-set">
                Have You Ever Imagined Creating A Digital Market For Free? As In... Your Own Online Shop Where You Can Place Goods For Sale, Making Them Visible To The Entire World For Negotiations?
                </li>
                <li class="text-left card dreams animated pulse slow first-set">
                Have You Ever Imagined Starting A Business With <?= $_SESSION['currency']['symbol'] ?> 0.00 But Yet Making Your Daily Regular Profit Without Stress?
                </li>
                <li class="text-left card dreams animated pulse slow second-set">
                Have You Ever Imagined Being The Boss Of Your Own Business And Trading Without Bounds?
                </li>
                <li class="text-left card dreams animated pulse slow first-set">
                Have You Ever Imagined Saving The Stress Of Walking Out To Buy Things Whereas You Can Just Place An Order Of What You Want Within Just A Single Click And Then Having It At Your Door Post Within A Few Moments?
                </li>
                <li class="text-left card dreams animated pulse slow second-set">
                Have You Ever Imagined Creating An Online Store Without Any Computer Knowledge?
                </li>
                <li class="text-left card dreams animated pulse slow first-set">
                Have You Ever Imagined Being Self-Employed At No Costs?
                </li>
                <li class="text-left card dreams animated pulse slow second-set">
                Have You Ever Imagined Taking Your Business To The Next Level Without Much Deliberations?
                </li>
                <li class="text-left card dreams animated pulse slow first-set">
                Have You Ever Imagined Buying Your Neccessities Effortlessly By Just Making A Search?
                </li>
                <li class="text-left card dreams animated pulse slow second-set">
                Have You Ever Imagined Hosting Your Own Business Without Employing Anyone?
                </li>
                <li class="text-left card dreams animated pulse slow first-set">
                Have You Ever Imagined Carrying Out Your Business With Or Without An Address?
                </li>
              </ul>

              <div class="dreams bg-dark text-light">
              <h5>Then Stop Imagining Now!</h5>
              <hr>
              <h6>
                All These Imaginations Are Being Made Real By VeePee Market
              </h6>
              <hr>
              <p align="left">
                The Virtual Public Market, The No.1 User Friendly Online Public Market, The Best Choice In Digital Marketing, The Most Efficient Business World Where All Stress Are Being Taken Away From People All Over The World By Enabling Them Carry Out Their Business Easily, Making Life Easier.
              </p>
                    <h6>
                    VeePee Market Is Here For You! <i class="fa fa-thumbs-up"></i>
                    <hr>
                    VeePee Market Is Here For The World! <i class="fa fa-thumbs-up"></i>
                    <hr>
                    Feel Free To Use <i class="fa fa-thumbs-up"></i>
                    <hr>
                    The VeePee Market Is Your Friend <i class="fa fa-smile"></i>
                    </h6>
              </div>
            </p>
        </div>
    </div>
      <div align="center">
        <button class="start" onclick="$('body').animate({scrollTop: $('#start').offset().top}, 2800);">Get Started <i class="fa fa-arrow-down"></i></button>
      </div>
  </div>
  <div class="mask">
      
  </div>
</div>
<!-- /Intro -->
<div class="breakers" id="start" align="center"></div>
<!--  -->
<div class="bg-light">
</div>

  <!-- ************************************************************************************ -->

  <div class="bg-light" id="sections">
    <div class="card">
      <div class="card-header card-header-success breakers">
        <h1 class="text-center">All Sections</h1>
      </div>
      <div class="card-body intro">
        <div class="container">
          <!-- Row -->
          <div class="row">
            <!-- ************************************************************************* -->
            <div class="col-sm-12 col-md-6 btn btn-dark wow bounceInUp" style="margin-bottom: 5px; border-radius: 0px;" onclick="window.open('market', '_self')">
              <div class="thumbnail" align="center">
                <img src="uploads/business.gif" style="width: 50%;" class="img-fluid">
              </div>
                <div class="caption">
                  <h4 class="text-bold">Let's Go To The Market</h4>
                  <p>See Awesome Products For Sale</p>
                </div>
            </div>
            <!-- ************************************************************************* -->
            <div class="col-sm-12 col-md-6 btn btn-dark wow bounceInUp" style="margin-bottom: 5px; border-radius: 0px;" data-wow-delay="0.4s" onclick="window.open('market/shop', '_self')">
              <div class="thumbnail" align="center">
                <img src="uploads/operating.gif" style="width: 50%;" class="img-fluid">
              </div>
              <div class="caption">
                <h4 class="text-bold">Create Your Online Shop</h4>
                <p>Start Your Own Digital Trade For Free</p>
              </div>
            </div>
            <!-- ************************************************************************** -->
          </div>
          <!-- /Row -->
          
          <!-- Row -->
          <div class="row">
            <!-- ************************************************************************* -->
            <div class="col-sm-12 col-md-6 btn btn-dark wow bounceInUp" style="margin-bottom: 5px; border-radius: 0px;" onclick="window.open('market/shop', '_self')">
              <div class="thumbnail" align="center">
                <img src="uploads/walking.gif" style="width: 50%;" class="img-fluid">
              </div>
              <div class="caption">
                <h4 class="text-bold">Go To Your Shop</h4>
                <p>Automatically Proceed To Your VeePee Shop</p>
              </div>
            </div>
            <!-- ************************************************************************* -->

            <!-- ************************************************************************* -->
            <div class="col-sm-12 col-md-6 btn btn-dark wow bounceInUp" style="margin-bottom: 5px; border-radius: 0px;" data-wow-delay="0.4s" onclick="window.open('market/shop/index', '_self')">
              <div class="thumbnail" align="center">
                <img src="uploads/driving.gif" style="width: 50%;" class="img-fluid">
              </div>
                <div class="caption">
                  <h4 class="text-bold">Search For A Shop In VP Market</h4>
                  <p>Quickly Visit A Shop In VeePee Market By Searching For It</p>
                </div>
            </div>
          </div>
          <!-- /Row -->
          
          <!-- Row -->
          <div class="row">
            <!-- ************************************************************************* -->
            <div class="col-sm-12 col-md-6 btn btn-dark wow bounceInUp" style="margin-bottom: 5px; border-radius: 0px;" onclick="window.open('market/shop/sell', '_self')">
              <div class="thumbnail" align="center">
                <img src="uploads/trade.gif" style="width: 50%;" class="img-fluid">
              </div>
              <div class="caption">
                <h4 class="text-bold">Quick Sell</h4>
                <p>Navigate To Your Shop And Quickly Place An Item For Sale</p>
              </div>
            </div>
            <!-- ************************************************************************** -->
            <div class="col-sm-12 col-md-6 btn btn-dark wow bounceInUp" style="margin-bottom: 5px; border-radius: 0px;" data-wow-delay="0.4s" onclick="window.open('market/shop/cash-out', '_self');">
              <div class="thumbnail" align="center">
                <img src="uploads/money.jfif" style="width: 50%;" class="img-fluid">
              </div>
                <div class="caption">
                  <h4 class="text-bold">Receive A Payment For Sales Made</h4>
                  <p>Did You Make A Successful Sale / Delivery? Click Here To Cash Out</p>
                </div>
            </div>
            <!-- ************************************************************************** -->
          </div>
          <!-- /Row -->
        </div>
      </div>
    </div>
  </div>
  <!-- ************************************************************************************ -->
  <div style="display: block; padding: 10px; padding-bottom: 10%;" id="toIntro" class="breakers">
    <h1 class="text-center">Introduction</h1>
  </div>
  <div class="bg-light text-light intro" id="intro">
  <h2 class="introTitles">1. <span class="palatino">About VeePee Market</span></h2>
  <p class="paragraph text-dark bg-light wow bounceInUp">
    The Virtual Public Market commonly known as <a href="market">VeePee Market&reg;</a> is a user-friendly online shopping platform which enables people all over the world to carry out their day to day business digitally by creating their individual online shopping platforms and making their legitimate money online without engaging in the stress of trading using physical shops and business centers.
  </p>
  <p class="paragraph bg-light text-dark wow bounceInUp" data-wow-delay="0.4s">
      Buyers can directly place their orders randomly when they search for what they want in the <a href="market">Market</a>. Or otherwise, if they know the particular shop where they want to purchase that item from, they can just <a href="market/shop/index">search</a> for the shop using the <a href="#" onclick="swal('', 'The Shop Number Is A Unique 3-digit Code Which Begins A Prefix vp- For Example vp-001, vp-x7f And So On');">shop number</a> or the business name of the shop. It is more convinient when a buyer purchases all his goods from one shop as this will enable all his goods to arrive at the same time.
  </p>
  </div>
  <!--  -->
  <div id="how" class="breakers" align="center">
    <h1 style="padding-top: 10px;">How To Use VeePee Market</h1>
  </div>
  <!--  -->
  <div class="bg-light text-light intro">
  <h2 class="introTitles">2. <span class="palatino">How To Sell Your Goods Using VeePee Market</span></h2>
  <p class="paragraph text-dark bg-light wow bounceInUp" data-wow-delay="0.4s">
    First of all, you have to <a href="market/shop">Create A Shop</a> in VeePee Market. Your shop is your personal marketing platform which you can customize to your taste according to the type of business you want to start. There you can sell whatever you want to sell and receive payments for items sold.
  </p>
  <p class="paragraph bg-light text-dark wow bounceInUp">
      Feel free to make your shop beautiful and attractive to buyers the way you wish. Please note that how you design and describe your shop is exactly what buyers, customers and visitors will see when they visit your shop.
  </p>
  <p class="paragraph text-dark bg-light wow bounceInUp">
    <a href="market/shop/sell">Place Items For Sale In Your Shop</a> As Much As You Want. These items will be visible to The VeePee General Market Too. And The Whole World Will Be Able To See What You Sell And Buy From You.
  </p>

  <p class="paragraph text-dark bg-light wow bounceInUp">
    <span class="text-danger font-weight-bold text-decoration-underline">What If Someone Orders For My Product?</span>
    <br>
    If You Receive A Message Or An Email Telling You That Someone Is Requesting For Your Product, All You Need To Do Is To Follow These Four Simple Steps:
      <br>
      1. <b>Deliver It To Buyer Using The Delivery Address Provided.</b>
      <br>
      2. <b>When You Meet The Buyer, Don't Request For Money, Request For Your <a href="javascript: void();" onclick="swal('Payment Code', 'Is A Unique Code Representing A Transaction Made. Sellers Use Payment Codes To Get Their Money After A Successful Sale / Delivery.');">Payment Code</a> Instead.</b>
      <br>
      3. <b>Go To Your Shop And Select <a href="market/shop/cash-out">Wallet</a></b>
      <br>
      4. <b>Type The Payment Code And Tap 'Receive Payment'. If The Payment Code Is Correct, The Money Will Be Paid Into Your Wallet.</b>
      <br>
    Please Ensure You Provide Your Bank Account Number Or PayPal Email Address In The Space Provided Because In Less Than 24hrs, VeePee Market Is Going To Deposit All The Money Into Your Bank Account.
  </p>

  <div class="paragraph text-dark bg-light wow bounceInUp">
    <span class="text-danger font-weight-bold text-decoration-underline">What If I Am Unable To Deliver That Item Due To Distance Problems?</span>
    <br>
    If Someone Ordered For Your Goods But You Are Unable To Deliver, Don't Worry. You Can Place A Delivery Request Called 'Ship For Me' To VeePee Market. 'Ship For Me' Is A Request In Which A VeePee Market Will Locate You, Collect Your Goods, And Deliver For You. All You Need To Do Is Just To Relax <i class="fa fa-smile"></i> And Wait. Once Your Item(s) Have Been Successfully Delivered, Your Money Will Be Deposited Directly Into Your Wallet And Later Into Your Bank.
    <br>
    <span class="text-danger"><i>Please Note That This Will Cost You 10% Of Your Normal Selling Price</i></span>
  </div>

  <div class="paragraph text-dark bg-light wow bounceInUp">
    <span class="text-danger font-weight-bold text-decoration-underline">How To Place A 'Ship For Me' Request (SFM)</span>
    <br>
    While In <a href="market/shop">Your Shop</a>, Go To <span class="text-info">Orders</span>. Below Each Order you Will See A Selection Menu, Change It From Self Delivery To Ship For Me <select class="form-select-sm" onchange="swal('', 'This Will Modify The Mode Of Delivery');">
      <option>Self Delivery</option>
      <option>Ship For Me</option>
    </select>
  </div>

  <div class="paragraph text-dark bg-light wow bounceInUp">
    <span class="text-danger font-weight-bold text-decoration-underline">How Do I Make My Shop Popular? How Do I Make More Sales? How Do I Improve My Business In VeePee Market?</span>
    <br>
    These Are Questions That Keeps Peoples' Minds Booming People's Minds All The Time <i class="fa fa-laugh"></i>. Of Course There Are Many Ways In Which You Can Boost Your Trade With VeePee Market. Here Are The Basic Secrets...
      <hr>
      1. <b>In VeePee Market, There Are Four Types Of Shops <a href="javascript: void();" onclick="swal('Plaza', 'This Shop Type Costs <?= $_SESSION['currency']['symbol'] ?>1000. And It Is The #1 Ranking Shop Type');">[Plaza]</a>, <a href="javascript: void();" onclick="swal('Enterprise', 'This Shop Type Costs <?= $_SESSION['currency']['symbol'] ?>750. And It Is The #2 Ranking Shop Type');" class="text-info">[Enterprise]</a>, <a href="javascript: void();" onclick="swal('Plaza', 'This Shop Type Costs <?= $_SESSION['currency']['symbol'] ?>500. And It Is The #3 Ranking Shop Type');" class="text-warning">[Super Shop]</a> And <a href="javascript: void();" onclick="swal('Plaza', 'This Shop Type Is Free. And It Is The #4 Ranking Shop Type');" class="text-danger">[Kiosk]</a>. By Default, When You Create A Shop In VeePee Market, Your Shop Type Is A Kiosk, It Is Free Of Charge But It Will Bring Not Much Visitors To You But When You Upgrade To A Better Shop, The Better The Shop, The Better The Number Of Visitors You Get Daily.</b>
      <hr>
      2. <b>[Advertisement!] You Can Get People To Buy From Your Shop By Advertising On Social Media. How Do You Take Them Into Your Shop Directly? Use This Link... <span class="text-success">www.venrux.com?vp-YOUR_SHOP_NUMBER</span> OR <span class="text-success">www.veepeemarket.com?vp-YOUR_SHOP_NUMBER</span> For Instance, if my shop number is vp-001 and I want to generate a link to send people into my shop directly it will be <i class="fa fa-arrow-right"></i> www.venrux.com?vp-001 OR www.veepeemarket.com?vp-001 <br> Below Is A Sample Advert Placed On Social Media
        <br>
        <div class="paragraph">
          <img src="uploads/bike.jpg" width="200">
          <p class="caption">Hello, Welcome To Venrux Bikes, We Sell Super Bikes At Cheap Rates. Tap This Link To Place Your Order <a href="?vp-j0a" class="text-lowercase">www.venrux.com?vp-j0a</a></p>
        </div>

      </b>
      <hr>
      3. <b><a href="market/trend">Pay For Trends.</a> With Just $1 You Can Have Your Item Displaying On VeePee Market's Trending Section For 24hrs.</b>
      <hr>
      4. <b>Use Attractive Images And Descriptions. When People Get Impressed With What They See About Your Item, They Will Hit The Like <i class="fa fa-thumbs-up"></i> Button</b> And The More Your Likes, The Higher Your Ranking.
      <br>
  </div>

  <h2 class="introTitles">3. <span class="palatino">How To Order Goods From VeePee Market</span></h2>
  <p class="paragraph text-dark bg-light wow bounceInUp" data-wow-delay="0.4s">
    All You Need Is To <a href="market">Go To The Market</a> First. Then, Search For What You Want To Buy And Place Your Order By Specifying The Quantity (How many you need), The Variety Of The Item And Then Tap <button class="btn btn-success btn-sm" onclick="swal('', 'This Indicates That An Item Has Been Added To Your Cart', 'success');">Add To Cart</button>. To Review Or Check What You Have Ordered For, Tap The Shopping Cart Icon <button class="btn btn-dark btn-sm" onclick="swal('', 'Your Cart Is A Storage Location Where You Can See The Details Of Everything You Ordered For');"><i class="fa fa-shopping-cart"></i></button> Located At The Right Corner Of Your Screen To Open The Cart Window, There You Can Make Changes For Each Item You Ordered For.
  </p>
  <p class="paragraph bg-light text-dark wow bounceInUp">
      Also, If You Want To Buy From A Particular Seller, You Will Have To <a href="market/shop/index">Search For The Seller</a> Using His Shop Number. This Will Take You To His Shop Directly. Or You Can Also Search By Business Name To See All Matching Shops With That Given Name.
  </p>
  <p class="paragraph bg-light text-dark wow bounceInUp" id="paycode">
      When Done, Click On <button class="btn btn-success btn-sm">Proceed To Checkout</button> Which Is At The Top Of The Cart Window, This Will Take You To A Form Page Where You Will Fill-In Your Delivery Address (Where you want your item to be delivered). After Filling The Form, Select <button class="btn btn-sm btn-success">Checkout</button> To Proceed To The Paystack Payment Page Where You Will Pay For The Goods You Ordered For. Once Your Payment Has Been Made Successfully, You Will Receive A Code Called Payment Code. Write It Down And Keep It Secret.
  </p>
  <p class="paragraph bg-light text-dark wow bounceInUp">
       <span class="text-danger font-weight-bold text-center">What Is A Payment Code?</span>
       <br>
      Remember, VeePee Market Is An Online Public Market. For Your Security, When You Make A Payment, It Is Not Directly Deposited To The Seller Until Your Goods Have Arrived To You And Because Of This, A Unique Code Representing Your Transaction [Payment Code] Will Be Given To You, Which You Must Give To The Seller When They Arrive With Your Goods. They Will Use That Code To Receive Their Payment. Please Note That Your Items Will Not Be Handed Over To You If You Don't Provide The Payment Code.
      <br>
      Have You Lost Your Payment Code? You Can Still Retrieve It. <a href="market/login">Login To Your Account</a>, In The Options Menu / NavBar, Go To 'My Account' And Select <a href="market/transactions">Transactions</a>. This Will Take You To A Page Where You Will See Details Of Your Previous Purchases / Orders, Each One With It's Own Payment Code.
  </p>
  <p class="paragraph bg-light text-dark wow bounceInUp">
       <span class="text-danger font-weight-bold text-center">What If My Goods Don't Arrive?</span>
       <br>
      If Your Goods Fail To Arrive Within 144hrs You Can <a href="venmail/?case=refund">Seek For A Refund</a>.
      <br>
      If You Do Not Seek For A Refund, Your Goods Can Still Arrive At Any Given Time.
  </p>
  <p class="paragraph bg-light text-dark wow bounceInUp">
      Please Note That If You Order For Items From Different Sellers, They Will Arrive At Different Time Intervals.
      <br>
      Just Say You Know
  </p>
  </div>

<!-- *************************************************FOOTER*********************************************** -->
<div class="breakers" align="center" id="footer" style="padding-bottom: 10%;"><h1>Don't Be Left Out! An Opportunity Is Here!</h1></div>
<footer class="page-footer font-small blue pt-4 text-light">
  <div class="container-fluid text-center text-md-left">
    <div class="row">
      <!--  -->
      <div class="col-md-6 mt-md-0 mt-3">
        <h5 class="text-uppercase">Get In Touch <i class="fa fa-map-marker"></i></h5>
        <p><u>Nearest Station:</u>
          <br>
          01 Lagos Street, Sabon gari, Zaria
          <br>
        Kaduna, Nigeria.</p>
      </div>
      <!-- Grid -->
      <hr class="clearfix w-100 d-md-none pb-3">
      <!-- Grid -->
      <div class="col-md-3 mb-md-0 mb-3">
        <h5 class="text-uppercase">Basic Links For Buyers</h5>
        <ul class="list-unstyled">
          <li>
            <i></i> <a href="market">Go To VeePee Market</a>
          </li>
          <li>
            <a href="market/transactions">Previous Transactions</a>
          </li>
          <li>
            <a href="market/settings">Settings</a>
          </li>
          <li>
            <a href="tel: +2349036299454">Speak To The Nearest Agent</a>
          </li>
        </ul>
      </div>  
      <!-- Grid -->

      <!-- Grid -->
      <div class="col-md-3 mb-md-0 mb-3">
        <h5 class="text-uppercase">Basic Links For Sellers</h5>
        <ul class="list-unstyled">
          <li>
            <a href="market/shop">Login to your shop</a>
          </li>
          <li>
            <a href="market/shop">Create your online shop</a>
          </li>
          <li>
            <a href="market/shop/sell">Post an item for sale</a>
          </li>
          <li>
            <a href="market/shop/cash-out">Receive A Payment For Item Sold</a>
          </li>
        </ul>
      </div>  
      <!-- Grid -->
  </div>
</div>
<!-- Copyright -->
<div class="footer-copyright text-center py-3">
  &copy; <?= date('Y') ?> Copyright: 
  <a href="market">The VeePee Market</a>
</div>
<!-- /Copyright -->
</footer>
<!-- *************************************************/FOOTER*********************************************** -->
<!-- material-scrolltop button -->
<button class="material-scrolltop" type="button"></button>
<script type="text/javascript" src="bootstrap5/js/bootstrap.min.js"></script>
<script type="text/javascript" src="wowjs/dist/wow.js"></script>
<script>
  wow = new WOW(
    {
      animateClass: 'animated',
      offset:       100,
      callback:     function(box) {
        console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
      }
    }
  );
  wow.init();
</script>
<!-- Initialize material-scrolltop (minimal) -->
<script>
  $('body').materialScrollTop();
</script>
</body>
</html>