<?php

$hotels = [
    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],
];


$filter_selected = !empty($_GET);

$filter_hotels = [];


if ($filter_selected) {
    $parking_filter = $_GET["parking"];

    if ($parking_filter == "yes") {
        $filter_value = true;
    } elseif ($parking_filter == "no") {
        $filter_value = false;
    } else {
        $filter_value = "all";
    };

    $star_filter = $_GET["stars"];

    foreach ($hotels as $hotel) {
        if ($hotel["parking"] === $filter_value && $hotel["vote"] >= $star_filter || $hotel["parking"] === $filter_value && $star_filter == "all" || $filter_value == "all" && $hotel["vote"] >= $star_filter) {
            $filter_hotels[] = $hotel;
        } elseif ($parking_filter == "all" && $star_filter == "all") {
            $filter_hotels = $hotels;
        }
    };
} else {
    $filter_hotels = $hotels;
};