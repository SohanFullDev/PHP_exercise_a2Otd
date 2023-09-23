
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Concatenation of PHP</title>
</head>
<body bgcolor="silver">
    <h3>String Concatenation</h3>
    <pre>
  <?php 
    $name = 'Programmer Sohan';
    $street = '123, Main Street';
    $city = 'North Dhaka';
    $state = 'Dhaka';
    $zip = '1230';

    $address="Name: " . "$name\n" . "Address: " . "$street\n" . "Zip: ". $zip ."\n" . "City: " . $city ."\n" . "State: " . "$state\n";
    print $address;
    print "........................\n";
  
  ?>
</body>
</html>