<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    public function tests()
	{
		$this->assertSame(reverseImage([
  [1, 0, 0], 
  [0, 1, 0], 
  [0, 0, 1]
]), [
  [0, 1, 1], 
  [1, 0, 1], 
  [1, 1, 0]
]);
	
		$this->assertSame(reverseImage([
  [1, 1, 1], 
  [0, 0, 0]
]), [
  [0, 0, 0], 
  [1, 1, 1]
]);

		$this->assertSame(reverseImage([
  [1, 0, 0], 
  [1, 0, 0]
]), [
  [0, 1, 1], 
  [0, 1, 1]
]);

		$this->assertSame(reverseImage([
  [1, 0, 0, 0, 0], 
  [1, 0, 0, 1, 1], 
  [1, 1, 1, 1, 1], 
  [1, 1, 1, 1, 0], 
  [1, 1, 1, 0, 0]
]), [
  [0, 1, 1, 1, 1], 
  [0, 1, 1, 0, 0], 
  [0, 0, 0, 0, 0], 
  [0, 0, 0, 0, 1], 
  [0, 0, 0, 1, 1]
]);

		$this->assertSame(reverseImage([
  [1, 1], 
  [1, 0], 
  [1, 1], 
  [1, 1], 
  [1, 1]
]), [
  [0, 0], 
  [0, 1], 
  [0, 0], 
  [0, 0], 
  [0, 0]
]);
    }
    function reverseImage($image) {
  array_walk_recursive($image, function (&$v) {
    $v = $v ? 0 : 1;
  });
  return $image;
}
    ?>
</body>
</html>