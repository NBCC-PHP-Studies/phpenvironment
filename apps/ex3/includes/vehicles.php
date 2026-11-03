<?php
    include_once('../includes/vehicle.php');
?>
<?php
    $vehicle1 = new Vehicle(1, "Ford", "Mustang", 2025, "Sports Car", "An iconic American sports car known for its powerful engine and distinctive styling.", 33915, "https://images.unsplash.com/photo-1492144534655-ae79c964c9d7?w=800");
    $vehicle2 = new Vehicle(2, "Chevrolet", "Camaro", 2024, "Sports Car", "A performance-oriented muscle car with aggressive styling and impressive acceleration.", 40299, "https://images.unsplash.com/photo-1552519507-da3b142c6e3d?w=800");
    $vehicle3 = new Vehicle(3, "Toyota", "Rav4", 2023, "Crossover", "A versatile sport utility vehicle offering additional passenger space and cargo capacity.", 32999, "https://images.unsplash.com/photo-1617469767053-d3b523a0b982?w=800");
    $vehicle4 = new Vehicle(4, "BMW", "3 Series 330i", 2023, "Sedan", "A luxury vehicle combining comfort, technology and performance.", 36895, "https://images.unsplash.com/photo-1555215695-3004980ad54e?w=800");
    $vehicle5 = new Vehicle(5, "Lamorghini", "Aventador", 2025, "Luxury Sports Car", "A high-performance vehicle designed for speed, handling and premium driving comfort.", 429999, "https://images.unsplash.com/photo-1511919884226-fd3cad34687c?w=800");

    $vehicles = [];

    array_push($vehicles, $vehicle1, $vehicle2, $vehicle3, $vehicle4, $vehicle5);
?>