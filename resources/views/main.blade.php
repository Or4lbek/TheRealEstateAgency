<!DOCTYPE html>
<!-- load data local infile 'desktop/Datasets/alatauskij.csv' replace into table posts fields terminated by ',' lines terminated by '\n'; -->
<html>
    <head>
            <script src="https://connect.facebook.net/signals/config/1671054329866241?v=2.9.39&amp;r=stable" async=""></script><script async="" src="https://connect.facebook.net/en_US/fbevents.js"></script><script type="text/javascript" async="" src="//www.googleadservices.com/pagead/conversion_async.js"></script><script type="text/javascript" async="" src="//www.googleadservices.com/pagead/conversion_async.js"></script><script type="text/javascript" async="" src="//img04.en25.com/i/elqCfg.min.js"></script><script async="" src="https://www.googletagmanager.com/gtm.js?id=GTM-56KX9QL"></script><script src="https://privacy.hbo.com/sites/piedpiper.js" type="text/javascript"></script>
            <script src="https://privacy.hbo.com/wm-user-consent.min.js" type="text/javascript"></script>
            
            
            <script>
                function openPdf(_this) {
                    var href = _this.getAttribute('dta-href');
                    var tag = _this.getAttribute('dta-tag');
                    document.querySelector('[show-season]').setAttribute('show-season', tag);
                    // var style = 'position: absolute; top: 0; left: 0; width: 100%';
                    // var win  = window.open('', '_blank');
                    // win.document.write('<img src="' + href + '" style="' + style + '" />');
                    /*window.scrollTo({
                        top: document.querySelector('#image-season').offsetTop,
                        left: 0,
                        behavior: 'smooth'
                    });*/
                    scrollToY(document.querySelector('#image-season').offsetTop, 500)
                }
                // first add raf shim
                // http://www.paulirish.com/2011/requestanimationframe-for-smart-animating/
                window.requestAnimFrame = (function(){
                  return  window.requestAnimationFrame       ||
                          window.webkitRequestAnimationFrame ||
                          window.mozRequestAnimationFrame    ||
                          function( callback ){
                            window.setTimeout(callback, 1000 / 60);
                          };
                })();

                // main function
                function scrollToY(scrollTargetY, speed, easing) {
                    // scrollTargetY: the target scrollY property of the window
                    // speed: time in pixels per second
                    // easing: easing equation to use

                    var scrollY = window.scrollY,
                        scrollTargetY = scrollTargetY || 0,
                        speed = speed || 2000,
                        easing = easing || 'easeOutSine',
                        currentTime = 0;

                    // min time .1, max time .8 seconds
                    var time = Math.max(.1, Math.min(Math.abs(scrollY - scrollTargetY) / speed, .8));

                    // easing equations from https://github.com/danro/easing-js/blob/master/easing.js
                    var PI_D2 = Math.PI / 2,
                        easingEquations = {
                            easeOutSine: function (pos) {
                                return Math.sin(pos * (Math.PI / 2));
                            },
                            easeInOutSine: function (pos) {
                                return (-0.5 * (Math.cos(Math.PI * pos) - 1));
                            },
                            easeInOutQuint: function (pos) {
                                if ((pos /= 0.5) < 1) {
                                    return 0.5 * Math.pow(pos, 5);
                                }
                                return 0.5 * (Math.pow((pos - 2), 5) + 2);
                            }
                        };

                    // add animation loop
                    function tick() {
                        currentTime += 1 / 60;

                        var p = currentTime / time;
                        var t = easingEquations[easing](p);

                        if (p < 1) {
                            requestAnimFrame(tick);

                            window.scrollTo(0, scrollY + ((scrollTargetY - scrollY) * t));
                        } else {
                            console.log('scroll done');
                            window.scrollTo(0, scrollTargetY);
                        }
                    }

                    // call it once to get started
                    tick();
                }
            </script>


        <!-- <link rel="stylesheet" id="main-css" href="http://www.piedpiper.com/app/themes/joystick-v27/style.css?ver=4.5.2" type="text/css" media="all"> -->
        <link rel="stylesheet" id="fonts-css" href="http://www.piedpiper.com/app/themes/joystick-v27/css/fonts.css?ver=4.5.2" type="text/css" media="all">
        <link rel="stylesheet" id="header-css" href="http://www.piedpiper.com/app/themes/joystick-v27/css/header.css?ver=4.5.2" type="text/css" media="all">
        <!-- <link rel="stylesheet" id="footer-css" href="http://www.piedpiper.com/app/themes/joystick-v27/css/footer.css?ver=4.5.2" type="text/css" media="all"> -->
        <link rel="stylesheet" id="home-css" href="http://www.piedpiper.com/app/themes/joystick-v27/css/home.css?ver=4.5.2" type="text/css" media="all">
        <!-- <link rel="stylesheet" id="post-css" href="http://www.piedpiper.com/app/themes/joystick-v27/css/post.css?ver=4.5.2" type="text/css" media="all"> -->

        

        
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Next Home</title>
            <link rel="icon" type="image/ico" href="https://b2b989d215c701ad63d7-288404e13f895703cf2798bf6ae95228.ssl.cf1.rackcdn.com/208554393776-350.png">


        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <style>

body{
    overflow-x: hidden;
}

video {
    position: fixed;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    object-fit: fill;
}


/* ANIMATIONS */

@keyframes fade-in {
    from {
        opacity: 0;
        transform: translateY(100px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.fade-in-element {
    animation: fade-in 1.4s;
    animation-fill-mode: forwards;
}

.fade-in-element-first-delay {
    animation: fade-in 1.4s 0.5s;
    animation-fill-mode: forwards;
}

.fade-in-element-second-delay {
    animation: fade-in 1.4s 0.75s;
    animation-fill-mode: forwards;
}

.slide-up-animation-first-delay,
.slide-up-animation-second-delay{
    opacity:0;
}

.hidden {
    opacity: 0;
}

.slide-up-animation {
    display: block;
}

@keyframes slide-in-left {
    from {
        opacity:0;
        transform: translateX(-100vh);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

@keyframes slide-in-right {
    0% {
        opacity:0;
        transform: translateX(100vh);

    }
    100% {
        opacity: 1;
        transform: translateX(0);
    }
}

.slide-in-left{
    animation: slide-in-left 1s ease-in 0.5;
}

.slide-in-left-first-delay{
    animation: slide-in-left 1s ease-in 1s;
}

.slide-in-left-second-delay{
    animation: slide-in-left 1s ease-in 1s;
}

.slide-in-right{
    animation: slide-in-right 1s ease-in 0.5s;
}

.slide-in-right-first-delay{
    animation: slide-in-right 1s ease-in 1s;
}

.slide-in-right-second-delay{
    animation: slide-in-right 1s ease-in 1s;
}

#season-list {
    font-size: 18px;
    color: #D4D4D4;
    font-size: 26px;
    font-family: gilroy;
    font-weight: normal;
    margin-top: 4em;
    line-height: 1.4;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}

#season-list a {
    font-size: inherit;
    font-weight: inherit !important;
    font-family: inherit;
    text-decoration: none;
}
#season-list a:hover {
    text-decoration: underline;
}

#internet-of-people {
    display: flex;
    align-items: center;
    height: 100vh;
    min-height: 700px;
    float: unset;
}
#internet-of-people .container {
    margin: auto !important;
    position: relative !important;
    height: auto !important;
}
#internet-of-people h3 {
    margin-top: 80px;
}
#delivering-the-internet,
#join-hundreds-of-developers,
#the-web-you-never,
#why-we-need {
    display: none;
}

#season-list a {
    cursor: pointer;
}

#image-season {
    width: 100%;
    float: none;
    height: auto;
    background-color: white;
    text-align: center;
    min-height: auto;
}
#image-season > div {
    display: none;
}
#image-season[show-season="season1"] #season1,
#image-season[show-season="season2"] #season2,
#image-season[show-season="season3"] #season3,
#image-season[show-season="season4"] #season4,
#image-season[show-season="season5"] #season5,
#image-season[show-season="season6"] #season6,
#image-season[show-season="season7"] #season7,
#image-season[show-season="season8"] #season8,
#image-season[show-season="season9"] #season9,
#image-season[show-season="season6_developers"] #season6_developers {
    display: block;
}


.post-container {
    border-bottom: 1px solid darkgray;
    position: relative;
    max-width: 768px;
    width: 100%;
    padding: 60px 0 50px 0;
    margin: 0 auto;
    color: black;
    display: flex;
}


.post-container img {
                height: 200px;
                width: 200px;
                object-fit: cover;
                border-radius: 10%;
            }

            .post-container .post-info {
                margin-right: 20px;
                margin-left: 20px;
            }

            .main-header {
                position: fixed;
                background: #0E0E0E;
                top: 0;
                width: 100vw;
                height: 80px;
                z-index: 21;
                font-family: gilroy;
                font-weight: normal;
                transition: height 1s ease-in-out;
            }

            header {
                display: block;
            }
            body {
                background: #000;
                margin: 0;
                padding: 0;
                color: #fff;
            }


#myBtn {
  /* display: none; Hidden by default */
  position: fixed; /* Fixed/sticky position */
  bottom: 20px; /* Place the button at the bottom of the page */
  left: 30px; /* Place the button 30px from the right */
  z-index: 99; /* Make sure it does not overlap */
  outline: none; /* Remove outline */
  background-color: black; /* Set a background color */
  color: #278c56; /* Text color */
  cursor: pointer; /* Add a mouse pointer on hover */
  padding: 15px; /* Some padding */
  border-radius: 5px; /* Rounded corners */
  border-style: solid;
  border-color: #278c56;
  font-size: 18px; /* Increase font size */
}

#myBtn:hover {
    color: black;
  background-color: #278c56; /* Add a dark-grey background on hover */
}


        </style>
    </head>
    <body>
        <header class="main-header">
            <div class="navigation-container">
                <div class="main-logo">
                    <a href="">
                        <img class="logo_image" src="https://243515-749738-1-raikfcquaxqncofqfm.stackpathdns.com/wp-content/uploads/2018/04/NextSteps_Logo_White.png" alt="Main Logo">
                        <img class="logo_mobile" src="https://images.squarespace-cdn.com/content/v1/51a04613e4b0007c06d7c81a/1548706792483-C0CAFK2JJV571OMBXGR6/ke17ZwdGBToddI8pDm48kK3svdqmw2prsPjqjcUJoBVZw-zPPgdn4jUwVcJE1ZvWEtT5uBSRWt4vQZAgTJucoTqqXjS3CfNDSuuf31e0tVGgxn0DEa35dK4t9GT6eHoWmuqrr3mtHJt8vSA1j2ufPD-3CTWZQ124CTRPXn-dnvM/NEXT+STEPS.png" alt="Main Logo">
                    </a>
                </div>
                <div class="main-navigation">
                    <div class="menu-siliconvalley-s6-container">
                        <ul id="menu-siliconvalley-s6" class="menu">
                      
                            <li id="menu-item-1260" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-186 current_page_item menu-item-1260"><a href="{{ route('main') }}">Home</a></li>
                            <li id="menu-item-1545" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1545"><a href="{{ route('statistics') }}">Statistics</a></li>
                            <li id="menu-item-1262" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1262"><a href="{{ route('apply') }}">Apply</a></li>
                        </ul>
                    </div>        
                </div>
            </div>
        </header>

        

        <script>
    
        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
        document.body.scrollTop = 0; // For Safari
        document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
        }
        </script>

        <div class="home">
          <section id="internet-of-people">
              <div class="container">
                  <h3 class="title slide-up-animation fade-in-element">
                      The Real Estate<br><span class="bold">Agency</span>
                  </h3>
                  <br>
                  <p class="subtitle slide-up-animation fade-in-element">
                      More than a million sellers and customers from Almaty trust us. </br>The biggest Home Agency in Kazakhstan.
                  <br>
                  <br>  
                </p>
                  <ul id="" class="slide-up-animation fade-in-element" style="font-size:20px;">
                    <button dta-tag="season9" onclick="openPdf(this)" type="button" class="btn btn-outline-light">Весь Алматы</button><br><br>
                    <br>
                    <div style="display:flex; width:80%; margin:auto; border-bottom: 1px solid darkgray; padding-bottom:20px; opacity: 0.7;">
                        <li><a dta-href="http://www.piedpiper.com/app/themes/joystick-v27/images/season1.jpg" dta-tag="season1" onclick="openPdf(this)">Алатауский район</a></li> 
                        <li><a dta-href="http://www.piedpiper.com/app/themes/joystick-v27/images/season2.jpg" dta-tag="season2" onclick="openPdf(this)">Алмалинский район</a></li>
                        <li><a dta-href="http://www.piedpiper.com/app/themes/joystick-v27/images/season3.png" dta-tag="season3" onclick="openPdf(this)">Ауэзовский район</a></li>
                        <li><a dta-href="http://www.piedpiper.com/app/themes/joystick-v27/images/season4.png" dta-tag="season4" onclick="openPdf(this)">Бостандыкский район</a></li>
                    </div> 
                    <div style="display:flex; width:80%; margin:auto; padding-top:20px; opacity: 0.7;">
                    <li><a dta-href="http://www.piedpiper.com/app/themes/joystick-v27/images/season5.png" dta-tag="season5" onclick="openPdf(this)">Медеуский район</a></li>
                        <li><a dta-href="http://www.piedpiper.com/app/themes/joystick-v27/images/season6.jpg" dta-tag="season6" onclick="openPdf(this)">Наурызбайский район</a></li> 
                        <li><a dta-href="http://www.piedpiper.com/app/themes/joystick-v27/images/season7.jpg" dta-tag="season7" onclick="openPdf(this)">Турксибский район</a></li>
                        <li><a dta-href="http://www.piedpiper.com/app/themes/joystick-v27/images/season8.png" dta-tag="season8" onclick="openPdf(this)">Жетысуский район</a></li>
                    </div>
                  </ul>
      
                  
              </div>
          </section>


          <button onclick="topFunction()" id="myBtn" title="Go to top">⇑</button>

          <section id="image-season" show-season="">
              <div id="season1">

              @foreach (($alatauskij) as $key=>$i) 
                <div class="post-container"><img src="{{$i->img}}" alt="" >
                    <div class="post-info">
                        <h2 style = "font-size:20px;">{{$i->title}}</h2>
                        <h6 style="color: gray; font-size:12px;">{{$i->location}}</h6>
                        <h5 style="font-weight: lighter; font-size:medium;">{{$i->preview}}</h5>
                        <br>
                        <div style="display:flex">
                            <h3 style="margin: auto; color:rgb(172, 0, 0)">{{number_format($i->price, 0, '', ' ')}} ₸</h3>
                            <a href="{{$i->post_url}}" class="btn btn-dark" style="margin: auto;">Learn more...</a>

                        </div>
                    </div>
                </div>
                @endforeach
                
            </div>
              
              <div id="season2">
                @foreach (($almalinskij) as $key=>$i) 
                    <div class="post-container"><img src="{{$i->img}}" alt="" >
                        <div class="post-info">
                            <h2 style = "font-size:20px;">{{$i->title}}</h2>
                            <h6 style="color: gray; font-size:12px;">{{$i->location}}</h6>
                            <h5 style="font-weight: lighter; font-size:medium;">{{$i->preview}}</h5>
                            <br>
                            <div style="display:flex">
                                <h3 style="margin: auto; color:rgb(172, 0, 0)">{{number_format($i->price, 0, '', ' ')}} ₸</h3>
                                <a href="{{$i->post_url}}" class="btn btn-dark" style="margin: auto;">Learn more...</a>

                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                
              <div id="season3">
                @foreach (($aujezovskij) as $key=>$i) 
                    <div class="post-container"><img src="{{$i->img}}" alt="" >
                        <div class="post-info">
                            <h2 style = "font-size:20px;">{{$i->title}}</h2>
                            <h6 style="color: gray; font-size:12px;">{{$i->location}}</h6>
                            <h5 style="font-weight: lighter; font-size:medium;">{{$i->preview}}</h5>
                            <br>
                            <div style="display:flex">
                                <h3 style="margin: auto; color:rgb(172, 0, 0)">{{number_format($i->price, 0, '', ' ')}} ₸</h3>
                                <a href="{{$i->post_url}}" class="btn btn-dark" style="margin: auto;">Learn more...</a>

                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

              <div id="season4">
                @foreach (($bostandykskij) as $key=>$i) 
                    <div class="post-container"><img src="{{$i->img}}" alt="" >
                        <div class="post-info">
                            <h2 style = "font-size:20px;">{{$i->title}}</h2>
                            <h6 style="color: gray; font-size:12px;">{{$i->location}}</h6>
                            <h5 style="font-weight: lighter; font-size:medium;">{{$i->preview}}</h5>
                            <br>
                            <div style="display:flex">
                                <h3 style="margin: auto; color:rgb(172, 0, 0)">{{number_format($i->price, 0, '', ' ')}} ₸</h3>
                                <a href="{{$i->post_url}}" class="btn btn-dark" style="margin: auto;">Learn more...</a>

                            </div>
                        </div>
                    </div>
                    @endforeach
              </div>
              
              <div id="season5">
                @foreach (($medeuskij) as $key=>$i) 
                    <div class="post-container"><img src="{{$i->img}}" alt="" >
                        <div class="post-info">
                            <h2 style = "font-size:20px;">{{$i->title}}</h2>
                            <h6 style="color: gray; font-size:12px;">{{$i->location}}</h6>
                            <h5 style="font-weight: lighter; font-size:medium;">{{$i->preview}}</h5>
                            <br>
                            <div style="display:flex">
                                <h3 style="margin: auto; color:rgb(172, 0, 0)">{{number_format($i->price, 0, '', ' ')}} ₸</h3>
                                <a href="{{$i->post_url}}" class="btn btn-dark" style="margin: auto;">Learn more...</a>

                            </div>
                        </div>
                    </div>
                    @endforeach                                 
              </div>

              <div id="season6">
                @foreach (($nauryzbajskiy) as $key=>$i) 
                    <div class="post-container"><img src="{{$i->img}}" alt="" >
                        <div class="post-info">
                            <h2 style = "font-size:20px;">{{$i->title}}</h2>
                            <h6 style="color: gray; font-size:12px;">{{$i->location}}</h6>
                            <h5 style="font-weight: lighter; font-size:medium;">{{$i->preview}}</h5>
                            <br>
                            <div style="display:flex">
                                <h3 style="margin: auto; color:rgb(172, 0, 0)">{{number_format($i->price, 0, '', ' ')}} ₸</h3>
                                <a href="{{$i->post_url}}" class="btn btn-dark" style="margin: auto;">Learn more...</a>

                            </div>
                        </div>
                    </div>
                    @endforeach
              </div>


                <div id="season7">
                    @foreach (($turksibskij) as $key=>$i) 
                    <div class="post-container"><img src="{{$i->img}}" alt="" >
                        <div class="post-info">
                            <h2 style = "font-size:20px;">{{$i->title}}</h2>
                            <h6 style="color: gray; font-size:12px;">{{$i->location}}</h6>
                            <h5 style="font-weight: lighter; font-size:medium;">{{$i->preview}}</h5>
                            <br>
                            <div style="display:flex">
                                <h3 style="margin: auto; color:rgb(172, 0, 0)">{{number_format($i->price, 0, '', ' ')}} ₸</h3>
                                <a href="{{$i->post_url}}" class="btn btn-dark" style="margin: auto;">Learn more...</a>

                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div id="season8">
                    @foreach (($zhetysuskij) as $key=>$i) 
                    <div class="post-container"><img src="{{$i->img}}" alt="" >
                        <div class="post-info">
                            <h2 style = "font-size:20px;">{{$i->title}}</h2>
                            <h6 style="color: gray; font-size:12px;">{{$i->location}}</h6>
                            <h5 style="font-weight: lighter; font-size:medium;">{{$i->preview}}</h5>
                            <br>
                            <div style="display:flex">
                                <h3 style="margin: auto; color:rgb(172, 0, 0)">{{number_format($i->price, 0, '', ' ')}} ₸</h3>
                                <a href="{{$i->post_url}}" class="btn btn-dark" style="margin: auto;">Learn more...</a>

                            </div>
                        </div>
                    </div>
                    @endforeach     
                </div>
                <div id="season9">
                    @foreach (($almaty) as $key=>$i) 
                    <div class="post-container"><img src="{{$i->img}}" alt="" >
                        <div class="post-info">
                            <h2 style = "font-size:20px;">{{$i->title}}</h2>
                            <h6 style="color: gray; font-size:12px;">{{$i->location}}</h6>
                            <h5 style="font-weight: lighter; font-size:medium;">{{$i->preview}}</h5>
                            <br>
                            <div style="display:flex">
                                <h3 style="margin: auto; color:rgb(172, 0, 0)">{{number_format($i->price, 0, '', ' ')}} ₸</h3>
                                <a href="{{$i->post_url}}" class="btn btn-dark" style="margin: auto;">Learn more...</a>

                            </div>
                        </div>
                    </div>
                    @endforeach     
                </div>
          </section>
          
          <video class="video-bg" src="https://firebasestorage.googleapis.com/v0/b/bi-lofo.appspot.com/o/db%2Fbanner.mp4?alt=media&token=5db6747d-f930-468b-affc-96bda9af6105" autoplay="" muted="" loop="" style="opacity: 0.5;"></video>
      </div>

      
    </body>
</html>