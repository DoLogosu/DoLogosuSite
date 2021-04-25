@extends('layouts.app')
@section('title','Новини')
@section('content')
<script>
    document.getElementById("navPosts").classList.add('active');
</script>

<h1 class="text-center m-4">Список постів</h1>



@foreach($items as $item)


    @if($item["is_published"]==1&&$item['id_category']==1)

    <div class="col">
        <div class="card">
            <div class="row g-0 h-auto">
                <div class="col-md-8">
                    <div class="card-body">
                        <h3 class="card-title">{{$item['title']}}</h3>
                        <H5 CLASS="card-title"> Category: {{$item->Category["name"]}}</H5>
                        <p class="card-text">{!!$item['description_short']!!}</p>
                        <small class="text-muted">Posted on {{date('F d, Y', strtotime($item['created_at']))}}
                            at {{date('H:i', strtotime($item['created_at']))}}</small></p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">

                                <a href="/posts/view/{{$item['id']}}"><div class="btn btn-sm btn-primary">View</div></a>

                        </div>
                        <small class="text-muted"><input style="display: none" name="id" id="id" value="{{$item['id']}}"></small>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endif

@endforeach



@endsection
