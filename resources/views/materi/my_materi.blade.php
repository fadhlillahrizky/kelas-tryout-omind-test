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
        <div class="materi m-4">
            <div class="d-flex align-items-center justify-content-between">
                <h5 style="color: #000000;">Materi Saya</h5>
                <!-- button tambah materi -->
                <button type="button" class="btn green" data-bs-toggle="modal" data-bs-target="#tambah">
                    Tambah materi
                </button>
            </div>
            <div class="mt-4 d-flex flex-wrap justify-content-between">
                <!-- card materi -->
                @foreach($myMateri as $item)
                    <div class="btn mt-3 sub-materi d-flex flex-column align-items-center justify-content-between p-3"
                         style="background-color:  #6DD7F9;">
                        <div class="d-flex">
                            <div>
                                <h5>{{$item['title']}}</h5>
                                <p>{{$item['type']}} . {{$item['description']}}</p>
                            </div>
                            <img src="../files/assets/image/magnetic.svg">
                        </div>
                        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                            <button type="button" class="btn green" data-bs-toggle="modal" data-bs-target="#edit">Edit
                            </button>
                            <button type="button" class="btn btn-secondary">Delete</button>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <p>
            p
        </p>
    </div>

    <!-- Modal tambah-->
    <div class="modal fade" id="tambah" tabindex="-1" aria-labelledby="tambahLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="/add-materi" method="POST">
                    {{ csrf_field() }}
                    <div class="modal-header">
                        <h5 class="modal-title" id="tambahLabel">Tambah Materi</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Judul</span>
                            </div>
                            <input type="text" id="title" name="title" class="form-control"
                                   placeholder="Masukkan judul..."
                                   aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupSelect01">Tipe materi</label>
                            <select class="form-select" id="type" name="type">
                                <option selected>Choose...</option>
                                <option value="foto" style="color: #000000;">Foto</option>
                                <option value="video" style="color: #000000;">Video</option>
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Deskripsi</span>
                            </div>
                            <input type="text" class="form-control" id="description" placeholder="Masukkan durasi..."
                                   aria-label="Username" aria-describedby="basic-addon1" name="description">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn green">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Modal edit-->
    <div class="modal fade" id="edit" tabindex="-1" aria-labelledby="editLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editLabel">Edit Materi</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Judul</span>
                        </div>
                        <input type="text" class="form-control" placeholder="Masukkan judul..." aria-label="Username"
                               aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="inputGroupSelect01">Tipe materi</label>
                        <select class="form-select" id="inputGroupSelect01">
                            <option selected>Choose...</option>
                            <option value="foto" style="color: #000000;">Foto</option>
                            <option value="video" style="color: #000000;">Video</option>
                        </select>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Durasi</span>
                        </div>
                        <input type="text" class="form-control" placeholder="Masukkan durasi..." aria-label="Username"
                               aria-describedby="basic-addon1">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="button" class="btn green">Simpan</button>
                </div>
            </div>
        </div>
    </div>
@endsection
