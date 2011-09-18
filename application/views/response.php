<?php
header("content-type: text/xml");
echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
?>
<Response>
    <Say><?php echo $fatal_error_count; ?> Fatal Errors in todays Log</Say>
</Response>