<!DOCTYPE html>
<html lang="en-US" class="no-js">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <link rel="shortcut icon" href="{!! FAVICON_PATH !!}" type="image/x-icon" />
    <link rel="icon" href="{!! FAVICON_PATH !!}" type="image/x-icon" />

    <?php
    $currentURl = url()->current();
    $pageLink = $currentURl;
    $checkUrl = substr($currentURl, -1);
    
    if ($checkUrl == '/') {
        $pageLink = substr($currentURl, 0, strrpos($currentURl, '/'));
    }
    ?>
    <link rel="canonical" href="<?php echo $pageLink; ?>" />
    <?php if (isset($subCatInfo) && !empty($subCatInfo->meta_title)) {
            ?>
    <title><?php echo $subCatInfo->meta_title; ?></title>
    <meta name="description" itemprop="description" content="<?php echo $subCatInfo->meta_description; ?>">
    <meta name="keywords" itemprop="keywords" content="<?php echo $subCatInfo->meta_keyword; ?>">
    <?php } else if (isset($catInfo) && !empty($catInfo->meta_title)) {
            ?>
    <title><?php echo $catInfo->meta_title; ?></title>
    <meta name="description" itemprop="description" content="<?php echo $catInfo->meta_description; ?>">
    <meta name="keywords" itemprop="keywords" content="<?php echo $catInfo->meta_keyword; ?>">
    <?php } else if (Request::segment(1) == 'gigs') {
            ?>
    <title>{{ $title . TITLE_FOR_LAYOUT }}</title>
    <meta name="description" itemprop="description"
        content="Post & browse the freelance gigs jobs, services & projects. Find the best online freelance jobs for Writing, Graphic, Digital Marketing, Software & other services.">
    <meta name="keywords" itemprop="keywords" content="freelance gigs, gig jobs, find gigs, online gigs, post a gig">
    <?php } else { ?>
    <title>{{ $title . TITLE_FOR_LAYOUT }}</title>
    <?php }
         ?>
    <meta name='robots' content='max-image-preview:large' />
    <link rel='dns-prefetch' href='//fonts.googleapis.com' />

    {{-- <script type='text/javascript' src='../public/js/jquery-2.1.0.min.js' id='jquery-core-js'></script> --}}
    <script type='text/javascript' src='../public/js1/jquery.min.js' id='jquery-core-js'></script>
    <script type='text/javascript' src='../public/js1/jquery-migrate.min.js' id='jquery-migrate-js'></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <meta name="generator" content="WordPress 6.1.1" />
    <meta name="generator" content="WooCommerce 7.1.0" />



    {{-- All css------------------------------------------------------------------------------------------------------------- --}}
    {{ HTML::style('public/css1/post-26.css') }}
    {{ HTML::style('public/css1/style.min.css') }}
    {{ HTML::style('public/css1/wc-blocks-vendors-style.css') }}
    {{ HTML::style('public/css1/wc-blocks-style.css') }}
    {{ HTML::style('public/css1/classic-themes.min.css') }}
    {{ HTML::style('public/css1/styles.css') }}
    {{ HTML::style('public/css1/woocommerce-layout.css') }}
    {{ HTML::style('public/css1/woocommerce.css') }}
    {{ HTML::style('public/css1/magnific-popup.css') }}
    {{ HTML::style('public/css1/perfect-scrollbar.css') }}
    {{ HTML::style('public/css1/leaflet.css') }}
    {{ HTML::style('public/css1/woocommerce1.css') }}
    {{ HTML::style('public/css1/all-awesome.css') }}
    {{ HTML::style('public/css1/flaticon.css') }}
    {{ HTML::style('public/css1/themify-icons.css') }}
    {{ HTML::style('public/css1/animate.css') }}
    {{ HTML::style('public/css1/bootstrap.css') }}
    {{ HTML::style('public/css1/slick.css') }}
    {{ HTML::style('public/css1/sliding-menu.min.css') }}
    {{ HTML::style('public/css1/frontend-lite.min.css') }}
    {{ HTML::style('public/css1/post-5260.css') }}
    {{ HTML::style('public/css1/post-1552.css') }}
    {{ HTML::style('public/css1/post-1860.css') }}
    {{ HTML::style('public/css1/post-3167.css') }}
    {{ HTML::style('public/css1/post-5677.css') }}
    {{ HTML::style('public/css1/select2.min.css') }}
    {{ HTML::style('public/css1/post-1984.css') }}
    {{ HTML::style('public/css1/post-2965.css') }}
    {{ HTML::style('public/css1/elementor-icons.min.css') }}
    {{ HTML::style('public/css1/post-6.css') }}
    {{ HTML::style('public/css1/fontawesome.min.css') }}
    {{ HTML::style('public/css1/brands.min.css') }}
    {{ HTML::style('public/css1/rs6.css') }}
    {{ HTML::style('public/css1/template.css') }}
    {{ HTML::style('public/css1/post-3201.css') }}
    {{ HTML::style('public/css1/post-3038.css') }}
    {{ HTML::style('public/css1/animations.min.css') }}
    {{ HTML::style('public/css1/style.css') }}
    {{ HTML::style('public/css1/widget-icon-list.min.css') }}
    {{ HTML::style('public/css1/woocommerce-smallscreen.css') }}

    {{-- All Js-------------------------------------------------------------------------------------------------------------- --}}
    {{ HTML::script('public/js1/bootstrap.bundle.min.js') }}
    {{ HTML::script('public/js1/slick.min.js') }}
    {{ HTML::script('public/js1/jquery.magnific-popup.min.js') }}
    {{ HTML::script('public/js1/jquery.unveil.js') }}
    {{ HTML::script('public/js1/perfect-scrollbar.jquery.min.js') }}
    {{ HTML::script('public/js1/sliding-menu.min.js') }}
    {{ HTML::script('public/js1/functions.js') }}
    {{ HTML::script('public/js1/index1.js') }}
    {{ HTML::script('public/js1/index.js') }}
    {{ HTML::script('public/js1/rbtools.min.js') }}
    {{ HTML::script('public/js1/rs6.min.js') }}
    {{ HTML::script('public/js1/jquery.blockUI.min.js') }}
    {{ HTML::script('public/js1/add-to-cart.min.js') }}
    {{ HTML::script('public/js1/js.cookie.min.js') }}
    {{ HTML::script('public/js1/core.min.js') }}
    {{ HTML::script('public/js1/mouse.min.js') }}
    {{ HTML::script('public/js1/slider.min.js') }}
    {{ HTML::script('public/js1/jquery.ui.touch-punch.min.js') }}
    {{ HTML::script('public/js1/woocommerce.min.js') }}
    {{ HTML::script('public/js1/main.js') }}
    {{ HTML::script('public/js1/perfect-scrollbar1.jquery.min.js') }}
    {{ HTML::script('public/js1/main1.js') }}
    {{ HTML::script('public/js1/woocommerce.js') }}
    {{ HTML::script('public/js1/jquery.highlight.js') }}
    {{ HTML::script('public/js1/leaflet.js') }}
    {{ HTML::script('public/js1/Control.Geocoder.js') }}
    {{ HTML::script('public/js1/leaflet.markercluster.js') }}
    {{ HTML::script('public/js1/LeafletHtmlIcon.js') }}
    {{ HTML::script('public/js1/job-map.js') }}
    {{ HTML::script('public/js1/job.js') }}
    {{ HTML::script('public/js1/select2.min.js') }}
    {{ HTML::script('public/js1/handlebars.min.js') }}
    {{ HTML::script('public/js1/typeahead.bundle.min.js') }}
    {{ HTML::script('public/js1/jquery-numerator.min.js') }}
    {{ HTML::script('public/js1/forms.js') }}
    {{ HTML::script('public/js1/webpack.runtime.min.js') }}
    {{ HTML::script('public/js1/frontend-modules.min.js') }}
    {{ HTML::script('public/js1/waypoints.min.js') }}
    {{ HTML::script('public/js/front/jquery.lazyload.js') }}



    <noscript>
        <style>
            .woocommerce-product-gallery {
                opacity: 1 !important;
            }
        </style>
    </noscript>
    <meta name="generator"
        content="Powered by Slider Revolution 6.5.12 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface." />

</head>

<body>
    @include('elements.header')
    @yield('content')
    @include('elements.footer_inner')
</body>

</html>
