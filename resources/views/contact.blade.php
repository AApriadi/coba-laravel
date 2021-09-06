@extends('layouts.main')
@section('container')
    <!-- Main Content-->
    <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-7">
            <p>Want to get in touch? Fill out the form below to send me a message and I will get back to you as soon as
                possible!</p>
            <div class="my-5">
                @if(session()->has('message_sent'))
                    <div class="alert alert-success alert-dismissible fade show fs-6" role="alert">
                        {{ session('message_sent') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <form method="post" action="{{route('contact.send')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-floating">
                        <input class="form-control @error('name') is-invalid @enderror" name="name" type="text" placeholder="Enter your name..." required value="{{ old('name') }}"/>
                        <label>Name</label>
                        @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                    </div>
                    <div class="form-floating">
                        <input class="form-control @error('email') is-invalid @enderror" name="email" type="email" placeholder="Enter your email..." required value="{{ old('email') }}"/>
                        <label>Email address</label>
                        @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
                    <div class="form-floating">
                        <input class="form-control @error('phone') is-invalid @enderror" name="phone" type="tel" maxlength="15"
                               placeholder="Enter your phone number..." required value="{{ old('phone') }}"/>
                        <label>Phone Number</label>
                        @error('phone')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
                    <div class="form-floating">
                    <textarea class="form-control @error('message') is-invalid @enderror" name="message" placeholder="Enter your message here..." style="height: 12rem" required>{{ old('message') }}</textarea>
                        <label>Message</label>
                        @error('message')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
                    <!-- Submit Button-->
                    <button class="btn btn-primary mt-2 w-100" id="submitButton" type="submit">Send</button>
                </form>
            </div>
        </div>
    </div>
@endsection
