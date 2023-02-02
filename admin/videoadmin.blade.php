<!DOCTYPE html>
<html>
<head>
  <link rel="icon" type="image" href="admin/assets/images/logo14.png">
	<title>New City Meeting</title>
</head>
<body>

<script>
  var script = document.createElement("script");
  script.type = "text/javascript";

  script.addEventListener("load", function (event) {
    const config = {
      name: "New City Family Care",
      meetingId: "milkyway",
      apiKey: "4eacb3f7-ecd0-468b-b10c-2ff33f4976ee",

      containerId: null,

      micEnabled: true,
      webcamEnabled: true,
      participantCanToggleSelfWebcam: true,
      participantCanToggleSelfMic: true,

      chatEnabled: true,
      screenShareEnabled: true,
      joinScreen: {
    visible: true,
    title: "New City Family Care Virtual Consultation",
    meetingUrl: "{{url('video')}}",
    
  },

      permissions: {

    removeParticipant: true,
    endMeeting: true,
  },
      
    };

    const meeting = new VideoSDKMeeting();
    meeting.init(config);
  });

  script.src =
    "https://sdk.videosdk.live/rtc-js-prebuilt/0.3.23/rtc-js-prebuilt.js";
  document.getElementsByTagName("head")[0].appendChild(script);
</script>

</body>
</html>