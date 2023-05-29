<div>
    <div>
        <div class="row">

                <h2>List Periode</h2>
            <div class="col-md-12">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    Add Periode
                  </button>
                  <p class="pt-3"></p>
                <div class="card">
                    <div class="card-header bg-secondary text-light">
                      Stream
                    </div>
                    <div class="card-body">
                        <table id="example" class="table table-bordered" style="width:100%">


                            <thead>
                                    <th>No</th>
                                    <th>Nama Event</th>
                                    <th>Periode</th>
                                    <th>Kategori</th>
                                    <th>Tanggal</th>
                                    <th>Status</th>
                                    <th>Stream</th>
                                </thead>
                                <tbody>
                                    @php
                                    $i = 1;
                                    @endphp
                                    @foreach($event as $e)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $e->nama}}</td>
                                        <td>{{ $e->periode}}</td>
                                        <td>{{ $e->kategori}}</td>
                                        <td>{{ $e->tanggal}}</td>
                                        <td>{{ $e->status}}</td>
                                        <td> <a href="{{route('adminaddstreamevent',$e->id)}}" class="btn btn-primary">
                                        Stream</a></td>
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
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Add Periode</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <form action="/addperiodeevent" method="POST">
            @csrf
            <div class="col-md-12">
                <label for="inputEmail4" class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" id="inputEmail4">
              </div>
              <div class="col-md-12">
                <label for="inputPassword4" class="form-label">Periode</label>
                <input type="text" name="periode" class="form-control" id="inputPassword4">
              </div>
              <div class="col-md-12">
                <label for="inputPassword4" class="form-label">Tanggal</label>
                <input type="date" name="tanggal" class="form-control" id="inputPassword4">
              </div>
              <div class="col-md-12">
                <label for="inputPassword4" class="form-label">Kategori</label>
                <select name="kategori" id="" class="form-control">
                    <option value="IQPC">IQPC</option>
                    <option value="TKMPN">TKMPN</option>
                    <option value="APQC-IC">APQC-IC</option>
                    <option value="ICC-OSH">ICC-OSH</option>
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
