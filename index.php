<?php /*********************************************************
**
** Script to render notes as HTML using Sheaf.
**
** index.php
**
*/

////////////////////////////////////////////////////////////////
//

// Load the library and rendering hooks.
include("sheaf/sheaf.php");
include("sheaf/hooks/math.php");
include("sheaf/hooks/machine.php");

$s = new Sheaf(
       array(
           'file' => 'notes.xml',
           'path' => 'sheaf/',
           'message' => '<h1>Concepts of Programming Languages</h1>',
           'toc' => 'true'
         )
      );

// Render the notes as HTML.
$s->html();

/*eof*/?>