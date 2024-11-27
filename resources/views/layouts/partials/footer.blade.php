<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- == google font == -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet" />
    <!-- == icon == -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
    <!-- == css == -->
    <link rel="stylesheet" href="style.css" />
    <title>Responsive Footer</title>
    <style>
        /* General reset and styling for the footer only */
        .custom-footer * {
            margin: 0;
            padding: 0;
        }

        /* Styling the body for footer */
        .custom-footer body {
            margin: 0;
            font-family: "Poppins", sans-serif;
            background: #333;
        }

        .custom-footer h1 {
            color: #fff;
            text-align: center;
            margin: 3em 0;
            font-size: 3em;
        }

        /* Footer Styling */
        .custom-footer {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            color: #fff;
            background: #121315;
        }

        .custom-footer ul {
            list-style: none;
        }

        .custom-footer p {
            color: #fff;
            max-width: 25em;
            font-size: 0.9em;
            line-height: 23px;
        }

        .custom-footer a {
            color: #fff;
            text-decoration: none;
        }

        .custom-footer-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2em;
        }

        .custom-footer .custom-footer-container {
            display: flex;
            justify-content: space-between;
            gap: 2em;
        }

        /* Brand section */
        .custom-footer-brand {
            display: block;
            font-size: 1.8em;
            font-weight: 600;
            margin-bottom: 1em;
        }

        /* Media Icons */
        .custom-footer-media-icons li,
        .custom-footer-services-icons li {
            display: inline-block;
            margin: 0.5em 0.5em 0.5em 0;
        }

        .custom-footer-media-icons a {
            font-size: 1.1em;
            width: 2em;
            height: 2em;
            border: 1px #fff solid;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            transition: 0.3s;
        }

        .custom-footer-media-icons a:hover {
            background: #fff;
            color: #111;
        }

        .custom-footer-services-icons a {
            font-size: 1.6em;
        }

        .custom-footer-services-icons a:hover {
            color: #94fbab;
        }

        /* Footer bottom */
        .custom-footer-bottom {
            display: flex;
            justify-content: center;
            border-top: 1px solid rgba(138, 208, 153, 0.36);
            padding: 2em;
        }

        /* Menu Section */
        .custom-footer .custom-footer-menu {
            margin-bottom: 1em;
        }

        .custom-footer .custom-footer-menu li {
            display: inline-block;
            margin: 0 0.7em 0.7em 0;
            text-align: center;
        }

        .custom-footer .custom-footer-menu a {
            transition: 0.3s;
            font-weight: 600;
        }

        .custom-footer .custom-footer-menu a:hover {
            color: #94fbab;
        }

        /* Input wrap */
        .custom-footer-input-wrap {
            margin: 1em 0;
            display: flex;
        }

        .custom-footer-input-wrap input {
            padding: 0.5em;
            border: none;
            background: #20232a;
            color: #ccc;
        }

        .custom-footer-input-wrap input:focus {
            outline: none;
        }

        .custom-footer-input-wrap button {
            padding: 0.8em;
            background: #94fbab;
            border: none;
            color: #217634;
            transition: 0.3s;
        }

        .custom-footer-input-wrap button:hover {
            background: #fff;
            color: #111;
        }

        /* == responsive == */
        @media screen and (max-width: 900px) {
            .custom-footer .custom-footer-container {
                flex-direction: column;
            }
        }
    </style>
</head>

<body>
    <footer class="custom-footer">
        <div class="custom-footer-container">
            <div class="custom-footer-col1">
                <a href="#" class="custom-footer-brand">Brand</a>
                <ul class="custom-footer-media-icons">
                    <li>
                        <a href="#"><i class="fa-brands fa-youtube"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa-brands fa-discord"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa-brands fa-github"></i></a>
                    </li>
                </ul>
            </div>
            <div class="custom-footer-col2">
                <ul class="custom-footer-menu">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Portfolio</a></li>
                    <li><a href="#">Skills</a></li>
                    <li><a href="#">Contact</a></li>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem excepturi ipsam unde
                        obcaecati iusto velit labore consequuntur officiis aut neque?</p>
                </ul>
            </div>
            <div class="custom-footer-col3">
                <p>Subscribe to our newsletter</p>
                <form>
                    <div class="custom-footer-input-wrap">
                        <input type="email" placeholder="ex@gmail.com" /><button type="submit"><i
                                class="fa-solid fa-paper-plane"></i></button>
                    </div>
                </form>
                <ul class="custom-footer-services-icons">
                    <li>
                        <a href="#"><i class="fa-brands fa-cc-paypal"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa-brands fa-cc-apple-pay"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa-brands fa-google-pay"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa-brands fa-cc-amazon-pay"></i></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="custom-footer-bottom">
            <div class="custom-footer-mekk">
                <p>@ndriWebDev 2023 - All Rights Reserved</p>
            </div>
        </div>
    </footer>
</body>

</html>
