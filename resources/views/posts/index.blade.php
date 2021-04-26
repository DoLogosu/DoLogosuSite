@extends('layouts.app')
@section('title','Новини')
@section('content')


<div class="container ">
    <div class="row">
        <div class="col-12 pt-3 pb-2 pl-4 mb-2">
            <h1>Новини : </h1>
        </div>
        @foreach($items as $item)
            @if($item->is_published==1&&$item->id_category==1)
                <div class="col-12 news-bock mb-1">
                    <div class="col-12">
                        <h3 class="ml-1" style="font-weight: normal">{{$item->title}}</h3>
                        <h6 style="font-weight: lighter">{{$item->description_short}}</h6>
                        <small class="text-muted float-right">Додано {{date('F d, Y', strtotime($item->created_at))}}
                            в {{date('H:i', strtotime($item->created_at))}}</small>
                        <a href="/posts/view/{{$item->id}}" class="stretched-link"></a>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
</div>




@endsection
