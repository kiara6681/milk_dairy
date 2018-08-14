<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<title>Svasth Life - Online Fresh & Pure Desi Cows Milk Delivery in Bangalore</title>
<meta name="description" content="Svasth Life provides Pure Desi Cows Milk in Bangalore with Zero delivery charges. Svasth Life known for Pure Desi Cows Milk with customer-centric service. Know more ">
<meta name="keywords" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<link rel="stylesheet" href="{{ asset('resources/frontend_assets/css/lightbox.css') }}">

<!-- //custom-theme files-->
<link href="{{ asset('resources/frontend_assets/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
<link href="{{ asset('resources/frontend_assets/css/aos.css') }}" rel="stylesheet" type="text/css" media="all" /><!-- //animation effects-css-->
<link href="{{ asset('resources/frontend_assets/css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
<!-- //custom-theme files-->

<!-- font-awesome-icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- //font-awesome-icons -->

<!-- googlefonts -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
<link href="http://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext" rel="stylesheet">
<!-- //googlefonts -->
<style>

@media screen and (device-aspect-ratio: 40/71) {
.newscript{
margin-top:142px;
}
.whatsapp{
 top: 260px!important;
}
.msgbtn{
top:315px!important;
}
}

@media screen and (min-width: 360px) and (max-width: 768px){
.newscript{
margin-top:88px;
}
.msgbtn{
top:260px!important;
}
.whatsapp{
top:200px!important;
}

}
@media screen and (min-width: 768px){
.newscript{
margin-top:37px!important;
}
}

.service {
    margin: -11px;
    margin-left: 5px;
    text-align: justify;
}
.payment {
    margin: -20px;
    margin-left: -100px;
    text-align: justify;
}
@media screen and (min-width: 768px){
.call {
    height: 165px!important;
}
.ser {
    height: 440px!important;
}
.connect {
    margin-left: 223px;
    margin-top: 19px;
}
.lio {
    margin-left: -70px;
    width: 250px;
font-size:17px;
color: #597526;
}
.slide1-style{
margin-top:-170px;
}
.mai{
font-size: 17px;
    color: #597526;
}

}
@media screen and (min-width:411px) and (max-width: 731px){
.ser {
    height: 1078px !important;
    padding-left: 34px;
}
}

@media screen and (min-width: 375px) and (max-width: 667px){
.ser {
    height: 1233px!important;
}
}

@media screen and (min-width: 360px) and (max-width: 768px){
.lio{
margin-left: 70px;
    margin-top: 10px;
}
.mai{
margin-left:45px;
}
.service {
    margin: 26px !important;
    text-align: justify;
    margin-left: 10px;
    padding-left: 19px;
}
.ser{
height:1300px;
}
.mb-scrn2 ul li img {
    width: 54%!important;
    margin-left: 138px!important;
    margin-top: 9px;
}
}
@media screen and (device-aspect-ratio: 40/71) {
.lio{
margin-left:55px;
margin-top:5px
}
.mai{
margin-left:30px;
}
.mb-scrn {
    height: 1180px;
    text-align: justify;
    padding-left: 38px;
}
.payment{
width:240px;
margin:0px!important;
}
}

.accounticon:hover .popupnew {
    visibility: visible;
    opacity: 1;
}
.cowpad{
        padding: 2%;
    width: 33.3%;
position:relative;
}
.rup {
    color: #657e37;
    border: 1px solid #657e37;
    //width: 20%;
    border-radius: 7px;
    position: absolute;
    top: 2%;
    left: 2%;
    font-size: 82%;
    font-weight: bold;
    padding:0.4% 1.4%;
}
.rup:hover{
background: #657e37;
color: whitesmoke !important;
}
.cowImage{
width: 10vw;
    margin: 0;
margin-bottom: 0px ! important;
}
.buyNow{
color: #657e37 !important;
    font-size: 0.9em;
    -webkit-appearance: none;
    /* background: #657e37; */
    transition: 0.5s all;
    border: 2px solid #657e37;
    -webkit-transition: 0.5s all;
    transition: 0.5s all;
    margin: 0% auto 0 ! important;
    width: 40%;
    padding: 2%;
}
.buyNow:hover{
background: #657e37;
color: whitesmoke !important;
}
.cowMilk{
    margin: 0% 5% 1%;
}
.fontuser{
   font-size:20px;
    margin-top: -2px;
}
.fontuser1{
   font-size:20px;
    margin-top: -2px;
}
.popupnew{
    width: 20vw;
    position: absolute;
    top: 100%;
    right:-14px;
    background-color: white;
    border-radius: 2px;
text-align:left;
opacity:0;
visibility:hidden;
}
.inside{
 padding: 5%;
}
.register{

}
.desktop-userActions {
    width: 275px;
    left: -137.5px;
    top: 60px;
    position: absolute;
    padding: 25px;
    z-index: 3;
    box-shadow: 0 1px 10px rgba(0,0,0,.08);
    transition: opacity .2s ease-out,visibility .2s ease-out;
    background-color: #fff;
    color: #3e4152;
    border: 1px solid #f5f5f6;
    visibility: hidden;
    opacity: 0;
    margin: -2px 0;
}
.desktop-getUserInLinks {
    border: none;
}
.desktop-getInLinks {
    display: inline-block;
    width: 100%;
    border-bottom: 0px solid #eaeaec;
}
.desktop-linkButton:first-child {
    margin: 10px 5px 0 0;
}
.desktop-linkButton {
    display: inline-block;
    padding: 20px 0;
    width: 45%;
    margin: 10px 10px 0 0;
    border: 1px solid #eaeaec;
    border-radius: 2px;
    text-align: center;
    text-transform: uppercase;
    font-size: 13px;
    color: #526cd0;
    font-weight: 500;
    font-family: Whitney-SemiBold,Whitney;
}
.desktop-userActionsArrow {
    display: block;
    top: -5px;
    position: absolute;
    width: 58px;
    border-bottom: 4px solid #657e37;
        left: 202.5px;
}
a {
    text-decoration: none;
    color: #282c3f;
}
.pad{
padding:4%;
}
.popupnew{
display:none;
}
.accounticon:hover >.popupnew{
display:block;
}
@media (min-width: 992px){
.mb-scrn2 {
    height: 175px;
}
.mb-scrn2 ul li img {
     width: 63%;
    margin-left: 63px;
}

}
@media screen and (max-width: 480px){
.mb-scrn3 {
        height: 525px ;
}
.mb-scrn2 ul li img {
    width: 100%;
    margin-left: 15px!;
}
.cowpad{
width: 100%;
    padding: 3%;
}
.cowImage{
width: 30vw;
}
.cowMilk{
font-size: 3vw;    color: #3c0707;
}
.buyNow{
    width: 40%;
    background: transparent;
margin: 6% auto 0 ! important;
}
.rup {
font-size: 58%;
}
}

@media screen and (min-width: 481px) and (max-width: 768px){

.mb-scrn3 {
       height: 651px ;
}
.tab-content ul li {
    list-style: none;
    float: left;
    margin-bottom: 15px;
    padding-right: 40px;
    border-right: 0px dotted #d36428!important;
}
.cowpad{
    padding: 2%;
}
.cowImage{
width: 15vw;
}
.cowMilk{
font-size: 2vw;    color: #3c0707;
}
.buyNow{   
 font-size: 1em;
    width: 50%;
    background: transparent;
margin: 10% auto 0! important;
}
.rup{
//width: 27%;
font-size: 64%;
}

}
  .msgbtn {
      width: 38px;
      position: fixed;
      z-index: 999999999999;
      right: 22px;
      top: 200px;
      display: none;
    }
    
    .whatsapp {
      width: 225px;
      position: fixed;
      z-index: 999999999999;
      right: -20px;
      top: 140px;
      padding-left: 25px;
    }

.playstore{
  position: fixed;
  z-index: 999999999999;
  margin-top:25px;
  display: none;
}
.playstoreimg{
  width: 170px;
  margin-top: -383px;
}

</style>
</head>
<body>
<!-- //header -->
