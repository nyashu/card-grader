@extends('frontend.layouts.master')

@section('content')
    <div id="features">
        <div class="container mt-3">
            <h1 class="text-center mb-4">Social Links</h1>
            <div class="row">
                <div class="col-md-6 social">
                    <div class="d-flex justisfy-content-between align-items-center">
                        <i class="fa-brands fa-facebook text-primary"></i>
                        <a href="">https://www.facebook.com/zabeen.shrestha</a>
                    </div>

                    <div class="d-flex justisfy-content-between align-items-center ">
                        <i class="fa-brands fa-twitter text-primary"></i>
                        <a href="">https://www.twitter.com/zabeen.shrestha</a>
                    </div>

                    <div class="d-flex justisfy-content-between align-items-center">
                        <i class="fa-brands fa-instagram text-danger"></i>
                        <a href="">https://www.instagram.com/zabeen.shrestha</a>
                    </div>

                    <div class="d-flex justisfy-content-between align-items-center">
                        <i class="fa-brands fa-github"></i>
                        <a href="">https://www.github.com/zabeen.shrestha</a>
                    </div>
                </div>

                <div class="col-md-6 social">
                   <div>
                    <h2 class="text-center">About me</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos delectus pariatur quae natus necessitatibus eum aspernatur libero totam, minima nemo nam quaerat fugiat distinctio dolores fugit, cumque molestiae magnam autem!</p>
                   </div>
                </div>
            </div>
        </div>
    </div>    
@endsection