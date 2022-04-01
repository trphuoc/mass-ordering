<?php

// Set variables for our request
$shop = $_GET['shop'];
$api_key = "ef3d2fd55f0d3f028d662e11b91c4073";
$scopes = "read_orders,write_products";
$redirect_uri = "https://3573-222-254-34-56.ngrok.io/mass-ordering/generate_token.php";

// Build install/approval URL to redirect to
$install_url = "https://" . $shop . "/admin/oauth/authorize?client_id=" . $api_key . "&scope=" . $scopes . "&redirect_uri=" . urlencode($redirect_uri);

// Redirect
header("Location: " . $install_url);
die();