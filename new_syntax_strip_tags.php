<?php
$str = <<<EOT
<p>This is a paragraph</p>
<ul><li>Item 1</li><li>Item 2</li></ul>
<a href="http://bad.worse.com/">Bad Ref</a>
EOT;
echo htmlspecialchars(strip_tags($str, '<p><ul><li>'));
echo "\n";
echo htmlspecialchars(strip_tags($str, ['p','ul','li']));
