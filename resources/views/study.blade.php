<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"><title>Study</title>
<meta charset="UTF-8">

<head>
    <link rel="stylesheet" href="{{ asset('/css/study.css') }}">
    <script src="jquery-3.5.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>



<body>
<div id="pomodoro">
    <div id="clock">
        <div id="timer">
            <div id="title">Ready?</div>
            <div id="countdown">
                <span id="minutes">30</span>
                <span id="seconds">00</span>
            </div>
            <div id="controls" class="reset">
                <div id="start"><i class="fas fa-play"></i> Start</div>
                <div id="pause"><i class="fas fa-pause"></i> Pause</div>
                <div id="reset"><i class="fas fa-sync-alt"></i> Reset</div>
            </div>
        </div>
    </div>
    <div id="options">
        <div id="session">
            <i id="incrSession" class="fas fa-angle-double-up"></i>
            <span class="option-title">Session</span>
            <input id="sessionInput" type="number" value="30" max="60" min="5">
            <i id="decrSession" class="fas fa-angle-double-down"></i>
        </div>
        <div id="break">
            <i id="incrBreak" class="fas fa-angle-double-up"></i>
            <span class="option-title">Break</span>
            <input id="breakInput" type="number" value="5" max="10" min="1">
            <i id="decrBreak" class="fas fa-angle-double-down"></i>
        </div>
    </div>
</div>
<script src="/js/app.js"> </script>

</body>
</html>
