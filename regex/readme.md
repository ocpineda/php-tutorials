# Regular Expressions in PHP

## Resources

- [PERL compatible regex](http://php.net/pcre)

## Syntax
**taken from <https://www.tutorialspoint.com/php/php_regular_expression.htm>**




alphanum   | description
-----------|------------------------------------------------ 
[0-9] | It matches any decimal digit from 0 through 9.
[a-z] | It matches any character from lower-case a through lowercase z.
[A-Z] | It matches any character from uppercase A through uppercase Z.
[a-Z] | It matches any character from lowercase a through uppercase Z.

---

expression | description
-----------|-----------------------------------------------------
p+     | It matches any string containing at least one p.
p*     | It matches any string containing zero or more p's.
p?     | It matches any string containing zero or one p's.
p{N}   | It matches any string containing a sequence of N p's
p{2,3} | It matches any string containing a sequence of two or three p's.
p{2, } | It matches any string containing a sequence of at least two p's.
p$     | It matches any string with p at the end of it.
^p     | It matches any string with p at the beginning of it.

