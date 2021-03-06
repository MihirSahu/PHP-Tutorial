# PHP Tutorial

## Hello world and Setup
- PHP is a server side language, so it's going to run on a web server
- Start php web server in pwd with `php -S localhost:<port>`, and then navigate to your php file in the browser depending on which directory you started your server in `localhost:<port>/site.php`
- php pairs well with html, and a php file is the same as an html file, the only difference is that in a php file we can also write php code
- Use the <?php ?> tag to insert php code. Ex. `<?php echo("Hello world!")?>;`. Make sure to include semicolons!
    - In this example, the text inside the echo command is rendered as html on the page. Also, any html code can also be used inside the echo function. Ex. `echo "<h1>Hello world!</h1>"`

## Variables
- Create a variable with \$. Ex. `$characterName = "Mihir";`
- Concatenate variables: `echo("$characterName is $characterAge");`
- Update variable the same way you declared/initialized it: `$characterName = "Sahu"`

## Data Types
- Strings
- Numbers
    - Integers (Whole numbers)
    - Float (Decimal numbers)
- Boolean (true/false)
- Null (No value)

## Working with Strings
- Strings are plain text
- Common string modifier functions
    - strtolower()
    - strtoupper()
    - strlen()
    - str_replace()
    - substr()
- Find character at specific index: `$characterName[0]`
- Modify specifc character in string: `$characterName[0] = 'N'`

## Numbers
- Arithmetic
    - +
    - -
    - /
    - *
    - %
- Ex.
    - `$num = 0`
    - `$num = $num + 1`
- Common math functions
    - abs()
    - pow()
    - min(), max()
    - round()
    - ceil(), floor()

## Getting User Input
- The form element can take input from the user and pass it to php
```
    <form action="site.php" method="get">
      Name: <input type="text" name="name">
      <input type="submit">
    </form>
    <?php
      echo $_GET["name"]
     ?>
 ```
- The input tags are basic html, the part that prints the name is the `echo $_GET["name"]`. It takes the text from the input box with the attribute "name" with the $_GET method and echos it
