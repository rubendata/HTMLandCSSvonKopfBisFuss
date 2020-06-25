<?php
if ($_POST) {
	$vorname = $_POST["vorname"];
	$nachname = $_POST["nachname"];
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">

<html>
<head>
<meta name="robots" content="noindex,  nofollow">
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>XHTML  &amp; CSS Von Kopf bis Fu&szlig; Kapitel 14 Verlosung</title>
<style type="text/css">
img {
	float: left;
	margin-right: 20px;
}
div {
	padding-top: 40px;
}
</style>
</head>
<body>

<p>
<img src="http://vonkopfbisfuss.oreilly.de/bilder/kopfbisfusstyp.jpg" alt="Von Kopf Bis Fu&szlig;-Typ">
</p>

<div>
<p>
Vielen Dank <strong><?php print($vorname); print(" "); print($nachname); ?></strong>,
dass Sie an der HTML mit CSS &amp; XHTML von Kopf bis Fu&szlig;-Verlosung teilnehmen.
</p>
<p>
Wenn Sie etwas gewinnen, werden Sie in K&uuml;rze eine Nachricht von uns erhalten.
</p>
</div>


</body>
</html>


<?php

}

?>