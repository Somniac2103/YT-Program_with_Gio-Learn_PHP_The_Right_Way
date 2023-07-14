LESSON 1 : BASIC PHP SYNTAX
if only php do not add last closing tag but if mixed do add it.

can use single or double quotes for strings
single quotes the program will use it as text
double quotes can be used with variables
enclosed variables with curling brackets to make more visible. Not necessary.


always add semicolon at the end of line

can use print or echo
print can be used in expression as it returns 1
commas concatinate words with echo
use echo

variables start with $ example $name = "barry"
variables can't start with numbers or have any special characters
can't use $this as a varaible name
variables are assign by value. Can assign with reference by adding & before the $variable
-----------------------------------------------
LESSON 2: CONSTANTS & VARIABLES

Define constants is created on run time
const constants is created during compile time

Magic constants can change depending where you use them

variable variables uses $ sign before the variable name which assigns the value of that vaiable to the variable variable name. Dynamic variable name assignment

------------------------------------------
LESSON 3: DATA TYPES- TYPECASTING OVERVIEW

PHP is dynamically "Weakly" type language
dynamically type langauge check type at run time
static type langauge check type at compile time

4 scalar TYPES
bool - true or false
int - 1, 2, 3, 4 (no decimals)
float - -1.5 , 3.25
string

4 compound types
array
object
callable
iterable

2 special types
resource
null

Enable strict mode by typing
declare(strict_types=1);

Tapecasting by including
$x = (int) '5';

------------------------------------------
LESSON 4: BOOLEAN DATA TYPE

integers 0 and -0 is equal to FALSE
float 0.0 and -0.0 is equal to FALSE
Strings '' is equal to FALSE
Strings '0' is equal to FALSE
array [] = FALSE
null = FALSE

all other values to true

------------------------------------------
LESSON 5: INTEGER DATA TYPE

Can use Decimal by writing the number
or can use hexidecimal by adding '0x' before the number. example 0x*****
or octals by adding '0' before the number. Example 0***
or binary by adding '0b' before the number. Example 0b****

can cast other datatypes into integer:
Boolean: true => 1, False => 0
Float: will simple lose decimal
string: if a number it will drop the decimal and display otherwise it will convert to 0
null will also return 0

------------------------------------------
LESSON 6: FLOAT DATA TYPE

can use exponent by adding e and the exponent which can be negative by adding a negative sign

Don't trust floats and never compare floats.

if you go out of bounds you will get infinity

any calculation that can't calculate then you will receive NAN

cast by
string same like integer

------------------------------------------
LESSON 7: STRING DATA TYPE

either single or double quotes
however in single quotes you can't use variables but double you can.

heredoc is multi line but like double quotes
nowdoc is multi line but like single quotes

------------------------------------------
LESSON 8: NULL DATA TYPE

variables set as null;
variables is not define it will equal to null
variable is unset then equal to null

case
to string it will equal to empty string
boolean to False
empty array
integer to zero


------------------------------------------
LESSON 9: ARRAY DATA TYPE

Can't use negative numbers in array like strings to get the last intem in the array.

You can make associated array where you replace the indexing with your own terms.

can have different primtive types in a array
can have nested array

key must be strings or integer. the next array key will overwrite the previous key if the same. The array will try and convert it to integer when not string or integer.

if you set the key of only a few key the following unset key will following on the highest number between the previous set key and last unset key number.

When using shift or pop function the array will reset the index and any set index will be remove except for string index set_error_handler

Unset keeps the highest index and and pushin any item will continue from it.

can use built in function 'array_key_exists[]' to check if key exist

------------------------------------------
LESSON 10: EXPRESSIONS AND OPERATORS

PHP is an expressional language.
Precedence of operators

unary operator that takes one values
binary operator that takes two values
Ternary operator takes three values

Arithmetic operator:
if a variable with string number has a minus or plus put infront of it it wil convert it to a number.

Assignment operator:
+= -= *= /= %= ++=

String operators:
'string' . 'string'
.=

Comparison operators:
== compare (does type conversion)
=== strict (compare type as well)
!= not equal with type conversion
!== not equal
<=> equate -1 if less, 0 if equal or 1 if more that