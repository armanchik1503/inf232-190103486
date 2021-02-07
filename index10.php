<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
                public function testFunctionReturnsTrue() {
      $this->assertTrue(returnTrue(), "Did you *return* true?");
    }
    function returnTrue() {
    return !false;
    }
    ?>
</body>
</html>