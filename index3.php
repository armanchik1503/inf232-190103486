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
                    $this->assertTrue(isPalindrome(838));
                    $this->assertTrue(isPalindrome(77));
                    $this->assertTrue(isPalindrome(95159));
                    $this->assertFalse(isPalindrome(839));
                    $this->assertFalse(isPalindrome(4234));
                    $this->assertFalse(isPalindrome(13));
                }
                function isPalindrome($n) {
                    $sum = 0;
                    $original = $n;
                    while ($n) {
                        $tail = $n % 10;
                        $sum = $sum * 10 + $tail;
                        $n = floor($n / 10);
                    }
                    return $sum === $original;
                }
    ?>
</body>
</html>
