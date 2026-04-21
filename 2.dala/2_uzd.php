<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2.Uzdevums</title>
    <style>
        body {
           margin: 0;
           overflow: hidden;
           background-color: black;
        }

        #square {
            position: absolute;
            top: 100px;
            left: 100px;
            width: 50px;
            height: 50px;
            background-color: grey;
        }
        
    </style>
</head>
<body>

    <div id="square"></div>

    <script>
        const square = document.getElementById('square');
        let x = 100;
        let y = 100;
        const step = 10;

        document.addEventListener('keydown', (e) => {
            switch (e.key) {
                case 'ArrowUp':
                    if (y > 0) {
                        y -= step;
                        break;
                    } else {
                        break;
                    }
                case 'ArrowDown':
                    if (y < window.innerHeight - 50) {
                        y += step;
                        break;
                    } else {
                        break;
                    }
                case 'ArrowLeft':
                    if (x > 0) {
                        x -= step;
                        break;
                    } else {
                        break;
                    }
                case 'ArrowRight':
                    if (x < window.innerWidth - 50) {
                        x += step;
                        break;
                    } else {
                        break;
                    }
            }

            square.style.left = x + 'px';
            square.style.top = y + 'px';
        })
    </script>
    
</body>
</html>