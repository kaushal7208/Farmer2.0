<!DOCTYPE html>
<html>
<head>
	<title>Video Slider</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width , initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<section>
		<video id="slider" autoplay muted loop>
			<source src="video/video1.mp4" type="video/mp4">
		</video>
		<ul class="navigation">
			<li onclick="videoselector('video/video.mp4')"><img src="images/video1.png" height="100px" width="150px"></li>
			<li onclick="videoselector('video/video2.mp4')"><img src="images/video2.png" height="100px" width="150px"></li>
			<li onclick="videoselector('video/video3.mp4')"><img src="images/video3.png" height="100px" width="150px"></li>
			<li onclick="videoselector('video/video4.mp4')"><img src="images/video4.png" height="100px" width="150px"></li>
		</ul>
	</section>
	<script type="text/javascript">
		function videoselector (videoLink) {
			document.getElementById('slider').src=videoLink;
		}
	</script>
	
</body>
</html>