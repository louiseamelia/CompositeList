<?php

require_once(__DIR__ . '/vendor/autoload.php');


use Composite\ListComposite;
use Composite\ListItem;


$order = new ListComposite("Pizza Order");

$deal = new ListComposite("Two For One Deal");
$deal->add(new ListItem("Hawaiian"));
$deal->add(new ListItem("Mighty Meaty"));

$order->add(new ListItem("Pepperoni Pizza"));
$order->add($deal);
$order->add(new ListItem("Vegetarian Sizzler"));

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <meta charset="utf-8">
</head>
<body>
<?php echo $order->printList(); ?>
</body>
</html>