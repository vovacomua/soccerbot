<?php

function removeQuotesFromJsonKeys($json)
{
    return preg_replace('/"([^"]+)"\s*:\s*/', '$1:', $json);
}
