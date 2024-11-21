<?php
$current_page = "Contact Me";
$home_class = '';
$academics_class = '';
$work_class = '';
$contact_class = 'active';

$form_name = $_POST['contact-name']; // untrusted
$form_reason = $_POST['type']; // untrusted
$form_message = $_POST['contact-message']; // untrusted
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Personal Website</title>
  <link rel="stylesheet" href="/public/styles/site.css">
</head>

<body>


  <?php include 'includes/navigation.php' ?>

  <?php include 'includes/title.php' ?>

  <h2>Contact Confirmation</h2>

  <p>I've received your message and I'll get back to you ASAP!</p>

  <h3>Contact Form Details</h3>

  <div id=form_responses>
    <div id=name_response>
      <h4 class="response_details detail_label">Name: </h4>
      <p class="response_details"><?php echo htmlspecialchars($form_name); ?></p>
    </div>
    <div id=reason_response>
      <h4 class="response_details detail_label">Reason for Contact: </h4>
      <p class="response_details"><?php echo htmlspecialchars($form_reason); ?></p>
    </div>
    <div id=message_response>
      <h4 class="response_details detail_label">Message: </h4>
      <p class="response_details"><?php echo htmlspecialchars($form_message); ?></p>
    </div>
  </div>

  <?php include "includes/footer.php" ?>
</body>

</html>
