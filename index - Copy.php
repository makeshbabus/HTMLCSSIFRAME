<!DOCTYPE html>
<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: "Lato", sans-serif;
  margin: 0;
}

.sidenav {
  height: 100%;
  width: 160px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #0094cb;
  overflow-x: hidden;
  padding-top: 20px;
}

.sidenav a {
	padding: 6px 8px 6px 16px;
	text-decoration: none;
	font-size: 25px;
	color: #fff;
	display: block;
	padding: 10px 15px;
	text-decoration: none;
	text-transform: uppercase;
	font-weight: 400;
	border-bottom: 1px solid #0081bd;
	font-size: 13px;
}

.sidenav a:hover {
  color: #f1f1f1;
  cursor: pointer;
}

.main {
  margin-left: 160px; /* Same as the width of the sidenav */
  font-size: 28px; /* Increased text to enable scrolling */
  padding: 0px 0px;
  height:100vh;
  margin-top:0;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>

</head>
<body>

<div class="sidenav">
<aside>
	<a href="https://in.crigroups.com/"><img width="70" height="70" src="https://in.crigroups.com/wp-content/themes/cripump/images/cri-log.png"></a>
</aside>
<div>
  <a onclick="myEntrance()">Entrance</a>
  <a onclick="myBorePump()">BOREWELL SUBMERSIBLE</a>
  <a onclick="myPump()">OPENWELL SUBMERSIBLE</a>
  <a onclick="surfacePump()">SURFACE PUMPSETS</a>
 </div>
</div>

<div class="main">
<iframe id="myFrame" src="https://www.google.com/maps/embed?pb=!4v1566371667580!6m8!1m7!1sCAoSLEFGMVFpcE5PdzVseHJCbW16dmNkQ3d4NlMtOFVsdkJLVTFLWWc3TzBUd2xR!2m2!1d11.103837634644!2d77.007523051737!3f0!4f10!5f0.7820865974627469" style="overflow:hidden;height:100%;width:100%;border:0" height="100%" width="100%" frameborder="0" allowfullscreen></iframe>
</div>
<script>
function myEntrance() {
  document.getElementById("myFrame").src = "https://www.google.com/maps/embed?pb=!4v1566371667580!6m8!1m7!1sCAoSLEFGMVFpcE5PdzVseHJCbW16dmNkQ3d4NlMtOFVsdkJLVTFLWWc3TzBUd2xR!2m2!1d11.103837634644!2d77.007523051737!3f0!4f10!5f0.7820865974627469";
}

function myBorePump() {
  document.getElementById("myFrame").src="https://www.google.com/maps/embed?pb=!4v1566375922534!6m8!1m7!1sCAoSLEFGMVFpcE1HVExDWTk2QW9fU2Y3bXFEMjlmcWlwZEZiV0p0VU11VDR4Y1hH!2m2!1d11.103995277187!2d77.007050306482!3f60!4f10!5f0.7820865974627469";
}

 function myPump() {
  document.getElementById("myFrame").src = "https://www.google.com/maps/embed?pb=!4v1566369051442!6m8!1m7!1sCAoSLEFGMVFpcE1ZU3JpeFUyekZxaFAzQ3lUYjkyMkFQV2Q1SHlIc2xwOVRNM01r!2m2!1d11.103894183796!2d77.007519139229!3f84.41098705354159!4f0.20749673872880692!5f0.7820865974627469";
}

 function surfacePump() {
  document.getElementById("myFrame").src="https://www.google.com/maps/embed?pb=!4v1566376166876!6m8!1m7!1sCAoSLEFGMVFpcE5wWkMtbkcyWjdaV25Eel9MVEhzY2VqQ0xuTmVxSUdWTzU2eVdT!2m2!1d11.103902710156!2d77.007120804666!3f15.953038963098079!4f-12.654636274565988!5f1.7402048866636837";
  }
</script>
</body>
</html>