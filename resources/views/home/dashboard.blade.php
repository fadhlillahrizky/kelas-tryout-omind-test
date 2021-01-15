@extends('layouts.master')
@section('menu')
    @include('sidebar.dashboard')
    <div class="main" style="margin-left: 230px;">
        <div class="header d-flex justify-content-between">
            <img src="../files/assets/image/burger.svg" class="ms-4">
            <div class="dflex my-auto">
                <img src="../files/assets/image/bell.svg">
                <img src="../files/assets/image/cart.svg" class="ms-2">
            </div>
        </div>
        <div class="headers ms-4 d-flex">
            <div class="headers-text">
                <h1>Selamat Pagi, Sintya</h1>
                <p style="color: #000000;">Nikmati pengalaman belajar online paling <br> lengkap, dan mudah dimengerti</p>
            </div>
            <img src="../files/assets/image/morning.png" class="align-items-end">
        </div>
        <div class="charts d-flex mt-4">
            <img src="../files/assets/image/chart.png" style="height: 270px;">
            <img src="../files/assets/image/chart-quiz.png" style="height: 270px;">
        </div>
        <div class="materi m-4">
            <h5 style="color: #000000;">Materi Saya</h5>
            <div class="mt-4 d-flex flex-wrap justify-content-between">
                <div class="me-3 mt-2">
                    <div class="sub-materi d-flex align-items-center justify-content-between p-3" style="background-color:  #6DD7F9;">
                        <div>
                            <h5>Medan Magnet</h5>
                            <p>Video . 13 jam lalu</p>
                        </div>
                        <img src="../files/assets/image/magnetic.svg">
                    </div>
                </div>
                <div class="me-3 mt-2">
                    <div class="sub-materi d-flex align-items-center justify-content-between p-3" style="background-color:  #6DD7F9;">
                        <div>
                            <h5>Medan Magnet .</h5>
                            <p>Video 13 jam lalu</p>
                        </div>
                        <img src="../files/assets/image/magnetic.svg">
                    </div>
                </div>
                <div class="me-3 mt-2">
                    <div class="sub-materi d-flex align-items-center justify-content-between p-3" style="background-color:  #6DD7F9;">
                        <div>
                            <h5>Medan Magnet .</h5>
                            <p>Video 13 jam lalu</p>
                        </div>
                        <img src="../files/assets/image/magnetic.svg">
                    </div>
                </div>
                <div class="me-3 mt-2">
                    <div class="sub-materi d-flex align-items-center justify-content-between p-3" style="background-color:  #6DD7F9;">
                        <div>
                            <h5>Medan Magnet .</h5>
                            <p>Video 13 jam lalu</p>
                        </div>
                        <img src="../files/assets/image/magnetic.svg">
                    </div>
                </div>
                <div class="me-3 mt-2">
                    <div class="sub-materi d-flex align-items-center justify-content-between p-3" style="background-color:  #6DD7F9;">
                        <div>
                            <h5>Medan Magnet .</h5>
                            <p>Video 13 jam lalu</p>
                        </div>
                        <img src="../files/assets/image/magnetic.svg">
                    </div>
                </div>
                <div class="me-3 mt-2">
                    <div class="sub-materi d-flex align-items-center justify-content-between p-3" style="background-color:  #6DD7F9;">
                        <div>
                            <h5>Medan Magnet .</h5>
                            <p>Video 13 jam lalu</p>
                        </div>
                        <img src="../files/assets/image/magnetic.svg">
                    </div>
                </div>
            </div>
        </div>
        <div class="tryout m-4">
            <div class="d-flex justify-content-between">
                <h5 style="color: #000000;">Tryout Hari Ini</h5>
                <a href="/" style="color:#30B44B;">lihat semua</a>
            </div>
            <div class="d-flex justify-content-between">
                <div class="sub-tryout d-flex align-items-center justify-content-between px-3">
                    <img src="../files/assets/image/surface1.png">
                    <div style="color: #000000;">
                        <p style="color: #000000;">Tryout UTBK 2021 #1</p>
                        <p style="color: #000000;">25 - 26 Agustus 2020</p>
                    </div>
                </div>
                <div class="sub-tryout d-flex align-items-center justify-content-between px-3">
                    <img src="../files/assets/image/surface1.png">
                    <div style="color: #000000;">
                        <p style="color: #000000;">Tryout UTBK 2021 #1</p>
                        <p style="color: #000000;">25 - 26 Agustus 2020</p>
                    </div>
                </div>
                <div class="sub-tryout d-flex align-items-center justify-content-between px-3">
                    <img src="../files/assets/image/surface1.png">
                    <div style="color: #000000;">
                        <p style="color: #000000;">Tryout UTBK 2021 #1</p>
                        <p style="color: #000000;">25 - 26 Agustus 2020</p>
                    </div>
                </div>
            </div>
        </div>
        <p>
            p
        </p>
    </div>
@endsection
