<?php
// demo_full.php
// Full browser demo covering primitives, ops, control, arrays, functions.
// Each section prints the input code (pre) and the output below.

// Helper to display code nicely
function showCode($code) {
    echo "<pre style='background:#f8f8f8;padding:12px;border:1px solid #ddd;border-radius:6px;'>
" . htmlspecialchars($code) . "
</pre>";
}

// Helper to print a section header
function section($title) {
    echo "<h2 style='font-family:Arial,Helvetica,sans-serif;color:#2b6cb0;'>$title</h2>";
}

/* =========================
   1) Primitives & Operations
   ========================= */
section("1) Primitives, Operations & Expressions");

$code = <<<'PHP'
$intVal    = 10;          // integer
$floatVal  = 3.5;         // float
$stringVal = "Syllogos";  // string
$boolVal   = true;        // boolean
$nullVal   = null;        // null

// arithmetic
$add = $intVal + 5;
$sub = $intVal - 2;
$mul = $intVal * 3;
$div = $intVal / 4;       // division (float)
$intDiv = intdiv($intVal, 3); // integer division
$mod = $intVal % 3;       // modulo
$pow = 2 ** 3;            // exponentiation

// increments
$intVal++;  // post-increment
++$intVal;  // pre-increment

// compound assignment
$x = 5;
$x += 3; // x = x + 3

// string concatenation
$msg = "Hello, " . $stringVal;
PHP;

showCode($code);

// Execute & output
$intVal    = 10;
$floatVal  = 3.5;
$stringVal = "Syllogos";
$boolVal   = true;
$nullVal   = null;

$add = $intVal + 5;
$sub = $intVal - 2;
$mul = $intVal * 3;
$div = $intVal / 4;
$intDiv = intdiv($intVal, 3);
$mod = $intVal % 3;
$pow = 2 ** 3;

$intVal++; ++$intVal;
$x = 5; $x += 3;
$msg = "Hello, " . $stringVal;

echo "intVal = $intVal<br>";
echo "floatVal = $floatVal<br>";
echo "stringVal = $stringVal<br>";
echo "boolVal = " . ($boolVal ? 'true' : 'false') . "<br>";
echo "nullVal is " . (is_null($nullVal) ? 'NULL' : 'not null') . "<br>";
echo "add = $add, sub = $sub, mul = $mul, div = $div, intDiv = $intDiv, mod = $mod, pow = $pow<br>";
echo "x after += => $x<br>";
echo "msg => $msg<br><br>";

/* =========================
   2) Comparisons & Logic
   ========================= */
section("2) Comparisons & Logical Operators");

$code = <<<'PHP'
$a = 5; $b = '5';
echo ($a == $b);    // loose equality true
echo ($a === $b);   // strict equality false
echo ($a != $b);    // false
echo ($a !== $b);   // true
// spaceship operator
$result = $a <=> 6; // -1 when a < 6, 0 when equal, 1 when greater
// logical
$cond = ($a > 3 && $b == '5') ? true : false;
$coalesce = $undefined ?? "default";
PHP;

showCode($code);

// Execute & output
$a = 5; $b = '5';
echo "a == b ? " . ($a == $b ? 'true' : 'false') . "<br>";
echo "a === b ? " . ($a === $b ? 'true' : 'false') . "<br>";
echo "a != b ? " . ($a != $b ? 'true' : 'false') . "<br>";
echo "a !== b ? " . ($a !== $b ? 'true' : 'false') . "<br>";
echo "a <=> 6 => " . ($a <=> 6) . "  ( -1 if a<6, 0 if =, 1 if > )<br>";
echo "Logical && and || example: " . (($a > 3 && $b == '5') ? 'true' : 'false') . "<br>";
echo "Null coalescing: " . ($undefined ?? "default") . "<br><br>";

/* =========================
   3) Ternary, Null Coalescing, String Formats
   ========================= */
section("3) Ternary, Null Coalescing & printf/sprintf");

$code = <<<'PHP'
$val = 0;
$desc = ($val > 0) ? "positive" : "non-positive";
$name = null;
$display = $name ?? 'Guest';
printf("Integer as %d, string as %s and float as %.2f", 5, "abc", 3.14159);
$s = sprintf("%s is %d years old", "Prabhat", 39);
PHP;

showCode($code);

// Execute & output
$val = 0;
$desc = ($val > 0) ? "positive" : "non-positive";
$name = null;
$display = $name ?? 'Guest';
printf("printf example: Integer as %d, string as %s and float as %.2f<br>", 5, "abc", 3.14159);
$s = sprintf("%s is %d years old", "Prabhat", 39);
echo "sprintf returned: $s<br>";
echo "Ternary desc => $desc<br>";
echo "Null coalescing display => $display<br><br>";

/* =========================
   4) Control Statements: if/else/switch and loops
   ========================= */
section("4) Control Statements & Loops");

$code = <<<'PHP'
$score = 85;
if ($score >= 90) {
  echo "A";
} elseif ($score >= 75) {
  echo "B";
} else {
  echo "C or below";
}

for ($i=1;$i<=3;$i++) { echo $i; }
$n=3; while($n>0){ echo $n; $n--; }
do { echo "looped"; } while(false);
PHP;

showCode($code);

// Execute & output
$score = 85;
if ($score >= 90) {
  echo "Grade A<br>";
} elseif ($score >= 75) {
  echo "Grade B<br>";
} else {
  echo "Grade C or below<br>";
}

echo "For loop: ";
for ($i=1;$i<=3;$i++) { echo $i . " "; }
echo "<br>";

echo "While loop: ";
$n=3; while($n>0){ echo $n . " "; $n--; }
echo "<br>";

echo "Do-while loop: ";
$m = 0;
do { echo "ran-once "; } while($m > 0);
echo "<br>";

echo "Switch example: ";
$role = 'editor';
switch($role) {
    case 'admin': echo "Admin"; break;
    case 'editor': echo "Editor"; break;
    default: echo "Other";
}
echo "<br><br>";

/* =========================
   5) Arrays: indexed, associative, multidimensional
   ========================= */
section("5) Arrays (indexed, associative, multidimensional) & array functions");

$code = <<<'PHP'
// Indexed array
$colors = ['red','green','blue'];
array_push($colors,'yellow');
$last = array_pop($colors);

// Associative
$student = ['name'=>'Prabhat','age'=>20];
$student['grade']='A';

// Multidimensional
$matrix = [
  [1,2,3],
  [4,5,6]
];

// Useful funcs: count, array_keys, array_values, in_array, implode, explode
PHP;

showCode($code);

// Execute & output
$colors = ['red','green','blue'];
array_push($colors,'yellow'); // add
$last = array_pop($colors);   // remove last
array_unshift($colors, 'purple'); // add beginning
$first = array_shift($colors); // remove first

echo "Colors now: " . implode(', ', $colors) . "<br>";
echo "Popped value: $last, Shifted value: $first<br>";
echo "Count(colors): " . count($colors) . "<br>";

$student = ['name'=>'Prabhat','age'=>20];
$student['grade']='A';
echo "Student name (assoc): " . $student['name'] . "<br>";
echo "Student keys: " . implode(', ', array_keys($student)) . "<br>";
echo "Student values: " . implode(', ', array_values($student)) . "<br>";
echo "in_array('green', colors)? " . (in_array('green',$colors) ? 'yes' : 'no') . "<br>";

$matrix = [
  [1,2,3],
  [4,5,6]
];
echo "Matrix row 2 col 3: " . $matrix[1][2] . "<br><br>";

/* =========================
   6) Working with strings & explode/implode
   ========================= */
section("6) Strings: explode, implode, length, substr");

$code = <<<'PHP'
$text = "apple,banana,cherry";
$parts = explode(',', $text);
$joined = implode(' | ', $parts);
$len = strlen($text);
$sub = substr($text, 6, 6);
PHP;

showCode($code);

// Execute & output
$text = "apple,banana,cherry";
$parts = explode(',', $text);
$joined = implode(' | ', $parts);
echo "Parts: " . implode(', ', $parts) . "<br>";
echo "Joined: $joined<br>";
echo "Len: " . strlen($text) . "<br>";
echo "Substr: " . substr($text,6,6) . "<br><br>";

/* =========================
   7) Functions: default params, type hints, return types, reference, variadic, anon, recursion
   ========================= */
section("7) Functions (definitions & usage)");

$code = <<<'PHP'
function greet(string $name = "Guest"): string {
    return "Hello, $name";
}
function sum(int ...$nums): int {
    return array_sum($nums);
}
function addOne(&$v) { $v++; }
$anon = function($x){ return $x*2; };
function factorial(int $n): int {
    if ($n <= 1) return 1;
    return $n * factorial($n-1);
}
PHP;

showCode($code);

// Execute & output
function greet(string $name = "Guest"): string {
    return "Hello, $name";
}
function sum(int ...$nums): int {
    return array_sum($nums);
}
function addOne(&$v) { $v++; }
$anon = function($x){ return $x*2; };
function factorial(int $n): int {
    if ($n <= 1) return 1;
    return $n * factorial($n-1);
}

echo greet("Prabhat") . "<br>";
echo "Sum(1,2,3,4) = " . sum(1,2,3,4) . "<br>";
$val = 5; addOne($val); echo "After addOne by ref: $val<br>";
echo "Anon double(6): " . $anon(6) . "<br>";
echo "Factorial(5): " . factorial(5) . "<br><br>";

/* =========================
   8) Using include/require + small example multi-file note
   ========================= */
section("8) include/require (note)");

$code = <<<'PHP'
// Use include 'header.php'; include 'footer.php';
// include vs require: require throws fatal error if file missing, include gives warning.
PHP;

showCode($code);

echo "Tip: use include/require to share headers, footers, DB connection across pages.<br><br>";

/* =========================
   9) Output methods: echo, print, printf, sprintf
   ========================= */
section("9) Output: echo, print, printf, sprintf");

$code = <<<'PHP'
echo "Hello, ". "World";
print "Hello print";
printf("Age: %d, GPA: %.2f", 39, 8.75);
$s = sprintf("%s is %d", "Prabhat", 39);
PHP;

showCode($code);

// Execute & output
echo "Echo: " . "Hello, World" . "<br>";
print "Print: Hello print<br>";
printf("printf: Age: %d, GPA: %.2f<br>", 39, 8.75);
$s = sprintf("%s is %d", "Prabhat", 39);
echo "sprintf returned: $s<br><br>";

echo "<h3 style='color:#2f855a;'>End of full demo</h3>";
?>
