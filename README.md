facebook-meta
=============

A simple, no frills Facebook meta tag generator for your WordPress site.

Tags generated look like this:

```
<meta property="og:url" content="{your_post_permalink}"/>
<meta property="og:title" content="{your_post_title}"/>
<meta property="og:description" content="{your_post_excerpt}"/>
<meta property="og:image" content="{your_post_featured_image_url}"/>
```

Notes
-----
- Meta tags are only generated for single posts/pages/etc. Basically, when [is_singular()](http://codex.wordpress.org/Function_Reference/is_singular) returns true.
- PHP's [strip_tags()](http://php.net/manual/en/function.strip-tags.php) function is used to strip HTML tags from the **og:description** tag.