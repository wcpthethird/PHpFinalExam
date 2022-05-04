<?php
session_start();
require('../model/utensils_db.php');

$action = filter_input(INPUT_POST, 'action');
if ($action == null) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == null) {
        $action = 'list_utensils';
    }
}

if ($action == 'list_utensils') {
    $utensils = read_utensils();
    include('utensils_read.php');
} else if ($action == 'add_utensil') {
    $utensil_types = get_utensil_types();
    include('utensils_create.php');
} else if ($action == 'add_utensil_data') {
    $utensil_name = filter_input(INPUT_POST, 'utensil_name');
    $utensil_description = filter_input(INPUT_POST, 'utensil_description');
    $utensil_type = filter_input(INPUT_POST, 'utensil_type');
    $utensil_year_purchased = filter_input(INPUT_POST, 'utensil_year_purchased');
    $records_added = create_utensil($utensil_name, $utensil_description, $utensil_type, $utensil_year_purchased);
    $utensils = read_utensils();
    include('utensils_read.php');
}