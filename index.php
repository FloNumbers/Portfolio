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
            <li><h3><a href="#Contact">Contact</a></h3></li>
            <li><h3><a href="#Projects">Projects</a></h3></li>
            <li><h3><a href="#About">About</a></h3></li>
            <li><h3><a href="#Home">Home</a></h3></li>
        </ul>
    </div>
    <div id="Home" class="landingtext">
        <h1>I'm Florian Solé</h1>
        <h2>Developer</h2>
        <ul>
            <li><a class="fab fa-linkedin-in" href="https://www.linkedin.com/in/florian-sol%C3%A9-76a6b6144/" target="_blank"></a></li>
            <li><a class="fab fa-github" href="https://github.com/FloNumbers?tab=repositories" target="_blank"></a></li>
        </ul>
    </div>
    <div class="solid">
        <div id="About" class="aboutPage">
            <h1>About Me</h1>
            <p>I am Florian Solé. I was born in Tournai in Belgium, but i moved to the Netherlands when i was around 1 year old and still live there to this day.</p> <br>
            <h4>School</h4>
            <p>I am currently studying Application Developer at Scalda in Vlissingen. Before this i studied HBO-ICT at the HZ university, but I didn't meet the
            requirement to pass on to the next year. Despite all that, I'd say that I have found my passion in programming and am surely planning on continuing this.</p> <br>
            <h4>Hobbies</h4>
            <p>In my free time you'll probably find me behind my computer playing some games. That does not mean I don't do sports though. I am the goalkeeper for my 
                local waterpolo team, and I absolutely love to go windsurfing in the summer.</p>
        </div>
    </div>
    <div id="Projects" class="projectsPage">
        <h1>Projects</h1>
        <p>Ever since I started programming I have offcourse doen a couple of projects. Some I am defenitely more proud of than others, but I'll list a few here.
            The headers will be links aswell as titles to the after mentioned projects. Some of projects will be dutch. All of the repositories of these projects
             can be found on my github which is linked above and below.
        </p>
        <ul>
            <li><h2><a style="color:white" href="https://sleepy-harbor-96591.herokuapp.com/" target="_blank">original portfolio</a></h2>
                <p>As the first project I am listing here, you would probably think that this is the project that I'm most proud of. But that is not the case here.
                This project was my first ever gihub project. This project was meant as a portfolio assignement when I was still studying at the HZ university.
                For how much experience I had when I started this project, I think that it is a pretty good website. The website is currently in all kinds of disrepair, 
                and is defenitely not a good website in it's current state, but I am still proud of what i achived with only 1 or 2 months of any coding experience.
            </p></li>
            <li><h2><a style="color:white" href="https://flonumbers.github.io/basisschoolproject/" target="_blank">Bassisschoolproject</a></h2>
                <p>This one is another project I made for an assignement at the HZ university. This was a group project that we had to make for a primary school.
                    It had to be some kind of small game that had to do with a specific course they teached at that school. We chose history. The whole game is written in typescript
                    and is made in such a way that you never have to reload the page. You can even save your progress if you don't delete your cookies.
                    This is a project that I am personally very proud of. Yes the website is still riddled with bugs and quirks that need to be ironed out, but I think 
                    it's a small fun little game that we made in about 4 or 6 weeks.
            </p></li>
            <li><h2><a style="color:white" href="https://www.ditiseendomein.nl/" target="_blank">This very portfolio</a></h2>
            <p>So this very website you're in right now is also a school assignement, but this one is a school assignement for my current school, Scalda.
                I will be keeping this website up to date with new projects and thing I'm learning, so everyone who's interested can take a peek.
            </p></li>
        </ul>
    </div>
    <div class="solid">
        <div id="Contact" class="contactPage">
            <h1>Contact me</h1>
            <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
                <p>Name</p>
                <input type="text" name="name" placeholder="enter your name here">
                <p class="par">Email:</p>
                <input type="text" name="email" placeholder="enter your email here">
                <br>
                <p class="par">Subject:</p>
                <textarea name="subject" placeholder="enter your subject here"></textarea>
                <br>
                <input type="submit" name="submit" value="submit">
            </form>
        </div>
    </div>
</body>

</html>