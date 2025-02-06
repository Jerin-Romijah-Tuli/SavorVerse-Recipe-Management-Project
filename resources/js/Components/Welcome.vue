<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
</script>

<template>
    <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="yOUwhitBVJ0R8vXUCiaWNCUA62PMVstNnnz2flAL">
    <meta name="site-url" content="https://www.project.yahoobaba.net/recipe-management">
    <title>Recipe Management</title>
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://project.yahoobaba.net/recipe-management//public/assets/public/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <!-- <link href="lib/animate/animate.min.css" rel="stylesheet"> -->
    <!-- Magnific Popup core CSS file -->
    <link rel="stylesheet" href="https://project.yahoobaba.net/recipe-management//public/assets/public/css/magnific-popup.css">
    <!-- Bootstrap Core Css -->
    <link rel="stylesheet" href="https://project.yahoobaba.net/recipe-management//public/assets/public/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.min.css" rel="stylesheet"/>
    <link href="https://project.yahoobaba.net/recipe-management//public/assets/public/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://project.yahoobaba.net/recipe-management//public/assets/public/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=Jost:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600&display=swap" rel="stylesheet">
</head>
<body>
    @include('partials.header')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')

    <script src="{{ asset('assets/public/js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('assets/public/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/public/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/public/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/public/js/jquery.magnific-popup.js') }}"></script>
    <script src="{{ asset('assets/public/js/action.js') }}"></script>
    <script>
        $(document).ready(function() { 
                delegate: 'a',
                type: 'image',
                tLoading: 'Loading image #%curr%...',
                mainClass: 'mfp-img-mobile',
                gallery: {
                    enabled: true,
                    navigateByImgClick: true,
                    preload: [0,1] // Will preload 0 - before current, and 1 after the current image
                },
                image: {
                    tError: '<a href="%url%">The image #%curr%</a> could not be loaded.'
                }
            });
        
    </script>
</body>
</html>
</template>
