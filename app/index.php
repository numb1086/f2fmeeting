<!DOCTYPE html>
<html style="background:rgba(255,255,255,0.8)">
<head>
	<title>App Download and Install</title>
	<meta charset="utf-8">

</head>
<body>
	<?php require_once("authenticate.php");?>
	<center>
	  <h1 style="font-size:40px">Android</h1>
	  <table cellpadding="7">
		<tr align="center">
			<td>
				<strong style="font-size:30px">Teacher</strong>
		    </td>
		    <td>
				<strong style="font-size:30px">Student</strong>
		    </td>
		</tr>
		<tr align="center">
			<td>
				<strong style="font-size:25px">Download：</strong>
				<img style="vertical-align:middle" src="img/teacher.png">
		    </td>
		    <td>
				<strong style="font-size:25px">Download：</strong>
				<img style="vertical-align:middle" src="img/student.png">
		    </td>
		</tr>
		<tr align="center">
			<td>
				<strong style="font-size:25px">Preview</strong>
		    </td>
		    <td>
				<strong style="font-size:25px">Preview</strong>
		    </td>
		</tr>
		<tr align="center">
			<td>
				<table border="4">
					<tr>
						<td>
							<img src="img/t1.png" style="width:216px;height:374px">
						</td>
						<td>
							<img src="img/t2.png" style="width:216px;height:374px">
						</td>
					</tr>
					<tr>
						<td>
							<img src="img/t3.png" style="width:216px;height:374px">
						</td>
						<td>
							<img src="img/t4.png" style="width:216px;height:374px">
						</td>
					</tr>
				</table>
		    </td>
		    <td>
				<table border="4">
					<tr>
						<td>
							<img src="img/s1.png" style="width:216px;height:374px">
						</td>
						<td>
							<img src="img/s2.png" style="width:216px;height:374px">
						</td>
					</tr>
					<tr>
						<td>
							<img src="img/s3.png" style="width:216px;height:374px">
						</td>
						<td>
							<img src="img/s4.png" style="width:216px;height:374px">
						</td>
					</tr>
				</table>
		    </td>
		</tr>
	  </table>
	  <h1 style="font-size:40px">iOS 7+</strong>
	  <h2 style="font-size:30px">Preview</h2>
	  <table cellpadding="7">
		<tr align="center">
			<td>
				<table border="4">
					<tr>
						<td>
							<img src="img/i6.png" style="width:216px;height:374px">
						</td>
						<td>
							<img src="img/i7.png" style="width:216px;height:374px">
						</td>
						<td>
							<img src="img/i8.png" style="width:216px;height:374px">
						</td>
					</tr>
					<tr>
						<td>
							<img src="img/i9.png" style="width:216px;height:374px">
						</td>
						<td>
							<img src="img/i10.png" style="width:216px;height:374px">
						</td>
						<td>
							<img src="img/i11.png" style="width:216px;height:374px">
						</td>
					</tr>
				</table>		
		    </td>
		</tr>
	  </table>
	</center>
	<center><h2 style="font-size:30px">Installation</h2></center>
	<h2 style="font-size:25px;margin-left:10%">1. Package or Directly install</h2>
	<h2 style="margin-left:10%">1)Package</h2>
	<h2 style="margin-left:12%">a.Download
		<a href="iDownload.php?f=F2F.app" style="text-decoration:none">archive<a/>
	</h2>
	<h2 style="margin-left:12%">b.Extract to F2F.app and install it by iTunes(need to Jailbreak)</h2>
	<center><img src="img/iTunes.png" style="width:1080px;height:720px"></center>
	<h2 style="margin-left:10%">2)Directly install</h2>
	<h2 style="margin-left:12%">a.Connect the iPhone to Mac and open the 
		<a href="iDownload.php?f=F2F" style="text-decoration:none">xcode project<a/>
	</h2>
	<h2 style="margin-left:12%">b.Click the run button to install app</h2>
	<center><img src="img/xcode.png" style="width:1080px;height:720px"></center>
	<center><h2 style="font-size:30px">Trouble shooting</h2></center>
	<h2 style="margin-left:10%">1. If you found the following problem：Untrusted App Developer</h2>
	<center><img src="img/i0.png" style="width:432px;height:748px"></center>
	<h2 style="margin-left:10%">2. You can go to the Settings → General → Device Management → Developer APP → Trust iPhone Developer</h2>
	<center>
		<img src="img/i1.png" style="width:432px;height:748px">
		<img src="img/i2.png" style="width:432px;height:748px"><br>
		<img src="img/i3.png" style="width:432px;height:748px">
		<img src="img/i4.png" style="width:432px;height:748px">
	</center>
	<h2 style="margin-left:10%">3. Click the app icon again</h2>
	<center><img src="img/appIcon.png" style="width:328px;height:364px"></center>
	<div id="m"></div>
	<script type="text/javascript" src="bgm/bgm.js"></script>
</body>
</html>
