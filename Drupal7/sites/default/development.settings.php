<?php
/**
 * @file
 * Drupal 7 development environment configuration file.
 *
 * This file should only be included on development environments.
 */

// Show all error messages on the site
$conf['error_level'] = 2;

// Anonymous caching disabled
$conf['cache'] = 0;

// Block caching disabled
$conf['block_cache'] = 0;

// Expiration of cached pages to 0
$conf['page_cache_maximum_age'] = 0;

// Aggregate and compress CSS files off
$conf['preprocess_css'] = 0;
$conf['css_gzip_compression'] = 0;

// Aggregate JavaScript files off
$conf['preprocess_js'] = 0;
$conf['js_gzip_compression'] = 0;

// Set temporary path
$conf['file_temporary_path'] = '/tmp';

// Set Stage File Proxy 
$conf['stage_file_proxy_origin'] = '';
