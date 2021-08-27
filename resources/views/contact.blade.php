@extends('layouts.main')
@section('container')
    <!-- Main Content-->
    <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-7">
            <p>Want to get in touch? Fill out the form below to send me a message and I will get back to you as soon as
                possible!</p>
            <div class="my-5">
                @if(Session::has('message_sent'))
                    <div class="alert alert-success" role="alert">
                        Form submission successful!
                    </div>
                @endif
                <form method="POST" action="{{route('contact.send')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-floating">
                        <input class="form-control" name="name" type="text" placeholder="Enter your name..." required/>
                        <label>Name</label>
                        <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                    </div>
                    <div class="form-floating">
                        <input class="form-control" name="email" type="email" placeholder="Enter your email..."
                               required/>
                        <label>Email address</label>
                        <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                        <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                    </div>
                    <div class="form-floating">
                        <input class="form-control" name="phone" type="tel" maxlength="15"
                               placeholder="Enter your phone number..." required/>
                        <label>Phone Number</label>
                        <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.
                        </div>
                    </div>
                    <div class="form-floating">
                    <textarea class="form-control" name="message" placeholder="Enter your message here..."
                              style="height: 12rem" required></textarea>
                        <label>Message</label>
                        <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                    </div>
                    <br/>
                    <!-- Submit Button-->
                    <button class="btn btn-primary text-uppercase" id="submitButton" type="submit">Send</button>
                </form>
            </div>
        </div>
    </div>
@endsection
