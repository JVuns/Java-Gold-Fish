<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">

            @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif

            <div class="card">
                <div class="card-header">
                    <h4>Add Student</h4>
                </div>
                <div class="card-body">

                    <form action="{{ url('add-ikan') }}" method="POST">
                        @csrf

                        <div class="form-group mb-3">
                            <label for="">Nama Ikan</label>
                            <input type="text" name="nama">
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
                            <button type="submit" class="btn btn-primary">Save Student</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>