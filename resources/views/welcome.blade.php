<!DOCTYPE html>
<html lang="en">
<head>
    @yield('title')
    <!-- <title>Home</title> -->
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('frontoffice/Global/site/css/reset.css')}}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('frontoffice/Global/site/css/style.css')}}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('frontoffice/Global/site/css/grid_12.css')}}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('frontoffice/Global/site/css/slider.css')}}">
    <link href='http://fonts.googleapis.com/css?family=Condiment' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>

    <script src="{{asset('frontoffice/Global/site/js/jquery-1.7.min.js')}}"></script>
    <script src="{{asset('frontoffice/Global/site/js/jquery.easing.1.3.js')}}"></script>
    <script src="{{asset('frontoffice/Global/site/js/tms-0.4.x.js')}}"></script>

    <script>
        $(document).ready(function(){                   
            $('.slider')._TMS({
                show:0,
                pauseOnHover:true,
                prevBu:false,
                nextBu:false,
                playBu:false,
                duration:1000,
                preset:'fade',
                pagination:true,
                pagNums:false,
                slideshow:7000,
                numStatus:true,
                banners:'fromRight',
                waitBannerAnimation:false,
                progressBar:false
            })      
        });
    </script>
</head>
<body>
  <div class="main">
  <!--==============================header=================================-->
    <header>
        <h1><a href="{{url('welcome')}}"><img src="{{asset('frontoffice/images/logo.png')}}" alt=""></a></h1>
        <div class="form-search">
            <form id="form-search" method="post">
              <input type="text" value="Type here..." onBlur="if(this.value=='') this.value='Type here...'" onFocus="if(this.value =='Type here...' ) this.value=''"  />
              <a href="#" onClick="document.getElementById('form-search').submit()" class="search_button"></a>
            </form>
        </div>   
        <div class="clear"></div>    
        <nav class="box-shadow">
            <div>
                <ul class="menu">
                    <li class="home-page current"><a href="{{url('welcome')}}"><span></span></a></li>
                    <li><a href="{{url('/upload')}}">Afficher un JSON </a></li>

                </ul>
                <div class="social-icons">
                    <span>Follow us:</span>
                    <a href="#" class="icon-3"></a>
                    <a href="#" class="icon-2"></a>
                    <a href="#" class="icon-1"></a>
                </div>
                <div class="clear"></div>
            </div>
        </nav>
    </header>   
    <section id="content">
        <div id="slide" class="box-shadow">     
            <div class="slider">
                <ul class="items">
                    <li><img src="{{asset('frontoffice/Global/site/images/slider-1.jpg')}}" alt="" /><div class="banner">The Next Level of Your Success&nbsp;</div></li>
                    <li><img src="{{asset('frontoffice/Global/site/images/slider-2.jpg')}}" alt="" /><div class="banner">We Offer Different Ways of Problem Solving&nbsp;</div></li>
                    <li><img src="{{asset('frontoffice/Global/site/images/slider-3.jpg')}}" alt="" /><div class="banner">We Craft Practical Solutions&nbsp;</div></li>
                </ul>
            </div>  
        </div>
                <div class="clear"></div>
            </div>
        </div>  
    </section> 
  </div>   
   @yield('content')
<!--==============================footer=================================-->
    <footer>
        <p>© 2012 Global</p>
        <p>Website template by <a href="http://store.templatemonster.com?aff=netsib1" target="_blank" rel="nofollow">www.templatemonster.com</a></p>
    </footer>       
</body>
</html>