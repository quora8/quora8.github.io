<?php $title = "Game Archive"; include("header.phtml"); ?>

<div id="text-content">
    
<h2>Games</h2>

<div id="subnav">
    <ul>
        <li><a href="/tourney">Recent Tournament Games</a></li>
        <li class="active"><a href="/games">Game Archive</a></li>
    </ul>
</div>

<form id="games-search" action="games">
<p>
    Search:
    <input name="q" value="<?=htmlentities(stripslashes($_GET['q']))?>">
    <input type="submit" value="Go">
</p>
</form>

<?php

function show_results($query) {
    $query = preg_replace("/[^a-zA-Z0-9 -]/", "", $query);
    $db = new SQLite3("kombilo/t1.db");
    $res = $db->query("select * from games
        where pb like '%$query%' or pw like '%$query%' or ev like '%$query%' or date like '%$query%'
        order by date desc
        limit 300");
    $games = array();
    while ($game = $res->fetchArray()) $games[] = $game;
    if (!count($games)) {
        echo "<p>No games found matching &quot;$query&quot;.</p>";
        return;
    }
    echo  "<p>" . count($games) . " games found, newest listed first:</p>
        <table id='tourney-games'>
        <tr><th>Date</th><th>Event</th><th>White</th><th>Black</th><th>Result</th></tr>";
    $class = "";
    foreach ($games as $game) {
        $class = $class == "odd" ? "even" : "odd";
        $gn = str_replace(".sgf", "", $game['filename']);
        echo "<tr class='$class'>\n";
        echo join("", array_map(create_function('$s', 'return "<td><a href=\"./#' . $gn . '\">" . $s . "</a></td>\n";'),
            array($game['date'], $game['EV'], $game['PW'], $game['PB'], $game['RE'])));
        echo "</tr>";
    }
}

if ($_GET['q']) {
    show_results($_GET['q']);
} else {
    echo "<p>The game archive contains a representative sample of games from the last few hundred years.
        Enter a query above to search by player name, event name, or date.</p>
        <p>Many games come from GoGoD, with their permission. If you are interested in having a full
        collection of well over 50,000 pro games along with other enriching materials, please purchase their
        product (<a href='http://www.gogod.co.uk'>http://www.gogod.co.uk</a>).</p>";
}

?>
</table>

</div>

<?php include("footer.phtml"); ?>
