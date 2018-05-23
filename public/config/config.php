<?php

$config['site_title'] = 'Well-Formed';

$config['date_format'] = '%Y-%m-%d';            // Set the PHP date format as described here: http://php.net/manual/en/function.strftime.php

$config['timezone'] = 'UTC';                 // Timezone may be required by your php install

$config['theme'] = 'well-formed';                // Set the theme (defaults to "default")

// Custom settings.

$config['site_tagline'] = 'Good web development in London';

// For the navigation.
// 'title' should match the 'title' in the page's YAML header.
$config['nav_pages'] = array(
    array('title' => 'Home', 'url' => '/'),
    array('title' => 'Projects', 'url' => '/projects'),
    array('title' => 'About', 'url' => '/about'),
);
