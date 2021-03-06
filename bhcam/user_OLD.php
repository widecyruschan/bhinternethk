<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>唱會娛樂活動</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="jPn1pIU4QrIwYzCAD50Fqkx2tCxNtXijaWWBE1D4"/>



    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="app.css">

    <link rel="stylesheet" type="text/css" href="voyager.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/emojionearea/3.4.2/emojionearea.min.css" integrity="sha512-vEia6TQGr3FqC6h55/NdU3QSM5XR6HSl5fW71QTKrgeER98LIMGwymBVM867C1XHIkYD9nMTfWK2A0xcodKHNA==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <style>
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

        .emojionearea.form-control.rounded-0.emoji.emojionearea-inline {
            width: 20rem;
        }

    </style>
</head>

<body class="voyager">

<!-- <div id="voyager-loader" style="left: 125px; display: none;">
    <img src="https://eventmie.test/admin/voyager-assets?path=images%2Flogo-icon.png" alt="Voyager Loader">
</div> -->

<div class="app-container expanded no-animation">
    <!-- <div class="fadetoblack visible-xs"></div> -->
    <div class="content-container">

        <div class="container-fluid">

                    <div class="row">
                        <div class="col-8 col-xs-8">
                                <div class="card-body">
                                    <div class="row justify-content-start">
                                        <video id="camera-main" poster="Film-1.png" style="width: 100%;" autoplay></video>
                                    </div>
                                    <div class="row">
                                        <div class="flex-row-item col-4 col-md-4 col-xs-6 video">
                                            <video id="camera-1" data-id="1" poster="Film-1.png" style="width: 100%;"  muted></video>
                                        </div>
                                        <div class="flex-row-item col-4 col-md-4 col-xs-6 video">
                                            <video id="camera-2" data-id="2" poster="Film-2.png" style="width: 100%;" muted></video>
                                        </div>
                                        <div class="flex-row-item col-4 col-md-4 col-xs-6 video">
                                            <video id="camera-3" data-id="3" poster="Film-3.png" style="width: 100%;" muted></video>
                                        </div>
                                    
                                        <div class="flex-row-item col-4 col-md-4 col-xs-6 video">
                                            <video id="camera-4" data-id="4" poster="Film-4.png" style="width: 100%;" muted></video>
                                        </div>
                                        <div class="flex-row-item col-4 col-md-4 col-xs-6 video">
                                            <video id="camera-5" data-id="5" poster="Film-5.png" style="width: 100%;" muted></video>
                                        </div>
                                        <div class="flex-row-item col-4 col-md-4 col-xs-6 video">
                                            <video id="camera-6" data-id="6" poster="Film-6.png" style="width: 100%;" muted></video>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class="col-4 col-xs-4  h100">
                            <iframe style="overflow:hidden;height:100%;width:100%" height="100%" width="100%" frameborder="0" allow="camera;microphone" src="https://bh.internethk.com/chatroomadmin/chat/"></iframe></div>
                    </div>
                </div>
            </div>
        </div>
</div>


<!--<div id="myDiv" style="width: 100vw;height: 100vh;top: 0px;position: absolute;background: white;text-align: center;"> Please wait </div>-->

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
        contentHeight();
        let pull_urls = {
            1: 'artc://pull.binfazil.com/live-streaming/f5d5ce20-be1a-4a3a-99f4-f9283ea0653c',
            2: 'artc://pull.binfazil.com/live-streaming/158fe5a8-a984-410a-baf7-586eed50da6b',
            3: 'artc://pull.binfazil.com/live-streaming/ff8541ca-7609-4051-99d3-8325531e979c',
            4: 'artc://pull.binfazil.com/live-streaming/020c4611-9f44-4107-86ae-5adb87dcb12e',
            5: 'artc://pull.binfazil.com/live-streaming/f0883d04-e392-4b32-b90e-92ceddfeed6c',
            6: 'artc://pull.binfazil.com/live-streaming/187f03db-dc2e-417b-b72a-0f102beb8d09',
        };

        let player_main = document.getElementById('camera-main');
        let cameras = {};

        startPulling();

        // Start pulling streams
        function startPulling() {
            if (!_.isEmpty(pull_urls)) {
                // show_loader();
                $.each(pull_urls, async (id, url) => {
                    if (id == 1) {
                        pullStream(url, (rts, stream) => {
                            stream.play(player_main);
                        });
                    }

                    pullStream(url, (rts, stream) => {
                        cameras[id] = {
                            id: id,
                            rts: rts,
                            stream: stream
                        };

                        console.log(id);
                        const player = document.getElementById('camera-' + id);

                        stream.play(player);
                        if (id === 1)
                            stream.play(player_main);
                    });
                });
            }
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

        $(document).on('click', '.flex-row-item.video, .flex-row-item video', (e) => {
            // show_loader();
            const id = !$(e.currentTarget).is('video') ? $(e.currentTarget).find('video').attr('data-id') : $(e.currentTarget).attr('data-id');

            console.log(id);
            if (cameras.hasOwnProperty(id)) {
                const url = pull_urls[id];

                pullStream(url, (rts, stream) => {
                    cameras[id] = {
                        id: id,
                        rts: rts,
                        stream: stream
                    };

                    stream.play(player_main);
                });
            }
        });

    });
    $(window).resize(function () {
            contentHeight();
        })
    function contentHeight() {
            var winH = $(window).height();
            
                // contentHei = winH - headerHei - footerHei;
            $("#chat").css("min-height", winH);
}
    function show_loader() {
        var myDiv = document.getElementById("myDiv"),

            show = function(){
                myDiv.style.display = "block";
                setTimeout(hide, 5000); // 5 seconds
            },

            hide = function(){
                myDiv.style.display = "none";
            };
        show();
    }


</script>
</body>
</html>
