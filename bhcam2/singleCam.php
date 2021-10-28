<!DOCTYPE html>
<html lang="en" dir="ltr" >
<head>
    <title>BHCAM</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="jPn1pIU4QrIwYzCAD50Fqkx2tCxNtXijaWWBE1D4"/>
    <meta charset="utf-8">


    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="app.css">

    <link rel="stylesheet" type="text/css" href="voyager.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/emojionearea/3.4.2/emojionearea.min.css" integrity="sha512-vEia6TQGr3FqC6h55/NdU3QSM5XR6HSl5fW71QTKrgeER98LIMGwymBVM867C1XHIkYD9nMTfWK2A0xcodKHNA==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <style>

    video::-webkit-media-controls-play-button {
         display: none;
     }
     video::-webkit-media-controls-timeline {

     }
     video::-webkit-media-controls-current-time-display{
         display: none;
     }
video::-webkit-media-controls-time-remaining-display {
    display: none;
}
video::-webkit-media-controls-time-remaining-display {
    display: none;
}

   audio::-webkit-media-controls-timeline,
        video::-webkit-media-controls-timeline {
            display: none;
        }

            audio::-webkit-media-controls-mute-button, video::-webkit-media-controls-mute-button {
    -webkit-appearance: media-mute-button;
    display: -webkit-flex;
}

audio::-webkit-media-controls-closed-captions-container, video::-webkit-media-controls-closed-captions-container {
    display: none;
}

        .panel-body row div {
            position: relative;
        }

        .mt-20 {
            margin-top: 20px;
        }

        .dd-placeholder {
            flex: 1;
            width: 100%;
            min-width: 200px;
            max-width: 250px;
        }

        .controlsBtn {
            position: absolute;
            bottom: 10px;
            width: 78%;
            height: 30px;
            left: 10%;
        }

        .controlsBtn .fa-expand-arrows {
            float: right;
        }

        .fas, .fad {
            font-size: 1.4em;;
        }

        input {
            background: #444;
            color: #fff;
            width: 73%;
            font-size: 16px;
            padding-right: 25px;
            border-radius: 15px;;
            padding-left: 20px;
            margin-right: 20px;
            height: 60px;
        }

        .flex-row-container {
            width: 100%;
            display: flex;
        }

        .flex-row-container > .flex-row-item {
            width: 33%;
            margin: 5px;
        }

        .flex-row-container > .flex-row-item video {
            width: 100%;
        }

        #colorbox {
            z-index: 9999999;
        }

        .mb-3 {
            margin-bottom: 1rem;
        }

        li#appendMessage {
            margin-left: -30px;
            margin-bottom: fixed;
        }

        .emojionearea.form-control.rounded-0.emoji.emojionearea-inline {      width: 20rem;     }
        .event_title{margin-top: 40px;margin-bottom: 30px;}
        .event-info{font-size: 18px;list-style: 1.6em;}
        /* zark */
        video::-webkit-media-controls-play-button {
            display: none;
        }
        video::-webkit-media-controls-current-time-display{
            display: none;
        }
        video::-webkit-media-controls-time-remaining-display {
            display: none;
        }

    .embed-container {
        position: relative;
        padding-bottom: 56.25%;

        height: 0;
        overflow: hidden;
        max-width: 100%;
        height: auto;
    }

    .embed-container iframe,
    .embed-container object,
    .embed-container embed {
        position: absolute;
        width: 100%;
        height: 75%;
    }
    </style>
</head>

<body class="voyager">

<div id="voyager-loader" style="left: 125px; display: none;">
    <img src="https://eventmie.test/admin/voyager-assets?path=images%2Flogo-icon.png" alt="Voyager Loader">
</div>

<div class="app-container expanded no-animation" style="">
    <!-- <div class="fadetoblack visible-xs"></div> -->
    <div class="content-container">

        <div class="container-fluid">
                    <div class="row">
                        <div class="col-8 col-xs-8">
                                <div class="card-body">
                                    <div class="row justify-content-start">
                                        <?php if (! $_REQUEST['v']) : ?>
                                        <video id="camera-main" poster="cam.png" style="width: 100%;" controls></video>
                                        <?php else : ?>
                                        <!-- iframe src="https://player.vimeo.com/video/440962252?h=<?php echo $_REQUEST['v'] ?>" width="100%"  frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe -->
                                            <div class='embed-container'>
												<?php if (is_numeric($_REQUEST['v'])) : ?>
                                                    <iframe src='https://player.vimeo.com/video/<?php echo $_REQUEST['v'] ?>?autoplay=1&loop=1&background=1' frameborder='0' webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
												<?php else : ?>
                                                    <iframe src='https://www.youtube.com/embed/<?php echo $_REQUEST['v'] ?>?autoplay=1&loop=1&background=1' frameborder='0' webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
												<?php endif; ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-offset-1 col-md-10">
                                        <?php echo json_decode($_REQUEST['desc']) ?>
                                    </div>
                                    </div>
                                </div>
                        </div>
                        <div class="col-4 col-xs-4 h100">
                            <iframe style="overflow:hidden;height:100%;width:100%" height="100%" width="100%" frameborder="0" allow="camera;microphone" src="https://bh.internethk.com/chatroomadmin/chat/"></iframe></div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="app.js"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity = "sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin = "anonymous"> </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.colorbox/1.6.4/jquery.colorbox-min.js" integrity="sha512-DAVSi/Ovew9ZRpBgHs6hJ+EMdj1fVKE+csL7mdf9v7tMbzM1i4c/jAvHE8AhcKYazlFl7M8guWuO3lDNzIA48A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="sdk.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/emojionearea/3.4.2/emojionearea.min.js" integrity="sha512-hkvXFLlESjeYENO4CNi69z3A1puvONQV5Uh+G4TUDayZxSLyic5Kba9hhuiNLbHqdnKNMk2PxXKm0v7KDnWkYA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    $('body').addClass('sidebar-icons');
    $('.main-content').addClass('mt-0 vh-100');
    $('.main-content > .header').remove();
    $('footer').remove();

    $(window).on('load', function () {


        $(window).resize(function () {
            contentHeight();
        })
    function contentHeight() {
                $(".h100").css("height", $(document).height());
            $("#chat").css("height", $(document).height());
}
        function pullStream(url, callback) {
            const rts = new AliRTS.createClient({
                customTag: 'asdsad',
                playConfig: {
                    playTimeOut: null
                }
            });

            rts.subscribe(url)
                .then((stream) => {
                    console.log('pull_stream_success', stream);
                    callback(rts, stream);
                })
                .catch((error) => {
                    console.log('pull_stream_error', error);
                });
        }


    });
</script>
</body>
</html>
