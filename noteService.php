<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .paint-canvas {
        border: 1px black solid;
        display: block;
        margin: 1rem;
    }

    .color-picker {
        margin: 1rem 1rem 0 1rem;
    }

    .container {
        display: grid;
        grid-template-columns: auto auto auto auto;
        grid-template-rows: 100px 300px;
        grid-gap: 10px;
    }

    .grid-container>div {

        text-align: center;
        padding: 20px 0;
    }
</style>

<body>
    <div class="container">
        <form action="insertService.php" method="post" name="form1" id="form1">
            <div>
                <label for="dateNote">Date</label>
                <input type="date" name="dateNote" id="dateNote">
            </div>

            <div> <label for="compagnie">compagnie</label>
                <input type="text" name="compagnie" id="compagnie">
            </div>
            <div> <label for="departementFrom">Departement</label>
                <input type="text" name="departementFrom" id="departementFrom">
            </div>
            <div> <label for="directeur">Le directeur</label>
                <input type="text" name="directeur" id="directeur">
            </div>
            <div> <label for="Informe">Informe</label>
                <input type="text" name="Informe" id="Informe">
            </div>
            <div> <label for="mr">M</label>
                <input type="text" name="mr" id="mr">
            </div>
            <div> <label for="demande">Demande A</label>
                <input type="text" name="demande" id="demande">
            </div>
            <div>
                <label for="fonction">Fonction</label>
                <input type="text" name="fonction" id="fonction">
            </div>


            <div> <label for="rappel">Rappel A</label>
                <input type="text" name="rappel" id="rappel">
            </div>




            <div> <label for="departementTo">Departement</label>
                <input type="text" name="departementTo" id="departementTo">
            </div>


            <div> <textarea name="content" rows="4" cols="50"></textarea>
            </div>


            <div>
                <input type="color" class="js-color-picker  color-picker">
                <input type="range" class="js-line-range" min="1" max="72" value="1">
                <label class="js-range-value">1</label>Px
                <canvas class="js-paint  paint-canvas" width="300" height="200" id="canvas"></canvas>
            </div>

            <input name="hidden_data" id='hidden_data' type="hidden" />
            <div> <input type="button" onclick="uploadEx()" value="Upload" />
            </div>

        </form>
    </div>
</body>
<script>
    const paintCanvas = document.querySelector('.js-paint');
    const context = paintCanvas.getContext('2d');
    context.lineCap = 'round';

    const colorPicker = document.querySelector('.js-color-picker');

    colorPicker.addEventListener('change', event => {
        context.strokeStyle = event.target.value;
    });

    const lineWidthRange = document.querySelector('.js-line-range');
    const lineWidthLabel = document.querySelector('.js-range-value');

    lineWidthRange.addEventListener('input', event => {
        const width = event.target.value;
        lineWidthLabel.innerHTML = width;
        context.lineWidth = width;
    });

    let x = 0,
        y = 0;
    let isMouseDown = false;

    const stopDrawing = () => {
        isMouseDown = false;
    }
    const startDrawing = event => {
        isMouseDown = true;
        [x, y] = [event.offsetX, event.offsetY];
    }
    const drawLine = event => {
        if (isMouseDown) {
            const newX = event.offsetX;
            const newY = event.offsetY;
            context.beginPath();
            context.moveTo(x, y);
            context.lineTo(newX, newY);
            context.stroke();
            //[x, y] = [newX, newY];
            x = newX;
            y = newY;
        }
    }

    paintCanvas.addEventListener('mousedown', startDrawing);
    paintCanvas.addEventListener('mousemove', drawLine);
    paintCanvas.addEventListener('mouseup', stopDrawing);
    paintCanvas.addEventListener('mouseout', stopDrawing);

    function uploadEx() {
        var canvas = document.getElementById("canvas");
        var dataURL = canvas.toDataURL("image/png");
        document.getElementById('hidden_data').value = dataURL;
        var fd = new FormData(document.forms["form1"]);

        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'insertService.php', true);

        xhr.upload.onprogress = function(e) {
            if (e.lengthComputable) {
                var percentComplete = (e.loaded / e.total) * 100;
                console.log(percentComplete + '% uploaded');
                alert('Succesfully uploaded');
            }
        };

        xhr.onload = function() {

        };
        xhr.send(fd);
        document.getElementById("form1").submit();

    };
</script>

</html>