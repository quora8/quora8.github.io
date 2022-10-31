<?php $title = "Source Code"; include("header.phtml"); ?>

<div id="text-content">

<h2>Embedded SGF Viewer</h2>

<p>The EidoGo Player (SGF viewer and editor) is an independent piece and can be
    embedded into any webpage. The basic Player is entirely client-side (browser-based)
    and does not include the joseki tutor, pattern searching, GNU Go, or saving features.
    To use these features, you must set up code server-side (see site source code below).</p>

<p>All source code is licensed under the <a href="http://www.fsf.org/licensing/licenses/agpl-3.0.html">AGPLv3</a>.
    In short, this means if you modify the source code, you must allow everyone to see and use those changes
    &mdash; share and share alike!</p>

<h3>Quick Start</h3>

<p>Download the Player from <a href="http://code.google.com/p/eidogo/downloads/list">Google Code
download page</a> and put the following into your webpage (replace the <code>src</code> and
<code>sgf</code> paths as appropriate):</p>

<pre><code>&lt;script type=&quot;text/javascript&quot; src=&quot;player/js/all.compressed.js&quot;&gt;&lt;/script&gt;
&lt;div class=&quot;eidogo-player-auto&quot; sgf=&quot;path/to/sgf/file.sgf&quot;&gt;&lt;/div&gt;
</code></pre>

<p><a href="/example.html">Here is an example of this in action.</a></p>

<div style="float: right; margin-left: 20px" class="eidogo-player-problem" sgf="sgf/problem.sgf"></div>

<p>You can also use the problem-solving mode (example on right):</p>

<pre style='width: 75%'><code>&lt;div class=&quot;eidogo-player-problem&quot; sgf=&quot;path/to/sgf/file.sgf&quot;&gt;&lt;/div&gt;
</code></pre>

<p>You can include multiple Players on a page. See the example HTML files in the Player download for more options.</p>

<p>If you use the EidoGo Player on your site, <script type="text/javascript">document.write(
"<n uers=\"znvygb:wx\100gva\056ah\">yrg zr xabj<\057n>".replace(/[a-zA-Z]/g, function(c){return String.fromCharCode((c<="Z"?90:122)>=(c=c.charCodeAt(0)+13)?c:c-26);}));
</script>!</p>

<h2>Site Source Code</h2>

<p>The latest, cutting-edge source code for the entire EidoGo site, both client-side and server-side,
    is available from github.com. You can get at it in two ways:</p>

<ol>
	<li><p><a href="http://github.com/jkk/eidogo/tree/master">Browse or download it via the web</a></p></li>
	<li><p>Clone the repository with git:</p>
		<pre><code>git clone git://github.com/jkk/eidogo.git eidogo</pre></code>
</ol>

<p>Code contributions welcome!</p>


</div>

<?php include("footer.phtml"); ?>