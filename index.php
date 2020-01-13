<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="app.css">
    <script src="https://kit.fontawesome.com/67fc94dcb1.js" crossorigin="anonymous"></script>
    <title>Portfolio</title>
</head>

<body>
    <div class="navbar">
        <ul>
            <li><h3><a>Contact</a></h3></li>
            <li><h3><a>Projects</a></h3></li>
            <li><h3><a>About</a></h3></li>
            <li><h3><a>Home</a></h3></li>
        </ul>
    </div>
    <div class="landingtext">
        <h1>I'm Florian Solé</h1>
        <h2>Developer</h2>
        <ul>
            <li><a class="fab fa-linkedin-in" href="https://www.linkedin.com/in/florian-sol%C3%A9-76a6b6144/" target="_blank"></a></li>
            <li><a class="fab fa-github" href="https://github.com/FloNumbers?tab=repositories" target="_blank"></a></li>
        </ul>
    </div>
    <div class="solid">
        <h1>About Me</h1>
        <p>I am Florian Solé. I was born in Tournai in Belgium, but i moved to the Netherlands when i was around 1 year old and still live there to this day.
            I am 
    </div>
    <div>
        <h1>Projects</h1>
        <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.
            Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,
            ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo,
            fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae,
            justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper
            nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.
            Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius
            laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies
            nisi. Nam eget dui.

            Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing
            sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et
            ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet
            orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis
            magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, quis gravida magna mi a libero.
            Fusce vulputate eleifend sapien. Vestibulum purus quam, scelerisque ut, mollis sed, nonummy id, metus.
            Nullam accumsan lorem in dui. Cras ultricies mi eu turpis hendrerit fringilla. Vestibulum ante ipsum primis
            in faucibus orci luctus et ultrices posuere cubilia Curae; In ac dui quis mi consectetuer lacinia. </p>
    </div>
    <div class="solid">
        <div class="verwerken">
            <h1 class="verwerkHeader">Contact me</h1>
            <?php
    
            if (isset($_POST['submit'])) {
                
            } else {
    
            ?>
            <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
                <p>Name</p>
                <input type="text" name="name" placeholder="enter your name here">
                <p class="par">Email:</p>
                <input type="text" name="email" placeholder="enter your email here">
                <br>
                <p class="par">Subject:</p>
                <input type="textarea" name="subject" placeholder="enter your subject here">
                <br>
                <input type="submit" name="submit" value="feedback">
            </form>
            <?php } ?>
        </div>
    </div>
</body>

</html>