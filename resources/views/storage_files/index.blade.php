@extends('layouts.app')
@section('title','Запитання')
@section('content')


    <form class="mr-4 ml-4" method="POST" action="{{route('storage_files.upload')}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group row">
            <label for="image" class="col-sm-2 col-form-label">Choose Image</label>
            <div class="col-sm-10">
                <input id="image" type="file" name="image">
                <input class="btn btn-success float-right mt-3" type="submit" value="Add">
            </div>
        </div>
    </form>

        <div class="container">
            <div class="row">
                @foreach($items as $item)
                    <?php
                    $trimmed = trim( $item,"public" );
                    ?>
                    <div class="col-3 p-2">
                        <div class="bg-white p-2" style="border: whitesmoke solid 5px">
                        <img style="width: 100%" src="storage{{$trimmed}}">
                        <p style="word-wrap: break-word">storage{{$trimmed}}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

@endsection
