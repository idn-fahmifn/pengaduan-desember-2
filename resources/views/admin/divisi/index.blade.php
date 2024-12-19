<!-- memanggil template -->
@extends('template.template')

@section('content')

<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="card-title">Divisi</h5>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#exampleModalCenter">
                        Tambah Divisi
                    </button>
                </div>
                <p>Data Semua Divisi</p>

                @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Berhasil!</strong> {{session('success')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif

                @if ($errors->any())
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Whoops!</strong>
                    @foreach ($errors->all() as $item)
                    <ol>
                        <li>{{$item}}</li>
                    </ol>
                    @endforeach
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif

                <table id="zero-conf" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>Nama Divisi</th>
                            <th>Pilihan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                        <tr>
                            <td>{{$item->nama_divisi}}</td>
                            <td>
                                <form action="#" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn text-danger rounded"><i data-feather="trash-2"></i></button>
                                    <a href="" class="btn text-info"><i data-feather="info"></i></a>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Nama Divisi</th>
                            <th>Pilihan</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="exampleModalCenter" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Tambah Data Divisi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="{{route('divisi.store')}}" method="post">
                @csrf
                <div class="modal-body">
                    <!-- form -->
                    <div class="form-group">
                        <label class="form-label">Nama divisi</label>
                        <input type="text" name="nama_divisi" required class="form-control form-lg" placeholder="Masukan nama divisi">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection