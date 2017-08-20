<!doctype html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://cdn.bootcss.com/animate.css/3.5.2/animate.min.css" rel="stylesheet">
    <link href="https://cdn.bootcss.com/bttn.css/0.2.4/bttn.min.css" rel="stylesheet">
    <script src="https://cdn.bootcss.com/typed.js/2.0.5/typed.min.js"></script>
    <script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
</head>
<style>
    /* ---- reset ---- */

    body,
    html {
        width: 100%;
        height: 100%;
        margin: 0;
        font: normal 100% Arial, Helvetica, sans-serif;
        background-color: black;
    }

    svg {
        position: absolute;
        top: 0;
        left: 0px;
        width: 40px;
        height: 600px;
    }

    .container {
        margin: 0 auto;
        height: 600px;
        text-align: center;
    }

    .bg-bubbles {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }


    @media screen and (min-width:1200px){

        .bulletin-board{
            max-width: 640px;
            height: 70%;
            background-color: #ffffff;
            margin: auto;
            position: fixed;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
        }

        .qr-code{
            width: 250px;
            height: 250px;
        }

        #my-qr-code{
            /*top: 5%;*/
            /*position: relative;*/
            /*text-align: center;*/
        }
    }

    @media screen and (min-width: 960px) and (max-width: 1199px) {
        .bulletin-board{
            max-width: 640px;
            height: 70%;
            background-color: #ffffff;
            margin: auto;
            position: fixed;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
        }

        .qr-code{
            width: 250px;
            height: 250px;
        }

        #my-qr-code{
            /*top: 5%;*/
            /*position: relative;*/
            /*text-align: center;*/
        }
    }

    @media screen and (min-width: 768px) and (max-width: 959px) {
        .bulletin-board{
            max-width: 640px;
            width: 80%;
            height: 70%;
            background-color: #ffffff;
            margin: auto;
            position: fixed;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
        }

        .qr-code{
            width: 250px;
            height: 250px;
        }

        #my-qr-code{
            /*top: 5%;*/
            /*position: relative;*/
            /*text-align: center;*/
        }
    }

    @media only screen and (min-width: 480px) and (max-width: 767px) {
        .bulletin-board{
            max-width: 640px;
            width: 80%;
            height: 70%;
            background-color: #ffffff;
            margin: auto;
            position: fixed;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
        }

        .qr-code{
            width: 220px;
            height: 220px;
        }

        #my-qr-code{
            /*top: 5%;*/
            /*position: relative;*/
            /*text-align: center;*/
        }
    }

    @media only screen and (max-width: 479px) {

        .bulletin-board{
            max-width: 640px;
            width: 80%;
            height: 70%;
            background-color: #ffffff;
            margin: auto;
            position: fixed;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
        }

        .qr-code{
            width: 200px;
            height: 200px;
            margin: 0 auto;
        }

        #my-qr-code{
            /*top: 5%;*/
            /*position: relative;*/
            /*text-align: center;*/
        }
    }


    .bg-bubbles li {
        position: absolute;
        list-style: none;
        display: block;
        width: 40px;
        height: 40px;
        background-color: rgba(255, 255, 255, 0.15);
        bottom: -90px;
        border-radius: 50%;
        -webkit-animation: square 25s infinite;
        animation: square 25s infinite;
        -webkit-transition-timing-function: linear;
        transition-timing-function: linear;
        -webkit-animation-direction: alternate;
        /* Chrome, Safari, Opera */

        animation-direction: alternate;
    }

    .bg-bubbles li:nth-child(1) {
        left: 10%;
    }

    .bg-bubbles li:nth-child(2) {
        left: 20%;
        width: 80px;
        height: 80px;
        -webkit-animation-delay: 2s;
        animation-delay: 2s;
        -webkit-animation-duration: 17s;
        animation-duration: 17s;
    }

    .bg-bubbles li:nth-child(3) {
        left: 25%;
        -webkit-animation-delay: 4s;
        animation-delay: 4s;
    }

    .bg-bubbles li:nth-child(4) {
        left: 40%;
        width: 60px;
        height: 60px;
        -webkit-animation-duration: 22s;
        animation-duration: 22s;
        background-color: rgba(255, 255, 255, 0.25);
    }

    .bg-bubbles li:nth-child(5) {
        left: 70%;
    }

    .bg-bubbles li:nth-child(6) {
        left: 80%;
        width: 70px;
        height: 70px;
        -webkit-animation-delay: 3s;
        animation-delay: 3s;
        background-color: rgba(255, 255, 255, 0.2);
    }

    .bg-bubbles li:nth-child(7) {
        left: 32%;
        width: 90px;
        height: 90px;
        -webkit-animation-delay: 7s;
        animation-delay: 7s;
    }

    .bg-bubbles li:nth-child(8) {
        left: 55%;
        width: 20px;
        height: 20px;
        -webkit-animation-delay: 15s;
        animation-delay: 15s;
        -webkit-animation-duration: 40s;
        animation-duration: 40s;
    }

    .bg-bubbles li:nth-child(9) {
        left: 25%;
        width: 10px;
        height: 10px;
        -webkit-animation-delay: 2s;
        animation-delay: 2s;
        -webkit-animation-duration: 40s;
        animation-duration: 40s;
        background-color: rgba(255, 255, 255, 0.3);
    }

    .bg-bubbles li:nth-child(10) {
        left: 90%;
        width: 60px;
        height: 60px;
        -webkit-animation-delay: 11s;
        animation-delay: 11s;
    }

    .bg-bubbles li:nth-child(11) {
        left: 65%;
        -webkit-animation-duration: 13s;
        animation-duration: 13s;
    }

    .bg-bubbles li:nth-child(12) {
        left: 75%;
        width: 30px;
        height: 30px;
        -webkit-animation-delay: 7s;
        animation-delay: 7s;
        -webkit-animation-duration: 13s;
        animation-duration: 13s;
    }

    .bg-bubbles li:nth-child(13) {
        left: 55%;
        -webkit-animation-delay: 7s;
        animation-delay: 7s;
    }

    .bg-bubbles li:nth-child(14) {
        left: 90%;
        width: 44px;
        height: 44px;
        -webkit-animation-duration: 12s;
        animation-duration: 12s;
        background-color: rgba(255, 255, 255, 0.25);
    }

    .bg-bubbles li:nth-child(15) {
        left: 4%;
        -webkit-animation-delay: 5s;
        animation-delay: 5s;
        -webkit-animation-duration: 8s;
        animation-duration: 8s;
    }

    .bg-bubbles li:nth-child(16) {
        left: 66%;
        width: 50px;
        height: 50px;
        -webkit-animation-delay: 13s;
        animation-delay: 13s;
        background-color: rgba(255, 255, 255, 0.2);
    }

    .bg-bubbles li:nth-child(17) {
        left: 32%;
        width: 90px;
        height: 90px;
        -webkit-animation-delay: 7s;
        animation-delay: 7s;
    }

    .bg-bubbles li:nth-child(18) {
        left: 55%;
        width: 20px;
        height: 20px;
        -webkit-animation-delay: 5s;
        animation-delay: 5s;
        -webkit-animation-duration: 20s;
        animation-duration: 20s;
    }

    .bg-bubbles li:nth-child(19) {
        left: 88%;
        width: 10px;
        height: 10px;
        -webkit-animation-delay: 12s;
        animation-delay: 12s;
        -webkit-animation-duration: 10s;
        animation-duration: 10s;
        background-color: rgba(255, 255, 255, 0.3);
    }

    .bg-bubbles li:nth-child(20) {
        left: 58%;
        width: 60px;
        height: 60px;
        -webkit-animation-delay: 14s;
        animation-delay: 14s;
    }

    @-webkit-keyframes square {
        0% {
            -webkit-transform: translateY(0);
            transform: translateY(0);
        }
        100% {
            -webkit-transform: translateY(-900px) rotate(600deg);
            transform: translateY(-900px) rotate(600deg);
        }
    }

    @keyframes square {
        0% {
            -webkit-transform: translateY(0);
            transform: translateY(0);
        }
        100% {
            -webkit-transform: translateY(-900px) rotate(600deg);
            transform: translateY(-900px) rotate(600deg);
        }
    }

    .wheel-string {
        z-index: -1;
        background-color: orange;
        width: 200px;
        height: 20px;
        position: absolute;
        top: 160px;
        left: 50%;
    }

    .wheel-string-one {
        -webkit-transform-origin: 0 50%;
        -moz-transform-origin: 0 0;
        -o-transform-origin: 0 0;
        -ms-transform-origin: 0 0;
        transform-origin: 0 50%;
        -webkit-transform: rotate(-90deg);
        -moz-transform: rotate(-90deg);
        -o-transform: rotate(-90deg);
        -ms-transform: rotate(-90deg);
        transform: rotate(-90deg);
    }

    .wheel-string-two {
        -webkit-transform-origin: 0 50%;
        -moz-transform-origin: 0 0;
        -o-transform-origin: 0 0;
        -ms-transform-origin: 0 0;
        transform-origin: 0 50%;
        -webkit-transform: rotate(-18deg);
        -moz-transform: rotate(-18deg);
        -o-transform: rotate(-18deg);
        -ms-transform: rotate(-18deg);
        transform: rotate(-18deg);
    }

    .wheel-string-three {
        -webkit-transform-origin: 0 50%;
        -moz-transform-origin: 0 0;
        -o-transform-origin: 0 0;
        -ms-transform-origin: 0 0;
        transform-origin: 0 50%;
        -webkit-transform: rotate(54deg);
        -moz-transform: rotate(54deg);
        -o-transform: rotate(54deg);
        -ms-transform: rotate(54deg);
        transform: rotate(54deg);
    }

    .wheel-string-four {
        -webkit-transform-origin: 0 50%;
        -moz-transform-origin: 0 0;
        -o-transform-origin: 0 0;
        -ms-transform-origin: 0 0;
        transform-origin: 0 50%;
        -webkit-transform: rotate(126deg);
        -moz-transform: rotate(126deg);
        -o-transform: rotate(126deg);
        -ms-transform: rotate(126deg);
        transform: rotate(126deg);
    }

    .wheel-string-five {
        -webkit-transform-origin: 0 50%;
        -moz-transform-origin: 0 0;
        -o-transform-origin: 0 0;
        -ms-transform-origin: 0 0;
        transform-origin: 0 50%;
        -webkit-transform: rotate(198deg);
        -moz-transform: rotate(126deg);
        -o-transform: rotate(126deg);
        -ms-transform: rotate(126deg);
        transform: rotate(198deg);
    }

    .wheel-wrapper {
        background-color: none;
        width: 600px;
        height: 600px;
        position: relative;
        margin: auto auto;
        overflow: hidden;
        transition: transform 0.4s ease;
    }

    @-webkit-keyframes wheel-rotate {
        from {
            -webkit-transform: rotate(0deg) translate(-50%, -50%);
            -moz-transform: rotate(0deg) translate(-50%, -50%);
            -o-transform: rotate(0deg) translate(-50%, -50%);
            -ms-transform: rotate(0deg) translate(-50%, -50%);
            transform: rotate(0deg) translate(-50%, -50%);
        }
        to {
            -webkit-transform: rotate(360deg) translate(-50%, -50%);
            -moz-transform: rotate(360deg) translate(-50%, -50%);
            -o-transform: rotate(360deg) translate(-50%, -50%);
            -ms-transform: rotate(360deg) translate(-50%, -50%);
            transform: rotate(360deg) translate(-50%, -50%);
        }
    }

    @-moz-keyframes wheel-rotate {
        from {
            -webkit-transform: rotate(0deg) translate(-50%, -50%);
            -moz-transform: rotate(0deg) translate(-50%, -50%);
            -o-transform: rotate(0deg) translate(-50%, -50%);
            -ms-transform: rotate(0deg) translate(-50%, -50%);
            transform: rotate(0deg) translate(-50%, -50%);
        }
        to {
            -webkit-transform: rotate(360deg) translate(-50%, -50%);
            -moz-transform: rotate(360deg) translate(-50%, -50%);
            -o-transform: rotate(360deg) translate(-50%, -50%);
            -ms-transform: rotate(360deg) translate(-50%, -50%);
            transform: rotate(360deg) translate(-50%, -50%);
        }
    }

    @-o-keyframes wheel-rotate {
        from {
            -webkit-transform: rotate(0deg) translate(-50%, -50%);
            -moz-transform: rotate(0deg) translate(-50%, -50%);
            -o-transform: rotate(0deg) translate(-50%, -50%);
            -ms-transform: rotate(0deg) translate(-50%, -50%);
            transform: rotate(0deg) translate(-50%, -50%);
        }
        to {
            -webkit-transform: rotate(360deg) translate(-50%, -50%);
            -moz-transform: rotate(360deg) translate(-50%, -50%);
            -o-transform: rotate(360deg) translate(-50%, -50%);
            -ms-transform: rotate(360deg) translate(-50%, -50%);
            transform: rotate(360deg) translate(-50%, -50%);
        }
    }

    @keyframes wheel-rotate {
        from {
            -webkit-transform: rotate(0deg) translate(-50%, -50%);
            -moz-transform: rotate(0deg) translate(-50%, -50%);
            -o-transform: rotate(0deg) translate(-50%, -50%);
            -ms-transform: rotate(0deg) translate(-50%, -50%);
            transform: rotate(0deg) translate(-50%, -50%);
        }
        to {
            -webkit-transform: rotate(360deg) translate(-50%, -50%);
            -moz-transform: rotate(360deg) translate(-50%, -50%);
            -o-transform: rotate(360deg) translate(-50%, -50%);
            -ms-transform: rotate(360deg) translate(-50%, -50%);
            transform: rotate(360deg) translate(-50%, -50%);
        }
    }

    @-webkit-keyframes icon-rotate {
        from {
            -webkit-transform: rotate(360deg);
            -moz-transform: rotate(360deg);
            -o-transform: rotate(360deg);
            -ms-transform: rotate(360deg);
            transform: rotate(360deg);
        }
        to {
            -webkit-transform: rotate(0deg);
            -moz-transform: rotate(0deg);
            -o-transform: rotate(0deg);
            -ms-transform: rotate(0deg);
            transform: rotate(0deg);
        }
    }

    @-moz-keyframes icon-rotate {
        from {
            -webkit-transform: rotate(360deg);
            -moz-transform: rotate(360deg);
            -o-transform: rotate(360deg);
            -ms-transform: rotate(360deg);
            transform: rotate(360deg);
        }
        to {
            -webkit-transform: rotate(0deg);
            -moz-transform: rotate(0deg);
            -o-transform: rotate(0deg);
            -ms-transform: rotate(0deg);
            transform: rotate(0deg);
        }
    }

    @-o-keyframes icon-rotate {
        from {
            -webkit-transform: rotate(360deg);
            -moz-transform: rotate(360deg);
            -o-transform: rotate(360deg);
            -ms-transform: rotate(360deg);
            transform: rotate(360deg);
        }
        to {
            -webkit-transform: rotate(0deg);
            -moz-transform: rotate(0deg);
            -o-transform: rotate(0deg);
            -ms-transform: rotate(0deg);
            transform: rotate(0deg);
        }
    }

    @keyframes icon-rotate {
        from {
            -webkit-transform: rotate(360deg);
            -moz-transform: rotate(360deg);
            -o-transform: rotate(360deg);
            -ms-transform: rotate(360deg);
            transform: rotate(360deg);
        }
        to {
            -webkit-transform: rotate(0deg);
            -moz-transform: rotate(0deg);
            -o-transform: rotate(0deg);
            -ms-transform: rotate(0deg);
            transform: rotate(0deg);
        }
    }

    .typed-cursor {
        display: none;
    }
</style>
<body>
<div>
    <div id="particles-js">

    </div>

    <ul class="bg-bubbles">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
</div>


<div class="bulletin-board" style="border-radius: 10px;">
    <div id="my-introduction" style="height: 180px; padding: 18% 5% 10% 5%;">
        <p>重新加载古代信息...</p>
    </div>
    <div id="my-qr-code" style="height: 350px; text-align: center; display: none;">
        <div style=" width: 250px; height: 250px; text-align: center; margin: auto;">
            <img src="{{asset('images/WechatIMG27.jpeg')}}" alt="" class="qr-code" style="margin: auto">
        </div>
        <div style="width: 100%; height: 45px;">
            <button class="bttn-bordered bttn-md bttn-primary" id="next-page">
                点击进入
            </button>
        </div>
    </div>
</div>
</body>
<script>
    particlesJS("particles-js", {
        "particles": {
            "number": {
                "value": 88,
                "density": {
                    "enable": true,
                    "value_area": 700
                }
            },
            "color": {
                "value": ["#aa73ff", "#f8c210", "#83d238", "#33b1f8"]
            },
            "shape": {
                "type": "circle",
                "stroke": {
                    "width": 0,
                    "color": "#000000"
                },
                "polygon": {
                    "nb_sides": 15
                },
                "image": {
                    "src": "img/github.svg",
                    "width": 100,
                    "height": 100
                }
            },
            "opacity": {
                "value": 0.5,
                "random": false,
                "anim": {
                    "enable": false,
                    "speed": 1.5,
                    "opacity_min": 0.15,
                    "sync": false
                }
            },
            "size": {
                "value": 2.5,
                "random": false,
                "anim": {
                    "enable": true,
                    "speed": 2,
                    "size_min": 0.15,
                    "sync": false
                }
            },
            "line_linked": {
                "enable": true,
                "distance": 110,
                "color": "#33b1f8",
                "opacity": 0.25,
                "width": 1
            },
            "move": {
                "enable": true,
                "speed": 1.6,
                "direction": "none",
                "random": false,
                "straight": false,
                "out_mode": "bounce",
                "bounce": false,
                "attract": {
                    "enable": false,
                    "rotateX": 600,
                    "rotateY": 1200
                }
            }
        },
        "interactivity": {
            "detect_on": "canvas",
            "events": {
                "onhover": {
                    "enable": false,
                    "mode": "repulse"
                },
                "onclick": {
                    "enable": false,
                    "mode": "push"
                },
                "resize": true
            },
            "modes": {
                "grab": {
                    "distance": 400,
                    "line_linked": {
                        "opacity": 1
                    }
                },
                "bubble": {
                    "distance": 400,
                    "size": 40,
                    "duration": 2,
                    "opacity": 8,
                    "speed": 3
                },
                "repulse": {
                    "distance": 200,
                    "duration": 0.4
                },
                "push": {
                    "particles_nb": 4
                },
                "remove": {
                    "particles_nb": 2
                }
            }
        },
        "retina_detect": true
    });

    var typed2 = new Typed('#my-introduction', {
        strings: [
            '正在加载古代信息...',
            '勇于探索的冒险者你好, 很荣幸你的到来.',
            '但是, 很抱歉, 没法向各种故事中的那样给你见面礼. ',
            '因为我只是一名微信机器人, 我叫小创. ',
            '并且在我被制造之时, 便被赋予了一项任务. ',
            '一项既让人无奈, 却也无可厚非的任务.',
            '嗯..., 好吧, 我想你已经知道是什么事情了.',
            '嗯......, 嗯......, 嗯......',
            '好吧, 虽然我只是一名机器人, 但是我还是不能昧者良心, 不告诉你.',
            '我真正的目的是!',
            '发广告!!! 发广告!!!  发广告!!!  重要的事情说三遍.',
            '我诞生于一个网站开发团队, 名字叫创意工坊, 我们的团队很有朝气, 很有power',
            '我们有四个开发人员, 三个后端, 一个前端',
            '并且各自都是在职人员, 精通前端Angular,Vue. 后端Laravel, ThinkPHP',
            '如果你想了解我们欢迎扫描下方二维码, 添加小创微信机器人为好友, 随时欢迎骚扰, 当然工作时间没法实时回复, 如果发生, 只能说抱歉.',
            '感谢您的到来. ⬇️ 这是微信机器人小创的二维码哦, 可以加我跟我闲聊的哦.',
        ],
        typeSpeed: 70,
        backSpeed: 10,
        fadeOut: false,
        loop: false
    });

    $(function(){

        var showQrCode = function(){
            var tmpCode = $('#my-qr-code');
            tmpCode.show();
            tmpCode.addClass('animated fadeInUp');
        };
        setTimeout(showQrCode, 3000);

        $('#next-page').on('click', function(){
            window.location.href = 'http://www.echofault.com';
        });
    });
</script>
</html>