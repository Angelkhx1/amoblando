@extends('layouts.admin.app')

@section('content')
    <div class="untree_co-section untree_co-section-4 pb-0" id="portfolio-section">
        <div class="container">

        <div class="relative"><div class="loader-portfolio-wrap"><div class="loader-portfolio"></div></div> </div>
        <div id="portfolio-single-holder"></div>
        <div class="portfolio-wrapper">
            <div id="posts" class="row">
                <div class="item web branding col-sm-6 col-md-6 col-lg-4 isotope-mb-2">
                    <div class="overlay">
                        <div class="portfolio-item-content">
                        </div>
                    </div>
                    <img src="{{url('images/img_1.jpg')}}" class="lazyload  img-fluid" alt="Images" />
                    </a>
                </div>
                <div class="item web branding col-sm-6 col-md-6 col-lg-4 isotope-mb-2">
                    <div class="overlay">
                        <div class="portfolio-item-content">
                        </div>
                    </div>
                    <img src="{{url('images/img_2.jpg')}}" class="lazyload  img-fluid" alt="Images" />
                    </a>
                </div>
                <div class="item web branding col-sm-6 col-md-6 col-lg-4 isotope-mb-2">
                    <div class="overlay">
                        <div class="portfolio-item-content">
                        </div>
                    </div>
                    <img src="{{url('images/img_3.jpg')}}" class="lazyload  img-fluid" alt="Images" />
                    </a>
                </div>
                <div class="item web branding col-sm-6 col-md-6 col-lg-4 isotope-mb-2">
                    <div class="overlay">
                        <div class="portfolio-item-content">
                        </div>
                    </div>
                    <img src="{{url('images/img_4.jpg')}}" class="lazyload  img-fluid" alt="Images" />
                    </a>
                </div>
                <div class="item web branding col-sm-6 col-md-6 col-lg-4 isotope-mb-2">
                    <div class="overlay">
                        <div class="portfolio-item-content">
                        </div>
                    </div>
                    <img src="{{url('images/img_5.jpg')}}" class="lazyload  img-fluid" alt="Images" />
                    </a>
                </div>
                <div class="item web branding col-sm-6 col-md-6 col-lg-4 isotope-mb-2">
                    <div class="overlay">
                        <div class="portfolio-item-content">
                        </div>
                    </div>
                    <img src="{{url('images/img_6.jpg')}}" class="lazyload  img-fluid" alt="Images" />
                    </a>
                </div>

            </div>
        </div>

    </div>
    </div>

@endsection
