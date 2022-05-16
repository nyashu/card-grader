@extends('frontend.layouts.master')

@section('content')

    <section id="banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <h1>Let's Begin Card Grader</h1>
                        <h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod <br> tempor incididunt
                            ut labore et dolore magna aliqua. Ut enim ad minim veniam,</h2>
                        <div class="buttons">
                            <a href="{{ route('grade-card.index') }}" class="btn btn-learn">Grade Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="scrolldown">
            <a id="scroll" href="#features" class="scroll"></a>
        </div>
    </section>
    <section id="features">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title">
                        <h2>OUR BEST SERVICES</h2>
                        <p>Dantes remained confused and silent by this explanation of the <br> thoughts which had
                            unconsciously</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-xs-6 col-sm-6">
                    <div class="feature-block text-center">
                        <div class="icon-box">
                            <i class="ion-ios-game-controller-b"></i>
                        </div>
                        <h4 class="wow fadeInUp" data-wow-delay=".3s">Speedy Grading</h4>
                        <p class="wow fadeInUp" data-wow-delay=".5s">Using advanced technology and AI behind the scenes,
                            we are able to deliver your card grade results quicker.</p>
                    </div>
                </div>
                <div class="col-md-4 col-xs-6 col-sm-6">
                    <div class="feature-block text-center">
                        <div class="icon-box">
                            <i class="ion-bonfire"></i>
                        </div>
                        <h4 class="wow fadeInUp" data-wow-delay=".3s">Free Grading</h4>
                        <p class="wow fadeInUp" data-wow-delay=".5s">Yes, all the features of this system are totally
                            free!

                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-xs-6 col-sm-6">
                    <div class="feature-block text-center">
                        <div class="icon-box">
                            <i class="ion-playstation"></i>
                        </div>
                        <h4 class="wow fadeInUp" data-wow-delay=".3s">Trusted</h4>
                        <p class="wow fadeInUp" data-wow-delay=".5s">With over 10,000 PSA graded card pictures available
                            in our dataset and using AWS machine learning, makes this platform one of the most trusted in
                            the industry.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="contact-form">
        <div class="container">
            <div class="row">
                <div class="title">
                    <h2>CONTACT US</h2>
                    <p>Dantes remained confused and silent by this explanation of the <br> thoughts which had unconsciously
                    </p>
                </div>

                <div class="col-md-6">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @if (session()->has('message'))
                        <p class="alert alert-success text-center">{{ session()->get('message') }}</p>
                    @endif

                    <form method="POST" action="{{ route('message') }}">
                        @csrf
                        <input type="text" class="form-control" placeholder="Name" name="name">
                        <input type="text" class="form-control" placeholder="Email" name="email">
                        <textarea class="form-control" rows="3" placeholder="Message" name="message"></textarea>
                        <button class="btn btn-default" type="submit">SEND</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection
