<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    test

<img src="https://uybor.uz/borless/uybor/img/user-images/user_no_photo_300x300.png" alt="">

<form name="form" id="form" method="post" action="index.php"
        enctype="multipart/form-data" onsubmit="return validateForm();">
    <div class="form-row">

        <div>
            <label>Enter Text:</label> <input type="text"
                class="input-field" name="txt_input" maxlength="50">
        </div>
    </div>
    <div class="button-row">
        <input type="submit" id="submit" name="submit"
            value="Convert">
    </div>
</form>


</body>
</html>

<?php
if (isset($_POST['submit'])) {
    
    $img = imagecreate(500, 100);
    
    $textbgcolor = imagecolorallocate($img, 173, 230, 181);
    $textcolor = imagecolorallocate($img, 0, 192, 255);
    
    if ($_POST['txt_input'] != '') {
        $txt = $_POST['txt_input'];
        imagestring($img, 5, 5, 5, $txt, $textcolor);
        ob_start();
        imagepng($img);
        printf('<img src="data:image/png;base64,%s"/ width="100">', base64_encode(ob_get_clean()));
    }
}
?>