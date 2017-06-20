#### 1. ﻿Introduction:

The PHP Hypertext Preprocessor (PHP) is a programming language that allows web developers to create dynamic content that interacts with databases. PHP is basically used for developing web based software applications.This PHP tutorial covers all the topics of PHP such as introduction, control statements, functions, array, string, file handling, regular expression, object-oriented programming in PHP.

- History:

PHP was written in the C programming language by Rasmus Lerdorf in 1994 for use in monitoring his online resume and related personal information.

Lerdorf combined PHP with his own Form Interpreter, releasing the combination publicly as PHP/FI (generally referred to as PHP 2.0) on June 8, 1995. Two programmers, Zeev Suraski and Andi Gutmans, rebuilt PHP's core, releasing the updated result as PHP/FI 2 in 1997.

- Features:

  * Performance: Script written in PHP executes much faster then those scripts written in other languages such as JSP & ASP.
  * Open Source Software: PHP source code is free available on the web, you can developed all the version of PHP according to your requirement without paying any cost.
  * Platform Independent: PHP are available for WINDOWS, MAC, LINUX & UNIX operating system. A PHP application developed in one OS can be easily executed in other OS also.
  * Compatibility: PHP is compatible with almost all local servers used today like Apache, IIS etc.
  * Embedded: PHP code can be easily embedded within HTML tags and script.

#### 2. Variables:

A variable in PHP is a name of memory location that holds data. In PHP, a variable is declared using $ sign followed by variable name. 
Syntax of declaring a variable is:
    $variablename=value;

  1. Local variables:
	A variable declared in a function is considered local; that is, it can be referenced solely in that function. Any assignment outside of that function will be considered to be an entirely different variable from the one contained in the function.
  2. Functional parameters:
	Function parameters are declared after the function name and inside parentheses. They are declared much like a typical variable.
  3. Global variables:
	In contrast to local variables, a global variable can be accessed in any part of the program. However, in order to be modified, a global variable must be explicitly declared to be global in the function in which it is to be modified. This is accomplished, conveniently enough, by placing the keyword GLOBAL in front of the variable that should be recognized as global. Placing this keyword in front of an already existing variable tells PHP to use the variable having that name. 
  4. Static variables:
	The final type of variable scoping that I discuss is known as static. In contrast to the variables declared as function parameters, which are destroyed on the function's exit, a static variable will not lose its value when the function exits and will still hold that value should the function be called again.
   5. Constant:
	A constant is a name or an identifier for a simple value. A constant value cannot change during the execution of the script. By default, a constant is case-sensitive.To define a constant you have to use define() function and to retrieve the value of a constant, you have to simply specifying its name.You can also use the function constant() to read a constant's value if you wish to obtain the constant's name dynamically.

#### 3. Data types:

PHP has a total of eight data types which we use to construct our variables −
  * Integers − are whole numbers, without a decimal point, like 4195.
  * Doubles − are floating-point numbers, like 3.14159 or 49.1.
  * Booleans − have only two possible values either true or false.
  * NULL − is a special type that only has one value: NULL.
  * Strings − are sequences of characters, like 'PHP supports string operations.'
  * Arrays − are named and indexed collections of other values.
  * Objects − are instances of programmer-defined classes, which can package up both other kinds of values and functions that are specific to the class.
  * Resources − are special variables that hold references to resources external to PHP (such as database connections).

#### 4. Typecasting:

Type casting in PHP works much as it does in C: the name of the desired type is written in parentheses before the variable which is to be cast.
The casts allowed are:
  * (int), (integer) - cast to integer
  * (bool), (boolean) - cast to boolean
  * (float), (double), (real) - cast to float
  * (string) - cast to string
  * (array) - cast to array
  * (object) - cast to object
  * (unset) - cast to NULL (PHP 5)

#### 5. Operators:

PHP language supports following type of operators.
  - Arithmetic Operators 
  - Comparison Operators 
  - Logical (or Relational) Operators 
  - Assignment Operators 
  - Conditional (or ternary) Operators 

#### Arithmetic Operators

These are following arithmetic operators supported by PHP language :

 Operator | Description 
| --- | --- |
| + | Adds two operands |
| - | Subtracts second operand from the first |
| * | Multiply both operands |
| / | Divide numerator by de-numerator |
| % | Modulus Operator and remainder of after an integer division |
| ++ | Increment operator, increases integer value by one |
| -- | Decrement operator, decreases integer value by one |

#### Comparison Operators

These are following comparison operators supported by PHP language

| Operator | Description |
| --- | --- |
| == | Checks if the value of two operands are equal or not, if yes then condition becomes true |
| != | Checks if the value of two operands are equal or not, if values are not equal then condition becomes true |
| > | Checks if the value of left operand is greater than the value of right operand, if yes then condition becomes true |
| < | Checks if the value of left operand is less than the value of right operand, if yes then condition becomes true |
| >= | Checks if the value of left operand is greater than or equal to the value of right operand, if yes then condition becomes true |
| <= | Checks if the value of left operand is less than or equal to the value of right operand, if yes then condition becomes true |

#### Logical Operators

These are following logical operators supported by PHP language

| Operator | Description |
| --- | --- |
| and |If both the operands are true then condition becomes true |
| or | If any of the two operands are non zero then condition becomes true |
| && | If both the operands are non zero then condition becomes true |
| || | If any of the two operands are non zero then condition becomes true |
| ! | If a condition is true then Logical NOT operator will make false |

#### Assignment Operators

There are following assignment operators supported by PHP language
 
| Operator | Description |
| --- | --- | 
| = | Assigns values from right side operands to left side operand |
| += | It adds right operand to the left operand and assign the result to left operand |
| -= | It subtracts right operand from the left operand and assign the result to left operand |
| *= | It multiplies right operand with the left operand and assign the result to left operand |
| /= | It divides left operand with the right operand and assign the result to left operand |
| %= | It takes modulus using two operands and assign the result to left operand |


#### Conditional Operator

There is one more operator called conditional operator. This first evaluates an expression for a true or false value and then execute one of the two given statements depending upon the result of the evaluation. The conditional operator has this syntax −
syntax: ? :
``` If Condition is true ? Then value X : Otherwise value Y ```

#### 6. Control structures:

#### 1. Decision making:

You can use conditional statements in your code to make your decisions. PHP supports following three decision making statements.
- if else statement − use this statement if you want to execute a set of code when a condition is true and another if the condition is not true
- elseif statement − is used with the if...else statement to execute a set of code if one of the several condition is true
- switch statement − is used if you want to select one of many blocks of code to be executed, use the Switch statement. The switch statement is used to avoid long blocks of if..elseif..else code.

  * The If...Else Statement

If you want to execute some code if a condition is true and another code if a condition is false, use the if....else statement.
Syntax:
```
if (condition)
   code to be executed if condition is true;
else
   code to be executed if condition is false;
```
  * The ElseIf Statement

If you want to execute some code if one of the several conditions are true use the elseif statement
Syntax
```
if (condition)
   code to be executed if condition is true;
elseif (condition)
   code to be executed if condition is true;
else
   code to be executed if condition is false;
```
  * The Switch Statement

If you want to select one of many blocks of code to be executed, use the Switch statement.
The switch statement is used to avoid long blocks of if..elseif..else code.
Syntax
```
switch(expression){      
case value1:      
 //code to be executed  
 break;  
case value2:      
 //code to be executed  
 break;  
......      
default:       
 code to be executed if all cases are not matched;    
}  
```
#### 2. Loops

Often when you write code, you want the same block of code to run over and over again in a row. Instead of adding several almost equal code-lines in a script, we can use loops to perform a task like this.
In PHP, we have the following looping statements:
 - while - loops through a block of code as long as the specified condition is true 
 - do...while - loops through a block of code once, and then repeats the loop as long as the specified condition is true 
 - for - loops through a block of code a specified number of times 
 - foreach - loops through a block of code for each element in an array 

  * while Loop

The while loop executes a block of code as long as the specified condition is true.
Syntax
```
while (condition is true) {
    code to be executed;
} 
```
  * The PHP do...while Loop

The do...while loop will always execute the block of code once, it will then check the condition, and repeat the loop while the specified condition is true.
Syntax
```
do {
    code to be executed;
} while (condition is true); 
```
Notice that in a do while loop the condition is tested AFTER executing the statements within the loop. This means that the do while loop would execute its statements at least once, even if the condition is false the first time.

  * The PHP for Loop

The for loop is used when you know in advance how many times the script should run.
Syntax
```
for (init counter; test counter; increment counter) {
    code to be executed;
} 
```
  * The PHP foreach Loop

The foreach loop works only on arrays, and is used to loop through each key/value pair in an array.
Syntax
```
foreach ($array as $value) {
    code to be executed;
} 
```
For every loop iteration, the value of the current array element is assigned to $value and the array pointer is moved by one, until it reaches the last array element.

  * The break statement

The PHP break keyword is used to terminate the execution of a loop prematurely.
The break statement is situated inside the statement block. It gives you full control and whenever you want to exit from the loop you can come out. After coming out of a loop immediate statement to the loop will be executed.

  * The continue statement

The PHP continue keyword is used to halt the current iteration of a loop but it does not terminate the loop.
Just like the break statement the continue statement is situated inside the statement block containing the code that the loop executes, preceded by a conditional test. For the pass encountering continue statement, rest of the loop code is skipped and next pass starts.


#### 7. Array:

An array is a data structure that stores one or more similar type of values in a single value. For example if you want to store 100 numbers then instead of defining 100 variables its easy to define an array of 100 length.

There are three different kind of arrays and each array value is accessed using an ID which is called array index.
  * Indexed array − An array with a numeric index. Values are stored and accessed in linear way.
  * Associative array − An array with strings as index. This stores element values in association with key values rather than in a strict linear index order.
  * Multidimensional array − An array containing one or more arrays and values are accessed using multiple indices.

#### 8. File Handling:

PHP has several functions for creating, reading, uploading, and editing files.
  * The readfile() function reads a file and writes it to the output buffer.
  * The fopen() function open files. This function gives more options than the readfile() function.
  * The fread() function reads from an open file.
  * The fclose() function is used to close an open file.
  * The fgets() function is used to read a single line from a file.
  * The feof() function checks if the "end-of-file" (EOF) has been reached.

#### 9. Functions:

PHP functions are similar to other programming languages. A function is a piece of code which takes one more input in the form of parameter and does some processing and returns a value.

You already have seen many functions like fopen() and fread() etc. They are built-in functions but PHP gives you option to create your own functions as well and you just need to call them according to your requirement.

#### 10. GET and POST methods:
There are two ways the browser client can send information to the web server:
  * The GET Method

The GET method sends the encoded user information appended to the page request. The page and the encoded information are separated by the ? character.

``` http://www.test.com/index.htm?name1=value1&name2=value2 ```
  * The POST Method

The POST method transfers information via HTTP headers. The information is encoded as described in case of GET method and put into a header called QUERY_STRING.

#### 11. Regular Expressions:

1. POSIX Regular Expressions

The structure of a POSIX regular expression is not dissimilar to that of a typical arithmetic expression: various elements (operators) are combined to form more complex expressions.
The simplest regular expression is one that matches a single character, such as g, inside strings such as g, haggle, or bag.

  * Brackets

Brackets ([]) have a special meaning when used in the context of regular expressions. They are used to find a range of characters.
Eg: [0-9],[a-z]

  * Quantifiers

The frequency or position of bracketed character sequences and single characters can be denoted by a special character. Each special character having a specific connotation. The +, *, ?, {int. range}, and $ flags all follow a character sequence.
Eg:p+,p*,p?

2. PERL Style Regular Expressions

Perl-style regular expressions are similar to their POSIX counterparts. The POSIX syntax can be used almost interchangeably with the Perl-style regular expression functions. In fact, you can use any of the quantifiers introduced in the previous POSIX section.
  - Meta characters

A meta character is simply an alphabetical character preceded by a backslash that acts to give the combination a special meaning.
For instance, you can search for large money sums using the '\d' meta character: /([\d]+)000/, Here \d will search for any string of numerical character.

#### 12. Object-Oriented:

  * Class − This is a programmer-defined data type, which includes local functions as well as local data. You can think of a class as a template for making many instances of the same kind (or class) of object.
  * Object − An individual instance of the data structure defined by a class. You define a class once and then make many objects that belong to it. Objects are also known as instance.
  * Inheritance − When a class is defined by inheriting existing function of a parent class then it is called inheritance. Here child class will inherit all or few member functions and variables of a parent class.
  * Polymorphism − This is an object oriented concept where same function can be used for different purposes. For example function name will remain same but it make take different number of arguments and can do different task.
  * Overloading − a type of polymorphism in which some or all of operators have different implementations depending on the types of their arguments. Similarly functions can also be overloaded with different implementation.
  * Data Abstraction − Any representation of data in which the implementation details are hidden (abstracted).
  * Encapsulation − refers to a concept where we encapsulate all the data and member functions together to form an object.
  * Constructor − refers to a special type of function which will be called automatically whenever there is an object formation from a class.
  * Destructor − refers to a special type of function which will be called automatically whenever an object is deleted or goes out of scope.

#### 13. Serialization:

Generates a storable representation of a value. This is useful for storing or passing PHP values around without losing their type and structure.

``` Serialize(value) ```

#### 14. Cookies:

Cookies are text files stored on the client computer and they are kept of use tracking purpose. PHP transparently supports HTTP cookies.

There are three steps involved in identifying returning users:

  * Server script sends a set of cookies to the browser. For example name, age, or identification number etc.
  * Browser stores this information on local machine for future use.
  * When next time browser sends any request to web server then it sends those cookies information to the server and server uses that information to identify the user.

#### 15. Sessions:

An alternative way to make data accessible across the various pages of an entire website is to use a PHP Session.

A session creates a file in a temporary directory on the server where registered session variables and their values are stored. This data will be available to all pages on the site during that visit.

A session ends when the user loses the browser or after leaving the site, the server will terminate the session after a predetermined period of time, commonly 30 minutes duration.

#### 16. Email:

* Sending plain text email

PHP makes use of mail() function to send an email. This function requires three mandatory arguments that specify the recipient's email address, the subject of the the message and the actual message additionally there are other two optional parameters.

``` mail( to, subject, message, headers, parameters ); ```

* Sending HTML email

When you send a text message using PHP then all the content will be treated as simple text. Even if you will include HTML tags in a text message, it will be displayed as simple text and HTML tags will not be formatted according to HTML syntax. But PHP provides option to send an HTML message as actual HTML message.

* Sending attachments with email

To send an email with mixed content requires to set Content-type header to multipart/mixed. Then text and attachment sections can be specified within boundaries.

A boundary is started with two hyphens followed by a unique number which can not appear in the message part of the email. A PHP function md5() is used to create a 32 digit hexadecimal number to create unique number. A final boundary denoting the email's final section must also end with two hyphens.

#### 17. Exception handling:

When an exception is thrown, the code following it will not be executed, and PHP will try to find the matching "catch" block. If an exception is not caught, a fatal error will be issued with an "Uncaught Exception" message.

Proper exception code should include:
1. Try - A function using an exception should be in a "try" block. If the exception does not trigger, the code will continue as normal. However if the exception triggers, an exception is "thrown"
2. Throw - This is how you trigger an exception. Each "throw" must have at least one "catch"
3. Catch - A "catch" block retrieves an exception and creates an object containing the exception information

#### 18. Iterators:

An iterator is an object that represents a stream of data. Unlike a sequence, an iterator can (usually) only provide the next item. The for-in statement uses iterators to control the loop, and iterators can also be used in many other contexts.






























