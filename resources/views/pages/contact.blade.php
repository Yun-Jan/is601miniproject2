
@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Contact') }}</div>
                <div class=" card-body ">
                    <form action="/contact" method="post" action="{{route('contact.store')}}">
                        @csrf
                        <div class="form-group">
                            <label for="Name">Name</label>
                            <input name="name" type="name" class="form-control" id="Name" placeholder="Name">
                            <div class="form-group ">
                                <label for="Email">Email address</label>
                                <input name="email" type="email" class="form-control" id="email"
                                       placeholder="name@example.com">
                            </div>
                            <div class="form-group ">
                                <label for="Message">Message</label>
                                <textarea name="message" class="form-control" id="message" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary mb-2">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

