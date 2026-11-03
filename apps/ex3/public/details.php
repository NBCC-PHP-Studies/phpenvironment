<?php
    include_once('../includes/vehicles.php');
?>

<?php
$id = $_GET['id'] ?? 0;

$vehicle = Vehicle::getVehicle($vehicles, $id);

if ($vehicle == null) {
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details for <?php echo $vehicle->make." ".$vehicle->model; ?></title>
    <?php include_once("../includes/bootstrap.php") ?>
</head>

<body>
    <?php include_once('../includes/nav.php'); ?>
    <div class="container p-5">
        <h1><?= $vehicle->make." ".$vehicle->model; ?></h1>
        <img src="<?= $vehicle->image ?>">
        <p><?= $vehicle->summary ?></p>
       <p>
            <strong>MSRP:</strong>
            <?= "$" . number_format($vehicle->msrp, 2) ?>
        </p>
        <div>
            <a href="inventory.php">Back to Inventory</a>
        </div>
    </div>
</body>

</html>