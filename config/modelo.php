<?php

return array(

  /*
  |--------------------------------------------------------------------------
  | Language
  |-------------------------------------------------------------------------- 
  |
  | Set the language of your site here.
  | And remember, spanish is 'es', not 'sp'.
  |
  | Read more about the lang attribute:
  | http://tlt.its.psu.edu/suggestions/international/web/tips/langtag.html#why
  |
  */

  'language' => 'en',


  /*
  |--------------------------------------------------------------------------
  | The author
  |--------------------------------------------------------------------------
  |
  | This is used for filling out the author meta tag.
  | Just write how you would like to be named here.
  |
  */

  'author' => 'The Koalabs Team',


  /*
  |--------------------------------------------------------------------------
  | CSS Main file
  |--------------------------------------------------------------------------
  |
  | Path to your main css file here.
  | Because you ARE concatenating and minifying your css files, aren't you?
  | Or at least using sass?
  | 
  | If not, you will need to go to the 'head.blade.php' file and add the css
  | files you are using in there.
  | 
  */
  'css' => 'css/style.css?v=0.1',


  /*
  |--------------------------------------------------------------------------
  | jQuery
  |--------------------------------------------------------------------------
  |
  | jQuery configuration here:
  |
  |   Choose the version of jQuery you want to work with.
  |   You should always provide a fallback in case something 
  |   doesn't work with the remote server.
  |
  | Modelo has some defaults for you :)
  |
  | You don't have to use jQuery, though.
  | Simply set 'jquery_on' to false if you don't care about jQuery.
  |
  */

  'jquery_on'       => true,
  'jquery_version'  => '1.8.3',
  'jquery_fallback' => 'js/libs/jquery.min.js',


  /*
  |--------------------------------------------------------------------------
  | Javascript files
  |--------------------------------------------------------------------------
  |
  | Define the path to your other javascript files here.
  | Because of the way Laravel works, the 'scripts' variable has to be
  | an associative array.
  |
  | Add them as if you were starting from the root of your site.
  | Here is an example:
  |
  |   'scripts' => array(
  |     'script'  => 'js/script.js',
  |     'plugins' => 'js/plugins.js'
  |   ),
  |
  */
  
  'scripts' => array(
    
  ),


  /*
  |--------------------------------------------------------------------------
  | Google Analytics
  |--------------------------------------------------------------------------
  |
  | Set your google analytics site ID here.
  |
  | This is an asynchronous google analytics snippet, as found
  | on HTML5 Boilerplate.
  |
  | Read more about it here:
  | mathiasbynens.be/notes/async-analytics-snippet
  | 
  */

  'analytics_on' => false,
  'analytics_id' => 'UA-XXXXX-X',

);