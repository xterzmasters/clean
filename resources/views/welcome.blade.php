@extends('layouts.app')

@section('content')

          
            <div class="w3-half margin1">
        <br class="no-display10">
        <br class="no-display9">
        <br class="no-display10">
        <br class="no-display30">
        <br class="no-display20">
        <br class="no-display40">
        <br class="no-display9">
        
    
      
    

            <p class="w3-center"><img src="https://www.xterz.com/files/logo_ezv.jpg" alt="logo_1" style="width: 12vw;" class="big_on_small_screen"></p>
            <p class="w3-center">LOGISTIC DELIVERY EXPERTS</p>
      <p class="w3-center">Anything you want delivered in minutes</p>
      <p class="w3-center"><a href="{{ route('login') }}"style="text-decoration: none;" class="w3-border w3-button w3-large w3-margin-top w3-opacity w3-hover-opacity-off"
     style="border-radius:50px;">
    <b style="color: #00b4f0;">DELIVERY</b></a></p>
            
          </div>

  <div class="w3-half">
            <img src="https://www.xterz.com/files/banner_ezv.jpg" class="w3-image" alt="Photo of Me">
            </div>

<!-- About Section -->




    <div class="w3-row w3-hide-small" style="margin-left: 40px;" id="about">
      <div class="w3-col m6">
        <br class="no-display9">
        <br class="no-display10 no-display20 no-display40">
        <br class="no-display20">
        <br class="no-display40">
        
      <span class="w3-jumbo no-display-img w3-hide-small"><img src="https://www.xterz.com/files/banner2.1_ezv.jpg" alt="logo_1" style="width:80%" class="no-display-img"></span><br>
    <span class="w3-large w3-justify w3-text-black w3-hide-small" style="display: flex;font-size: 2em;">XTERZ makes it incredibly easy for you to discover and 
    get what you want.</span>
    <span class="w3-large w3-text-black w3-hide-small" style="display: flex;font-size: 2vw;">Delivered to you – quickly, reliably and affordably.</span>
    <span class="w3-jumbo w3-hide-small" style="margin-left: 80px;"><img src="https://www.xterz.com/files/android_google_play_logo.png" alt="logo_1" style="width:12vw">&nbsp;<img src="https://www.xterz.com/files/appstore_logo.png" alt="logo_1" style="width:12vw"></span><br>
    
      </div>
      <div class="w3-col m6">
      <img src="https://www.xterz.com/files/banner2.2_ezv.jpg" alt="Lights" style="width:100%;max-height:850px;" class="no-display-img">
      <img src="https://www.xterz.com/files/about_2.png" alt="Lights" style="width:100%;max-height:850px;" class="w3-hide-large">

      </div>
    </div>






  <!-- First Photo Grid-->
  <div class="w3-row-padding w3-padding-64" id="work" style="margin-top: 30px;">
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="https://www.xterz.com/files/banner3_ezv.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Dispatch Rider</b></p>
        <p class="w3-justify">Be part of the team who delivers packages or food especially by traveling on a motorcycle or a bicycle. Be your own boss
          with flexible hours in the time and place in this Downtown.
        </p>
        <button onclick="document.location='base/rider'" class="btnz third center_div">Be a deliver</button>
      </div>
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="https://www.xterz.com/files/banner4_ezv.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Market Partner - Earnings Hike</b></p>
        <p class="w3-justify">Be a partner and increase your profits with more clients and the possibility of bringing all the customers to your door. 
          </p>
          <button class="btnz third center_div">Partner with us</button>
      </div>
    </div>
    <div class="w3-third w3-container">
      <img src="https://www.xterz.com/files/banner5_ezv.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Free User Sign Up</b></p>
        <p class="w3-justify">Look no more for ways to get the products at your doorstep. Enter and register
           for free in a few seconds you can access all the exclusive content for you.</p>
          <button onclick="document.location='{{ route('login') }}'" class="btnz third center_div">Free user sign out</button>
          </div>
    </div>
  </div>



<!-- Contact Section -->
<div class="container w3-hide-small w3-hide-medium" id="contact">
  <div class="row">
    <div class="column_two left_70">
  <form action="#" method="post">
    <div class="field">
      <input type="text" id="name" name="name" placeholder="Who are you?"/>
      <label for="name">Name</label>
    </div>
    <div class="field">
      <input type="text" id="email" name="email" placeholder="name@domain.tld" />
      <label for="email">E-Mail</label>
    </div>
    <div class="field">
      <textarea id="msg" rows="4" name="msg" placeholder="You message..."></textarea>
      <label for="msg">Message</label>
    </div>
    <input class="btnz third center_div" type="submit" value="Send" />
  </form>


    </div>
    <div class="column_two right_30">
    <img src="https://www.xterz.com/files/banner6_ezv.jpg" alt="Lights" style="width:100%;">
    </div>
  </div>
</div>



@endsection

@section('styles')
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <!-- Bootstrap 3.3.4 -->
    <link href="https://www.xterz.com/assets/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- FontAwesome 4.3.0 -->
    <link href="https://www.xterz.com/assets/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons 2.0.0 -->
    <link href="https://www.xterz.com/assets/bower_components/Ionicons/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link rel="stylesheet" href="https://www.xterz.com/files/form_z.css">
    <link rel="stylesheet" href="https://www.xterz.com/files/footer_animation.css">
    <link rel="stylesheet" href="https://www.xterz.com/files/master.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <style>
        .error{
            color:red;
            font-weight: normal;
        }
      
    </style>
    <style>
  label {
    font-weight: normal !important;
}

.btnz {
  box-sizing: border-box;
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
  background-color: transparent;
  border: 2px solid #e74c3c;
  border-radius: 0.6em;
  color: #e74c3c;
  cursor: pointer;
  display: flex;
  align-self: center;
  font-size: 1rem;
  font-weight: 400;
  line-height: 1;
  margin: 20px;
  padding: 1.2em 2.8em;
  text-decoration: none;
  text-align: center;
  text-transform: uppercase;
  font-family: "Montserrat", sans-serif;
  font-weight: 700;
}
.btnz:hover, .btnz:focus {
  color: #000;
  outline: 0;
}

.third {
  border-color: #3498db;
  color: #fff;
  box-shadow: 0 0 40px 40px #3498db inset, 0 0 0 0 #3498db;
  transition: all 150ms ease-in-out;
}
.third:hover {
  box-shadow: 0 0 10px 0 #3498db inset, 0 0 10px 4px #3498db;
}

.center_div{
  margin-left: auto;
  margin-right: auto;
}

/* Create two equal columns that floats next to each other */
.column_two {
  float: left;
  width: 50%;
  padding: 10px;
}
.column_one {
  float: left;
  width: 100%;
  padding: 10px;
}
.left_70 {
  width: 70%;
}

.right_30 {
  width: 30%;
}

.left_two {
  width: 20%;
}

.right_two {
  width: 80%;
}
@media only screen and (max-width: 500px) {
  .column_two {
    float: none!important;
    width: 100%!important;
  }
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

.no_float
{
  float: left;
}

@media only screen and (max-width: 400px) {
  .no_float {
    float: none!important;
  }
}

.margin_input_right
{
 margin-right: 10px;
}

@media only screen and (max-width: 400px) {
  .margin_input_right {
    margin-right: 0px!important;
    width: 50%!important;
  }
}

.margin_input_left
{
 margin-left: -10px;
}

@media only screen and (max-width: 400px) {
  .margin_input_left {
    margin-left: 0px!important;
  }
}
.custom_textarea {
  border: 0 none;
  overflow: hidden; /*overflow is set to auto at max height using JS */
  outline: none;
  min-height:100px;
  max-height:314px;
  height: auto;
  resize: none;
  width:100%;
}

.margin_top_small{
  margin-top: 0px;
}
@media only screen and (max-width: 400px) {
  .margin_top_small {
    margin-top: 100px!important;
  }
}

.gradientz {
  background: linear-gradient(262deg, #3461c1, #00b3ed, #639fee);
    background-size: 600% 600%;

    -webkit-animation: AnimationName 9s ease infinite;
    -moz-animation: AnimationName 9s ease infinite;
    animation: AnimationName 9s ease infinite;
}

@-webkit-keyframes AnimationName {
    0%{background-position:94% 0%}
    50%{background-position:7% 100%}
    100%{background-position:94% 0%}
}
@-moz-keyframes AnimationName {
    0%{background-position:94% 0%}
    50%{background-position:7% 100%}
    100%{background-position:94% 0%}
}
@keyframes AnimationName {
    0%{background-position:94% 0%}
    50%{background-position:7% 100%}
    100%{background-position:94% 0%}
}


table {
  border: 1px solid #ccc;
  border-collapse: collapse;
  margin: 0;
  padding: 0;
  width: 100%;
  table-layout: fixed;
}

table caption {
  font-size: 1.5em;
  margin: .5em 0 .75em;
}

table tr {
  background-color: #f8f8f8;
  border: 1px solid #ddd;
  padding: .35em;
}

table th,
table td {
  padding: .625em;
  text-align: center;
}

table th {
  font-size: .85em;
  letter-spacing: .1em;
  text-transform: uppercase;
}

@media screen and (max-width: 600px) {
  table {
    border: 0;
  }

  table caption {
    font-size: 1.3em;
  }
  
  table thead {
    border: none;
    clip: rect(0 0 0 0);
    height: 1px;
    margin: -1px;
    overflow: hidden;
    padding: 0;
    position: absolute;
    width: 1px;
  }
  
  table tr {
    border-bottom: 3px solid #ddd;
    display: block;
    margin-bottom: .625em;
  }
  
  table td {
    border-bottom: 1px solid #ddd;
    display: block;
    font-size: .8em;
    text-align: right;
  }
  
  table td::before {
    /*
    * aria-label has no advantage, it won't be read inside a table
    content: attr(aria-label);
    */
    content: attr(data-label);
    float: left;
    font-weight: bold;
    text-transform: uppercase;
  }
  
  table td:last-child {
    border-bottom: 0;
  }
}
</style>
    
    <script type="text/javascript">
        var baseURL = "https://www.xterz.com/";
    </script>
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>



@endsection