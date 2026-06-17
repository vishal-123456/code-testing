<?php
// Intentionally vulnerable to Reflected XSS
// For educational use only.

$search = $_GET['q'] ?? '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reflected XSS Demo</title>
</head>
<body>

<h2>Reflected XSS Demonstration</h2>

<form method="GET">
    <label>Search:</label>
    <input type="text" name="q" value="<?php echo $search; ?>">
    <button type="submit">Submit</button>
</form>

<hr>

<p>You searched for:</p>

<div>
    <?php
        // Vulnerable: Directly outputs user input.
        echo $search;
    ?>
</div>

</body>
</html>
