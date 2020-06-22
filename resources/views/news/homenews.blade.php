@extends('news.template.headfoot')

@section('content')
<section class="home_banner_area">
    <div class="banner_inner d-flex align-items-center">
        <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
        <div class="container">
            <div class="banner_content text-center">
                <h3 style="color: #212529">PORTAL<br>BERITA MASA DEPAN</h3>
                <h5 style="color: #ca2819">Tercepat. Terlengkap. Terpercaya.</h5>
            </div>
        </div>
    </div>
</section>

<section class="offer_area p_120">
    <div class="container">
        <div class="offer_title">
            <h5>BERITA TERKINI</h5>
        </div>
        <div class="row offer_inner">
            <!-- start here -->
            @foreach(App\news::all() as $data)
                @if($data->status == 'published')
                    <div class="col-lg-4" style="padding-bottom: 5%">
                        <div class="offer_item">
                            <a href="#">
                                <img class="img-fluid" src="assets/images/offer/Mudah.jpg" alt="">
                                <div class="offer_text">
                                    <h4>{{$data->judul}}</h4>
                                    <p>{{$data->isi}}</p>
                                </div>
                            </a>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
</section>
@endsection
