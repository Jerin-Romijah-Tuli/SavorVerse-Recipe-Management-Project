<!DOCTYPE html>
<html>
<head>
    <title>Recipes</title>
</head>
<body>
   
    <ul>
        

        @extends('layouts.app')

@section('content')
    <!-- Banner Start -->
    <div id="banner" style="background-image: url('{{ asset('images/banners/bg.jpg') }}')">
        <h1>Your Best Multiple Recipes Around The World.</h1>
        <h3>Taste Inovation Nutration.</h3>
    </div>
    <!-- Banner End -->

    <!-- Category Section -->
    <div id="category-section">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-4">
                    <h3>Browse by Category</h3>
                    <span></span>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                    <div class="category-box d-flex flex-row">
                    <a href="{{ route('snacks') }}"class="category-img"> 

                            <img src="{{ asset('images/categories/snack.jpg') }}" alt="Snacks">
                        </a>
                        <h4 class="align-self-center"><a href="{{ route('snacks') }}">Snacks</a></h4>
                    </div>
                </div>
                
    
                <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                        <div class="category-box d-flex flex-row">
                        <a href="{{ route('salad') }}" class="category-img">
                            <img src="{{ asset('images/categories/salad.jpg') }}" alt="Salad">
                        </a>
                        <h4 class="align-self-center"><a href="{{ route('salad') }}">Salad</a></h4>
                       </div>
                   </div>
                   <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                    <div class="category-box d-flex flex-row">
                        <a href="{{route('noodles')}}" class="category-img">
                            <img src="{{ asset('images/categories/pasta.jpg') }}" alt="noodles">
                        </a>
                        <h4 class="align-self-center"><a href="{{ route('noodles') }}">Noodles & Pasta</a></h4>
                    </div>
                 </div>
                 <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                    <div class="category-box d-flex flex-row">
                        <a href="{{route('drinks')}}" class="category-img">
                            <img src="{{ asset('images/categories/drinks.jpg') }}" alt="drinks">
                        </a>
                        <h4 class="align-self-center"><a href="{{ route('drinks') }}">Drinks</a></h4>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                    <div class="category-box d-flex flex-row">
                        <a href="{{ route('rice') }}" class="category-img">
                            <img src="{{ asset('images/categories/rice.jpg') }}" alt="rice">
                        </a>
                        <h4 class="align-self-center"><a href="{{ route('rice') }}">Main</a></h4>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                    <div class="category-box d-flex flex-row">
                        <a href="{{ route('dessert')}}" class="category-img">
                            <img src="{{ asset('images/categories/dessert.jpg') }}" alt="dessert">
                        </a>
                        <h4 class="align-self-center"><a href="{{route('dessert') }}">Dessert</a></h4>
                    </div>
                </div>
            </div>
                <!-- Add more categories here -->
            </div>
        </div>
    </div>

    


    <div id="cuisine-section">
    <div class="container">
        <div class="row">
            <div class="col-md-4 align-self-center text-center text-md-left mb-3 mb-md-0">
                <h2>Cuisines</h2>
                <span class="section-description">Browse recipes by cuisines</span>
            </div>
            <div class="col-md-8 row pr-0">
                                <div class="col-lg-3 col-md-4 col-sm-4">
                    <a href="{{ route('southasian') }}" class="cuisine-box d-flex flex-column justify-content-center">
                        <span class="title">South Asian</span>
                        <span>Recipes</span>
                    </a>
                </div>
                                <div class="col-lg-3 col-md-4 col-sm-4">
                    <a href="{{ route('thai') }}" class="cuisine-box d-flex flex-column justify-content-center">
                        <span class="title">Thai</span>
                        <span>Recipes</span>
                    </a>
                </div>
                                <div class="col-lg-3 col-md-4 col-sm-4">
                    <a href="{{route('italian') }}" class="cuisine-box d-flex flex-column justify-content-center">
                        <span class="title">Italian</span>
                        <span>Recipes</span>
                    </a>
                </div>
                                <div class="col-lg-3 col-md-4 col-sm-4">
                    <a href="{{ route('american') }}" class="cuisine-box d-flex flex-column justify-content-center">
                        <span class="title">American</span>
                        <span>Recipes</span>
                    </a>
                </div>
                                <div class="col-lg-3 col-md-4 col-sm-4">
                    <a href="{{ route('japanese') }}" class="cuisine-box d-flex flex-column justify-content-center">
                        <span class="title">Japanese</span>
                        <span>Recipes</span>
                    </a>
                </div>
                                <div class="col-lg-3 col-md-4 col-sm-4">
                    <a href="{{ route('korean')  }}" class="cuisine-box d-flex flex-column justify-content-center">
                        <span class="title">Korean</span>
                        <span>Recipes</span>
                    </a>
                </div>
                                 <div class="col-lg-3 col-md-4 col-sm-4">
                    <a href="{{ route('australian') }}" class="cuisine-box d-flex flex-column justify-content-center">
                        <span class="title">Australian</span>
                        <span>Recipes</span>
                    </a>
                </div>
            
                                <div class="col-lg-3 col-md-4 col-sm-4">
                    <a href="{{ route('chinese') }}" class="cuisine-box d-flex flex-column justify-content-center">
                        <span class="title">Chinese</span>
                        <span>Recipes</span>
                    </a>
                </div>
                            </div>
        </div>
    </div>
</div>


    <!-- Latest Recipes Section -->
    <div id="latest-section">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex flex-row justify-content-between">
                    <div class="mb-4">
                        <h3>Latest Recipes</h3>
                        <span></span>
                    </div>
                    <a href="{{ route('all-recipes') }}" class="align-self-center view-all">View All Recipes <i class="fa fa-arrow-right"></i></a>
                </div>
                <!-- Add latest recipes here -->

                <div class="col-lg-4 col-md-6">
                <div class="recipe-grid">
                    <div class="recipe-img">
                    <img src="{{ asset('images/recipes/mush-sandwitch.jpg') }}" alt="Mushroom Sandwich Recipe">
                                            </div>
                    <div class="recipe-content">
                     <h4><li><a href="{{ url('/') }}">Mushroom Sandwich Recipe</a></li></h4>
                        <ul class="recipe-info">
                        <a href="{{ url('/snacks') }}" class="category-img">
                            <li><i class="far fa-clock"></i> 20 mins</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="recipe-grid">
                    <div class="recipe-img">
                    <img src="{{ asset('images/recipes/salads.jpg') }}" alt="Mushroom Sandwich Recipe">
                                            </div>
                    <div class="recipe-content">
                     <h4><li><a href="{{ url('/') }}">Classic Superfood Salad Recipe</a></li></h4>
                        <ul class="recipe-info">
                        <a href="{{ route('salad')}}" class="category-img">
                            <li><i class="far fa-clock"></i> 10 mins</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="recipe-grid">
                    <div class="recipe-img">
                    <img src="{{ asset('images/recipes/pasta.jpg') }}" alt="Pasta Primavera Recipe">
                                            </div>
                    <div class="recipe-content">
                     <h4><li><a href="{{ url('/') }}">Pasta Primavera Recipe</a></li></h4>
                        <ul class="recipe-info">
                        <a href="{{ url('/noodles-&amp;-pasta') }}" class="category-img">
                            <li><i class="far fa-clock"></i> 25 mins</li>
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
                        <a href="{{ route('dessert')}}" class="category-img">
                            <li><i class="far fa-clock"></i> 8 hours</li>
                        </ul>
                    </div>  
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="recipe-grid">
                    <div class="recipe-img">
                    <img src="{{ asset('images/recipes/biriyani.jpg') }}" alt="Hyderabadi Chicken Biriyani Recipe">
                                            </div>
                    <div class="recipe-content">
                     <h4><li><a href="{{ url('/') }}">Hyderabadi Chicken Biriyani Recipe</a></li></h4>
                        <ul class="recipe-info">
                        <a href="{{ route('rice')}}" class="category-img">
                            <li><i class="far fa-clock"></i> 50 mins</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="recipe-grid">
                    <div class="recipe-img">
                    <img src="{{ asset('images/recipes/mango.jpg') }}" alt="Kesar Mango Lassi Recipe">
                                            </div>
                    <div class="recipe-content">
                     <h4><li><a href="{{ url('/') }}">Kesar Mango Lassi Recipe</a></li></h4>
                        <ul class="recipe-info">
                        <a href="{{ route('drinks')}}" class="category-img">
                            <li><i class="far fa-clock"></i> 15 mins</li>
                        </ul>
                    </div>
                </div>
            </div>

            </div>
        </div>
    </div>

    

    <!-- Most Favourite Recipes Section -->
    <div id="most-favourite-section">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-4">
                <h2>Most Favourite Recipes</h2>
                <br>
                <span></span>
            </div>
                <!-- Add most favourite recipes here -->

                
            <div class="col-md-4">
            <div class="fav-recipe-grid">
                    
                </div>
            </div>

            <div class="col-md-4">
            <div class="fav-recipe-grid">
                    <div class="recipe-img">
                    <img src="{{ asset('images/recipes/biriyani.jpg') }}" alt="Hyderabadi Chicken Biriyani Recipe">
                                            </div>
                    <div class="recipe-content">
                     <h4><li><a href="{{ url('/') }}">Hyderabadi Chicken Biriyani Recipe</a></li></h4>
                        <ul class="recipe-info">
                        <a href="{{ route('rice')}}" class="category-img">
                            <li><i class="far fa-clock"></i> 50 mins</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="fav-recipe-grid">
                <div class="recipe-img">
                    <img src="{{ asset('images/recipes/noodles.jpg') }}" alt="Saucy Ramen Noodles Recipe">
                                            </div>
                    <div class="recipe-content">
                     <h4><li><a href="{{ url('/') }}">Saucy Ramen Noodles Recipe</a></li></h4>
                        <ul class="recipe-info">
                        <a href="{{ route('noodles') }}" class="category-img">
                            <li><i class="far fa-clock"></i> 20 mins</li>
                        </ul>
                    </div>
                </div>
            </div>






            </div>
        </div>
    </div>
@endsection
    </ul>
</body>
</html>