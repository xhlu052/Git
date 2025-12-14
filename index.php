<!DOCTYPE html>
<html>
<head>
    <title>PHP Test</title>
</head>
<body>

<?php
// This is a single-line comment
echo "<p>Hello World</p>"; // 'echo' is used to output text to the browser
?>
<?php
class Car {
    function Car() {
        $this->model = "Tesla";
    }
}

// create an object
$Lightning = new Car();

// show object properties
echo $Lightning->model;
?>

</body>
</html>