<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    {{-- <div class="card-body">
        <div class="card mb-3">


            <div class="card-body"> --}}
                <!-- table head dark -->
                {{-- <div class="table-responsive"> --}}
                    <h3>Laporan Peminjaman Laptop</h3>

                    {{-- <table class="table mb-0" border="1">
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
                                {{-- </tr>
                            @empty
                            @endforelse
                        </tbody> --}}
                    {{-- </table> --}}
                    @forelse ($pinjaman as $key=> $item)


                        <p>
                        </h6>  No Pinjam     :       {{$item->no_pinjam}} </h6> <br>
                        </h6>  Nama          :       {{$item->nama}} </h6> <br>
                        </h6>  Keterangan    :       {{$item->keterangan}} </h6> <br>
                        </h6>  No Laptop     :       {{$item->no_laptop}} </h6> <br>
                        </h6>  Tgl Pinjam    :       {{$item->tgl_pinjam}} </h6> <br>
                        </h6>  Paraf         :                              </h6> <br>
                        </p>


                     @empty
                      @endforelse
                </div>
            </div>
        </div>
    </div>
