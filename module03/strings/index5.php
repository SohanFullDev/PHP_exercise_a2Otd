<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equal & Identical Strings</title>
</head>
<body bgcolor="lavender">
       <font size="+1">
       <h3>The == and === Operator</h3>
       <?php 
        $str1 = "hello";
        $str2 = "hello";
        $str3=0;
        if( $str1 == $str2){
            // they are equal
            print "\"$str1\" and \"$str2\" are equal. <br>";
        }
        else {
            print "\"$str1\" and \"$str2\" are not equal. <br>";
        }
       if($str2 == $str3) {
        print "\"$str2\" and $str3 are equal. <br>";

       }else{
        print "\"$str2\" and $str3 are not equal. <br>";
       }
       if($str2 === $str3){
        print "\"$str2\" and $str3 are identical. <br>";
       }
       else {
        print "\"$str2\" and $str3 are not identical. <br>";

       }
       
       ?>
    
</body>
</html>