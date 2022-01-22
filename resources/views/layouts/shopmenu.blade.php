<!DOCTYPE html>
<html>
    <head>
        <title>Java GoldFish</title>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="CSS/shopmenu-style.css">
        <link rel="stylesheet" href="CSS/image-style.css">
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

            @media (max-width:1477px){
            .products-container {
                    width: 100%;
                    height: fit-content;
                    padding: 10px 10px 10px 10px;
                    background-color: white;
                    overflow: auto;
                    margin-left: 66%;
                    transform: translateX(-50%);
                }
            }

            @media (max-width:720px){
                .products-container {
                    width: 100%;
                    height: fit-content;
                    padding: 10px 10px 10px 10px;
                    background-color: white;
                    overflow: auto;
                    margin-left: 66%;
                    transform: translateX(-50%);
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
                <a href="/"><div class="header-logo"><p>Java GoldFish</p></div></a>
                <!-- <div class="header-background"></div> -->
                <div class="header-nav">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li>
                            <div class="dropdown"><a href="/">Goldfish</a>
                                <div class="dropdown-content">
                                    <ul>
                                        <li>
                                            <a href="/Oranda">Oranda</a>
                                        </li>
                                        <li>
                                            <a href="/Ranchu">Ranchu</a>
                                        </li>
                                        <li>
                                            <a href="/Ryukin">Ryukin</a>
                                        </li>
                                        <li>
                                            <a href="/Demekin">Demekin</a>
                                        </li>
                                        <li>
                                            <a href="/Unik">Unik</a>
                                        </li>
                                        <li>
                                            <a href="/Lain">Lain - lain</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li><a href="#footer">Contact Us</a></li>
                    </ul>
                </div>
                <!--Sidenav-->
                <div id="mySidenav" class="sidenav">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                    <a href="/About">About Us</a>
                    <a href="#footer">Contact Us</a>
                    <a href="#">Goldfish</a>
                    <ul>
                        <a href="/Oranda">
                            -Oranda
                        </a>
                        <a href="/Ranchu">
                            -Ranchu
                        </a>
                        <a href="/-Ryukin">
                            -Ryukin
                        </a>
                        <a href="/Demekin">
                            -Demekin
                        </a>
                        <a href="/Unik">
                            -Unik
                        </a>
                        <a href="/Lain">
                            -Lain-Lain
                        </a>
                    </ul>
                    
                    </div>
                    <div id="main">
                    <span class="menu-bar-mini" style="font-size:30px;cursor:pointer;" onclick="openNav()">&#9776;</span>
                </div>    
                <script src="JS/menu.js">
                </script>
                <!--Sidenav-->
            </div>
                @yield('section')
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
                <div class="footer-bottom" id="footer">
                            <p> Jl.Lingkar Luar Komplek PTB Blok R 1 no.5 Duren Sawit, Jakarta Timur, Indonesia </p>
                            <p> © 2022 javagoldfish.com | Ikan mas koki </p>
                </div>
            </div>
        </div>
    </body>
</html>