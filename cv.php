<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $summary = $_POST['summary'];
    $education = $_POST['education'];
    $skills = $_POST['skills'];

    $photo = $_FILES['photo'];
    $photoName = $photo['name'];
    $photoTmp = $photo['tmp_name'];

    $uploadDir = "uploads/";

    if (!is_dir($uploadDir)) {
        mkdir($uploadDir);
    }

    $photoPath = $uploadDir . basename($photoName);
    move_uploaded_file($photoTmp, $photoPath);
}
?>

<!DOCTYPE html>

<html>
<head>
<title>Your CV</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h1>🎉 Your CV 🎉</h1>

```
<img src="<?php echo $photoPath; ?>" width="150" style="border-radius:50%;">

<h2><?php echo $name; ?></h2>
<p><b>Email:</b> <?php echo $email; ?></p>
<p><b>Phone:</b> <?php echo $phone; ?></p>

<h3>Summary</h3>
<p><?php echo $summary; ?></p>

<h3>Education</h3>
<p><?php echo $education; ?></p>

<h3>Skills</h3>
<p><?php echo $skills; ?></p>
```

</div>

</body>
</html>
