<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
  <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
  <title>Monsters</title>
  <style>
    /**html, body {
      margin: 0;
      padding: 0;,
      height: 100%;
      width: 100%;
      background-color: #d1d1d1
    }
    #mute {
      position: absolute;
    }
    #mute.on {
      opacity: 0.7;
      z-index: 1000;
      background: white;
      height: 100%;
      width: 100%;
    }*/
  </style>
</head>
<body>
<div id="mute"></div>
<div  class="container" id="app"></div>
<script src="js/app.js"></script>
</body>
</html>
	
	