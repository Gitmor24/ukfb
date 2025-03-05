<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="icon" href="./logo.png" sizes="32x32" type="image/png">
</head>
<style>
    /* Basic reset */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    /* Popup overlay */
    .popup-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(255, 255, 255, 0.7);
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 1000;
    }

    /* Popup content */
    .popup-content {
        background-color: white;
        padding: 30px;
        border-radius: 10px;
        text-align: center;
    }

    /* Spinner animation */
    .loader {
        border: 5px solid #f3f3f3;
        /* Light grey */
        border-top: 5px solid #3498db;
        /* Blue */
        border-radius: 50%;
        width: 50px;
        height: 50px;
        animation: spin 1s linear infinite;
        /* Spin animation */
        margin: 0 auto 15px auto;
        /* Center the spinner */
    }

    @keyframes spin {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }

    .popup-content p {
        font-size: 18px;
        color: #333;
    }
</style>

<body>
    <div class="popup-overlay" id="popupOverlay">
        <div class="popup-content">
            <div class="loader"></div>
        </div>
    </div>

    <script>
        setTimeout(function () {
            document.getElementById('popupOverlay').style.display = 'none';
            setTimeout(function () {
                window.location.href = "./login.php";
            }, 1000);
        }, 5000);
    </script>
</body>

</html>