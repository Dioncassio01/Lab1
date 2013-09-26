<?php

namespace view;

class HTMLPage {

	public function getPage($title, $body) {
		setlocale(LC_ALL, "swedish");
		return '  <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
		
  <html xmlns="http://www.w3.org/1999/xhtml">
  <head>
  	<title>' . $title . '</title>
  	<meta http-equiv=\'content-type\' content=\'text/html; charset=UTF-8\'/>
  </head>
  <body>
  		' . $body . '
  		<p>' . strftime('%A, den %d %B år %Y. Klockan är: [%H:%M:%S] ') . '</p>
  </body>
  </html>';
	}

}
?>
