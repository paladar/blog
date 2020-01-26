@extends('front.layout.body')

@section('content')
<div class="container">
    <h2>{{__('app.front.auth.register')}}</h2>
    <form action="{{route('register')}}" method="POST">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="name">{{__('app.front.auth.name')}}*</label>
            <input class="form-control" id="name" name="name" required min="3" max="15">
          </div>
          <div class="form-group">
            <label for="email">{{__('app.front.auth.email')}}*</label>
            <input type="email" class="form-control"  id="email" name="email" required>
          </div>
          <div class="form-group">
            <label for="password">{{__('app.front.auth.password')}}*</label>
            <input type="password" class="form-control" id="password" name="password" required min="8">
          </div>
        <div class="form-group">
            <label for="password_confirmation">{{__('app.front.auth.password_confirmation')}}*</label>
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required min="8">
          </div>
        <button type="submit" class="btn btn-primary float-right">{{__('app.front.auth.register_confirm')}}</button>
    </form> 
</div>
@endsection