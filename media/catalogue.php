<!--Linking-->

<!doctype html>
<link href="CSS Pages/Main Style Sheet.css" rel="stylesheet" type="text/css">
<meta charset="utf-8">


<head>
    <link rel="icon" type="image/x-icon" href="favicon1.ico">
    <title>Catalogue</title>
</head>

<!--Header Bar-->

<header>


    <img src="Other/logo2.png" />
    <h1>Media Studies Glossary</h1>
    <a href="/media">|  Search  |</a> <a href="catalogue.php">|  Catalogue  |</a> <a href="Games2.html">|  Resources  |</a>

</header>

<body>
    <div style="font:16px Arial, Serif;
    overflow:auto;
    margin-top: 5.5vw;
    margin-left: 10vw;
    margin-right: 43vw;
    background-color: white;
    padding: 2vw;
    border: 0.7vw solid black;
    height: 26vw;
    width: 42vw;">

        <p class="Cata1">
            Catalogue
        </p>
        <br />
        <p class="Cata2">
            Scroll through our alphabetical catalogue to discover Media Studies related words!<br> Once you find the word your looking for click on it for it's definition. 
        </p>
        <br><br>
        <div style="display:flex; padding-left: 3vw;">
            <div class="the-word1">
                <p class="az">      A - I     </p>
                <a onclick="ShowWord(38)">Access</a> <br>
                <a onclick="ShowWord(9)"> Agenda-setting</a><br>
                <a onclick="ShowWord(10)"> Analog </a> <br>
                <a onclick="ShowWord(11)"> Audience </a> <br>
                   <a onclick="ShowWord(39)"> Branding </a> <br>
                   <a onclick="ShowWord(59)"> Censorship</a><br>
                  <a onclick="ShowWord(0)">  Colour</a><br>
                   <a onclick="ShowWord(13)"> Connotation</a><br>
                    <a onclick="ShowWord(12)">Connote</a><br>
                   <a onclick="ShowWord(41)"> Construction</a><br>
                    <a onclick="ShowWord(14)">Consumers</a><br>
                    <a onclick="ShowWord(60)">Convergence</a><br>
                    <a onclick="ShowWord(5)">Costume</a><br>
                   <a onclick="ShowWord(61)"> Critical</a><br>
                    <a onclick="ShowWord(62)">Critical Autonomy</a><br>
                   <a onclick="ShowWord(63)"> Critical Viewing</a><br>
                    <a onclick="ShowWord(1)">Cut</a><br>
                   <a onclick="ShowWord(42)"> Deconstruction</a><br>
                   <a onclick="ShowWord(15)"> Demographics</a><br>
                   <a onclick="ShowWord(17)"> Denotation</a><br>
                   <a onclick="ShowWord(16)"> Denote</a><br>
                  <a onclick="ShowWord(43)">  Digital </a><br>
                   <a onclick="ShowWord(64)"> Docudrama</a><br>
                    <a onclick="ShowWord(18)">Dominant</a><br>
                    <a onclick="ShowWord(4)">Facial Expression</a><br>
                    <a onclick="ShowWord(65)">Flak</a><br>
                   <a onclick="ShowWord(19)"> Genre</a><br>
                    <a onclick="ShowWord(21)">HTML</a><br>
                     <a onclick="ShowWord(20)">Hardware</a><br>
                    <a onclick="ShowWord(67)"> Hegemonic</a><br>
                     <a onclick="ShowWord(66)">Hegemony</a><br>
                     <a onclick="ShowWord(44)">Homophobia</a><br>
                     <a onclick="ShowWord(46)">Ideological</a><br>
                    <a onclick="ShowWord(45)"> Ideology </a> <br>
                    <a onclick="ShowWord(47)"> Industry</a><br>
                     <a onclick="ShowWord(48)">Intertextuality</a><br>
            </div> <div class="the-word1">
                <p class="az">      J - Z     </p>

                 <a onclick="ShowWord(68)"> Jolts</a><br>
                <a onclick="ShowWord(3)"> Lighting</a><br>
                <a onclick="ShowWord(22)"> Marketing</a><br>
                <a onclick="ShowWord(23)"> Mass Media</a><br>
               <a onclick="ShowWord(26)">  Media</a><br>
                <a onclick="ShowWord(49)"> Media Education</a><br>
                 <a onclick="ShowWord(24)">Media Literacy</a><br>
                 <a onclick="ShowWord(25)">Medium</a><br>
                <a onclick="ShowWord(8)"> Mise En Scene</a><br>
                <a onclick="ShowWord(27)"> Monopoly</a><br>
                 <a onclick="ShowWord(28)">Moral Panic</a><br>
                 <a onclick="ShowWord(50)">Narrative</a><br>
                 <a onclick="ShowWord(51)">Negotiate</a><br>
                 <a onclick="ShowWord(52)">Oppositional</a><br>
                 <a onclick="ShowWord(6)">Positioning</a><br>
                 <a onclick="ShowWord(53)">Prime Time</a><br>
                 <a onclick="ShowWord(54)">Product Placement</a><br>
                 <a onclick="ShowWord(29)">Production</a><br>
                <a onclick="ShowWord(30)"> Production Values</a><br>
                <a onclick="ShowWord(55)">Propaganda</a><br>
               <a onclick="ShowWord(69)"> Psychographics</a><br>
                <a onclick="ShowWord(56)">Representation</a><br>
                <a onclick="ShowWord(7)">Setting</a><br>
                <a onclick="ShowWord(32)">Software</a><br>
                <a onclick="ShowWord(57)">Stereotypes</a><br>
                <a onclick="ShowWord(70)">Studio System</a><br>
                <a onclick="ShowWord(71)">Synergy</a><br>
               <a onclick="ShowWord(2)"> Take</a><br>
                <a onclick="ShowWord(33)">Technology</a><br>
               <a onclick="ShowWord(34)"> Text</a><br>
                <a onclick="ShowWord(72)">Transparency</a><br>
                <a onclick="ShowWord(73)">Vertical Integration</a><br>
                <a onclick="ShowWord(74)">Virtual</a><br>
                <a onclick="ShowWord(36)">Word-of-mouth</a><br>
               <a onclick="ShowWord(37)"> World Wide Web</a><br>
            </div>
        </div>
    </div>

</body>



<button class="Cake" id="modal-btn"> </button>

<div id="my-modal" class="modal">

    <div class="modal-content">
        <div class="modal-header">
            <span class="close">&times;</span>
            <h1 class="h12">Media Studies Glossary</h1>
        </div>
        <div class="modal-body">
            <p class="the-word" id="word">This should over-ride </p>
            <br>
            <br>
            <p class="the-def" id="def"> This should over-ride </p>
        </div>
        <div class="modal-footer">
            <p class="modalfooter">© Copyright <?php echo date("Y")?> Cambridge High School<p>

        </div>
    </div>
</div>
<script src="Java Page.js"></script>
