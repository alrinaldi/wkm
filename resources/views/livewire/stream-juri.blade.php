<div>
    <div class="row">
        <h2>List Stream</h2>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-secondary text-light">
                  Stream
                </div>
                <div class="card-body">
                    <table id="example" class="table table-bordered" style="width:100%">


                        <thead>
                                <th>No</th>
                                <th>Event</th>
                                <th>Periode Event</th>
                                <th>Nama Stream</th>
                                <th>Jadwal</th>
                                <th>Peserta</th>
                            </thead>
                            <tbody>
                                @php
                                $i=1;
                                @endphp
                                @foreach($juri as $j)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$j->nama}}</td>
                                    <td>{{$j->periode}}</td>
                                    <td>{{ $j->nama_stream }}</td>
                                    <td>{{ $j->jadwal }}</td>
                                        <td>
                                        {{-- <form action="/listpesertastreamjuri" method="POST">
                                            @csrf
                                            <input type="hidden" name="idstream" id="" value="{{$j->id_stream}}">
                                            <button class="btn btn-success">Detail</button>
                                        </form> --}}
                                     <a href="{{route('listpesertastreamjuri',$j->id)}}" class="btn btn-primary">
                                     List Peserta
                                     </a>
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
<script>
    document.addEventListener('livewire:load', function () {
        $(document).ready(function () {
    $('#example').DataTable();
});
    })
</script>
