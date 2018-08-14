@extends('layouts.public_app')

@section('content')
<!-- banner -->
<div id="home" class="w3ls-banner">
        <!-- banner-text -->
        <div class="slider">
            <div class="callbacks_container">
                <ul class="rslides callbacks callbacks1" id="slider4">
                    <li>
                        <div class="layouts-banner-top">

                            <div class="container">
                                <div data-aos="fade-left" class="agileits-banner-info">
                                    <div class="slide1-style">
                                    <h3>Drink Svasth,</h3>
                                    <h3>Live Svasth.</h3>
                                    </div>
                                    <img src="{{url('/')}}/resources/frontend_assets/images/4-hrs.png" width="450" height="338">
                        <!--        <div class="agileits_layouts_more menu__item">
                <a href="#" class="menu__link" data-toggle="modal" data-target="#myModal">Learn More</a>
            </div>  -->
                                </div>
                            </div>

                        </div>
                    </li>
                <!--    <li>
                        <div class="layouts-banner-top layouts-banner-top1">

                            <div class="container">
                                <div data-aos="fade-left" class="agileits-banner-info">
                                    <img src="images/4-hrs2.png" width="250" height="250">
                                    <h3>Does Your<b style="color: #8abe01"> Milk</b></h3>
                                    <div class="slide2-p">
                                    <p>taste differently over time?</p>
                                    <p>have a thin consistency?</p>
                                    <p>leaves residue when heated?</p>
                                    <p>has a longer shelf life?</p>
                                </div>
                                    <div class="agileits_layouts_more menu__item">
                <a href="#" class="menu__link" data-toggle="modal" data-target="#myModal">Learn More</a>
            </div>
                                </div>
                            </div>

                        </div>
                    </li>
                    <li>
                        <div class="layouts-banner-top layouts-banner-top2">

                            <div class="container">
                                <div data-aos="fade-left" class="agileits-banner-info">
                                    <img src="images/4-hrs.png" width="250" height="250">
                                    <h3>If the answer is <b style="color: #8abe01">yes,</b></h3>
                                    <h3>switch to <b style="color: #8abe01">Svasth</b> </h3>
                                    <p>As the name suggests, Svasth milk is additive-free </p>
                                    <p>& a powerhouse of calcium.</p>
                                <div class="agileits_layouts_more menu__item">
                                            <a href="#" class="menu__link" data-toggle="modal" data-target="#myModal">Learn More</a>
                                        </div>
                                </div>

                            </div>

                        </div>
                    </li> -->
                </ul>
            </div>
            <div class="clearfix"> </div>

            <!--banner Slider starts Here-->
        </div>
        <div class="thim-click-to-bottom">
            <div class="rotate">
                <a href="#about" class="scroll">
                    <i class="fa fa-long-arrow-down" aria-hidden="true"></i>
                </a>
            </div>
        </div>
    </div>
<!-- //banner -->
</div>
<!-- end header -->
<div class="container col-md-12 section-space">
    <div class="tab-wid">
      <div class="col-md-1"></div>
      <div class="col-md-10 txt-sty">
        <ul class="tabs">
          <li class="tab-link current col-md-4" data-tab="tab-1">Connect Us</li>
          <li class="tab-link col-md-4" data-tab="tab-2">Service Areas</li>
          <li class="tab-link col-md-4" data-tab="tab-3">Payment</li>
          <!-- <li class="tab-link col-md-3 col-xs-12" data-tab="tab-4">Purity Meter</li> -->
        </ul>



        <div id="tab-1" class="tab-content current ser-location1 call">
          <p>Feel free to email us to provide some feedback on our initiative, give us suggestions, or just to say hello!</p>
          <ul class="connect">
            <li class="lio">
              <a href="tel:9632316404" style="color: #597526;"><i class="fa fa-phone ph"><span> : 9632316404</span></i></a>
            </li>

            <li class="mai">
              <a href="mailto:svasthlife@gmail.com" style="color: #597526;"><i class="fa fa-envelope em" ><span> : svasthlife@gmail.com</span></i></a>
            </li>
          </ul>

        </div>
        <div id="tab-2" class="tab-content ser-location1 mb-scrn ser">
          <ul class="service">
            <li class="col-md-4 col-md-4 col-md-4"><img src="images/loc-icon.png" width="15" height="15">Bannerghatta</li>
            <li class="col-md-4 col-md-4 col-md-4"><img src="images/loc-icon.png" width="15" height="15">Bilekahalli</li>
            <li class="col-md-4 col-md-4 col-md-4"><img src="images/loc-icon.png" width="15" height="15">Begur</li>
            <li class="col-md-4 col-md-4 col-md-4"><img src="images/loc-icon.png" width="15" height="15">Indira nagar</li>
            <li class="col-md-4 col-md-4 col-md-4"><img src="images/loc-icon.png" width="15" height="15">Domlur</li>
            <li class="col-md-4 col-md-4 col-md-4"><img src="images/loc-icon.png" width="15" height="15">JP Nagar</li>
            <li class="col-md-4 col-md-4 col-md-4"><img src="images/loc-icon.png" width="15" height="15">Doddakammanahalli</li>
            <li class="col-md-4 col-md-4 col-md-4"><img src="images/loc-icon.png" width="15" height="15">Jaya Nagar</li>
            <li class="col-md-4 col-md-4 col-md-4"><img src="images/loc-icon.png" width="15" height="15">BTM Layout</li>
            <li class="col-md-4 col-md-4 col-md-4"><img src="images/loc-icon.png" width="15" height="15">HSR Layout</li>
            <li class="col-md-4 col-md-4 col-md-4"><img src="images/loc-icon.png" width="15" height="15">Bommanahalli</li>
            <li class="col-md-4 col-md-4 col-md-4"><img src="images/loc-icon.png" width="15" height="15">Harlur Road</li>
            <li class="col-md-4 col-md-4 col-md-4"><img src="images/loc-icon.png" width="15" height="15">Kudlu Gate</li>
            <li class="col-md-4 col-md-4 col-md-4"><img src="images/loc-icon.png" width="15" height="15">Koramangala</li>
            <li class="col-md-4 col-md-4 col-md-4"><img src="images/loc-icon.png" width="15" height="15">Kodichikkanahalli</li>
            <li class="col-md-4 col-md-4 col-md-4"><img src="images/loc-icon.png" width="15" height="15">Somasundarapalya</li>
            <li class="col-md-4 col-md-4 col-md-4"><img src="images/loc-icon.png" width="15" height="15">Tavarekere</li>
            <li class="col-md-4 col-md-4 col-md-4"><img src="images/loc-icon.png" width="15" height="15">Hulimavu</li>
            <li class="col-md-4 col-md-4 col-md-4"><img src="images/loc-icon.png" width="15" height="15">Konanakunte Cross</li>
            <li class="col-md-4 col-md-4 col-md-4"><img src="images/loc-icon.png" width="15" height="15">Devarachikkanahalli</li>
            <li class="col-md-4 col-md-4 col-md-4"><img src="images/loc-icon.png" width="15" height="15">Arekere</li>
            <li class="col-md-4 col-md-4 col-md-4"><img src="images/loc-icon.png" width="15" height="15">Banashankari</li>
            <li class="col-md-4 col-md-4 col-md-4"><img src="images/loc-icon.png" width="15" height="15">Ashoka Pillar</li>
            <li class="col-md-4 col-md-4 col-md-4"><img src="images/loc-icon.png" width="15" height="15">Electronic City</li>
            <li class="col-md-4 col-md-4 col-md-4"><img src="images/loc-icon.png" width="15" height="15">Singasandra</li>
            <li class="col-md-4 col-md-4 col-md-4"><img src="images/loc-icon.png" width="15" height="15">Bellandur </li>
            <li class="col-md-4 col-md-4 col-md-4"><img src="images/loc-icon.png" width="15" height="15">Ejipura</li>
            <li class="col-md-4 col-md-4 col-md-4"><img src="images/loc-icon.png" width="15" height="15">Sarjapur</li>
            <li class="col-md-4 col-md-4 col-md-4"><img src="images/loc-icon.png" width="15" height="15">Marathahalli</li>
            <li class="col-md-4 col-md-4 col-md-4"><img src="images/loc-icon.png" width="15" height="15">Murugesh Pallya</li>
            <li class="col-md-4 col-md-4 col-md-4"><img src="images/loc-icon.png" width="15" height="15">Islampur</li>
            <li class="col-md-4 col-md-4 col-md-4"><img src="images/loc-icon.png" width="15" height="15">Basavanagara</li>
            <li class="col-md-4 col-md-4 col-md-4"><img src="images/loc-icon.png" width="15" height="15">Kodihalli</li>

          </ul>
        </div>
        <div id="tab-3" class="tab-content mb-scrn2 mb-scrn3 pay ">
          <ul class="payment">
            <li class=" col-md-4 col-sm-24 col-xs-12 liv"><img src="images/cod.jpg" class="col-xs-12"></li>
            <li class="col-md-4 col-sm-24 col-xs-12 liv"><img src="images/online-payment.jpg" class="col-xs-12"></li>
            <li class="col-md-4 col-sm-24 col-xs-12 liv-2"><img src="images/paytm.jpg" class="col-xs-12"></li>
          </ul>
        </div>

      </div>
      <div class="col-md-1"></div>
    </div>
  </div>

    <div class="whatsapp">
    <a href="https://api.whatsapp.com/send?phone=+919632316404&amp;text">
      <img src="images/whatsapp1.png" style="width: 48px;margin-left:120px">
    </a>
  </div>


    <!--<div id="tab-4" class="tab-content">
        Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    </div> -->

<div class="col-md-1"></div>
</div>
</div><!-- container -->
<!-- tabs end -->



<!-- about -->
<div class="about section-space" id="about">
    <div class="container">
        <div class="heading">
            <h2 data-aos="zoom-in" >About Svasth Life</h2>
        </div>
        <p>Our body as such contains 7 Chakras, these chakras synchronize with each other in the human body. In order to attain balance amongst these Chakras, it is important that we reach out and absorb the right balance in the form of Aahar or Food. As we get deeper into the subject we understand that it is in fact important to imbibe "Sattvic" in our system. A fantastic understanding like this inspired us to launch the Sattvic Diet, which gives us a reason to live the purest form of human nature. An idea that was seeded which gave rise to Svasth and the idea of <b>"Svasth Life".</b></p>
<p>At Svasth Life, we follow a Sattvic diet where our daily routine consists of foods, whole grains, dairy products which are non-adulterated and are in the purest form. The byproduct of the thought, which led to delivering <b>A2 Milk in Bangalore</b> as well as Curd, Ghee and other form of dairy products.</p>
<p>As of now, we home-deliver all dairy products daily to different suburbs and provide<b> online milk delivery services in Bangalore</b>, the products are directly procured from our farmers.</p>
    </div>
</div>
<!-- //about -->
<!-- benifits -->
<div class="gallery  gallery-space section-space-mar" id="benefits">
<div class="container">
        <div class="heading">
            <h2 data-aos="zoom-in" >Why Svasth Life</h2>
        </div>
            <div class="w3-agileits-services-grids">
                <div data-aos="fade-down" class="col-md-7 agile-services-left">
                    <div class="agile-services-left-grid">
                        <div class="services-icon">
                            <div class="col-md-2 services-icon-info">
                                <i class="fa fa-check" aria-hidden="true"></i>
                            </div>
                            <div class="col-md-10 services-icon-text">
                                <p>Do you drink milk? Well, if you do it is extremely important to buy the most nourishing milk your family can consume.</p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="services-icon">
                            <div class="col-md-2 services-icon-info">
                                <i class="fa fa-check" aria-hidden="true"></i>
                            </div>
                            <div class="col-md-10 services-icon-text">
                                <p>But why is this important? Because unfortunately, the milk you consume is adulterated and full of antibiotics, therefore extremely unhealthy for you and your family.</p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="services-icon">
                            <div class="col-md-2 services-icon-info">
                                <i class="fa fa-check" aria-hidden="true"></i>
                            </div>
                            <div class="col-md-10 services-icon-text">
                                <p>The key is to stick to traditional methods of procuring milk, similar to what used to be done in the good old days!</p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="services-icon">
                             <div class="col-md-2 services-icon-info">
                                <i class="fa fa-check" aria-hidden="true"></i>
                            </div>
                            <div class="col-md-10 services-icon-text">
                                <p>Svasth Life strictly follows the ideologies of abiding by natural methods of procuring <b>fresh cow's milk</b>. Thus providing you with milk that has wholesome goodness sealed in a bottle!</p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="col-md-5 w3-agile-services-right">
                    <img src="images/milk-bottle.png">
                    <div class="clearfix"> </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
        <!-- benifits end -->

<!-- services -->
<div class="services services-space" id="procedure">
    <div class="container">
        <h2 class="head-pad">How Svasth Life Works</h2>
        <div class="about-grids">
            <div data-aos="zoom-in" class="col-md-3 aboutgrid1 right-pad">
                <img src="images/profit.png" width="60" height="60">
                <p>To start with, we have taken a few villages under our shelter so that both consumers and farmers can profit. </p>
            </div>
            <div  data-aos="flip-right" class="col-md-3 aboutgrid1 right-pad">
                <img src="images/purity-test.png" width="60" height="60">
                <p>The <b>fresh cows milk</b> is procured from them under hygienic conditions, tested for impurities and then distributed to various suburbs in Bangalore.</p>
            </div>
            <div data-aos="zoom-in" class="col-md-3 aboutgrid1">
                <img src="images/cow.png" width="60" height="60">
                <p>Further, these cows are insured by the government so that the purest of fresh Milk comes into the supply. </p>
            </div>
            <div class="clearfix"></div>
            <div  data-aos="flip-right" class="col-md-3 aboutgrid1 right-pad">
                <img src="images/farmer.png" width="60" height="60">
                <p>The reason our tagline suggests Farm to Family is because every consumer is directly related to enhance the progression of every farmer involved in this process.  </p>
            </div>
            <div data-aos="slide-up" class="col-md-3 aboutgrid1 right-pad">
                <img src="images/cow-welfare.png" width="60" height="60">
                <p>The <b>fresh cows milk</b> is priced at Rs.74/- a litre and Rs.38/- for half a litre. This <b>desi cows milk</b> is physically <b>delivered around Bangalore</b> as well as available for online delivery  The proceeds of which goes into the welfare of the cows.
 </p>
            </div>
            <div  data-aos="flip-right" class="col-md-3 aboutgrid1">
                <img src="images/safe.png" width="60" height="60">
                <p>It really breaks down to having your cow on the farm that produces milk under the safe and secure protection of the farmers.

 </p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- //services -->

<!-- products-->
<div class="services services-space" id="products">
    <div class="container">
        <h2 class="head-pad">Svasth Life Products</h2>
        <div class="about-grids">
            <div data-aos="zoom-in" class="col-md-3 aboutgrid1 right-pad cowpad">
                                <div class="rup">&#x20B9;38/(1/2)lt</div>
                <img src="images/milk-bottle.png" class="cowImage">
                <p class="cowMilk"><b>Fresh Cow Milk</b> monthly pack(half-liter per day)</p>
                                <p class="buyNow"><b>Buy Now</b></p>
            </div>
                        <div  data-aos="flip-right" class="col-md-3 aboutgrid1 right-pad cowpad">
                                <div class="rup">&#x20B9;74/lt</div>
                <img src="images/milk-bottle.png" class="cowImage">
                <p class="cowMilk"><b>Fresh Cow Milk</b> monthly pack(one-liter per day)</p>
                                <p class="buyNow"><b>Buy Now</b></p>
                        </div>
                        <div data-aos="zoom-in" class="col-md-3 aboutgrid1 cowpad">
                                <div class="rup">5&#37; off</div>
                <img src="images/milk-bottle.png" class="cowImage">
                <p class="cowMilk"><b>Fresh Cow Milk</b> 3 month pack(half-liter per day)</p>
                                <p class="buyNow"><b>Buy Now</b></p>
                        </div>
            <div class="clearfix"></div>
            <div  data-aos="flip-right" class="col-md-3 right-pad aboutgrid1 cowpad">
                                    <div class="rup">5&#37; off</div>
                <img src="images/milk-bottle.png" class="cowImage">
                <p class="cowMilk"><b>Fresh Cow Milk</b> 3 month pack(one-liter per day)</p>
                                <p class="buyNow"><b>Buy Now</b></p>
            </div>
            <div data-aos="slide-up" class="col-md-3 right-pad aboutgrid1 cowpad">
                <div class="rup">&#x20B9;38/(1/2)lt</div>
                <img src="images/milk-bottle.png" class="cowImage">
                <p class="cowMilk"><b>Fresh Cow Milk</b> one day trial(half-liter one day trial)</p>
                                <p class="buyNow"><b>Buy Now</b></p>
            </div>
            <div  data-aos="flip-right" class="col-md-3 aboutgrid1 cowpad">
                <div class="rup">&#x20B9;74/lt</div>
                <img src="images/milk-bottle.png" class="cowImage">
                <p class="cowMilk"><b>Fresh Cow Milk</b> one day trial(one-liter one day trail)</p>
                                <p class="buyNow"><b>Buy Now</b></p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- //products-->

<!-- team -->
    <!--    <div class="team" id="team">
            <div class="container">
                <div class="heading">
                    <h3 data-aos="zoom-in" >Team</h3>
                </div>
                <div class="agile_team_grids">
                    <div data-aos="fade-up" class="col-md-3 agile_team_grid">
                        <div class="ih-item circle effect1">
                            <div class="spinner"></div>
                            <div class="img"><img src="images/team1.jpg" alt=" " class="img-responsive" /></div>
                            <div class="info">
                                <div class="info-back">
                                  <h4>Restaurant Manager</h4>
                                  <p>loremdolor</p>
                                </div>
                            </div>
                        </div>
                        <h4>James Roy</h4>
                        <p>Fusce eu semper lacus, sodales id elit a, feugiat porttitor nulla lacinia.</p>
                        <div class="social-icons team-icons">
                            <ul>
                                <li><a href="#" class="fa fa-facebook"> </a></li>
                                <li><a href="#" class="fa fa-twitter"> </a></li>
                                <li><a href="#" class="fa fa-google"> </a></li>
                            </ul>
                        </div>
                    </div>
                    <div data-aos="slide-up" class="col-md-3 agile_team_grid">
                        <div class="ih-item circle effect1">
                            <div class="spinner"></div>
                            <div class="img"><img src="images/team2.jpg" alt=" " class="img-responsive" /></div>
                            <div class="info">
                                <div class="info-back">
                                  <h4>Restaurant Representative</h4>
                                  <p>loremdolor</p>
                                </div>
                            </div>
                        </div>
                        <h4>John Deol</h4>
                        <p>Fusce eu semper lacus, sodales id elit a, feugiat porttitor nulla lacinia.</p>
                        <div class="social-icons team-icons">
                            <ul>
                                <li><a href="#" class="fa fa-facebook"> </a></li>
                                <li><a href="#" class="fa fa-twitter"> </a></li>
                                <li><a href="#" class="fa fa-google"> </a></li>
                            </ul>
                        </div>
                    </div>
                    <div data-aos="slide-up" class="col-md-3 agile_team_grid t3">
                        <div class="ih-item circle effect1">
                            <div class="spinner"></div>
                            <div class="img"><img src="images/team3.jpg" alt=" " class="img-responsive" /></div>
                            <div class="info">
                                <div class="info-back">
                                  <h4>Restaurant  co-ordinator</h4>
                                  <p>loremdolor</p>
                                </div>
                            </div>
                        </div>
                        <h4>Edward Cren</h4>
                        <p>Fusce eu semper lacus, sodales id elit a, feugiat porttitor nulla lacinia.</p>
                        <div class="social-icons team-icons">
                            <ul>
                                <li><a href="#" class="fa fa-facebook"> </a></li>
                                <li><a href="#" class="fa fa-twitter"> </a></li>
                                <li><a href="#" class="fa fa-google"> </a></li>
                            </ul>
                        </div>
                    </div>
                    <div data-aos="fade-up" class="col-md-3 agile_team_grid t4">
                        <div class="ih-item circle effect1">
                            <div class="spinner"></div>
                            <div class="img"><img src="images/team4.jpg" alt=" " class="img-responsive" /></div>
                            <div class="info">
                                <div class="info-back">
                                  <h4>Restaurant staff</h4>
                                  <p>loremdolor</p>
                                </div>
                            </div>
                        </div>
                        <h4>Lisaen Eddy</h4>
                        <p>Fusce eu semper lacus, sodales id elit a, feugiat porttitor nulla lacinia.</p>
                        <div class="social-icons team-icons">
                            <ul>
                                <li><a href="#" class="fa fa-facebook"> </a></li>
                                <li><a href="#" class="fa fa-twitter"> </a></li>
                                <li><a href="#" class="fa fa-google"> </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div> -->
<!--//team-->

<!-- gallery -->
<!--    <div class="gallery" id="food">
        <div class="heading">
            <h3 data-aos="zoom-in" >Our Product</h3>
        </div>
            <div class="gallery-grids">
                <div data-aos="flip-right" class="col-md-3 gallery-grid">
                    <div class="grid">
                        <figure class="effect-roxy">
                            <a class="example-image-link" href="images/food1.jpg" data-lightbox="example-set" data-title="">
                                <img src="images/food1.jpg" alt="" />
                                <figcaption>
                                    <h3>Beef <span>Wellington</span></h3>
                                    <p> Aenean fermentum nisl ac imperdiet commodo</p>
                                </figcaption>
                            </a>
                        </figure>
                    </div>
                </div>
                <div data-aos="flip-right" class="col-md-3 gallery-grid">
                    <div class="grid">
                        <figure class="effect-roxy">
                            <a class="example-image-link" href="images/food2.jpg" data-lightbox="example-set" data-title="">
                                <img src="images/food2.jpg" alt="" />
                                <figcaption>
                                    <h3>Reuben <span>Sandwich</span></h3>
                                    <p>Aenean fermentum nisl ac imperdiet commodo</p>
                                </figcaption>
                            </a>
                        </figure>
                    </div>
                </div>
                <div data-aos="flip-right" class="col-md-3 gallery-grid">
                    <div class="grid">
                        <figure class="effect-roxy">
                            <a class="example-image-link" href="images/food3.jpg" data-lightbox="example-set" data-title="">
                                <img src="images/food3.jpg" alt="" />
                                <figcaption>
                                    <h3>Cobb <span>Salad</span></h3>
                                    <p>Aenean fermentum nisl ac imperdiet commodo</p>
                                </figcaption>
                            </a>
                        </figure>
                    </div>
                </div>
                <div data-aos="flip-right" class="col-md-3 gallery-grid">
                    <div class="grid">
                        <figure class="effect-roxy">
                            <a class="example-image-link" href="images/food4.jpg" data-lightbox="example-set" data-title="">
                                <img src="images/food4.jpg" alt="" />
                                <figcaption>
                                    <h3>Eggs <span>Benedict</span></h3>
                                    <p>Aenean fermentum nisl ac imperdiet commodo</p>
                                </figcaption>
                            </a>
                        </figure>
                    </div>
                </div>
                <div data-aos="flip-right" class="col-md-3 gallery-grid">
                    <div class="grid">
                        <figure class="effect-roxy">
                            <a class="example-image-link" href="images/food5.jpg" data-lightbox="example-set" data-title="">
                                <img src="images/food5.jpg" alt="" />
                                <figcaption>
                                    <h3>Fettuccine <span>Alfredo</span></h3>
                                        <p>Aenean fermentum nisl ac imperdiet commodo</p>
                                </figcaption>
                            </a>
                        </figure>
                    </div>
                </div>
                <div data-aos="flip-right" class="col-md-3 gallery-grid">
                    <div class="grid">
                        <figure class="effect-roxy">
                            <a class="example-image-link" href="images/food6.jpg" data-lightbox="example-set" data-title="">
                                <img src="images/food6.jpg" alt="" />
                                <figcaption>
                                    <h3>Salisbury <span>Steak</span></h3>
                                    <p>Aenean fermentum nisl ac imperdiet commodo</p>
                                </figcaption>
                            </a>
                        </figure>
                    </div>
                </div>
                <div data-aos="flip-right" class="col-md-3 gallery-grid">
                    <div class="grid">
                        <figure class="effect-roxy">
                            <a class="example-image-link" href="images/food7.jpg" data-lightbox="example-set" data-title="">
                                <img src="images/food7.jpg" alt="" />
                                <figcaption>
                                    <h3>Chicken <span>Marengo</span></h3>
                                    <p>Aenean fermentum nisl ac imperdiet commodo</p>
                                </figcaption>
                            </a>
                        </figure>
                    </div>
                </div>
                <div data-aos="flip-right" class="col-md-3 gallery-grid">
                    <div class="grid">
                        <figure class="effect-roxy">
                            <a class="example-image-link" href="images/food8.jpg" data-lightbox="example-set" data-title="">
                                <img src="images/food8.jpg" alt="" />
                                <figcaption>
                                    <h3>BoliedEgg <span>Mint</span></h3>
                                    <p>Aenean fermentum nisl ac imperdiet commodo</p>
                                </figcaption>
                            </a>
                        </figure>
                    </div>
                </div>
                <div data-aos="flip-right" class="col-md-3 gallery-grid">
                    <div class="grid">
                        <figure class="effect-roxy">
                            <a class="example-image-link" href="images/food9.jpg" data-lightbox="example-set" data-title="">
                                <img src="images/food9.jpg" alt="" />
                                <figcaption>
                                    <h3>Nachos <span>Food</span></h3>
                                    <p>Aenean fermentum nisl ac imperdiet commodo</p>
                                </figcaption>
                            </a>
                        </figure>
                    </div>
                </div>
                <div data-aos="flip-right" class="col-md-3 gallery-grid">
                    <div class="grid">
                        <figure class="effect-roxy">
                            <a class="example-image-link" href="images/food10.jpg" data-lightbox="example-set" data-title="">
                                <img src="images/food10.jpg" alt="" />
                                <figcaption>
                                    <h3>Baked <span>Snapper</span></h3>
                                    <p>Aenean fermentum nisl ac imperdiet commodo</p>
                                </figcaption>
                            </a>
                        </figure>
                    </div>
                </div>
                <div data-aos="flip-right" class="col-md-3 gallery-grid">
                    <div class="grid">
                        <figure class="effect-roxy">
                            <a class="example-image-link" href="images/food11.jpg" data-lightbox="example-set" data-title="">
                                <img src="images/food11.jpg" alt="" />
                                <figcaption>
                                    <h3>Caesar <span>Salad</span></h3>
                                    <p>Aenean fermentum nisl ac imperdiet commodo</p>
                                </figcaption>
                            </a>
                        </figure>
                    </div>
                </div>
                <div data-aos="flip-right" class="col-md-3 gallery-grid">
                    <div class="grid">
                        <figure class="effect-roxy">
                            <a class="example-image-link" href="images/food12.jpg" data-lightbox="example-set" data-title="">
                                <img src="images/food12.jpg" alt="" />
                                <figcaption>
                                    <h3>Fruit brown <span>Betty</span></h3>
                                    <p>Aenean fermentum nisl ac imperdiet commodo</p>
                                </figcaption>
                            </a>
                        </figure>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
    </div> -->
<!-- //gallery -->

<!-- testimonial -->
<div class="testimonial" id="testimonials">
    <div class="container">
        <div class="heading">
            <h3 data-aos="zoom-in" >Svasth Life Testimonial</h3>
        </div>
            <div class="agileits-layouts-info">
                <div class="testimonial-grid">
                    <div class="slider">
                            <div class="callbacks_container">
                                <ul class="rslides" id="slider3">
                                    <li>
                                        <div data-aos="flip-down" class="col-md-6 testimonial-top">
                                            <i class="fa fa-quote-right" aria-hidden="true"></i>
                                            <p>Being a mother it's very important for me to give pure nutrition to my kid. We all know Milk is a pure form of nutrition. I tried to find out pure cow milk providers nearby me and that is how I found Svasth Milk. First I ordered to check the purity and then I became a regular customer because of milk quality and good service.</p>
                                            <h5>Pooja Kamath <span>- customer</span></h5>
                                        </div>
                                        <div data-aos="flip-down" class="col-md-6 testimonial-top">
                                            <i class="fa fa-quote-right" aria-hidden="true"></i>
                                            <p>I do drink regularly but I was exhausted of packet milk because of the smell. When I was looking for pure cow milk at that time I came across Svasth Milk. I called them for a sample. I am extremely happy with the quality and since then I am drinking Svasth Milk.</p>
                                            <h5>Bidwan Barpanda<span>- customer</span></h5>
                                        </div>
                                    <div class="clearfix"></div>
                                    </li>
                                    <li>
                                        <div data-aos="flip-down" class="col-md-6 testimonial-top">
                                            <i class="fa fa-quote-right" aria-hidden="true"></i>
                                            <p>Being a mother it's very important for me to give pure nutrition to my kid. We all know Milk is a pure form of nutrition. I tried to find out pure cow milk providers nearby me and that is how I found Svasth Milk. First I ordered to check the purity and then I became a regular customer because of milk quality and good service.</p>
                                            <h5>Pooja Kamath <span>- customer</span></h5>
                                        </div>
                                        <div data-aos="flip-down" class="col-md-6 testimonial-top">
                                            <i class="fa fa-quote-right" aria-hidden="true"></i>
                                            <p>I do drink regularly but I was exhausted of packet milk because of the smell. When I was looking for pure cow milk at that time I came across Svasth Milk. I called them for a sample. I am extremely happy with the quality and since then I am drinking Svasth Milk.</p>
                                            <h5>Bidwan Barpanda<span>- customer</span></h5>
                                        </div>
                                    <div class="clearfix"></div>
                                    </li>
                                </ul>
                            </div>
                            <!--banner Slider starts Here-->
                    </div>
                </div>
            </div>
        </div>
</div>
<!-- //testimonial -->

<!-- contact -->
    <div class="contact" id="contact">
        <div class="container">
            <div class="heading">
                <h2 data-aos="zoom-in" >Get In Touch with Svasth Life</h2>
            </div>
        </div>
            <div class="layouts-grids">
                <div data-aos="flip-left" class="col-md-6 contact-left">
                    <h3 data-aos="zoom-in" >Contact Svasth</h3>
                    <p>Feel free to email us to provide some feedback on our initiative, give us suggestions, or to just to say hello!</p>
                    <div class="contact-info col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="contact-info-right pd-bt">
                            <h5><i class="fa fa-map-marker" aria-hidden="true"></i>Corporate Address</h5>
                            <p>#29, 5th Cross Road, 35th Main Road,<br>
                                <span>KAS Officers Colony, Stage 2, BTM 2nd Stage,</span>
                                <span>Bengaluru, Karnataka 560068</span>
                            </p>
                        </div><br>
                        <div class="contact-info-right">
                            <h5><i class="fa fa-phone" aria-hidden="true"></i>Mobile</h5>
                            <ul>
                                <li>+91 9632316404</li>
                            </ul>
                        </div><br>

                        <div class="contact-info-right ">
                            <h5><i class="fa fa-envelope" aria-hidden="true"></i>E-Mail</h5>
                            <ul>
                                <li><a href="mailto:example@mail.com">svasthlife@gmail.com</a></li>
                            </ul>
                        </div>
                        <div class="clearfix"> </div>

                    </div>

                </div>
                <div data-aos="flip-right" class="col-md-6 contact-form">
                    <form action="http://svasthlife.com/insert1.php" method="post" id="callbackForm" enctype="multipart/form-data">
                    <input type="text" id="form_username" name="name" placeholder="Name" required=""><span id="username_error" style="color:red"></span></input>
                    <input type="email" id="form_email" class="email" name="email" placeholder="Email" required=""><span id="email_error" style="color:red"></span></input>
                    <div class="clearfix"> </div>
                    <input type="text" class="phone" id="form_phone" name="phone" placeholder="Phone Number" required=""><span id="phone_error" style="color:red"></span></input>
                    <textarea placeholder="Message" id="form_message" name="subject" required=""></textarea>
                    <span id="message_error" style="color:red"></span>
                        <input type="submit" value="Submit"> <br>
                        <p><strong></strong></p>
                    </form>
                </div>
                <div class="clearfix"> </div>
            </div>
    </div>
<!-- //contact -->

<!-- map -->
<!-- <div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15555.592850145686!2d77.61819!3d12.9142632!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xeb76c4f0f99beb87!2sKrackerz!5e0!3m2!1sen!2sin!4v1511164595022" frameborder="0" style="border:0" allowfullscreen></iframe>
</div> -->
<!-- //map -->

<!-- footer -->
<div class="about section-space" id="footer">
    <div class="container">
        <div class="heading">
            <h2 data-aos="zoom-in" >Live Svasth, Stay Healthy!</h2>
        </div>
        <p>Located in the beautiful suburb of Bangalore, at the KAS officers colony, BTM 2nd Stage, we are a group, whose sole purpose is to bring a healthy and a happy life. With our fast and safe home delivery of dairy products within the city, we were able to draw up an end to the difficulty in getting pure, fresh cow milk. We, <b>Svasth Life</b>, weaves an impact on the ordinary people and follows the traditional methods in procuring fresh cow milk. Now, isn’t that exciting and rare to be found of? Stay with <b>Svasth Life</b>, get introduced to a healthier life with us.</p>
<br/>
                <div class="heading">
            <h2 data-aos="zoom-in" >Svasth Life- That's how we roll</h2>
        </div>
        <p>Health matters and staying healthy matters even more. Milk, being the primary source of proteins and nutrients plays a vital role in maintaining good health and reviving a good spirit within. We, <b>Svasth Life</b> here clear the way for <b>A2 milk</b> market in the suburbs of Bangalore and delivers <b>Fresh cow milk</b> within 4 hours of production. The market is marred with the adulterated milk and milk products. It’s time for you to differentiate between the qualities of available milk products and to choose the best. We are here to supply you with the nutrient enriched Desi Cow milk or <b>A2 milk</b> which is an essential diet in the kid’s growth pattern as well as the functional health patterns.  If you want to give it a try, just click or call by and we will deliver you the best to stay healthy. Our <b>online milk delivery in Bangalore</b> facilitates the pure milk procured from the dairy farms directly to be delivered to the homes with zero delivery charges. With a mindset of returning to the traditional ways of procuring milk, we are here to lead you towards a healthier, safer life.</p>
<br>

                <div class="heading">
<h2 data-aos="zoom-in" >Build a Svasth Life, with us. Stay Happy, stay healthy!</h2>
</div>
<br/>
    </div>
</div>
<!-- //footer -->
@endsection
