<!DOCTYPE html>
<html>
    <head>
         <link type="text/css" rel="stylesheet" href="../node_modules/@zoomus/websdk/dist/css/bootstrap.css" />
    <link type="text/css" rel="stylesheet" href="../node_modules/@zoomus/websdk/dist/css/react-select.css" />
    </head>

<style>
/*#zmmtg-root {*/
/*  display: none;*/
/*}*/
</style>    
<body class="ReactModal__Body--open">
    
    <!-- added on import -->
        
    <div id="zmmtg-root">
        <!--<button class="new_button" onclick="startLive()">Start Button</button>-->
        </div>
    <div id="aria-notify-area"></div>
    
    <!-- added on meeting init -->
    <div class="ReactModalPortal"></div>
    <div class="ReactModalPortal"></div>
    <div class="ReactModalPortal"></div>
    <div class="ReactModalPortal"></div>
    <div class="global-pop-up-box"></div>
    <div class="sharer-controlbar-container sharer-controlbar-container--hidden"></div>
   <!-- import ZoomMtg dependencies -->
   
    <script src="https://source.zoom.us/1.8.1/lib/vendor/react.min.js"></script>
    <script src="https://source.zoom.us/1.8.1/lib/vendor/react-dom.min.js"></script>
    <script src="https://source.zoom.us/1.8.1/lib/vendor/redux.min.js"></script>
    <script src="https://source.zoom.us/1.8.1/lib/vendor/redux-thunk.min.js"></script>
    <script src="https://source.zoom.us/1.8.1/lib/vendor/jquery.min.js"></script>
    <script src="https://source.zoom.us/1.8.1/lib/vendor/lodash.min.js"></script>

    <!-- import ZoomMtg -->
    <script src="https://source.zoom.us/zoom-meeting-1.8.1.min.js"></script>
    <!--<script src="Dashboard/js/lib/jquery/jquery-3.2.1.min.js"></script>-->
    <!-- import local .js file -->
    <?php $date = date("Y-m-d H:i:s")?>
    <script src="index.js?<?php echo $date; ?>"></script> 
</body>
</html>