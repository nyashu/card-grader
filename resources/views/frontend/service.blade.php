@extends('frontend.layouts.master')

@section('content')
    <section id="banner_service">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ">
                    <div class="block">
                        <h1>Services</h1>
                        <h2>With over 10,000 PSA graded card pictures <br> available in our dataset and using AWS machine learning, <br> makes this platform one of the most trusted in the industry.</h2>
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
@endsection