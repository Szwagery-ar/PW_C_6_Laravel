<?php

use Illuminate\Support\Facades\Route;




Route::get('/reservation', function () {
    return view('reservation');
})->name('reservation'); 

Route::get('/profil', function () {
    return view('profil');
})->name('profil'); 

Route::get('/obat', function () {
    return view('obat');
})->name('obat');

Route::get('/detailObat', function () {
    return view('detailObat');
})->name('detailObat');

Route::get('/cart', function () {
    return view('cart');
})->name('cart');

Route::get('/', function () {
    return view('home');
})->name('home');


Route::get('/about', function () {
    return view('bout');
})->name('about');

Route::get('/obat/{id}', function (string $id) {
    $products = [
        1 => ['image' => 'image1.png', 'name' => 'Isolate Way', 'description' => 'Isolate Whey Protein is a high-quality protein supplement that supports muscle growth and recovery, making it ideal for athletes and fitness enthusiasts.', 'price' => 'Rp 200.000', 'dosage' => 'Drink once a day in the morning', 'type' => 'Powder'],
        2 => ['image' => 'image2.png', 'name' => 'Friends Adult Diapers', 'description' => 'Friends Adult Diapers are designed for maximum comfort and protection, featuring a soft, breathable material that ensures a snug fit while effectively managing moisture and odor. With a high absorbency level, they provide confidence and security for individuals with incontinence, allowing for an active lifestyle without worries. The discreet design and adjustable tabs make them easy to wear and change, ensuring dignity and comfort throughout the day.', 'price' => 'Rp 75.000', 'dosage' => 'Every 4 to 6 hours', 'type' => 'Gel'],
        3 => ['image' => 'image3.png', 'name' => 'LiveEasy', 'description' => 'Liveasy Wellness Calcium Magnesium Vitamin D3 & Zinc is a dietary supplement that supports bones and dental health, featuring a powerful blend of essential nutrients in a convenient 60-tablet bottle. These tablets are formulated to help strengthen bones and teeth while promoting overall wellness.', 'price' => 'Rp 100.000', 'dosage' => '2 tablets per day, preferably taken with meals.', 'type' => 'Tablet'],
        4 => ['image' => 'image24.webp', 'name' => 'Sumagesic', 'description' => 'SUMAGESIC TABLET is a medication containing 600 mg of Paracetamol, effective for relieving pain and reducing fever.', 'price' => 'Rp 2.500', 'dosage' => 'Adults is 1 to 2 tablets every 4 to 6 hours as needed', 'type' => 'Tablets'],
        5 => ['image' => 'image5.png', 'name' => 'NutriGo', 'description' => 'Nutrigo Powder Milk for Kids is a nutritious formula designed to support the growth and development of children, providing essential vitamins and minerals to promote healthy bones, immune function, and overall well-being. Its a delicious and convenient option for busy parents looking to enhance their childs diet.', 'price' => 'Rp 125.000', 'dosage' => 'Once or twice daily.', 'type' => 'Powder'],
        6 => ['image' => 'image6.png', 'name' => 'Protinex', 'description' => 'Protinex Health And Nutritional Drink Mix For Adults with High protein & 8 Immuno Nutrients is ready to serve beverage mix that helps meet the nutrient requirements of Indian Adults. Protinex Original contains 17 essential vitamins and minerals including 8 immuno nutrients³; that support immunity, build strength and provide energy.', 'price' => 'Rp 90.000', 'dosage' => 'Drink one or two glasses a day for maximum effect.', 'type' => 'Powder'],
        7 => ['image' => 'image7.png', 'name' => 'Episof', 'description' => 'Premium Grade Silicone Gel: Episof is a high-quality scar reducing cream made from premium-grade silicone; This ensures the product is safe and effective in caring for a variety of skin conditions.', 'price' => 'Rp 55.000', 'dosage' => 'Used twice a day, in the morning and evening.', 'type' => 'Gel'],
        8 => ['image' => 'image8.png', 'name' => 'StayFree', 'description' => 'Stayfree is a trusted brand offering high-quality sanitary pads designed for ultimate comfort and protection during menstruation. Stayfree pads feature a soft, cottony surface to prevent irritation and are equipped with fast-absorption technology that locks away moisture, ensuring you stay dry and comfortable for hours. With secure wings for a snug fit and leak-proof barriers, Stayfree pads are ideal for active women, providing reliable protection throughout the day. Whether for light or heavy flow, Stayfree caters to various needs, ensuring hygiene, freshness, and confidence. 1 pack contains 7 pads.', 'price' => 'Rp 15.000', 'dosage' => 'Change your pad up to 5 times a day to maintain freshness and comfort.', 'type' => 'pads'],
        9 => ['image' => 'image9.png', 'name' => 'Himalaya Ashvagandha Bottle Of 120 Tablets', 'description' => 'Ashvagandha is known for its adaptogenic properties, which help the body manage stress and anxiety by normalizing elevated cortisol levels2. It also boosts energy levels, enhances endurance, and supports overall well-being', 'price' => 'Rp 40.000', 'dosage' => '1 tablet twice daily or as direct by your doctor.', 'type' => 'Tablet'],
        10 => ['image' => 'image22.png', 'name' => 'Tolak Angin', 'description' => 'Tolak Angin is a liquid herbal remedy formulated to relieve symptoms of colds and flu, particularly for those experiencing "masuk angin" or discomfort due to cold weather. Its blend of natural ingredients helps to warm the body, boost immunity, and ease respiratory issues, making it a popular choice for quick relief.', 'price' => 'Rp 15.000', 'dosage' => '2 to 3 times a day.', 'type' => 'Liquid'],
        11 => ['image' => 'image23.webp', 'name' => 'Charm', 'description' => 'Charm sanitary pads with wings offer superior protection and comfort during your menstrual cycle. Designed to fit snugly and prevent leaks, these pads provide maximum absorbency while keeping you feeling fresh and confident all day long.', 'price' => 'Rp 125.000', 'dosage' => 'Changing them every 4 to 6 hours.', 'type' => 'Pads'],
        12 => ['image' => 'image12.png', 'name' => 'Ketonof', 'description' => 'Ketoconazole Shampoo is a powerful antifungal treatment formulated to combat dandruff and other scalp conditions, effectively soothing irritation and reducing flaking. This 100ml bottle offers a convenient size for easy use at home or on the go, ensuring a healthy and balanced scalp.', 'price' => 'Rp 125.000', 'dosage' => 'Twice a week for the first 2 to 4 weeks.', 'type' => 'Liquid'],
    ];

   
    if (array_key_exists($id, $products)) {
        
        return view('detailObat', ['product' => $products[$id]]);
    } else {
      
        return redirect()->back()->with('error', 'Produk tidak ditemukan');
    }
})->name('detailObat');
