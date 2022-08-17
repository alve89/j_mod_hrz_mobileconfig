<?php



function force_download($filename, $name ) {
	   $filesize = filesize($filename);
	   if($filesize) {
	       ini_set('zlib.output_compression', 'Off');

	       /* IE FIX : FireFox Compatible */
	       header("Content-Type: application/application/octet-stream\n");
	       header("Content-Disposition: attachment; filename=\"$name\"");
	       /* Read It */
	       $contents = fread(fopen($filename, "rb"), filesize($filename));
	       /* Print It */
	       echo $contents;
	       exit;
	   } else {
	       return 0;
	   }
	}






$app = JFactory::getApplication();
$file = $app->input->get('posttext') . '.pdf';
if (JFile::exists($file)) {
        // File headers
        header("Content-type: application/pdf");
        header("Content-Disposition: attachment");

        // File contents.
        readfile($file);
}







// Set the response to indicate a file download
$filename       = $title . '-' . date("Ymd");
JResponse::setHeader('Content-Type', 'application/octet-stream');
JResponse::setHeader('Content-Disposition', 'attachment; filename="'. $filename . '.csv"');
