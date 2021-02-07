<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
                public function testConvert()
                {
                    $this->assertEquals(inches_to_feet(12), 1);
                    $this->assertEquals(inches_to_feet(360), 30);
                    $this->assertEquals(inches_to_feet(3612), 301);
                    $this->assertEquals(inches_to_feet(324), 27);
                    $this->assertEquals(inches_to_feet(3012), 251);
                    $this->assertEquals(inches_to_feet(11), 0);
                }
                function inches_to_feet($i) {
	                return $i > 11 ? $i/12 : 0;
                }
    ?>
</body>
</html>
