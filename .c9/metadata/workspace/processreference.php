{"filter":false,"title":"processreference.php","tooltip":"/processreference.php","undoManager":{"mark":0,"position":0,"stack":[[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":93,"column":0},"end":{"row":93,"column":2}},"text":"?>"},{"action":"removeLines","range":{"start":{"row":8,"column":0},"end":{"row":93,"column":0}},"nl":"\n","lines":["<?PHP","$userID = $_POST['$userID'];","\t\t\t\t$target = \"reference/\";","// Allowed file types. Please remember to keep the format of this array, add the file extensions you want","// WITHOUT the dot. Please also be aware that certain file types (such as exe) may contain malware.","$allowtypes=array( \"jpg\",  \"gif\",  \"pdf\");","","$allowattach=\"5\"; ","","// Maximum file size for attachments in KB NOT Bytes for simplicity. MAKE SURE your php.ini can handel it,","// post_max_size, upload_max_filesize, file_uploads, max_execution_time!","// 2048kb = 2MB,       1024kb = 1MB,     512kb = 1/2MB etc..","$max_file_size=\"1024\";","","// Maximum file size for all attachments combined in KB. MAKE SURE your php.ini can handel it,","// post_max_size, upload_max_filesize, file_uploads, max_execution_time!","// 2048kb = 2MB,       1024kb = 1MB,     512kb = 1/2MB etc..","$max_file_total=\"5120\";","","\t\t// Verify Attchment info","\t\tIf($allowattach > 0) {","\t\t\t","\t\t\t// Get the total size of all uploaded files","\t\t\tIf((array_sum($_FILES['script']['size'])) > ($max_file_total*1024)) {","\t\t\t\t","\t\t\t\t$error.=\"The max size allowed for all your files is \".$max_file_total.\"kb<br />\";","\t\t\t\t","\t\t\t} Else {","","\t\t\t\t//Loop through each of the files","\t\t\t\tFor($i=0; $i <= $allowattach-1; $i++) {","\t\t\t\t\t","\t\t\t\t\tIf($_FILES['script']['name'][$i]) {","\t","\t\t\t\t\t\t//Check if the file type uploaded is a valid file type. ","\t\t\t\t\t\t//If(!in_array(get_ext($_FILES['script']['name'][$i]), $allowtypes)) {","\t\t\t\t\t\t\t","\t\t\t\t\t\t//\t$error.= \"Invalid file type for your file: \".$_FILES['script']['name'][$i].\"<br />\";","\t\t\t\t\t\t\t","\t\t\t\t\t\t//Check the size of each file","\t\t\t\t\t//\t} Else","\t\t\t\t\tif(($_FILES['script']['size'][$i]) > ($max_file_size*1024)) {","\t\t\t\t\t\t\t","\t\t\t\t\t\t\t$error.= \"Your file: \".$_FILES['script']['name'][$i].\" is to big.<br />\";","\t\t\t\t\t\t\t","\t\t\t\t\t\t} // If in_array","\t\t\t\t\t\t","\t\t\t\t\t} // If Files","\t\t\t\t\t","\t\t\t\t} // For","\t\t\t\t","\t\t\t} // Else array_sum($_FILES['attachment']['size'])","\t\t\t","\t\t} // If Allowattach","\t\t\t//$linkID = @mysql_connect(\"localhost\", \"root\", \"\");","//mysql_select_db(\"p2h\", $linkID);","$linkID = @mysql_connect(\"127.0.0.1\", \"prescrip\", \"z3tyfpKK5r\");","mysql_select_db(\"prescrip_m3mb3rs\", $linkID);\t","\t","","//set error reporting to display and to it's highest level in case "," //it's not and you're missing vital notices and/or warnings: ","ini_set('display_errors', 1); ","error_reporting(E_ALL); ","\t\t","\t\t\tIf($allowattach > 0) {","\t\t\t","\t\t\tFor($i=0; $i <= $allowattach-1; $i++) {","\t\t\t\t","\t\t\t\tIf($_FILES['script']['tmp_name'][$i]) {","$filen = basename($_FILES['script']['name'][$i]);\t\t\t\t\t","$progress = 1;","","$target = $target . basename( $_FILES['script']['name'][$i]) ; ","if(move_uploaded_file($_FILES['script']['tmp_name'][$i], $target)) ","{ ","print  \"<h3>Thank you for your reference.  The file \". basename( $_FILES['script']['name'][$i]). \" has been sucesfully uploaded</h3>\"; ","} ","else ","{ ","print \"<h1>Sorry, there was a problem uploading your file.</h1>\"; ","} ","","",""]},{"action":"insertText","range":{"start":{"row":8,"column":0},"end":{"row":8,"column":5}},"text":"<?PHP"},{"action":"insertText","range":{"start":{"row":8,"column":5},"end":{"row":9,"column":0}},"text":"\n"},{"action":"insertLines","range":{"start":{"row":9,"column":0},"end":{"row":51,"column":0}},"lines":["//$userID = $_POST['$userID'];","\t\t\t","\t\t\t\t","\t\t\t\t$target = \"reference/\"; ","$name = \"reference/\" . basename($_FILES['uploaded']['name']);","","$target = $target . basename( $_FILES['uploaded']['name']) ; ","$ok=1; ","//This is our size condition ","if ($uploaded_size > 350000) ","{ ","echo \"Your file is too large.<br>\"; ","$ok=0; ","} ","","//This is our limit file type condition ","if ($uploaded_type ==\"text/php\") ","{ ","echo \"No PHP files<br>\"; ","$ok=0; ","} ","","//Here we check that $ok was not set to 0 by an error ","if ($ok==0) ","{ ","Echo \"Sorry your file was not uploaded\"; ","} ","","//If everything is ok we try to upload it ","else ","{ ","if(move_uploaded_file($_FILES['uploaded']['tmp_name'], $target)) ","{ ","print  \"<h1>The file \". basename( $_FILES['uploaded']['name']). \" has been uploaded</h1>\"; ","} ","else ","{ ","print \"<h1>Sorry, there was a problem uploading your file.</h1>\"; ","} ","} ","","?>"]}]}]]},"ace":{"folds":[],"scrolltop":481,"scrollleft":0,"selection":{"start":{"row":51,"column":0},"end":{"row":51,"column":0},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1416095243265,"hash":"c8d8b032c98b400d82f017fdf878da15f0ad7b86"}