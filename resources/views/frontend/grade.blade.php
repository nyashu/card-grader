@extends('frontend.layouts.master')

@section('content')
    <section id="features" class="grade">
        <div class="container">
            <div class="grade-text">
                <h1 class="text-center">Welcome</h1>
                <h2 class="text-center">Begin your journey to grade cards.</h2>
                <div class="row">
                    <div class="col-md-6">
                        <form>
                            <div class="form-group">
                                <label for="exampleInputFullname1">Full Name</label>
                                <input type="text" class="form-control" id="exampleInputFullname1"
                                    placeholder="Full name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Enter email">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                                    else.</small>
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Comments (Optional)</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                              </div>

                                <div class="form-group">
                                  <label for="exampleFormControlFile1">Upload your picture</label>
                                  <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                </div>
                            <button type="submit" class="btn btn-danger submit-btn-grade">Submit</button>
                        </form>
                    </div>

                    <div class="col-md-6">
                        <div class="image-poke"> </div>
                    </div>
                </div>

            </div>
        </div>
        </div>
    </section>
@endsection
