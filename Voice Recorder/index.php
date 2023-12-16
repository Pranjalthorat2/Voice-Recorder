<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<title>Audio Capture</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="app">
        <select name="" id="micSelect"></select>

        <select id="visSelect">
          <option value="frequencybars">Bar</option>
          <option value="sinewave">Wave</option>
          <option value="circle">Circle</option>
        </select>

        <a id="download">Download</a>

        <div class="audio-controls">
            <button id="record">Record</button>
            <button id="stop">Stop</button>
            <audio id="audio" controls></audio>
        </div>
        <div id="msg">Recording...</div>
        <canvas width="500" height="300"></canvas><br>


        <script src="javas.js">
        </script>
</body>

</html>