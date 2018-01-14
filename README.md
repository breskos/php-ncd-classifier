PHP NCD Classifier
----

This classifier allows you to easily classify texts with PHP.
You can use the classifier with simply require the file.

```php
require 'ncd.class.php';
```
After that create a new NCD object.

```php
$c = new NCD();
```

After that you can as much examples from the past as you want.
Add them with their specific label.

```php
$c->add(array(
	"hi my name is alex, what about you?" => 'ok',
	"are you hungy? what about some fries?" => 'ok',
	"how are you?" => 'ok',
	"buy viagra or dope" => 'spam',
	"viagra spam drugs sex" => 'spam',
	"buy drugs and have fun" => 'spam'
	));

```

With compare method you then use the classifier as shown below.

```php
$c->compare('hi guy, how are you?');
$c->compare('buy viagra m0therfuck5r');
```

This method returns the label of the estimated text.

NCD works without statistics and uses just the compression distance of the input string in comparison to the other strings and their concatenation.
