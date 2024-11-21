<?php
$current_page = "Work";
$home_class = '';
$academics_class = '';
$work_class = 'active';
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

    <?php include 'includes/navigation.php' ?>

    <?php include 'includes/title.php' ?>
    <div id="workPage">
        <div id="workLeft">
            <h2>Personal Projects</h2>
            <dl>
                <!-- Source: (original work) Abolaji Awoyomi -->
                <dt>Game Review</dt>
                <dd>Made with Typescript, this webapp is a space for gamers to browse and review different games. I connected
                    this to Firebase Database in order to save user data.</dd>
            </dl>

            <div class="grImg">
                <!-- Source: (original work) Abolaji Awoyomi -->
                <img alt="Game Review Logo" src="images/gamereview.jpg">
                <!-- Source: (original work) Abolaji Awoyomi -->
                <img alt="Game Review Logo" src="images/gameReview2.jpg">
            </div>


            <dl>
                <!-- Source: (original work) Abolaji Awoyomi -->
                <dt>Monster Legends App</dt>
                <dd>Monster Legends is one of my favorite mobile games. You can collect, breed, train and
                    fight with a wide variety of monsters. In Android Studio, I used Java to sort those monsters by element
                    and provide basic information about them. To add a fun aspect, I included a quiz to test the user on
                    their knowledge of the game.</dd>
            </dl>


            <div class="mlDemoImg">
                <!-- Source: (original work) Abolaji Awoyomi -->
                <img alt="Monster Legends App Screen + code snippet" src="images/mldemo1.jpg">
            </div>

            <dl>
                <!-- Source: (original work) Abolaji Awoyomi -->
                <dt><a href="https://bunjeea.github.io/Quoted/">Quoted</a></dt>
                <dd>I made this to keep all the quotes that I have in my phone and to find new quotes.</dd>
            </dl>

            <div class="slideshow-container">
                <div class="mySlides">
                    <!-- Source: (original work) Abolaji Awoyomi -->
                    <img alt="Quoted Logo" src="images/quoted1.jpg" style="width:100%">
                    <div class="text">Quoted Logo</div>
                </div>

                <div class="mySlides">
                    <!-- Source: (original work) Abolaji Awoyomi -->
                    <img alt="Quoted Home Page" src="images/quoted2.jpg" style="width:100%">
                    <div class="text">Quoted Home Page</div>
                </div>

                <div class="mySlides">
                    <!-- Source: (original work) Abolaji Awoyomi -->
                    <img alt="Quoted Search Page" src="images/quoted3.jpg" style="width:100%">
                    <div class="text">Quoted Search Page</div>
                </div>
                <div class="mySlides">
                    <!-- Source: (original work) Abolaji Awoyomi -->
                    <img alt="Quoted Login Page" src="images/quoted4.jpg" style="width:100%">
                    <div class="text">Quoted Login Page</div>
                </div>

                <a class="prev" onclick="plusSlides(-1,0)">&#10094;</a>
                <a class="next" onclick="plusSlides(1,0)">&#10095;</a>
            </div>


            <dl>
                <!-- Source: (original work) Abolaji Awoyomi -->
                <dt>Word Stacker</dt>
                <dd>Word Stacker is an interactive dictionary/thesaurus. You can search words to see
                    definition, part of speech, related words, etc or you can choose to see random words. You can save some
                    of the words you come across to your profile and study them later. I came us with this idea as a
                    supplement to my vocabulary. I am not the strongest writer and I find myself sometimes either not
                    knowing what word to use or using words that I do not completely understand. The programs we use in
                    school are forced on us and feel like busy work. However, with Word Stacker, you can take control over
                    your own education and vocabulary. I created this web app using HTML, CSS, and Javascript.</dd>
            </dl>



            <div class="slideshow-container">
                <div class="mySlides2">
                    <!-- Source: (original work) Abolaji Awoyomi -->
                    <img alt="Word Stacker Home Page" src="images/wordstacker1.jpg" style="width:100%">
                    <div class="text">WordStacker Home Page</div>
                </div>

                <div class="mySlides2">
                    <!-- Source: (original work) Abolaji Awoyomi -->
                    <img alt="WordStacker Search Page" src="images/wordstacker2.jpg" style="width:100%">
                    <div class="text">WordStacker Search Page 1</div>
                </div>

                <div class="mySlides2">
                    <!-- Source: (original work) Abolaji Awoyomi -->
                    <img alt="WordStacker Search Page 2" src="images/wordstacker3.jpg" style="width:100%">
                    <div class="text">WordStacker Search Page 2</div>
                </div>

                <a class="prev" onclick="plusSlides(-1, 1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1, 1)">&#10095;</a>
            </div>

            <dl>
                <!-- Source: (original work) Abolaji Awoyomi -->
                <dt>Histourism</dt>
                <dd>Histourism is a website that strategically combines history and tourism. Various
                    people in many different communities, especially as tourists, are uninformed about the culture and
                    history behind the places they are going to visit. Our website is able to give the user information
                    based on their desired travel location such as historical context, flight plans and more. My group and I
                    used HTML, CSS, and Javascript in addition to the Google Maps API and the Skyscanner Flight Search API.</dd>
            </dl>
            <div>
                <div class="slideshow-container2">

                    <div class="mySlides3">
                        <!-- Source: (original work) Abolaji Awoyomi -->
                        <img alt="Histourism addressing a problem" src="images/histourism1.jpg" style="width:100%">
                        <div class="text">Histourism addressing a problem</div>
                    </div>

                    <div class="mySlides3">
                        <!-- Source: (original work) Abolaji Awoyomi -->
                        <img alt="Histourism providing a solution" src="images/histourism2.jpg" style="width:100%">
                        <div class="text">Histourism providing a solution</div>
                    </div>

                    <div class="mySlides3">
                        <!-- Source: (original work) Abolaji Awoyomi -->
                        <img alt="Histourism Call to Action" src="images/histourism3.jpg" style="width:100%">
                        <div class="text">Histourism Call to Action</div>
                    </div>

                    <div class="mySlides3">
                        <!-- Source: (original work) Abolaji Awoyomi -->
                        <img alt="Histourism Trip Planner" src="images/histourism4.jpg" style="width:100%">
                        <div class="text">Histourism Trip Planner</div>
                    </div>

                    <a class="prev" onclick="plusSlides(-1, 2)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1, 2)">&#10095;</a>
                </div>
            </div>
        </div>
        <div id="workRight">
            <div id="skInfo">
                <!-- Source: (original work) Abolaji Awoyomi -->
                <dl class="abList workContainer">
                    <dt>Skills and Interests</dt>
                    <dd>Programming Languages: JavaScript, Python, Java, HTML, CSS, R(Beginner), Typescript(Beginner)</dd>
                    <dd>Applications: Google Workspace, Canva, iMovie, Figma</dd>
                    <dd>Interests: Software Development, UI/UX Design, Social Media, Education, Creative Ideation</dd>
                </dl>
            </div>

            <dl class="workContainer">
                <!-- Source: (original work) Abolaji Awoyomi -->
                <dt>Professional Experience</dt>
                <dd>Cornell University, Ithaca, NY</dd>
                <dd class="indent">Fitness Monitor(September 2022 - Present)</dd>
                <dd>All Star Code, New York, NY</dd>
                <dd class="indent">Summer Intensive Teaching Fellow(June - August 2021)</dd>
                <dd class="indent">Weekend Intensive Teaching Assistant(February - March 2022, February - April 2023)</dd>
                <dd class="indent">Summer Intensive Teaching Assistant(June - August 2022)</dd>
                <dd>Just Right Technology, New York, NY</dd>
                <dd class="indent">Content Creator(March - June 2021)</dd>
            </dl>
        </div>
    </div>

    <?php include 'includes/footer.php' ?>

    <script src="scripts/script.js"></script>
</body>

</html>
