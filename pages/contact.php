<?php
$current_page = "Contact Me";
$home_class = '';
$academics_class = '';
$work_class = '';
$contact_class = 'active';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Personal Website</title>
    <link rel="stylesheet" href="styles/site.css">
</head>

<body>
    <?php include 'includes/navigation.php' ?>

    <?php include 'includes/title.php' ?>
    <div class="contactPage">

        <div class="contactForm">

            <h2>Contact Form</h2>

            <form id="contact-form" action="/contact/contact-confirm" method="post" novalidate>

                <div class="input form_control ">
                    <label for="request-name">Name:</label>
                    <input type="text" name="contact-name" id="request-name">
                </div>

                <div class="radio form_control" role="group" aria-labelledby="radio-label">
                    <div id="radio-label">Reason for Contact:</div>
                    <div id="radios">
                        <div class="radio_pair">
                            <input type="radio" id="work-reason" name="type" value="Work">
                            <label for="work-reason">Work</label>
                        </div>
                        <div class="radio_pair">
                            <input type="radio" id="personal-reason" name="type" value="Personal">
                            <label for="personal-reason">Personal</label>
                        </div>
                        <div class="radio_pair">
                            <input type="radio" id="other-reason" name="type" value="Other">
                            <label for="other-reason">Other</label>
                        </div>
                    </div>

                </div>

                <div class="input form_control message_input">
                    <label for="request-message">Message:</label>
                    <textarea type="text" name="contact-message" id="request-message"></textarea>
                </div>

                <div>
                    <input class="form_control" id="submit" type="submit" value="Submit Form">
                </div>
            </form>
        </div>

        <div class="contactDiv">
            <div class="contacth2">
                <h2>Contact Information</h2>
            </div>
            <div class="contactElements">
                <!-- Source: (original work) Abolaji Awoyomi -->
                <p>Phone: <a href="tel:929-271-7584">929-271-7584</a></p>
                <p>Email: <a href="mailto:awoyomi.ab@gmail.com">awoyomi.ab@gmail.com</a></p>
                <p>LinkedIn: <a href="https://www.linkedin.com/in/abolaji-awoyomi/">Abolaji Awoyomi</a></p>
                <p>Download resume <a href="images/resume.pdf" download>here</a></p>
                <!-- <img alt="Bunjee Headshot" src="images/headshot.jpg"> -->
            </div>
        </div>
    </div>


    <?php include 'includes/footer.php' ?>

</body>

</html>
