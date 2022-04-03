<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>CollegeCanteen</title>
    <link rel="stylesheet" href={{ asset('homeHeader.css') }}>
    <link rel="stylesheet" href={{ asset('homeMain.css') }}>
    <link rel="stylesheet" href={{ asset('homeFooter.css') }}>


    <script src="https://kit.fontawesome.com/58d9b597be.js" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <div class="title">
            <h1>College Canteen</h1>
        </div>
        <div class="menu">
            <ul>
                <li class="active"><a href="#"><i class="fas fa-home"></i>Home</a></li>
                <li><a href="#"><i class="fa-solid fa-bowl-rice"></i>Order food</a>
                    <div class="sub-menu-1">
                        <ul>
                            <li><a href="#"><i class="fas fa-crosshairs"></i>Veg</a></li>

                            <li><a href="#"><i class="fas fa-eye"></i>Non-Veg</a></li>
                            <li><a href="#"><i class="fas fa-eye"></i>Drinks</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="#"><i class="fas fa-briefcase"></i>Services</a>
                    <div class="sub-menu-1">
                        <ul>
                            <li><a href="#"><i class="fas fa-birthday"></i>B'Day special</a></li>
                        </ul>
                    </div>

                </li>
                <li><a href="#"><i class="fas fa-address-card"></i>About us</a>
                </li>
                <li><a href="#"><i class="fas fa-phone-square-alt"></i>Contact us</a>
                    <div class="sub-menu-1">
                        <ul>
                            <li><a href="#"><i class="fas fa-twitter"></i>Gmail</a></li>
                            <li><a href="#"><i class="fas fa-facebook-f"></i>Facebook</a></li>
                            <li><a href="#"><i class="fas fa-linkedin-in"></i>LinkedIn</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </header>
    <main>
        <div class="mainSection">
            <h2>Main section</h2>
        </div>
        <div class="aboutSection">
            <h2>About Section</h2>
        </div>
    </main>
    <footer>
        <h2>Footer</h2>
    </footer>
</body>

</html>
