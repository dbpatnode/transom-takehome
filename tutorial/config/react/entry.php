<?php
# config/react/entry.php

use craft\elements\Entry;

return [
    'default' => function(Entry $entry){// named after the group
        return [
            'id' => $entry->id,
            'title' => $entry->title,
            'customField' => $entry->customField,
         ];
    }
];