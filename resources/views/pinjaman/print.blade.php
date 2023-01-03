
    <div class="card-body">
        <div class="card mb-3">


            <div class="card-body">
                <!-- table head dark -->
                <div class="table-responsive">
                    <h3>Laporan Peminjaman Laptop</h3>

                    <table class="table mb-0" border="1">
                        <thead>
                            <tr>
                                <th width="5%">NO</th>
                                <th>No Pinjam</th>
                                <th>NAMA</th>
                                <th>KETERANGAN</th>
                                <th>NO LAPTOP</th>
                                <th>TGL PINJAM</th>
                                <th>TANGGAL KEMBALI</th>
                                <th width="25%">Paraf</th>
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
                                    <td> </td>
                                        {{-- <form action="/category/delete/{{ $item->id }}" method="post"> --}}
                                        {{-- @csrf --}}
                                        {{-- <a href="/category/{{ $item->id }}" class="btn btn-info btn-sm">Print</a> --}}


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

    <!-- Button trigger modal -->


    <!-- Modal -->

