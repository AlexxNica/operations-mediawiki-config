<!DOCTYPE html>
<html lang="en">
<head>
	<title>Wikimedia configuration files</title>
	<link rel="stylesheet" href="/base.css">
</head>
<body>

<p>Here are some Wikimedia configuration files which are in version control. The files are dynamically generated from fenari's working copy and are perfectly up-to-date.</p>

<hr>

<h2><img src="./images/document.png" alt=""> Apache configuration</h2>
<ul>
<li><a href="./en2.conf">en2.conf</a></li>
<li><a href="./foundation.conf">foundation.conf</a></li>
<li><a href="./ganglia.conf">ganglia.conf</a></li>
<li><a href="./main.conf">main.conf</a></li>
<li><a href="./nagios.conf">nagios.conf</a></li>
<li><a href="./nonexistent.conf">nonexistent.conf</a></li>
<li><a href="./postrewrites.conf">postrewrites.conf</a></li>
<li><a href="./redirects.conf">redirects.conf</a></li>
<li><a href="./remnant.conf">remnant.conf</a></li>
<li><a href="./wikimedia.conf">wikimedia.conf</a></li>
<li><a href="./www.wikipedia.conf">www.wikipedia.conf</a></li>
</ul>

<h2><img src="./images/source_php.png" alt=""> MediaWiki configuration</h2>
<ul>
<?php
	$viewFilenames = array_merge(
		glob( __DIR__ . '/*.dat' ),
		glob( __DIR__ . '/*.php.txt' ),
		glob( __DIR__ . '/*.dblist' )
	);
	$viewFilenames[] = './langlist';
	$viewFilenames = array_map( 'basename', $viewFilenames );
	$srcPath = '/h/w/c/wmf-config';
	foreach ( $viewFilenames as $viewFilename ) {
		$srcFilename = substr( $viewFilename, -4 ) === '.txt'
			? substr( $viewFilename, 0, -4 )
			: $viewFilename;
		echo "\n"
			. '<li><a href="./highlight.php?file=' . htmlspecialchars( urlencode( $srcFilename ) ) . '">'
			. htmlspecialchars( $srcFilename )
			. '</a> (<a href="./' . htmlspecialchars( urlencode( $viewFilename ) ) . '">raw text</a>)'
			. '</li>';
	}
?>
</ul>

<h2>Lucene search configuration</h2>
<ul>
<li><a href="./lsearch-global-2.1.conf">lsearch-global-2.1.conf</a></li>
</ul>

<!--
<h2><img src="./images/txt.png" alt="">PHP configuration</h2>
<ul>
<li><a href="./php5-i386.ini">php5-i386.ini</a></li>
<li><a href="./php5-x86_64.ini">php5-x86_64.ini</a></li>
</ul>
-->

<hr>
</body>
</html>
