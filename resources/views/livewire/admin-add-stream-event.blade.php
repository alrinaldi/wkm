<div>
    <div>
        <div class="row">

                <h2>List Stream</h2>
            <div class="col-md-12">
                  <p class="pt-3"></p>
                <div class="card">
                    <div class="card-header bg-secondary text-light">
                      Stream
                    </div>
                    <div class="card-body">
                        <table id="example" class="table table-bordered" style="width:100%">
                            <thead>
                                    <th>No</th>
                                    <th>Event</th>
                                    <th>Periode</th>
                                    <th>Kategori Event</th>
                                    <th>Nama Stream</th>
                                    <th>Jadwal</th>
                                    <th>Total Peserta</th>
                                    <th>Peserta</th>
                                    <th>Juri</th>
                                </thead>
                                <tbody>
                                    @php
                                    $i = 1;
                                    @endphp
                                    @foreach($stream as $s)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $s->nama }}</td>
                                        <td>{{ $s->periode }}</td>
                                        <td>{{ $s->kategori }}</td>
                                        <td>{{ $s->nama_stream }}</td>
                                        <td>{{ $s->jadwal }}</td>
                                        <td></td>
                                        <td>
                                            <a href="{{ route('adminsettlepeserta',$s->id) }}" class="btn btn-primary">Peserta</a>
                                        </td>
                                        <td> <button class="btn btn-primary">Juri</button> </td>
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
    <script>
        document.addEventListener('livewire:load', function () {
            $(document).ready(function () {
        $('#example').DataTable();
    });
        })
    </script>


</div>
