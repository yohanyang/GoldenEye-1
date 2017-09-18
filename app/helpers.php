<?php

function current_page($uri = "/") {
    /* This is used to get the "active" page and highlight it properly in the sidebar */
    return strstr(request()->path(), $uri);
}
?>