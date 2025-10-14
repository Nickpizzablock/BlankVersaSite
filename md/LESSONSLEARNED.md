# PHP
I am using php as a static site generator. It is very rudimentary because I 
don't want to mess with NodeJS or any javascript. I know this is very old school 
but I don't like how whenever I download Node, I have to keep track will all 
the versions and the documentation for those often take long to learn.

## include
When dealing with `include 'updates.php';`, the output html looks 
rather ugly. `include` injects php code into the file. This can be used 
to add html programatically instead of using things like iframe which is 
resource intensive.

The issue is that the code is set "in place" where php does not automatically 
add spaces to match the height of where the php include was placed except on 
the first line. 

The solution is to keep the start brackets at the very first character, indent 
the `include` to the correct spot where it should be placed, and put the end 
bracket in the same line.

The caveat is that the php file has to be correctly aligned with spaces. 
Also, at the end, there should be a newline such that there is a blank line 
at the end of the file.

## UTF-8 encoding
My page has certain characters that did not render correctly. My original 
method of static site generation is to use php and use `>` to put the output 
into a file. The issue is that UTF-8 did not port.

The issue was not using Windows, powershell, or using the meta tag for php or 
html.

The solution was to make a php program that forced UTF-8. Although it is weird 
to install php on the compiler machine, I think it is the most neutral method. 
PHP will be on servers while using something like c, python, java will be 
too convoluted to install, especially accounting for setup time or storage 
space. 