@extends('news.template.headfoot')

@section('content')
    <section class="home_contact_area">
        <div class="left_img"><img src="{{url('assets/images/offer/Mudah.jpg')}}" style="height: 680px"></div>
        <div class="h_right_form">
            <div class="h_form_inner">
                <h4>Ada Berita Apa?</h4>
                <form class="row home_contact_form" action="addnews" method="post" id="contactForm" novalidate="novalidate">
                    {{ csrf_field() }}
                    <div class="form-group col-md-12">
                        <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukkan Judul" autocomplete="off">
                    </div>
                    <div class="form-group col-md-12">
                        <textarea class="form-control" name="isi" id="isi" rows="1" placeholder="Isi Berita"></textarea>
                    </div>
                    <div class="form-group col-md-12">
                        <button type="submit" value="submit" class="btn submit_btn form-control">Kirim</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    @endsection
