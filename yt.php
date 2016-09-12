<?php
$video = $_GET['id'];

				echo"<html><head>

    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
	 <meta http-equiv=\"content-language\" content=\"TR\" />
	  <title>YouTube Embed</title>
<script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-1.10.2.min.js\"></script>
	<script type=\"text/javascript\" src=\"https://ssl.p.jwpcdn.com/6/8/jwplayer.js\"></script>
	<script type=\"text/javascript\">jwplayer.key=\"p8q5UFjZAmEA04hjDUvIMGIb6lK8gJpZmcevRA==\";</script>
	 <style type=\"text/css\">
html,
body {
    margin: 0px;
    padding: 0px;
    height: 100%!important;
    background-color: black;
    overflow:hidden;
}
#player {
    position: relative;
    width: 100%!important;
    height: 100%!important;
}
a {
    cursor: pointer
}
#info {
    padding: 20px;
    font-size: 24px;
    color: red;
}
</style>
</head>
<body>
<div id='player' style=\"width: 100%; height: 100%; color: rgb(255, 255, 255); display: table; opacity: 1; background-color: rgb(0, 0, 0);\"><p style=\"vertical-align: middle; text-align: center; display: table-cell; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 15px; line-height: 20px; font-family: Arial, Helvetica, sans-serif;\"><img src=\"http://izl3.net/img/spinner.gif\" alt=\"Video yükleniyor!\"><br><br><span>Video yükleniyor...</span></p></div>
<script type=\"text/javascript\">
function playeryap()
{
var mp4 = $(\"#mp4\").html();
var isMobile = {
    Android: function() {
        return navigator.userAgent.match(/Android/i);
    },
    BlackBerry: function() {
        return navigator.userAgent.match(/BlackBerry/i);
    },
    iOS: function() {
        return navigator.userAgent.match(/iPhone|iPad|iPod/i);
    },
    Opera: function() {
        return navigator.userAgent.match(/Opera Mini/i);
    },
    Windows: function() {
        return navigator.userAgent.match(/IEMobile/i);
    },
    any: function() {
        return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
    }
};

jwplayer(\"player\").setup({
    id: \"player\",
    modes: [{
        type: \"html5\"
    }],
      sources: [
	{'file':'https://proxyscript.herokuapp.com/getvideo.php?videoid=".$video."&type=best', 'label':'Best', 'type': 'mp4'}
         ],
    image: \"https://proxyscript.herokuapp.com/getimage.php?videoid=IVdJej-8uo4".$video."\",
	abouttext: \"PlayerAMK YouTube Fix\",
	aboutlink: \"http://www.playeramk.com/\",
	stretching: \"fill\",


    skin: \"bekle\",
    primary: \"html5\",
    events: {
        onReady: function() {
            if (isMobile.any()) {
                jwplayer().onQualityLevels(function() {
                    jwplayer().setCurrentQuality(0);
                })

            } else {
                jwplayer().onQualityLevels(function() {
                    jwplayer().setCurrentQuality(1);
                })

            }
        },
        onError: function(e) {
            console.log(e)
        }
    },
    width: \"100%\",
    height: \"100%\"
});
}
</script>
<script>

setTimeout(playeryap, 1000);
</script>

</body></html>";

?>
