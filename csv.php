<?php
$file = fopen("All_India_pincode_data_26022018.csv","r");
print_r(fgetcsv($file));
print_r(fgetcsv($file));
fclose($file);
