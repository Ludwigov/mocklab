<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>addbugtracker</title>
    <link rel="stylesheet" type="text/css" href="addbugs.css"
</head>
<body>
<fieldset>
    <header>
        <img id="logo" src="../mocklab/images1/logo.png">
        <div id="titles">
            <h1>BugTracker</h1>
            <h2>Keeping track of all pesky little bugs</h2>
        </div>
    </header>
</fieldset>
<main>
    <fieldset><
        <nav>
            <ul>
                <li><a href="showsbugs.html">All Bug Items</a></li><br>
                <li><a href="showsbugs.html">Android Bugs</a></li><br>
                <li><a href="showsbugs.html">iOS Bugs</a></li><br>
                <li><a href="showsbugs.html">Windows Bugs</a></li><br>
                <li><a href="showsbugs.html">Insert Bug</a></li><br>
            </ul>
        </nav>
    </fieldset>
    <fieldset>
        <div id="content"></div>
        <form>
            <label>Bug Name</label><br>
            <input type="text" name="BugName" /><br>
            <label>Bug Summary</label><br>
            <input type="text" name="BugSummary" /><br>
              <textarea name=" Bug Cataegory" cols="60" rows="6">
              </textarea><br><br>
            <input type="submit" value="Submit" />
        </form>
        </div>
    </fieldset>
</main>
<fieldset>
    <footer>
        <div id="footer">
            Designed by Ludwig van de l'Isle, 2016
        </div>
    </footer>
</fieldset>
</body>
</html>
?>