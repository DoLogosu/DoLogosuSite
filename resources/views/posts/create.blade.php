@extends('layouts.app')

@section('content')
<h1 class="text-center m-4">Create New Post</h1>
<form class="mr-4 ml-4" method="POST" action="{{ route('post.store') }}" enctype="multipart/form-data">
  @csrf
  <div class="form-group">
    <label for="title">Title:</label>
    <input type="text" class="form-control" id="title" name="title" placeholder="title">
  </div>
  <div class="form-group">
    <label for="category">Category:</label>
    <select class="form-control" id="category" name="id_category">
      @foreach($category as $item)
      <option value="{{$item['id']}}">{{$item['name']}}</option>
      @endforeach
    </select>
  </div>
  <div class="form-group row">
    <label for="description_short" class="col-sm-2 col-form-label">Short description</label>
    <div class="col-sm-10">
      <input type="text" name="description_short" class="form-control" id="description_short" placeholder="Short description">
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
      </script>

  </div>

  <input onclick="refresh(); " class="btn btn-success float-right mt-3" type="submit" value="Add">
    <input onclick="refresh();" type="button">
</form>

<script>
  function refresh() {
    var html = $("#summernote").summernote('code');
    var obj = document.getElementById('description');
    obj.value = html;
    console.log(html)
  }
</script>





@endsection
