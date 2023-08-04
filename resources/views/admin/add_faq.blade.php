[12:23 AM, 4/6/2023] Rehman Sir: @extends("layouts.app")

	@section("style")
	<link href="assets/plugins/Drag-And-Drop/dist/imageuploadify.min.css" rel="stylesheet" />
    <link href="assets/plugins/fancy-file-uploader/fancy_fileupload.css" rel="stylesheet" />

	@endsection

		@section("wrapper")
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">FAQ</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Add FAQ</li>
							</ol>
						</nav>
					</div>

				</div>
				<!--end breadcrumb-->
                <div class="row">
                    <div class="col-12">
                        @if (Session::has('status'))
                        <div class="alert alert-{{ Session::get('status') }} border-0 bg-{{ Session::get('status') }} alert-dismissible fade show" id="dismiss">
                            <div class="text-white">{{ Session::get('message')}}</div>
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                                {{ Session::forget('status') }}
                                {{ Session::forget('message') }}
                        </div>
                        @endif
                    </div>
                </div>
                <div class="row">
                   <div class="col-lg-2 "></div>

                   
                   
                   
                   <div class="col-lg-8 ">
				<div class="card">
				  <div class="card-body p-4">
					  <h5 class="card-title">Add New FAQ</h5>
					  <hr/>
                       <div class="form-body mt-4">
                        <form action="{{ url('insert-faq') }}" method="post" enctype="multipart/form-data">
                            @csrf
                               <div class="border border-3 p-4 rounded borderRmv">

                               	<div class="mb-3">
                                    <label for="inputProductTitle" class="form-label">Heading</label>
                                    <input type="text" name="heading" required class="form-control" id="heading"
                                     placeholder="Enter heading">
                                  </div>

                                  <div class="mb-3">
                                    <label for="inputProductTitle" class="form-label">Detail</label>
                                    <input type="text" name="detail"  class="form-control" id="Detail" 
                                    placeholder="Enter Detail">
                                  </div>


                                   <div class="mb-3">
                                    <label for="inputProductTitle" class="form-label">Link</label>
                                    <input type="text" name="link" required class="form-control" id="link" 
                                    placeholder="Enter link">
                                  </div>

                               
                                <div class="mb-3">
                                          <div class="d-grid">
                                             <button type="submit" class="btn btn-info">Save</button>
                                          </div>
                                      </div>
                               </div>
                               </div>


                           </div><!--end row-->
                        </form>
					</div>
				  </div>
s</div>


			</div>
		</div>
		<!--end page wrapper -->
		@endsection

	@section("script")
	<script src="assets/plugins/Drag-And-Drop/dist/imageuploadify.min.js"></script>
    <script src="assets/plugins/fancy-file-uploader/jquery.ui.widget.js"></script>
	<script src="assets/plugins/fancy-file-uploader/jquery.fileupload.js"></script>
	<script src="assets/plugins/fancy-file-uploader/jquery.iframe-transport.js"></script>
	<script src="assets/plugins/fancy-file-uploader/jquery.fancy-fileupload.js"></script>
	<script>
		$(document).ready(function () {
			// $('#image-uploadify').imageuploadify();

            $('#image-uploadify').FancyFileUpload({
			params: {
				action: 'fileuploader'
			},
			maxfilesize: 1000000
		});
            checkWidth();
		})

        function checkWidth()
        {
            /*If browser resized, check width again */
            if ($(window).width() < 576) {
                $('html').addClass('mobile');
            $('.borderRmv').removeClass('border border-3 rounded p-4');
            }
        }

        $(window).resize(function() {
            /*If browser resized, check width again */
            if ($(window).width() < 576) {
            $('.borderRmv').removeClass('border border-3 rounded p-4');
            }else {
                $('.borderRmv').addClass('border border-3 rounded p-4');
            }
        });
	</script>
	@endsection