@extends('layouts.master')

@section('content')
<div class="card-body">
    <div class="card mb-3">


        <div class="card-body">
            <!-- table head dark -->
            <form action="/pinjaman/edit/{{$pinjaman->id}}" method="post">
                @csrf

                    {{-- <div class="form-group">
                        <label for="no_pinjam">no_pinjam</label>
                        <input type="text" class="form-control" value="{{$kd}}"id="no_pinjam" name="no_pinjam">
                    </div> --}}


                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="{{$pinjaman->nama}}">
                </div>
                @error('nama')
                <div class="alert-danger">{{$message}}</div>
                  @enderror
                <div class="form-group">
                    <label for="keterangan">Satker</label>
                    <input type="text" class="form-control" id="keterangan" name="keterangan"value="{{$pinjaman->nama}}">
                </div>
                @error('keterangan')
                <div class="alert-danger">{{$message}}</div>
            @enderror
                <div class="form-group">
                    <label for="no_laptop">No laptop</label>
                    <input type="text" class="form-control" id="no_laptop" name="no_laptop"value="{{$pinjaman->no_laptop}}">
                </div>
                @error('no_laptop')
                <div class="alert-danger">{{$message}}</div>
            @enderror
                <div class="form-group">
                    <label for="tgl_pinjam">Tanggal Pinjam</label>
                    <input type="text" class="form-control" id="datepicker" name="tgl_pinjam"value="{{$pinjaman->tgl_pinjam}}">
                </div>
                @error('tgl_pinjam')
                <div class="alert-danger">{{$message}}</div>
            @enderror
                <div class="form-group">
                    <label for="tgl_kembali">Tanggal Kembali</label>
                    <input type="text" class="form-control" id="datepicker2" name="tgl_kembali"value="{{$pinjaman->tgl_kembali}}">
                </div>

                <button class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button class="btn btn-primary">Simpan</button>
            </form>



        </div>
    </div>
</div>



<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Pinjaman</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

            </div>
        </div>
    </div>
</div>

<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
<script>
    $(function() {
        $("#datepicker").datepicker();
    });
    $(function() {
        $("#datepicker2").datepicker();
    });
</script>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
<script>
    $(function() {
        $("#datepicker").datepicker();
    });
    $(function() {
        $("#datepicker2").datepicker();
    });
@endsection
