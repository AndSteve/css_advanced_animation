<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Spinning Div</title>
    <link type="image/png" rel="icon" href="https://cdn3.iconfinder.com/data/icons/iconic-1/32/spin_alt-32.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $('button').click(function () {
                var offset = $('.circle').offset();
                var R = Math.floor(Math.random() * 255);
                var G = Math.floor(Math.random() * 255);
                var B = Math.floor(Math.random() * 255);
                $('.circle').css("border-color", 'rgb(' + R + ',' + G + ',' + B + '');
                var newCircle = $('<div>', {
                    class: 'stationaryCircle',
                }).css({
                    "top": offset.top,
                    "left": offset.left,
                    "border-color": 'rgb(' + R + ',' + G + ',' + B + ''
                });
                $('.parent').append(newCircle);
            })
        })
    </script>
    <style>
        .parent {
            position: relative;
            height: 97vh;
        }

        .stick {
            position: absolute;
            top: 50%;
            left: 25%;
            transform: translate(-50%, -50%);
            height: 1px;
            width: 50vw;
            #border: 1px solid black;
            #border-radius: 100%;
            animation: divspin 1s linear infinite;
        }

        .circle {
            position: absolute;
            top: 50%;
            transform: translate(-50%, -50%);
            height: 30px;
            width: 30px;
            border: 1px solid black;
            -webkit-border-radius: 100%;
            -moz-border-radius: 100%;
            border-radius: 100%;
            animation: bounce 20s linear infinite;
        }

        .stationaryCircle {
            border-radius: 100%;
            border: 1px solid;
            position:absolute;
            height:30px;
            width:30px;
        }

        @-webkit-keyframes divspin {
            0% {
                transform: rotateZ(0deg)
            }
            50% {
                transform: rotateZ(180deg)
            }
            100% {
                transform: rotateZ(360deg)
            }
        }

        @-webkit-keyframes bounce {
            0% {
                left: 0
            }
            50% {
                left: 100%
            }
            100% {
                left: 0
            }
        }
    </style>
</head>
<body>
<div class="parent">
    <div class="stick">
        <div class="circle"></div>
    </div>
</div>
<button type="button">Press Me</button>
</body>
</html>