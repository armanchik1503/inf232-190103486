<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    public function tests_left_shift()
	{
		$this->assertSame([2, 3, 4, 1], leftShift([1, 2, 3, 4], 1));
		$this->assertSame([4, 5, 1, 2, 3], leftShift([1, 2, 3, 4, 5], 3));
		$this->assertSame([1, 2, 3, 4, 5], leftShift([1, 2, 3, 4, 5], 5));
		$this->assertSame([2, 3, 4, 5, 1], leftShift([1, 2, 3, 4, 5], 6));
		$this->assertSame([2, 3, 4, 5, 1], leftShift([1, 2, 3, 4, 5], 1));
		$this->assertSame([5, 1, 2, 3, 4], leftShift([1, 2, 3, 4, 5], 4));
	}
	public function tests_right_shift()
	{
		$this->assertSame([4, 1, 2, 3], rightShift([1, 2, 3, 4], 1));
		$this->assertSame([5, 1, 2, 3, 4], rightShift([1, 2, 3, 4, 5], 1));
		$this->assertSame([3, 4, 5, 1, 2], rightShift([1, 2, 3, 4, 5], 3));
		$this->assertSame([1, 2, 3, 4, 5], rightShift([1, 2, 3, 4, 5], 0));
		$this->assertSame([1, 2, 3, 4, 5], rightShift([1, 2, 3, 4, 5], 15));
    }
    function leftShift($arr, $num) {
    $move = array_splice($arr, 0, $num % count($arr));
    return array_merge($arr, $move);
    }
​
    function rightShift($arr, $num) {
    return leftShift($arr, count($arr) - $num % count($arr));
    }
    ?>
</body>
</html>