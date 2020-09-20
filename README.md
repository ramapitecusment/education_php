# PHP Education

The **PHP Hypertext Preprocessor** (PHP) is a programming language that allows web developers to create dynamic content that interacts with databases. PHP is basically used for developing web based software applications. This tutorial helps you to build your base with PHP.

PHP started out as a small open source project that evolved as more and more people found out how useful it was. Rasmus Lerdorf unleashed the first version of PHP way back in 1994.

PHP is a MUST for students and working professionals to become a great Software Engineer specially when they are working in Web Development Domain. I will list down some of the key advantages of learning PHP:

- PHP is a recursive acronym for "PHP: Hypertext Preprocessor".
- PHP is a server side scripting language that is embedded in HTML. It is used to manage dynamic content, databases, session tracking, even build entire e-commerce sites.
- It is integrated with a number of popular databases, including MySQL, PostgreSQL, Oracle, Sybase, Informix, and Microsoft SQL Server.
- PHP is pleasingly zippy in its execution, especially when compiled as an Apache module on the Unix side. The MySQL server, once started, executes even very complex queries with huge result sets in record-setting time.
- PHP supports a large number of major protocols such as POP3, IMAP, and LDAP. PHP4 added support for Java and distributed object architectures (COM and CORBA), making n-tier development a possibility for the first time.
- PHP is forgiving: PHP language tries to be as forgiving as possible.
- PHP Syntax is C-Like.

The most universally effective PHP tag style is:
```
<?php...?>
```

Short or short-open tags look like this:
```
<?...?>
```

**Single-line comments** − They are generally used for short explanations or notes relevant to the local code. Here are the examples of single line comments.
```
<?
   # This is a comment, and
   # This is the second line of the comment
   
   // This is a comment too. Each style comments only
   print "An example with single line comments";
?>
```
Multi-lines comments − They are generally used to provide pseudocode algorithms and more detailed explanations when necessary. The multiline style of commenting is the same as in C. Here are the example of multi lines comments.
```
<?
   /* This is a comment with multiline
      Author : Mohammad Mohtashim
      Purpose: Multiline Comments Demo
      Subject: PHP
   */
   
   print "An example with multi line comments";
?>
```

Yeah it is true that PHP is a case sensitive language. Try out following example:

```
<html>
   <body>
      
      <?php
         $capital = 67;
         print("Variable capital is $capital<br>");
         print("Variable CaPiTaL is $CaPiTaL<br>");
      ?>
      
   </body>
</html>
```
## The ElseIf Statement

### Arithmetic Operators

| Operator | Description                                                 | Example             |
|----------|-------------------------------------------------------------|---------------------|
|     +    | Adds two operands                                           | A + B will give 30  |
|     -    | Subtracts second operand from the first                     | A - B will give -10 |
|     *    | Multiply both operands                                      | A * B will give 200 |
|     /    | Divide numerator by de-numerator                            | B / A will give 2   |
|     %    | Modulus Operator and remainder of after an integer division | B % A will give 0   |
|    ++    | Increment operator, increases integer value by one          | A++ will give 11    |
|    --    | Decrement operator, decreases integer value by one          | A-- will give 9     |

### Comparison Operators

| Operator | Description                                                                                                                     | Example               |
|----------|---------------------------------------------------------------------------------------------------------------------------------|-----------------------|
|    ==    | Checks if the value of two operands are equal or not, if yes then condition becomes true.                                       | (A == B) is not true. |
|    !=    | Checks if the value of two operands are equal or not, if values are not equal then condition becomes true.                      | (A != B) is true.     |
|     >    | Checks if the value of left operand is greater than the value of right operand, if yes then condition becomes true.             | (A > B) is not true.  |
|     <    | Checks if the value of left operand is less than the value of right operand, if yes then condition becomes true.                | (A < B) is true.      |
|    >=    | Checks if the value of left operand is greater than or equal to the value of right operand, if yes then condition becomes true. | (A >= B) is not true. |
|    <=    | Checks if the value of left operand is less than or equal to the value of right operand, if yes then condition becomes true.    | (A <= B) is true.     |

## The ElseIf Statement

### The If...Else Statement

If you want to execute some code if a condition is true and another code if a condition is false, use the if....else statement.

The following example will output "Have a nice weekend!" if the current day is Friday, Otherwise, it will output "Have a nice day!":

```
      <?php
         $d = date("D");
         
         if ($d == "Fri")
            echo "Have a nice weekend!"; 
         
         else
            echo "Have a nice day!"; 
      ?>
```

**Result**
```
Have a nice weekend!
```

### The ElseIf Statement
```
      <?php
         $d = date("D");
         
         if ($d == "Fri")
            echo "Have a nice weekend!";
         
         elseif ($d == "Sun")
            echo "Have a nice Sunday!"; 
         
         else
            echo "Have a nice day!"; 
      ?>
```

## Loop Types
### The for loop statement
The following example makes five iterations and changes the assigned value of two variables on each pass of the loop
```
      <?php
         $a = 0;
         $b = 0;
         
         for( $i = 0; $i<5; $i++ ) {
            $a += 10;
            $b += 5;
         }
         
         echo ("At the end of the loop a = $a and b = $b" );
      ?>
```

**Result**
```
At the end of the loop a = 50 and b = 25
```

### The while loop statement

The while statement will execute a block of code if and as long as a test expression is true.

If the test expression is true then the code block will be executed. After the code has executed the test expression will again be evaluated and the loop will continue until the test expression is found to be false.
```
<?php
         $i = 0;
         $num = 50;
         
         while( $i < 10) {
            $num--;
            $i++;
         }
         
         echo ("Loop stopped at i = $i and num = $num" );
?>
```
**Result**
```
Loop stopped at i = 10 and num = 40 
```

### The do...while loop statement

The do...while statement will execute a block of code at least once - it then will repeat the loop as long as a condition is true.

```
<?php
         $i = 0;
         $num = 0;
         
         do {
            $i++;
         }
         
         while( $i < 10 );
         echo ("Loop stopped at i = $i" );
?>
```
**Result**
```
Loop stopped at i = 10
```

## GET & POST Methods
There are two ways the browser client can send information to the web server.
- The GET Method
- The POST Method
Before the browser sends the information, it encodes it using a scheme called URL encoding. In this scheme, name/value pairs are joined with equal signs and different pairs are separated by the ampersand.

```
name1=value1&name2=value2&name3=value3
```

### The GET Method

The GET method sends the encoded user information appended to the page request. The page and the encoded information are separated by the ? character.

```
http://www.test.com/index.htm?name1=value1&name2=value2
```
- The GET method produces a long string that appears in your server logs, in the browser's Location: box.
- The GET method is restricted to send upto 1024 characters only.
- Never use GET method if you have password or other sensitive information to be sent to the server.
- GET can't be used to send binary data, like images or word documents, to the server.
- The data sent by GET method can be accessed using QUERY_STRING environment variable.
- The PHP provides $_GET associative array to access all the sent information using GET method.

```
<?php
   if( $_GET["name"] || $_GET["age"] ) {
      echo "Welcome ". $_GET['name']. "<br />";
      echo "You are ". $_GET['age']. " years old.";
      
      exit();
   }
?>
<html>
   <body>
   
      <form action = "<?php $_PHP_SELF ?>" method = "GET">
         Name: <input type = "text" name = "name" />
         Age: <input type = "text" name = "age" />
         <input type = "submit" />
      </form>
      
   </body>
</html>
```

### The POST Method
The POST method transfers information via HTTP headers. The information is encoded as described in case of GET method and put into a header called QUERY_STRING.
- The POST method does not have any restriction on data size to be sent.
- The POST method can be used to send ASCII as well as binary data.
- The data sent by POST method goes through HTTP header so security depends on HTTP protocol. By using Secure HTTP you can make sure that your information is secure.
- The PHP provides $_POST associative array to access all the sent information using POST method.

```
<?php
   if( $_POST["name"] || $_POST["age"] ) {
      if (preg_match("/[^A-Za-z'-]/",$_POST['name'] )) {
         die ("invalid name and name should be alpha");
      }
      echo "Welcome ". $_POST['name']. "<br />";
      echo "You are ". $_POST['age']. " years old.";
      
      exit();
   }
?>
<html>
   <body>
   
      <form action = "<?php $_PHP_SELF ?>" method = "POST">
         Name: <input type = "text" name = "name" />
         Age: <input type = "text" name = "age" />
         <input type = "submit" />
      </form>
   
   </body>
</html>
```


