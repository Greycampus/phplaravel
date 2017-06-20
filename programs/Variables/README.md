#### Variables:

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

#### Example programs:

1. Use pi value as global variable in your program to print the area of circle
2. Use local variable take input from user and print the nearest power of 3.
3. Program using Constants

