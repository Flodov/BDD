<?php
function html_entete_page($titre,$fichierstyle="") {
	print("<!DOCTYPE html>\n");
	print("<html lang=\"fr\">\n<head>\n<meta charset=\"utf-8\" />\n");
	print("<title>".$titre."</title>\n");
	//print("<link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"iconeweb.ico\" />\n");
   	print("<link rel=\"stylesheet\" type=\"text/css\" href=\"".$fichierstyle."\" /> \n");
	print("</head>\n<body>\n");
}
function html_fin_page() {
	print("</body>\n");
	print("</html>\n");
}
?>
