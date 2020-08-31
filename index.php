<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Jquery Youtube Fullscreen Background Video</title>
    <meta name="keywords" content="background, video, jquery, plugin, javascript, css, 360, youtube">
    <meta name="description" content="Create fullscreen youtube background videos with this jquery plugin.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Twitter Boostrap for Demo -->
     <!-- styles for video player -->
 </head>
<body>

<div id="background-video" class="background-video">
</div>


<script src="lib/jquery/jquery.min.js"></script>
<!-- ADD Jquery Video Background -->
<script src="src/jquery.youtubebackground.js"></script>
<script>
    jQuery(function ($) {

        $('#module-video').YTPlayer({
            fitToBackground: false,
            videoId: 'jKCyFB5LmPo',
            pauseOnScroll: false,
            playerVars: {
                modestbranding: 0,
                autoplay: 1,
                controls: 1,
                showinfo: 0,
                branding: 0,
                rel: 0,
                autohide: 0
            }
        });


        $('#background-video').YTPlayer({
            fitToBackground: false,
            videoId: 'Y9yRL24gWhk',
            pauseOnScroll: true,
            callback: function () {
                videoCallbackEvents();
            }
        });

        var videoCallbackEvents = function () {
            var player = $('#background-video').data('ytPlayer').player;

            player.addEventListener('onStateChange', function (event) {
                console.log("Player State Change", event);

                // OnStateChange Data
                if (event.data === 0) {
                    console.log('video ended');
                } else if (event.data === 2) {
                  window.location.href='home.php';
                }
            });
        }


    });


</script>
</body>
</html>
