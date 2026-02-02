<?php

include_once('../inc/header.php');
// Set page title for SEO
$page_title = "Travel Itineraries | SKrishnaP Travel";

// Sample itinerary data (expandable for more trips)
$itineraries = [
    [
        'title' => 'Mauritius 3-Day Itinerary for Two Bachelors',
        'description' => 'A fun-filled trip with free beaches, bike adventures, and vibrant nightlife in Grand Baie and Flic en Flac.',
        'url' => 'mauritius-itenary.php',
        //'image' => '/itenary/images/mauritius.jpg', // Placeholder; add real image
    ],
    [
        'title' => 'Georgia 3-Day Itinerary (Coming Soon)',
        'description' => 'Explore Tbilisi’s nightlife, culture, and wine tasting. Stay tuned for details!',
        'url' => '#',
        'image' => '/itenary/images/georgia-placeholder.jpg',
    ],
    [
        'title' => 'Oman 3-Day Itinerary (Coming Soon)',
        'description' => 'Discover Muscat’s souqs, beaches, and desert vibes. Details coming soon!',
        'url' => '#',
        'image' => '/itenary/images/oman-placeholder.jpg',
    ],
];
?>

    <style>

        header {
            text-align: center;
            padding: 20px;
            background: #0077b6;
            color: #fff;
            border-radius: 10px 10px 0 0;
        }
        header h1 {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            font-size: 2.5em;
        }
        .itinerary-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            padding: 20px;
        }
        .itinerary-card {
            background: #f9f9f9;
            border-radius: 5px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }
        .itinerary-card:hover {
            transform: translateY(-5px);
        }
        .itinerary-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
        .itinerary-card h3 {
            font-family: 'Poppins', sans-serif;
            color: #0077b6;
            margin: 15px;
            font-size: 1.5em;
        }
        .itinerary-card p {
            margin: 0 15px 15px;
            font-size: 1em;
            color: #555;
        }
        .itinerary-card a {
            display: block;
            margin: 15px;
            padding: 10px;
            background: #0077b6;
            color: #fff;
            text-align: center;
            text-decoration: none;
            border-radius: 5px;
        }
        .itinerary-card a:hover {
            background: #48cae4;
        }
        @media (max-width: 768px) {
            .container {
                margin: 10px;
                padding: 10px;
            }
            header h1 {
                font-size: 1.8em;
            }
            .itinerary-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>

    <div class="container-xxl" style="min-height: 80vh">
        <header>
            <h1>Explore Our Travel Itineraries</h1>
        </header>
        <div class="itinerary-grid">
            <?php foreach ($itineraries as $itinerary): ?>
                <div class="itinerary-card">
                    <img src="<?php echo $itinerary['image']; ?>" alt="<?php echo $itinerary['title']; ?>">
                    <h3><?php echo $itinerary['title']; ?></h3>
                    <p><?php echo $itinerary['description']; ?></p>
                    <a href="<?php echo $itinerary['url']; ?>">View Itinerary</a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    
    <?php include_once('../inc/footer.php'); // Adjust path to your footer file ?>
