<?xml version="1.0" ?>
<Bookstore>
	<Books>
		<Title>book 1</Title>
		<Publication>publication 1</Publication>
	</Books>
	<Books>
		<Title>book 2</Title>
		<Publication>publication 2</Publication>
	</Books>
	<Books>
		<Title>book 3</Title>
		<Publication>publication 3</Publication>
	</Books>
	<Books>
		<Title>book 4</Title>
		<Publication>publication 4</Publication>
	</Books>
	<Books>
		<Title>book 5</Title>
		<Publication>publication 5</Publication>
	</Books>
	<Books>
		<Title>book 6</Title>
		<Publication>publication 6</Publication>
	</Books>
</Bookstore>
<?php
header('content-type:text/xml');

echo '<?xml version="1.0"?>'."\n";

echo "<BookStore>\n";
echo "<Books>\n";

$books=array(array('Title'=>'Programming in PHP','Publication'=>'OReilly'),
array('Title'=>'Beginners in PHP','Publication'=>'Wrox'));

foreach($books as $cs)
{

  echo "<PHP>\n";

  foreach($cs as $tag => $data)
{

  echo "<$tag>".htmlspecialchars($data)."</$tag>\n";
}
echo "</PHP>\n";
	}
echo "</Books>\n";
echo "</BookStore>\n";
?>
