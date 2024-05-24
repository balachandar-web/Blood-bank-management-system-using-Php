<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Zooming Button Animation</title>
<style>
    .zoom-button {
        display: inline-block;
        padding: 10px 20px;
        font-size: 16px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        animation: zoomInOut 4s infinite alternate;
    }

    @keyframes zoomInOut {
        0% {
            transform: scale(1);
        }
        50% {
            transform: scale(1.2);
        }
        100% {
            transform: scale(1);
        }
    }
</style>
</head>
<body>
    <button class="zoom-button">Zooming Button</button>
</body>
</html>
