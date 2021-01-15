@extends('layouts.master')
@section('menu')
    @include('sidebar.dashboard')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Semua Materi</h4>
                            <p class="card-description"> Pilih materi yang kamu inginkan</p>
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th> #</th>
                                    <th> Materi</th>
                                    <th> Harga</th>
                                    <th> Deskripsi</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($allMateri as $item)
                                <tr>
                                    <td> {{$item['id']}}</td>
                                    <td> {{$item['name']}}</td>
                                    <td> {{$item['price']}}</td>
                                    <td> {{$item['description']}}</td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
