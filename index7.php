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
		$this->assertEquals(855, sumOfCubes([1, 5, 9]));
		$this->assertEquals(216, sumOfCubes([3, 4, 5]));
		$this->assertEquals(3, sumOfCubes([1, 1, 1]));
		$this->assertEquals(8, sumOfCubes([2]));
		$this->assertEquals(134, sumOfCubes([5, 1, 2]));
		$this->assertEquals(32768, sumOfCubes([32]));
		$this->assertEquals(1711, sumOfCubes([5, 9, 4, 4, 9]));
		$this->assertEquals(9, sumOfCubes([0, 1, 2]));
		$this->assertEquals(0, sumOfCubes([]));
    }
    function sumOfCubes($nums) {
	return array_sum(array_map(function($v) {
		return pow($v, 3);
	}, $nums));
    }
    ?>
</body>
</html>