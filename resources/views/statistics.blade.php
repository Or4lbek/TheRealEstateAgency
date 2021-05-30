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
            <title>Next Statistics</title>
            <link rel="icon" type="image/ico" href="http://www.piedpiper.com/app/themes/joystick-v27/images/pp-fav.ico">


        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <style>

body{
    overflow-x: hidden;
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
#image-season[show-season="season6_developers"] #season6_developers {
    display: block;
}


            body {
                background-color:white;
                margin: 0;
                padding: 0;
                color: black;
            }

            .chart {
                padding-top:50px;
                margin:50px;
            
            
            }

            .districtsInfo {
                margin-top:70px;
                display:flex;
                overflow: auto;
                background:black;
            }

            .districtsInfo .img img{
                width:500px;
                height:350px;
                object-fit: cover;
                margin:20px 0 20px 20px ;
                opacity:0.5;
            }

            .districtsInfo .img {
                position: relative;
                text-align: center;
                color: white;
            }
            .districtsInfo .img .centered {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                width:80%;
                color:white;
            }

            .statistics {
                width:80%;
                margin: 50px auto;
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
                      
                            <li id="menu-item-1260" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1260"><a href="{{ route('main') }}">Home</a></li>
                            <li id="menu-item-1545" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-186 current_page_item  menu-item-1545"><a href="{{ route('statistics') }}">Statistics</a></li>
                            <li id="menu-item-1262" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1262"><a href="{{ route('apply') }}">Apply</a></li>
                        </ul>
                    </div>        
                </div>
            </div>
        </header>




    <div class="districtsInfo " style="overflow-y: hidden;">
        @foreach($districtsInfo as $i)
            <div class="img title slide-up-animation fade-in-element">
                <img src="{{$i->img}}" alt="">
                <div class="centered title"><h1>{{$i->name}}</h1><h4 style="width:100%; font-weight: 90; font-size:10px;">{{$i->description}}</h4></div>
            </div>
            
        @endforeach
        </div>

            <div class="statistics slide-up-animation fade-in-element" id="chart_div" style="height: 500px;"></div>


            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            <script type="text/javascript">
            google.charts.load('current', {'packages':['corechart']});
            google.charts.setOnLoadCallback(drawVisualization);

            function drawVisualization() {
                // Some raw data (not necessarily accurate)
                var data = google.visualization.arrayToDataTable([
                
                <?php echo $chartData ?>
                ]);

                var options = {
                title : 'Статистика по ценам',
                vAxis: {title: 'Тенге'},
                hAxis: {title: 'Категории'},
                seriesType: 'bars',
                //   series: {5: {type: 'line'}}
                };

                var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
                chart.draw(data, options);
            }
            </script>






            <!-- table -->

            <div id="table_div" class = "statistics slide-up-animation fade-in-element"></div>

            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            <script type="text/javascript">
            google.charts.load('current', {'packages':['table']});
            google.charts.setOnLoadCallback(drawTable);

            function drawTable() {
                var data = new google.visualization.DataTable();
                data.addColumn('string', 'Районы');
                data.addColumn('number', 'max_price');
                data.addColumn('number', 'min_price');
                data.addRows([
                    <?php echo $tableData ?>
                ]);

                var table = new google.visualization.Table(document.getElementById('table_div'));

                table.draw(data, {showRowNumber: true, width: '100%', height: '100%'});
            }
            </script>




            <!-- m2 bar chart -->

            <div id="barchart_values" class = "statistics slide-up-animation fade-in-element"></div>

<script type="text/javascript">
    google.charts.load("current", {packages:["corechart"]});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["District", "Price", { role: "style" } ],
        <?php echo $barData ?>
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "Price for m^2",
        width: 600,
        height: 400,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.BarChart(document.getElementById("barchart_values"));
      chart.draw(view, options);
  }
  </script>
  </body>
</html>
