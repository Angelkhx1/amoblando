const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

/*mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        //
    ]);*/
mix.styles(['resources/space/css/bootstrap.min.css',
                'resources/space/css/owl.carousel.min.css',
                'resources/space/css/owl.theme.default.min.css',
                'resources/space/css/jquery.fancybox.min.css',
                'resources/space/css/icomoon/style.css',
                'resources/space/css/flaticon.css',
                'resources/space/css/aos.css',
                'resources/space/css/style.css',],'public/css/app.css')
    .scripts(['resources/space/js/jquery-3.4.1.min.js',
            'resources/space/js/popper.min.js',
            'resources/space/js/bootstrap.min.js',
            'resources/space/js/owl.carousel.min.js',
            'resources/space/js/jquery.animateNumber.min.js',
            'resources/space/js/jquery.waypoints.min.js',
            'resources/space/js/jquery.fancybox.min.js',
            'resources/space/js/aos.js',
            'resources/space/js/wave-animate.js',
            'resources/space/js/circle-progress.js',
            'resources/space/js/imagesloaded.pkgd.js',
            'resources/space/js/isotope.pkgd.min.js',
            'resources/space/js/jquery.easing.1.3.js',
            'resources/space/js/TweenMax.min.js',
            'resources/space/js/ScrollMagic.min.js',
            'resources/space/js/scrollmagic.animation.gsap.min.js',
            'resources/space/js/custom.js',
    ],'public/js/app.js');

