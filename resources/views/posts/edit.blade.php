@extends('layouts.app')

@section('content')


    <h1 class="text-center m-4">Edit Post</h1>



@foreach($items as $item)
@if($item['id']==$id)
    <form class="mr-4 ml-4" method="POST" action="{{ route('post.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" class="form-control" id="title" name="title" value="{{$item['title']}}">
        </div>
        <div class="form-group">
            <label for="category">Category:</label>
            <select class="form-control" id="category"  name="id_category">
                    @foreach($categories as $category)
                        @if($category['id']==$item['id_category'])
                        <option value="{{$item['id_category']}}">{{$category['name']}} (за умовчуванням)</option>
                        @endif
                @endforeach
                @foreach($categories as $category)
                    <option value="{{$category['id']}}">{{$category['name']}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group row">
            <label for="description_short" class="col-sm-2 col-form-label">Short description</label>
            <div class="col-sm-10">
                <input type="text" name="description_short" class="form-control" id="description_short" value="{{$item['short_description']}}" placeholder="Short description">
            </div>
        </div>
        <div class="form-group row">
            <label for="image" class="col-sm-2 col-form-label">Choose Image</label>
            <div class="col-sm-10">
                <input id="image" type="file" name="image">
            </div>
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <input style="display: none" id="description" name="description"></input>
            <div id="summernote"></div>
            <script>
                $('#summernote').summernote({
                    placeholder: 'Hello stand alone ui',
                    tabsize: 2,
                    height: 120,
                    toolbar: [
                        ['style', ['style']],
                        ['font', ['bold', 'underline', 'clear']],
                        ['color', ['color']],
                        ['para', ['ul', 'ol', 'paragraph']],
                        ['table', ['table']],
                        ['insert', ['link', 'picture', 'video']],
                        ['view', ['fullscreen', 'codeview', 'help']]
                    ]
                });
                function refresh() {
                    var html = $("#summernote").summernote('code');
                    var obj = document.getElementById('description');
                    obj.value = html;
                    console.log(html);
                }
                $("#summernote").summernote("code", "{{$item['description']}}");
            </script>
        </div>
        <input onclick="refresh(); " class="btn btn-success float-right mt-3" type="submit" value="Add">
    </form>
@endif
@endforeach







@endsection
