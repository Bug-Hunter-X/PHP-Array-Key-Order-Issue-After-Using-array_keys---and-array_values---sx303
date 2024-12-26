```php
<?php
$data = [
    "apple" => 1,
    "banana" => 2,
    "cherry" => 3
];

// Correct way to access elements while maintaining key-value association
foreach ($data as $key => $value) {
    echo "Key: " . $key . ", Value: " . $value . "\n";
}

//Alternative if you need separate key and value arrays and order matters:
$keys = array_keys($data);
$values = [];
foreach($keys as $key){
    $values[] = $data[$key];
}

foreach($keys as $i => $key){
    echo "Key: " . $key . ", Value: " . $values[$i] . "\n";
}
?>
```
This revised code iterates directly through the original array to maintain the key-value pairs, solving the problem by avoiding assumptions on the `array_values()` output. The alternative shows a way to maintain the association if needed using a new loop. 