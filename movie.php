<?xml version="1.0" encoding="ISO-8859-1" ?>
<CD_store>
	<Movie>
		<Title>sholey</Title>
		<Release_year>1972</Release_year>
	</Movie>
	<Movie>
		<Title>ye jawani hai deewani</Title>
		<Release_year>1987</Release_year>
	</Movie>
	<Movie>
		<Title>roti khana makan</Title>
		<Release_year>1986</Release_year>
	</Movie>
	<Movie>
		<Title>hum mastane</Title>
		<Release_year>1973</Release_year>
	</Movie>
</CD_store>

<?php
header('Content-Type: text/xml' );
echo "<?xml version='1.0' ?>";
echo "<CD_store>\n";
$Movie=array(array('Title'=>'Mr.india','Realease_year'=>'1987'),array('Title'=>'Holiday','Realease_year'=>'2014'),array('Title'=>'LOC','Realease_year'=>'2003'));
foreach($Movie as $mv)
{
	echo "<Movie>\n";
	foreach($mv as $tag => $data)
	{
		echo "<$tag>".htmlspecialchars($data)."</$tag>\n";
		echo "<br>";
	}
	echo "</Movie>\n";
}
echo "</CD_store>\n";
?>


