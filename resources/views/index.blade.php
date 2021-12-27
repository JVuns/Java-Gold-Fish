<!DOCTYPE html>
<html>
    <head>
        <title>Java Gold Fish</title>
        <link rel="stylesheet" href="CSS\menu-style.css">
        <style>
            @media (max-width:1400px){
                .header-nav{
                    display: none
                }
                .menu-bar-mini{
                    display: block;
                    z-index: 1;
                }
                .header-logo{
                    font-size: 30px;
                }
            }
            @media (min-width:1400px){
                .menu-bar-mini{
                    display: none;
                }
            }
            .sidenav {
                height: 100%;
                width: 0;
                position: fixed;
                z-index: 2;
                top: 0;
                right: 0;
                background-color: #111;
                overflow-x: hidden;
                transition: 0.5s;
                padding-top: 60px;
            }

            .sidenav a {
                padding: 8px 8px 8px 32px;
                text-decoration: none;
                font-size: 25px;
                color: #818181;
                display: block;
                transition: 0.3s;
            }

            .sidenav a:hover {
                color: #f1f1f1;
            }

            .sidenav .closebtn {
                position: absolute;
                top: 0;
                right: 25px;
                font-size: 36px;
                margin-left: 50px;
            }

            #main {
                margin-top: 15px;
                position: fixed;
                right: 0px;
                transition: margin-left .5s;
                padding: 16px;
            }
        </style>
    </head>

    <body >
        <div>
            <div class="header-container header-background">
                <div class="header-logo"><p>Java Gold Fish</p></div>
                <!-- <div class="header-background"></div> -->
                <div class="header-nav">
                    <ul>
                        <li><a href="">About Us</a></li>
                        <li>
                            <div class="dropdown"><a href="">Gold Fish</a>
                                <div class="dropdown-content">
                                    <ul>
                                        <li>
                                            Ranchu
                                        </li>
                                        <li>
                                            Tosakin
                                        </li>
                                        <li>
                                            Shukin
                                        </li>
                                        <li>
                                            Tamasaba
                                        </li>
                                        <li>
                                            Oranda
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li><a href="">Contact Us</a></li>
                    </ul>
                </div>
                <!--Sidenav-->
                <div id="mySidenav" class="sidenav">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                    <a href="AboutUs.html">About Us</a>
                    <a href="Contact.html">Contact Us</a>
                    <a href="#">Gold Fish</a>
                    </div>
                    <div id="main">
                    <span class="menu-bar-mini" style="font-size:30px;cursor:pointer;" onclick="openNav()">&#9776;</span>
                </div>    
                <script>
                </script>
                <!--Sidenav-->
            </div>
            <div class="slideshow-container">
                <div class="Options">
                    <div class="slideshow-picture">
                        <img class="mySlides" src="/CSS/Resources/Oranda.jpg" style="width:100%">
                        <img class="mySlides" src="Resources/Ranchu.jpg" style="width:100%">
                        <img class="mySlides" src="Resources/Ryukin.jpg" style="width:100%">
                        <img class="mySlides" src="Resources/Demekin.jpg" style="width:100%">
                        <img class="mySlides" src="Resources/Unik.jpg" style="width:100%">
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
                <!--Footer-->
            <div class="footer">
                <div class="form">
                    <div>
                        <h2>Contact Us</h2>
                    </div>
                    <table class="form-table">
                        <tr>
                            <td>
                                Contact Person
                            </td>
                            <td>
                                Edy Santoso
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Mobile Phone
                            </td>
                            <td>
                                +62 811591111 
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Email
                            </td>
                            <td>
                                edys.javagoldfish@gmail.com 
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Whatsapp 
                            </td>
                            <td>
                                +62 811591111 
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Admin 
                            </td>
                            <td>
                                +62 811591111 
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="footer-bottom">
                            <p> Jl.Lingkar Luar Komplek PTB Blok R 1 no.5 Duren Sawit, Jakarta Timur, Indonesia </p>
                            <p> © 2022 javagoldfish.com | Ikan mas koki </p>
                </div>
            </div>
        </div>
    </body>
</html>