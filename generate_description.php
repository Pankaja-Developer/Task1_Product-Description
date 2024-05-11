<?php

function generate_product_description() {
    $product_name = "EcoWave Reusable Water Bottle";
    $features = ["Eco-friendly", "Durable", "Leak-proof", "Lightweight", "Sleek design"];
    $benefits = ["Sustainable choice", "Stylish accessory", "Convenient for on-the-go lifestyle"];
    $word_count = 0;
    $description = "<p>Introducing our eco-conscious companion for your hydration journey: the $product_name. ";
    $description .= "Crafted from premium, durable materials, this bottle is not only a sustainable choice ";
    $description .= "but also a stylish accessory for your everyday adventures. With its sleek design and vibrant colors, ";
    $description .= "staying hydrated has never looked this good.</p><br><p>Say goodbye to single-use plastics and embrace eco-friendliness with every sip. ";
    $description .= "The $product_name is ";
    
    foreach ($features as $feature) {
        if ($word_count > 120) {
            break;
        }
        $description .= "$feature, ";
        $word_count += 1;
    }
    
    $description = rtrim($description, ", ");  // Remove the last comma and space
    $description .= ". ";
    
    foreach ($benefits as $benefit) {
        if ($word_count > 140) {
            break;
        }
        $description .= "$benefit, ";
        $word_count += 1;
    }
    
    $description = rtrim($description, ", ");  // Remove the last comma and space
    $description .= ".</p><br><p>Join the movement towards a greener planet while enjoying the convenience and style of the ";
    $description .= "$product_name. Make a statement with your hydration choices and choose sustainability without compromising on quality.</p>";
    
    return $description;
}

echo generate_product_description();

?>
