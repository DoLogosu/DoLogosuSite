@extends('layouts.app')
@section('title','Музика')
@section('content')
<script>
    document.getElementById("navMusic").classList.add('text-white');
</script>


<h1>Музика</h1>

@foreach($items as $item)
<form method="POST" action="/posts/view">
    @csrf
    @if($item["is_published"]==1&&$item['id_category']==4)

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

                                <input class="btn btn-sm btn-outline-secondary" type="submit" value="View">
                                <?php//<input  class="btn btn-sm btn-outline-secondary" type="submit" value="View">

                        </div>
                        <small class="text-muted"><input style="display: none" name="id" id="id" value="{{$item['id']}}"></small>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endif

        </form>
    @endforeach

@endsection
