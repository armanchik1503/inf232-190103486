<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
               public function test($haystack, $expected)
    {
        $this->assertSame(array_merge(array_diff($expected, noOdds($haystack))), array_diff(noOdds($haystack), $expected));
    }
    
    public function exampleProvider()
    {
        return [
          [[1, 2, 3, 4, 5, 6, 7, 8], [2, 4, 6, 8]],
          [[43, 65, 23, 89, 53, 9, 6], [6]],
          [[718, 991, 449, 644, 380, 440], [718, 644, 380, 440]],
          [[148, 6, 16, 85], [148, 6, 16]],
          [[9, 49, 23], []],
          [[34, 43, 32, 49, 40], [34, 32, 40]],
          [[1232, 1990, 1284, 1391, 1958], [1232, 1990, 1284, 1958]],
          [[2766, 2651, 2373, 2916, 2397, 2539], [2766, 2916]],
          [[53, 65, 52, 62, 59], [52, 62]],
          [[393, 156, 14, 166, 129, 246], [156, 14, 166, 246]],
        ];
    }
    function noOdds($arr) {
  return array_filter($arr, function($i) {
    return $i % 2 === 0;
  });
}
    ?>
</body>
</html>