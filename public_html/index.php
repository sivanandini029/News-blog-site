<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>News</title>
</head>

<body>
    <!-- *****navigation******** -->
    <div class="navigation">
        <div class="container-fluid text-center  ">
            <img class="logo-desktop" src="np10blue-retina.webp" alt="" width="300" height="90">
            <img class="ads" style="max-width: 728px;" src="rec728.jpg" alt="" width="750" height="90">
        </div>
        <div class="container-fluid text-center navbar-container ">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand nav-bar" href="#" style="visibility: hidden;">N</a>
                <a class="navbar-brand" href="#"><img class="logo-mobile" src="np10blue-retina.webp" alt="" width="0"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">NEWS <span class="sr-only">(current)</span></a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                FASHION
                            </a>
                            <div class="container-fluid ">
                                <div class="dropdown-menu " style="width: 1050px; background-color: transparent; border-color: transparent; ">
                                    <div class="row row-nav">
                                        <div class="card" style="width: 18rem; text-align: right; padding-right: 3%; border-color: transparent; ">
                                            <p class=" cat active-option">All</p>
                                            <p class=" cat new_look">New Look</p>
                                            <p class=" cat ">Street Fashion</p>
                                            <p class=" cat ">Style Hunter</p>
                                            <p class=" cat ">Vogue</p>
                                        </div>
                                        <div class="card all-card" style="width: 18rem; padding-right: 3%; border-color: transparent; ">
                                            <a href=""><img src="23-768x512.jpg" class="card-img-top" alt="..."></a>
                                            <p class="card-text" style="padding-right: 5%;"> Fashion Outfit Ideas From the Biggest Instagram Influencers</p>
                                            <h6> August 7, 2019<h6>
                                        </div>
                                        <div class="card all-card newlook-card" style="width: 18rem; padding-right: 3%; border-color: transparent;">
                                            <a href=""><img src="22-768x513.jpg" class="card-img-top" alt="..."></a>
                                            <p class="card-text" style="padding-right: 5%;">Style Spy: Fashion Model Goes Casual in Faux Furr and Plaid</p>
                                            <h6> August 7, 2019<h6>
                                        </div>
                                        <div class="card all-card" style="width: 18rem; padding-right: 3%; border-color: transparent;">
                                            <a href=""><img src="20-768x512.jpg" class="card-img-top" alt="..."></a>
                                            <p class="card-text" style="padding-right: 5%;">What to Wear on Gala Night? We Asked the Biggest Names!</p>
                                            <h6> August 7, 2019<h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                GADGETS
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">LIFESTYLE</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" <?php
                                                $nav_link = "LOGIN";
                                                if (!(isset($_SESSION['username']))) {
                                                    echo "href='login.html'";
                                                } else {
                                                    $nav_link = "LOGOUT";
                                                    echo "href='logout.php'";
                                                }
                                                ?>><?php echo $nav_link  ?></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                FEATURES
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                    </ul>

                    <form class="form-inline my-2 my-lg-0">

                        <a href="" class="my-2 my-sm-0 dark"><svg class="bi bi-search" width="1.5em" height="1.5em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 011.415 0l3.85 3.85a1 1 0 01-1.414 1.415l-3.85-3.85a1 1 0 010-1.415z" clip-rule="evenodd" />
                                <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 100-11 5.5 5.5 0 000 11zM13 6.5a6.5 6.5 0 11-13 0 6.5 6.5 0 0113 0z" clip-rule="evenodd" />
                            </svg></a>
                    </form>
                </div>
            </nav>
            <div class="row">
                <div class="image_hover_div">
                    <img class="image_hover" style="transition: transform .5s; " src="h104-768x512.jpg" alt="FASHION" width="521" height="450">
                    <div class="image_content">
                        <h3>WordPress News Magazine Charts the Most Chic and Fashionable Women of New York City</h3>
                        <p><b>Armin Vans</b>
                            August 7, 2019</p>

                    </div>
                </div>

                <div>
                    <div class="image_hover_div-2">
                        <img class="image_hover" style="transition: transform .5s; " src="28-768x406.jpg" alt="GADGETS" width="521" height="248">
                        <div class="image_content">
                            <h4>Game Changing Virtual Reality Console Hits the Market</h4>
                        </div>
                    </div>
                    <div class="row" style="padding-left: 14px;">
                        <div class="image_hover_div-3">
                            <img class="image_hover" style="transition: transform .5s; " src="54-1-768x447.jpg" alt="GADGETS" width="260" height="223">
                            <div class="image_content">
                                <h5>Discover the Most Magical Sunset in Santorini</h5>
                            </div>
                        </div>
                        <div class="image_hover_div-3">
                            <img class="image_hover" style="transition: transform .5s; " src="43-2-696x464.jpg" alt="GADGETS" width="260" height="223">
                            <div class="image_content">
                                <h5>Computer Filters Noise to Make You a Better Listener</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>

    <div class="middle">
        <div class="row">
            <!-- ******post******* -->
            <div class="post col-lg-8">
                <div class="featured-post-area">
                    <div class="container">
                        <div class="modern-container">
                            <div class="modern-title">Recent</div>
                        </div>
                        <div class="row">
                            <!-- Single Featured Post -->

                            <div class="col-12 col-md-6 col-lg-6">
                                <div class="single-blog-post featured-post">
                                    <div class="post-thumb">
                                        <a href="#"><img id="bigimg" src="demo.jpg" alt=""></a>
                                    </div>
                                    <div class="post-data">
                                        <a href="#" class="post-catagory">Finance</a>
                                        <a href="#" class="post-title">
                                            <p style="font-weight:bold;">Financial news: A new company is born today at the
                                                stock market</p>
                                        </a>
                                        <div class="post-meta">
                                            <p class="post-author">By <a href="#">Sample Name</a></p>
                                            <p class="post-excerp">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                Nam
                                                eu metus sit amet odio sodales placerat. Sed varius leo ac leo fermentum, eu
                                                cursus nunc maximus. Integer convallis nisi nibh, et ornare neque
                                                ullamcorper
                                                ac. Nam id congue lectus, a venenatis massa. Maecenas justo libero,
                                                vulputate
                                                vel nunc id, blandit feugiat sem. </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-md-6 col-lg-6">
                                <!-- Single Featured Post -->
                                <div class="single-blog-post featured-post-2">
                                    <div class="d-flex bd-highlight">
                                        <div class="post-thumb p-2 bd-highlight">
                                            <a href="#"><img src="demo1.jpg" id="small" alt=""></a>
                                        </div>
                                        <div class="post-data p-2 flex-grow-1 bd-highlight">
                                            <a href="#" class="post-catagory">Finance</a>
                                            <div class="post-meta">
                                                <a href="#" class="post-title">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu metus
                                                        sit
                                                        amet odio sodales </p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-blog-post featured-post-2">
                                    <div class="d-flex bd-highlight">
                                        <div class="post-thumb p-2 bd-highlight">
                                            <a href="#"><img src="demo2.jpg" id="small" alt=""></a>
                                        </div>
                                        <div class="post-data p-2 flex-grow-1 bd-highlight">
                                            <a href="#" class="post-catagory">Finance</a>
                                            <div class="post-meta">
                                                <a href="#" class="post-title">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu metus
                                                        sit
                                                        amet odio sodales </p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-blog-post featured-post-2">
                                    <div class="d-flex bd-highlight">
                                        <div class="post-thumb p-2 bd-highlight">
                                            <a href="#"><img src="demo3.jpg" id="small" alt=""></a>
                                        </div>
                                        <div class="post-data p-2 flex-grow-1 bd-highlight">
                                            <a href="#" class="post-catagory">Finance</a>
                                            <div class="post-meta">
                                                <a href="#" class="post-title">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu metus
                                                        sit
                                                        amet odio sodales </p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-blog-post featured-post-2">
                                    <div class="d-flex bd-highlight">
                                        <div class="post-thumb p-2 bd-highlight">
                                            <a href="#"><img src="demo4.jpg" id="small" alt=""></a>
                                        </div>
                                        <div class="post-data p-2 flex-grow-1 bd-highlight">
                                            <a href="#" class="post-catagory">Finance</a>
                                            <div class="post-meta">
                                                <a href="#" class="post-title">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu metus
                                                        sit
                                                        amet odio sodales </p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <!--             latest post area
 -->
                <div class="modern-container">
                    <div class="modern-title">Latest posts</div>
                </div>
                <div class="latest-post-area">
                    <div class="container">
                        <div class="row justify-content-around">
                            <div class="col-md-5">
                                <div class="single-blog-post featured-post">
                                    <div class="post-thumb">
                                        <a href="#"><img src="demo5.jpg" alt=""></a>
                                    </div>
                                    <div class="post-data">
                                        <a href="#" class="post-catagory">Finance</a>
                                        <div class="post-meta">
                                            <a href="#" class="post-title">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu metus sit
                                                    amet odio sodales </p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="single-blog-post featured-post">
                                    <div class="post-thumb">
                                        <a href="#"><img src="demo1.jpg" alt=""></a>
                                    </div>
                                    <div class="post-data">
                                        <a href="#" class="post-catagory">Finance</a>
                                        <div class="post-meta">
                                            <a href="#" class="post-title">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu metus sit
                                                    amet odio sodales </p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-around">
                            <div class="col-md-5">
                                <div class="single-blog-post featured-post">
                                    <div class="post-thumb">
                                        <a href="#"><img src="demo4.jpg" alt=""></a>
                                    </div>
                                    <div class="post-data">
                                        <a href="#" class="post-catagory">Finance</a>
                                        <div class="post-meta">
                                            <a href="#" class="post-title">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu metus sit
                                                    amet odio sodales </p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="single-blog-post featured-post">
                                    <div class="post-thumb">
                                        <a href="#"><img src="demo2.jpg" alt=""></a>
                                    </div>
                                    <div class="post-data">
                                        <a href="#" class="post-catagory">Finance</a>
                                        <div class="post-meta">
                                            <a href="#" class="post-title">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu metus sit
                                                    amet odio sodales </p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-around">
                            <div class="col-md-5">
                                <div class="single-blog-post featured-post">
                                    <div class="post-thumb">
                                        <a href="#"><img src="demo1.jpg" alt=""></a>
                                    </div>
                                    <div class="post-data">
                                        <a href="#" class="post-catagory">Finance</a>
                                        <div class="post-meta">
                                            <a href="#" class="post-title">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu metus sit
                                                    amet odio sodales </p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="single-blog-post featured-post">
                                    <div class="post-thumb">
                                        <a href="#"><img src="demo3.jpg" alt=""></a>
                                    </div>
                                    <div class="post-data">
                                        <a href="#" class="post-catagory">Finance</a>
                                        <div class="post-meta">
                                            <a href="#" class="post-title">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu metus sit
                                                    amet odio sodales </p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-around">
                            <div class="col-md-5">
                                <div class="single-blog-post featured-post">
                                    <div class="post-thumb">
                                        <a href="#"><img src="demo4.jpg" alt=""></a>
                                    </div>
                                    <div class="post-data">
                                        <a href="#" class="post-catagory">Finance</a>
                                        <div class="post-meta">
                                            <a href="#" class="post-title">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu metus sit
                                                    amet odio sodales </p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="single-blog-post featured-post">
                                    <div class="post-thumb">
                                        <a href="#"><img src="demo5.jpg" alt=""></a>
                                    </div>
                                    <div class="post-data">
                                        <a href="#" class="post-catagory">Finance</a>
                                        <div class="post-meta">
                                            <a href="#" class="post-title">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu metus sit
                                                    amet odio sodales </p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-around">
                            <div class="col-md-5">
                                <div class="single-blog-post featured-post">
                                    <div class="post-thumb">
                                        <a href="#"><img src="demo2.jpg" alt=""></a>
                                    </div>
                                    <div class="post-data">
                                        <a href="#" class="post-catagory">Finance</a>
                                        <div class="post-meta">
                                            <a href="#" class="post-title">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu metus sit
                                                    amet odio sodales </p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="single-blog-post featured-post">
                                    <div class="post-thumb">
                                        <a href="#"><img src="demo4.jpg" alt=""></a>
                                    </div>
                                    <div class="post-data">
                                        <a href="#" class="post-catagory">Finance</a>
                                        <div class="post-meta">
                                            <a href="#" class="post-title">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu metus sit
                                                    amet odio sodales </p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- *****side bar***** -->
            <div class="sidebar col-lg-4 col-md-4 col-sm-4 col-12">
                <div class="widget">
                    <div class="heading-container">
                        <div class="widget-title">STAY CONNECTED</div>
                    </div>


                    <a class="facebook follow" href="#">
                        <div class="left-side">
                            <i class="fab fa-facebook"></i>
                            <span class="subscribers">27k Fans</span>
                        </div>
                        <div class="right-side">
                            <span class="like">LIKE</span>
                        </div>
                    </a>

                    <a class="twitter follow" href="#">
                        <div class="left-side">
                            <i class="fab fa-twitter"></i>
                            <span class="subscribers">98k Followers </span>
                        </div>
                        <div class="right-side">
                            <span class="like">FOLLOW</span>
                        </div>
                    </a>
                    <a class="youtube follow" href="#">
                        <div class="left-side">
                            <i class="fab fa-youtube"></i>
                            <span class="subscribers">36k Subscribers </span>
                        </div>
                        <div class="right-side">
                            <span class="like">SUBSCRIBE</span>
                        </div>
                    </a>

                </div>
                <div class="ad-image">
                    <div class="advertisement">-Advertisement-</div>
                    <a href="#" class="given-image">
                        <img src="https://image.shutterstock.com/image-photo/beautiful-brunette-young-woman-wearing-260nw-144293947.jpg">
                    </a>
                </div>
                <div class="modern">
                    <div class="modern-container">
                        <div class="modern-title">MAKE IT MODERN</div>
                    </div>
                    <div class="image-container">
                        <div class="image-set1">
                            <a class="description" href="#">Make It Modern</a>
                            <img src="https://cdn.pixabay.com/photo/2016/05/17/22/16/baby-1399332__340.jpg">
                        </div>

                        <div class="paragraph">
                            <a href="#" class="explanation">Urban kitchen wuth GRanite Tops, EXposed BUlb Lights and
                                Island</a>
                        </div>
                    </div>

                </div>
                <div class="modern">
                    <div class="modern-container">
                        <div class="modern-title">MAKE IT MODERN</div>
                    </div>
                    <div class="image-container">
                        <div class="image-set1">
                            <a class="description" href="#">Make It Modern</a>
                            <img src="https://cdn.pixabay.com/photo/2017/05/13/12/40/fashion-2309519__340.jpg">
                        </div>

                        <div class="paragraph">
                            <a href="#" class="explanation">Urban kitchen wuth GRanite Tops, EXposed BUlb Lights and
                                Island</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>







    <div class="sidebar_most_popular col-lg-6 col-md-6 col-sm-8 col-12">
        <div class="main_heading">
            <div class="main_title">MOST POPULAR</div>
        </div>
        <a class="main_container">
            <div class="image_container">
                <div class="image1">
                    <img src="https://image.shutterstock.com/image-photo/oldfashioned-car-gaz21-on-street-260nw-1365858368.jpg">
                </div>
            </div>
            <div class="contents">
                <div class="main_contents">Lorem ipsum dolor sit amet consectetur adipisicing elit. </div>
                <div class="time">May 5,2020</div>
            </div>

        </a>
        <a class="main_container">
            <div class="image_container">
                <div class="image1">
                    <img src="https://cdn.pixabay.com/photo/2015/01/01/22/15/woman-586185__340.jpg">
                </div>
            </div>
            <div class="contents">
                <div class="main_contents">Lorem ipsum dolor sit amet consectetur adipisicing elit. </div>
                <div class="time">May 5,2020</div>
            </div>

        </a>
        <a class="main_container">
            <div class="image_container">
                <div class="image1">
                    <img src="https://cdn.pixabay.com/photo/2015/09/25/04/19/photographer-956676__340.jpg">
                </div>
            </div>
            <div class="contents">
                <div class="main_contents">Lorem ipsum dolor sit amet consectetur adipisicing elit. </div>
                <div class="time">May 5,2020</div>
            </div>

        </a>
        <a class="main_container">
            <div class="image_container">
                <div class="image1">
                    <img src="https://cdn.pixabay.com/photo/2017/01/18/17/14/girl-1990347__340.jpg">
                </div>
            </div>
            <div class="contents">
                <div class="main_contents">Lorem ipsum dolor sit amet consectetur adipisicing elit. </div>
                <div class="time">May 5,2020</div>
            </div>

        </a>

    </div>
    <div class="load_more">
        <a href="#" class="load_more_text">
            Load More
            <i class="fa fa-angle-down" aria-hidden="true"></i>
        </a>
    </div>
    </div>
    <!-- ********foter********** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <h3>Editor picks</h3>
                    <div class="contentBx">

                        <ul class="list-unstyled">
                            <li class="media">
                                <a href="#"><img src="https://cdn.pixabay.com/photo/2015/06/08/15/02/breakfast-801827__340.jpg" class="mr-3" alt="..."></a>
                                <div class="media-body">
                                    <!-- <h5 class="mt-0 mb-1">List-based media object</h5> -->
                                    <a href="#">Cras sit amet nibh libero, in gravida nulla.</a><br>
                                    <time class="entry-date" datetime="2019-08-07T07:32:02+00:00">August 7,
                                        2019</time>
                                </div>
                            </li>
                            <li class="media my-4">
                                <a href="#"><img src="https://cdn.pixabay.com/photo/2016/12/11/18/10/apartment-1899964__340.jpg" class="mr-3" alt="..."></a>
                                <div class="media-body">
                                    <!-- <h5 class="mt-0 mb-1">List-based media object</h5> -->
                                    <a href="#">Cras sit amet nibh libero, in gravida nulla.</a><br>
                                    <time class="entry-date" datetime="2019-08-07T07:32:02+00:00">August 7,
                                        2019</time>
                                </div>
                            </li>
                            <li class="media">
                                <a href="#"><img src="https://cdn.pixabay.com/photo/2015/07/02/10/29/swimming-828795__340.jpg" class="mr-3" alt="..."></a>
                                <div class="media-body">
                                    <!-- <h5 class="mt-0 mb-1">List-based media object</h5> -->
                                    <a href="#">Cras sit amet nibh libero, in gravida nulla.</a><br>
                                    <time class="entry-date" datetime="2019-08-07T07:32:02+00:00">August 7,
                                        2019</time>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm">
                    <h3 class="text-center" style="color:#fff;">popular posts</h3>
                    <div class="contentBx">

                        <ul class="list-unstyled">
                            <li class="media">
                                <a href="#"><img src="https://cdn.pixabay.com/photo/2015/06/08/15/02/breakfast-801827__340.jpg" class="mr-3" alt="..."></a>
                                <div class="media-body">
                                    <!-- <h5 class="mt-0 mb-1">List-based media object</h5> -->
                                    <a href="#">Cras sit amet nibh libero, in gravida nulla.</a><br>
                                    <time class="entry-date" datetime="2019-08-07T07:32:02+00:00">August 7,
                                        2019</time>
                                </div>
                            </li>
                            <li class="media my-4">
                                <a href="#"><img src="https://cdn.pixabay.com/photo/2016/12/11/18/10/apartment-1899964__340.jpg" class="mr-3" alt="..."></a>
                                <div class="media-body">
                                    <!-- <h5 class="mt-0 mb-1">List-based media object</h5> -->
                                    <a href="#">Cras sit amet nibh libero, in gravida nulla.</a><br>
                                    <time class="entry-date" datetime="2019-08-07T07:32:02+00:00">August 7,
                                        2019</time>
                                </div>
                            </li>
                            <li class="media">
                                <a href="#"><img src="https://cdn.pixabay.com/photo/2015/07/02/10/29/swimming-828795__340.jpg" class="mr-3" alt="..."></a>
                                <div class="media-body">
                                    <a href="#">Cras sit amet nibh libero, in gravida nulla.</a><br>
                                    <time class="entry-date" datetime="2019-08-07T07:32:02+00:00">August 7,
                                        2019</time>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm">
                    <h3 class="text-center" style="color:#fff;">popular catogary</h3>
                    <div class="contentBx">
                        <table class="table table-sm table-borderless">

                            <tbody>
                                <tr>
                                    <th scope="row">Racing</th>
                                    <span>
                                        <td>20</td>
                                    </span>
                                </tr>
                                <tr>
                                    <th scope="row">Street fashion</th>
                                    <span>
                                        <td>20</td>
                                    </span>
                                </tr>
                                <tr>
                                    <th scope="row">New look</th>
                                    <span>
                                        <td>20</td>
                                    </span>
                                </tr>
                                <tr>
                                    <th scope="row">Style hunter</th>
                                    <span>
                                        <td>20</td>
                                    </span>
                                </tr>
                                <tr>
                                    <th scope="row">Vogue</th>
                                    <span>
                                        <td>20</td>
                                    </span>
                                </tr>
                                <tr>
                                    <th scope="row">Gadgets</th>
                                    <span>
                                        <td>20</td>
                                    </span>
                                </tr>
                                <tr>
                                    <th scope="row">Mobile Phones</th>
                                    <span>
                                        <td>20</td>
                                    </span>
                                </tr>
                                <tr>
                                    <th scope="row">Photography</th>
                                    <span>
                                        <td>20</td>
                                    </span>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="container con_info">
            <div class="row">
                <div class="col-sm-4">
                    <div class="imgbx">
                        <img src=" https://demo.tagdiv.com/newspaper_pro/wp-content/uploads/2019/09/np10blue-white-retina.png" alt="...">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="abt_us">
                        <h3>About Us</h3>
                        <p>Newspaper is your news, entertainment, music fashion website. We provide you with the latest breaking
                            news
                            and
                            videos straight from the entertainment industry.</p>
                        <span>Contact Us: <a href="#">contact@yoursite.com</a> </span>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="follow_us">
                        <h3>Follow us</h3>
                        <div class="row">
                            <div class="col-sm-12">
                                <ul class="sci">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <!--use font awesome icon-->
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <!--use font awesome icon-->
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <!--use font awesome icon-->
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <!--use font awesome icon-->
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <!--use font awesome icon-->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-7">
                    <div class="info">
                        <p>© Newspaper WordPress Theme by Team3</p>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="btm_link">
                        <a href="#">Disclaimer</a>
                        <a href="#">Privacy</a>
                        <a href="#">Advertisement</a>
                        <a href="#">Contact us</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>





    <script src="https://kit.fontawesome.com/2713b18e8b.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>


</body>

</html>