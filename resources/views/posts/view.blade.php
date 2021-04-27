@extends('layouts.app')
<style>
    img {
        max-width: 100%;
    }
    iframe
    {
        max-width: 100%;
    }
</style>


@section('content')
    @foreach($items as $item)
        @if($item['id']==$post_id)
        @section('title',$item['title'])
       <div class="container p-3">
           <img src="{{$item['url']}}" class="w-100" style="height: 40vh;object-fit: cover;">
           <br>
           {!! $item['description']!!}
       </div>
        @endif
    @endforeach
@endsection

