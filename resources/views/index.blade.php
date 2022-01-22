@extends('layouts/menu')
@section('section')

<div class="slideshow-container">
    <div class="Options">
        <div class="slideshow-picture">
            <img class="mySlides" src="CSS/Resources/Oranda.jpg" style="width:100%">
            <img class="mySlides" src="CSS/Resources/Product/1.jpg" style="width:100%">
            <img class="mySlides" src="CSS/Resources/Oranda.jpg" style="width:100%">
            <img class="mySlides" src="CSS/Resources/Oranda.jpg" style="width:100%">
            <img class="mySlides" src="CSS/Resources/Oranda.jpg" style="width:100%">
        </div>

        <div class="slideshow-button">
            <div class="slideshow-button-direction">
                <button class="left" onclick="plusDivs(-1)">❮</button>
                <button class="right" onclick="plusDivs(1)">❯</button>
            </div>
            <div class="slideshow-numeric-button">
                <button class="indicator" onclick="currentDiv(1)">1</button> 
                <button class="indicator" onclick="currentDiv(2)">2</button> 
                <button class="indicator" onclick="currentDiv(3)">3</button> 
            </div>
        </div>
    <script src="JS/menu.js">
    </script>
    </div>
</div>

@endsection