@extends('layouts.master')

@section('content')
    <div class="card-body">
        <div class="card mb-3">
            <div class="card-header">
                {{-- <a href="{{ url('pinjamaan') }}"type="button" class="btn btn-outline-primary block">
                    Beli Produk
                </a> --}}
                <button type="button" class="btn btn-outline-primary block" data-toggle="modal" data-target="#exampleModal">
                    Tambah
                </button>
            </div>

            <div class="card-body">
                <!-- table head dark -->
                <div class="table-responsive">
                    <table class="table mb-0" id="table_transaction">
                        <thead>
                            <tr>
                                <th width="5%">NO</th>
                                <th>No Pinjam</th>
                                <th>NAMA</th>
                                <th>KETERANGAN</th>
                                <th>NO LAPTOP</th>
                                <th>TGL PINJAM</th>
                                <th>TANGGAL KEMBALI</th>
                                <th width="25%">ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($pinjaman as $key=> $item)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $item->no_pinjam }}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->keterangan }}</td>
                                    <td>{{ $item->no_laptop }}</td>
                                    <td>{{ $item->tgl_pinjam }}</td>
                                    <td>{{ $item->tgl_kembali }}</td>
                                    <td>
                                        {{-- <form action="/category/delete/{{ $item->id }}" method="post"> --}}
                                        {{-- @csrf --}}
                                        {{-- <a href="/category/{{ $item->id }}" class="btn btn-info btn-sm">Print</a> --}}
                                        <button id="editData" class="btn btn-warning btn-sm">Edit</a>
                                        <button id="editData" class="btn btn-info btn-sm">print</a>
                                            <button onclick="handleDelete({{ $item->id }})"
                                                class="btn btn-danger btn-sm">Delete</button>

                                            {{-- <input type="submit" class="btn btn-danger btn-sm" value="delete"> --}}
                                            {{-- </form> --}}
                                </tr>
                            @empty
                            @endforelse
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>

    @forelse ($pinjaman as $key=> $item)
        <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Hapus</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Apakah Yakin Untuk Dihapus
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak, Tutup</button>
                        <a href="pinjaman/{{$item->id}}" class="btn btn-danger">Ya Hapus</a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    @empty
    @endforelse
    </div>
    @endsection
    @section('scripts')
    <script>
        function handleDelete() {

            $('#deleteModal').modal('show')
        }
    </script>

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
                    <form action="{{ url('/peminjaman') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="no_pinjam">No Pinjam</label>
                            <input type="text" class="form-control" id="no_pinjam" name="no_pinjam">
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama">
                        </div>
                        <div class="form-group">
                            <label for="keterangan">Keterangan</label>
                            <input type="text" class="form-control" id="keterangan" name="keterangan">
                        </div>
                        <div class="form-group">
                            <label for="no_laptop">No laptop</label>
                            <input type="text" class="form-control" id="no_laptop" name="no_laptop">
                        </div>
                        <div class="form-group">
                            <label for="tgl_pinjam">Tanggal Pinjam</label>
                            <input type="text" class="form-control" id="datepicker" name="tgl_pinjam">
                        </div>
                        <div class="form-group">
                            <label for="tgl_kembali">Tanggal Kembali</label>
                            <input type="text" class="form-control" id="datepicker2" name="tgl_kembali">
                        </div>

                        <button class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button class="btn btn-primary">Simpan</button>
                    </form>
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