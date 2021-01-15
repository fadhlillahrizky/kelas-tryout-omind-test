@extends('layouts.master')
@section('menu')
    @include('sidebar.dashboard')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Materi Saya</h4>
                            <p class="card-description"> Semangat belajar</p>
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th> #</th>
                                    <th> Materi</th>
                                    <th> Progress</th>
                                    <th> Deskripsi</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($myMateri as $item)
                                <tr>
                                    <td> {{$item['id']}}</td>
                                    <td> {{$item['materi_detail']['name']}}</td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: {{$item['progress']}}%"
                                                 aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td> {{$item['materi_detail']['description']}}</td>
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
