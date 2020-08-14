@extends('layouts.app')

@push('script-head')
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
@endpush

@section('content')
<div class="container">

  <h4 class="text-center t">
    Tulis Pertanyaanmu Disini
  </h4>

<form action="{{ route('store') }}" method="POST">
  @csrf
    <div class="form-group">
      <label for="judul">Judul</label>
      <input type="judul" class="form-control" id="judul" name="judul" placeholder="Masukkan judul..">
    </div>
    <div class="form-group">
      <label for="isi">Isi</label>
      <textarea class="form-control my-editor" id="isi" name="isi" rows="3" name="isi">{!! old('isi', $isi ?? '') !!}</textarea>
    </div>
    <div class="form-group">
      <label for="tags">Tags</label>
      <input type="text" class="form-control" id="tags" name="tags" placeholder="Masukkan tags..">
    </div>
    <input type="hidden" class="form-control" id="user-id" name="user_id" placeholder="Masukkan User ID" value="{{Auth::user()->id}}">
    

      {{-- <div class="row justify-content-center text-light my-1"> --}}
        <button type="submit" class="btn btn-primary btn-block">Buat Pertanyaan</button>
      {{-- </div> --}}

  </form>
</div>
@endsection

@push('scripts')
<script>
  var editor_config = {
      path_absolute : "/",
      selector: "textarea.my-editor",
      plugins: [
        "advlist autolink lists link image charmap print preview hr anchor pagebreak",
        "searchreplace wordcount visualblocks visualchars code fullscreen",
        "insertdatetime media nonbreaking save table contextmenu directionality",
        "emoticons template paste textcolor colorpicker textpattern"
      ],
      toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
      relative_urls: false,
      file_browser_callback : function(field_name, url, type, win) {
        var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
        var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;
  
        var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
        if (type == 'image') {
          cmsURL = cmsURL + "&type=Images";
        } else {
          cmsURL = cmsURL + "&type=Files";
        }
  
        tinyMCE.activeEditor.windowManager.open({
          file : cmsURL,
          title : 'Filemanager',
          width : x * 0.8,
          height : y * 0.8,
          resizable : "yes",
          close_previous : "no"
        });
      }
    };
  
    tinymce.init(editor_config);
</script>
@endpush