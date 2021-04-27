@extends('layouts.app')
@section('title','Мій кабінет')

@section('content')
<div class="form-group">
    <div class="row p-1 ml-5">
<a class="nav-link" href="/posts/create">
    <div class="btn btn-primary ">Додати поста</div>
</a>
<a class="nav-link" href="/storage_files">
    <div class="btn btn-primary">Усі файли</div>
</a>
    </div>
</div>
<div class="container">
    <div class="row">
        @foreach($items as $item)

        <div class="col-3 p-1 shadow-sm">
                <div style="overflow: auto;height: 150px;">
                    <p class="p-0">{{$item->title}}</p>
                </div>
                <form method="POST" action="/posts/edit">
                    @csrf
                    <input class="btn btn-sm btn-outline-secondary" type="submit" value="Edit">
                    <small class="text-muted"><input style="display: none" name="id" id="id" value="{{$item->id}}"></small>
                </form>
        </div>
        @endforeach
    </div>
</div>
    @endsection
