@extends('frontend.layouts.master')

@section('content')
    <section id="features" class="grade">
        <div class="container">
            <div class="grade-text">
                <h1 class="text-center">Welcome</h1>
                <h2 class="text-center">Begin your journey to grade cards.</h2>


                @if (session()->has('message'))
                    <p class="alert alert-success text-center">{{ session()->get('message') }}</p>
                @endif


                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="row">
                    <div class="col-md-6">
                        <form action="{{ route('grade-card.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputFullname1">Full Name</label>
                                <input type="text" name="name" class="form-control" id="exampleInputFullname1"
                                    placeholder="Full name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Enter email">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                                    else.</small>
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Comments (Optional)</label>
                                <textarea class="form-control" name="comment" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlFile1">Upload your picture</label>
                                <input type="file" name="image" class="form-control-file form-control"
                                    id="exampleFormControlFile1">
                            </div>
                            <button type="submit" class="btn btn-danger submit-btn-grade">Submit</button>
                        </form>
                    </div>

                    <div class="col-md-6 result-parent">
                        {{-- <a href="https://cf.bstatic.com/xdata/images/hotel/square200/39194987.webp?k=797ae9038baac981eac4d2deb95e8bc5abcf15097dc3fbd4ef9fd540425f6e4b&o=&s=1" download class="download-button">
                            <i class="fa fa-download download-icon" aria-hidden="true"></i>
                            <span class="download-text">download<span>
                        </a> --}}
                        @if (isset($data))
                        
                            <div class="alert alert-success result-alert" role="alert"><span class="text-danger">{{ $data >= 5 ? ($data >= 8 ? "Outstanding" : "Well done !") : "Opps !" }}</span> 
                                <br> <br> <h1>{{ $data >= 8 ? "Awesome you" : "You" }} have got <span class="text-danger">{{ $data }}</span> grade rating.</h1>
                                <br><img src="{{ $data >= 5 ? asset('frontend/img/celebrate.png') : asset('frontend/img/opps.png') }}" alt="">
                            </div>
                        @else
                        <div class="image-poke"></div>
                        @endif
                    </div>
                </div>

            </div>
        </div>
        </div>
    </section>
@endsection
