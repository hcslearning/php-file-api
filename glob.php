<?php

$folder = "/var/www/html/erp/erp-web/data/2019/Compras/DTE/201912/";

foreach( glob("${folder}*.xml") as $filename ) {
	echo "$filename \n";
}

echo "###################################### \n";

foreach( glob("*.php") as $filename ) {
	echo "$filename \n";
}
