<?php
$content=file_get_contents('info.yaml');
$yamlContent=yaml_parse($content);
echo '<pre>'.print_r($yamlContent,true).'</pre>';
?>