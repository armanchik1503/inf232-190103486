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
		$this->assertEquals(hasSpaces("Foo"), false);
		$this->assertEquals(hasSpaces("Foo bar"), true);
		$this->assertEquals(hasSpaces("Foo "), true);
		$this->assertEquals(hasSpaces(" Foo"), true);
		$this->assertEquals(hasSpaces(" "), true);
		$this->assertEquals(hasSpaces(""), false);
		$this->assertEquals(hasSpaces(",./;'[]-="), false);
    }
    function hasSpaces($str) {
    return strpos($str,' ') !== false;
    }
    ?>
</body>
</html>