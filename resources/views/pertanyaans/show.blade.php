@extends('layouts.app')

@push('script-head')
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
@endpush

@section('content')
<div class="container">
    @if (session('status'))
    <div class="alert alert-success mt-3">
        {{ session('status') }}
    </div>
    @endif
    <h4>
        {{$pertanyaan->judul}}
    </h4>

    <hr>

    {{-- Pertanyaan --}}
    <div class="row">
        <div class="col-1 d-flex ">
            <div class="row mb-1 border border-right-0">
                <form action="{{ route('pertanyaan.like') }}" method="post">
                    @csrf
                <input type="hidden" name="user_id" id="" value="{{ auth::user()->id }}">
                <input type="hidden" name="pertanyaan_id" id="" value="{{ $pertanyaan->id }}">
                    <button class="btn btn-light" type="submit" name="submit" value="up"><img src="/assets/up.png" alt="UP"
                            class="img-fluid" ></button>
                    <p class="m-auto text-center"> {{$pertanyaan->poin->sum('poin')}} </p>
                    <button class="btn btn-light" value="down" name="submit" type="submit"><img src="/assets/down.png" alt="Down"
                            class="img-fluid" ></button>    
                </form>
            </div>
        </div>
        <div class="col-11 card mb-1 border-left-0">
            <div class="card-body">
                <p class="card-text">{!! $pertanyaan->isi !!}</p>
                <h6 class="d-flex">
                    <p class="my-auto mr-2">Tags: </p>
                    <p class="badge badge-secondary my-auto">{{$pertanyaan->tags}}</p>
                    <p class="m-auto">Created {{$pertanyaan->created_at}}</p>
                    <p class="m-auto">Updated {{$pertanyaan->updated_at}}</p>
                    <a href="#" class="ml-auto"> {{$pertanyaan->author->name}} &#9679; {{$pertanyaan->author->poin->sum('poin')}}</a>
                </h6>
            </div>
        </div>
    </div>
    <br>

    {{-- Komentar Pertanyaan --}}
    <div class="row">
        <div class="col-2 border-right">

        </div>
        <div class="col-9 ml-2">

            {{-- @foreach ($pertanyaan->komentars as $komentar) --}}
            @foreach ($pertanyaan->komentars as $komentar)
            <div class="border-bottom">
                <span>
                    {{$komentar->isi}} --
                </span>
                <a href="#">{{ $komentar->author->name }}</a>
            </div>
            @endforeach
            <form class="mt-1" action="{{ route('komentar.store') }}" method="POST">
                @csrf
                <div class="form-row align-items-center">
                    <input type="hidden" name="pertanyaan_id" id="pertanyaan_id" value="{{ $pertanyaan->id }}">
                    <input type="hidden" name="user_id" id="user_id" value="{{ Auth::user()->id }}">
                    <div class="input-group">
                        <label class="sr-only" for="isi">isi</label>
                        <input type="text" class="form-control" name="isi" placeholder="Tulis komentar"
                            style="border-top: none; border-right: none;border-left: none "></>
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-info text-light">&#10003;</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <h5>
        Jawaban <a href="{{route('jawaban.create')}}" class="btn btn-light border">&#9998;</a>
    </h5>
    <hr>

    {{-- Jawaban --}}

    @foreach ($pertanyaan->jawabans as $jawaban)
    <div class="row mt-2">

        <div class="col-1 d-flex">
            <div class="row mb-1 border border-right-0">
                <form action="{{ route('jawaban.like') }}" method="post">
                    @csrf
                <input type="hidden" name="user_id" id="" value="{{ $jawaban->author->id }}">
                <input type="hidden" name="jawaban_id" id="" value="{{ $jawaban->id }}">
                    <button class="btn btn-light" type="submit" name="submit" value="up"><img src="/assets/up.png" alt="UP"
                            class="img-fluid" ></button>
                    <p class="m-auto text-center"> {{$jawaban->poin->sum('poin')}} </p>
                    <button class="btn btn-light" value="down" name="submit" type="submit"><img src="/assets/down.png" alt="Down"
                            class="img-fluid" ></button>    
                </form>
                {{-- <button class="btn btn-light"><img src="/assets/up.png" alt="UP" class="img-fluid"></button>
                <p class="m-auto">0</p>
                <button class="btn btn-light"><img src="/assets/down.png" alt="Down" class="img-fluid"></button> --}}
            </div>
        </div>
        <div class="col-11 card mb-1 border-left-0">
            <div class="card-body">
                <p class="card-text">{!! $jawaban->isi !!}</p>
                <h6 class="d-flex">

                    <p class="m-auto">Created {{$jawaban->created_at}}</p>
                    <p class="m-auto">Updated {{$jawaban->updated_at}}</p>
                    <a href="#" class="ml-auto">{{$jawaban->author->name}} &#9679; {{$jawaban->author->poin->sum('poin')}}</a>
                </h6>
            </div>
        </div>

    </div>
    <br>

    {{-- Komentar Jawaban --}}
    <div class="row mb-4">
        <div class="col-2 border-right">

        </div>
        <div class="col-9 ml-2">


            {{-- @dump($jawaban->komentarjawabans) --}}
            @foreach ($jawaban->komentarjawabans as $komentarjawaban)
            <div class="border-bottom">
                <span>
                    {{$komentarjawaban->isi}} --
                </span>
                <a href="#">{{ $komentarjawaban->author->name }}</a>
            </div>
            @endforeach
            <form class="mt-1" action="{{ route('komentarjawaban.store') }}" method="POST">
                @csrf
                <div class="form-row align-items-center">
                    <input type="hidden" name="jawaban_id" id="jawaban_id" value="{{ $jawaban->id }}">
                    <input type="hidden" name="user_id" id="user_id" value="{{ Auth::user()->id }}">
                    <div class="input-group">
                        <label class="sr-only" for="isi">isi</label>
                        <input type="text" class="form-control" name="isi" placeholder="Tulis komentar"
                            style="border-top: none; border-right: none;border-left: none "></>
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-info text-light">&#10003;</button>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>
    @endforeach


    {{-- TextArea --}}
    <div class="row">
        {{-- <div class="col-1"></div> --}}
        <form class="mt-1 col-auto" action="{{route('jawaban.store')}}" method="POST" style="width: 100%">
            @csrf
            <div class="form-row align-items-center">
                <input type="hidden" name="pertanyaan_id" id="pertanyaan_id" value="{{ $pertanyaan->id }}">
                <input type="hidden" name="user_id" id="user_id" value="{{ Auth::user()->id }}">
                <div class="input-group">
                    <label class="sr-only" for="isi">isi</label>
                    <textarea class="form-control my-editor" placeholder="Isi Jawaban Disini" rows="3"
                        name="isi"></textarea>
                    <button type="submit" class="btn btn-info text-light btn-block">Kirim Jawaban</button>
                </div>
            </div>
        </form>
    </div>


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