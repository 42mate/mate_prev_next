#Mate Previous and Next

This module provides two functions to help to get the previous and next node of a given node.
This will help to provide navigation links for your site on each node.

### Pragmatically

You have these two functions

```php
mate_prev_next_get_next($nid, $type);
```

and

```php
mate_prev_next_get_prev($nid, $type);
```


Where

  $nid = Node ID
  $type = Name of the content type, e.g. page, blog, news, etc.

Type is optional, if is set will get prev and next nodes only from the same content type. If is not set
will get nodes from any content type.

### Helper Block

This module provides a default block to get prev and next links without code, will get next and prev of
any content type. You can customize this template adding your own css or overriding the template in
your local theme.