<?php
if (isset($_POST["edit"])) {
    // Retrieve POST data
    $paymentmonth = $_POST["payment"];
    $majoroffense = $_POST["majoroffense"];
    $minoroffense = $_POST["minoroffense"];
    $permitfrom = $_POST["permitfrom"];
    $permitto = $_POST["permitto"];
    $studentnum = urldecode($_GET["studentnum"]);

    // Calculate payment
    $payment = (float) $paymentmonth * 500;

    try {
        // Include necessary files
        require_once "../dbh.inc.php";
        require_once "../edit_user/edituser_model.inc.php";

        // Fetch current user data
        $result = get_user($pdo, $studentnum);
        
        $currentPayment = (float) $result['payment'];
        $currentMajorOffense = (int) $result['major_offense'];
        $currentMinorOffense = (int) $result['minor_offense'];
        $currentPermit = $result['permit'];

        // Determine permit range
        if (!is_null($permitfrom) && !is_null($permitto)) {
            $permit = $permitfrom . ' to ' . $permitto;
        } else {
            $permit = $currentPermit;
        }

        // Update values
        $newPayment = isset($currentPayment) ? $currentPayment + $payment : $currentPayment;
        $newMajorOffense = isset($currentMajorOffense) ? $currentMajorOffense + (int) $majoroffense : $currentMajorOffense;
        $newMinorOffense = isset($currentMinorOffense) ? $currentMinorOffense + (int) $minoroffense : $currentMinorOffense;

        // Update user data in the database
        $rowCount = update_user($pdo, $studentnum, $newPayment, $newMajorOffense, $newMinorOffense, $permit);

        // Display success or failure message
        if ($rowCount > 0) {
            echo "<script>alert('Successfully updated dormer responsibilities!'); setTimeout(function(){ window.location.href = '/view_dormer.php'; }, 1000);</script>";
        } else {
            echo "<script>alert('Failed to update dormer responsibilities!'); setTimeout(function(){ window.location.href = '/view_dormer.php'; }, 1000);</script>";
        }

        // Close database connection
        $pdo = null;
        $stmt = null;
    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
}
?>
