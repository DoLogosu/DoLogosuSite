@extends('layouts.app')
@section('title','Вхід')

@section('content')
    <script>
        document.getElementById("navLogin").classList.add('active');
    </script>
<h1 class="text-center m-4">Вхід на сайт</h1>
<form class="mr-4 ml-4" method="POST" action="/login" style="margin-bottom: 200px;">
    @csrf

    @if(count($errors))
    <div class="form-group">
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    </div>
    @endif
    <div class="form-group" style=" min-width: 250px; width: 25vw; margin: auto;">
        <label for="email">Пошта:</label>
        <input type="text" class="form-control" id="email" name="email" value="{{ old('email') }}" placeholder="Пошта">
    </div>
    <div class="form-group" style="min-width: 250px; width: 25vw; margin: auto;">
        <label for="password">Пароль:</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Пароль">
    </div>
    <!--<a style="display:block; text-align: center; margin: auto;" href="/register">Зареєструватися</a>-->
    <input class="btn btn-success mt-3" type="submit" value="Вхід" style="display: block;margin: auto;">

</form>





@endsection
