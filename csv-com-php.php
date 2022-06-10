<?php 

$products = [
    [
        "product_id" => 1111,
        "product" => "Specialized Alias 2020",
        "price" => 10000
    ],
    [
        "product_id" => 1112,
        "product" => "Trek El 2019",
        "price" => 7000
    ],
    [
        "product_id" => 1114,
        "product" => "Cannonoale Br 2021",
        "price" => 35000
    ],
];

$csv_file = fopen("products.csv", "w");

$headers = ["product_id", "product", "price"];
fputcsv($csv_file, $headers);

foreach($products as $product) {
    fputcsv($csv_file, $product);
}

fclose($csv_file);
