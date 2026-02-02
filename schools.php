<?php
include_once('inc/header.php');


// Updated dataset with all the schools
$schools = [
    ["name" => "JEBEL ALI SCHOOL",  "website" => "", "educationcenterid" => 14719, "curriculum" => "UK", "grades_years" => "FS1-Y13", "students" => 1977, "google_rating" => "", "school_rating" => "Very good", "location" => "JABAL ALI FIRST", "tuition_fees" => "AED 1000"],
    ["name" => "Dhruv Global School",  "website" => "https://dhruv.ae/fees/", "educationcenterid" => 1, "curriculum" => "Indian", "grades_years" => "KG1-G12", "students" => 1977, "google_rating" => "4.8 (53)", "school_rating" => "NEW", "location" => "Arjan, Al Barsha South", "tuition_fees" => "AED 13000 - 15000"],

    ["name" => "Al Arqm Private School", "website" => "", "educationcenterid" => 12, "curriculum" => "MOE", "grades_years" => "Pre Primary-G12", "students" => 958, "google_rating" => "", "school_rating" => "Acceptable", "location" => "AL BARSHA FIRST", "tuition_fees" => "AED 0"],
    ["name" => "Al Ghaf Private School L.L.C", "website" => "", "educationcenterid" => 500819, "curriculum" => "UK", "grades_years" => "FS1 - Y8", "students" => 59, "google_rating" => "", "school_rating" => "Acceptable", "location" => "JABAL ALI FIRST", "tuition_fees" => "AED 0"],
    ["name" => "Al Mawakeb School Al Barsha L.L.C", "website" => "", "educationcenterid" => 20, "curriculum" => "US", "grades_years" => "KG1-G12", "students" => 3357, "google_rating" => "", "school_rating" => "Good", "location" => "AL BARSHA SECOND", "tuition_fees" => "AED 0"],
    ["name" => "Al Nibras International Private School", "website" => "", "educationcenterid" => 126, "curriculum" => "US", "grades_years" => "KG1-G12", "students" => 1525, "google_rating" => "", "school_rating" => "Good", "location" => "DUBAI INVESTMENT PARK FIRST", "tuition_fees" => "AED 0"],
    ["name" => "Ambassador International Academy L.L.C", "website" => "", "educationcenterid" => 500721, "curriculum" => "IB", "grades_years" => "Pre primary-G10", "students" => 1474, "google_rating" => "", "school_rating" => "Good", "location" => "AL QOUZ SECOND", "tuition_fees" => "AED 0"],
    ["name" => "American School Dubai", "website" => "", "educationcenterid" => 34, "curriculum" => "US", "grades_years" => "Pre Primary-G12", "students" => 2061, "google_rating" => "", "school_rating" => "Good", "location" => "AL BARSHA SECOND", "tuition_fees" => "AED 0"],
    ["name" => "Arcadia School - Dubai Branch", "website" => "", "educationcenterid" => 151820, "curriculum" => "UK", "grades_years" => "FS1-Y11", "students" => 1067, "google_rating" => "", "school_rating" => "Very good", "location" => "JABAL ALI FIRST", "tuition_fees" => "AED 0"],
    ["name" => "Australian International School - Dubai L.L.C", "website" => "", "educationcenterid" => 501095, "curriculum" => "Australian", "grades_years" => "Pre-primary-G8", "students" => 421, "google_rating" => "", "school_rating" => "Good", "location" => "AL BARSHA SECOND", "tuition_fees" => "AED 0"],
    ["name" => "Bloom World Academy L.L.C", "website" => "", "educationcenterid" => 502805, "curriculum" => "IB", "grades_years" => "Pre-primary-G10", "students" => 684, "google_rating" => "", "school_rating" => "NEW", "location" => "AL BARSHA SECOND", "tuition_fees" => "AED 0"],
    ["name" => "Bright Riders School", "website" => "https://www.brightridersdubai.com/fees", "educationcenterid" => 152711, "curriculum" => "Indian", "grades_years" => "Pre-primary-G8", "students" => 1142, "google_rating" => "3.8 (250)", "school_rating" => "Good", "location" => "DUBAI INVESTMENT PARK FIRST", "tuition_fees" => "AED 13000 - 15000"],
    ["name" => "Brighton College Dubai L.L.C", "website" => "", "educationcenterid" => 152035, "curriculum" => "UK", "grades_years" => "FS1-Y13", "students" => 976, "google_rating" => "", "school_rating" => "Very good", "location" => "AL BARSHA SECOND", "tuition_fees" => "AED 0"],
    ["name" => "Clarion School L.L.C", "website" => "", "educationcenterid" => 15083, "curriculum" => "US", "grades_years" => "Pre Primary-G7", "students" => 293, "google_rating" => "", "school_rating" => "Good", "location" => "AL QOUZ FIRST", "tuition_fees" => "AED 0"],
    ["name" => "Collegiate International School", "website" => "", "educationcenterid" => 643, "curriculum" => "US/IB", "grades_years" => "Pre Primary-G12", "students" => 745, "google_rating" => "", "school_rating" => "Good", "location" => "UMM SUQEIM THIRD", "tuition_fees" => "AED 0"],
    ["name" => "Credence High School L.L.C", "website" => "https://www.credencehighschool.com/tuition-fee.html", "educationcenterid" => 1604, "curriculum" => "Indian", "grades_years" => "Pre-primary-G12", "students" => 2074, "google_rating" => "4.3 (160)", "school_rating" => "Very good", "location" => "AL QOUZ FIRST", "tuition_fees" => "AED 15000 - 18000"],
    ["name" => "Delhi Private School", "website" => "https://website.dpsdubai.com/fee-structure/", "educationcenterid" => 112, "curriculum" => "Indian", "grades_years" => "KG1-G12", "students" => 3848, "google_rating" => "2.2 (112)", "school_rating" => "Very good", "location" => "JABAL ALI FIRST", "tuition_fees" => "AED 11000 -14000"],
    ["name" => "Dewvale School L.L.C", "website" => "", "educationcenterid" => 503607, "curriculum" => "Indian", "grades_years" => "Pre KG- G5", "students" => 704, "google_rating" => "", "school_rating" => "NEW", "location" => "AL QOUZ THIRD", "tuition_fees" => "AED 0"],
    ["name" => "Dove Green Private School L.L.C", "website" => "", "educationcenterid" => 2248, "curriculum" => "UK", "grades_years" => "FS1-Y10", "students" => 661, "google_rating" => "", "school_rating" => "Good", "location" => "DUBAI INVESTMENT PARK FIRST", "tuition_fees" => "AED 0"],
    ["name" => "Dubai Heights Academy", "website" => "", "educationcenterid" => 152197, "curriculum" => "UK", "grades_years" => "FS1-Y10", "students" => 321, "google_rating" => "", "school_rating" => "Very good", "location" => "AL BARSHA SECOND", "tuition_fees" => "AED 0"],
    ["name" => "Dubai International Academy Albarsha", "website" => "", "educationcenterid" => 500005, "curriculum" => "IB", "grades_years" => "Pre Primary-G12", "students" => 1631, "google_rating" => "", "school_rating" => "Very good", "location" => "AL BARSHA FIRST", "tuition_fees" => "AED 0"],
    ["name" => "Dubai International Private School - Br", "website" => "", "educationcenterid" => 26, "curriculum" => "US", "grades_years" => "KG1-G12", "students" => 1816, "google_rating" => "", "school_rating" => "Good", "location" => "AL QOUZ FIRST", "tuition_fees" => "AED 0"],
      ["name" => "Dubai Knowledge Park", "website" => "", "educationcenterid" => 504539, "curriculum" => "US", "grades_years" => "Pre Primary-G12", "students" => 1400, "google_rating" => "", "school_rating" => "Very good", "location" => "DUBAI KNOWLEDGE PARK", "tuition_fees" => "AED 0"],
    ["name" => "Dubai Modern High School", "website" => "", "educationcenterid" => 402, "curriculum" => "Indian", "grades_years" => "KG1-G12", "students" => 2399, "google_rating" => "", "school_rating" => "Outstanding", "location" => "JUMEIRAH FIRST", "tuition_fees" => "AED 0"],
    ["name" => "Dubai American Academy", "website" => "", "educationcenterid" => 30, "curriculum" => "US", "grades_years" => "Pre Primary-G12", "students" => 2115, "google_rating" => "", "school_rating" => "Outstanding", "location" => "AL BARSHA FIRST", "tuition_fees" => "AED 0"],
    ["name" => "Durham School for Girls Dubai", "website" => "", "educationcenterid" => 501024, "curriculum" => "UK", "grades_years" => "FS1-Y13", "students" => 437, "google_rating" => "", "school_rating" => "Very good", "location" => "JUMEIRAH FIRST", "tuition_fees" => "AED 0"],
    ["name" => "Emirates International School - Meadows", "website" => "", "educationcenterid" => 502904, "curriculum" => "IB", "grades_years" => "Pre Primary-G12", "students" => 1519, "google_rating" => "", "school_rating" => "Good", "location" => "MEADOWS FIRST", "tuition_fees" => "AED 0"],
    ["name" => "Emirates International School - Jumeirah", "website" => "", "educationcenterid" => 503426, "curriculum" => "IB", "grades_years" => "Pre Primary-G12", "students" => 1686, "google_rating" => "", "school_rating" => "Outstanding", "location" => "JUMEIRAH FIRST", "tuition_fees" => "AED 0"],
    ["name" => "Emirates Academy of Finance and Business", "website" => "", "educationcenterid" => 500132, "curriculum" => "IB", "grades_years" => "Pre Primary-G12", "students" => 1347, "google_rating" => "", "school_rating" => "Good", "location" => "AL QOUZ FIRST", "tuition_fees" => "AED 0"],
    ["name" => "Fairgreen International School", "website" => "", "educationcenterid" => 504209, "curriculum" => "IB", "grades_years" => "Pre Primary-G12", "students" => 622, "google_rating" => "", "school_rating" => "Good", "location" => "DUBAI HILLS", "tuition_fees" => "AED 0"],
    ["name" => "GEMS Al Barsha National School", "website" => "", "educationcenterid" => 108, "curriculum" => "MOE", "grades_years" => "Pre Primary-G12", "students" => 1185, "google_rating" => "", "school_rating" => "Good", "location" => "AL BARSHA FIRST", "tuition_fees" => "AED 0"],
    ["name" => "GEMS World Academy - Dubai", "website" => "", "educationcenterid" => 18, "curriculum" => "IB", "grades_years" => "Pre Primary-G12", "students" => 1800, "google_rating" => "", "school_rating" => "Outstanding", "location" => "AL BARSHA FIRST", "tuition_fees" => "AED 0"],
    ["name" => "Global Indian International School", "website" => "https://globalindianschool.org/dubai/admissions/fees", "educationcenterid" => 501678, "curriculum" => "Indian", "grades_years" => "KG1-G12", "students" => 1735, "google_rating" => "3.9 (143)", "school_rating" => "Very good", "location" => "AL BARSHA FIRST", "tuition_fees" => "AED 18000 - 20000"],
    ["name" => "The Indian International School (DSO)", "website" => "https://iisdso.ihsdubai.org/school-fees-fact-sheet/", "educationcenterid" => 2, "curriculum" => "Indian", "grades_years" => "KG1-G12", "students" => 0, "google_rating" => "3.6 (209)", "school_rating" => "Good", "location" => " DUBAI SILICON OASIS", "tuition_fees" => "AED 22000"],
    ["name" => "Horizon International School", "website" => "", "educationcenterid" => 501907, "curriculum" => "UK", "grades_years" => "FS1-Y13", "students" => 1239, "google_rating" => "", "school_rating" => "Good", "location" => "MUSALLA FIRST", "tuition_fees" => "AED 0"],
    ["name" => "International School of Creative Science", "website" => "", "educationcenterid" => 401, "curriculum" => "MOE", "grades_years" => "Pre Primary-G12", "students" => 1478, "google_rating" => "", "school_rating" => "Good", "location" => "AL QOUZ FIRST", "tuition_fees" => "AED 0"],
    ["name" => "Jumeirah College", "website" => "", "educationcenterid" => 26, "curriculum" => "UK", "grades_years" => "FS1-Y13", "students" => 2020, "google_rating" => "", "school_rating" => "Outstanding", "location" => "JUMEIRAH SECOND", "tuition_fees" => "AED 0"],
    ["name" => "Jumeirah English Speaking School", "website" => "", "educationcenterid" => 301, "curriculum" => "UK", "grades_years" => "FS1-Y13", "students" => 2680, "google_rating" => "", "school_rating" => "Outstanding", "location" => "JUMEIRAH FIRST", "tuition_fees" => "AED 0"],
    ["name" => "Kings’ School Dubai", "website" => "", "educationcenterid" => 501238, "curriculum" => "UK", "grades_years" => "FS1-Y13", "students" => 2398, "google_rating" => "", "school_rating" => "Outstanding", "location" => "UMM SUQEIM FIRST", "tuition_fees" => "AED 0"],
    ["name" => "Lyceum Alpinum Zuoz", "website" => "", "educationcenterid" => 500896, "curriculum" => "IB", "grades_years" => "Pre Primary-G12", "students" => 221, "google_rating" => "", "school_rating" => "Very good", "location" => "JUMEIRAH FIRST", "tuition_fees" => "AED 0"],
    ["name" => "Middlesex University Dubai", "website" => "", "educationcenterid" => 1220, "curriculum" => "UK", "grades_years" => "Undergraduate", "students" => 1450, "google_rating" => "", "school_rating" => "Good", "location" => "AL Sufouh", "tuition_fees" => "AED 0"],
    ["name" => "North London Collegiate School", "website" => "", "educationcenterid" => 501004, "curriculum" => "UK", "grades_years" => "FS1-Y13", "students" => 850, "google_rating" => "", "school_rating" => "Outstanding", "location" => "AL QOUZ SECOND", "tuition_fees" => "AED 0"],
    ["name" => "Repton School Dubai", "website" => "", "educationcenterid" => 505101, "curriculum" => "UK", "grades_years" => "FS1-Y13", "students" => 1700, "google_rating" => "", "school_rating" => "Outstanding", "location" => "MOTOR CITY", "tuition_fees" => "AED 0"],
    ["name" => "School of International Education", "website" => "", "educationcenterid" => 138, "curriculum" => "IB", "grades_years" => "Pre Primary-G12", "students" => 1503, "google_rating" => "", "school_rating" => "Good", "location" => "AL QOUZ FIRST", "tuition_fees" => "AED 0"],
    ["name" => "Safa Community School", "website" => "", "educationcenterid" => 11, "curriculum" => "UK", "grades_years" => "FS1-Y13", "students" => 2045, "google_rating" => "", "school_rating" => "Very good", "location" => "Safa", "tuition_fees" => "AED 0"],
    ["name" => "Swiss International Scientific School Dubai", "website" => "", "educationcenterid" => 501023, "curriculum" => "IB", "grades_years" => "Pre Primary-G12", "students" => 1223, "google_rating" => "", "school_rating" => "Good", "location" => "AL JADAF", "tuition_fees" => "AED 0"],
    ["name" => "The International School of Dubai", "website" => "", "educationcenterid" => 507, "curriculum" => "IB", "grades_years" => "Pre Primary-G12", "students" => 2060, "google_rating" => "", "school_rating" => "Outstanding", "location" => "UMM SUQEIM SECOND", "tuition_fees" => "AED 0"],
    ["name" => "The Winchester School - Dubai", "website" => "", "educationcenterid" => 1240, "curriculum" => "UK", "grades_years" => "Pre Primary-G12", "students" => 2400, "google_rating" => "", "school_rating" => "Good", "location" => "JUMEIRAH", "tuition_fees" => "AED 0"],
    ["name" => "Wellington International School", "website" => "", "educationcenterid" => 502322, "curriculum" => "UK", "grades_years" => "FS1-Y13", "students" => 2112, "google_rating" => "", "school_rating" => "Outstanding", "location" => "MUSALLA FIRST", "tuition_fees" => "AED 0"],
     ["name" => "Ambassador School", "website" => "", "educationcenterid" => 401, "curriculum" => "Indian", "grades_years" => "Pre primary-G12", "students" => 1408, "google_rating" => "", "school_rating" => "Very good", "location" => "MANKHOOL", "tuition_fees" => "AED 0"],
    ["name" => "Amity School L.L.C", "website" => "", "educationcenterid" => 152457, "curriculum" => "Indian", "grades_years" => "Pre-primary-G10", "students" => 1311, "google_rating" => "", "school_rating" => "Good", "location" => "AL QUSAIS FIRST", "tuition_fees" => "AED 0"],
    ["name" => "Buds Public School", "website" => "", "educationcenterid" => 87, "curriculum" => "Indian", "grades_years" => "Pre-primary-G12", "students" => 1053, "google_rating" => "", "school_rating" => "Acceptable", "location" => "MUHAISNAH FIRST", "tuition_fees" => "AED 0"],
    ["name" => "Crescent English School", "website" => "", "educationcenterid" => 80, "curriculum" => "Indian", "grades_years" => "KG1-G12", "students" => 1550, "google_rating" => "", "school_rating" => "Acceptable", "location" => "AL QUSAIS FIRST", "tuition_fees" => "AED 0"],
    ["name" => "Elite English School", "website" => "", "educationcenterid" => 76, "curriculum" => "Indian", "grades_years" => "Pre Primary-G12", "students" => 2144, "google_rating" => "", "school_rating" => "Acceptable", "location" => "Deira", "tuition_fees" => "AED 0"],
    ["name" => "GEMS Legacy School - Dubai Branch", "website" => "", "educationcenterid" => 83, "curriculum" => "Indian", "grades_years" => "KG1-G8", "students" => 6325, "google_rating" => "", "school_rating" => "Good", "location" => "AL GARHOUD", "tuition_fees" => "AED 0"],
    ["name" => "GEMS Modern Academy", "website" => "", "educationcenterid" => 78, "curriculum" => "Indian", "grades_years" => "Pre Primary - G12", "students" => 3840, "google_rating" => "", "school_rating" => "Outstanding", "location" => "NADD AL SHIBA FIRST", "tuition_fees" => "AED 0"],
    ["name" => "GEMS New Millennium School L.L.C", "website" => "https://www.gemsnewmillenniumschool-alkhail.com/Admissions/Tuition-Fees", "educationcenterid" => 1267, "curriculum" => "Indian", "grades_years" => "Pre Primary-G12", "students" => 2476, "google_rating" => "3.3 (169)", "school_rating" => "Very good", "location" => "Al Khail", "tuition_fees" => "AED 20000 - 22000"],
    ["name" => "GEMS Our Own English High School", "website" => "", "educationcenterid" => 77, "curriculum" => "Indian", "grades_years" => "KG1-G12", "students" => 10399, "google_rating" => "", "school_rating" => "Very good", "location" => "AL WARQA FIRST", "tuition_fees" => "AED 0"],
    ["name" => "GEMS Our Own Indian School", "website" => "https://www.gemsoo-alquoz.com/Admissions/Fees-and-Payments", "educationcenterid" => 89, "curriculum" => "Indian", "grades_years" => "KG1-G12", "students" => 3666, "google_rating" => "4.0 (238)", "school_rating" => "Very good", "location" => "AL QOUZ FIRST", "tuition_fees" => "AED 8000 - 10000"],
    ["name" => "Gulf Indian High School", "website" => "", "educationcenterid" => 74, "curriculum" => "Indian", "grades_years" => "KG1-G12", "students" => 2373, "google_rating" => "", "school_rating" => "Good", "location" => "AL GARHOUD", "tuition_fees" => "AED 0"],
    ["name" => "Gulf Model School", "website" => "", "educationcenterid" => 94, "curriculum" => "Indian", "grades_years" => "KG1-G12", "students" => 4214, "google_rating" => "", "school_rating" => "Acceptable", "location" => "MUHAISNAH FIRST", "tuition_fees" => "AED 0"],
    ["name" => "Highgate International School", "website" => "", "educationcenterid" => 503799, "curriculum" => "Indian", "grades_years" => "Pre KG- G5", "students" => 115, "google_rating" => "", "school_rating" => "NEW", "location" => "Al Barsha South", "tuition_fees" => "AED 0"],
    ["name" => "JSS International School L.L.C", "website" => "https://jssisdubai.com/school-fee-structure/", "educationcenterid" => 370, "curriculum" => "Indian", "grades_years" => "Pre Primary-G12", "students" => 3001, "google_rating" => "", "school_rating" => "Very good", "location" => "Jumeirah Village Circle (South)", "tuition_fees" => "AED 16000 - 18000"],
    ["name" => "JSS Private School L.L.C", "website" => "", "educationcenterid" => 518, "curriculum" => "Indian", "grades_years" => "Pre Primary-G12", "students" => 2083, "google_rating" => "", "school_rating" => "Very good", "location" => "AL WASL", "tuition_fees" => "AED 0"],
    ["name" => "Little Flower English School", "website" => "", "educationcenterid" => 93, "curriculum" => "Indian", "grades_years" => "KG1-G6", "students" => 928, "google_rating" => "", "school_rating" => "Acceptable", "location" => "HOR AL ANZ", "tuition_fees" => "AED 0"],
    ["name" => "New Indian Model School", "website" => "", "educationcenterid" => 86, "curriculum" => "Indian", "grades_years" => "KG1-G12", "students" => 7259, "google_rating" => "", "school_rating" => "Good", "location" => "AL GARHOUD", "tuition_fees" => "AED 0"],
    ["name" => "Our Own High School - Dubai Branch", "website" => "", "educationcenterid" => 119, "curriculum" => "Indian", "grades_years" => "KG1-G12", "students" => 4657, "google_rating" => "", "school_rating" => "Good", "location" => "AL WARQA FIRST", "tuition_fees" => "AED 0"],
    ["name" => "Pearl Wisdom School L.L.C", "website" => "", "educationcenterid" => 152213, "curriculum" => "Indian", "grades_years" => "KG1-G8", "students" => 815, "google_rating" => "", "school_rating" => "Good", "location" => "HOR AL ANZ", "tuition_fees" => "AED 0"],
    ["name" => "Primus Private School L.L.C", "website" => "", "educationcenterid" => 144, "curriculum" => "Indian", "grades_years" => "Pre Primary-G12", "students" => 1451, "google_rating" => "", "school_rating" => "Good", "location" => "AL WARQA FIRST", "tuition_fees" => "AED 0"],
    ["name" => "Sabari Indian School L.L.C", "website" => "", "educationcenterid" => 1235, "curriculum" => "Indian", "grades_years" => "Pre Primary-G10", "students" => 777, "google_rating" => "", "school_rating" => "Good", "location" => "Deira", "tuition_fees" => "AED 0"],
    ["name" => "Springdales School L.L.C", "website" => "https://springdalesdubai.com/admissions/fee-structure/", "educationcenterid" => 1247, "curriculum" => "Indian", "grades_years" => "Pre Primary-G12", "students" => 1358, "google_rating" => "", "school_rating" => "Good", "location" => "AL QOUZ FOURTH", "tuition_fees" => "AED 15000 - 17000"],
    ["name" => "The Central School", "website" => "", "educationcenterid" => 84, "curriculum" => "Indian", "grades_years" => "KG1-G12", "students" => 3598, "google_rating" => "", "school_rating" => "Acceptable", "location" => "AL NAHDA SECOND", "tuition_fees" => "AED 0"],
    ["name" => "The Indian Academy", "website" => "", "educationcenterid" => 811, "curriculum" => "Indian", "grades_years" => "Pre Primary - G12", "students" => 1571, "google_rating" => "", "school_rating" => "Good", "location" => "MUHAISANAH FOURTH"]
];


?>
<div class="container-xxl">
<!-- Header -->
<header class="bg-blue-400 text-white p-6">
    <h1 class="text-3xl font-bold text-center">School Directory</h1>
    <a class=" text-center" target="_blank" href="https://web.khda.gov.ae/en/Education-Directory/schools">KHDA WEBSITE</a>
</header>

<div class="flex justify-center space-x-4 my-4">
    <!-- Search Input -->
    <input type="text" id="searchInput" 
           placeholder="Search by school name..." 
           class="p-2 w-full md:w-1/3 mb-4 mx-auto border rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-400" 
           onkeyup="searchSchools()">   

    <!-- Curriculum Filter -->
    <select id="curriculumFilter" class="p-2 w-full md:w-1/4 mb-4 mx-auto border rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-400" onchange="searchSchools()">
        <option value="indian">Indian</option>
        <option value="">All Curriculums</option>
        <option value="IB">IB</option>
        <option value="UK">UK</option>
        <option value="MOE">MOE</option>
        <option value="Australian">Australian</option>
        <option value="US">US</option>


    </select>

    <!-- Rating Filter -->
    <select id="ratingFilter" class="p-2 w-full md:w-1/4 mb-4 mx-auto border rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-400" onchange="searchSchools()">
        <option value="">All Ratings</option>
        <option value="Good">Good</option>
        <option value="Very Good">Very Good</option>
        <option value="Outstanding">Outstanding</option>
        <option value="NEW">NEW</option>
        <option value="Acceptable">Acceptable</option>
    </select>
</div>

<!-- Table -->
<div class="overflow-x-auto">
    <table class="min-w-full bg-white border border-gray-200 rounded-md">
        <thead>
            <tr class="odd:bg-white even:bg-gray-50">
                <th class="px-4 py-2 text-left font-semibold">School Name</th>
                <th class="px-4 py-2 text-left font-semibold">Tuition Fees</th>
                <th class="px-4 py-2 text-left font-semibold">Curriculum</th>
                <th class="px-4 py-2 text-left font-semibold">Grades (Years)</th>
                <th class="px-4 py-2 text-left font-semibold">Rating</th>
                <th class="px-4 py-2 text-left font-semibold">Google Rating</th>

                <th class="px-4 py-2 text-left font-semibold">Location</th>
                <th class="px-4 py-2 text-left font-semibold">Students</th>


            </tr>
        </thead>
        <tbody>
            <?php foreach ($schools as $school): ?>
                <tr class="school-item odd:bg-white even:bg-gray-50">
                    <?php
                    $textColor = !empty($school['website']) ? "underline text-red-900" : "text-slate-900";
                    ?>
                    <td class="px-4 py-2 school-name">
                        <a class=" <?= $textColor; ?>" 
                           href="<?= htmlspecialchars($school['website']) ?>" 
                           target="_blank">
                            <?= htmlspecialchars($school['name']) ?>
                        </a>
                    </td>
                    <td class="px-4 py-2 school-name"><?= htmlspecialchars($school['tuition_fees']) ?></td>
                    <td class="px-4 py-2 curriculum"><?= htmlspecialchars($school['curriculum']) ?></td>
                    <td class="px-4 py-2"><?= htmlspecialchars($school['grades_years']) ?></td>
                    <td class="px-4 py-2 rating"><?= htmlspecialchars($school['school_rating']) ?></td>
                    <td class="px-4 py-2 rating">&#127775;<?= htmlspecialchars($school['google_rating']) ?></td>
                    <td class="px-4 py-2"><?= htmlspecialchars($school['location']) ?></td>
                    <td class="px-4 py-2"><?= htmlspecialchars($school['students']) ?></td>

                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
</div>
<!-- JavaScript for Search and Filters -->
<script>
    function searchSchools() {
        const searchInput = document.getElementById("searchInput").value.toLowerCase();
        const curriculumFilter = document.getElementById("curriculumFilter").value.toLowerCase();
        const ratingFilter = document.getElementById("ratingFilter").value;
        
        const schoolItems = document.querySelectorAll(".school-item");

        schoolItems.forEach(item => {
            const schoolName = item.querySelector(".school-name").innerText.toLowerCase();
            const schoolCurriculum = item.querySelector(".curriculum").innerText.toLowerCase();
            const schoolRating = item.querySelector(".rating").innerText;

            // Check if the school matches the search input, curriculum, and rating filters
            const matchesSearch = schoolName.includes(searchInput);
            const matchesCurriculum = curriculumFilter === "" || schoolCurriculum.includes(curriculumFilter);
            const matchesRating = ratingFilter === "" || schoolRating === ratingFilter;

            // Show or hide school based on the conditions
            if (matchesSearch && matchesCurriculum && matchesRating) {
                item.classList.remove("hidden");
            } else {
                item.classList.add("hidden");
            }
        });
    }
    // Ensure Indian curriculum is the default filter on page load
    document.addEventListener("DOMContentLoaded", function() {
        document.getElementById("curriculumFilter").value = "indian";
        searchSchools(); // Apply the filter immediately
    });
</script>
<?php include_once('inc/footer.php'); ?>
