@extends('layouts/shopmenu')
@section('section')
    <div class="content-container">
        <div>
            <h1>Oranda</h1>
        </div>
        <div class="products-container">
            @foreach ($ikan as $item)
            <div class="product-box">
                <div class="img-box">
                    <img src="CSS/Resources/Product/1.jpg">
                </div>
                <div class="text-box">
                    <p>
                    <span class="title">{{ $item->nama }}</span><br>
                    <span class="kelas">{{ $item->kelas }}</span>
                    <span class="size">{{ $item->ukuran }}</span><br>
                    Rp.{{ $item->harga }}-<br>
                    <a href="https://wa.link/ssfs11"><img class="wa-logo" src="CSS/Resources/Symbol/wa-logo.jpg"></a>
                    </p>
                    <p class="status">
                    <span class="status-color">Available</span><br>
                    {{ $item->input }}<br>
                    </p>
                </div>
            </div>
            @endforeach
            {{-- <div class="product-box">
                <div class="img-box">
                    <img src="CSS/Resources/Product/2.jpg">
                </div>
                <div class="text-box">
                    <p>
                    <span class="title">Oranda</span><br>
                    <span class="kelas">baby</span>
                    <span class="size">11cm</span><br>
                    Rp. 1,-<br>
                    <img class="wa-logo" src="CSS/Resources/Symbol/wa-logo.jpg">
                    </p>
                    <p class="status">
                    <span class="status-color">Available</span><br>
                    Januari 2022<br>
                    </p>
                </div>
            </div>
            <div class="product-box">
                <div class="img-box">
                    <img src="CSS/Resources/Product/3.jpg">
                </div>
                <div class="text-box">
                    <p>
                    <span class="title">Oranda</span><br>
                    <span class="kelas">baby</span>
                    <span class="size">11cm</span><br>
                    Rp. 1,-<br>
                    <img class="wa-logo" src="CSS/Resources/Symbol/wa-logo.jpg">
                    </p>
                    <p class="status">
                    <span class="status-color">Available</span><br>
                    Januari 2022<br>
                    </p>
                </div>
            </div>
            <div class="product-box">
                <div class="img-box">
                    <img src="CSS/Resources/Product/4.jpg">
                </div>
                <div class="text-box">
                    <p>
                    <span class="title">Oranda</span><br>
                    <span class="kelas">baby</span>
                    <span class="size">12cm</span><br>
                    Rp. 1,-<br>
                    <img class="wa-logo" src="CSS/Resources/Symbol/wa-logo.jpg">
                    </p>
                    <p class="status">
                    <span class="status-color">Available</span><br>
                    Januari 2022<br>
                    </p>
                </div>
            </div>
            <div class="product-box">
                <div class="img-box">
                    <img src="CSS/Resources/Product/5.jpg">
                </div>
                <div class="text-box">
                    <p>
                    <span class="title">Oranda</span><br>
                    <span class="kelas">Junior</span>
                    <span class="size">13cm</span><br>
                    Rp. 1,-<br>
                    <img class="wa-logo" src="CSS/Resources/Symbol/wa-logo.jpg">
                    </p>
                    <p class="status">
                    <span class="status-color">Available</span><br>
                    Januari 2022<br>
                    </p>
                </div>
            </div>
            <div class="product-box">
                <div class="img-box">
                    <img src="CSS/Resources/Product/15.jpg">
                </div>
                <div class="text-box">
                    <p>
                    <span class="title">Oranda <br> Rosetail</span><br>
                    <span class="kelas">Junior</span>
                    <span class="size">13cm</span><br>
                    Rp. 1,-<br>
                    <a href="https://wa.link/ssfs11"><img class="wa-logo" src="CSS/Resources/Symbol/wa-logo.jpg"></a>
                    </p>
                    <p class="status">
                    <span class="status-color">Available</span><br>
                    Januari 2022<br>
                    </p>
                </div>
            </div>
            <div class="product-box">
                <div class="img-box">
                    <img src="CSS/Resources/Product/18.jpg">
                </div>
                <div class="text-box">
                    <p>
                    <span class="title">Oranda</span><br>
                    <span class="kelas">baby</span>
                    <span class="size">11cm</span><br>
                    Rp. 1,-<br>
                    <img class="wa-logo" src="CSS/Resources/Symbol/wa-logo.jpg">
                    </p>
                    <p class="status">
                    <span class="status-color">Available</span><br>
                    Januari 2022<br>
                    </p>
                </div>
            </div>
            <div class="product-box">
                <div class="img-box">
                    <img src="CSS/Resources/Product/20.jpg">
                </div>
                <div class="text-box">
                    <p>
                    <span class="title">Oranda</span><br>
                    <span class="kelas">Baby</span>
                    <span class="size">11cm</span><br>
                    Rp. 1,-<br>
                    <img class="wa-logo" src="CSS/Resources/Symbol/wa-logo.jpg">
                    </p>
                    <p class="status">
                    <span class="status-color">Available</span><br>
                    Januari 2022<br>
                    </p>
                </div>
            </div>
            <div class="product-box">
                <div class="img-box">
                    <img src="CSS/Resources/Product/26.jpg">
                </div>
                <div class="text-box">
                    <p>
                    <span class="title">Oranda</span><br>
                    <span class="kelas">baby</span>
                    <span class="size">11cm</span><br>
                    Rp. 1,-<br>
                    <img class="wa-logo" src="CSS/Resources/Symbol/wa-logo.jpg">
                    </p>
                    <p class="status">
                    <span class="status-color">Available</span><br>
                    Januari 2022<br>
                    </p>
                </div>
            </div> --}}
        </div>
    </div>
@endsection