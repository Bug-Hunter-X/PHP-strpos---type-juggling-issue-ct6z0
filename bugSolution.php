The solution is to use the strict comparison operator (`!==`) to explicitly check for `false`. This prevents type juggling and ensures the condition correctly evaluates to true only when the needle is found, regardless of its position.

```php
<?php
$haystack = "This is a test string";
$needle = "This";

if (strpos($haystack, $needle) !== false) {
    echo "Needle found!";
} else {
    echo "Needle not found!";
}
?>
```