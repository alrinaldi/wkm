<div>
    <div>
        <div class="row">

                <h2>List Peserta</h2>
            <div class="col-md-12">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    Settle Peserta
                  </button>
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
                                    <th>Perusahaan</th>
                                    <th>Jadwal</th>
                                    <th>Detail Team</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                    @php
                                    $no = 1;
                                    @endphp
                                    @foreach($peserta as $p)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $p->nama_team  }}</td>
                                        <td>{{ $p->kategori }}</td>
                                        <td>{{ $p->perusahaan }}</td>
                                        <td><input type="time" name="" id="" step="1800" class="form-control tschedule" data-id="{{ $p->id }}"></td>
                                        <td><button class="btn btn-success">Detail</button></td>
                                        <td> <button class="btn btn-primary">Pilih</button> </td>
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
            <div class="col-md-12">
                <table class="table" id="tablesettle">
                    <thead>
                    <th>Nama</th>
                    <th>Kategori</th>
                    <th>Perusahaan</th>
                    <th>Detail Team</th>
                    <th>Action</th>
                    </thead>
                    <tbody>
                        @foreach($pesertar as $pr)
                        <tr>
                            <td>{{ $pr->nama_team }}</td>
                            <td>{{ $pr->kategori }}</td>
                            <td>{{ $pr->perusahaan }}</td>
                            <td> <button class="btn btn-primary">Detail</button></td>
                            <td><button class="btn btn-success">Settle</button></td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
    <script>
        document.addEventListener('livewire:load', function () {
            $(document).ready(function () {
        $('#example').DataTable();
            });


            $(document).ready(function(){
                $('#tablesettle').DataTable();
            })

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
