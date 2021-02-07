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
            $this->assertEquals(points(1, 1), 5);
            $this->assertEquals(points(1, 2), 8);
            $this->assertEquals(points(2, 1), 7);
            $this->assertEquals(points(2, 2), 10);
            $this->assertEquals(points(69, 420), 1398);
            }

            function points($kobe,$durant) {
            return $kobe * 2 + $durant * 3;
            }
    ?>
</body>
</html>
