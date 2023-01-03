<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <title>Document</title>

</head>
<body>
    <div class="card-body">
        <div class="card mb-3">


            <div class="card-body">
                {{-- <img src="/assets/img/logo_infolahta-removebg-preview.png" width="30" height="30"> --}}
                <!-- table head dark -->

                    <h4>Peminjaman Laptop</h4>

                    @forelse ($pinjaman as $key=> $item)


                        <pre>
 </h6>  No Pinjam     :       {{$item->no_pinjam}} </h6> <br>
 </h6>  Nama          :       {{$item->nama}} </h6> <br>
 </h6>  Satuan Kerja  :       {{$item->keterangan}} </h6> <br>
 </h6>  No Laptop     :       {{$item->no_laptop}} </h6> <br>
 </h6>  Tgl Pinjam    :       {{$item->tgl_pinjam}} </h6> <br>
 </h6>  Tgl Kembali   :       {{$item->tgl_kembali}}                      </h6> <br>
 </h6>  Paraf         :                              </h6> <br>
 </pre>


                     @empty
                      @endforelse

                </div>
            </div>
        </div>
    </div>

</body>
</html>




