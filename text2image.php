<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);

    if (json_last_error() !== JSON_ERROR_NONE) {
        echo json_encode(['success' => false, 'message' => 'Invalid JSON input']);
        exit;
    }

    $apiKey = getenv('OPENAI_API_KEY') ?: $_ENV['OPENAI_API_KEY'] ?? '';

    if (empty($apiKey)) {
        echo json_encode(['success' => false, 'message' => 'API key not configured']);
        exit;
    }

    $description = $data['description'] ?? '';
    if (empty($description)) {
        echo json_encode(['success' => false, 'message' => 'Description is empty']);
        exit;
    }

    $url = 'https://api.openai.com/v1/images/generations';
    $options = [
        'http' => [
            'header'  => "Authorization: Bearer $apiKey\r\nContent-Type: application/json\r\n",
            'method'  => 'POST',
            'content' => json_encode([
                'prompt' => $description,
                'n' => 1,
                'size' => '1024x1024'
            ]),
        ],
    ];

    $context  = stream_context_create($options);
    $result = file_get_contents($url, false, $context);

    if ($result === FALSE) {
        echo json_encode(['success' => false, 'message' => 'API request failed']);
        exit;
    }

    $response = json_decode($result, true);
    if (json_last_error() !== JSON_ERROR_NONE) {
        echo json_encode(['success' => false, 'message' => 'Invalid JSON response from API']);
        exit;
    }

    $imageUrl = $response['data'][0]['url'] ?? '';

    if (empty($imageUrl)) {
        echo json_encode(['success' => false, 'message' => 'No image generated']);
        exit;
    }

    echo json_encode(['success' => true, 'imageUrl' => $imageUrl]);
    exit;
}
?>
