# Codeignitor PLUS

I have been searching for articles online to implement templating for CI, but most of them them tend to be complicated to implement or confusing! :( . Finally, I arrived at this article http://net.tutsplus.com/tutorials/php/an-introduction-to-views-templating-in-codeigniter/ which was a life saver.

Hence, I implemented the same into the framework with a little bit of extra.

***
v0.2
<ul>
<li>Added Foundation & jQuery support</li>
<li>Included modules functionality</li>
<li>Basic template add</li>
</ul>

***
v0.1
<ul>
<li>Refer, application/config/autoload.php to enable 'template' library.</li>
<li>Template dir resides in views/templates/</li>
<li>Template lib in system/libraries/Template.php</li>
<li>Public dir has index file, set virtual host accordingly!</li>
</ul>
***


Displaying the template inside the controller:-
<pre>
     $this->template->load('default', 'content', $data);
</pre>

<p>where, 'default' is the default/master template which resides in views/templates/<p>
<p>'content' is the page/view you want to display inside the template. Location: views/content.php</p>
<p>'data' is the variable/values you want to pass to the views/template</p>

Stay tuned! And hope it helps someone :)
