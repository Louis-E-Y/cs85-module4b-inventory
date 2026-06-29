<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>T-Shirt Price Engine</title>
    <style>
        body { font-family: sans-serif; background-color: #f4f6f8; color: #333; display: flex; justify-content: center; align-items: center; min-height: 100vh; }
        .receipt { background-color: #fff; padding: 2rem; border-radius: 8px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); width: 400px; border-top: 5px solid #005a9c; }
        h1 { text-align: center; color: #005a9c; }
        ul { list-style: none; padding: 0; }
        li { display: flex; justify-content: space-between; padding: 8px 0; border-bottom: 1px solid #eee; }
        .total { font-size: 1.5em; color: #28a745; }
    </style>
</head>
<body>
    <div class="receipt">
        <h1>Order Summary</h1>
        <?php
            // --- Configuration: Change these values to test all business rules! ---
            $size = 'XL'; // Options: 'S', 'M', 'L', 'XL'
            $color = 'Sunset Orange'; // Any string, but test with 'Sunset Orange' or 'Ocean Blue'
            $isCustomized = true; // Options: true, false
            $customerFirstName = 'Louis'; // <-- IMPORTANT: REPLACE WITH YOUR ACTUAL FIRST NAME

            // --- Part A: Implement the logic below using ONLY simple, nested if-statements ---
            $finalPrice = 22.50;
            $details = "<li>Base Price: <span>$" . number_format($finalPrice, 2) . "</span></li>";

            // SIZE UPCHARGES
            if ($size == 'L') {
                $finalPrice = $finalPrice + 1.75;
            }
            else if ($size == 'XL') {
                $finalPrice = $finalPrice + 2.50;
            }
            //PREMIUM COLOR UPCHARGE
            if ($color == 'Sunset Orange' || $color == 'Ocean Blue') {
                $finalPrice = $finalPrice + 2.00;
            }

            //CUSTOMIZATION UPCHARGE
            if ($isCustomized) {
                
                $finalPrice = $finalPrice + 5.00;
            }
            if ($isCustomized || $size == 'XL') {
                    $finalPrice = $finalPrice + 3.00;
                }

            //NAME DISCOUNT
            if (strlen($customerFirstName) > 6) {
                $finalPrice = $finalPrice - 1.00;
            }
            // --- DO NOT EDIT BELOW THIS LINE ---
            echo "<ul>" . $details . "</ul>";
            echo "<ul><li><span class='total'>Final Price:</span> <span class='total'>$" . number_format($finalPrice, 2) . "</span></li></ul>";

            /*
            In part A, I had excessive code because L and XL are mutually exclusive, so with only 'ifs'
            it would always check for both even though thats unneeded. The solution was an else if block.
            In part A I also wrote a nested if condition to check if the shirt was customized and XL, and
            while I don't mind the logic there it was less intuitive and readable than splitting it into
            two conditions, one if (boolean) and one if (boolean && size), as it now reads just like 
            the business rule.

            */
        ?>
    </div>
</body>
</html>