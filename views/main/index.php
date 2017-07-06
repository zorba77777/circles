<?php
/**
 * @var object $settings
 */
?>
<canvas id="canvas" style="position: absolute; left: 0; top: 0"></canvas>

<script>

    var parameters = <?= $settings ?>;

    function createCircle (ctx, numberOfCircle, stage) {
        ctx.beginPath();
        if (numberOfCircle == 'first') {
            ctx.arc(
                parameters.firstCircle.center.oX,
                parameters.firstCircle.center.oY,
                parameters.firstCircle.radius,
                0,
                Math.PI * 2,
                true
            );
            if (stage == 'initial') {
                ctx.fillStyle = parameters.firstCircle.initialColor;
            } else {
                ctx.fillStyle = parameters.firstCircle.colorOnClick;
            }
        } else {
            ctx.arc(
                parameters.secondCircle.center.oX,
                parameters.secondCircle.center.oY,
                parameters.secondCircle.radius,
                0,
                Math.PI * 2,
                true
            );
            if (stage == 'initial') {
                ctx.fillStyle = parameters.secondCircle.initialColor;
            } else {
                ctx.fillStyle = parameters.secondCircle.colorOnClick;
            }
        }
        ctx.fill();
        ctx.closePath();
    }

    function init() {
        var canvas = document.getElementById('canvas');
        canvas.width = window.innerWidth;
        canvas.height = window.innerHeight;
        var ctx = canvas.getContext('2d');

        createCircle(ctx, 'first', 'initial');

        createCircle(ctx, 'second', 'initial');


        $('#canvas').click(function (e) {
            var x = e.clientX;
            var y = e.clientY;

            if (
                Math.pow(x - parameters.firstCircle.center.oX, 2) +
                Math.pow(y - parameters.firstCircle.center.oY, 2) <
                Math.pow(parameters.firstCircle.radius, 2)
            ) {
                createCircle(ctx, 'first', 'onClick');
                alert(parameters.firstCircle.message);
            }

            if (
                Math.pow(x - parameters.secondCircle.center.oX, 2) +
                Math.pow(y - parameters.secondCircle.center.oY, 2) <
                Math.pow(parameters.secondCircle.radius, 2)
            ) {
                createCircle(ctx,'second', 'onClick');
                alert(parameters.secondCircle.message);
            }
        });
    }

    $(document).ready(function () {
        init();
    });

</script>