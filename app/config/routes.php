<?php
return array(
    'news/([0-9]+)'         => 'news/view/$1',
    'news'                  => 'news/index',
    'news/edit/([0-9]+)'    => 'news/edit/$1',
    'news/delete/([0-9]+)'  => 'news/delete/$1',

    'about'           => 'about/index',
);