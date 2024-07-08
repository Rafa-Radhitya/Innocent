<?php
header('Content-Type: application/json');

// Initialize cURL session
$curl = curl_init();

// Set cURL options
curl_setopt_array($curl, [
    CURLOPT_URL => "https://steam-store-data.p.rapidapi.com/api/featured/",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => [
        "x-rapidapi-host: steam-store-data.p.rapidapi.com",
        "x-rapidapi-key: db93ceecf2msh0e0c435b0e3b473p1cdcc7jsnf4c27afca8d2"
    ],
]);

// Execute cURL request
$response = curl_exec($curl);
$err = curl_error($curl);

// Close cURL session
curl_close($curl);

// Prepare the response
$responseData = [];

if ($err) {
    $responseData['error'] = "cURL Error #: " . $err;
} else {
    // Decode JSON response
    $data = json_decode($response, true);

    // Extract game titles and prices
    $gameTitles = [];
    $gamePrices = [];

    // Check if 'featured_win' key exists
    if (isset($data['featured_win']) && is_array($data['featured_win'])) {
        foreach ($data['featured_win'] as $game) {
            $gameTitles[] = $game['name'];
            $gamePrices[] = $game['final_price'] / 100; // Prices are in cents, convert to dollars
        }
    } else {
        $responseData['error'] = "The 'featured_win' key does not exist or is not an array.";
    }

    $responseData['gameTitles'] = $gameTitles;
    $responseData['gamePrices'] = $gamePrices;
}

// Encode the response data as JSON
echo json_encode($responseData);
?>
