<?PHP
require('C:\xampp\htdocs\php_chap2\fpdf.php');
$pd=new FPDF();
$pd->addpage();
$pd->setfont('Arial','B',16);
$pd->cell(80,10,"Welcome to PHP programming");
$pd->output();
?>
