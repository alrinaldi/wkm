<div>
    <div>
        <div class="row">

                <h2>List Juri</h2>
            <div class="col-md-12">

    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    Add Juri
                  </button>
                  <p class="pt-3"></p>
                <div class="card">
                    <div class="card-header bg-secondary text-light">
                      Juri
                    </div>
                    <div class="card-body">
                        <table id="example" class="table table-bordered" style="width:100%">
                            <thead>
                                    <th>No</th>
                                    <th>Nama Juri</th>
                                    <th>Type Juri</th>
                                    <th>Perusahaan</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                    @php
                                    $i = 1;
                                    @endphp
                                    @foreach($juri as $j)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $j->nama_juri }}</td>
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
    <!-- Modal -->
<!-- Modal -->
{{-- <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg  modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Add Periode</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <form action="/addstreamevent" method="POST">
            @csrf
              <div class="col-md-12">
                <label for="inputPassword4" class="form-label">Nama Stream</label>
                <input type="namastream" class="form-control" id="inputPassword4" required>
              </div>
              <div class="col-md-12">
                <label for="inputPassword4" class="form-label">Jadwal</label>
                <input type="date" name="jadwal" id="" class="form-control" required>
            </div>
            <div class="col-md-12">
                <label for="inputPassword4" class="form-label">Event</label>
                <select name="event" id="" class="form-control" required>
                    @foreach($event as $e)
                    <option value=""></option>
                    <option value="{{ $e->id }}">{{ $e->nama }}</option>
                    @endforeach
                </select>
            </div>

        </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Understood</button>
        </div>
      </div>
    </div>
  </div> --}}
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg  modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Add Periode</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <form action="/addjuri" method="POST">
            @csrf
              <div class="col-md-12">
                <label for="inputPassword4" class="form-label">Nama Juri</label>
                <input type="text" name="namajuri" class="form-control" id="inputPassword4" required>
              </div>
              <div class="col-md-12">
                <label for="inputPassword4" class="form-label">Perusahaan</label>
                <input type="text" name="perusahaan" id="" class="form-control" required>
            </div>
            <div class="col-md-12">
                <label for="inputPassword4" class="form-label">Type</label>
                <select name="type" id="" class="form-control">
                    <option value=""></option>
                    <option value="Juri Magang">Juri Magang</option>
                    <option value="Juri">Juri</option>
                    <option value="Koor Juri Stream">Koor Juri Stream</option>
                    <option value="Sekertaris Juri">Sekertaris Juri</option>
                    <option value="Wakil Ketua Juri">Wakil Ketua Juri</option>
                    <option value="Ketua">Ketua Juri</option>
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
