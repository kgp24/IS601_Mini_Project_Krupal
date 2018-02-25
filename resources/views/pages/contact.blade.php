@extends('layouts.default')

@section('content')
    <div class="card mt-3 pl-2 pr-2">
        <div class="card-text">
            <h1>Contact</h1>
        </div>

        <div class="card-body">
            <p class="lead">Please Use this place to contact the site owner</p>

            <form role="form" id="contact-form" method="POST" action="{{route('contact.store')}}">

                {{ csrf_field() }}

                <div class="form-group">
                    <label for="email">Email address</label>
                    <input name="email" type="email" class="form-control" id="email" placeholder="name@example.com">
                </div>
                <div class="form-group">
                    <label for="body">Subject</label>
                    <input name="subject" type="text" class="form-control" id="subject">
                </div>

                <div class="form-group">
                    <label for="body">Message</label>
                    <textarea name="body" class="form-control" id="body" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary mb-2">Submit</button>
            </form>
        </div>
    </div>
@endsection
