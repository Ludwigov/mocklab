<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>example</title>
    <link rel="stylesheet" type ="text/css"  href="index.css">
</head>
<fieldset>
    <header>
        <img id="logo" src="../mockrepito/images/logo.png">
        <div id="titles">
            <h1>BugTracker</h1>
            <h2>Keeping track of all pesty little bugs</h2>
        </div>
    </header>
</fieldset>

<main>
    <fieldset>
        <nav>
            <ul>
                <li><a href="bugs.html">All Bug Items</a></li><br>
               <ul>
                <li><a href="addbugs.html">Add Bugs</a></li><br>
                <li><a href="showbugs.html">Show Bugs</a></li><br>
               </ul>
                <li><a href="bugs.html">Android Bugs</a></li><br>
                <li><a href="bugs.html">iOS Bug</a></li><br>
                <li><a href="bugs.html">Windows Bugs</a></li><br>
                <li><a href="bugs.html">Insert Bug</a></li><br>
            </ul>
        </nav>
    </fieldset>
    <fieldset>
        <div id="content">
            <?php
            include('connecty.php');

           $sql = "Select bugName, bugSummary, BugCategory
                   From bugtracker"
               $result = mysqli-query($db,$sql);
               echo ""
               <table>
                 <tr>
                    <th>bugName </th>
                    <th>bugSummary</th>
                    <th>bugCategory</th>
               </tr> ";
           if(mysqli_num_rows($result)>0{

           while($row = mysqli_fertch_assoc($result)){
           echo "<tr>

              <td>".$row['bugName']."</td>
                    <td>".$row['bugSummary']."</td>
                    <td>".$row['bugCategory']."</td>

                </tr>";
}
}
    ?>
            </div>
    </fieldset>
</main>
<fieldset>
    <footer>
        <div id="footer">
            Designed by Ludwig van de l'Isle, 2016
        </div>
    </footer>
