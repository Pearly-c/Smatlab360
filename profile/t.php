
$mary = mysqli_num_rows($result);
$bal = 10*$mary;
printf("Result set has %d rows.\n", $bal);