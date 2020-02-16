<!DOCTYPE html>
<html lang = "en-US">
 <head>
 <meta charset = "UTF-8">
 <title>Basic HTML Media Capture</title>
 <link rel = "stylesheet" type = "text/css" href = "media-styles.css" />
 <script type = "text/javascript" src = "media-java.js"></script>
 </head>

 <body>

 	<h1>Single Image Capturing</h1>
 		<p><input type="file" accept="image/*" capture></p>
 		<p>Test 123</p>

 	<h1>Single Video Capture</h1>
 		<p><input type="file" accept="video/*" capture></p>
 		<p>Test 456</p>

 	<!-- <h1>Movement Screen Capturing</h1>
 		<h2><label for="movement">SELECT MOVEMENT</label></h2>
 				<p>
 					<select id="movement">
 						<option value="">Please Select Movement Type</option>
 						<option value="squat-front">Squat Front View</option>
 						<option value="squat-side">Squat Side View</option>
 						<option value="lunge-front">Lunge Front View</option>
 						<option value="lunge-side">Lunge Side View</option>
 						<option value="bend-front">Bend Front View</option>
 						<option value="bend-side">Bend Side View</option>
 						<option value="pull-front">Pull Front View</option>
 						<option value="pull-side">Pull Side View</option>
 						<option value="push-front">Push Front View</option>
 						<option value="push-side">Push Side View</option>
 						<option value="rotation-front">Rotation Front View</option>
 						<option value="rotation-side">Rotation Side View</option>
 					</select>
 				<p>
 						<input type="file" accept="video/*" capture>
 				</p>
 				<p>Test 789</p>
 				</p> -->

 		<!-- <h1>Movement Screen Capturing</h1>
 			<h2><label for="movement">SELECT MOVEMENT</label></h2>
 				<p>
 					<select id="movement">
 						<option value="" selected>Please Select Movement Type</option>
 						<option value="squat">Squat</option>
 						
 						<option value="lunge">Lunge</option>
 						
 						<option value="bend">Bend</option>

 						<option value="pull">Pull</option>
 					
 						<option value="push">Push</option>

 						<option value="rotation">Rotation</option>
 
 					</select>

 				<p>Test 789</p>
 				</p> -->

 			<!-- <h1>Movement Screen Capturing</h1>
 			<h2><label for="movement">Please Select Movement</label></h2>
 				<p>
 				<select id="movement" onchange="mvmtSelectCheck(this);">
					<option value="1">Squat</option>
					<option value="2">Lunge</option>
					<option id="mvmtOption" value="0">Pull</option>
				</select>
				</p>	

<div id="mvmtDivCheck" style="display:none;"> Pull selected </div> -->

 </body>

</html>



















