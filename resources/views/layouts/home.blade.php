@extends('layouts.master')

@section('content')
<style>
.title{
    /* display: block; */
    margin-left: auto;
    margin-right: auto;
}
.center {
    display: block;
    margin-left: auto;
    margin-right: auto;
    /* width: 50%; */
  }
  .large{
    font-weight: bold;
    font-size: 15px;
    color: black;
  }
  /* img{
    width: 10;
    height: 10;
  } */
  </style>
    <div class="card-body">
        <div class="main" id="main-three-columns">
            <div class="left" id="main-left">
                <div class="post">
                    <div class="post-title">
                        <h2 class="title">INFOLAHTA</h2>
                    </div>
                    {{-- <div class="post-date"></div> --}}
                    <div class="post-body">
                        <p><img src="/assets/img/logo_infolahta-removebg-preview.png" width="25%" class="center "  /></p>
                        <p class="large"> Informasi dan Pengolahan Data (INFOLAHTA) Sesko TNI merupakan suatu badan eselon
                            pelayanan sebagai pembantu utama Komandan Sesko TNI di bidang pembinaan informasi dan pengolahan
                            data Sesko TNI.
                            Infolahta Sesko TNI adalah satuan kerja baru hasil validasi organisasi berdasarkan Peraturan
                            Panglima TNI Nomor 28 tahun 2020. Sesuai dengan Peraturan Panglima TNI Nomor Perpang 28 tahun
                            2020 tentang Pokok-pokok Organisasi dan Prosedur Sekolah Staf dan Komando Tentara Nasional
                            Indonesia.
                        </p>
                        {{-- <a href="#" class="more">Read more &#187;</a> </div> --}}
                    </div>
                    <div class="content-separator"></div>
                    <div class="clearer">&nbsp;</div>
                </div>
            </div>
        @endsection
