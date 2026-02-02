<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="3-day Mauritius itinerary for two bachelors with free beaches, bike transport, and nightlife in Grand Baie, including an interactive map of key locations.">
    <title>Mauritius 3-Day Itinerary for Two Bachelors</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Poppins:wght@300;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""/>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background: linear-gradient(to bottom, #e0f7fa, #ffffff);
            color: #333;
            margin: 0;
            padding: 0;
            line-height: 1.6;
        }
        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }
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
        header p {
            font-size: 1.2em;
            margin: 10px 0 0;
        }
        details {
            margin: 20px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
            transition: all 0.3s ease;
        }
        summary {
            font-family: 'Poppins', sans-serif;
            font-size: 1.5em;
            font-weight: 600;
            padding: 15px;
            background: #90e0ef;
            color: #333;
            cursor: pointer;
            border-radius: 5px;
        }
        summary:hover {
            background: #48cae4;
            color: #fff;
        }
        article {
            padding: 20px;
            background: #f9f9f9;
            border-radius: 0 0 5px 5px;
        }
        h3 {
            color: #0077b6;
            font-family: 'Poppins', sans-serif;
            margin-top: 0;
        }
        ul {
            list-style: none;
            padding: 0;
        }
        li {
            margin: 10px 0;
            padding-left: 20px;
            position: relative;
        }
        li::before {
            content: "🌴";
            position: absolute;
            left: 0;
            font-size: 1.2em;
        }
        .cost {
            font-weight: bold;
            color: #d00000;
        }
        .map-section {
            margin: 20px 0;
            padding: 15px;
            background: #e0f7fa;
            border-radius: 5px;
        }
        .map-section h3 {
            margin-top: 0;
        }
        #map {
            height: 400px;
            width: 100%;
            border-radius: 5px;
            border: 1px solid #ddd;
        }
        .budget-breakdown {
            margin-top: 20px;
            padding: 15px;
            background: #e0f7fa;
            border-radius: 5px;
        }
        .budget-breakdown h3 {
            margin-top: 0;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }
        th {
            background: #0077b6;
            color: #fff;
        }
        td {
            background: #fff;
        }
        footer {
            text-align: center;
            padding: 20px;
            background: #0077b6;
            color: #fff;
            border-radius: 0 0 10px 10px;
            margin-top: 20px;
        }
        footer a {
            color: #90e0ef;
            text-decoration: none;
        }
        footer a:hover {
            text-decoration: underline;
        }
        @media (max-width: 768px) {
            .container {
                margin: 10px;
                padding: 10px;
            }
            header h1 {
                font-size: 1.8em;
            }
            summary {
                font-size: 1.2em;
            }
            article {
                padding: 15px;
            }
            #map {
                height: 600px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1>3-Day Mauritius Itinerary for Two Bachelors</h1>
            <p>Friday, May 23, 2025 – Sunday, May 25, 2025 | Free Activities & Bike Transport</p>
        </header>



        <section class="map-section">
            <h3>Interactive Map of Your Mauritius Adventure</h3>
            <div id="map"></div>
        </section>
        
        <details>
            <summary>Day 1: Friday – Grand Baie Exploration</summary>
            <article>
                <h3>Theme: Beach Vibes, Local Culture, and Nightlife Kickoff</h3>
                <ul>
                    <li><strong>9:30 AM – Arrival and Setup</strong>: Land at MRU airport. Take public bus to Grand Baie (MUR 50 each). Check into Ocean Villas guesthouse (AED 200/night). Rent bicycles (MUR 400/day each). <span class="cost">Cost: MUR 900 (AED 72, INR 1,440)</span></li>
                    <li><strong>11:30 AM – Pereybere Beach (Free)</strong>: Cycle 2 km to Pereybere Beach. Swim, sunbathe, and socialize. <span class="cost">Cost: Free</span></li>
                    <li><strong>1:00 PM – Lunch</strong>: Cycle to Happy Rajah for dholl puri or fish curry (MUR 100 each). <span class="cost">Cost: MUR 200 (AED 16, INR 320)</span></li>
                    <li><strong>2:30 PM – Grand Baie Bazaar (Free)</strong>: Cycle 2 km to explore local market stalls. <span class="cost">Cost: Free</span></li>
                    <li><strong>4:00 PM – La Cuvette Beach (Free)</strong>: Cycle 1 km for sunset views and relaxation. <span class="cost">Cost: Free</span></li>
                    <li><strong>6:30 PM – Dinner and Nightlife</strong>: Cycle to Coolen Chez Ram for dinner (MUR 150 each). Visit Banana Beach Club for drinks and music (MUR 150/drink). <span class="cost">Cost: MUR 900 (AED 72, INR 1,440)</span></li>
                    <li><strong>10:00 PM – Return</strong>: Cycle back to guesthouse. <span class="cost">Cost: Free</span></li>
                </ul>
                <p class="cost">Total Day 1 Cost: MUR 2,000 (AED 160, INR 3,200) for two</p>
            </article>
        </details>

        <details>
            <summary> 2: Saturday – Flic en Flac and Adventure</summary>
            <article>
                <h3>Theme: Beach Hopping, Scenic Views, and Vibrant Nightlife</h3>
                <ul>
                    <li><strong>8:00 AM – Breakfast</strong>: Eat at Cafe de Grand Baie (MUR 100 each). Prep bikes. <span class="cost">Cost: MUR 200 (AED 16, INR 320)</span></li>
                    <li><strong>9:00 AM – Flic en Flac Beach (Free)</strong>: Bus to Flic en Flac (MUR 40 each). Cycle 2 km to beach for swimming and volleyball. <span class="cost">Cost: MUR 80 (AED 6, INR 120)</span></li>
                    <li><strong>12:00 PM – Lunch</strong>: Cycle to Zub Express for roti or farata (MUR 80 each). <span class="cost">Cost: MUR 160 (AED 13, INR 260)</span></li>
                    <li><strong>1:30 PM – Wolmar Public Beach (Free)</strong>: Cycle 3 km for views of Le Morne. <span class="cost">Cost: Free</span></li>
                    <li><strong>3:30 PM – Tamarin Bay (Free)</strong>: Cycle 5 km to watch surfers and relax. <span class="cost">Cost: Free</span></li>
                    <li><strong>6:00 PM – Dinner and Return</strong>: Cycle to Chez Pepe for dinner (MUR 150 each). Bus back to Grand Baie (MUR 40 each). <span class="cost">Cost: MUR 380 (AED 30, INR 600)</span></li>
                    <li><strong>8:00 PM – Nightlife</strong>: Cycle to C Beach Club for cocktails and dancing (MUR 200/drink). <span class="cost">Cost: MUR 800 (AED 64, INR 1,280)</span></li>
                    <li><strong>11:00 PM – Return</strong>: Cycle back to guesthouse. <span class="cost">Cost: Free</span></li>
                </ul>
                <p class="cost">Total Day 2 Cost: MUR 1,628 (AED 130, INR 2,600) for two</p>
            </article>
        </details>

        <details>
            <summary>Day 3: Sunday – Port Louis and Departure</summary>
            <article>
                <h3>Theme: Cultural Immersion and Final Beach Time</h3>
                <ul>
                    <li><strong>8:00 AM – Breakfast</strong>: Eat at guesthouse or local stall (MUR 80 each). <span class="cost">Cost: MUR 160 (AED 13, INR 260)</span></li>
                    <li><strong>9:00 AM – Port Louis Central Market (Free)</strong>: Bus to Port Louis (MUR 30 each). Cycle 2 km to explore market. <span class="cost">Cost: MUR 60 (AED 5, INR 100)</span></li>
                    <li><strong>11:00 AM – Caudan Waterfront (Free)</strong>: Cycle 1 km for harbor views and promenade. <span class="cost">Cost: Free</span></li>
                    <li><strong>12:30 PM – Lunch</strong>: Cycle to Caudan food court for gateaux piment or haleem (MUR 100 each). <span class="cost">Cost: MUR 200 (AED 16, INR 320)</span></li>
                    <li><strong>2:00 PM – Mont Choisy Beach (Free)</strong>: Bus to Grand Baie (MUR 30 each). Cycle 3 km for final beach time. <span class="cost">Cost: MUR 60 (AED 5, INR 100)</span></li>
                    <li><strong>4:30 PM – Prep for Departure</strong>: Cycle to return bikes (MUR 400 each). Snack at guesthouse (MUR 50 each). <span class="cost">Cost: MUR 900 (AED 72, INR 1,440)</span></li>
                    <li><strong>6:00 PM – Airport Transfer</strong>: Bus to MRU airport (MUR 50 each). <span class="cost">Cost: MUR 100 (AED 8, INR 160)</span></li>
                    <li><strong>9:30 PM – Departure</strong>: Fly back to Dubai. <span class="cost">Cost: Free</span></li>
                </ul>
                <p class="cost">Total Day 3 Cost: MUR 1,480 (AED 119, INR 2,380) for two</p>
            </article>
        </details>


        <div class="budget-breakdown">
            <h3>Budget Breakdown (for Two)</h3>
            <table>
                <tr><th>Category</th><th>Cost (AED)</th><th>Cost (INR)</th></tr>
                <tr><td>Accommodation</td><td>400</td><td>8,000</td></tr>
                <tr><td>Bike Rentals</td><td>192</td><td>3,840</td></tr>
                <tr><td>Food</td><td>130</td><td>2,600</td></tr>
                <tr><td>Transport (Buses)</td><td>38</td><td>760</td></tr>
                <tr><td>Drinks (Nightlife)</td><td>112</td><td>2,240</td></tr>
                <tr><td><strong>Total</strong></td><td><strong>872</strong></td><td><strong>17,440</strong></td></tr>
            </table>
        </div>

        <footer>
            <p>Plan your Mauritius adventure with. Copyright <?php echo date('Y'); ?> - Krishna Pallapolu</p>
        </footer>
    </div>

    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    <script>
        // Initialize the map
        var map = L.map('map').setView([-20.2000, 57.5000], 9); // Center on Mauritius, zoom level 9

        // Add OpenStreetMap tiles
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
            maxZoom: 18,
        }).addTo(map);

        // Add markers with popups
        var locations = [
            { lat: -20.4302, lng: 57.6836, name: 'MRU Airport', activity: 'Arrival (Day 1), Departure (Day 3)', day: '1 & 3' },
            { lat: -20.0182, lng: 57.5802, name: 'Grand Baie', activity: 'Base for guesthouse, dining, nightlife', day: '1 & 2' },
            { lat: -20.0069, lng: 57.5918, name: 'Pereybere Beach', activity: 'Swim, sunbathe, socialize', day: '1' },
            { lat: -20.0130, lng: 57.5735, name: 'La Cuvette Beach', activity: 'Sunset views, relaxation', day: '1' },
            { lat: -20.2740, lng: 57.3630, name: 'Flic en Flac Beach', activity: 'Swimming, volleyball', day: '2' },
            { lat: -20.2880, lng: 57.3690, name: 'Wolmar Public Beach', activity: 'Views of Le Morne', day: '2' },
            { lat: -20.3250, lng: 57.3700, name: 'Tamarin Bay', activity: 'Watch surfers, relax', day: '2' },
            { lat: -20.1619, lng: 57.4989, name: 'Port Louis Central Market', activity: 'Explore local market', day: '3' },
            { lat: -20.1610, lng: 57.4980, name: 'Caudan Waterfront', activity: 'Harbor views, promenade', day: '3' },
            { lat: -20.0210, lng: 57.5510, name: 'Mont Choisy Beach', activity: 'Final beach time', day: '3' }
        ];

        locations.forEach(function(loc) {
            L.marker([loc.lat, loc.lng]).addTo(map)
                .bindPopup(`<b>${loc.name}</b><br>${loc.activity}<br><i>Day ${loc.day}</i>`);
        });
    </script>
</body>
</html>