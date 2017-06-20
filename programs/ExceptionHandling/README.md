#### Exception handling:

When an exception is thrown, the code following it will not be executed, and PHP will try to find the matching "catch" block. If an exception is not caught, a fatal error will be issued with an "Uncaught Exception" message.

Proper exception code should include:
1. Try - A function using an exception should be in a "try" block. If the exception does not trigger, the code will continue as normal. However if the exception triggers, an exception is "thrown"
2. Throw - This is how you trigger an exception. Each "throw" must have at least one "catch"
3. Catch - A "catch" block retrieves an exception and creates an object containing the exception information

#### Example Programs:

1. Use Exception handling to catch divided by zero and divided by power of 2 exceptions
2. Use exception handling to prevent the calculation of roots of quadratic equation if root as complex
