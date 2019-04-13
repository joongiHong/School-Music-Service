<?php

$font = $_POST['font'];
unlink("../../../font.php");

$newfile = fopen("../../../font.php", "w") or die("<script>alert('권환 확인 요망!')</script>");

$txt = '<?php';
fwrite($newfile, $txt);

$txt = ' $font="'.$font.'";';
fwrite($newfile, $txt);

$txt = ' ?>';
fwrite($newfile, $txt);

echo "<script>alert('폰트 변경 완료!')</script>";
echo "<script>location.href='index.php'</script>";

?>