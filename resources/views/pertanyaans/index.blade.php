@include('layouts.navbar')

<!-- Masthead-->
<header class="masthead">
    <div class="container h-100">
        <div class="row h-100 align-items-center justify-content-center text-center">
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
<section class="page-section" id="pertanyaan">
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
                <div class="row">
                    <div class="col-1 d-flex ">
                        <div class="row mb-1 border border-right-0">
                            <button class="btn btn-light"><img src="assets/up.png" alt="UP" class="img-fluid"></button>
                            <p class="m-auto">Nilai</p>
                            <button class="btn btn-light"><img src="assets/down.png" alt="Down" class="img-fluid"></button>
                        </div>
                    </div>
                    <div class="col-11 card mb-1 border-left-0">
                        <div class="card-body">
                            <h4 class="card-title">Judul</h4>
                            <p class="card-text">Isi : Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque ut illum magnam explicabo facilis deleniti! Sapiente temporibus laborum reprehenderit fugiat laudantium odit eos esse nesciunt minus, ut deleniti optio sunt.</p>
                            <h6 class="d-flex">
                                <p class="my-auto mr-2">Tags: </p>
                                <p class="badge badge-secondary my-auto">New</p> 
                                <p class="badge badge-secondary my-auto">New</p> 
                                <p class="badge badge-secondary my-auto">New</p> 
                                <p class="m-auto">Created 11/11/11</p>
                                <p class="m-auto">Updated 11/11/11</p>
                                <button class="btn btn-primary ml-auto">Detail
                            </button>
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-1 d-flex ">
                        <div class="row mb-1 border border-right-0">
                            <button class="btn btn-light"><img src="assets/up.png" alt="UP" class="img-fluid"></button>
                            <p class="m-auto">Nilai</p>
                            <button class="btn btn-light"><img src="assets/down.png" alt="Down" class="img-fluid"></button>
                        </div>
                    </div>
                    <div class="col-11 card mb-1 border-left-0">
                        <div class="card-body">
                            <h4 class="card-title">Judul</h4>
                            <p class="card-text">Isi : Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque ut illum magnam explicabo facilis deleniti! Sapiente temporibus laborum reprehenderit fugiat laudantium odit eos esse nesciunt minus, ut deleniti optio sunt.</p>
                            <h6 class="d-flex">
                                <p class="my-auto mr-2">Tags: </p>
                                <p class="badge badge-secondary my-auto">New</p> 
                                <p class="badge badge-secondary my-auto">New</p> 
                                <p class="badge badge-secondary my-auto">New</p> 
                                <p class="m-auto">Created 11/11/11</p>
                                <p class="m-auto">Updated 11/11/11</p>
                                <button class="btn btn-primary ml-auto">Detail
                            </button>
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-1 d-flex ">
                        <div class="row mb-1 border border-right-0">
                            <button class="btn btn-light"><img src="assets/up.png" alt="UP" class="img-fluid"></button>
                            <p class="m-auto">Nilai</p>
                            <button class="btn btn-light"><img src="assets/down.png" alt="Down" class="img-fluid"></button>
                        </div>
                    </div>
                    <div class="col-11 card mb-1 border-left-0">
                        <div class="card-body">
                            <h4 class="card-title">Judul</h4>
                            <p class="card-text">Isi : Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque ut illum magnam explicabo facilis deleniti! Sapiente temporibus laborum reprehenderit fugiat laudantium odit eos esse nesciunt minus, ut deleniti optio sunt.</p>
                            <h6 class="d-flex">
                                <p class="my-auto mr-2">Tags: </p>
                                <p class="badge badge-secondary my-auto">New</p> 
                                <p class="badge badge-secondary my-auto">New</p> 
                                <p class="badge badge-secondary my-auto">New</p> 
                                <p class="m-auto">Created 11/11/11</p>
                                <p class="m-auto">Updated 11/11/11</p>
                                <button class="btn btn-primary ml-auto">Detail
                            </button>
                            </h6>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

@include('layouts.footer')