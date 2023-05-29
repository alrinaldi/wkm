<div>
    {{-- <div class="row">
        <h2>List Peserta</h2>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-secondary text-light">
                  Inovator
                </div>
                <div class="card-body">
                    <table id="example" class="table table-bordered" style="width:100%">


                        <thead>
                                <th>No</th>
                                <th>Nama Team</th>
                                <th>Kategori</th>
                                <th>Status</th>
                                <th>Anggota Team</th>
                                <th>Upload Makalah</th>
                            </thead>
                            <tbody>
                                @php
                                $i=1;
                                @endphp
                                @foreach($peserta as $p)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $p->nama_team }}</td>
                                    <td>{{ $p->kategori }}</td>
                                    <td>{{ $p->status }}</td>
                                    <td><button class="btn btn-primary">Anggota</button></td>
                                    <td><a class="btn btn-success" href="{{ route('detailregistermakalah',"XIAA") }}" >Detail</a></td>
                                </tr>
                                @endforeach;
                            </tbody>
                        </table>
                </div>
              </div>
      </div>
    </div>
    <p class="pt-3"></p> --}}
    <div class="row">

                  <div class="row gutters-sm">
                    <div class="col-md-4 mb-3">
                      <div class="card">
                        <div class="card-body">
                          <div class="d-flex flex-column align-items-center text-center">
                            <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="img-fluid" width="250">
                            <div class="mt-3">
                                <h2>Nama Team</h2>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="card mt-3">
                        <h4>Form Upload</h4>
                        <ul class="list-group list-group-flush">
                          <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                            <label for="">Upload Materi (PPT)</label>
                            <input type="file" name="" id="" class="form-control">
                          </li>
                          <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                            <label for="">Upload Materi (PDF)</label>
                            <input type="file" name="" id="" class="form-control">
                          </li>
                          <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                            <label for="">Upload Ringkasan Mater(PDF)</label>
                            <input type="file" name="" id="" class="form-control">
                          </li>
                          <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                            <label for="">Upload Video <span>(Max mb)</span></label>
                            <input type="file" name="" id="" class="form-control">
                          </li>
                          <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                            <button class="btn btn-success">Submit</button>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-md-8">
                      <div class="card mb-3">
                        <div class="card-body">
                          <div class="row">
                            <div class="col-sm-3">
                              <h6 class="mb-0">Nama Team</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                Alfrinaldi
                            </div>
                          </div>
                          <hr>
                          <div class="row">
                            <div class="col-sm-3">
                              <h6 class="mb-0">Kategori</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                              QCP
                            </div>
                          </div>
                          <hr>
                          <div class="row">
                            <div class="col-sm-3">
                              <h6 class="mb-0">Stream</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                1A
                            </div>
                          </div>
                          <hr>
                          <div class="row">
                            <div class="col-sm-3">
                              <h6 class="mb-0">Perusahaan</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                              Senang Bahagia Selamanya
                            </div>
                          </div>
                          <hr>
                          <div class="row">
                            <div class="col-sm-3">
                              <h6 class="mb-0">Materi PPT</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                              <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Lihat File</button>
                            </div>
                          </div>
                          <hr>
                          <div class="row">
                            <div class="col-sm-3">
                              <h6 class="mb-0">Materi PDF</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                              <button class="btn btn-success">Lihat File</button>
                            </div>
                          </div>
                          <hr>
                          <div class="row">
                            <div class="col-sm-3">
                              <h6 class="mb-0">Ringkasan Materi</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                              <button class="btn btn-success">Lihat File</button>
                            </div>
                          </div>
                          <hr>
                          <div class="row">
                            <div class="col-sm-3">
                              <h6 class="mb-0">Video</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                              <button class="btn btn-success">Lihat File</button>
                            </div>
                          </div>
                          <hr>
                          {{-- <div class="row">
                            <div class="col-sm-12">
                              <a class="btn btn-info " target="__blank" href="https://www.bootdey.com/snippets/view/profile-edit-data-and-skills">Edit</a>
                            </div>
                          </div> --}}
                        </div>
                      </div>

                      <div class="row gutters-sm">
                        <div class="col-sm-6 mb-3">
                          <div class="card h-100">
                            <div class="card-body">
                              <h6 class="d-flex align-items-center mb-3">Download Template Materi</h6>
                                <label for="">Template Materi</label>
                                <br>
                              <button class="btn btn-primary">Download Tempalte </button>
                              <hr>
                                <label for="">Template Ringkasan Materi</label>
                                <br>
                                <button class="btn btn-primary">Download Template</button>
                            <hr>
                            </div>
                          </div>
                        </div>
                      </div>



                    </div>
                  </div>

                </div>
                <div id="slide-resolte-contaniner" ></div>


    <button class="btn btn-warning">Back</button>
</div>
<!-- Button trigger modal -->


  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <input id="fullscreen-btn" type="button" value="Fullscreen" />

            <div id="result">

            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Understood</button>
        </div>
      </div>
    </div>
  </div>
  {{-- <script type="text/javascript" src="{{ url('pptx/') }}"></script> --}}

<script>
    document.addEventListener('livewire:load', function () {
        $(document).ready(function () {
    $('#example').DataTable();
});

$("#slide-resolte-contaniner").pptxToHtml({
    pptxFileUrl: "sample_12.pptx",
    slidesScale: "50%",
    slideMode: false,
    keyBoardShortCut: false
  });

// $(document).ready(function() {
// 		var oldWidth, oldMargin ,isFullscreenMode=false;
// 		$("#fullscreen-btn").on("click", function(){

// 			if(!isFullscreenMode){
// 				oldWidth = $("#result .slide").css("width");
// 				oldMargin = $("#result .slide").css("margin");
// 				$("#result .slide").css({
// 					"width": "99%",
// 					"margin": "0 auto"
// 				})
// 				$("#result").toggleFullScreen();
// 				isFullscreenMode = true;
// 			}else{
// 				$("#result .slide").css({
// 					"width": oldWidth,
// 					"margin": oldMargin
// 				})
// 				$("#result").toggleFullScreen();
// 				isFullscreenMode = false;
// 			}
// 		});
// 		$(document).bind("fullscreenchange", function() {

// 			if(!$(document).fullScreen()){
// 				$("#result .slide").css({
// 					"width": oldWidth,
//   					"margin": oldMargin
// 				})
// 			}
// 		});
//     });



//     $("#result").pptxToHtml({
// 	pptxFileUrl: 'http://127.0.0.1:8004/pptx/test.pptx',
// 	fileInputId: "uploadFileInput",
// 	slideMode: false,
// 	keyBoardShortCut: false,
// 	slideModeConfig: {  //on slide mode (slideMode: true)
// 	    first: 1,
// 	    nav: false, /** true,false : show or not nav buttons*/
// 	    navTxtColor: "white", /** color */
// 	    navNextTxt:"&#8250;", //">"
// 	    navPrevTxt: "&#8249;", //"<"
// 	    showPlayPauseBtn: false,/** true,false */
// 	    keyBoardShortCut: false, /** true,false */
// 	    showSlideNum: false, /** true,false */
// 	    showTotalSlideNum: false, /** true,false */
// 	    autoSlide: false, /** false or seconds (the pause time between slides) , F8 to active(keyBoardShortCut: true) */
// 	    randomAutoSlide: false, /** true,false ,autoSlide:true */
// 	    loop: false,  /** true,false */
// 	    background: "black", /** false or color*/
// 	    transition: "default", /** transition type: "slid","fade","default","random" , to show transition efects :transitionTime > 0.5 */
// 	    transitionTime: 1 /** transition time in seconds */
// 	}
// });

    })
</script>

