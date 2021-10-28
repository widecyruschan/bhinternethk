@extends('layouts.admin.app')

@section('page_css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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

        .flex-row-container > .flex-row-item video{
            width: 100%;
        }

        #colorbox{
            z-index: 9999999;
        }
        .mb-3{
            margin-bottom: 1rem;
        }
    </style>
@endsection

@section('content')
    <div class="row w-100 p-3 mx-0">
        <div class="col-12 col-md-8 p-0">
            <div class="card p-0" style="border-radius: 0.5rem;">
                <div class="card-header" style="padding: 1rem">
                    <a class="btn-modal btn btn-sm btn-primary" href="#inline_content" data-strip-caption="" data-strip-group="dorhoutmees">
                        <i class="fas fa-plus"></i>
                        Add Capture Device
                    </a>
                    <button class="btn-publish btn btn-sm btn-success">Publish</button>
                    <button class="btn-unpublish btn btn-sm btn-danger" style="display: none">Unpublish</button>
					<button class="btn-push btn btn-sm btn-success">Start Pushing to Users</button>
                </div>
                <div class="card-body" style="padding: 1rem;">
                    <div class="flex-row-container">
                        <div class="flex-row-item">
                            <video  id="camera-1" poster="{{ asset('images/Film-1.png') }}" class="w-100"
                                   style="height: 160px;" muted ></video>
                        </div>
                        <div class="flex-row-item">
                            <video id="camera-2" poster="{{ asset('images/Film-2.png') }}" class="w-100"
                                   style="height: 160px;" muted></video>
                        </div>
                        <div class="flex-row-item">
                            <video id="camera-3" poster="{{ asset('images/Film-3.png') }}" class="w-100"
                                   style="height: 160px;" muted></video>
                        </div>
                    </div>
                    <div class="flex-row-container">
                        <div class="flex-row-item">
                            <video id="camera-4" poster="{{ asset('images/Film-4.png') }}" class="w-100"
                                   style="height: 160px;" muted></video>
                        </div>
                        <div class="flex-row-item">
                            <video id="camera-5" poster="{{ asset('images/Film-5.png') }}" class="w-100"
                                   style="height: 160px;" muted></video>
                        </div>
                        <div class="flex-row-item">
                            <video id="camera-6" poster="{{ asset('images/Film-6.png') }}" class="w-100"
                                   style="height: 160px;" muted></video>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4 ms-auto pe-lg-0" style="height: calc(100vh - 2rem) !important;">
            <div class="card p-0" style="border-radius: 0.5rem;">
                <div class="card-header" style="padding: 1rem">
                    <h6 class="m-0">Chatrooms</h6>
                </div>
                <div class="card-body h-100 overflow-auto px-2 px-lg-3 py-3">
                    <ul id="chatrooms" class="list-group">
                        @if(isset($chatrooms) && $chatrooms->isNotEmpty())
                            @foreach($chatrooms as $chatroom)
                                <li class="open-chatroom list-group-item d-flex justify-content-between align-items-center p-2 rounded-2">
                                    <div><img src="{{ asset("storage/$chatroom->thumbnail") }}"
                                              width="40px"></div>
                                    <div>{{ $chatroom->title }}</div>
                                    <div>
                                        <i class="fas fa-users me-1"></i>
                                        <span class="badge badge-sm badge-success">2</span>
                                    </div>
                                </li>
                            @endforeach
                        @else
                            <li class="list-group-item">No chatroom found</li>
                        @endif
                    </ul>
                    <div id="chatroom-messages" class="h-100" style="display: none">
                        <div id="chat-messages"></div>
                        <div
                            class="card-footer px-2 px-lg-3 pb-3 align-items-center bg-transparent border-0">
                            <form id="chat-form" class="position-relative">
                                <input typeof="text" class="form-control shadow-lg border-0"
                                       name="message"
                                       placeholder="Write your message...">
                                <button type="submit" class="btn btn-default"><i
                                        class="fas fa-paper-plane"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('modals')
    <div style='display:none'>
        <div id='inline_content' style="background: rgba(0, 0, 0,.9);height:100%;padding:15px;">
            <form id="add-device-form">
                <fieldset class="mb-3">
                    <label class="form-label">For Which Camera</label>
                    <select class="form-control form-select" name="camera">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                    </select>
                </fieldset>

                <fieldset class="mb-3">
                    <label class="form-label">Video Device</label>
                    <select class="form-control form-select" name="video"></select>
                </fieldset>

                <fieldset class="mb-3">
                    <label class="form-label">Audio Device</label>
                    <select class="form-control form-select" name="audio"></select>
                </fieldset>

                <fieldset class="mb-3">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Add Device</button>
                </fieldset>
            </form>
        </div>
    </div>
@endsection

@section('page_js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.colorbox/1.6.4/jquery.colorbox-min.js" integrity="sha512-DAVSi/Ovew9ZRpBgHs6hJ+EMdj1fVKE+csL7mdf9v7tMbzM1i4c/jAvHE8AhcKYazlFl7M8guWuO3lDNzIA48A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('js/aliyun-rts-sdk.js') }}"></script>
    <script>
        $('body').addClass('sidebar-icons');
        $('.main-content').addClass('mt-0 vh-100');
        $('.main-content > .header').remove();
        $('footer').remove();

        const PusherMultiClass = new PusherMulti({
            channel: 'presence-Chatroom',
            event: 'stream-notification',
            events: true
        });

        $(window).on('load', function (message) {
            let push_urls = {
                1: '{{ $event->push_urls[0] }}',
                2: '{{ $event->push_urls[1] }}',
                3: '{{ $event->push_urls[2] }}',
                4: '{{ $event->push_urls[3] }}',
                5: '{{ $event->push_urls[4] }}',
                6: '{{ $event->push_urls[5] }}',
            };
            let cameras = {};
            let published = false;

            $('.btn-modal').colorbox({inline: true, width: "85%"});
            $('[data-bs-dismiss="modal"]').on('click', () => {
                $.colorbox.close()
            });

            // Listen to modal open, add Video and Audio devices for selection
            $('.btn-modal').on('click', () => {
                const form = $('#add-device-form');

                // Clear all options
                form.find('[name="video"], [name="audio"]').empty();

                // Create options for video and audio devices and append
                navigator.mediaDevices.enumerateDevices().then(function (devices) {
                    const videoDevices = devices.filter(device => device.kind === 'videoinput');
                    const audioDevices = devices.filter(device => device.kind === 'audioinput');

                    const videoOptions = videoDevices.map(videoDevice => {
                        return '<option value="' + videoDevice.deviceId + '">' + videoDevice.label + '</option>';
                    }).join('');

                    const audioOptions = audioDevices.map(audioDevice => {
                        return '<option value="' + audioDevice.deviceId + '">' + audioDevice.label + '</option>';
                    }).join('');

                    form.find('[name="video"]').append(videoOptions);
                    form.find('[name="audio"]').append(audioOptions);
                });
            });

            // Listen to form submit to add a new device
            $('#add-device-form').on('submit', (e) => {
                const form = $('#add-device-form');
                const id = parseInt(form.find('[name="camera"]').val());
                const videoDevice = form.find('[name="video"]').val();
                const audioDevice = form.find('[name="audio"]').val();
				
				// Disable publish button until stream is ready
				$('.btn-publish').addClass('disabled').prop('disabled', true);
                $('.btn-publish').html('<i class="fas fa-spinner fa-pulse">');

                // Add/Update camera constraints
                let constraints = {
                    id: id,
                    video: {deviceId: videoDevice},
                    audio: {deviceId: audioDevice},
                };

                // Create stream from the provided constraints
                createStream(constraints, (stream) => {
                    constraints['stream'] = stream;
                    stream.play(document.getElementById('camera-' + id));

                    // Update camera constraints
                    cameras[id] = constraints;

                    // If already published, publish the stream straight away
                    if (published) {
                        pushStream(push_urls[id], stream, function (rts, response) {
                            PusherMultiClass.sendEvent({
                                event: '{{ $event->id }}',
                                id: id
                            });

                            cameras[id]['rts'] = rts;
                        });
                    }
					
					// Enable publish button as the stream is ready now
					$('.btn-publish').removeClass('disabled').prop('disabled', false);
                	$('.btn-publish').html('Publish');
                });

                // Hide modal
                $.colorbox.close()

                return false;
            });

            $('.btn-publish').on('click', (e) => {
                const btn = $(e.currentTarget);
                btn.addClass('disabled').prop('disabled', true);
                btn.html('<i class="fas fa-spinner fa-pulse">');

                if (!_.isEmpty(cameras)) {
                    $.each(cameras, (i, camera) => {
                        // Get push url for the stream
                        const url = push_urls[camera.id];

                        // Push stream to users
                        pushStream(url, camera.stream, function (rts, response) {
                            btn.hide();
                            btn.removeClass('disabled').prop('disabled', false);
                            btn.html('Publish');
                            $('.btn-unpublish').show();

                            PusherMultiClass.sendEvent({
                                event: '{{ $event->id }}',
                                id: camera.id
                            });

                            camera['rts'] = rts;

                            published = true;
                        });
                    });

                    return false;
                }

                alert('Please add a capture device first!')
            });

			$('.btn-push').on('click', (e) => {
                const btn = $(e.currentTarget);
                btn.addClass('disabled').prop('disabled', true);
                btn.html('<i class="fas fa-spinner fa-pulse">');
				
				$.ajax({
					headers: {'X-CSRF-TOKEN': '{{ csrf_token() }}'},
					type: "POST",
					dataType: 'json',
					url: '{{ route('admin.events.join.publish') }}',
					data: {event: '{{ $event->id }}'},
					success: function (response) {
						if(response.status){
							PusherMultiClass.sendEvent({
								event: '{{ $event->id }}',
								trigger: 'pull'
							});
						}
					},
				});

                btn.removeClass('disabled').prop('disabled', false);
                btn.html('Start Pushing to Users');				
            });
			
            $('.btn-unpublish').on('click', (e) => {
                const btn = $(e.currentTarget);
                btn.addClass('disabled').prop('disabled', true);
                btn.html('<i class="fas fa-spinner fa-pulse">');

                if (!_.isEmpty(cameras)) {
                    $.each(cameras, async (i, camera) => {
                        const rts = camera['rts'];
                        const stream = camera['stream'];

                        // Unpublish stream
                        await rts.unpublish();

                        published = false;

                        // Switch button
                        btn.hide();
                        btn.removeClass('disabled').prop('disabled', false);
                        btn.html('Unpublish');
                        $('.btn-publish').show();
                    });
                }
            });

            // Create stream from the provided constrains
            function createStream(constraints, callback) {
                new AliRTS
                    .createStream(constraints)
                    .then(async (stream) => {
                        // Set stream resolution
                        await stream.setVideoProfile('720p_1');

                        console.log('create_stream_success', stream);
                        callback(stream)
                    })
                    .catch((err) => {
                        console.log('create_stream_error', err);
                    });
            }

            // Push stream to the provided url and play inside the provided player
            function pushStream(url, stream, callback) {
                const rts = new AliRTS.createClient({
                    customTag: 'asdsad',
                    playConfig: {
                        playTimeOut: 9999999
                    }
                });

                rts.publish(url, stream)
                    .then((response) => {
                        console.log('push_stream_success', response);
                        callback(rts, response);
                    })
                    .catch((error) => {
                        console.log('push_stream_error', error);
                    });
            }

            $('.open-chatroom').on('click', (e) => {
                $('#chatrooms').hide();
                $('#chatroom-messages').show();
            });

            new OpenChat({
                avatar: config.asset + 'avatar.svg',
            });
        });
    </script>
@endsection
