<!--Linking-->

<!doctype html>
<link href="CSS Pages/Main Style Sheet.css" rel="stylesheet" type="text/css">
<meta charset="utf-8">


<head>
    <link rel="icon" type="image/x-icon" href="favicon1.ico"><title>Media Studies Glossary</title>
</head>

<!--Header Bar-->

<header>


    <img src="Other/logo2.png" />
    <h1>Media Studies Glossary</h1>
    <a href="/media">|  Search  |</a> <a href="catalogue.php">|  Catalogue  |</a> <a href="Games2.html">|  Resources  |</a>

</header>
<body>

    
    <!--Search Bar-->


    <div class="searchbar">


        <form action="javascript:search(document.getElementById('search').value)">
            <input  type="text"  placeholder="Search..." style=" padding-left: 2vw; width: 40vw; height: 5.5vw; font-size: 2.5vw; font-family:'Californian FB'; border: 0.6vw solid black; margin-left: -2vw; background-color: White; " id="search">
         
            <input type="submit" value= "GO" style="height: 5.5vw; width: 5.5vw; font-size: 2.5vw; font-family:'Californian FB'; font-weight:500; border: 0.6vw solid black; background-color:White; cursor: pointer; ">
        </form>

    </div>

    <!--Pop Up-->
   
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

    <!--Something Else-->

    

</body>