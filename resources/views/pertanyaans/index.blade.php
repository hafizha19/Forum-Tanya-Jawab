@include('layouts.navbar')

<!-- Masthead-->
<header class="masthead">
    <div class="container h-100">
        <div class="row h-100 align-items-center justify-content-center text-center">
            <div class="col-5 align-self-end">
                @if (session('status'))
                <div class="alert alert-success mt-3">
                    {{ session('status') }}
                </div>
                @endif
            </div>
            <div class="col-lg-10 align-self-end">
                <h1 class="text-uppercase text-white font-weight-bold">Forum Tanya Jawab Terinteraktif
                </h1>
                <hr class="divider my-4" />
            </div>
            <div class="col-lg-8 align-self-baseline">
                <blockquote class="blockquote text-white-75 font-weight-light mb-5">
                    <p class="mb-0">Belajar dari kemarin, hidup untuk sekarang, berharap untuk besok. Hal yang paling
                        penting adalah jangan berhenti bertanya.</p>
                    <footer class="blockquote-footer">Albert Einstein</footer>
                </blockquote>
                </p>
                <a class="btn btn-primary btn-xl js-scroll-trigger" href="#pertanyaan">Temukan Jawaban Pertanyaanmu</a>
            </div>
        </div>
    </div>
</header>


<!-- Pertanyaan-->
<section class="page-section mt-0" id="pertanyaan">
    <div class="container-fluid">
        <h2 class="text-center mt-0">Daftar Pertanyaan</h2>
        <hr class="divider my-4" />
        <div class="row">
            <div class="col-md-2 text-center border-right">
                <li class="nav-item" style="list-style: none;">
                    <a class="nav-link" href="#">Pertanyaan</a>
                    <a class="nav-link" href="#">Tag 1</a>
                    <a class="nav-link" href="#">Tag 2</a>
                    <a class="nav-link" href="#">Tag 3</a>
                </li>
            </div>
            <div class="col-md-9 ml-1">
                @foreach ($pertanyaan ?? '' as $tanya)
                <div class="row">
                    <div class="col-1 d-flex ">
                        <div class="row mb-1 border border-right-0">
                            <form action="{{ route('pertanyaan.like')}}" method="post">
                                @csrf
                            <input type="hidden" name="user_id" id="" value="{{ $tanya->author->id }}">
                            <input type="hidden" name="pertanyaan_id" id="" value="{{ $tanya->id }}">
                                <button class="btn btn-light" type="submit" name="submit" value="up"><img src="assets/up.png" alt="UP"
                                        class="img-fluid" ></button>
                                <p class="m-auto text-center"> {{$tanya->poin->sum('poin')}} </p>
                                <button class="btn btn-light" value="down" name="submit" type="submit"><img src="assets/down.png" alt="Down"
                                        class="img-fluid" ></button>    
                            </form>
                        </div>
                    </div>
                    <div class="col-11 card mb-1 border-left-0">
                        <div class="card-body">
                            <h4 class="card-title">{{$tanya->judul}} </h4>
                            <p class="card-text">{!! $tanya->isi !!} - <a href="#" class="font-weight-light "
                                    style="color: #50a3a4 ">{{$tanya->author->name}} &#9679; {{$tanya->author->poin->sum('poin')}}</a></p>
                            <h6 class="d-flex">
                                <p class="my-auto mr-2">Tags: </p>
                                @php
                                $tags = $tanya->tags;
                                $tagsArray = explode(',', $tags);

                                @endphp
                                @foreach ($tagsArray as $tag)
                                <p class="badge badge-secondary my-auto mr-1"> {{ $tag }} </p>
                                @endforeach


                                <p class="m-auto">Created {{$tanya->created_at}}</p>
                                <p class="m-auto">Updated {{$tanya->updated_at}}</p>
                                <a href="/pertanyaans/{{$tanya->id}}" class="btn btn-primary ml-auto">Detail</a>
                            </h6>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

@include('layouts.footer')