@extends('welcome')@section('content')<div  id="wrapper">
<!-- start header -->
<header>
    <div class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header"> <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">                            <span class="icon-bar"></span>                            <span class="icon-bar"></span>                            <span class="icon-bar"></span>                        </button>
                <a class="navbar-brand" href="index.html"><i class="icon-info-blocks material-icons">location_on</i>Grill</a> </div>
            <div class="navbar-collapse collapse ">
                <ul class="nav navbar-nav">
                    <li><a class="waves-effect waves-dark" href="index.html">Home</a></li>
                    <li class="dropdown"> <a href="#" data-toggle="dropdown" class="dropdown-toggle">About Us <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a class="waves-effect waves-dark" href="about.html">Company</a></li>
                            <li><a class="waves-effect waves-dark" href="#">Our Team</a></li>
                            <li><a class="waves-effect waves-dark" href="#">News</a></li>
                            <li><a class="waves-effect waves-dark" href="#">Investors</a></li>
                        </ul>
                    </li>
                    <li><a class="waves-effect waves-dark" href="services.html">Services</a></li>
                    <li><a class="waves-effect waves-dark" href="portfolio.html">Gallery</a></li>
                    <li class="active"><a href="pricing.html" class="waves-effect waves-dark">Pricing</a></li>
                    <li><a class="waves-effect waves-dark" href="contact.html">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>
</header><!-- end header -->
<section id="inner-headline">
    <div class="container">
        <div class="row">
            <div class="col-lg-12"> <h2 class="pageTitle">Pricing</h2>
            </div>
        </div>
    </div>
</section>
<section id="content">
    <section id="pricing">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="about-logo"> <h3>Our Price<span class="color">List</span></h3>
                        <p>Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo
                            enim ipsam voluptatem quia voluptas</p>
                        <p>Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo
                            enim ipsam voluptatem quia voluptas</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 menuItem">
                    <ul class="menu">
                        <li> Kemts <div class="detail">ipsum dolor sit amet, consectetur<span class="price">$14.49</span></div>
                        </li>
                        <li> Burger Flatj king <div class="detail">ipsum dolor sit amet dskfj consectetur<span class="price">$20.50</span></div>
                        </li>
                        <li> England Muntes Vils <div class="detail">Semper aliquam quis mattis quam<span class="price">$9.99</span></div>
                        </li>
                        <li> Jemnku Qubeics <div class="detail">ipsum dolor sit amet, consectetur<span class="price">$7.99</span></div>
                        </li>
                        <li> Trenslinks <div class="detail">ipsum dolor sit amet dskfj consectetur<span class="price">$17.99</span></div>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4 menuItem">
                    <ul class="menu">
                        <li> Ddsaw <div class="detail">ipsum dolor sit amet, consectetur<span class="price">$14.49</span></div>
                        </li>
                        <li> Awdass ads <div class="detail">ipsum dolor sit amet dskfj consectetur<span class="price">$20.50</span></div>
                        </li>
                        <li> Efdsf Vdssad <div class="detail">Semper aliquam quis mattis quam<span class="price">$9.99</span></div>
                        </li>
                        <li> Dasdada asda <div class="detail">ipsum dolor sit amet, consectetur<span class="price">$7.99</span></div>
                        </li>
                        <li> Esadcasd <div class="detail">ipsum dolor sit amet dskfj consectetur<span class="price">$17.99</span></div>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4 menuItem">
                    <ul class="menu">
                        <li> Qsadasd <div class="detail">ipsum dolor sit amet, consectetur<span class="price">$14.49</span></div>
                        </li>
                        <li> Fsdaasd <div class="detail">ipsum dolor sit amet dskfj consectetur<span class="price">$20.50</span></div>
                        </li>
                        <li> Vsdasd asda <div class="detail">Semper aliquam quis mattis quam<span class="price">$9.99</span></div>
                        </li>
                        <li> Wasdads asd <div class="detail">ipsum dolor sit amet, consectetur<span class="price">$7.99</span></div>
                        </li>
                        <li> Delmonico <div class="detail">ipsum dolor sit amet dskfj consectetur<span class="price">$17.99</span></div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</section>
</div>
@endsection
