<?php


enum DiscountType
{
    case Standard;
    case Seasonal;
    case Weight;
}

function getDiscountedPrice(float $cartWeight, float $totalPrice, DiscountType $discountType): float
{
    switch ($discountType->name) {

        case 'Standard':
            return $totalPrice * $cartWeight;
        case 'Seasonal':
            return $totalPrice + $cartWeight;
        case 'Weight':
            echo "Weight";
            return $totalPrice - ($totalPrice * 0.18);
    }
    /*print_r($discountType->name);
    if ($cartWeight>10 && $discountType->name=='Weight')
    {
        $price = $totalPrice*(18/100);
    }
    else if ($cartWeight>10 && $discountType->name=='Weight')
    {
        $price = $totalPrice*(18/100);
    }
    else if ($cartWeight>10 && $discountType->name=='Weight')
    {
        $price = $totalPrice*(18/100);
    }
    return $totalPrice-$price;*/
}

echo getDiscountedPrice(12, 100, DiscountType::Weight);
