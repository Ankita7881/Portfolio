<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

    <script src="https://kit.fontawesome.com/0f3ceabfbb.js" crossorigin="anonymous"></script>


    <style>
        nav ul li a:hover {

            font-size: 18px;
        }

        .p {
            color: rgb(233, 77, 233);
        }

        #element {
            color: rgb(233, 77, 233);
        }

        .tab-links {
            margin-right: 50px;
            font-size: 18px;
            font-weight: 500;
            cursor: pointer;
            position: relative;
        }

        .tab-links::after {
            content: '';
            width: 0;
            height: 3px;
            background: #ff004f;
            position: absolute;
            left: 0;
            bottom: -8px;
            transition: 0.5s;
        }

        .tab-links.active-link::after {
            width: 50%;
        }

        .tab-contents ul li {
            list-style: none;
            margin: 10px 0;
        }

        .tab-contents ul li span {
            color: #b54769;
            font-size: 14px;
        }

        .tab-contents {
            display: none;
        }

        .tab-contents.active-tab {
            display: block;
        }

        #pro {
            box-shadow: 4px 1px 13px 4px grey;
        }

        .contact-left {
            flex-basis: 35%;
        }

        .contact-right {
            flex-basis: 60%;
        }

        .contact-left p {
            margin-top: 30px;
        }

        .contact-left p i {
            color: #ff004f;
            margin-right: 15px;
            font-size: 25px;
        }

        .social-icons {
            margin-top: 30px;
        }

        .social-icons a {
            text-decoration: none;
            font-size: 30px;
            margin-right: 15px;
            color: #ababab;
            display: inline-block;
            transition: transform 0.5s;
        }

        .social-icons a:hover {
            color: #ff004f;
            transform: translateY(-5px);
        }

        .btn.btn2 {
            display: inline-block;
            background: #ff004f;
            color: black;
        }

        .contact-right form {
            width: 100%;
        }

        form input,
        form textarea {
            width: 100%;
            border: 0;
            outline: none;
            /* background: #262626; */
            background: whitesmoke;
            padding: 15px;
            margin: 15px 0;
            /* color: #fff; */
            color: #262626;
            font-size: 18px;
            border-radius: 6px;
        }

        form .btn2 {
            padding: 14px 60px;
            font-size: 18px;
            margin-top: 20px;
            cursor: pointer;
        }

        .copyright {
            width: 100%;
            text-align: center;
            padding: 25px 0;
            background: #262626;
            font-weight: 300;
            margin-top: 20px;
            color: white;
        }

        .copyright i {
            color: #ff004f;
        }
    </style>


</head>

<body id="home">

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 p-0">

                <nav class="navbar navbar-expand-lg navbar-light bg-light">

                    <div class="col-lg-4">

                        <a class="navbar-brand mx-5 h1" href="#">

                            Ankita's Portfolio
                        </a>

                    </div>

                    <div class="col-lg-3"></div>

                    <div class="col-lg-5">

                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item active">
                                    <a class="nav-link mx-4" href="#home">Home <span
                                            class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link mx-4" href="#about">About <span
                                            class="sr-only">(current)</span></a>
                                </li>

                                <li class="nav-item active">
                                    <a class="nav-link mx-4" href="#project">Project <span
                                            class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link mx-4" href="#contact">Contact <span
                                            class="sr-only">(current)</span></a>
                                </li>

                            </ul>

                        </div>
                    </div>
                </nav>

            </div>
        </div>
    </div>




    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-2"></div>
            <div class="col-lg-4 mt-5 pt-5">
                <div style="font-size: 30px; font-style: italic;">Hi, My name is <br><span class="p">Ankita
                        Verma</span>
                    <div>and I am a </div>
                    <span id="element"></span>
                </div>
            </div>

            <div class="col-lg-6 mt-3">
                <img src="a5.jpg" alt="" height="540px" width="500px" style="box-shadow: 2px 4px 10px 2px gray;">
            </div>
        </div>
    </div>

    <br><br>


    <div id="about">

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-1"></div>
                <div class="col-lg-4">
                    <img src="a2.jpg" alt="" height="540px" width="440px">
                </div>

                <div class="col-lg-7 mt-3">
                    <h1 style="font-size: 49px; font-weight: bold;">About Me</h1>
                    <br>
                    <p style="width: 800px; font-style: italic;">
                        Proficiency in HTML, CSS, Javascript. Excellent communication skills and ability to understand
                        client requirements.
                        continuous learner of new technologies, strategies, and tools. Can work well under pressure and
                        make the best of any situation. Passionate individual with greate interpersonal and
                        communication
                        skill.
                        Dedicated and passionate web developer with a strong foundation in
                        Laravel framework and proficiency in PHP, committed to crafting
                        innovative solutions that blend functionality with user-centric design
                    </p>

                    <div class="tab-titles" style="display: flex;">
                        <p class="tab-links active-link mx-5" onclick="opentab('skills')">Skills</p>
                        <p class="tab-links mx-5" onclick="opentab('experience')">Experience</p>
                        <p class="tab-links mx-5" onclick="opentab('education')">Education</p>
                    </div>

                    <div class="tab-contents active-tab" id="skills">
                        <ul>
                            <li><span style="font-weight: bold;">Programming Language</span><br>Strong foundation in
                                programming languages such as C,
                                Javascript & Mysql. Markup language of HTML. Core knowledge of Object oriented
                                Programming(OOPS) concepts.
                                have the ability to adapt & learn new technologies quickly & efficiently. capable of
                                crafting clean,
                                efficient & maintainable code and finding innovative solutions to complex problems.
                            </li>
                            <li><span style="font-weight: bold;">Web Development</span><br>I'm proficient in creating
                                responsive & visually
                                appealing web interfaces
                                using fundamental Frontend Web technologies such as HTML, CSS, JavaScript.</li>

                        </ul>
                    </div>

                    <div class="tab-contents" id="experience">
                        <ul>
                            <li><span style="font-weight: bold;">Fresher</span><br>I have No work Experience, But I'm a
                                quick learner
                                and ready to help everyone</li>
                        </ul>
                    </div>

                    <div class="tab-contents" id="education">
                        <ul>
                            <li><span style="font-weight: bold;">2024-Continue :</span><br>BCA in University of Lucknow,
                                Lucknow
                                <br>
                                (74.77%)
                            </li>
                            <li><span style="font-weight: bold;">2020 :</span><br>Intermediate From Shanti Devi Inter
                                College,Sultanpur
                                <br>
                                (81.8%)
                            </li>
                            <li><span style="font-weight: bold;">2019 :</span><br>High School From Shanti Devi Inter
                                College,Sultanpur
                                <br>
                                (85.33%)
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>

    </div>

    <br><br>

    <div id="project">

        <div class="container-fluid">
            <h1 class="mx-5" style="font-size: 49px; font-weight: bold;">My Project</h1>
            <br><br>

            <div class="row text-center" id="pro1">
                <div class="col-lg-3 mx-5 pt-5" id="pro"
                    style="background-color: #b54769; height: 400px; width: 300px;">

                    <div>
                        <h2>Personal Portfolio Website </h2>
                        <br><br>
                        <p>A protfolio Website lets you show off all of your work in one place.Express your Uniqueness
                            through case studies.</p>
                        <br><br>
                        <button style="background-color: black; border: 1px solid black;">
                            <a href="index.php" style="color: white;">View Project</a></button>
                    </div>

                </div>

                <div class="col-lg-3 mx-5 pt-5" id="pro"
                    style="background-color: #b54769; height: 400px; width: 300px;">

                    <div>
                        <h2>Tours and Travel Website</h2>
                        <br><br>
                        <p>A protfolio Website lets you show off all of your work in one place.Express your Uniqueness
                            through case studies.</p>
                        <br><br>
                        <button style="background-color: black; border: 1px solid black;">
                            <a href="https://mprojectmajor.000webhostapp.com/" style="color: white;">View Project</a></button>

                    </div>

                </div>

                <div class="col-lg-3 mx-5 pt-5" id="pro"
                    style="background-color: #b54769; height: 400px; width: 300px;">

                    <div>
                        <h2>Sales Performance Dashboard</h2>
                        <br><br>
                        <p>A protfolio Website lets you show off all of your work in one place.Express your Uniqueness
                            through case studies.</p>
                        <br><br>
                        <button style="background-color: black; border: 1px solid black;">
                            <a href="https://github.com/Ankita7881/minor-project" style="color: white;">View Project</a></button>
                    </div>

                </div>
            </div>
        </div>

    </div>

    <br><br><br>


    <div id="contact">

        <div class="container-fluid">
            <h1 class="mx-5" style="font-size: 49px; font-weight: bold;">Contact Me</h1>

            <div class="row">
                <div class="col-lg-1"></div>
                <div class="col-lg-4">

                    <div class="contact-left">
                        <!-- <h1 class="sub-title">Contact Me</h1> -->
                        <p><i class="fa-solid fa-envelope"></i>ankitav3761@gamil.com</p>
                        <p><i class="fa-solid fa-square-phone"></i>7880563761</p>
                        <div class="social-icons">
                            <a href="https://www.instagram.com/"><i class="fa-brands fa-instagram"></i></a>
                            <a href="https://t.me/"><i class="fa-brands fa-telegram"></i></a>
                            <a href="https://www.linkedin.com/in/ankita-verma-07074b280"><i
                                    class="fa-brands fa-linkedin"></i></a>
                            <a href="https://github.com/Ankita7881"><i class="fa-brands fa-github"></i></a>
                        </div>
                        <br>
                        <a href="resume.pdf" download class="btn btn2">Download RESUME</a>
                    </div>

                </div>

                <div class="col-lg-6">

                    <div class="contact-right">
                        <form action="contactcode.php" method="post">
                            <input type="text" name="name" placeholder="Name" required>
                            <input type="email" name="email" placeholder="Email" required>
                            <input type="number" name="phone" placeholder="Number" required>
                            <textarea name="msg" rows="2" placeholder="Message"></textarea>
                            <center><button type="submit" class="btn btn2" name="btn">Submit</button></center>
                        </form>
                        <span id="msg"></span>
                    </div>
                </div>
            </div>
        </div>

        <div class="copyright">
            <p>Copyright ©Ankita. Made with <i class="fa-solid fa-heart"></i> by easy Tutorial</p>
        </div>

    </div>


    <Script>

        var tablinks = document.getElementsByClassName("tab-links");
        var tabcontents = document.getElementsByClassName("tab-contents");
        function opentab(tabname) {
            for (tablink of tablinks) {
                tablink.classList.remove("active-link")
            }
            for (tabcontent of tabcontents) {
                tabcontent.classList.remove("active-tab")
            }
            event.currentTarget.classList.add("active-link");
            document.getElementById(tabname).classList.add("active-tab");
        }

    </Script>

    <script>

        var sidemenu = document.getElementById("sidemenu");
        function openmenu() {
            sidemenu.style.right = "0"
        }
        function closemenu() {
            sidemenu.style.right = "-200px"
        }

    </script>
    <script>
        const scriptURL = 'https://script.google.com/macros/s/AKfycbxahPRqBp0R8gx7gXIf1P5m6bAaAj_fSdY93HgxQgkm_fiBHmf_q8oMZLGz53u5cBX6/exec'
        const form = document.forms['submit-to-google-sheet']
        const msg = document.getElementById("msg")

        form.addEventListener('submit', e => {
            e.preventDefault()
            fetch(scriptURL, { method: 'POST', body: new FormData(form) })
                .then(response => {
                    msg.innerHTML = "Message sent successfully"
                    setTimeout(function () {
                        msg.innerHTML = ""
                    }, 5000)
                    form.reset()
                })
                .catch(error => console.error('Error!', error.message))
        })
    </script>



    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>

    <!-- Setup and start animation! -->
    <script>
        var typed = new Typed('#element', {
            strings: ['Web Developer', 'Graphic Designer', 'Web Designer', 'Video Editor .'],
            typeSpeed: 50,
        });
    </script>

</body>

</html>