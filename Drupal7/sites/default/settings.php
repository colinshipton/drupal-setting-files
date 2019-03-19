<?php

/**
 * Load local override configuration, if available.
 *
 * Use {environment}.settings.php to override variables on secondary (staging,
 * development, etc) installations of this site. Typically used to disable
 * caching, JavaScript/CSS compression, re-routing of outgoing emails, and
 * other things that should not happen on development and testing sites.
 *
 * Keep this code block at the end of this file to take full effect.
 */
if (file_exists(__DIR__ . '/{environment}.settings.php')) {
  include __DIR__ . '/{environment}.settings.php';
}
