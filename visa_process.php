<?php
    $country = $_POST['country'];

    switch ($country) {
        case "USA":
            echo "Visa required for most applicants.";
            break;
        case "CAN":
            echo "Visa required unless you have an eTA.";
            break;
        case "IND":
            echo "Visa required before travel.";
            break;
        case "UK":
            echo "Visa depends on the duration of stay.";
            break;
        case "AUS":
            echo "eVisa available for eligible travelers.";
            break;
        default:
            echo "Invalid country selection.";
    }
?>
