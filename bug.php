```php
function calculateSum(array $numbers): int {
  $sum = 0;
  foreach ($numbers as $number) {
    $sum += $number;
  }
  return $sum; //Typo: missing return statement
}

$numbers = [1, 2, 3, 4, 5];
echo calculateSum($numbers);
```