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
		$this->assertFalse(largestSwap(27));
		$this->assertTrue(largestSwap(43));
		$this->assertFalse(largestSwap(14));
		$this->assertTrue(largestSwap(53));
		$this->assertTrue(largestSwap(99));
    }
    function largestSwap($num) {
    return $num >= (int) strrev($num);
    }
    ?>
</body>
</html>