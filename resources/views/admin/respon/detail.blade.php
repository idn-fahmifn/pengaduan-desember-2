<!-- memanggil template -->
@extends('template.template')

@section('content')

<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="card-title">{{$data->judul}}</h5>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#exampleModalCenter">
                        Tanggapi
                    </button>
                </div>

                <p class="text-muted">Tentang aduan</p>

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
                    <tbody>
                        <tr>
                            <td>Judul Pengaduan</td>
                            <td>{{$data->judul}}</td>
                        </tr>
                        <tr>
                            <td>Keterangan</td>
                            <td>{!!($data->keterangan)!!}</td>
                        </tr>
                    </tbody>
                </table>
                <img src="{{asset('storage/images/pengaduan/'.$data->dokumentasi)}}" alt="dokumentasi" width="200" class="img-fluid">
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                @if ($respon)
                    <span>Pengaduan sudah direspon</span>
                @else
                    <span>Pengaduan belum direspon</span>
                @endif
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="exampleModalCenter" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Edit Divisi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="{{route('divisi.update', $data->slug)}}" method="post">
                @csrf
                @method('put')
                <div class="modal-body">
                    <!-- form -->
                    <div class="form-group">
                        <label class="form-label">Nama divisi</label>
                        <input type="text" name="nama_divisi" value="{{$data->nama_divisi}}" required class="form-control form-lg">
                        <input type="number" value="{{$data->id}}" name="id" hidden>
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