<?php

use App\Section;


$factory->define(Section::class, function (Faker $faker) {
    return [
        'section_id' => 1,
        'page' => 'home',
        'description' => 'Our Mission Section',
        'title' => 'our mission',
        'text' => 'Our passion and Commitment to the industry from Property owners to tenants makes us stand out from the rest! Be assured that your property will be managed with experience professionals that value your investments. Let us help you simplify your property’s day to day operations or a project as needed. We specialize in Single family homes, Townhouses, Condos, & Multifamily. Contact Us Today!',
    ];
});


