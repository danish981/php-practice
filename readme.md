# Learning PHP

the repo is demo and is fully dedicated to learning php concepts from scratch. It has many solutions to the problems
that are given after the books etc.

### Sample Code Snippet

```php
function getRandomNumArray(int $arrayLength = 10, int $lowerLimit = 10, int $upperLimit = 100) : array {
    $masterArray = [];
    for($i = 0; $i < $arrayLength; $i++) {
        $masterArray[] = random_int($lowerLimit, $upperLimit);
    }
    return $masterArray;
}
```