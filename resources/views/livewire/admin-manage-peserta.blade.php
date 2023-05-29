<div>
    <div>
        <div class="row">

                <h2>List Peserta</h2>
            <div class="col-md-12">

    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    Add Peserta
                  </button>
                  <div class="col-md-4 pt-2">
                    <div class="card" style="">
                        <div class="card-body">
                            <h5 class="card-title">Upload Peserta</h5>
                            <hr>
                            <form action="">
                                <div class="row">
                                    <label for="">File</label>
                                    <input type="file" name="" id="" class="form-control">
                                </div>
                            </form>
                        </div>
                    </div>
                  </div>
                  <p class="pt-3"></p>
                <div class="card">
                    <div class="card-header bg-secondary text-light">
                      Peserta
                    </div>
                    <div class="card-body">
                        <table id="example" class="table table-bordered" style="width:100%">
                            <thead>
                                    <th>No</th>
                                    <th>Nama Peserta</th>
                                    <th>Kategori</th>
                                    <th>Perusahaan</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                    @php
                                    $i = 1;
                                    @endphp
                                    @foreach($peserta as $j)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $j->nama_team }}</td>
                                        <td>{{ $j->kategori }}</td>
                                        <td>{{ $j->perusahaan }}</td>
                                        <td>{{ $j->status }}</td>
                                        <td><button class="btn btn-warning">Edit</button></td>

                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                    </div>
                  </div>
          </div>
        </div>

    </div>

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
                <label for="inputPassword4" class="form-label">Nama Peserta</label>
                <input type="text" name="nama" class="form-control" id="inputPassword4" required>
              </div>
              <div class="col-md-12">
                <label for="inputPassword4" class="form-label">Perusahaan</label>
                <select name="perusahaan" id="" class="form-control">
                    <option value=""></option>
                    @foreach($perusahaan as $ps)
                        <option value="{{$ps->nama}}">{{$ps->nama}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-12">
                <label for="inputPassword4" class="form-label">Kategori</label>
                <select name="kategori" id="" class="form-control">
                    <option value=""></option>
                    <option value="QCP">QCP</option>
                    <option value="QCC">QCC</option>
                    <option value="SS">SS</option>
                </select>
            </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save</button>
        </form>

        </div>
      </div>
    </div>
  </div>
    <script>
        document.addEventListener('livewire:load', function () {
            $(document).ready(function () {
            $('#example').DataTable();
         });
        })
    </script>


</div>
