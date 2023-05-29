<div>
    <div>
        <div class="row">

                <h2>List Peserta</h2>
            <div class="col-md-12">
                  <p class="pt-3"></p>
                <div class="card">
                    <div class="card-header bg-secondary text-light">
                      Peserta
                    </div>
                    <div class="card-body">
                        <table id="example" class="table table-bordered" style="width:100%">


                            <thead>
                                    <th>No</th>
                                    <th>Nama Team</th>
                                    <th>Kategori</th>
                                    <th>Status</th>
                                    <th>Jadwal</th>
                                    <th>Nilai Anda</th>
                                    <th>Nilai Rata</th>
                                    <th>Makalah & Penilaian</th>
                                </thead>
                                <tbody>
                                    @php
                                    $i = 1;
                                    @endphp
                                    @foreach($peserta as $p)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $p->nama_team }}</td>
                                        <td>{{ $p->kategori }}</td>
                                        <td></td>
                                        <td>{{ $p->jadwal }}</td>
                                        <td>Belum Nilai</td>
                                        <td>Belum Nilai</td>

                                        <td>
                                           <form action="/detailmakalahuserjuri" method="POST">
                                            @csrf
                                            <input type="hidden" name="idinovator" id="" value="{{$p->id}}">
                                            <button class="btn btn-success">Detail</button>
                                        </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                    </div>
                  </div>
          </div>
        </div>

    </div>
    <!-- Modal -->
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg  modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Add Peserta</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <form action="/addpeserta" method="POST">
            @csrf
            <div class="col-md-12">
                <label for="inputEmail4" class="form-label">Nama Team</label>
                <input type="email" class="form-control" id="inputEmail4">
              </div>
              <div class="col-md-12">
                <label for="inputPassword4" class="form-label">Event WKM</label>
                <select name="" id="" class="form-control">
                    <option value=""></option>
                    <option value="1">TKMPN 2023/2024</option>
                </select>
              </div>
              <div class="col-md-12">
                <label for="inputPassword4" class="form-label">Kategori</label>
                <select name="" id="" class="form-control">
                    <option value=""></option>
                    <option value="QCC">QCC</option>
                    <option value="QCP">QCP</option>
                    <option value="SS">SS</option>
                </select>
              </div>
              <div class="col-md-12">
                <label for="inputEmail4" class="form-label">Foto Team</label>
                <input type="file" class="form-control" id="inputEmail4">
              </div>

              <div class="col-md-12">
                <label for="inputPassword4" class="form-label">Jumlah Anggota</label>
                <select name=""  class="form-control" id="jumlah_anggota">
                    <option value=""></option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
              </div>

              <div class="col-md-12" id="nama_anggota">
              </div>

              <div class="col-md-12">
                <label for="inputEmail4" class="form-label">Bukti Pembayaran</label>
                <input type="file" class="form-control" id="inputEmail4">
              </div>

        </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Understood</button>
        </div>
      </div>
    </div>
  </div>
    <script>
        document.addEventListener('livewire:load', function () {
            $(document).ready(function () {
        $('#example').DataTable();
    });


        $('#jumlah_anggota').change(function(){
            var value = $('#jumlah_anggota').val();
            var i
            var html = '';
            var x = 1;
            console.log(value);
            for(i = 0; i < value; i++){

               html += '<label for="inputEmail4" class="form-label">Nama Anggota ke'+x+'</label>'+
                      '<input type="text" name=namaanggota[] class="form-control" id="inputEmail4">';
                x++;
            };
            $('#nama_anggota').html(html);
            console.log(html)

        });


        })
    </script>


</div>
