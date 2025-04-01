<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cursor de Guante de Boxeo</title>
    <style>
        * {
            cursor: none;
        }

        body {
            margin: 0;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #f0f0f0;
            cursor: none;
        }

        body:active .cursor {
            background: url('boxingBlue.svg') no-repeat center;
            background-size: cover;
        }

        .cursor {
            position: absolute;
            width: 50px;
            height: 50px;
            background: url('boxingRed.svg') no-repeat center;
            background-size: cover;
            pointer-events: none;
            transform: translate(-50%, -50%) rotate(-180deg) scaleY(-1);
            transition: background 0.1s ease-in-out;
        }
    </style>
</head>

<body>
    <div class="cursor" id="cursor"></div>
    <h1>¡Mueve el guante de boxeo!</h1>
    <input type="text">
    <script>
        document.addEventListener("mousemove", function(event) {
            let cursor = document.getElementById("cursor");
            cursor.style.left = `${event.clientX}px`;
            cursor.style.top = `${event.clientY}px`;
        });
    </script>
</body>

</html>