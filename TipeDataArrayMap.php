<?php

$data = array(
    "name" => "Naufal Fadhil Athallah",
    "age" => 17,
    "address" => array(
        "city" => "Jakarta",
        "country" => "Indonesia"
    ),
    "hobbies" => array("Swimming", "Gaming"),
    "is_married" => false,
    "list_school" => array(
        "name" => "SMK Taruna Bhakti",
        "year_in" => 2017,
        "year_out" => 2020,
        "major" => null
    ),
    "skills" => array(
        array(
            "skill_name" => "PHP",
            "level" => "beginner"
        ),
        array(
            "skill_name" => "HTML",
            "level" => "beginner"
        )
    ),
    "interest_in_coding" => true
);

var_dump($data);

/**
 * array(7) {
 *   ["name"]=> string(24) "Naufal Fadhil Athallah"
 *   ["age"]=> int(17)
 *   ["address"]=> array(2) {
 *   ["city"]=> string(7) "Jakarta"
 *   ["country"]=> string(9) "Indonesia"
 * }
 * ["hobbies"]=> array(2) {
 *   [0]=> string(8) "Swimming"
 *   [1]=> string(6) "Gaming"
 * }
 * ["is_married"]=> bool(false)
 * ["list_school"]=> array(4) {
 *   ["name"]=> string(17) "SMK Taruna Bhakti"
 *   ["year_in"]=> int(2017)
 *   ["year_out"]=> int(2020)
 *   ["major"]=> NULL
 * }
 * ["skills"]=> array(2) {
 *   [0]=> array(2) {
 *     ["skill_name"]=> string(3) "PHP"
 *     ["level"]=> string(8) "beginner"
 *    }
 *   [1]=> array(2) {
 *     ["skill_name"]=> string(4) "HTML"
 *     ["level"]=> string(8) "beginner"
 *   }
 * }
 * ["interest_in_coding"]=> bool(true)
 * }
 */

// Mengakses data di dalam array
echo "Name: " . $data["name"] . "\n"; // Name: Naufal Fadhil Athallah

// Mengakses data di dalam array yang bersarang (nested array)
echo "City: " . $data["address"]["city"] . "\n"; // City: Jakarta
