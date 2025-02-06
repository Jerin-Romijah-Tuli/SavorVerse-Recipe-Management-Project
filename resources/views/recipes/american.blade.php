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
       

    <!-- Page Header Start -->
<div class="page-header category-page">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="category-info d-flex flex-row">
                    <div class="category-content align-self-center">
                        <h2>Cuisine : American</h2>
                        <p></p>
                        <ol class="breadcrumb">
                        <li><a href="{{ url('/') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">American</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->
<div id="main-content">
    <div class="container">
        <div class="row">
        <div class="col-lg-4 col-md-6">
                <div class="recipe-grid">
                    <div class="recipe-img">
                    <img src="{{ asset('images/recipes/mush-sandwitch.jpg') }}" alt="Mushroom Sandwich Recipe">
                                            </div>
                    <div class="recipe-content">
                     <h4><li><a href="{{ url('/') }}">Mushroom Sandwich Recipe</a></li></h4>
                        <ul class="recipe-info">
                        <a href="{{route('american') }}" class="category-img">
                            <li><i class="far fa-clock"></i> 20 mins</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="recipe-grid">
                    <div class="recipe-img">
                    <img src="{{ asset('images/recipes/chocolate-cheesecake-2.jpg') }}" alt="Double Chocolate Cheesecake Recipe">
                                            </div>
                    <div class="recipe-content">
                     <h4><li><a href="{{ url('/') }}">Double Chocolate Cheesecake Recipe</a></li></h4>
                        <ul class="recipe-info">
                        <a href="{{ route('american')}}" class="category-img">
                            <li><i class="far fa-clock"></i> 8 hours</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="recipe-grid">
                    <div class="recipe-img">
                    <img src="{{ asset('images/recipes/salads.jpg') }}" alt="Classic Superfood Salad Recipe">
                                            </div>
                    <div class="recipe-content">
                     <h4><li><a href="{{ url('/') }}">Classic Superfood Salad Recipe</a></li></h4>
                        <ul class="recipe-info">
                        <a href="{{ route('american')}}" class="category-img">
                            <li><i class="far fa-clock"></i> 10 mins</li>
                        </ul>
                    </div>
                </div>
            </div>
                        <div class="col-12">
            
            </div>
                    </div>
    </div>
</div>
    </main>

    @include('partials.footer')

   <script src="https://project.yahoobaba.net/recipe-management//public/assets/public/js/jquery-3.4.1.min.js"></script>
<script src="https://project.yahoobaba.net/recipe-management//public/assets/public/js/popper.min.js"></script>
<script src="https://project.yahoobaba.net/recipe-management//public/assets/public/lib/owlcarousel/owl.carousel.min.js"></script>
<script src="https://project.yahoobaba.net/recipe-management//public/assets/public/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
<script src="https://project.yahoobaba.net/recipe-management//public/assets/public/js/plugins.js"></script>
<script src="https://project.yahoobaba.net/recipe-management//public/assets/public/js/jquery.validate.min.js"></script>
<!-- Magnific Popup core JS file -->
<script src="https://project.yahoobaba.net/recipe-management//public/assets/public/js/jquery.magnific-popup.js"></script>
<script src="https://project.yahoobaba.net/recipe-management//public/assets/public/js/action.js"></script>
<script>
    $(document).ready(function() {
	$('.popup-gallery').magnificPopup({
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
			tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
			// titleSrc: function(item) {
			// 	return item.el.attr('title') + '<small>by Marsel Van Oosten</small>';
			// }
		}
	});
   
});
</script>
</body>
</html>