<!DOCTYPE html>
<html>
<head>
    <meta name="_token" content="{{ csrf_token() }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.6/cropper.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.6/cropper.js"></script>
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif

            <div class="card">
                <div class="card-header">
                    <h4>Add Ikan</h4>
                </div>
                <div class="card-body">

                    <form action="{{ url('add-ikan') }}" method="POST">
                        @csrf
                        <div>
                            <div class="container mt-5">
                                <div class="card">

                                    <div class="card-body">
                                        <h5 class="card-title">Please Selete Image For Cropping</h5>
                                        <input type="file" name="image" class="image">
                                    </div>
                                </div>  
                            </div>
                            <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modalLabel">- Crop Image Before Upload</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="img-container">
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <img id="image" src="https://avatars0.githubusercontent.com/u/3456749">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="preview"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                            <button type="button" class="btn btn-primary" id="crop">Crop</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <script>
                                var $modal = $('#modal');
                                var image = document.getElementById('image');
                                var cropper;
                                $("body").on("change", ".image", function(e){
                                var files = e.target.files;
                                var done = function (url) {
                                image.src = url;
                                $modal.modal('show');
                                };
                                var reader;
                                var file;
                                var url;
                                if (files && files.length > 0) {
                                file = files[0];
                                if (URL) {
                                done(URL.createObjectURL(file));
                                } else if (FileReader) {
                                reader = new FileReader();
                                reader.onload = function (e) {
                                done(reader.result);
                                };
                                reader.readAsDataURL(file);
                                }
                                }
                                });
                                $modal.on('shown.bs.modal', function () {
                                cropper = new Cropper(image, {
                                aspectRatio: 1,
                                viewMode: 3,
                                preview: '.preview'
                                });
                                }).on('hidden.bs.modal', function () {
                                cropper.destroy();
                                cropper = null;
                                });
                                $("#crop").click(function(){
                                canvas = cropper.getCroppedCanvas({
                                width: 160,
                                height: 160,
                                });
                                canvas.toBlob(function(blob) {
                                url = URL.createObjectURL(blob);
                                var reader = new FileReader();
                                reader.readAsDataURL(blob); 
                                reader.onloadend = function() {
                                var base64data = reader.result; 
                                $.ajax({
                                type: "POST",
                                dataType: "json",
                                url: "add-ikan-picture",
                                data: {'_token': $('meta[name="_token"]').attr('content'), 'image': base64data},
                                success: function(data){
                                    $("#pathpict").val(data.success);
                                    console.log(data);
                                    $modal.modal('hide');
                                    alert("Crop image successfully uploaded");
                                }
                                });
                                }
                                });
                                })
                                </script>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">DefPath</label>
                            <input type="text" id="pathpict" name="ppath" value="{{ $picPath }}" readonly class="form-control"  >
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Nama Ikan</label>
                            <input type="text" name="nama" class="form-control">
                        </div>
                        
                        <div class="form-group mb-3">
                            <label for="">Kelas Ikan</label>
                            <input type="text" name="kelas" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Ukuran Ikan</label>
                            <input type="text" name="ukuran" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Harga Ikan</label>
                            <input type="text" name="harga" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Input Tanggal</label>
                            <input type="text" name="input" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Status Ikan</label>
                            <input type="text" name="status" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Save Ikan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>