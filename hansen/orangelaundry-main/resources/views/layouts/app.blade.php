<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="logo.ico" type="image/x-icon">
    <title>Orange Laundry | @yield('title') </title>

    {{-- CSS Saya --}}
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400&display=swap');

        /* Clearing and Font Family */
        *,
        html,
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
        }

        /* Custom Border */

        .custom-border {
            border-top: 40px solid #ff8b28;
        }

        /* Navbar class active */
        .active {
            color: #ff8b28 !important;
            background-color: transparent !important;
        }

        /* Navbar Brand */
        .navbar-brand {
            color: #ff8b28 !important;
            font-weight: 600 !important;
        }

        /* Left Session */
        /* .left-session {
    


 }

        /* Custom Text */
        .custom-text {
            margin-left: 10%;
            margin-top: 10%;
            font-size: 72px;
        }

        /* Animate Back In Left */
        .animate__backInLeft {
            opacity: 50% !important;
        }

        /* Custom P */
        .custom-p {
            margin-left: 10%;
            margin-top: 3%;
        }

        .custom-p2 {
            margin-left: 12%;
            margin-top: 3%;
        }

        .custom-services-p {
            margin-left: 15%;
            margin-top: 3%;
        }

        /*  */

        /* BTN CUSTOM */
        .btn-custom {
            background-color: #ff8b28;
            border-radius: 50px;
            padding: 10px;
            color: white;
            font-weight: bold;
            text-decoration: none;
            margin-left: 30%;
            transition: 1s all ease-in-out;
        }

        /* BTN CUSTOM ANIMATION HOVER */
        .btn-custom:hover {
            opacity: 50%;
        }

        /* Card Title */
        .card-title {
            font-weight: bold !important;
        }

        /* Right Session */

        /* .right-session {} */

        /* Background Top */
        .background-top {
            height: 650px;
            background-attachment: initial;
            background-image: url('/public/img/bgimg.jpg');
        }

        /* Box Contact */

        .box-contact {
            background-color: #edcbff;
            height: 600px;
        }

        .box-contact>h1 {

            text-align: center;
            font-weight: bold;
        }

        .box-contact>h3 {
            text-align: center;
            font-size: 1.7rem;
            color: #ff8b28;
            font-weight: bold;
        }

        /* Services */
        .services {
            background-color: #edcbff;
            padding-bottom: 8%;
        }

        /* Custom Services */
        .custom-services {
            color: #ff8b28;
            font-weight: bold;
        }

        .custom-services-text {
            margin-top: 10%;
            margin-left: 15%;
            font-size: 22px;
            font-weight: 500;
        }

        /* Button Order */
        .btn-order {
            background-color: white;
            color: orangered;
            font-weight: 600;
            border: none;
            margin-top: 6%;
            padding: 10px;
            border-radius: 15px;
        }

        /* p link */
        .p-link {
            text-decoration: none;
            font-weight: 600;
        }

        /* Custom Icon */
        .custom-icon {
            color: #ff8b28;
        }


        .menu {
            display: none;
            border-top: 3px solid #ff8b28 !important;
        }

        #menu2 {
            display: none;
            border-top: 3px solid #ff8b28 !important;
        }

        #menu3 {
            display: none;
            border-top: 3px solid #ff8b28 !important;
        }

        #menu4 {
            display: none;
            border-top: 3px solid #ff8b28 !important;
        }

        /* Background Services */
        .background-services {
            background-image: url('/public/img/washingmachine.jpg');
            background-repeat: no-repeat;
            /* background-position: center; */
            background-attachment: fixed;
            background-size: cover;
            height: 650px;
            color: #fff;
        }

        .btn-custom-services {
            background-color: #ff8b28;
            border-radius: 50px;
            padding: 10px;
            color: white;
            font-weight: bold;
            text-decoration: none;
            margin-left: 20%;
            transition: 1s all ease-in-out;
        }

        .card-body-process {
            background-color: #ff8b28;
            color: white;
            height: 300px;
            margin-top: 10%;
            padding: 10px;
        }

        .card-body-process>h5 {
            font-weight: bold;
            padding-top: 10%;
        }

        .card-body-process>p {
            padding-top: 5%;
        }


        .card-body-process2 {
            background-color: #edcbff;
            color: black;
            height: 300px;
            margin-top: 10%;
            padding: 10px;
        }

        .card-body-process2>h5 {
            font-weight: bold;
            padding-top: 10%;
        }

        .card-body-process2>p {
            padding-top: 5%;
        }


        .custom-text-card {
            font-size: 32px;
            margin-top: 5%;
        }


        .container-custom-our-services {
            margin-bottom: 20%;
            color: black;
            overflow: hidden;
            max-width: 100%;
            padding-bottom: 2%;
            border-bottom-right-radius: 80%;
        }

        /* Batam Shuttle Section */

        /* Batam Shuttle Backgound */
        .background-batam-shuttle {
            background-image: url('/public/img/delivery.jpeg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            opacity: 0.85;
            background-size: cover;
            height: 650px;
            color: #333;
        }

        .btn-custom-order-online {
            background-color: #ff8b28;
            color: white;
            font-weight: bold;
            padding: 3px 15px;
            text-decoration: none;
            margin-left: 35%;
            border-radius: 15%;
        }


        .custom-icon-batam-shuttle {
            background: #edcbff;
            padding: 20px;
            border-radius: 100%;
            margin-top: 20%;
            color: #ff8b28;
        }

        .custom-text-batam-shuttle {
            font-weight: bold;
            margin-top: 10%;

        }

        .custom-col-batam-shuttle {
            padding-top: 10%;
        }


        .custom-services-price-title {
            margin-top: 10%;
            font-size: 40px;
            font-weight: 500;
            text-align: center;
        }

        .container-custom-our-services {
            border-bottom-right-radius: 75%;
            padding-bottom: 5%;
            margin-right: 1%;
            color: black;
            background: white;
            margin-bottom: 5%;
        }

        .custom-text-price-batam-shuttle {
            margin-top: 10%;
            font-size: 16px;
        }

        .custom-desc-price-batam-shuttle {
            margin-top: 3%;
        }

        .custom-icon-batam-shuttle-question {
            background-color: #edcbff;
            color: #ff8b28;
            border-radius: 65%;
            padding: 1%;
        }

        .question {
            font-weight: 600;
        }

        .answer {
            margin-left: 10%;
            margin-top: 2%;
        }

        /* Price */
        .background-price {
            background-image: url('/public/img/price.jpg');
            height: 600px;
            background-repeat: no-repeat;
            background-size: cover;
            box-sizing: border-box;
            opacity: 0.5;
            background-position: center;
        }

        .custom-price-text {
            padding-top: 10%;
            margin-left: 15%;
            font-size: 22px;
            font-weight: 500;
        }

        .custom-price-subtitle {
            margin-left: 15%;
            margin-top: 5%;
        }

        .custom-price-desc {
            margin-left: 15%;
            margin-top: 3%;
            margin-right: 10%;
        }

        .custom-background-white-price {
            background: white;
            height: 470px;
            border-bottom-right-radius: 50%;
            width: 750px;
        }

        .custom-card-price {
            background-color: #ff8b28;
        }


        .line {
            color: blue;
            height: 2%;
        }



        .custom-button-order {
            background-color: #ff8b28;
            padding: 3% 40%;
            border: none;
            color: white;
        }









        /* Responsive */

        @media(max-width:576px) {

            /* Container Custom */
            .container-custom-our-services {
                border-bottom-right-radius: 5%;
                padding-bottom: 5%;
                color: black;
                background: white;
                margin-bottom: 5%;
                opacity: 0.85;
            }

            /* Box Contact */
            .box-contact {
                background-color: #edcbff;
                height: 200px;
            }

            /* Background Top  */
            .background-top {
                height: 450px;
                margin-top: 5%;
                background-attachment: fixed;
                background-image: url('/public/img/bgimg.jpg');
            }

            /* Custom icon batam shuttle */
            .card-text {
                margin-bottom: 10% !important;
            }

            .btn-custom-order-online {
                margin-bottom: 4%;
            }

            .custom-background-white-price {
                background: white;
                height: 600px;
                opacity: 0.70;
                font-weight: bold;
                border-bottom-right-radius: 0%;
                width: 400px;
            }
        }

        .custom-background {
            background-color: #ff8b28;
        }

        .custom-background-white {
            background-color: white;
        }
    </style>


    {{-- Bootstrap CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    {{-- Bootstrap Icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400&display=swap" rel="stylesheet">
    {{-- Animate CSS  --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
</head>

<body>
    @include('components.navbar')

    @yield('home')
    @yield('our-services')
    @yield('batam-shuttle')
    @yield('price')
    @yield('online-order')
    <script>
        const button = document.querySelector('#dropdownButton');
        const button2 = document.querySelector('#dropdownButton2');
        const button3 = document.querySelector('#dropdownButton3');
        const button4 = document.querySelector('#dropdownButton4');
        const menu = document.querySelector('.menu')
        const menu2 = document.querySelector('#menu2')
        const menu3 = document.querySelector('#menu3')
        const menu4 = document.querySelector('#menu4')

        button.addEventListener('mouseover', function() {

            if (menu.style.display = 'none') {
                menu.style.display = 'block'
            } else {
                menu.style.display = 'none'
            }
        })

        button.addEventListener('mouseleave', function() {
            menu.style.display = 'none'
        })

        // Button 2
        button2.addEventListener('mouseover', function() {

            if (menu2.style.display = 'none') {
                menu2.style.display = 'block'
            } else {
                menu2.style.display = 'none'
            }
        })

        button2.addEventListener('mouseleave', function() {
            menu2.style.display = 'none'
        })

        // Button 3
        button3.addEventListener('mouseover', function() {

            if (menu3.style.display = 'none') {
                menu3.style.display = 'block'
            } else {
                menu3.style.display = 'none'
            }
        })

        button3.addEventListener('mouseleave', function() {
            menu3.style.display = 'none'
        })

        // Button 4
        button4.addEventListener('mouseover', function() {

            if (menu4.style.display = 'none') {
                menu4.style.display = 'block'
            } else {
                menu4.style.display = 'none'
            }
        })

        button4.addEventListener('mouseleave', function() {
            menu4.style.display = 'none'
        })

        const customCardImage = document.querySelectorAll('#customCardImage')

        customCardImage.addEventListener('mouseover', function() {
            const a = document.createElement('a')

        })
    </script>

    @include('components.footer')

</body>

</html>
