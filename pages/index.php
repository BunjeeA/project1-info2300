<?php
$current_page = "Abolaji Awoyomi";
$home_class = 'active';
$academics_class = '';
$work_class = '';
$contact_class = '';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Personal Website</title>
    <link rel="stylesheet" href="styles/site.css">
</head>

<body id="index">

    <?php include "/Users/bunjee/Desktop/Projects/info2300/aoa26-project1-main/includes/navigation.php" ?>

    <h1 id="title">
        <a href="https://www.yorubaname.com/entries/abolaji" target="_blank">Abolaji</a>
        <a href="https://www.yorubaname.com/entries/Oluwatimileyin" target="_blank">Oluwatimileyin</a>
        <a href="https://www.yorubaname.com/entries/awoyomi" target="_blank">Awoyomi</a>
    </h1>


    <div id="homePage">
        <div id="imgContainer">
            <!-- Source: (original work) Abolaji Awoyomi -->
            <img id="indexImg" alt="Bunjee's Headshot" src="images/timeline4.jpg">
        </div>
        <div id="homeText">
            <div id="genInfo" class="homeContainer">
                <!-- Source: (original work) Abolaji Awoyomi -->
                <dl class="abList">
                    <dt>General Information</dt>
                    <dd>I'm 19 years old, born on July 27, 2004.</dd>
                    <dd>I'm originally from Brooklyn, NY.</dd>
                    <dd>I currently reside in Huntington, NY.</dd>
                    <dd>My entire family is from Nigeria.</dd>
                </dl>
            </div>

            <div id="edInfo" class="homeContainer">
                <!-- Source: (original work) Abolaji Awoyomi -->
                <dl class="abList">
                    <dt>Education</dt>
                    <dd>Cornell University, Ithaca, NY</dd>
                    <dd class="indent">Cornell WebDev, Member</dd>
                    <dd class="indent">Spikeball Club, Member</dd>
                    <dd class="indent">Expected Graduation May 2026</dd>
                    <dd class="indent">Pursuing a B.S in Information Science</dd>
                    <dd>Trinity School, New York, NY</dd>
                    <dd class="indent">Varsity Indoor and Outdrook Track Captain</dd>
                    <dd class="indent">Peer Leader</dd>
                    <dd class="indent">TrinLabs, Head of Outreach and Education</dd>
                    <dd class="indent">Hacktrin, Outreach Coordinator</dd>
                    <dd class="indent">Jazz Messengers, Lead Bassist/Guitarist</dd>
                    <dd class="indent">BodyBuilding Club, President and Treasurer</dd>
                    <dd></dd>
                </dl>
            </div>

        </div>
    </div>



    <?php include '/Users/bunjee/Desktop/Projects/info2300/aoa26-project1-main/includes/footer.php' ?>

</body>

</html>
