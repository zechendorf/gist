<?php

$EM_CONF[$_EXTKEY] = array(
    'title' => 'gist',
    'description' => 'Extension to display GitHub gists as content',
    'category' => 'plugin',
    'author' => 'Christopher Zechendorf',
    'author_email' => 'christopher@zechendorf.com',
    'state' => 'alpha',
    'internal' => '',
    'uploadfolder' => '1',
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'version' => '1.0.0',
    'constraints' => array(
        'depends' => array(
            'typo3' => '8.7.0-8.7.99'
        ),
        'conflicts' => array(
        ),
        'suggests' => array(
        ),
    ),
);
