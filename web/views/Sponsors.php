<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Kiawanis Fair - Sponsors</title>

        <link rel="stylesheet" type="text/css" href="/stylesheets/sponsors.css">
    </head>
    <body>
        <header>
                <nav>
                    <ul>
                        <li><a href="/views/main.html" >Home</a></li>
                        <li><a href="/views/Vendors.html">Vendors</a></li>
                        <li><a href="/views/News.html">News</a></li>
                        <li><a href="/views/Applications.php">Applications</a></li>
                        <li><a href="/views/Shows.html">Shows</a></li>
                        <li><a href="/views/Map.html">Map</a></li>
                        <li><a href="/views/Sponsors.html">Sponsors</a></li>
                    </ul>
                </nav>
            </header>

            <div class="tab">
                <button class="tablinks" onclick="opentab(event,'all')">All Sponsors</button>
                <button class="tablinks" onclick="opentab(event,'add')">Add Sponsors</button>
            </div>

                <script>
                function opentab(evt, tabName) {

                  var i, tabcontent, tablinks;
                  tabcontent = document.getElementsByClassName("tabcontent");
                  for (i = 0; i < tabcontent.length; i++) {
                    tabcontent[i].style.display = "none";
                  }
                  tablinks = document.getElementsByClassName("tablinks");
                  for (i = 0; i < tablinks.length; i++) {
                    tablinks[i].className = tablinks[i].className.replace(" active", "");
                  }
                  document.getElementById(tabName).style.display = "block";
                  evt.currentTarget.className += " active";
                }
            </script>

        <div id="all" class="tabcontent">
            <h1>Query for all sponsors in database</h1>
        </div>

        <div id="add" class="tabcontent">
            <section>
                <form>
                    <fieldset>
                        <legend>Add Sponsor</legend>

                        <label for="name">Sponsor Name: </label>
                        <input type="text" id="name" name="sponsorName">

                        <label for="image">Sponsor Logo: </label>
                        <input type="file" id="image" name="sponsorLogo">

                        <section id="submitButtons">
                            <input  id="submit" value ="Submit" type="submit" class="submission">
                        </section>
                    </fieldset>
                </form>
                <br>
            </section>
        </div>
    </body>
</html>