<?php 


$options['sites'] = array (
  0 => 'opensocial.dev.devshop.loudbritishguy.net',
);
$options['profiles'] = array (
  0 => 'minimal',
  1 => 'standard',
  2 => 'social',
);
$options['packages'] = array (
  'base' => 
  array (
    'modules' => 
    array (
      'crop' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/modules/contrib/crop/crop.module',
        'basename' => 'crop.module',
        'name' => 'Crop API',
        'info' => 
        array (
          'name' => 'Crop API',
          'description' => 'Provides storage and API for image crops.',
          'package' => 'Media',
          'type' => 'module',
          'dependencies' => 
          array (
            0 => 'image',
            1 => 'user',
          ),
          'version' => '8.x-1.5',
          'core' => '8.x',
          'project' => 'crop',
          'datestamp' => 1516357097,
        ),
        'schema_version' => '8003',
        'version' => '8.x-1.5',
      ),
      'embed_test' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/modules/contrib/embed/tests/embed_test/embed_test.module',
        'basename' => 'embed_test.module',
        'name' => 'Embed test',
        'info' => 
        array (
          'name' => 'Embed test',
          'type' => 'module',
          'description' => 'Support module for the Embed module tests.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'embed',
            1 => 'node',
          ),
          'version' => '8.x-1.0',
          'core' => '8.x',
          'project' => 'embed',
          'datestamp' => 1490755690,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.0',
      ),
      'embed' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/modules/contrib/embed/embed.module',
        'basename' => 'embed.module',
        'name' => 'Embed',
        'info' => 
        array (
          'name' => 'Embed',
          'type' => 'module',
          'description' => 'Provides a framework for different types of embeds in text editors.',
          'configure' => 'entity.embed_button.collection',
          'version' => '8.x-1.0',
          'core' => '8.x',
          'project' => 'embed',
          'datestamp' => 1490755690,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.0',
      ),
      'data_policy' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/modules/contrib/data_policy/data_policy.module',
        'basename' => 'data_policy.module',
        'name' => 'Data policy',
        'info' => 
        array (
          'name' => 'Data policy',
          'description' => 'Create data policies and track user agreements as well as informing users.',
          'configure' => 'entity.informblock.collection',
          'dependencies' => 
          array (
            0 => 'drupal:block',
          ),
          'type' => 'module',
          'version' => '8.x-1.0-beta2',
          'core' => '8.x',
          'project' => 'data_policy',
          'datestamp' => 1527011886,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.0-beta2',
      ),
      'webprofiler' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/modules/contrib/devel/webprofiler/webprofiler.module',
        'basename' => 'webprofiler.module',
        'name' => 'Web Profiler',
        'info' => 
        array (
          'name' => 'Web Profiler',
          'type' => 'module',
          'description' => 'Drupal Web Profiler.',
          'package' => 'Development',
          'configure' => 'webprofiler.settings',
          'tags' => 
          array (
            0 => 'developer',
          ),
          'dependencies' => 
          array (
            0 => 'devel',
          ),
          'version' => '8.x-1.2',
          'core' => '8.x',
          'project' => 'devel',
          'datestamp' => 1507197848,
        ),
        'schema_version' => '8001',
        'version' => '8.x-1.2',
      ),
      'kint' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/modules/contrib/devel/kint/kint.module',
        'basename' => 'kint.module',
        'name' => 'Devel Kint',
        'info' => 
        array (
          'name' => 'Devel Kint',
          'type' => 'module',
          'description' => 'Wrapper for Kint debugging tool',
          'package' => 'Development',
          'tags' => 
          array (
            0 => 'developer',
          ),
          'version' => '8.x-1.2',
          'core' => '8.x',
          'project' => 'devel',
          'datestamp' => 1507197848,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.2',
      ),
      'devel_generate_example' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/modules/contrib/devel/devel_generate/tests/modules/devel_generate_example/devel_generate_example.module',
        'basename' => 'devel_generate_example.module',
        'name' => 'Devel generate Example',
        'info' => 
        array (
          'name' => 'Devel generate Example',
          'type' => 'module',
          'description' => 'Create an example of DevelGenerate plugin type for testing purposing.',
          'package' => 'Development',
          'configure' => 'admin/config/development/generate',
          'tags' => 
          array (
            0 => 'developer',
          ),
          'version' => '8.x-1.2',
          'core' => '8.x',
          'project' => 'devel',
          'datestamp' => 1507197848,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.2',
      ),
      'devel_generate' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/modules/contrib/devel/devel_generate/devel_generate.module',
        'basename' => 'devel_generate.module',
        'name' => 'Devel generate',
        'info' => 
        array (
          'type' => 'module',
          'name' => 'Devel generate',
          'description' => 'Generate dummy users, nodes, menus, taxonomy terms...',
          'package' => 'Development',
          'tags' => 
          array (
            0 => 'developer',
          ),
          'version' => '8.x-1.2',
          'core' => '8.x',
          'project' => 'devel',
          'datestamp' => 1507197848,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.2',
      ),
      'devel_test' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/modules/contrib/devel/tests/modules/devel_test/devel_test.module',
        'basename' => 'devel_test.module',
        'name' => 'Devel test module',
        'info' => 
        array (
          'name' => 'Devel test module',
          'type' => 'module',
          'description' => 'Support module for Devel testing.',
          'package' => 'Testing',
          'version' => '8.x-1.2',
          'core' => '8.x',
          'project' => 'devel',
          'datestamp' => 1507197848,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.2',
      ),
      'devel_entity_test' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/modules/contrib/devel/tests/modules/devel_entity_test/devel_entity_test.module',
        'basename' => 'devel_entity_test.module',
        'name' => 'Devel entity test module',
        'info' => 
        array (
          'name' => 'Devel entity test module',
          'type' => 'module',
          'description' => 'Provides entity types for Devel tests.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'field',
            1 => 'text',
            2 => 'entity_test',
          ),
          'version' => '8.x-1.2',
          'core' => '8.x',
          'project' => 'devel',
          'datestamp' => 1507197848,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.2',
      ),
      'devel' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/modules/contrib/devel/devel.module',
        'basename' => 'devel.module',
        'name' => 'Devel',
        'info' => 
        array (
          'type' => 'module',
          'name' => 'Devel',
          'description' => 'Various blocks, pages, and functions for developers.',
          'package' => 'Development',
          'configure' => 'devel.admin_settings',
          'tags' => 
          array (
            0 => 'developer',
          ),
          'version' => '8.x-1.2',
          'core' => '8.x',
          'project' => 'devel',
          'datestamp' => 1507197848,
        ),
        'schema_version' => '8002',
        'version' => '8.x-1.2',
      ),
      'admin_toolbar_tools' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/modules/contrib/admin_toolbar/admin_toolbar_tools/admin_toolbar_tools.module',
        'basename' => 'admin_toolbar_tools.module',
        'name' => 'Admin Toolbar Extra Tools',
        'info' => 
        array (
          'name' => 'Admin Toolbar Extra Tools',
          'description' => 'Adds menu links to the Admin Toolbar.',
          'package' => 'Administration',
          'type' => 'module',
          'dependencies' => 
          array (
            0 => 'admin_toolbar:admin_toolbar',
            1 => 'drupal:system (>=8.3)',
          ),
          'version' => '8.x-1.24',
          'core' => '8.x',
          'project' => 'admin_toolbar',
          'datestamp' => 1527522484,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.24',
      ),
      'admin_toolbar_links_access_filter' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/modules/contrib/admin_toolbar/admin_toolbar_links_access_filter/admin_toolbar_links_access_filter.module',
        'basename' => 'admin_toolbar_links_access_filter.module',
        'name' => 'Admin Toolbar Links Access Filter',
        'info' => 
        array (
          'name' => 'Admin Toolbar Links Access Filter',
          'description' => 'Provides a workaround for the common problem that users with \'Use the administration pages and help\' permission see menu links they don\'t have access permission for. Once the issue <a href=\'https://www.drupal.org/node/296693\'>https://www.drupal.org/node/296693</a> be solved, this module will be deprecated.',
          'package' => 'Administration',
          'type' => 'module',
          'dependencies' => 
          array (
            0 => 'admin_toolbar:admin_toolbar',
          ),
          'version' => '8.x-1.24',
          'core' => '8.x',
          'project' => 'admin_toolbar',
          'datestamp' => 1527522484,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.24',
      ),
      'admin_toolbar' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/modules/contrib/admin_toolbar/admin_toolbar.module',
        'basename' => 'admin_toolbar.module',
        'name' => 'Admin Toolbar',
        'info' => 
        array (
          'name' => 'Admin Toolbar',
          'description' => 'Provides a drop-down menu interface to the site Toolbar.',
          'package' => 'Administration',
          'type' => 'module',
          'dependencies' => 
          array (
            0 => 'drupal:toolbar',
          ),
          'version' => '8.x-1.24',
          'core' => '8.x',
          'project' => 'admin_toolbar',
          'datestamp' => 1527522484,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.24',
      ),
      'features_ui' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/modules/contrib/features/modules/features_ui/features_ui.module',
        'basename' => 'features_ui.module',
        'name' => 'Features UI',
        'info' => 
        array (
          'name' => 'Features UI',
          'type' => 'module',
          'description' => 'Provides the user interface for Features.',
          'package' => 'Development',
          'configure' => 'features.assignment',
          'dependencies' => 
          array (
            0 => 'features',
          ),
          'version' => '8.x-3.7',
          'core' => '8.x',
          'project' => 'features',
          'datestamp' => 1519763291,
        ),
        'schema_version' => 8000,
        'version' => '8.x-3.7',
      ),
      'features' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/modules/contrib/features/features.module',
        'basename' => 'features.module',
        'name' => 'Features',
        'info' => 
        array (
          'name' => 'Features',
          'type' => 'module',
          'description' => 'Enables administrators to package configuration into modules.',
          'package' => 'Development',
          'dependencies' => 
          array (
            0 => 'config',
            1 => 'config_update',
          ),
          'version' => '8.x-3.7',
          'core' => '8.x',
          'project' => 'features',
          'datestamp' => 1519763291,
        ),
        'schema_version' => '8301',
        'version' => '8.x-3.7',
      ),
      'r4032login' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/modules/contrib/r4032login/r4032login.module',
        'basename' => 'r4032login.module',
        'name' => 'Redirect 403 to User Login',
        'info' => 
        array (
          'name' => 'Redirect 403 to User Login',
          'type' => 'module',
          'description' => 'Redirect anonymous users from 403 Access Denied pages to the /user/login page.',
          'configure' => 'system.site_information_settings',
          'version' => '8.x-1.0',
          'core' => '8.x',
          'project' => 'r4032login',
          'datestamp' => 1530773027,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.0',
      ),
      'social_api' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/modules/contrib/social_api/social_api.module',
        'basename' => 'social_api.module',
        'name' => 'Social API',
        'info' => 
        array (
          'name' => 'Social API',
          'description' => 'Common interface for communicating with social networking services.',
          'package' => 'Social',
          'type' => 'module',
          'version' => '8.x-1.1',
          'core' => '8.x',
          'project' => 'social_api',
          'datestamp' => 1501779546,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.1',
      ),
      'field_group' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/modules/contrib/field_group/field_group.module',
        'basename' => 'field_group.module',
        'name' => 'Field Group',
        'info' => 
        array (
          'name' => 'Field Group',
          'type' => 'module',
          'description' => 'Provides the ability to group your fields on both form and display.',
          'package' => 'Fields',
          'dependencies' => 
          array (
            0 => 'drupal:field',
          ),
          'version' => '8.x-3.0-beta1',
          'core' => '8.x',
          'project' => 'field_group',
          'datestamp' => 1510352294,
        ),
        'schema_version' => 8000,
        'version' => '8.x-3.0-beta1',
      ),
      'image_effects' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/modules/contrib/image_effects/image_effects.module',
        'basename' => 'image_effects.module',
        'name' => 'Image Effects',
        'info' => 
        array (
          'type' => 'module',
          'name' => 'Image Effects',
          'description' => 'Provides effects and operations for the Image API.',
          'package' => 'Media',
          'configure' => 'image_effects.settings',
          'dependencies' => 
          array (
            0 => 'drupal:image',
            1 => 'drupal:system (>=8.2.0)',
          ),
          'test_dependencies' => 
          array (
            0 => 'imagemagick:imagemagick',
            1 => 'jquery_colorpicker:jquery_colorpicker',
          ),
          'version' => '8.x-1.0',
          'core' => '8.x',
          'project' => 'image_effects',
          'datestamp' => 1492431845,
        ),
        'schema_version' => '8004',
        'version' => '8.x-1.0',
      ),
      'mailsystem' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/modules/contrib/mailsystem/mailsystem.module',
        'basename' => 'mailsystem.module',
        'name' => 'Mail System',
        'info' => 
        array (
          'package' => 'Mail',
          'name' => 'Mail System',
          'description' => 'Provides a user interface for per-module and site-wide mail_system selection.',
          'type' => 'module',
          'configure' => 'mailsystem.settings',
          'dependencies' => 
          array (
            0 => 'filter',
            1 => 'system (>=8.0.5)',
          ),
          'version' => '8.x-4.1',
          'core' => '8.x',
          'project' => 'mailsystem',
          'datestamp' => 1467993737,
        ),
        'schema_version' => 8000,
        'version' => '8.x-4.1',
      ),
      'entity_reference_revisions' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/modules/contrib/entity_reference_revisions/entity_reference_revisions.module',
        'basename' => 'entity_reference_revisions.module',
        'name' => 'Entity Reference Revisions',
        'info' => 
        array (
          'name' => 'Entity Reference Revisions',
          'type' => 'module',
          'description' => 'Adds a Entity Reference field type with revision support.',
          'package' => 'Field types',
          'test_dependencies' => 
          array (
            0 => 'diff:diff',
          ),
          'version' => '8.x-1.4',
          'core' => '8.x',
          'project' => 'entity_reference_revisions',
          'datestamp' => 1515143887,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.4',
      ),
      'swiftmailer_test' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/modules/contrib/swiftmailer/tests/modules/swiftmailer_test/swiftmailer_test.module',
        'basename' => 'swiftmailer_test.module',
        'name' => 'SwiftMailer Test Module',
        'info' => 
        array (
          'name' => 'SwiftMailer Test Module',
          'type' => 'module',
          'description' => 'Support module for SwiftMailer testing.',
          'package' => 'Testing',
          'version' => '8.x-1.0-beta2',
          'core' => '8.x',
          'project' => 'swiftmailer',
          'datestamp' => 1519655297,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.0-beta2',
      ),
      'swiftmailer' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/modules/contrib/swiftmailer/swiftmailer.module',
        'basename' => 'swiftmailer.module',
        'name' => 'Swift Mailer',
        'info' => 
        array (
          'name' => 'Swift Mailer',
          'type' => 'module',
          'description' => 'Installs Swift Mailer as a mail system.',
          'package' => 'Mail',
          'configure' => 'swiftmailer.transport_settings',
          'dependencies' => 
          array (
            0 => 'mailsystem',
          ),
          'version' => '8.x-1.0-beta2',
          'core' => '8.x',
          'project' => 'swiftmailer',
          'datestamp' => 1519655297,
        ),
        'schema_version' => '8102',
        'version' => '8.x-1.0-beta2',
      ),
      'image_widget_crop' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/modules/contrib/image_widget_crop/image_widget_crop.module',
        'basename' => 'image_widget_crop.module',
        'name' => 'ImageWidgetCrop',
        'info' => 
        array (
          'name' => 'ImageWidgetCrop',
          'type' => 'module',
          'description' => 'Provides an interface for using the features of the Crop API.',
          'package' => 'Media',
          'configure' => 'image_widget_crop.crop_widget_settings',
          'dependencies' => 
          array (
            0 => 'crop',
            1 => 'image',
          ),
          'test_dependencies' => 
          array (
            0 => 'file_entity',
          ),
          'version' => '8.x-2.1',
          'core' => '8.x',
          'project' => 'image_widget_crop',
          'datestamp' => 1510138593,
        ),
        'schema_version' => 8000,
        'version' => '8.x-2.1',
      ),
      'votingapi_test' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/modules/contrib/votingapi/tests/modules/votingapi_test/votingapi_test.module',
        'basename' => 'votingapi_test.module',
        'name' => 'Voting API test',
        'info' => 
        array (
          'name' => 'Voting API test',
          'type' => 'module',
          'description' => 'Support module for Voting API testing.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'node',
            1 => 'votingapi',
          ),
          'version' => '8.x-3.0-alpha5',
          'core' => '8.x',
          'project' => 'votingapi',
          'datestamp' => 1520019787,
        ),
        'schema_version' => 8000,
        'version' => '8.x-3.0-alpha5',
      ),
      'votingapi' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/modules/contrib/votingapi/votingapi.module',
        'basename' => 'votingapi.module',
        'name' => 'Voting API',
        'info' => 
        array (
          'name' => 'Voting API',
          'type' => 'module',
          'description' => 'Provides a voting API that other modules can make use of.',
          'package' => 'Voting',
          'configure' => 'votingapi.admin_settings',
          'version' => '8.x-3.0-alpha5',
          'core' => '8.x',
          'project' => 'votingapi',
          'datestamp' => 1520019787,
        ),
        'schema_version' => '8301',
        'version' => '8.x-3.0-alpha5',
      ),
      'flag_follower' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/modules/contrib/flag/modules/flag_follower/flag_follower.module',
        'basename' => 'flag_follower.module',
        'name' => 'Flag Follower',
        'info' => 
        array (
          'name' => 'Flag Follower',
          'description' => 'Provides an example user flag and supporting views.',
          'type' => 'module',
          'dependencies' => 
          array (
            0 => 'flag:flag',
            1 => 'drupal:views',
            2 => 'drupal:node',
          ),
          'package' => 'Flags',
          'version' => '8.x-4.0-alpha2',
          'core' => '8.x',
          'project' => 'flag',
          'datestamp' => 1494517390,
        ),
        'schema_version' => 8000,
        'version' => '8.x-4.0-alpha2',
      ),
      'flag_bookmark' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/modules/contrib/flag/modules/flag_bookmark/flag_bookmark.module',
        'basename' => 'flag_bookmark.module',
        'name' => 'Flag Bookmark',
        'info' => 
        array (
          'name' => 'Flag Bookmark',
          'description' => 'Provides an example bookmark flag and supporting views.',
          'type' => 'module',
          'dependencies' => 
          array (
            0 => 'flag:flag',
            1 => 'drupal:views',
            2 => 'drupal:node',
          ),
          'package' => 'Flags',
          'version' => '8.x-4.0-alpha2',
          'core' => '8.x',
          'project' => 'flag',
          'datestamp' => 1494517390,
        ),
        'schema_version' => 8000,
        'version' => '8.x-4.0-alpha2',
      ),
      'flagging_admin' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/modules/contrib/flag/tests/modules/flagging_admin/flagging_admin.module',
        'basename' => 'flagging_admin.module',
        'name' => 'Flagging Admin',
        'info' => 
        array (
          'name' => 'Flagging Admin',
          'description' => 'Provides an admin view for Flaggings.',
          'core' => '8.x',
          'type' => 'module',
          'dependencies' => 
          array (
            0 => 'flag',
            1 => 'flag_follower',
            2 => 'flag_bookmark',
            3 => 'views',
            4 => 'node',
            5 => 'user',
          ),
          'package' => 'Testing',
        ),
        'schema_version' => 8000,
        'version' => NULL,
      ),
      'flag' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/modules/contrib/flag/flag.module',
        'basename' => 'flag.module',
        'name' => 'Flag',
        'info' => 
        array (
          'name' => 'Flag',
          'description' => 'Create customized flags that users can set on entities.',
          'type' => 'module',
          'package' => 'Flags',
          'configure' => 'entity.flag.collection',
          'version' => '8.x-4.0-alpha2',
          'core' => '8.x',
          'project' => 'flag',
          'datestamp' => 1494517390,
        ),
        'schema_version' => 8000,
        'version' => '8.x-4.0-alpha2',
      ),
      'social_auth' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/modules/contrib/social_auth/social_auth.module',
        'basename' => 'social_auth.module',
        'name' => 'Social API Auth',
        'info' => 
        array (
          'name' => 'Social API Auth',
          'type' => 'module',
          'description' => 'Allows login using different social networking services',
          'package' => 'Social',
          'dependencies' => 
          array (
            0 => 'social_api',
          ),
          'version' => '8.x-1.0',
          'core' => '8.x',
          'project' => 'social_auth',
          'datestamp' => 1501779246,
        ),
        'schema_version' => '8002',
        'version' => '8.x-1.0',
      ),
      'config_update_ui' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/modules/contrib/config_update/config_update_ui/config_update_ui.module',
        'basename' => 'config_update_ui.module',
        'name' => 'Configuration Update Reports',
        'info' => 
        array (
          'name' => 'Configuration Update Reports',
          'type' => 'module',
          'description' => 'Adds an updates report and revert functionality to configuration management',
          'configure' => 'config_update.report',
          'dependencies' => 
          array (
            0 => 'config_update:config_update',
            1 => 'drupal:config',
          ),
          'version' => '8.x-1.5',
          'core' => '8.x',
          'project' => 'config_update',
          'datestamp' => 1512514387,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.5',
      ),
      'config_update' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/modules/contrib/config_update/config_update.module',
        'basename' => 'config_update.module',
        'name' => 'Configuration Update Base',
        'info' => 
        array (
          'name' => 'Configuration Update Base',
          'type' => 'module',
          'description' => 'Provides basic revert and update functionality for other modules',
          'dependencies' => 
          array (
            0 => 'drupal:config',
          ),
          'version' => '8.x-1.5',
          'core' => '8.x',
          'project' => 'config_update',
          'datestamp' => 1512514387,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.5',
      ),
      'like_and_dislike' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/modules/contrib/like_and_dislike/like_and_dislike.module',
        'basename' => 'like_and_dislike.module',
        'name' => 'Like & Dislike',
        'info' => 
        array (
          'name' => 'Like & Dislike',
          'type' => 'module',
          'description' => 'Enable like and dislike widgets and statistics',
          'package' => 'Voting',
          'configure' => 'like_and_dislike.admin_settings',
          'dependencies' => 
          array (
            0 => 'votingapi',
          ),
          'version' => '8.x-1.0-alpha2',
          'core' => '8.x',
          'project' => 'like_and_dislike',
          'datestamp' => 1476452345,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.0-alpha2',
      ),
      'link_css' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/modules/contrib/link_css/link_css.module',
        'basename' => 'link_css.module',
        'name' => 'Link CSS',
        'info' => 
        array (
          'name' => 'Link CSS',
          'type' => 'module',
          'description' => 'Include CSS files using <link> element instead of @import.',
          'package' => 'Development',
          'core' => '8.x',
          'configure' => 'link_css.admin',
        ),
        'schema_version' => 8000,
        'version' => NULL,
      ),
      'private_message' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/modules/contrib/private_message/private_message.module',
        'basename' => 'private_message.module',
        'name' => 'Private Message',
        'info' => 
        array (
          'name' => 'Private Message',
          'description' => 'A private message system for users to send messages to each other',
          'type' => 'module',
          'dependencies' => 
          array (
            0 => 'drupal:text',
          ),
          'configure' => 'private_message.admin_config.config',
          'version' => '8.x-1.0',
          'core' => '8.x',
          'project' => 'private_message',
          'datestamp' => 1525429993,
        ),
        'schema_version' => '8001',
        'version' => '8.x-1.0',
      ),
      'address' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/modules/contrib/address/address.module',
        'basename' => 'address.module',
        'name' => 'Address',
        'info' => 
        array (
          'name' => 'Address',
          'type' => 'module',
          'description' => 'Provides functionality for handling postal addresses.',
          'package' => 'Field types',
          'config' => 'entity.address_format.collection',
          'dependencies' => 
          array (
            0 => 'drupal:field',
          ),
          'test_dependencies' => 
          array (
            0 => 'token:token',
          ),
          'version' => '8.x-1.4',
          'core' => '8.x',
          'project' => 'address',
          'datestamp' => 1527081787,
        ),
        'schema_version' => '8103',
        'version' => '8.x-1.4',
      ),
      'search_api_db' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/modules/contrib/search_api/modules/search_api_db/search_api_db.module',
        'basename' => 'search_api_db.module',
        'name' => 'Database Search',
        'info' => 
        array (
          'type' => 'module',
          'name' => 'Database Search',
          'description' => 'Offers an implementation of the Search API that uses database tables for indexing content.',
          'package' => 'Search',
          'dependencies' => 
          array (
            0 => 'search_api:search_api',
          ),
          'version' => '8.x-1.6',
          'core' => '8.x',
          'project' => 'search_api',
          'datestamp' => 1514109797,
        ),
        'schema_version' => '8102',
        'version' => '8.x-1.6',
      ),
      'search_api' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/modules/contrib/search_api/search_api.module',
        'basename' => 'search_api.module',
        'name' => 'Search API',
        'info' => 
        array (
          'type' => 'module',
          'name' => 'Search API',
          'description' => 'Provides a generic framework for modules offering search capabilities.',
          'package' => 'Search',
          'configure' => 'search_api.overview',
          'dependencies' => 
          array (
            0 => 'system (>=8.4)',
          ),
          'version' => '8.x-1.6',
          'core' => '8.x',
          'project' => 'search_api',
          'datestamp' => 1514109797,
        ),
        'schema_version' => '8104',
        'version' => '8.x-1.6',
      ),
      'message_example' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/modules/contrib/message/modules/message_example/message_example.module',
        'basename' => 'message_example.module',
        'name' => 'Message example',
        'info' => 
        array (
          'name' => 'Message example',
          'type' => 'module',
          'description' => 'Example message for working with the message module.',
          'package' => 'Message',
          'dependencies' => 
          array (
            0 => 'message',
            1 => 'token',
            2 => 'node',
            3 => 'comment',
          ),
          'version' => '8.x-1.0-rc1',
          'core' => '8.x',
          'project' => 'message',
          'datestamp' => 1508449453,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.0-rc1',
      ),
      'message' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/modules/contrib/message/message.module',
        'basename' => 'message.module',
        'name' => 'Message',
        'info' => 
        array (
          'name' => 'Message',
          'type' => 'module',
          'description' => 'A general message logging utility.',
          'package' => 'Message',
          'configure' => 'message.main_settings',
          'dependencies' => 
          array (
            0 => 'text',
          ),
          'version' => '8.x-1.0-rc1',
          'core' => '8.x',
          'project' => 'message',
          'datestamp' => 1508449453,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.0-rc1',
      ),
      'token' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/modules/contrib/token/token.module',
        'basename' => 'token.module',
        'name' => 'Token',
        'info' => 
        array (
          'type' => 'module',
          'name' => 'Token',
          'description' => 'Provides a user interface for the Token API and some missing core tokens.',
          'version' => '8.x-1.1',
          'core' => '8.x',
          'project' => 'token',
          'datestamp' => 1513810387,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.1',
      ),
      'url_embed' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/modules/contrib/url_embed/url_embed.module',
        'basename' => 'url_embed.module',
        'name' => 'URL Embed',
        'info' => 
        array (
          'name' => 'URL Embed',
          'type' => 'module',
          'description' => 'Allows URLs to be embedded using a text editor.',
          'package' => 'Filters',
          'dependencies' => 
          array (
            0 => 'editor',
            1 => 'embed',
            2 => 'filter',
          ),
          'version' => '8.x-1.0-alpha1',
          'core' => '8.x',
          'project' => 'url_embed',
          'datestamp' => 1483115587,
        ),
        'schema_version' => '8002',
        'version' => '8.x-1.0-alpha1',
      ),
      'profile' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/modules/contrib/profile/profile.module',
        'basename' => 'profile.module',
        'name' => 'Profile',
        'info' => 
        array (
          'name' => 'Profile',
          'type' => 'module',
          'description' => 'Provides configurable user profiles.',
          'configure' => 'entity.profile_type.collection',
          'dependencies' => 
          array (
            0 => 'user',
            1 => 'entity',
            2 => 'field',
            3 => 'views',
            4 => 'system (>=8.1.0)',
          ),
          'version' => '8.x-1.0-rc1',
          'core' => '8.x',
          'project' => 'profile',
          'datestamp' => 1505830148,
        ),
        'schema_version' => '8001',
        'version' => '8.x-1.0-rc1',
      ),
      'entity' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/modules/contrib/entity/entity.module',
        'basename' => 'entity.module',
        'name' => 'Entity',
        'info' => 
        array (
          'name' => 'Entity',
          'description' => 'Provides expanded entity APIs, which will be moved to Drupal core one day.',
          'type' => 'module',
          'dependencies' => 
          array (
            0 => 'drupal:system (>=8.5.0)',
          ),
          'version' => '8.x-1.0-beta3',
          'core' => '8.x',
          'project' => 'entity',
          'datestamp' => 1520958515,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.0-beta3',
      ),
      'grolesync' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/modules/contrib/group/modules/grolesync/grolesync.module',
        'basename' => 'grolesync.module',
        'name' => 'Group role sync',
        'info' => 
        array (
          'name' => 'Group role sync',
          'description' => 'THIS IS NOW PART OF THE MAIN MODULE. Will be removed by 8.x-1.0!',
          'package' => 'Group (Obsolete)',
          'type' => 'module',
          'version' => '8.x-1.0-rc2',
          'core' => '8.x',
          'project' => 'group',
          'datestamp' => 1517836781,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.0-rc2',
      ),
      'gnode' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/modules/contrib/group/modules/gnode/gnode.module',
        'basename' => 'gnode.module',
        'name' => 'Group Node',
        'info' => 
        array (
          'name' => 'Group Node',
          'description' => 'Enables Group functionality for the Node module',
          'package' => 'Group',
          'type' => 'module',
          'dependencies' => 
          array (
            0 => 'node',
            1 => 'group',
          ),
          'version' => '8.x-1.0-rc2',
          'core' => '8.x',
          'project' => 'group',
          'datestamp' => 1517836781,
        ),
        'schema_version' => '8005',
        'version' => '8.x-1.0-rc2',
      ),
      'group_test' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/modules/contrib/group/tests/modules/group_test/group_test.module',
        'basename' => 'group_test.module',
        'name' => 'Group test',
        'info' => 
        array (
          'name' => 'Group test',
          'description' => 'Support module for Group tests.',
          'package' => 'Testing',
          'type' => 'module',
          'dependencies' => 
          array (
            0 => 'group',
            1 => 'user',
          ),
          'version' => '8.x-1.0-rc2',
          'core' => '8.x',
          'project' => 'group',
          'datestamp' => 1517836781,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.0-rc2',
      ),
      'group' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/modules/contrib/group/group.module',
        'basename' => 'group.module',
        'name' => 'Group',
        'info' => 
        array (
          'name' => 'Group',
          'description' => 'Allows you to group users, content and other entities',
          'package' => 'Group',
          'type' => 'module',
          'configure' => 'group.settings',
          'dependencies' => 
          array (
            0 => 'options',
          ),
          'version' => '8.x-1.0-rc2',
          'core' => '8.x',
          'project' => 'group',
          'datestamp' => 1517836781,
        ),
        'schema_version' => '8014',
        'version' => '8.x-1.0-rc2',
      ),
      'addtoany' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/modules/contrib/addtoany/addtoany.module',
        'basename' => 'addtoany.module',
        'name' => 'AddToAny',
        'info' => 
        array (
          'name' => 'AddToAny',
          'type' => 'module',
          'description' => 'Share buttons by AddToAny, including the AddToAny universal sharing button, Facebook, Twitter, Google+, Pinterest, and over 100 more on the <a href="https://www.addtoany.com/" target="_blank">AddToAny</a> platform.',
          'package' => 'Other',
          'dependencies' => 
          array (
            0 => 'drupal:node',
          ),
          'configure' => 'addtoany.admin_settings',
          'version' => '8.x-1.9',
          'core' => '8.x',
          'project' => 'addtoany',
          'datestamp' => 1520385667,
        ),
        'schema_version' => '8101',
        'version' => '8.x-1.9',
      ),
      'paragraphs_demo' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/modules/contrib/paragraphs/modules/paragraphs_demo/paragraphs_demo.module',
        'basename' => 'paragraphs_demo.module',
        'name' => 'Paragraphs Demo',
        'info' => 
        array (
          'description' => 'Provides multilingual demo Paragraphs types.',
          'dependencies' => 
          array (
            0 => 'paragraphs:paragraphs',
            1 => 'drupal:field',
            2 => 'drupal:image',
            3 => 'drupal:field_ui',
            4 => 'drupal:block',
            5 => 'drupal:language',
            6 => 'drupal:content_translation',
            7 => 'drupal:node',
            8 => 'search_api:search_api_db',
            9 => 'search_api:search_api',
            10 => 'drupal:views',
            11 => 'drupal:taxonomy',
          ),
          'hidden' => false,
          'name' => 'Paragraphs Demo',
          'package' => 'Paragraphs',
          'type' => 'module',
          'version' => '8.x-1.2',
          'core' => '8.x',
          'project' => 'paragraphs',
          'datestamp' => 1505802547,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.2',
      ),
      'paragraphs_type_permissions' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/modules/contrib/paragraphs/modules/paragraphs_type_permissions/paragraphs_type_permissions.module',
        'basename' => 'paragraphs_type_permissions.module',
        'name' => 'Paragraphs Type Permissions',
        'info' => 
        array (
          'name' => 'Paragraphs Type Permissions',
          'type' => 'module',
          'description' => 'Allows users to configure permissions for individual Paragraphs types.',
          'package' => 'Paragraphs',
          'dependencies' => 
          array (
            0 => 'paragraphs:paragraphs',
          ),
          'version' => '8.x-1.2',
          'core' => '8.x',
          'project' => 'paragraphs',
          'datestamp' => 1505802547,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.2',
      ),
      'paragraphs' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/modules/contrib/paragraphs/paragraphs.module',
        'basename' => 'paragraphs.module',
        'name' => 'Paragraphs',
        'info' => 
        array (
          'name' => 'Paragraphs',
          'type' => 'module',
          'description' => 'Enables the creation of paragraphs entities.',
          'package' => 'Paragraphs',
          'configure' => 'entity.paragraphs_type.collection',
          'dependencies' => 
          array (
            0 => 'entity_reference_revisions:entity_reference_revisions',
            1 => 'drupal:file',
          ),
          'test_dependencies' => 
          array (
            0 => 'diff:diff',
            1 => 'replicate:replicate',
            2 => 'inline_entity_form:inline_entity_form',
            3 => 'field_group:field_group',
            4 => 'block_field:block_field',
          ),
          'version' => '8.x-1.2',
          'core' => '8.x',
          'project' => 'paragraphs',
          'datestamp' => 1505802547,
        ),
        'schema_version' => '8012',
        'version' => '8.x-1.2',
      ),
      'dynamic_entity_reference_entity_test' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/modules/contrib/dynamic_entity_reference/tests/modules/dynamic_entity_reference_entity_test/dynamic_entity_reference_entity_test.module',
        'basename' => 'dynamic_entity_reference_entity_test.module',
        'name' => 'Dynamic Entity Reference Entity Test',
        'info' => 
        array (
          'name' => 'Dynamic Entity Reference Entity Test',
          'type' => 'module',
          'description' => 'Provides base fields for dynamic_entity_reference tests of entity_test entity type.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'dynamic_entity_reference',
            1 => 'entity_test',
          ),
          'version' => '8.x-1.5',
          'core' => '8.x',
          'project' => 'dynamic_entity_reference',
          'datestamp' => 1516093091,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.5',
      ),
      'dynamic_entity_reference' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/modules/contrib/dynamic_entity_reference/dynamic_entity_reference.module',
        'basename' => 'dynamic_entity_reference.module',
        'name' => 'Dynamic Entity Reference',
        'info' => 
        array (
          'name' => 'Dynamic Entity Reference',
          'type' => 'module',
          'description' => 'Provides an entity reference field that can reference multiple entity types.',
          'package' => 'Field types',
          'dependencies' => 
          array (
            0 => 'drupal:field',
          ),
          'test_dependencies' => 
          array (
            0 => 'drupal:field_ui',
            1 => 'drupal:language',
            2 => 'drupal:locale',
            3 => 'drupal:node',
            4 => 'drupal:taxonomy',
          ),
          'version' => '8.x-1.5',
          'core' => '8.x',
          'project' => 'dynamic_entity_reference',
          'datestamp' => 1516093091,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.5',
      ),
      'views_infinite_scroll' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/modules/contrib/views_infinite_scroll/views_infinite_scroll.module',
        'basename' => 'views_infinite_scroll.module',
        'name' => 'Views Infinite Scroll',
        'info' => 
        array (
          'name' => 'Views Infinite Scroll',
          'type' => 'module',
          'description' => 'A pager which allows an infinite scroll effect for views.',
          'package' => 'Views',
          'dependencies' => 
          array (
            0 => 'views',
          ),
          'version' => '8.x-1.5',
          'core' => '8.x',
          'project' => 'views_infinite_scroll',
          'datestamp' => 1503109450,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.5',
      ),
      'override_node_options' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/modules/contrib/override_node_options/override_node_options.module',
        'basename' => 'override_node_options.module',
        'name' => 'Override Node Options',
        'info' => 
        array (
          'name' => 'Override Node Options',
          'description' => 'Allow non-admins to override the default publishing options for nodes they can edit.',
          'type' => 'module',
          'package' => 'Permissions',
          'configure' => 'override_node_options.settings',
          'dependencies' => 
          array (
            0 => 'drupal:node',
            1 => 'drupal:system (>=8.4.0)',
          ),
          'version' => '8.x-2.3',
          'core' => '8.x',
          'project' => 'override_node_options',
          'datestamp' => 1507667646,
        ),
        'schema_version' => 8000,
        'version' => '8.x-2.3',
      ),
      'locale' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/locale/locale.module',
        'basename' => 'locale.module',
        'name' => 'Interface Translation',
        'info' => 
        array (
          'name' => 'Interface Translation',
          'type' => 'module',
          'description' => 'Translates the built-in user interface.',
          'configure' => 'locale.translate_page',
          'package' => 'Multilingual',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'language',
            1 => 'file',
          ),
        ),
        'schema_version' => '8500',
        'version' => '8.5.6',
      ),
      'migrate_cckfield_plugin_manager_test' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/migrate_drupal/tests/modules/migrate_cckfield_plugin_manager_test/migrate_cckfield_plugin_manager_test.module',
        'basename' => 'migrate_cckfield_plugin_manager_test.module',
        'name' => 'Migrate cck field plugin manager test',
        'info' => 
        array (
          'name' => 'Migrate cck field plugin manager test',
          'type' => 'module',
          'description' => 'Example module demonstrating the cck field plugin manager in the Migrate API.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'migrate_drupal' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/migrate_drupal/migrate_drupal.module',
        'basename' => 'migrate_drupal.module',
        'name' => 'Migrate Drupal',
        'info' => 
        array (
          'name' => 'Migrate Drupal',
          'type' => 'module',
          'description' => 'Contains migrations from older Drupal versions.',
          'package' => 'Core (Experimental)',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'migrate',
          ),
        ),
        'schema_version' => '8502',
        'version' => '8.5.6',
      ),
      'aggregator' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/aggregator/aggregator.module',
        'basename' => 'aggregator.module',
        'name' => 'Aggregator',
        'info' => 
        array (
          'name' => 'Aggregator',
          'type' => 'module',
          'description' => 'Aggregates syndicated content (RSS, RDF, and Atom feeds) from external sources.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
          'configure' => 'aggregator.admin_settings',
          'dependencies' => 
          array (
            0 => 'file',
            1 => 'options',
          ),
        ),
        'schema_version' => '8501',
        'version' => '8.5.6',
      ),
      'automated_cron' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/automated_cron/automated_cron.module',
        'basename' => 'automated_cron.module',
        'name' => 'Automated Cron',
        'info' => 
        array (
          'name' => 'Automated Cron',
          'type' => 'module',
          'description' => 'Provides an automated way to run cron jobs, by executing them at the end of a server response.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
          'configure' => 'system.cron_settings',
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'config_translation_test' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/config_translation/tests/modules/config_translation_test/config_translation_test.module',
        'basename' => 'config_translation_test.module',
        'name' => 'Configuration Translation Test',
        'info' => 
        array (
          'name' => 'Configuration Translation Test',
          'description' => 'Helpers to test the configuration translation system',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'config_translation',
            1 => 'config_test',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'config_translation' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/config_translation/config_translation.module',
        'basename' => 'config_translation.module',
        'name' => 'Configuration Translation',
        'info' => 
        array (
          'name' => 'Configuration Translation',
          'type' => 'module',
          'description' => 'Provides a translation interface for configuration.',
          'package' => 'Multilingual',
          'version' => 'VERSION',
          'core' => '8.x',
          'configure' => 'config_translation.mapper_list',
          'dependencies' => 
          array (
            0 => 'locale',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'filter_test' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/filter/tests/filter_test/filter_test.module',
        'basename' => 'filter_test.module',
        'name' => 'Filter test module',
        'info' => 
        array (
          'name' => 'Filter test module',
          'type' => 'module',
          'description' => 'Tests filter hooks and functions.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'filter',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'filter' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/filter/filter.module',
        'basename' => 'filter.module',
        'name' => 'Filter',
        'info' => 
        array (
          'name' => 'Filter',
          'type' => 'module',
          'description' => 'Filters content in preparation for display.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
          'configure' => 'filter.admin_overview',
          'dependencies' => 
          array (
            0 => 'user',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'tracker' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/tracker/tracker.module',
        'basename' => 'tracker.module',
        'name' => 'Activity Tracker',
        'info' => 
        array (
          'name' => 'Activity Tracker',
          'type' => 'module',
          'description' => 'Enables tracking of recent content for users.',
          'dependencies' => 
          array (
            0 => 'node',
            1 => 'comment',
          ),
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'color' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/color/color.module',
        'basename' => 'color.module',
        'name' => 'Color',
        'info' => 
        array (
          'name' => 'Color',
          'type' => 'module',
          'description' => 'Allows administrators to change the color scheme of compatible themes.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'settings_tray_test_css' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/settings_tray/tests/modules/settings_tray_test_css/settings_tray_test_css.module',
        'basename' => 'settings_tray_test_css.module',
        'name' => 'CSS Test fix',
        'info' => 
        array (
          'name' => 'CSS Test fix',
          'type' => 'module',
          'description' => 'Provides CSS fixes for tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'settings_tray',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'settings_tray' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/settings_tray/settings_tray.module',
        'basename' => 'settings_tray.module',
        'name' => 'Settings Tray',
        'info' => 
        array (
          'name' => 'Settings Tray',
          'type' => 'module',
          'description' => 'Provides a sidebar to configure blocks on the page.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'block',
            1 => 'toolbar',
            2 => 'contextual',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'dynamic_page_cache' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/dynamic_page_cache/dynamic_page_cache.module',
        'basename' => 'dynamic_page_cache.module',
        'name' => 'Internal Dynamic Page Cache',
        'info' => 
        array (
          'name' => 'Internal Dynamic Page Cache',
          'type' => 'module',
          'description' => 'Caches pages for any user, handling dynamic content correctly.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'link' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/link/link.module',
        'basename' => 'link.module',
        'name' => 'Link',
        'info' => 
        array (
          'name' => 'Link',
          'type' => 'module',
          'description' => 'Provides a simple link field type.',
          'core' => '8.x',
          'package' => 'Field types',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'field',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'shortcut' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/shortcut/shortcut.module',
        'basename' => 'shortcut.module',
        'name' => 'Shortcut',
        'info' => 
        array (
          'name' => 'Shortcut',
          'type' => 'module',
          'description' => 'Allows users to manage customizable lists of shortcut links.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
          'configure' => 'entity.shortcut_set.collection',
          'dependencies' => 
          array (
            0 => 'link',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'book_test' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/book/tests/modules/book_test/book_test.module',
        'basename' => 'book_test.module',
        'name' => 'Book module tests',
        'info' => 
        array (
          'name' => 'Book module tests',
          'type' => 'module',
          'description' => 'Support module for book module testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'book_breadcrumb_test' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/book/tests/modules/book_breadcrumb_test/book_breadcrumb_test.module',
        'basename' => 'book_breadcrumb_test.module',
        'name' => 'Book module breadcrumb tests',
        'info' => 
        array (
          'name' => 'Book module breadcrumb tests',
          'type' => 'module',
          'description' => 'Support module for book module breadcrumb testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'book' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/book/book.module',
        'basename' => 'book.module',
        'name' => 'Book',
        'info' => 
        array (
          'name' => 'Book',
          'type' => 'module',
          'description' => 'Allows users to create and organize related content in an outline.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'node',
          ),
          'configure' => 'book.settings',
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'theme_suggestions_test' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/system/tests/modules/theme_suggestions_test/theme_suggestions_test.module',
        'basename' => 'theme_suggestions_test.module',
        'name' => 'Theme suggestions test',
        'info' => 
        array (
          'name' => 'Theme suggestions test',
          'type' => 'module',
          'description' => 'Support module for testing theme suggestions.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'entity_reference_test' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/system/tests/modules/entity_reference_test/entity_reference_test.module',
        'basename' => 'entity_reference_test.module',
        'name' => 'Entity Reference Test',
        'info' => 
        array (
          'name' => 'Entity Reference Test',
          'type' => 'module',
          'description' => 'Support module for the Entity Reference tests.',
          'core' => '8.x',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'node',
            1 => 'user',
            2 => 'views',
            3 => 'entity_test',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'entity_test_operation' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/system/tests/modules/entity_test_operation/entity_test_operation.module',
        'basename' => 'entity_test_operation.module',
        'name' => 'Entity Operation Test',
        'info' => 
        array (
          'name' => 'Entity Operation Test',
          'type' => 'module',
          'description' => 'Provides a test operation to entities.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'batch_test' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/system/tests/modules/batch_test/batch_test.module',
        'basename' => 'batch_test.module',
        'name' => 'Batch API test',
        'info' => 
        array (
          'name' => 'Batch API test',
          'type' => 'module',
          'description' => 'Support module for Batch API tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'entity_schema_test' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/system/tests/modules/entity_schema_test/entity_schema_test.module',
        'basename' => 'entity_schema_test.module',
        'name' => 'Entity schema test module',
        'info' => 
        array (
          'name' => 'Entity schema test module',
          'type' => 'module',
          'description' => 'Provides entity and field definitions to test entity schema.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'entity_test',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'update_script_test' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/system/tests/modules/update_script_test/update_script_test.module',
        'basename' => 'update_script_test.module',
        'name' => 'Update script test',
        'info' => 
        array (
          'name' => 'Update script test',
          'type' => 'module',
          'description' => 'Support module for update script testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => '8001',
        'version' => '8.5.6',
      ),
      'experimental_module_requirements_test' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/system/tests/modules/experimental_module_requirements_test/experimental_module_requirements_test.module',
        'basename' => 'experimental_module_requirements_test.module',
        'name' => 'Experimental Requirements Test',
        'info' => 
        array (
          'name' => 'Experimental Requirements Test',
          'type' => 'module',
          'description' => 'Module in the experimental package to test hook_requirements() with an experimental module.',
          'package' => 'Core (Experimental)',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'database_test' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/system/tests/modules/database_test/database_test.module',
        'basename' => 'database_test.module',
        'name' => 'Database Test',
        'info' => 
        array (
          'name' => 'Database Test',
          'type' => 'module',
          'description' => 'Support module for Database layer tests.',
          'core' => '8.x',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'common_test_cron_helper' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/system/tests/modules/common_test_cron_helper/common_test_cron_helper.module',
        'basename' => 'common_test_cron_helper.module',
        'name' => 'Common Test Cron Helper',
        'info' => 
        array (
          'name' => 'Common Test Cron Helper',
          'type' => 'module',
          'description' => 'Helper module for CronRunTestCase::testCronExceptions().',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'theme_page_test' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/system/tests/modules/theme_page_test/theme_page_test.module',
        'basename' => 'theme_page_test.module',
        'name' => 'Theme page test',
        'info' => 
        array (
          'name' => 'Theme page test',
          'type' => 'module',
          'description' => 'Support module for theme system testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'ajax_forms_test' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/system/tests/modules/ajax_forms_test/ajax_forms_test.module',
        'basename' => 'ajax_forms_test.module',
        'name' => 'AJAX form test mock module',
        'info' => 
        array (
          'name' => 'AJAX form test mock module',
          'type' => 'module',
          'description' => 'Test for AJAX form calls.',
          'core' => '8.x',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'link_generation_test' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/system/tests/modules/link_generation_test/link_generation_test.module',
        'basename' => 'link_generation_test.module',
        'name' => 'Link generation test support',
        'info' => 
        array (
          'name' => 'Link generation test support',
          'type' => 'module',
          'description' => 'Test hooks fired in link generation.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'common_test' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/system/tests/modules/common_test/common_test.module',
        'basename' => 'common_test.module',
        'name' => 'Common Test',
        'info' => 
        array (
          'name' => 'Common Test',
          'type' => 'module',
          'description' => 'Support module for Common tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'layout_test' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/system/tests/modules/layout_test/layout_test.module',
        'basename' => 'layout_test.module',
        'name' => 'Layout test',
        'info' => 
        array (
          'name' => 'Layout test',
          'type' => 'module',
          'description' => 'Support module for testing layouts.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'entity_test' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/system/tests/modules/entity_test/entity_test.module',
        'basename' => 'entity_test.module',
        'name' => 'Entity CRUD test module',
        'info' => 
        array (
          'name' => 'Entity CRUD test module',
          'type' => 'module',
          'description' => 'Provides entity types based upon the CRUD API.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'field',
            1 => 'text',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'system_module_test' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/system/tests/modules/system_module_test/system_module_test.module',
        'basename' => 'system_module_test.module',
        'name' => 'System test',
        'info' => 
        array (
          'name' => 'System test',
          'type' => 'module',
          'description' => 'Provides hook implementations for testing System module functionality.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'system_test' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/system/tests/modules/system_test/system_test.module',
        'basename' => 'system_test.module',
        'name' => 'System test',
        'info' => 
        array (
          'name' => 'System test',
          'type' => 'module',
          'description' => 'Support module for system testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'configure' => 'system_test.configure',
          'configure_parameters' => 
          array (
            'foo' => 'bar',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'path_test' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/system/tests/modules/path_test/path_test.module',
        'basename' => 'path_test.module',
        'name' => 'Hook path tests',
        'info' => 
        array (
          'name' => 'Hook path tests',
          'type' => 'module',
          'description' => 'Support module for path hook testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'session_test' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/system/tests/modules/session_test/session_test.module',
        'basename' => 'session_test.module',
        'name' => 'Session test',
        'info' => 
        array (
          'name' => 'Session test',
          'type' => 'module',
          'description' => 'Support module for session data testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'theme_test' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/system/tests/modules/theme_test/theme_test.module',
        'basename' => 'theme_test.module',
        'name' => 'Theme test',
        'info' => 
        array (
          'name' => 'Theme test',
          'type' => 'module',
          'description' => 'Support module for theme system testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'deprecation_test' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/system/tests/modules/deprecation_test/deprecation_test.module',
        'basename' => 'deprecation_test.module',
        'name' => 'Deprecation test',
        'info' => 
        array (
          'name' => 'Deprecation test',
          'type' => 'module',
          'description' => 'Support module for testing deprecation behaviors.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'plugin_test' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/system/tests/modules/plugin_test/plugin_test.module',
        'basename' => 'plugin_test.module',
        'name' => 'Plugin Test Support',
        'info' => 
        array (
          'name' => 'Plugin Test Support',
          'type' => 'module',
          'description' => 'Test that plugins can provide plugins and provide namespace discovery for plugin test implementations.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'twig_theme_test' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/system/tests/modules/twig_theme_test/twig_theme_test.module',
        'basename' => 'twig_theme_test.module',
        'name' => 'Twig theme test',
        'info' => 
        array (
          'name' => 'Twig theme test',
          'type' => 'module',
          'description' => 'Support module for Twig theme system testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'entity_test_extra' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/system/tests/modules/entity_test_extra/entity_test_extra.module',
        'basename' => 'entity_test_extra.module',
        'name' => 'Entity test extra',
        'info' => 
        array (
          'name' => 'Entity test extra',
          'type' => 'module',
          'description' => 'Provides extra fields for entity test entity types.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'entity_test',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'experimental_module_dependency_test' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/system/tests/modules/experimental_module_dependency_test/experimental_module_dependency_test.module',
        'basename' => 'experimental_module_dependency_test.module',
        'name' => 'Experimental Dependency Test',
        'info' => 
        array (
          'name' => 'Experimental Dependency Test',
          'type' => 'module',
          'description' => 'Module with a dependency in the experimental package.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'experimental_module_test',
          ),
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'entity_test_constraints' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/system/tests/modules/entity_test_constraints/entity_test_constraints.module',
        'basename' => 'entity_test_constraints.module',
        'name' => 'Entity constraints test module',
        'info' => 
        array (
          'name' => 'Entity constraints test module',
          'type' => 'module',
          'description' => 'Tests extending and altering entity constraints.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'entity_test',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'theme_region_test' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/system/tests/modules/theme_region_test/theme_region_test.module',
        'basename' => 'theme_region_test.module',
        'name' => 'Theme region test',
        'info' => 
        array (
          'name' => 'Theme region test',
          'type' => 'module',
          'description' => 'Provides hook implementations for testing regions.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'session_exists_cache_context_test' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/system/tests/modules/session_exists_cache_context_test/session_exists_cache_context_test.module',
        'basename' => 'session_exists_cache_context_test.module',
        'name' => 'session.exists cache context test',
        'info' => 
        array (
          'name' => 'session.exists cache context test',
          'type' => 'module',
          'description' => 'Support module for session.exists cache context testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'form_test' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/system/tests/modules/form_test/form_test.module',
        'basename' => 'form_test.module',
        'name' => 'FormAPI Test',
        'info' => 
        array (
          'name' => 'FormAPI Test',
          'type' => 'module',
          'description' => 'Support module for Form API tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'module_test' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/system/tests/modules/module_test/module_test.module',
        'basename' => 'module_test.module',
        'name' => 'Module test',
        'info' => 
        array (
          'name' => 'Module test',
          'type' => 'module',
          'description' => 'Support module for module system testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'menu_test' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/system/tests/modules/menu_test/menu_test.module',
        'basename' => 'menu_test.module',
        'name' => 'Hook menu tests',
        'info' => 
        array (
          'name' => 'Hook menu tests',
          'type' => 'module',
          'description' => 'Support module for menu hook testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'test_page_test',
            1 => 'menu_ui',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'entity_test_update' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/system/tests/modules/entity_test_update/entity_test_update.module',
        'basename' => 'entity_test_update.module',
        'name' => 'Entity Update Test',
        'info' => 
        array (
          'name' => 'Entity Update Test',
          'type' => 'module',
          'description' => 'Provides an entity type for testing definition and schema updates.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'module_required_test' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/system/tests/modules/module_required_test/module_required_test.module',
        'basename' => 'module_required_test.module',
        'name' => 'Module required test',
        'info' => 
        array (
          'name' => 'Module required test',
          'type' => 'module',
          'description' => 'Support module for module system testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:node (>=8.x)',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'experimental_module_test' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/system/tests/modules/experimental_module_test/experimental_module_test.module',
        'basename' => 'experimental_module_test.module',
        'name' => 'Experimental Test',
        'info' => 
        array (
          'name' => 'Experimental Test',
          'type' => 'module',
          'description' => 'Module in the experimental package to test experimental functionality.',
          'package' => 'Core (Experimental)',
          'version' => '8.y.x-unstable',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.y.x-unstable',
      ),
      'lazy_route_provider_install_test' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/system/tests/modules/lazy_route_provider_install_test/lazy_route_provider_install_test.module',
        'basename' => 'lazy_route_provider_install_test.module',
        'name' => 'Lazy route provider install test',
        'info' => 
        array (
          'name' => 'Lazy route provider install test',
          'description' => 'Helps test a bug triggered by the url_generator maintaining a stale route provider.',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'entity_crud_hook_test' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/system/tests/modules/entity_crud_hook_test/entity_crud_hook_test.module',
        'basename' => 'entity_crud_hook_test.module',
        'name' => 'Entity CRUD Hooks Test',
        'info' => 
        array (
          'name' => 'Entity CRUD Hooks Test',
          'type' => 'module',
          'description' => 'Support module for CRUD hook tests.',
          'core' => '8.x',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'twig_extension_test' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/system/tests/modules/twig_extension_test/twig_extension_test.module',
        'basename' => 'twig_extension_test.module',
        'name' => 'Twig Extension Test',
        'info' => 
        array (
          'name' => 'Twig Extension Test',
          'type' => 'module',
          'description' => 'Support module for testing Twig extensions.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'system' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/system/system.module',
        'basename' => 'system.module',
        'name' => 'System',
        'info' => 
        array (
          'name' => 'System',
          'type' => 'module',
          'description' => 'Handles general site configuration for administrators.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
          'required' => true,
          'configure' => 'system.admin_config_system',
        ),
        'schema_version' => '8501',
        'version' => '8.5.6',
      ),
      'hal_test' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/hal/tests/modules/hal_test/hal_test.module',
        'basename' => 'hal_test.module',
        'name' => 'HAL test module',
        'info' => 
        array (
          'name' => 'HAL test module',
          'type' => 'module',
          'description' => 'Support module for HAL tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'hal' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/hal/hal.module',
        'basename' => 'hal.module',
        'name' => 'HAL',
        'info' => 
        array (
          'name' => 'HAL',
          'type' => 'module',
          'description' => 'Serializes entities using Hypertext Application Language.',
          'package' => 'Web services',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'serialization',
          ),
        ),
        'schema_version' => '8501',
        'version' => '8.5.6',
      ),
      'basic_auth' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/basic_auth/basic_auth.module',
        'basename' => 'basic_auth.module',
        'name' => 'HTTP Basic Authentication',
        'info' => 
        array (
          'name' => 'HTTP Basic Authentication',
          'type' => 'module',
          'description' => 'Provides the HTTP Basic authentication provider',
          'package' => 'Web services',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'user',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'help_test' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/help/tests/modules/help_test/help_test.module',
        'basename' => 'help_test.module',
        'name' => 'help_test',
        'info' => 
        array (
          'name' => 'help_test',
          'type' => 'module',
          'core' => '8.x',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'help',
          ),
        ),
        'schema_version' => 8000,
        'version' => NULL,
      ),
      'help' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/help/help.module',
        'basename' => 'help.module',
        'name' => 'Help',
        'info' => 
        array (
          'name' => 'Help',
          'type' => 'module',
          'description' => 'Manages the display of online help.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'layout_discovery' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/layout_discovery/layout_discovery.module',
        'basename' => 'layout_discovery.module',
        'name' => 'Layout Discovery',
        'info' => 
        array (
          'name' => 'Layout Discovery',
          'type' => 'module',
          'description' => 'Provides a way for modules or themes to register layouts.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'field_test' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/field/tests/modules/field_test/field_test.module',
        'basename' => 'field_test.module',
        'name' => 'Field API Test',
        'info' => 
        array (
          'name' => 'Field API Test',
          'type' => 'module',
          'description' => 'Support module for the Field API tests.',
          'core' => '8.x',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'entity_test',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'field_third_party_test' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/field/tests/modules/field_third_party_test/field_third_party_test.module',
        'basename' => 'field_third_party_test.module',
        'name' => 'Field Third Party Settings Test',
        'info' => 
        array (
          'name' => 'Field Third Party Settings Test',
          'type' => 'module',
          'description' => 'Support module for the Field API tests.',
          'core' => '8.x',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'entity_test',
            1 => 'field_test',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'field_test_boolean_access_denied' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/field/tests/modules/field_test_boolean_access_denied/field_test_boolean_access_denied.module',
        'basename' => 'field_test_boolean_access_denied.module',
        'name' => 'Boolean field Test',
        'info' => 
        array (
          'name' => 'Boolean field Test',
          'type' => 'module',
          'description' => 'Support module for the field and entity display tests.',
          'core' => '8.x',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'field',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'field' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/field/field.module',
        'basename' => 'field.module',
        'name' => 'Field',
        'info' => 
        array (
          'name' => 'Field',
          'type' => 'module',
          'description' => 'Field API to add fields to entities like nodes and users.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => '8500',
        'version' => '8.5.6',
      ),
      'search_query_alter' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/search/tests/modules/search_query_alter/search_query_alter.module',
        'basename' => 'search_query_alter.module',
        'name' => 'Test Search Query Alter',
        'info' => 
        array (
          'name' => 'Test Search Query Alter',
          'type' => 'module',
          'description' => 'Support module for Search module testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'search_embedded_form' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/search/tests/modules/search_embedded_form/search_embedded_form.module',
        'basename' => 'search_embedded_form.module',
        'name' => 'Search Embedded Form',
        'info' => 
        array (
          'name' => 'Search Embedded Form',
          'type' => 'module',
          'description' => 'Support module for Search module testing of embedded forms.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'search_langcode_test' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/search/tests/modules/search_langcode_test/search_langcode_test.module',
        'basename' => 'search_langcode_test.module',
        'name' => 'Test search entity langcode',
        'info' => 
        array (
          'name' => 'Test search entity langcode',
          'type' => 'module',
          'description' => 'Support module for search module testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'search_date_query_alter' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/search/tests/modules/search_date_query_alter/search_date_query_alter.module',
        'basename' => 'search_date_query_alter.module',
        'name' => 'Search Date Query Alter',
        'info' => 
        array (
          'name' => 'Search Date Query Alter',
          'type' => 'module',
          'description' => 'Test module that adds date conditions to node searches.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'search' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/search/search.module',
        'basename' => 'search.module',
        'name' => 'Search',
        'info' => 
        array (
          'name' => 'Search',
          'type' => 'module',
          'description' => 'Enables site-wide keyword searching.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
          'configure' => 'entity.search_page.collection',
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'content_moderation' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/content_moderation/content_moderation.module',
        'basename' => 'content_moderation.module',
        'name' => 'Content Moderation',
        'info' => 
        array (
          'name' => 'Content Moderation',
          'type' => 'module',
          'description' => 'Provides moderation states for content.',
          'version' => 'VERSION',
          'core' => '8.x',
          'package' => 'Core',
          'configure' => 'entity.workflow.collection',
          'dependencies' => 
          array (
            0 => 'workflows',
          ),
        ),
        'schema_version' => '8401',
        'version' => '8.5.6',
      ),
      'field_ui_test' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/field_ui/tests/modules/field_ui_test/field_ui_test.module',
        'basename' => 'field_ui_test.module',
        'name' => 'Field UI test',
        'info' => 
        array (
          'name' => 'Field UI test',
          'type' => 'module',
          'description' => 'Support module for Field UI tests.',
          'core' => '8.x',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'field_ui' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/field_ui/field_ui.module',
        'basename' => 'field_ui.module',
        'name' => 'Field UI',
        'info' => 
        array (
          'name' => 'Field UI',
          'type' => 'module',
          'description' => 'User interface for the Field API.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'menu_link_content' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/menu_link_content/menu_link_content.module',
        'basename' => 'menu_link_content.module',
        'name' => 'Custom Menu Links',
        'info' => 
        array (
          'name' => 'Custom Menu Links',
          'type' => 'module',
          'description' => 'Allows administrators to create custom menu links.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'link',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'block_content_test' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/block_content/tests/modules/block_content_test/block_content_test.module',
        'basename' => 'block_content_test.module',
        'name' => 'Custom Block module tests',
        'info' => 
        array (
          'name' => 'Custom Block module tests',
          'type' => 'module',
          'description' => 'Support module for custom block related testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'block_content',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'block_content' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/block_content/block_content.module',
        'basename' => 'block_content.module',
        'name' => 'Custom Block',
        'info' => 
        array (
          'name' => 'Custom Block',
          'type' => 'module',
          'description' => 'Allows the creation of custom blocks through the user interface.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'block',
            1 => 'text',
            2 => 'user',
          ),
          'configure' => 'entity.block_content.collection',
        ),
        'schema_version' => '8400',
        'version' => '8.5.6',
      ),
      'contact_storage_test' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/contact/tests/modules/contact_storage_test/contact_storage_test.module',
        'basename' => 'contact_storage_test.module',
        'name' => 'Contact test storage',
        'info' => 
        array (
          'name' => 'Contact test storage',
          'type' => 'module',
          'description' => 'Tests that contact messages can be stored.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'contact',
            1 => 'user',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'contact' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/contact/contact.module',
        'basename' => 'contact.module',
        'name' => 'Contact',
        'info' => 
        array (
          'name' => 'Contact',
          'type' => 'module',
          'description' => 'Enables the use of both personal and site-wide contact forms.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
          'configure' => 'entity.contact_form.collection',
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'responsive_image' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/responsive_image/responsive_image.module',
        'basename' => 'responsive_image.module',
        'name' => 'Responsive Image',
        'info' => 
        array (
          'name' => 'Responsive Image',
          'type' => 'module',
          'description' => 'Provides an image formatter and breakpoint mappings to output responsive images using the HTML5 picture tag.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'breakpoint',
            1 => 'image',
          ),
          'configure' => 'entity.responsive_image_style.collection',
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'quickedit_test' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/quickedit/tests/modules/quickedit_test.module',
        'basename' => 'quickedit_test.module',
        'name' => 'Quick Edit test',
        'info' => 
        array (
          'name' => 'Quick Edit test',
          'type' => 'module',
          'description' => 'Support module for the Quick Edit module tests.',
          'core' => '8.x',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'quickedit' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/quickedit/quickedit.module',
        'basename' => 'quickedit.module',
        'name' => 'Quick Edit',
        'info' => 
        array (
          'name' => 'Quick Edit',
          'type' => 'module',
          'description' => 'In-place content editing.',
          'package' => 'Core',
          'core' => '8.x',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'contextual',
            1 => 'field',
            2 => 'filter',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'options_test' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/options/tests/options_test/options_test.module',
        'basename' => 'options_test.module',
        'name' => 'Options test',
        'info' => 
        array (
          'name' => 'Options test',
          'type' => 'module',
          'description' => 'Support module for the Options module tests.',
          'core' => '8.x',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'options' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/options/options.module',
        'basename' => 'options.module',
        'name' => 'Options',
        'info' => 
        array (
          'name' => 'Options',
          'type' => 'module',
          'description' => 'Defines selection, check box and radio button widgets for text and numeric fields.',
          'package' => 'Field types',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'field',
            1 => 'text',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'user_form_test' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/user/tests/modules/user_form_test/user_form_test.module',
        'basename' => 'user_form_test.module',
        'name' => 'User module form tests',
        'info' => 
        array (
          'name' => 'User module form tests',
          'type' => 'module',
          'description' => 'Support module for user form testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'user_access_test' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/user/tests/modules/user_access_test/user_access_test.module',
        'basename' => 'user_access_test.module',
        'name' => 'User access tests',
        'info' => 
        array (
          'name' => 'User access tests',
          'type' => 'module',
          'description' => 'Support module for user access testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'user_hooks_test' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/user/tests/modules/user_hooks_test/user_hooks_test.module',
        'basename' => 'user_hooks_test.module',
        'name' => 'User module hooks tests',
        'info' => 
        array (
          'name' => 'User module hooks tests',
          'type' => 'module',
          'description' => 'Support module for user hooks testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'user' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/user/user.module',
        'basename' => 'user.module',
        'name' => 'User',
        'info' => 
        array (
          'name' => 'User',
          'type' => 'module',
          'description' => 'Manages the user registration and login system.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
          'required' => true,
          'configure' => 'user.admin_index',
          'dependencies' => 
          array (
            0 => 'system',
          ),
        ),
        'schema_version' => '8100',
        'version' => '8.5.6',
      ),
      'simpletest' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/simpletest/simpletest.module',
        'basename' => 'simpletest.module',
        'name' => 'Testing',
        'info' => 
        array (
          'name' => 'Testing',
          'type' => 'module',
          'description' => 'Provides a framework for unit and functional testing.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
          'configure' => 'simpletest.settings',
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'datetime' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/datetime/datetime.module',
        'basename' => 'datetime.module',
        'name' => 'Datetime',
        'info' => 
        array (
          'name' => 'Datetime',
          'type' => 'module',
          'description' => 'Defines datetime form elements and a datetime field type.',
          'package' => 'Field types',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'language_test' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/language/tests/language_test/language_test.module',
        'basename' => 'language_test.module',
        'name' => 'Language test',
        'info' => 
        array (
          'name' => 'Language test',
          'type' => 'module',
          'description' => 'Support module for the language layer tests.',
          'core' => '8.x',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'language' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/language/language.module',
        'basename' => 'language.module',
        'name' => 'Language',
        'info' => 
        array (
          'name' => 'Language',
          'type' => 'module',
          'description' => 'Allows users to configure languages and apply them to content.',
          'package' => 'Multilingual',
          'version' => 'VERSION',
          'core' => '8.x',
          'configure' => 'entity.configurable_language.collection',
        ),
        'schema_version' => '8001',
        'version' => '8.5.6',
      ),
      'migrate_prepare_row_test' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/migrate/tests/modules/migrate_prepare_row_test/migrate_prepare_row_test.module',
        'basename' => 'migrate_prepare_row_test.module',
        'name' => 'Migrate module prepareRow tests',
        'info' => 
        array (
          'name' => 'Migrate module prepareRow tests',
          'type' => 'module',
          'description' => 'Support module for source plugin prepareRow testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'migrate' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/migrate/migrate.module',
        'basename' => 'migrate.module',
        'name' => 'Migrate',
        'info' => 
        array (
          'name' => 'Migrate',
          'type' => 'module',
          'description' => 'Handles migrations',
          'package' => 'Migration',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => '8001',
        'version' => '8.5.6',
      ),
      'datetime_range' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/datetime_range/datetime_range.module',
        'basename' => 'datetime_range.module',
        'name' => 'Datetime Range',
        'info' => 
        array (
          'name' => 'Datetime Range',
          'type' => 'module',
          'description' => 'Provides the ability to store end dates.',
          'package' => 'Field types',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'datetime',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'config_entity_static_cache_test' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/config/tests/config_entity_static_cache_test/config_entity_static_cache_test.module',
        'basename' => 'config_entity_static_cache_test.module',
        'name' => 'Configuration entity static cache test',
        'info' => 
        array (
          'name' => 'Configuration entity static cache test',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'config_install_dependency_test' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/config/tests/config_install_dependency_test/config_install_dependency_test.module',
        'basename' => 'config_install_dependency_test.module',
        'name' => 'Config install dependency test',
        'info' => 
        array (
          'name' => 'Config install dependency test',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'config_import_test' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/config/tests/config_import_test/config_import_test.module',
        'basename' => 'config_import_test.module',
        'name' => 'Configuration import test',
        'info' => 
        array (
          'name' => 'Configuration import test',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'config_test' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/config/tests/config_test/config_test.module',
        'basename' => 'config_test.module',
        'name' => 'Configuration test',
        'info' => 
        array (
          'name' => 'Configuration test',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'config' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/config/config.module',
        'basename' => 'config.module',
        'name' => 'Configuration Manager',
        'info' => 
        array (
          'name' => 'Configuration Manager',
          'type' => 'module',
          'description' => 'Allows administrators to manage configuration changes.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
          'configure' => 'config.sync',
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'block_test' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/block/tests/modules/block_test/block_test.module',
        'basename' => 'block_test.module',
        'name' => 'Block test',
        'info' => 
        array (
          'name' => 'Block test',
          'type' => 'module',
          'description' => 'Provides test blocks.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'block',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'block' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/block/block.module',
        'basename' => 'block.module',
        'name' => 'Block',
        'info' => 
        array (
          'name' => 'Block',
          'type' => 'module',
          'description' => 'Controls the visual building blocks a page is constructed with. Blocks are boxes of content rendered into an area, or region, of a web page.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
          'configure' => 'block.admin_display',
        ),
        'schema_version' => '8003',
        'version' => '8.5.6',
      ),
      'rdf_test_namespaces' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/rdf/tests/rdf_test_namespaces/rdf_test_namespaces.module',
        'basename' => 'rdf_test_namespaces.module',
        'name' => 'RDF module namespaces test',
        'info' => 
        array (
          'name' => 'RDF module namespaces test',
          'type' => 'module',
          'description' => 'Test namespace declaration.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'rdf',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'rdf_conflicting_namespaces' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/rdf/tests/rdf_conflicting_namespaces/rdf_conflicting_namespaces.module',
        'basename' => 'rdf_conflicting_namespaces.module',
        'name' => 'RDF module conflicting namespaces test',
        'info' => 
        array (
          'name' => 'RDF module conflicting namespaces test',
          'type' => 'module',
          'description' => 'Test conflicting namespace declaration.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'rdf',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'rdf' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/rdf/rdf.module',
        'basename' => 'rdf.module',
        'name' => 'RDF',
        'info' => 
        array (
          'name' => 'RDF',
          'type' => 'module',
          'description' => 'Enriches your content with metadata to let other applications (e.g. search engines, aggregators) better understand its relationships and attributes.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'node_access_test' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/node/tests/modules/node_access_test/node_access_test.module',
        'basename' => 'node_access_test.module',
        'name' => 'Node module access tests',
        'info' => 
        array (
          'name' => 'Node module access tests',
          'type' => 'module',
          'description' => 'Support module for node permission testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'node_access_test_language' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/node/tests/modules/node_access_test_language/node_access_test_language.module',
        'basename' => 'node_access_test_language.module',
        'name' => 'Node module access tests language',
        'info' => 
        array (
          'name' => 'Node module access tests language',
          'type' => 'module',
          'description' => 'Support module for language-aware node access testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'options',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'node_test' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/node/tests/modules/node_test/node_test.module',
        'basename' => 'node_test.module',
        'name' => 'Node module tests',
        'info' => 
        array (
          'name' => 'Node module tests',
          'type' => 'module',
          'description' => 'Support module for node related testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'node_access_test_empty' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/node/tests/modules/node_access_test_empty/node_access_test_empty.module',
        'basename' => 'node_access_test_empty.module',
        'name' => 'Node module empty access tests',
        'info' => 
        array (
          'name' => 'Node module empty access tests',
          'type' => 'module',
          'description' => 'Support module for node permission testing. Provides empty grants hook implementations.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'node_test_exception' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/node/tests/modules/node_test_exception/node_test_exception.module',
        'basename' => 'node_test_exception.module',
        'name' => 'Node module exception tests',
        'info' => 
        array (
          'name' => 'Node module exception tests',
          'type' => 'module',
          'description' => 'Support module for node related exception testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'node' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/node/node.module',
        'basename' => 'node.module',
        'name' => 'Node',
        'info' => 
        array (
          'name' => 'Node',
          'type' => 'module',
          'description' => 'Allows content to be submitted to the site and displayed on pages.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
          'configure' => 'entity.node_type.collection',
          'dependencies' => 
          array (
            0 => 'text',
          ),
        ),
        'schema_version' => '8401',
        'version' => '8.5.6',
      ),
      'history' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/history/history.module',
        'basename' => 'history.module',
        'name' => 'History',
        'info' => 
        array (
          'name' => 'History',
          'type' => 'module',
          'description' => 'Records which user has read which content.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'node',
          ),
        ),
        'schema_version' => '8101',
        'version' => '8.5.6',
      ),
      'field_layout_test' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/field_layout/tests/modules/field_layout_test/field_layout_test.module',
        'basename' => 'field_layout_test.module',
        'name' => 'Field Layout test',
        'info' => 
        array (
          'name' => 'Field Layout test',
          'type' => 'module',
          'description' => 'Support module for Field Layout tests.',
          'core' => '8.x',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'entity_test',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'field_layout' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/field_layout/field_layout.module',
        'basename' => 'field_layout.module',
        'name' => 'Field Layout',
        'info' => 
        array (
          'name' => 'Field Layout',
          'type' => 'module',
          'description' => 'Adds layout capabilities to the Field UI.',
          'package' => 'Core (Experimental)',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'layout_discovery',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'breakpoint' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/breakpoint/breakpoint.module',
        'basename' => 'breakpoint.module',
        'name' => 'Breakpoint',
        'info' => 
        array (
          'name' => 'Breakpoint',
          'type' => 'module',
          'description' => 'Manage breakpoints and breakpoint groups for responsive designs.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'comment_empty_title_test' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/comment/tests/modules/comment_empty_title_test/comment_empty_title_test.module',
        'basename' => 'comment_empty_title_test.module',
        'name' => 'Comment empty titles test',
        'info' => 
        array (
          'name' => 'Comment empty titles test',
          'type' => 'module',
          'description' => 'Support module for testing empty title accessibility with Comment module.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'comment',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'comment_test' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/comment/tests/modules/comment_test/comment_test.module',
        'basename' => 'comment_test.module',
        'name' => 'Comment test',
        'info' => 
        array (
          'name' => 'Comment test',
          'type' => 'module',
          'description' => 'Support module for Comment module testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'comment',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'comment' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/comment/comment.module',
        'basename' => 'comment.module',
        'name' => 'Comment',
        'info' => 
        array (
          'name' => 'Comment',
          'type' => 'module',
          'description' => 'Allows users to comment on and discuss published content.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'text',
          ),
          'configure' => 'comment.admin',
        ),
        'schema_version' => '8400',
        'version' => '8.5.6',
      ),
      'workflow_type_test' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/workflows/tests/modules/workflow_type_test/workflow_type_test.module',
        'basename' => 'workflow_type_test.module',
        'name' => 'Workflow Type Test',
        'info' => 
        array (
          'name' => 'Workflow Type Test',
          'type' => 'module',
          'description' => 'Provides a workflow type plugin for testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'workflows',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'workflows' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/workflows/workflows.module',
        'basename' => 'workflows.module',
        'name' => 'Workflows',
        'info' => 
        array (
          'name' => 'Workflows',
          'type' => 'module',
          'description' => 'Provides UI and API for managing workflows. This module can be used with the Content moderation module to add highly customizable workflows to content.',
          'version' => 'VERSION',
          'core' => '8.x',
          'package' => 'Core',
          'configure' => 'entity.workflow.collection',
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'contextual_test' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/contextual/tests/modules/contextual_test/contextual_test.module',
        'basename' => 'contextual_test.module',
        'name' => 'Contextual Test',
        'info' => 
        array (
          'name' => 'Contextual Test',
          'type' => 'module',
          'description' => 'Provides test contextual links.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'contextual',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'contextual' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/contextual/contextual.module',
        'basename' => 'contextual.module',
        'name' => 'Contextual Links',
        'info' => 
        array (
          'name' => 'Contextual Links',
          'type' => 'module',
          'description' => 'Provides contextual links to perform actions related to elements on a page.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'config_test_rest' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/rest/tests/modules/config_test_rest/config_test_rest.module',
        'basename' => 'config_test_rest.module',
        'name' => 'Configuration test REST',
        'info' => 
        array (
          'name' => 'Configuration test REST',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'config_test',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'rest_test' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/rest/tests/modules/rest_test/rest_test.module',
        'basename' => 'rest_test.module',
        'name' => 'REST test',
        'info' => 
        array (
          'name' => 'REST test',
          'type' => 'module',
          'description' => 'Provides test hooks and resources for REST module.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'rest_test_views' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/rest/tests/modules/rest_test_views/rest_test_views.module',
        'basename' => 'rest_test_views.module',
        'name' => 'REST test views',
        'info' => 
        array (
          'name' => 'REST test views',
          'type' => 'module',
          'description' => 'Provides default views for views REST tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'rest',
            1 => 'views',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'rest' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/rest/rest.module',
        'basename' => 'rest.module',
        'name' => 'RESTful Web Services',
        'info' => 
        array (
          'name' => 'RESTful Web Services',
          'type' => 'module',
          'description' => 'Exposes entities and other resources as RESTful web API',
          'package' => 'Web services',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'serialization',
          ),
        ),
        'schema_version' => '8401',
        'version' => '8.5.6',
      ),
      'editor_test' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/editor/tests/modules/editor_test.module',
        'basename' => 'editor_test.module',
        'name' => 'Text Editor test',
        'info' => 
        array (
          'name' => 'Text Editor test',
          'type' => 'module',
          'description' => 'Support module for the Text Editor module tests.',
          'core' => '8.x',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'editor' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/editor/editor.module',
        'basename' => 'editor.module',
        'name' => 'Text Editor',
        'info' => 
        array (
          'name' => 'Text Editor',
          'type' => 'module',
          'description' => 'Provides a means to associate text formats with text editor libraries such as WYSIWYGs or toolbars.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'filter',
            1 => 'file',
          ),
          'configure' => 'filter.admin_overview',
        ),
        'schema_version' => '8001',
        'version' => '8.5.6',
      ),
      'taxonomy_crud' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/taxonomy/tests/modules/taxonomy_crud/taxonomy_crud.module',
        'basename' => 'taxonomy_crud.module',
        'name' => 'Taxonomy CRUD tests',
        'info' => 
        array (
          'name' => 'Taxonomy CRUD tests',
          'type' => 'module',
          'description' => 'Provides 3rd party settings for vocabulary.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'taxonomy',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'taxonomy_test' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/taxonomy/tests/modules/taxonomy_test/taxonomy_test.module',
        'basename' => 'taxonomy_test.module',
        'name' => 'Taxonomy test',
        'info' => 
        array (
          'name' => 'Taxonomy test',
          'type' => 'module',
          'description' => 'Provides test hook implementations for taxonomy tests',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'taxonomy',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'taxonomy' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/taxonomy/taxonomy.module',
        'basename' => 'taxonomy.module',
        'name' => 'Taxonomy',
        'info' => 
        array (
          'name' => 'Taxonomy',
          'type' => 'module',
          'description' => 'Enables the categorization of content.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'node',
            1 => 'text',
          ),
          'configure' => 'entity.taxonomy_vocabulary.collection',
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'views_entity_test' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/views/tests/modules/views_entity_test/views_entity_test.module',
        'basename' => 'views_entity_test.module',
        'name' => 'Views Entity Test',
        'info' => 
        array (
          'name' => 'Views Entity Test',
          'type' => 'module',
          'description' => 'Provides base fields for views tests of entity_test entity type.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'views',
            1 => 'entity_test',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'views_test_data' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/views/tests/modules/views_test_data/views_test_data.module',
        'basename' => 'views_test_data.module',
        'name' => 'Views Test',
        'info' => 
        array (
          'name' => 'Views Test',
          'type' => 'module',
          'description' => 'Test module for Views.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'views',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'views' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/views/views.module',
        'basename' => 'views.module',
        'name' => 'Views',
        'info' => 
        array (
          'name' => 'Views',
          'type' => 'module',
          'description' => 'Create customized lists and queries from your database.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'filter',
          ),
        ),
        'schema_version' => '8500',
        'version' => '8.5.6',
      ),
      'ban' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/ban/ban.module',
        'basename' => 'ban.module',
        'name' => 'Ban',
        'info' => 
        array (
          'name' => 'Ban',
          'type' => 'module',
          'description' => 'Enables banning of IP addresses.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
          'configure' => 'ban.admin_page',
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'layout_builder' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/layout_builder/layout_builder.module',
        'basename' => 'layout_builder.module',
        'name' => 'Layout Builder',
        'info' => 
        array (
          'name' => 'Layout Builder',
          'type' => 'module',
          'description' => 'Provides layout building utility.',
          'package' => 'Core (Experimental)',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'layout_discovery',
            1 => 'contextual',
            2 => 'field_ui',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'image_module_test' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/image/tests/modules/image_module_test/image_module_test.module',
        'basename' => 'image_module_test.module',
        'name' => 'Image test',
        'info' => 
        array (
          'name' => 'Image test',
          'type' => 'module',
          'description' => 'Provides hook implementations for testing Image module functionality.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'image' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/image/image.module',
        'basename' => 'image.module',
        'name' => 'Image',
        'info' => 
        array (
          'name' => 'Image',
          'type' => 'module',
          'description' => 'Defines an image field type and provides image manipulation tools.',
          'package' => 'Field types',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'file',
          ),
          'configure' => 'entity.image_style.collection',
        ),
        'schema_version' => '8201',
        'version' => '8.5.6',
      ),
      'forum' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/forum/forum.module',
        'basename' => 'forum.module',
        'name' => 'Forum',
        'info' => 
        array (
          'name' => 'Forum',
          'type' => 'module',
          'description' => 'Provides discussion forums.',
          'dependencies' => 
          array (
            0 => 'node',
            1 => 'history',
            2 => 'taxonomy',
            3 => 'comment',
            4 => 'options',
          ),
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
          'configure' => 'forum.overview',
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'file_test' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/file/tests/file_test/file_test.module',
        'basename' => 'file_test.module',
        'name' => 'File test',
        'info' => 
        array (
          'name' => 'File test',
          'type' => 'module',
          'description' => 'Support module for file handling tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'file' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/file/file.module',
        'basename' => 'file.module',
        'name' => 'File',
        'info' => 
        array (
          'name' => 'File',
          'type' => 'module',
          'description' => 'Defines a file field type.',
          'package' => 'Field types',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
        ),
        'schema_version' => '8300',
        'version' => '8.5.6',
      ),
      'path' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/path/path.module',
        'basename' => 'path.module',
        'name' => 'Path',
        'info' => 
        array (
          'name' => 'Path',
          'type' => 'module',
          'description' => 'Allows users to rename URLs.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
          'configure' => 'path.admin_overview',
        ),
        'schema_version' => '8200',
        'version' => '8.5.6',
      ),
      'syslog' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/syslog/syslog.module',
        'basename' => 'syslog.module',
        'name' => 'Syslog',
        'info' => 
        array (
          'name' => 'Syslog',
          'type' => 'module',
          'description' => 'Logs and records system events to syslog.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
          'configure' => 'system.logging_settings',
        ),
        'schema_version' => '8400',
        'version' => '8.5.6',
      ),
      'text' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/text/text.module',
        'basename' => 'text.module',
        'name' => 'Text',
        'info' => 
        array (
          'name' => 'Text',
          'type' => 'module',
          'description' => 'Defines simple text field types.',
          'package' => 'Field types',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'field',
            1 => 'filter',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'statistics' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/statistics/statistics.module',
        'basename' => 'statistics.module',
        'name' => 'Statistics',
        'info' => 
        array (
          'name' => 'Statistics',
          'type' => 'module',
          'description' => 'Logs content statistics for your site.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
          'configure' => 'statistics.settings',
          'dependencies' => 
          array (
            0 => 'node',
          ),
        ),
        'schema_version' => '8300',
        'version' => '8.5.6',
      ),
      'inline_form_errors' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/inline_form_errors/inline_form_errors.module',
        'basename' => 'inline_form_errors.module',
        'name' => 'Inline Form Errors',
        'info' => 
        array (
          'type' => 'module',
          'name' => 'Inline Form Errors',
          'description' => 'Places error messages adjacent to form inputs, for improved usability and accessibility.',
          'version' => 'VERSION',
          'core' => '8.x',
          'package' => 'Core',
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'content_translation_test' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/content_translation/tests/modules/content_translation_test/content_translation_test.module',
        'basename' => 'content_translation_test.module',
        'name' => 'Content translation tests',
        'info' => 
        array (
          'name' => 'Content translation tests',
          'type' => 'module',
          'description' => 'Provides content translation tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'content_translation',
            1 => 'language',
            2 => 'entity_test',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'content_translation' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/content_translation/content_translation.module',
        'basename' => 'content_translation.module',
        'name' => 'Content Translation',
        'info' => 
        array (
          'name' => 'Content Translation',
          'type' => 'module',
          'description' => 'Allows users to translate content entities.',
          'dependencies' => 
          array (
            0 => 'language',
          ),
          'package' => 'Multilingual',
          'version' => 'VERSION',
          'core' => '8.x',
          'configure' => 'language.content_settings_page',
        ),
        'schema_version' => '8400',
        'version' => '8.5.6',
      ),
      'entity_serialization_test' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/serialization/tests/modules/entity_serialization_test/entity_serialization_test.module',
        'basename' => 'entity_serialization_test.module',
        'name' => 'Entity serialization test support',
        'info' => 
        array (
          'name' => 'Entity serialization test support',
          'type' => 'module',
          'description' => 'Provides test support for entity serialization tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'serialization' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/serialization/serialization.module',
        'basename' => 'serialization.module',
        'name' => 'Serialization',
        'info' => 
        array (
          'name' => 'Serialization',
          'type' => 'module',
          'description' => 'Provides a service for (de)serializing data to/from formats such as JSON and XML',
          'package' => 'Web services',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => '8401',
        'version' => '8.5.6',
      ),
      'big_pipe_test' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/big_pipe/tests/modules/big_pipe_test/big_pipe_test.module',
        'basename' => 'big_pipe_test.module',
        'name' => 'BigPipe test',
        'info' => 
        array (
          'name' => 'BigPipe test',
          'type' => 'module',
          'description' => 'Support module for BigPipe testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'big_pipe' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/big_pipe/big_pipe.module',
        'basename' => 'big_pipe.module',
        'name' => 'BigPipe',
        'info' => 
        array (
          'name' => 'BigPipe',
          'type' => 'module',
          'description' => 'Sends pages using the BigPipe technique that allows browsers to show them much faster.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'page_cache_form_test' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/page_cache/tests/modules/page_cache_form_test.module',
        'basename' => 'page_cache_form_test.module',
        'name' => 'Page Cache Form Test',
        'info' => 
        array (
          'name' => 'Page Cache Form Test',
          'type' => 'module',
          'description' => 'Support module for the Page Cache module tests.',
          'core' => '8.x',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'page_cache' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/page_cache/page_cache.module',
        'basename' => 'page_cache.module',
        'name' => 'Internal Page Cache',
        'info' => 
        array (
          'name' => 'Internal Page Cache',
          'type' => 'module',
          'description' => 'Caches pages for anonymous users. Use when an external page cache is not available.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'menu_ui' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/menu_ui/menu_ui.module',
        'basename' => 'menu_ui.module',
        'name' => 'Menu UI',
        'info' => 
        array (
          'name' => 'Menu UI',
          'type' => 'module',
          'description' => 'Allows administrators to customize the site navigation menu.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
          'configure' => 'entity.menu.collection',
          'dependencies' => 
          array (
            0 => 'menu_link_content',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'ckeditor_test' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/ckeditor/tests/modules/ckeditor_test.module',
        'basename' => 'ckeditor_test.module',
        'name' => 'CKEditor test',
        'info' => 
        array (
          'name' => 'CKEditor test',
          'type' => 'module',
          'description' => 'Support module for the CKEditor module tests.',
          'core' => '8.x',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'ckeditor' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/ckeditor/ckeditor.module',
        'basename' => 'ckeditor.module',
        'name' => 'CKEditor',
        'info' => 
        array (
          'name' => 'CKEditor',
          'type' => 'module',
          'description' => 'WYSIWYG editing for rich text fields using CKEditor.',
          'package' => 'Core',
          'core' => '8.x',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'editor',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'migrate_drupal_ui' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/migrate_drupal_ui/migrate_drupal_ui.module',
        'basename' => 'migrate_drupal_ui.module',
        'name' => 'Migrate Drupal UI',
        'info' => 
        array (
          'name' => 'Migrate Drupal UI',
          'type' => 'module',
          'description' => 'Provides a user interface for migrating from older Drupal versions.',
          'package' => 'Core (Experimental)',
          'version' => 'VERSION',
          'core' => '8.x',
          'configure' => 'migrate_drupal_ui.upgrade',
          'dependencies' => 
          array (
            0 => 'migrate',
            1 => 'migrate_drupal',
            2 => 'dblog',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'update_test' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/update/tests/modules/update_test/update_test.module',
        'basename' => 'update_test.module',
        'name' => 'Update test',
        'info' => 
        array (
          'name' => 'Update test',
          'type' => 'module',
          'description' => 'Support module for update module testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'update' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/update/update.module',
        'basename' => 'update.module',
        'name' => 'Update Manager',
        'info' => 
        array (
          'name' => 'Update Manager',
          'type' => 'module',
          'description' => 'Checks for available updates, and can securely install or update modules and themes via a web interface.',
          'version' => 'VERSION',
          'package' => 'Core',
          'core' => '8.x',
          'configure' => 'update.settings',
          'dependencies' => 
          array (
            0 => 'file',
          ),
        ),
        'schema_version' => '8001',
        'version' => '8.5.6',
      ),
      'toolbar_disable_user_toolbar' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/toolbar/tests/modules/toolbar_disable_user_toolbar/toolbar_disable_user_toolbar.module',
        'basename' => 'toolbar_disable_user_toolbar.module',
        'name' => 'Disable user toolbar',
        'info' => 
        array (
          'name' => 'Disable user toolbar',
          'type' => 'module',
          'description' => 'Support module for testing toolbar without user toolbar',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'toolbar_test' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/toolbar/tests/modules/toolbar_test/toolbar_test.module',
        'basename' => 'toolbar_test.module',
        'name' => 'Toolbar module API tests',
        'info' => 
        array (
          'name' => 'Toolbar module API tests',
          'type' => 'module',
          'description' => 'Support module for toolbar testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'toolbar' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/toolbar/toolbar.module',
        'basename' => 'toolbar.module',
        'name' => 'Toolbar',
        'info' => 
        array (
          'name' => 'Toolbar',
          'type' => 'module',
          'description' => 'Provides a toolbar that shows the top-level administration menu items and links from other modules.',
          'core' => '8.x',
          'package' => 'Core',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'breakpoint',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'tour_test' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/tour/tests/tour_test/tour_test.module',
        'basename' => 'tour_test.module',
        'name' => 'Tour module tests',
        'info' => 
        array (
          'name' => 'Tour module tests',
          'type' => 'module',
          'description' => 'Tests module for tour module.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'tour',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'tour' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/tour/tour.module',
        'basename' => 'tour.module',
        'name' => 'Tour',
        'info' => 
        array (
          'name' => 'Tour',
          'type' => 'module',
          'description' => 'Provides guided tours.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'telephone' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/telephone/telephone.module',
        'basename' => 'telephone.module',
        'name' => 'Telephone',
        'info' => 
        array (
          'name' => 'Telephone',
          'type' => 'module',
          'description' => 'Defines a field type for telephone numbers.',
          'package' => 'Field types',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'dblog' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/dblog/dblog.module',
        'basename' => 'dblog.module',
        'name' => 'Database Logging',
        'info' => 
        array (
          'name' => 'Database Logging',
          'type' => 'module',
          'description' => 'Logs and records system events to the database.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
          'configure' => 'system.logging_settings',
        ),
        'schema_version' => '8400',
        'version' => '8.5.6',
      ),
      'views_ui_test_field' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/views_ui/tests/modules/views_ui_test_field/views_ui_test_field.module',
        'basename' => 'views_ui_test_field.module',
        'name' => 'Views test field',
        'info' => 
        array (
          'name' => 'Views test field',
          'type' => 'module',
          'description' => 'Add custom global field for testing purposes.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'views_ui',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'views_ui_test' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/views_ui/tests/modules/views_ui_test/views_ui_test.module',
        'basename' => 'views_ui_test.module',
        'name' => 'Views UI Test',
        'info' => 
        array (
          'name' => 'Views UI Test',
          'type' => 'module',
          'description' => 'Test module for Views UI.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'views_ui',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'views_ui' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/views_ui/views_ui.module',
        'basename' => 'views_ui.module',
        'name' => 'Views UI',
        'info' => 
        array (
          'name' => 'Views UI',
          'type' => 'module',
          'description' => 'Administrative interface for Views.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
          'configure' => 'entity.view.collection',
          'dependencies' => 
          array (
            0 => 'views',
          ),
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'action' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/action/action.module',
        'basename' => 'action.module',
        'name' => 'Actions',
        'info' => 
        array (
          'name' => 'Actions',
          'type' => 'module',
          'description' => 'Perform tasks on specific events triggered within the system.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
          'configure' => 'entity.action.collection',
        ),
        'schema_version' => 8000,
        'version' => '8.5.6',
      ),
      'media' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/modules/media/media.module',
        'basename' => 'media.module',
        'name' => 'Media',
        'info' => 
        array (
          'name' => 'Media',
          'description' => 'Create reusable media.',
          'type' => 'module',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'file',
            1 => 'image',
            2 => 'user',
          ),
        ),
        'schema_version' => '8500',
        'version' => '8.5.6',
      ),
    ),
    'themes' => 
    array (
      'bootstrap.info' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/themes/contrib/bootstrap/bootstrap.info.yml',
        'basename' => 'bootstrap.info.yml',
        'name' => 'Bootstrap',
        'info' => 
        array (
          'type' => 'theme',
          'base theme' => false,
          'name' => 'Bootstrap',
          'description' => 'Built to use Bootstrap, a sleek, intuitive, and powerful front-end framework for faster and easier web development.',
          'package' => 'Bootstrap',
          'regions' => 
          array (
            'navigation' => 'Navigation',
            'navigation_collapsible' => 'Navigation (Collapsible)',
            'header' => 'Top Bar',
            'highlighted' => 'Highlighted',
            'help' => 'Help',
            'content' => 'Content',
            'sidebar_first' => 'Primary',
            'sidebar_second' => 'Secondary',
            'footer' => 'Footer',
            'page_top' => 'Page top',
            'page_bottom' => 'Page bottom',
          ),
          'libraries' => 
          array (
            0 => 'bootstrap/theme',
          ),
          'libraries-extend' => 
          array (
            'core/drupal.ajax' => 
            array (
              0 => 'bootstrap/drupal.ajax',
            ),
            'core/drupal.autocomplete' => 
            array (
              0 => 'bootstrap/drupal.autocomplete',
            ),
            'core/drupal.dialog.ajax' => 
            array (
              0 => 'bootstrap/drupal.dialog.ajax',
            ),
            'core/drupal.form' => 
            array (
              0 => 'bootstrap/drupal.form',
            ),
            'core/drupal.progress' => 
            array (
              0 => 'bootstrap/drupal.progress',
            ),
            'core/drupal.states' => 
            array (
              0 => 'bootstrap/drupal.states',
            ),
            'core/drupal.tabledrag' => 
            array (
              0 => 'bootstrap/drupal.tabledrag',
            ),
            'image_widget_crop/cropper.integration' => 
            array (
              0 => 'bootstrap/image_widget_crop',
            ),
            'views/views.ajax' => 
            array (
              0 => 'bootstrap/views.ajax',
            ),
          ),
          'libraries-override' => 
          array (
            'core/drupal.batch' => 'bootstrap/drupal.batch',
            'core/drupal.dropbutton' => 'bootstrap/dropdown',
            'core/drupal.vertical-tabs' => 'bootstrap/drupal.vertical-tabs',
            'filter/drupal.filter' => 'bootstrap/drupal.filter',
            'system/admin' => false,
            'text/drupal.text' => 'bootstrap/drupal.text',
            'system/base' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  'css/components/ajax-progress.module.css' => false,
                  'css/components/autocomplete-loading.module.css' => false,
                  'css/components/tabledrag.module.css' => false,
                ),
              ),
            ),
            'file/drupal.file' => 
            array (
              'css' => 
              array (
                'theme' => 
                array (
                  'css/file.admin.css' => false,
                ),
              ),
            ),
            'filter/drupal.filter.admin' => 
            array (
              'css' => 
              array (
                'theme' => 
                array (
                  'css/filter.admin.css' => false,
                ),
              ),
            ),
            'node/drupal.node.preview' => 
            array (
              'css' => 
              array (
                'theme' => 
                array (
                  'css/node.preview.css' => false,
                ),
              ),
            ),
          ),
          'version' => '8.x-3.11',
          'core' => '8.x',
          'project' => 'bootstrap',
          'datestamp' => 1520792888,
        ),
        'version' => '8.x-3.11',
      ),
      'classy.info' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/themes/classy/classy.info.yml',
        'basename' => 'classy.info.yml',
        'name' => 'Classy',
        'info' => 
        array (
          'name' => 'Classy',
          'type' => 'theme',
          'description' => 'A base theme with sensible default CSS classes added. Learn how to use Classy as a base theme in the <a href="https://www.drupal.org/docs/8/theming">Drupal 8 Theming Guide</a>.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
          'hidden' => true,
          'libraries' => 
          array (
            0 => 'classy/base',
            1 => 'classy/messages',
            2 => 'core/normalize',
          ),
          'libraries-extend' => 
          array (
            'user/drupal.user' => 
            array (
              0 => 'classy/user',
            ),
            'core/drupal.dropbutton' => 
            array (
              0 => 'classy/dropbutton',
            ),
            'core/drupal.dialog' => 
            array (
              0 => 'classy/dialog',
            ),
            'file/drupal.file' => 
            array (
              0 => 'classy/file',
            ),
            'core/drupal.progress' => 
            array (
              0 => 'classy/progress',
            ),
          ),
        ),
        'version' => '8.5.6',
      ),
      'twig.info' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/themes/engines/twig/twig.info.yml',
        'basename' => 'twig.info.yml',
        'name' => 'Twig',
        'info' => 
        array (
          'type' => 'theme_engine',
          'name' => 'Twig',
          'core' => '8.x',
          'version' => 'VERSION',
          'package' => 'Core',
        ),
        'version' => '8.5.6',
      ),
      'seven.info' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/themes/seven/seven.info.yml',
        'basename' => 'seven.info.yml',
        'name' => 'Seven',
        'info' => 
        array (
          'name' => 'Seven',
          'type' => 'theme',
          'base theme' => 'classy',
          'description' => 'The default administration theme for Drupal 8 was designed with clean lines, simple blocks, and sans-serif font to emphasize the tools and tasks at hand.',
          'alt text' => 'Default administration theme for Drupal 8 with simple blocks and clean lines.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
          'libraries' => 
          array (
            0 => 'seven/global-styling',
          ),
          'libraries-override' => 
          array (
            'system/base' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  '/core/themes/stable/css/system/components/system-status-counter.css' => 'css/components/system-status-counter.css',
                  '/core/themes/stable/css/system/components/system-status-report-counters.css' => 'css/components/system-status-report-counters.css',
                  '/core/themes/stable/css/system/components/system-status-report-general-info.css' => 'css/components/system-status-report-general-info.css',
                ),
              ),
            ),
            'core/drupal.vertical-tabs' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  'misc/vertical-tabs.css' => false,
                ),
              ),
            ),
            'core/jquery.ui' => 
            array (
              'css' => 
              array (
                'theme' => 
                array (
                  'assets/vendor/jquery.ui/themes/base/theme.css' => false,
                ),
              ),
            ),
            'core/jquery.ui.dialog' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  'assets/vendor/jquery.ui/themes/base/dialog.css' => false,
                ),
              ),
            ),
            'classy/dialog' => 'seven/seven.drupal.dialog',
          ),
          'libraries-extend' => 
          array (
            'core/ckeditor' => 
            array (
              0 => 'seven/ckeditor-dialog',
            ),
            'core/drupal.vertical-tabs' => 
            array (
              0 => 'seven/vertical-tabs',
            ),
            'core/jquery.ui' => 
            array (
              0 => 'seven/seven.jquery.ui',
            ),
            'tour/tour-styling' => 
            array (
              0 => 'seven/tour-styling',
            ),
          ),
          'quickedit_stylesheets' => 
          array (
            0 => 'css/components/quickedit.css',
          ),
          'regions' => 
          array (
            'header' => 'Header',
            'pre_content' => 'Pre-content',
            'breadcrumb' => 'Breadcrumb',
            'highlighted' => 'Highlighted',
            'help' => 'Help',
            'content' => 'Content',
            'page_top' => 'Page top',
            'page_bottom' => 'Page bottom',
            'sidebar_first' => 'First sidebar',
          ),
          'regions_hidden' => 
          array (
            0 => 'sidebar_first',
          ),
        ),
        'version' => '8.5.6',
      ),
      'stable.info' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/themes/stable/stable.info.yml',
        'basename' => 'stable.info.yml',
        'name' => 'Stable',
        'info' => 
        array (
          'name' => 'Stable',
          'type' => 'theme',
          'description' => 'A default base theme using Drupal 8.0.0\'s core markup and CSS.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
          'base theme' => false,
          'hidden' => true,
          'libraries-override' => 
          array (
            'block/drupal.block.admin' => 
            array (
              'css' => 
              array (
                'theme' => 
                array (
                  'css/block.admin.css' => 'css/block/block.admin.css',
                ),
              ),
            ),
            'ckeditor/drupal.ckeditor' => 
            array (
              'css' => 
              array (
                'state' => 
                array (
                  'css/ckeditor.css' => 'css/ckeditor/ckeditor.css',
                ),
              ),
            ),
            'ckeditor/drupal.ckeditor.plugins.drupalimagecaption' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  'css/plugins/drupalimagecaption/ckeditor.drupalimagecaption.css' => 'css/ckeditor/plugins/drupalimagecaption/ckeditor.drupalimagecaption.css',
                ),
              ),
            ),
            'ckeditor/drupal.ckeditor.plugins.language' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  'css/plugins/language/ckeditor.language.css' => 'css/ckeditor/plugins/language/ckeditor.language.css',
                ),
              ),
            ),
            'ckeditor/drupal.ckeditor.admin' => 
            array (
              'css' => 
              array (
                'theme' => 
                array (
                  'css/ckeditor.admin.css' => 'css/ckeditor/ckeditor.admin.css',
                ),
              ),
            ),
            'color/admin' => 
            array (
              'css' => 
              array (
                'theme' => 
                array (
                  'css/color.admin.css' => 'css/color/color.admin.css',
                ),
              ),
            ),
            'config_translation/drupal.config_translation.admin' => 
            array (
              'css' => 
              array (
                'theme' => 
                array (
                  'css/config_translation.admin.css' => 'css/config_translation/config_translation.admin.css',
                ),
              ),
            ),
            'content_translation/drupal.content_translation.admin' => 
            array (
              'css' => 
              array (
                'theme' => 
                array (
                  'css/content_translation.admin.css' => 'css/content_translation/content_translation.admin.css',
                ),
              ),
            ),
            'content_moderation/content_moderation' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  'css/content_moderation.module.css' => 'css/content_moderation/content_moderation.module.css',
                ),
                'theme' => 
                array (
                  'css/content_moderation.theme.css' => 'css/content_moderation/content_moderation.theme.css',
                ),
              ),
            ),
            'contextual/drupal.contextual-links' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  'css/contextual.module.css' => 'css/contextual/contextual.module.css',
                ),
                'theme' => 
                array (
                  'css/contextual.theme.css' => 'css/contextual/contextual.theme.css',
                  'css/contextual.icons.theme.css' => 'css/contextual/contextual.icons.theme.css',
                ),
              ),
            ),
            'contextual/drupal.contextual-toolbar' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  'css/contextual.toolbar.css' => 'css/contextual/contextual.toolbar.css',
                ),
              ),
            ),
            'core/drupal.dialog.off_canvas' => 
            array (
              'css' => 
              array (
                'base' => 
                array (
                  'misc/dialog/off-canvas.reset.css' => 'css/core/dialog/off-canvas.reset.css',
                  'misc/dialog/off-canvas.base.css' => 'css/core/dialog/off-canvas.base.css',
                  'misc/dialog/off-canvas.css' => 'css/core/dialog/off-canvas.css',
                  'misc/dialog/off-canvas.theme.css' => 'css/core/dialog/off-canvas.theme.css',
                ),
                'component' => 
                array (
                  'misc/dialog/off-canvas.motion.css' => 'css/core/dialog/off-canvas.motion.css',
                  'misc/dialog/off-canvas.button.css' => 'css/core/dialog/off-canvas.button.css',
                  'misc/dialog/off-canvas.form.css' => 'css/core/dialog/off-canvas.form.css',
                  'misc/dialog/off-canvas.table.css' => 'css/core/dialog/off-canvas.table.css',
                  'misc/dialog/off-canvas.details.css' => 'css/core/dialog/off-canvas.details.css',
                  'misc/dialog/off-canvas.tabledrag.css' => 'css/core/dialog/off-canvas.tabledrag.css',
                  'misc/dialog/off-canvas.dropbutton.css' => 'css/core/dialog/off-canvas.dropbutton.css',
                  'misc/dialog/off-canvas.layout.css' => 'css/core/dialog/off-canvas.layout.css',
                ),
              ),
            ),
            'core/drupal.dropbutton' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  'misc/dropbutton/dropbutton.css' => 'css/core/dropbutton/dropbutton.css',
                ),
              ),
            ),
            'core/drupal.vertical-tabs' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  'misc/vertical-tabs.css' => 'css/core/vertical-tabs.css',
                ),
              ),
            ),
            'dblog/drupal.dblog' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  'css/dblog.module.css' => 'css/dblog/dblog.module.css',
                ),
              ),
            ),
            'field_ui/drupal.field_ui' => 
            array (
              'css' => 
              array (
                'theme' => 
                array (
                  'css/field_ui.admin.css' => 'css/field_ui/field_ui.admin.css',
                ),
              ),
            ),
            'file/drupal.file' => 
            array (
              'css' => 
              array (
                'theme' => 
                array (
                  'css/file.admin.css' => 'css/file/file.admin.css',
                ),
              ),
            ),
            'filter/drupal.filter.admin' => 
            array (
              'css' => 
              array (
                'theme' => 
                array (
                  'css/filter.admin.css' => 'css/filter/filter.admin.css',
                ),
              ),
            ),
            'filter/drupal.filter' => 
            array (
              'css' => 
              array (
                'theme' => 
                array (
                  'css/filter.admin.css' => 'css/filter/filter.admin.css',
                ),
              ),
            ),
            'filter/caption' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  'css/filter.caption.css' => 'css/filter/filter.caption.css',
                ),
              ),
            ),
            'image/admin' => 
            array (
              'css' => 
              array (
                'theme' => 
                array (
                  'css/image.admin.css' => 'css/image/image.admin.css',
                ),
              ),
            ),
            'image/quickedit.inPlaceEditor.image' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  'css/editors/image.css' => 'css/image/editors/image.css',
                ),
                'theme' => 
                array (
                  'css/editors/image.theme.css' => 'css/image/editors/image.theme.css',
                ),
              ),
            ),
            'language/drupal.language.admin' => 
            array (
              'css' => 
              array (
                'theme' => 
                array (
                  'css/language.admin.css' => 'css/language/language.admin.css',
                ),
              ),
            ),
            'locale/drupal.locale.admin' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  'css/locale.admin.css' => 'css/locale/locale.admin.css',
                ),
              ),
            ),
            'menu_ui/drupal.menu_ui.adminforms' => 
            array (
              'css' => 
              array (
                'theme' => 
                array (
                  'css/menu_ui.admin.css' => 'css/menu_ui/menu_ui.admin.css',
                ),
              ),
            ),
            'node/drupal.node' => 
            array (
              'css' => 
              array (
                'layout' => 
                array (
                  'css/node.module.css' => 'css/node/node.module.css',
                ),
              ),
            ),
            'node/drupal.node.preview' => 
            array (
              'css' => 
              array (
                'theme' => 
                array (
                  'css/node.preview.css' => 'css/node/node.preview.css',
                ),
              ),
            ),
            'node/form' => 
            array (
              'css' => 
              array (
                'layout' => 
                array (
                  'css/node.module.css' => 'css/node/node.module.css',
                ),
              ),
            ),
            'node/drupal.node.admin' => 
            array (
              'css' => 
              array (
                'theme' => 
                array (
                  'css/node.admin.css' => 'css/node/node.admin.css',
                ),
              ),
            ),
            'quickedit/quickedit' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  'css/quickedit.module.css' => 'css/quickedit/quickedit.module.css',
                ),
                'theme' => 
                array (
                  'css/quickedit.theme.css' => 'css/quickedit/quickedit.theme.css',
                  'css/quickedit.icons.theme.css' => 'css/quickedit/quickedit.icons.theme.css',
                ),
              ),
            ),
            'settings_tray/drupal.settings_tray' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  'css/settings_tray.module.css' => 'css/settings_tray/settings_tray.module.css',
                  'css/settings_tray.motion.css' => 'css/settings_tray/settings_tray.motion.css',
                  'css/settings_tray.toolbar.css' => 'css/settings_tray/settings_tray.toolbar.css',
                ),
                'theme' => 
                array (
                  'css/settings_tray.theme.css' => 'css/settings_tray/settings_tray.theme.css',
                ),
              ),
            ),
            'shortcut/drupal.shortcut' => 
            array (
              'css' => 
              array (
                'theme' => 
                array (
                  'css/shortcut.theme.css' => 'css/shortcut/shortcut.theme.css',
                  'css/shortcut.icons.theme.css' => 'css/shortcut/shortcut.icons.theme.css',
                ),
              ),
            ),
            'simpletest/drupal.simpletest' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  'css/simpletest.module.css' => 'css/simpletest/simpletest.module.css',
                ),
              ),
            ),
            'system/base' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  'css/components/ajax-progress.module.css' => 'css/system/components/ajax-progress.module.css',
                  'css/components/align.module.css' => 'css/system/components/align.module.css',
                  'css/components/autocomplete-loading.module.css' => 'css/system/components/autocomplete-loading.module.css',
                  'css/components/fieldgroup.module.css' => 'css/system/components/fieldgroup.module.css',
                  'css/components/container-inline.module.css' => 'css/system/components/container-inline.module.css',
                  'css/components/clearfix.module.css' => 'css/system/components/clearfix.module.css',
                  'css/components/details.module.css' => 'css/system/components/details.module.css',
                  'css/components/hidden.module.css' => 'css/system/components/hidden.module.css',
                  'css/components/item-list.module.css' => 'css/system/components/item-list.module.css',
                  'css/components/js.module.css' => 'css/system/components/js.module.css',
                  'css/components/nowrap.module.css' => 'css/system/components/nowrap.module.css',
                  'css/components/position-container.module.css' => 'css/system/components/position-container.module.css',
                  'css/components/progress.module.css' => 'css/system/components/progress.module.css',
                  'css/components/reset-appearance.module.css' => 'css/system/components/reset-appearance.module.css',
                  'css/components/resize.module.css' => 'css/system/components/resize.module.css',
                  'css/components/sticky-header.module.css' => 'css/system/components/sticky-header.module.css',
                  'css/components/system-status-counter.css' => 'css/system/components/system-status-counter.css',
                  'css/components/system-status-report-counters.css' => 'css/system/components/system-status-report-counters.css',
                  'css/components/system-status-report-general-info.css' => 'css/system/components/system-status-report-general-info.css',
                  'css/components/tabledrag.module.css' => 'css/system/components/tabledrag.module.css',
                  'css/components/tablesort.module.css' => 'css/system/components/tablesort.module.css',
                  'css/components/tree-child.module.css' => 'css/system/components/tree-child.module.css',
                ),
              ),
            ),
            'system/admin' => 
            array (
              'css' => 
              array (
                'theme' => 
                array (
                  'css/system.admin.css' => 'css/system/system.admin.css',
                ),
              ),
            ),
            'system/maintenance' => 
            array (
              'css' => 
              array (
                'theme' => 
                array (
                  'css/system.maintenance.css' => 'css/system/system.maintenance.css',
                ),
              ),
            ),
            'system/diff' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  'css/system.diff.css' => 'css/system/system.diff.css',
                ),
              ),
            ),
            'taxonomy/drupal.taxonomy' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  'css/taxonomy.theme.css' => 'css/taxonomy/taxonomy.theme.css',
                ),
              ),
            ),
            'toolbar/toolbar' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  'css/toolbar.module.css' => 'css/toolbar/toolbar.module.css',
                ),
                'theme' => 
                array (
                  'css/toolbar.theme.css' => 'css/toolbar/toolbar.theme.css',
                  'css/toolbar.icons.theme.css' => 'css/toolbar/toolbar.icons.theme.css',
                ),
              ),
            ),
            'toolbar/toolbar.menu' => 
            array (
              'css' => 
              array (
                'state' => 
                array (
                  'css/toolbar.menu.css' => 'css/toolbar/toolbar.menu.css',
                ),
              ),
            ),
            'tour/tour-styling' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  'css/tour.module.css' => 'css/tour/tour.module.css',
                ),
              ),
            ),
            'update/drupal.update.admin' => 
            array (
              'css' => 
              array (
                'theme' => 
                array (
                  'css/update.admin.theme.css' => 'css/update/update.admin.theme.css',
                ),
              ),
            ),
            'user/drupal.user' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  'css/user.module.css' => 'css/user/user.module.css',
                ),
              ),
            ),
            'user/drupal.user.admin' => 
            array (
              'css' => 
              array (
                'theme' => 
                array (
                  'css/user.admin.css' => 'css/user/user.admin.css',
                ),
              ),
            ),
            'user/drupal.user.icons' => 
            array (
              'css' => 
              array (
                'theme' => 
                array (
                  'css/user.icons.admin.css' => 'css/user/user.icons.admin.css',
                ),
              ),
            ),
            'views/views.module' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  'css/views.module.css' => 'css/views/views.module.css',
                ),
              ),
            ),
            'views_ui/admin.styling' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  'css/views_ui.admin.css' => 'css/views_ui/views_ui.admin.css',
                ),
                'theme' => 
                array (
                  'css/views_ui.admin.theme.css' => 'css/views_ui/views_ui.admin.theme.css',
                  'css/views_ui.contextual.css' => 'css/views_ui/views_ui.contextual.css',
                ),
              ),
            ),
          ),
        ),
        'version' => '8.5.6',
      ),
      'bartik.info' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/themes/bartik/bartik.info.yml',
        'basename' => 'bartik.info.yml',
        'name' => 'Bartik',
        'info' => 
        array (
          'name' => 'Bartik',
          'type' => 'theme',
          'base theme' => 'classy',
          'description' => 'A flexible, recolorable theme with many regions and a responsive, mobile-first layout.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
          'libraries' => 
          array (
            0 => 'bartik/global-styling',
          ),
          'ckeditor_stylesheets' => 
          array (
            0 => 'css/base/elements.css',
            1 => 'css/components/captions.css',
            2 => 'css/components/table.css',
            3 => 'css/components/text-formatted.css',
          ),
          'regions' => 
          array (
            'header' => 'Header',
            'primary_menu' => 'Primary menu',
            'secondary_menu' => 'Secondary menu',
            'page_top' => 'Page top',
            'page_bottom' => 'Page bottom',
            'highlighted' => 'Highlighted',
            'featured_top' => 'Featured top',
            'breadcrumb' => 'Breadcrumb',
            'content' => 'Content',
            'sidebar_first' => 'Sidebar first',
            'sidebar_second' => 'Sidebar second',
            'featured_bottom_first' => 'Featured bottom first',
            'featured_bottom_second' => 'Featured bottom second',
            'featured_bottom_third' => 'Featured bottom third',
            'footer_first' => 'Footer first',
            'footer_second' => 'Footer second',
            'footer_third' => 'Footer third',
            'footer_fourth' => 'Footer fourth',
            'footer_fifth' => 'Footer fifth',
          ),
        ),
        'version' => '8.5.6',
      ),
      'stark.info' => 
      array (
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/themes/stark/stark.info.yml',
        'basename' => 'stark.info.yml',
        'name' => 'Stark',
        'info' => 
        array (
          'name' => 'Stark',
          'type' => 'theme',
          'description' => 'An intentionally plain theme with no styling to demonstrate default Drupal’s HTML and CSS. Learn how to build a custom theme from Stark in the <a href="https://www.drupal.org/docs/8/theming">Theming Guide</a>.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
          'base theme' => false,
        ),
        'version' => '8.5.6',
      ),
    ),
    'platforms' => 
    array (
      'drupal' => 
      array (
        'short_name' => 'drupal',
        'version' => '8.5.6',
        'description' => 'This platform is running Drupal 8.5.6',
      ),
    ),
    'profiles' => 
    array (
      'minimal' => 
      array (
        'name' => 'Minimal',
        'info' => 
        array (
          'name' => 'Minimal',
          'type' => 'profile',
          'description' => 'Build a custom site without pre-configured functionality. Suitable for advanced users.',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'node',
            1 => 'block',
            2 => 'dblog',
            3 => 'page_cache',
            4 => 'dynamic_page_cache',
          ),
          'themes' => 
          array (
            0 => 'stark',
          ),
          'languages' => 
          array (
            0 => 'en',
          ),
        ),
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/profiles/minimal/minimal.info.yml',
        'path' => '/var/aegir/projects/opensocial/dev/html/core/profiles/minimal',
        'version' => '8.5.6',
      ),
      'standard' => 
      array (
        'name' => 'Standard',
        'info' => 
        array (
          'name' => 'Standard',
          'type' => 'profile',
          'description' => 'Install with commonly used features pre-configured.',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'node',
            1 => 'history',
            2 => 'block',
            3 => 'breakpoint',
            4 => 'ckeditor',
            5 => 'color',
            6 => 'config',
            7 => 'comment',
            8 => 'contextual',
            9 => 'contact',
            10 => 'menu_link_content',
            11 => 'datetime',
            12 => 'block_content',
            13 => 'quickedit',
            14 => 'editor',
            15 => 'help',
            16 => 'image',
            17 => 'menu_ui',
            18 => 'options',
            19 => 'path',
            20 => 'page_cache',
            21 => 'dynamic_page_cache',
            22 => 'big_pipe',
            23 => 'taxonomy',
            24 => 'dblog',
            25 => 'search',
            26 => 'shortcut',
            27 => 'toolbar',
            28 => 'field_ui',
            29 => 'file',
            30 => 'rdf',
            31 => 'views',
            32 => 'views_ui',
            33 => 'tour',
            34 => 'automated_cron',
          ),
          'themes' => 
          array (
            0 => 'bartik',
            1 => 'seven',
          ),
          'languages' => 
          array (
            0 => 'en',
          ),
        ),
        'filename' => '/var/aegir/projects/opensocial/dev/html/core/profiles/standard/standard.info.yml',
        'path' => '/var/aegir/projects/opensocial/dev/html/core/profiles/standard',
        'version' => '8.5.6',
      ),
      'social' => 
      array (
        'name' => 'Social',
        'info' => 
        array (
          'name' => 'Social',
          'type' => 'profile',
          'description' => 'Open Social install profile.',
          'core' => '8.x',
          'version' => '8.x-2.3',
          'project' => 'social',
          'dependencies' => 
          array (
            0 => 'config',
            1 => 'system',
            2 => 'user',
            3 => 'breakpoint',
            4 => 'features',
          ),
          'themes' => 
          array (
            0 => 'seven',
            1 => 'socialbase',
            2 => 'socialblue',
          ),
          'features' => true,
          'distribution' => 
          array (
            'name' => 'Open Social',
          ),
          'languages' => 
          array (
            0 => 'en',
          ),
        ),
        'filename' => '/var/aegir/projects/opensocial/dev/html/profiles/contrib/social/social.info.yml',
        'path' => '/var/aegir/projects/opensocial/dev/html/profiles/contrib/social',
        'version' => '8.5.6',
      ),
    ),
  ),
  'sites-all' => 
  array (
    'modules' => 
    array (
    ),
    'themes' => 
    array (
    ),
  ),
  'profiles' => 
  array (
    'minimal' => 
    array (
      'modules' => 
      array (
      ),
      'themes' => 
      array (
      ),
    ),
    'standard' => 
    array (
      'modules' => 
      array (
      ),
      'themes' => 
      array (
      ),
    ),
    'social' => 
    array (
      'modules' => 
      array (
        'dropdown' => 
        array (
          'filename' => '/var/aegir/projects/opensocial/dev/html/profiles/contrib/social/modules/custom/dropdown/dropdown.module',
          'basename' => 'dropdown.module',
          'name' => 'Dropdown',
          'info' => 
          array (
            'name' => 'Dropdown',
            'type' => 'module',
            'description' => 'Dropdown field.',
            'core' => '8.x',
            'package' => 'Field types',
            'dependencies' => 
            array (
              0 => 'drupal:options',
            ),
          ),
          'schema_version' => 8000,
          'version' => NULL,
        ),
        'template_suggestions_extra' => 
        array (
          'filename' => '/var/aegir/projects/opensocial/dev/html/profiles/contrib/social/modules/custom/template_suggestions_extra/template_suggestions_extra.module',
          'basename' => 'template_suggestions_extra.module',
          'name' => 'template_suggestions_extra',
          'info' => 
          array (
            'name' => 'template_suggestions_extra',
            'type' => 'module',
            'description' => 'Add extra useful template suggestsions',
            'core' => '8.x',
            'package' => 'Custom',
          ),
          'schema_version' => 8000,
          'version' => NULL,
        ),
        'social_font' => 
        array (
          'filename' => '/var/aegir/projects/opensocial/dev/html/profiles/contrib/social/modules/custom/social_font/social_font.module',
          'basename' => 'social_font.module',
          'name' => 'Social Font',
          'info' => 
          array (
            'name' => 'Social Font',
            'type' => 'module',
            'description' => 'Social font module',
            'core' => '8.x',
          ),
          'schema_version' => 8000,
          'version' => NULL,
        ),
        'social_auth_google' => 
        array (
          'filename' => '/var/aegir/projects/opensocial/dev/html/profiles/contrib/social/modules/custom/social_auth_google/social_auth_google.module',
          'basename' => 'social_auth_google.module',
          'name' => 'Social Auth Google',
          'info' => 
          array (
            'name' => 'Social Auth Google',
            'description' => 'Social Auth integration for Google',
            'core' => '8.x',
            'type' => 'module',
            'package' => 'Social',
            'dependencies' => 
            array (
              0 => 'social_auth_extra:social_auth_extra',
            ),
          ),
          'schema_version' => 8000,
          'version' => NULL,
        ),
        'entity_access_by_field' => 
        array (
          'filename' => '/var/aegir/projects/opensocial/dev/html/profiles/contrib/social/modules/custom/entity_access_by_field/entity_access_by_field.module',
          'basename' => 'entity_access_by_field.module',
          'name' => 'Entity Access By Field',
          'info' => 
          array (
            'name' => 'Entity Access By Field',
            'type' => 'module',
            'description' => 'Enables site-builders to create custom view permissions for entities based on field values in the entity_access field.',
            'core' => '8.x',
            'package' => 'Custom',
          ),
          'schema_version' => '8003',
          'version' => NULL,
        ),
        'group_core_comments' => 
        array (
          'filename' => '/var/aegir/projects/opensocial/dev/html/profiles/contrib/social/modules/custom/group_core_comments/group_core_comments.module',
          'basename' => 'group_core_comments.module',
          'name' => 'Group Core Comments support',
          'info' => 
          array (
            'name' => 'Group Core Comments support',
            'type' => 'module',
            'description' => 'Enables Group functionality for the Comment module',
            'core' => '8.x',
            'package' => 'Group',
            'dependencies' => 
            array (
              0 => 'drupal:comment',
              1 => 'drupal:node',
              2 => 'group:group',
            ),
          ),
          'schema_version' => '8001',
          'version' => NULL,
        ),
        'social_auth_extra' => 
        array (
          'filename' => '/var/aegir/projects/opensocial/dev/html/profiles/contrib/social/modules/custom/social_auth_extra/social_auth_extra.module',
          'basename' => 'social_auth_extra.module',
          'name' => 'Social Auth Extra',
          'info' => 
          array (
            'name' => 'Social Auth Extra',
            'type' => 'module',
            'description' => 'Provides extra functionality for Social Auth',
            'core' => '8.x',
            'package' => 'Social',
            'dependencies' => 
            array (
              0 => 'social_auth:social_auth',
              1 => 'profile:profile',
            ),
          ),
          'schema_version' => '8001',
          'version' => NULL,
        ),
        'social_auth_twitter' => 
        array (
          'filename' => '/var/aegir/projects/opensocial/dev/html/profiles/contrib/social/modules/custom/social_auth_twitter/social_auth_twitter.module',
          'basename' => 'social_auth_twitter.module',
          'name' => 'Social Auth Twitter',
          'info' => 
          array (
            'name' => 'Social Auth Twitter',
            'description' => 'Social Auth integration for Twitter',
            'core' => '8.x',
            'type' => 'module',
            'package' => 'Social',
            'dependencies' => 
            array (
              0 => 'social_auth_extra:social_auth_extra',
            ),
          ),
          'schema_version' => 8000,
          'version' => NULL,
        ),
        'activity_basics' => 
        array (
          'filename' => '/var/aegir/projects/opensocial/dev/html/profiles/contrib/social/modules/custom/activity_basics/activity_basics.module',
          'basename' => 'activity_basics.module',
          'name' => 'Activity Basics',
          'info' => 
          array (
            'name' => 'Activity Basics',
            'type' => 'module',
            'description' => 'Basic implementation of activites in Open Social',
            'core' => '8.x',
            'package' => 'Custom',
            'dependencies' => 
            array (
              0 => 'activity_creator:activity_creator',
              1 => 'activity_logger:activity_logger',
              2 => 'activity_viewer:activity_viewer',
              3 => 'drupal:block_content',
              4 => 'drupal:comment',
              5 => 'dynamic_entity_reference:dynamic_entity_reference',
              6 => 'drupal:field',
              7 => 'drupal:file',
              8 => 'group:group',
              9 => 'drupal:menu_link_content',
              10 => 'message:message',
              11 => 'drupal:node',
              12 => 'drupal:options',
              13 => 'profile:profile',
              14 => 'social_event:social_event',
              15 => 'social_group:social_group',
              16 => 'social_post:social_post',
              17 => 'drupal:taxonomy',
              18 => 'token:token',
              19 => 'drupal:text',
              20 => 'drupal:user',
            ),
          ),
          'schema_version' => '8103',
          'version' => NULL,
        ),
        'social_tour' => 
        array (
          'filename' => '/var/aegir/projects/opensocial/dev/html/profiles/contrib/social/modules/custom/social_tour/social_tour.module',
          'basename' => 'social_tour.module',
          'name' => 'Social Tour',
          'info' => 
          array (
            'name' => 'Social Tour',
            'description' => 'The tour specific feature settings for Open Social.',
            'type' => 'module',
            'core' => '8.x',
            'package' => 'Social',
            'dependencies' => 
            array (
              0 => 'drupal:tour',
            ),
          ),
          'schema_version' => '8001',
          'version' => NULL,
        ),
        'social_auth_linkedin' => 
        array (
          'filename' => '/var/aegir/projects/opensocial/dev/html/profiles/contrib/social/modules/custom/social_auth_linkedin/social_auth_linkedin.module',
          'basename' => 'social_auth_linkedin.module',
          'name' => 'Social Auth LinkedIn',
          'info' => 
          array (
            'name' => 'Social Auth LinkedIn',
            'description' => 'Social Auth integration for LinkedIn',
            'core' => '8.x',
            'type' => 'module',
            'package' => 'Social',
            'dependencies' => 
            array (
              0 => 'social_auth_extra:social_auth_extra',
            ),
          ),
          'schema_version' => 8000,
          'version' => NULL,
        ),
        'mentions' => 
        array (
          'filename' => '/var/aegir/projects/opensocial/dev/html/profiles/contrib/social/modules/custom/mentions/mentions.module',
          'basename' => 'mentions.module',
          'name' => 'Mentions',
          'info' => 
          array (
            'name' => 'Mentions',
            'type' => 'module',
            'description' => 'Record, render and react to specified patterns within content.',
            'core' => '8.x',
            'package' => 'Filters',
            'configure' => 'entity.mentions_type.list',
            'dependencies' => 
            array (
              0 => 'drupal:filter',
            ),
          ),
          'schema_version' => 8000,
          'version' => NULL,
        ),
        'social_gdpr' => 
        array (
          'filename' => '/var/aegir/projects/opensocial/dev/html/profiles/contrib/social/modules/custom/social_gdpr/social_gdpr.module',
          'basename' => 'social_gdpr.module',
          'name' => 'Social GDPR',
          'info' => 
          array (
            'name' => 'Social GDPR',
            'type' => 'module',
            'description' => 'Integrate Data Policy module.',
            'core' => '8.x',
            'package' => 'Social',
            'configure' => 'social_gdpr.data_policy.revisions',
            'dependencies' => 
            array (
              0 => 'data_policy:data_policy',
            ),
          ),
          'schema_version' => 8000,
          'version' => NULL,
        ),
        'social_language' => 
        array (
          'filename' => '/var/aegir/projects/opensocial/dev/html/profiles/contrib/social/modules/custom/social_language/social_language.module',
          'basename' => 'social_language.module',
          'name' => 'Social Language',
          'info' => 
          array (
            'name' => 'Social Language',
            'type' => 'module',
            'description' => 'Support for multilingual interface translations.',
            'core' => '8.x',
            'package' => 'Social',
            'dependencies' => 
            array (
              0 => 'drupal:config_translation',
              1 => 'drupal:content_translation',
              2 => 'drupal:language',
              3 => 'drupal:locale',
            ),
          ),
          'schema_version' => 8000,
          'version' => NULL,
        ),
        'activity_creator' => 
        array (
          'filename' => '/var/aegir/projects/opensocial/dev/html/profiles/contrib/social/modules/custom/activity_creator/activity_creator.module',
          'basename' => 'activity_creator.module',
          'name' => 'Activity Creator',
          'info' => 
          array (
            'name' => 'Activity Creator',
            'type' => 'module',
            'description' => 'Creates Activity Entities.',
            'core' => '8.x',
            'package' => 'Custom',
            'dependencies' => 
            array (
              0 => 'drupal:block_content',
              1 => 'drupal:comment',
              2 => 'dynamic_entity_reference:dynamic_entity_reference',
              3 => 'drupal:field',
              4 => 'drupal:file',
              5 => 'group:group',
              6 => 'drupal:menu_link_content',
              7 => 'message:message',
              8 => 'drupal:node',
              9 => 'drupal:options',
              10 => 'profile:profile',
              11 => 'social_event:social_event',
              12 => 'social_group:social_group',
              13 => 'social_post:social_post',
              14 => 'drupal:taxonomy',
              15 => 'drupal:text',
              16 => 'drupal:user',
            ),
          ),
          'schema_version' => 8000,
          'version' => NULL,
        ),
        'sitewide_js' => 
        array (
          'filename' => '/var/aegir/projects/opensocial/dev/html/profiles/contrib/social/modules/custom/sitewide_js/sitewide_js.module',
          'basename' => 'sitewide_js.module',
          'name' => 'Sitewide JS',
          'info' => 
          array (
            'name' => 'Sitewide JS',
            'type' => 'module',
            'description' => 'Module to insert site wide custom JS.',
            'core' => '8.x',
            'package' => 'Field types',
            'dependencies' => 
            array (
              0 => 'drupal:options',
            ),
          ),
          'schema_version' => 8000,
          'version' => NULL,
        ),
        'improved_theme_settings' => 
        array (
          'filename' => '/var/aegir/projects/opensocial/dev/html/profiles/contrib/social/modules/custom/improved_theme_settings/improved_theme_settings.module',
          'basename' => 'improved_theme_settings.module',
          'name' => 'Improved Theme Settings',
          'info' => 
          array (
            'name' => 'Improved Theme Settings',
            'type' => 'module',
            'description' => 'Makes the theme pages a bit UI friendly for people with the permissions.',
            'core' => '8.x',
            'package' => 'Custom',
          ),
          'schema_version' => '8001',
          'version' => NULL,
        ),
        'download_count' => 
        array (
          'filename' => '/var/aegir/projects/opensocial/dev/html/profiles/contrib/social/modules/custom/download_count/download_count.module',
          'basename' => 'download_count.module',
          'name' => 'Download Count',
          'info' => 
          array (
            'name' => 'Download Count',
            'type' => 'module',
            'description' => 'Tracks file downloads for Drupal private core file fields.',
            'dependencies' => 
            array (
              0 => 'drupal:field',
              1 => 'drupal:file',
            ),
            'core' => '8.x',
          ),
          'schema_version' => '8001',
          'version' => NULL,
        ),
        'activity_logger' => 
        array (
          'filename' => '/var/aegir/projects/opensocial/dev/html/profiles/contrib/social/modules/custom/activity_logger/activity_logger.module',
          'basename' => 'activity_logger.module',
          'name' => 'Activity Logger',
          'info' => 
          array (
            'name' => 'Activity Logger',
            'type' => 'module',
            'description' => 'Used to log activities based on the message module',
            'core' => '8.x',
            'package' => 'Social',
            'dependencies' => 
            array (
              0 => 'activity_creator:activity_creator',
              1 => 'drupal:block_content',
              2 => 'drupal:comment',
              3 => 'dynamic_entity_reference:dynamic_entity_reference',
              4 => 'drupal:file',
              5 => 'group:group',
              6 => 'drupal:menu_link_content',
              7 => 'message:message',
              8 => 'drupal:node',
              9 => 'drupal:options',
              10 => 'profile:profile',
              11 => 'social_post:social_post',
              12 => 'drupal:taxonomy',
              13 => 'drupal:user',
            ),
          ),
          'schema_version' => 8000,
          'version' => NULL,
        ),
        'social_devel' => 
        array (
          'filename' => '/var/aegir/projects/opensocial/dev/html/profiles/contrib/social/modules/custom/social_devel/social_devel.module',
          'basename' => 'social_devel.module',
          'name' => 'Social Devel',
          'info' => 
          array (
            'name' => 'Social Devel',
            'type' => 'module',
            'description' => 'Social development modules.',
            'core' => '8.x',
            'package' => 'Social',
            'dependencies' => 
            array (
              0 => 'features_ui:features_ui',
              1 => 'config_update:config_update',
              2 => 'config_update_ui:config_update_ui',
              3 => 'devel:devel',
              4 => 'kint:kint',
              5 => 'devel_generate:devel_generate',
              6 => 'drupal:dblog',
              7 => 'drupal:views_ui',
              8 => 'drupal:field_ui',
              9 => 'drupal:contextual',
              10 => 'link_css:link_css',
            ),
          ),
          'schema_version' => 8000,
          'version' => NULL,
        ),
        'social_admin_menu' => 
        array (
          'filename' => '/var/aegir/projects/opensocial/dev/html/profiles/contrib/social/modules/custom/social_admin_menu/social_admin_menu.module',
          'basename' => 'social_admin_menu.module',
          'name' => 'Social Admin Menu',
          'info' => 
          array (
            'name' => 'Social Admin Menu',
            'type' => 'module',
            'description' => 'Social Admin Menu enhancements.',
            'core' => '8.x',
            'package' => 'Social',
            'dependencies' => 
            array (
              0 => 'drupal:toolbar',
              1 => 'admin_toolbar:admin_toolbar',
              2 => 'admin_toolbar_tools:admin_toolbar_tools',
            ),
          ),
          'schema_version' => 8000,
          'version' => NULL,
        ),
        'social_auth_facebook' => 
        array (
          'filename' => '/var/aegir/projects/opensocial/dev/html/profiles/contrib/social/modules/custom/social_auth_facebook/social_auth_facebook.module',
          'basename' => 'social_auth_facebook.module',
          'name' => 'Social Auth Facebook',
          'info' => 
          array (
            'name' => 'Social Auth Facebook',
            'description' => 'Social Auth integration for Facebook',
            'core' => '8.x',
            'type' => 'module',
            'package' => 'Social',
            'dependencies' => 
            array (
              0 => 'social_auth_extra:social_auth_extra',
            ),
          ),
          'schema_version' => 8000,
          'version' => NULL,
        ),
        'activity_send_email' => 
        array (
          'filename' => '/var/aegir/projects/opensocial/dev/html/profiles/contrib/social/modules/custom/activity_send/modules/activity_send_email/activity_send_email.module',
          'basename' => 'activity_send_email.module',
          'name' => 'Activity Send Email',
          'info' => 
          array (
            'name' => 'Activity Send Email',
            'type' => 'module',
            'description' => 'Used to send activity notifications by Email',
            'core' => '8.x',
            'package' => 'Social',
            'dependencies' => 
            array (
              0 => 'activity_send:activity_send',
            ),
          ),
          'schema_version' => '8001',
          'version' => NULL,
        ),
        'activity_viewer' => 
        array (
          'filename' => '/var/aegir/projects/opensocial/dev/html/profiles/contrib/social/modules/custom/activity_viewer/activity_viewer.module',
          'basename' => 'activity_viewer.module',
          'name' => 'Activity Viewer',
          'info' => 
          array (
            'name' => 'Activity Viewer',
            'type' => 'module',
            'description' => 'Used to display activities with support for views',
            'core' => '8.x',
            'package' => 'Social',
            'dependencies' => 
            array (
              0 => 'activity_creator:activity_creator',
              1 => 'activity_logger:activity_logger',
              2 => 'drupal:block_content',
              3 => 'drupal:comment',
              4 => 'dynamic_entity_reference:dynamic_entity_reference',
              5 => 'drupal:file',
              6 => 'group:group',
              7 => 'drupal:menu_link_content',
              8 => 'message:message',
              9 => 'drupal:node',
              10 => 'drupal:options',
              11 => 'profile:profile',
              12 => 'social_post:social_post',
              13 => 'drupal:taxonomy',
              14 => 'drupal:user',
            ),
          ),
          'schema_version' => 8000,
          'version' => NULL,
        ),
        'social_landing_page' => 
        array (
          'filename' => '/var/aegir/projects/opensocial/dev/html/profiles/contrib/social/modules/social_features/social_landing_page/social_landing_page.module',
          'basename' => 'social_landing_page.module',
          'name' => 'Social Landing Page',
          'info' => 
          array (
            'name' => 'Social Landing Page',
            'type' => 'module',
            'description' => 'Provides landing page content type for dynamic content, such as a home page.',
            'core' => '8.x',
            'dependencies' => 
            array (
              0 => 'activity_creator:activity_creator',
              1 => 'activity_creator:activity_viewer',
              2 => 'address:address',
              3 => 'block_field:block_field',
              4 => 'crop:crop',
              5 => 'dynamic_entity_reference:dynamic_entity_reference',
              6 => 'entity_reference_revisions:entity_reference_revisions',
              7 => 'drupal:field',
              8 => 'field_group:field_group',
              9 => 'drupal:file',
              10 => 'group:group',
              11 => 'drupal:image',
              12 => 'image_effects:image_effects',
              13 => 'image_widget_crop:image_widget_crop',
              14 => 'drupal:link',
              15 => 'drupal:menu_ui',
              16 => 'drupal:node',
              17 => 'drupal:options',
              18 => 'paragraphs:paragraphs',
              19 => 'drupal:path',
              20 => 'social_core:social_core',
              21 => 'social_event:social_event',
              22 => 'social_group:social_group',
              23 => 'social_post:social_post',
              24 => 'social_topic:social_topic',
              25 => 'drupal:text',
              26 => 'drupal:user',
              27 => 'drupal:views',
            ),
            'package' => 'Social',
          ),
          'schema_version' => 8000,
          'version' => NULL,
        ),
        'social_post_photo' => 
        array (
          'filename' => '/var/aegir/projects/opensocial/dev/html/profiles/contrib/social/modules/social_features/social_post/modules/social_post_photo/social_post_photo.module',
          'basename' => 'social_post_photo.module',
          'name' => 'Social Post Photo',
          'info' => 
          array (
            'name' => 'Social Post Photo',
            'description' => 'Provides an new post type bundle.',
            'type' => 'module',
            'core' => '8.x',
            'dependencies' => 
            array (
              0 => 'drupal:comment',
              1 => 'dropdown:dropdown',
              2 => 'drupal:field',
              3 => 'drupal:file',
              4 => 'drupal:image',
              5 => 'image_effects:image_effects',
              6 => 'social_post:social_post',
              7 => 'drupal:text',
              8 => 'drupal:user',
            ),
            'package' => 'Social',
          ),
          'schema_version' => '8001',
          'version' => NULL,
        ),
        'social_post' => 
        array (
          'filename' => '/var/aegir/projects/opensocial/dev/html/profiles/contrib/social/modules/social_features/social_post/social_post.module',
          'basename' => 'social_post.module',
          'name' => 'Social Post',
          'info' => 
          array (
            'name' => 'Social Post',
            'description' => 'Provides Post functionality for Open Social.',
            'type' => 'module',
            'core' => '8.x',
            'dependencies' => 
            array (
              0 => 'drupal:block',
              1 => 'drupal:comment',
              2 => 'dropdown:dropdown',
              3 => 'drupal:field',
              4 => 'group:group',
              5 => 'drupal:options',
              6 => 'social_comment:social_comment',
              7 => 'drupal:system',
              8 => 'drupal:text',
              9 => 'drupal:user',
              10 => 'drupal:views',
            ),
            'package' => 'Social',
          ),
          'schema_version' => 8000,
          'version' => NULL,
        ),
        'social_core' => 
        array (
          'filename' => '/var/aegir/projects/opensocial/dev/html/profiles/contrib/social/modules/social_features/social_core/social_core.module',
          'basename' => 'social_core.module',
          'name' => 'Social Core',
          'info' => 
          array (
            'name' => 'Social Core',
            'description' => 'Provides core components required by other features.',
            'type' => 'module',
            'core' => '8.x',
            'dependencies' => 
            array (
              0 => 'admin_toolbar_tools:admin_toolbar_tools',
              1 => 'drupal:block',
              2 => 'drupal:block_content',
              3 => 'crop:crop',
              4 => 'drupal:field',
              5 => 'field_group:field_group',
              6 => 'drupal:file',
              7 => 'drupal:help',
              8 => 'drupal:image',
              9 => 'image_effects:image_effects',
              10 => 'image_widget_crop:image_widget_crop',
              11 => 'drupal:link',
              12 => 'drupal:node',
              13 => 'override_node_options:override_node_options',
              14 => 'r4032login:r4032login',
              15 => 'drupal:system',
              16 => 'template_suggestions_extra:template_suggestions_extra',
              17 => 'drupal:text',
              18 => 'drupal:user',
              19 => 'drupal:views',
            ),
            'package' => 'Social',
          ),
          'schema_version' => '8027',
          'version' => NULL,
        ),
        'social_book' => 
        array (
          'filename' => '/var/aegir/projects/opensocial/dev/html/profiles/contrib/social/modules/social_features/social_book/social_book.module',
          'basename' => 'social_book.module',
          'name' => 'Social Book',
          'info' => 
          array (
            'name' => 'Social Book',
            'description' => 'Provides book feature.',
            'type' => 'module',
            'core' => '8.x',
            'dependencies' => 
            array (
              0 => 'drupal:block',
              1 => 'drupal:book',
              2 => 'drupal:comment',
              3 => 'entity_access_by_field:entity_access_by_field',
              4 => 'drupal:field',
              5 => 'field_group:field_group',
              6 => 'drupal:file',
              7 => 'group_core_comments:group_core_comments',
              8 => 'drupal:image',
              9 => 'drupal:node',
              10 => 'drupal:options',
              11 => 'drupal:path',
              12 => 'social_core:social_core',
              13 => 'social_event:social_event',
              14 => 'drupal:text',
              15 => 'drupal:user',
            ),
            'package' => 'Social',
          ),
          'schema_version' => '8001',
          'version' => NULL,
        ),
        'social_private_message' => 
        array (
          'filename' => '/var/aegir/projects/opensocial/dev/html/profiles/contrib/social/modules/social_features/social_private_message/social_private_message.module',
          'basename' => 'social_private_message.module',
          'name' => 'Social Private Message',
          'info' => 
          array (
            'name' => 'Social Private Message',
            'type' => 'module',
            'description' => 'Allow users to send private messages to each other',
            'core' => '8.x',
            'package' => 'Social (experimental)',
            'dependencies' => 
            array (
              0 => 'private_message:private_message',
              1 => 'social_profile:social_profile',
            ),
          ),
          'schema_version' => '8001',
          'version' => NULL,
        ),
        'social_like' => 
        array (
          'filename' => '/var/aegir/projects/opensocial/dev/html/profiles/contrib/social/modules/social_features/social_like/social_like.module',
          'basename' => 'social_like.module',
          'name' => 'Social Like',
          'info' => 
          array (
            'name' => 'Social Like',
            'description' => 'Provides Like voting functionality for Open Social.',
            'type' => 'module',
            'core' => '8.x',
            'dependencies' => 
            array (
              0 => 'activity_logger:activity_logger',
              1 => 'drupal:block',
              2 => 'dynamic_entity_reference:dynamic_entity_reference',
              3 => 'drupal:field',
              4 => 'drupal:file',
              5 => 'group_core_comments:group_core_comments',
              6 => 'like_and_dislike:like_and_dislike',
              7 => 'message:message',
              8 => 'drupal:node',
              9 => 'drupal:options',
              10 => 'profile:profile',
              11 => 'social_comment:social_comment',
              12 => 'social_post:social_post',
              13 => 'social_profile:social_profile',
              14 => 'social_topic:social_topic',
              15 => 'drupal:system',
              16 => 'drupal:text',
              17 => 'drupal:user',
              18 => 'drupal:views',
              19 => 'views_infinite_scroll:views_infinite_scroll',
              20 => 'votingapi:votingapi',
            ),
            'package' => 'Social',
          ),
          'schema_version' => '8005',
          'version' => NULL,
        ),
        'social_comment_upload' => 
        array (
          'filename' => '/var/aegir/projects/opensocial/dev/html/profiles/contrib/social/modules/social_features/social_comment_upload/social_comment_upload.module',
          'basename' => 'social_comment_upload.module',
          'name' => 'Social Comment Upload',
          'info' => 
          array (
            'name' => 'Social Comment Upload',
            'description' => 'Provides ability to upload files in comments',
            'type' => 'module',
            'core' => '8.x',
            'package' => 'Social',
            'dependencies' => 
            array (
              0 => 'drupal:comment',
              1 => 'drupal:field',
              2 => 'field_group:field_group',
              3 => 'drupal:file',
              4 => 'social_comment:social_comment',
              5 => 'drupal:text',
            ),
          ),
          'schema_version' => '8001',
          'version' => NULL,
        ),
        'social_comment' => 
        array (
          'filename' => '/var/aegir/projects/opensocial/dev/html/profiles/contrib/social/modules/social_features/social_comment/social_comment.module',
          'basename' => 'social_comment.module',
          'name' => 'Social Comment',
          'info' => 
          array (
            'name' => 'Social Comment',
            'description' => 'Provides deafult comment type and related configuration',
            'type' => 'module',
            'core' => '8.x',
            'dependencies' => 
            array (
              0 => 'drupal:comment',
              1 => 'drupal:field',
              2 => 'drupal:system',
              3 => 'drupal:text',
            ),
            'package' => 'Social',
          ),
          'schema_version' => '8001',
          'version' => NULL,
        ),
        'social_user' => 
        array (
          'filename' => '/var/aegir/projects/opensocial/dev/html/profiles/contrib/social/modules/social_features/social_user/social_user.module',
          'basename' => 'social_user.module',
          'name' => 'Social User',
          'info' => 
          array (
            'name' => 'Social User',
            'description' => 'Provides User related configuration.',
            'type' => 'module',
            'core' => '8.x',
            'dependencies' => 
            array (
              0 => 'drupal:block',
              1 => 'field_group:field_group',
              2 => 'drupal:user',
              3 => 'drupal:views',
            ),
            'package' => 'Social',
          ),
          'schema_version' => '8005',
          'version' => NULL,
        ),
        'social_embed' => 
        array (
          'filename' => '/var/aegir/projects/opensocial/dev/html/profiles/contrib/social/modules/social_features/social_embed/social_embed.module',
          'basename' => 'social_embed.module',
          'name' => 'Social Embed',
          'info' => 
          array (
            'name' => 'Social Embed',
            'type' => 'module',
            'description' => 'Module for embedding social media links. Currently in an experimental stage. NOTE, This module is a work in progress and has some serious peformance issues still.',
            'core' => '8.x',
            'package' => 'Social (experimental)',
            'dependencies' => 
            array (
              0 => 'embed:embed',
              1 => 'url_embed:url_embed',
            ),
          ),
          'schema_version' => '8001',
          'version' => NULL,
        ),
        'social_swiftmail' => 
        array (
          'filename' => '/var/aegir/projects/opensocial/dev/html/profiles/contrib/social/modules/social_features/social_swiftmail/social_swiftmail.module',
          'basename' => 'social_swiftmail.module',
          'name' => 'Social Swiftmailer',
          'info' => 
          array (
            'name' => 'Social Swiftmailer',
            'type' => 'module',
            'description' => 'Social Swiftmailer implementation',
            'core' => '8.x',
            'package' => 'Social',
            'dependencies' => 
            array (
              0 => 'swiftmailer:swiftmailer',
              1 => 'mailsystem:mailsystem',
            ),
          ),
          'schema_version' => '8001',
          'version' => NULL,
        ),
        'social_tagging' => 
        array (
          'filename' => '/var/aegir/projects/opensocial/dev/html/profiles/contrib/social/modules/social_features/social_tagging/social_tagging.module',
          'basename' => 'social_tagging.module',
          'name' => 'Social Tagging',
          'info' => 
          array (
            'name' => 'Social Tagging',
            'type' => 'module',
            'description' => 'Content tagging module',
            'core' => '8.x',
            'package' => 'social',
            'configure' => 'social_tagging.settings',
          ),
          'schema_version' => '8001',
          'version' => NULL,
        ),
        'social_profile_fields' => 
        array (
          'filename' => '/var/aegir/projects/opensocial/dev/html/profiles/contrib/social/modules/social_features/social_profile/modules/social_profile_fields/social_profile_fields.module',
          'basename' => 'social_profile_fields.module',
          'name' => 'Social Profile Fields',
          'info' => 
          array (
            'name' => 'Social Profile Fields',
            'description' => 'Provides hiding fields on a per profile_type basis',
            'type' => 'module',
            'core' => '8.x',
            'package' => 'Social (experimental)',
            'configure' => 'social_profile_fields.settings',
            'dependencies' => 
            array (
              0 => 'drupal:user',
              1 => 'social_profile:social_profile',
            ),
          ),
          'schema_version' => '8001',
          'version' => NULL,
        ),
        'social_profile_privacy' => 
        array (
          'filename' => '/var/aegir/projects/opensocial/dev/html/profiles/contrib/social/modules/social_features/social_profile/modules/social_profile_privacy/social_profile_privacy.module',
          'basename' => 'social_profile_privacy.module',
          'name' => 'Social Profile Privacy',
          'info' => 
          array (
            'name' => 'Social Profile Privacy',
            'description' => 'Provides ability to set visibility of profile fields',
            'type' => 'module',
            'core' => '8.x',
            'package' => 'Social (experimental)',
            'configure' => 'social_profile.settings',
            'dependencies' => 
            array (
              0 => 'social_profile:social_profile',
              1 => 'drupal:user',
            ),
          ),
          'schema_version' => 8000,
          'version' => NULL,
        ),
        'social_profile' => 
        array (
          'filename' => '/var/aegir/projects/opensocial/dev/html/profiles/contrib/social/modules/social_features/social_profile/social_profile.module',
          'basename' => 'social_profile.module',
          'name' => 'Social Profile',
          'info' => 
          array (
            'name' => 'Social Profile',
            'description' => 'Provides user profiles.',
            'type' => 'module',
            'core' => '8.x',
            'configure' => 'social_profile.settings',
            'dependencies' => 
            array (
              0 => 'address:address',
              1 => 'drupal:block',
              2 => 'drupal:field',
              3 => 'field_group:field_group',
              4 => 'drupal:file',
              5 => 'drupal:image',
              6 => 'image_widget_crop:image_widget_crop',
              7 => 'profile:profile',
              8 => 'social_core:social_core',
              9 => 'drupal:system',
              10 => 'drupal:taxonomy',
              11 => 'drupal:telephone',
              12 => 'drupal:text',
              13 => 'drupal:user',
              14 => 'drupal:views',
            ),
            'package' => 'Social',
          ),
          'schema_version' => '8007',
          'version' => NULL,
        ),
        'social_user_export' => 
        array (
          'filename' => '/var/aegir/projects/opensocial/dev/html/profiles/contrib/social/modules/social_features/social_user_export/social_user_export.module',
          'basename' => 'social_user_export.module',
          'name' => 'Social User Export',
          'info' => 
          array (
            'name' => 'Social User Export',
            'description' => 'Adds ability to export users to a CSV.',
            'type' => 'module',
            'core' => '8.x',
            'package' => 'Social',
            'dependencies' => 
            array (
              0 => 'drupal:user',
              1 => 'csv_serialization:csv_serialization',
              2 => 'social_profile:social_profile',
              3 => 'profile:profile',
            ),
          ),
          'schema_version' => 8000,
          'version' => NULL,
        ),
        'social_group' => 
        array (
          'filename' => '/var/aegir/projects/opensocial/dev/html/profiles/contrib/social/modules/social_features/social_group/social_group.module',
          'basename' => 'social_group.module',
          'name' => 'Social Group',
          'info' => 
          array (
            'name' => 'Social Group',
            'description' => 'Provides Group feature.',
            'type' => 'module',
            'core' => '8.x',
            'dependencies' => 
            array (
              0 => 'address:address',
              1 => 'drupal:block',
              2 => 'drupal:datetime',
              3 => 'drupal:field',
              4 => 'field_group:field_group',
              5 => 'drupal:file',
              6 => 'gnode:gnode',
              7 => 'group:group',
              8 => 'drupal:image',
              9 => 'image_widget_crop:image_widget_crop',
              10 => 'drupal:node',
              11 => 'drupal:path',
              12 => 'profile:profile',
              13 => 'social_core:social_core',
              14 => 'social_event:social_event',
              15 => 'social_profile:social_profile',
              16 => 'social_topic:social_topic',
              17 => 'drupal:system',
              18 => 'drupal:taxonomy',
              19 => 'drupal:text',
              20 => 'drupal:user',
              21 => 'drupal:views',
            ),
            'package' => 'Social',
          ),
          'schema_version' => '8012',
          'version' => NULL,
        ),
        'social_mentions' => 
        array (
          'filename' => '/var/aegir/projects/opensocial/dev/html/profiles/contrib/social/modules/social_features/social_mentions/social_mentions.module',
          'basename' => 'social_mentions.module',
          'name' => 'Social Mentions',
          'info' => 
          array (
            'name' => 'Social Mentions',
            'description' => 'Provide mentions feature for Open Social.',
            'type' => 'module',
            'core' => '8.x',
            'dependencies' => 
            array (
              0 => 'activity_logger:activity_logger',
              1 => 'dynamic_entity_reference:dynamic_entity_reference',
              2 => 'drupal:field',
              3 => 'drupal:image',
              4 => 'mentions:mentions',
              5 => 'message:message',
              6 => 'drupal:options',
              7 => 'profile:profile',
              8 => 'social_core:social_core',
              9 => 'social_profile:social_profile',
            ),
            'package' => 'Social',
          ),
          'schema_version' => 8000,
          'version' => NULL,
        ),
        'social_activity' => 
        array (
          'filename' => '/var/aegir/projects/opensocial/dev/html/profiles/contrib/social/modules/social_features/social_activity/social_activity.module',
          'basename' => 'social_activity.module',
          'name' => 'Social Activity',
          'info' => 
          array (
            'name' => 'Social Activity',
            'description' => 'Provides activity stream for Open Social.',
            'type' => 'module',
            'core' => '8.x',
            'dependencies' => 
            array (
              0 => 'activity_creator:activity_creator',
              1 => 'activity_logger:activity_logger',
              2 => 'activity_viewer:activity_viewer',
              3 => 'drupal:block',
              4 => 'drupal:block_content',
              5 => 'drupal:comment',
              6 => 'crop:crop',
              7 => 'dynamic_entity_reference:dynamic_entity_reference',
              8 => 'drupal:field',
              9 => 'drupal:file',
              10 => 'flag:flag',
              11 => 'group:group',
              12 => 'mentions:mentions',
              13 => 'drupal:menu_link_content',
              14 => 'message:message',
              15 => 'drupal:node',
              16 => 'drupal:options',
              17 => 'profile:profile',
              18 => 'search_api:search_api',
              19 => 'social_comment:social_comment',
              20 => 'social_event:social_event',
              21 => 'social_font:social_font',
              22 => 'social_group:social_group',
              23 => 'social_post:social_post',
              24 => 'social_topic:social_topic',
              25 => 'drupal:system',
              26 => 'drupal:taxonomy',
              27 => 'drupal:text',
              28 => 'drupal:user',
              29 => 'drupal:views',
              30 => 'votingapi:votingapi',
            ),
            'package' => 'Social',
          ),
          'schema_version' => '8003',
          'version' => NULL,
        ),
        'social_editor' => 
        array (
          'filename' => '/var/aegir/projects/opensocial/dev/html/profiles/contrib/social/modules/social_features/social_editor/social_editor.module',
          'basename' => 'social_editor.module',
          'name' => 'Social Editor',
          'info' => 
          array (
            'name' => 'Social Editor',
            'description' => 'Provides site editor components.',
            'type' => 'module',
            'core' => '8.x',
            'dependencies' => 
            array (
              0 => 'drupal:ckeditor',
              1 => 'drupal:editor',
              2 => 'drupal:filter',
            ),
            'package' => 'Social',
          ),
          'schema_version' => 8000,
          'version' => NULL,
        ),
        'social_sso' => 
        array (
          'filename' => '/var/aegir/projects/opensocial/dev/html/profiles/contrib/social/modules/social_features/social_sso/social_sso.module',
          'basename' => 'social_sso.module',
          'name' => 'Social SSO',
          'info' => 
          array (
            'name' => 'Social SSO',
            'type' => 'module',
            'description' => 'Provides autorizathion with social networks for Open Social',
            'core' => '8.x',
            'package' => 'Social',
            'dependencies' => 
            array (
              0 => 'social_auth_extra:social_auth_extra',
            ),
          ),
          'schema_version' => 8000,
          'version' => NULL,
        ),
        'social_topic' => 
        array (
          'filename' => '/var/aegir/projects/opensocial/dev/html/profiles/contrib/social/modules/social_features/social_topic/social_topic.module',
          'basename' => 'social_topic.module',
          'name' => 'Social Topic',
          'info' => 
          array (
            'name' => 'Social Topic',
            'description' => 'Provides Topic content type and related configuration. ',
            'type' => 'module',
            'core' => '8.x',
            'dependencies' => 
            array (
              0 => 'drupal:block',
              1 => 'drupal:comment',
              2 => 'entity_access_by_field:entity_access_by_field',
              3 => 'drupal:field',
              4 => 'field_group:field_group',
              5 => 'drupal:file',
              6 => 'group:group',
              7 => 'group_core_comments:group_core_comments',
              8 => 'drupal:image',
              9 => 'image_widget_crop:image_widget_crop',
              10 => 'drupal:menu_ui',
              11 => 'drupal:node',
              12 => 'drupal:options',
              13 => 'drupal:path',
              14 => 'social_comment:social_comment',
              15 => 'social_core:social_core',
              16 => 'social_event:social_event',
              17 => 'drupal:system',
              18 => 'drupal:taxonomy',
              19 => 'drupal:text',
              20 => 'drupal:user',
              21 => 'drupal:views',
            ),
            'package' => 'Social',
          ),
          'schema_version' => '8001',
          'version' => NULL,
        ),
        'social_search' => 
        array (
          'filename' => '/var/aegir/projects/opensocial/dev/html/profiles/contrib/social/modules/social_features/social_search/social_search.module',
          'basename' => 'social_search.module',
          'name' => 'Social Search',
          'info' => 
          array (
            'name' => 'Social Search',
            'description' => 'Provide Search API configuration and Search Views.',
            'type' => 'module',
            'core' => '8.x',
            'dependencies' => 
            array (
              0 => 'drupal:block',
              1 => 'group:group',
              2 => 'drupal:node',
              3 => 'profile:profile',
              4 => 'search_api:search_api',
              5 => 'search_api_db:search_api_db',
              6 => 'social_group:social_group',
              7 => 'social_profile:social_profile',
              8 => 'drupal:system',
              9 => 'drupal:user',
              10 => 'drupal:views',
            ),
            'package' => 'Social',
          ),
          'schema_version' => '8109',
          'version' => NULL,
        ),
        'social_follow_content' => 
        array (
          'filename' => '/var/aegir/projects/opensocial/dev/html/profiles/contrib/social/modules/social_features/social_follow_content/social_follow_content.module',
          'basename' => 'social_follow_content.module',
          'name' => 'Social Follow Content',
          'info' => 
          array (
            'name' => 'Social Follow Content',
            'description' => 'Provides "Follow Content" flag type and related functionality.',
            'type' => 'module',
            'core' => '8.x',
            'dependencies' => 
            array (
              0 => 'activity_logger:activity_logger',
              1 => 'drupal:block',
              2 => 'drupal:field',
              3 => 'drupal:node',
              4 => 'drupal:options',
              5 => 'drupal:system',
              6 => 'drupal:user',
              7 => 'drupal:views',
              8 => 'dynamic_entity_reference:dynamic_entity_reference',
              9 => 'flag:flag',
              10 => 'message:message',
              11 => 'profile:profile',
              12 => 'social_event:social_event',
              13 => 'social_page:social_page',
              14 => 'social_topic:social_topic',
            ),
            'package' => 'Social',
          ),
          'schema_version' => 8000,
          'version' => NULL,
        ),
        'social_sharing' => 
        array (
          'filename' => '/var/aegir/projects/opensocial/dev/html/profiles/contrib/social/modules/social_features/social_sharing/social_sharing.module',
          'basename' => 'social_sharing.module',
          'name' => 'Social Sharing',
          'info' => 
          array (
            'name' => 'Social Sharing',
            'description' => 'Provides sharing of content to social media.',
            'type' => 'module',
            'core' => '8.x',
            'dependencies' => 
            array (
              0 => 'addtoany:addtoany',
              1 => 'drupal:block',
              2 => 'drupal:node',
              3 => 'drupal:system',
              4 => 'drupal:views',
            ),
            'package' => 'Social',
          ),
          'schema_version' => 8000,
          'version' => NULL,
        ),
        'social_event_type' => 
        array (
          'filename' => '/var/aegir/projects/opensocial/dev/html/profiles/contrib/social/modules/social_features/social_event/modules/social_event_type/social_event_type.module',
          'basename' => 'social_event_type.module',
          'name' => 'Social Event Type',
          'info' => 
          array (
            'name' => 'Social Event Type',
            'description' => 'Provides and event types taxonomy for the event content type.',
            'type' => 'module',
            'core' => '8.x',
            'dependencies' => 
            array (
              0 => 'social_event:social_event',
            ),
            'package' => 'Social',
          ),
          'schema_version' => 8000,
          'version' => NULL,
        ),
        'social_event_managers' => 
        array (
          'filename' => '/var/aegir/projects/opensocial/dev/html/profiles/contrib/social/modules/social_features/social_event/modules/social_event_managers/social_event_managers.module',
          'basename' => 'social_event_managers.module',
          'name' => 'Social Event Organisers',
          'info' => 
          array (
            'name' => 'Social Event Organisers',
            'type' => 'module',
            'description' => 'Social Event Organisers',
            'core' => '8.x',
            'package' => 'Social',
            'dependencies' => 
            array (
              0 => 'drupal:block',
              1 => 'drupal:field',
              2 => 'drupal:node',
              3 => 'drupal:profile',
              4 => 'social_event:social_event',
              5 => 'social_profile:social_profile',
              6 => 'drupal:user',
              7 => 'drupal:views',
            ),
          ),
          'schema_version' => '8001',
          'version' => NULL,
        ),
        'social_event' => 
        array (
          'filename' => '/var/aegir/projects/opensocial/dev/html/profiles/contrib/social/modules/social_features/social_event/social_event.module',
          'basename' => 'social_event.module',
          'name' => 'Social Event',
          'info' => 
          array (
            'name' => 'Social Event',
            'description' => 'Provides Event content type and related configuration. ',
            'type' => 'module',
            'core' => '8.x',
            'configure' => 'social_event.settings',
            'dependencies' => 
            array (
              0 => 'address:address',
              1 => 'drupal:block',
              2 => 'drupal:comment',
              3 => 'drupal:datetime',
              4 => 'entity_access_by_field:entity_access_by_field',
              5 => 'drupal:field',
              6 => 'drupal:file',
              7 => 'group:group',
              8 => 'group_core_comments:group_core_comments',
              9 => 'drupal:image',
              10 => 'image_widget_crop:image_widget_crop',
              11 => 'drupal:menu_ui',
              12 => 'drupal:node',
              13 => 'drupal:options',
              14 => 'drupal:path',
              15 => 'profile:profile',
              16 => 'social_comment:social_comment',
              17 => 'social_core:social_core',
              18 => 'social_profile:social_profile',
              19 => 'drupal:system',
              20 => 'drupal:text',
              21 => 'drupal:user',
              22 => 'drupal:views',
              23 => 'field_group:field_group',
            ),
            'package' => 'Social',
          ),
          'schema_version' => '8002',
          'version' => NULL,
        ),
        'social_page' => 
        array (
          'filename' => '/var/aegir/projects/opensocial/dev/html/profiles/contrib/social/modules/social_features/social_page/social_page.module',
          'basename' => 'social_page.module',
          'name' => 'Social Page',
          'info' => 
          array (
            'name' => 'Social Page',
            'description' => 'Provide basic pages content type for your static content, such as an About us page.',
            'type' => 'module',
            'core' => '8.x',
            'dependencies' => 
            array (
              0 => 'drupal:comment',
              1 => 'entity_access_by_field:entity_access_by_field',
              2 => 'drupal:field',
              3 => 'field_group:field_group',
              4 => 'drupal:file',
              5 => 'drupal:image',
              6 => 'image_widget_crop:image_widget_crop',
              7 => 'drupal:menu_ui',
              8 => 'drupal:node',
              9 => 'drupal:options',
              10 => 'drupal:path',
              11 => 'social_comment:social_comment',
              12 => 'social_core:social_core',
              13 => 'social_event:social_event',
              14 => 'drupal:text',
              15 => 'drupal:user',
            ),
            'package' => 'Social',
          ),
          'schema_version' => 8000,
          'version' => NULL,
        ),
      ),
      'themes' => 
      array (
        'socialbase.info' => 
        array (
          'filename' => '/var/aegir/projects/opensocial/dev/html/profiles/contrib/social/themes/socialbase/socialbase.info.yml',
          'basename' => 'socialbase.info.yml',
          'name' => 'Social Base theme',
          'info' => 
          array (
            'name' => 'Social Base theme',
            'description' => 'Base theme for Open social installations. Create your own subtheme or enable Social Blue',
            'screenshot' => 'screenshot.png',
            'type' => 'theme',
            'base theme' => 'bootstrap',
            'core' => '8.x',
            'libraries-extend' => 
            array (
              'core/drupal.ajax' => 
              array (
                0 => 'socialbase/form--autocomplete',
              ),
              'core/drupal.tabledrag' => 
              array (
                0 => 'socialbase/tabledrag',
              ),
              'core/drupal.date' => 
              array (
                0 => 'socialbase/form--datepicker',
              ),
              'core/jquery.ui.datepicker' => 
              array (
                0 => 'socialbase/form--timepicker',
              ),
              'bootstrap/popover' => 
              array (
                0 => 'socialbase/popover',
              ),
              'core/drupal.dialog.ajax' => 
              array (
                0 => 'socialbase/modal',
              ),
              'image_widget_crop/cropper.integration' => 
              array (
                0 => 'socialbase/cropper.integration',
              ),
            ),
            'stylesheets-remove' => 
            array (
              0 => 'like_and_dislike.icons.css',
            ),
            'libraries-override' => 
            array (
              'core/normalize' => false,
              'core/jquery.ui' => 
              array (
                'css' => 
                array (
                  'component' => 
                  array (
                    'assets/vendor/jquery.ui/themes/base/core.css' => false,
                  ),
                  'theme' => 
                  array (
                    'assets/vendor/jquery.ui/themes/base/theme.css' => false,
                  ),
                ),
              ),
              'core/jquery.ui.button' => 
              array (
                'css' => 
                array (
                  'component' => 
                  array (
                    'assets/vendor/jquery.ui/themes/base/button.css' => false,
                  ),
                ),
              ),
              'core/jquery.ui.datepicker' => 
              array (
                'css' => 
                array (
                  'component' => 
                  array (
                    'assets/vendor/jquery.ui/themes/base/datepicker.css' => false,
                  ),
                ),
              ),
              'core/jquery.ui.dialog' => 
              array (
                'css' => 
                array (
                  'component' => 
                  array (
                    'assets/vendor/jquery.ui/themes/base/dialog.css' => false,
                  ),
                ),
              ),
              'core/jquery.ui.menu' => 
              array (
                'css' => 
                array (
                  'component' => 
                  array (
                    'assets/vendor/jquery.ui/themes/base/menu.css' => false,
                  ),
                ),
              ),
              'system/base' => false,
              'views/views.module' => false,
              'classy/file' => false,
              'like_and_dislike/behavior' => 
              array (
                'js' => 
                array (
                  'js/like_and_dislike_service.js' => false,
                ),
              ),
              'like_and_dislike/icons' => false,
              'private_message/inbox_block' => false,
            ),
            'libraries' => 
            array (
              0 => 'socialbase/print',
              1 => 'socialbase/base',
              2 => 'socialbase/alert',
              3 => 'socialbase/badge',
              4 => 'socialbase/button',
              5 => 'socialbase/cards',
              6 => 'socialbase/close-icon',
              7 => 'socialbase/form-controls',
              8 => 'socialbase/list',
              9 => 'socialbase/spinner',
              10 => 'socialbase/dropdown',
              11 => 'socialbase/form-elements',
              12 => 'socialbase/form-input-groups',
              13 => 'socialbase/imagecrop',
              14 => 'socialbase/media',
              15 => 'socialbase/mentions',
              16 => 'socialbase/navbar',
              17 => 'socialbase/tour',
              18 => 'socialbase/like',
              19 => 'socialbase/layout',
            ),
            'component-libraries' => 
            array (
              'base' => 
              array (
                'paths' => 
                array (
                  0 => 'components/01-base',
                ),
              ),
              'atoms' => 
              array (
                'paths' => 
                array (
                  0 => 'components/02-atoms',
                ),
              ),
              'molecules' => 
              array (
                'paths' => 
                array (
                  0 => 'components/03-molecules',
                ),
              ),
              'organisms' => 
              array (
                'paths' => 
                array (
                  0 => 'components/04-organisms',
                ),
              ),
              'templates' => 
              array (
                'paths' => 
                array (
                  0 => 'components/05-templates',
                ),
              ),
              'pages' => 
              array (
                'paths' => 
                array (
                  0 => 'components/06-pages',
                ),
              ),
            ),
            'ckeditor_stylesheets' => 
            array (
              0 => 'assets/css/ckeditor.css',
            ),
            'regions' => 
            array (
              'hidden' => 'Hidden',
              'header' => 'Header',
              'breadcrumb' => 'Breadcrumb',
              'hero' => 'Hero',
              'secondary_navigation' => 'Secondary navigation',
              'content_top' => 'Content top',
              'title' => 'Page title',
              'content' => 'Content',
              'complementary_top' => 'Complementary top',
              'complementary_bottom' => 'Complementary bottom',
              'content_bottom' => 'Content bottom',
              'sidebar_first' => 'Sidebar First',
              'sidebar_second' => 'Sidebar Second',
              'footer' => 'Footer',
            ),
            'regions_hidden' => 
            array (
              0 => 'hidden',
            ),
          ),
        ),
        'socialblue.info' => 
        array (
          'filename' => '/var/aegir/projects/opensocial/dev/html/profiles/contrib/social/themes/socialblue/socialblue.info.yml',
          'basename' => 'socialblue.info.yml',
          'name' => 'Social Blue theme',
          'info' => 
          array (
            'name' => 'Social Blue theme',
            'description' => 'Demo theme for Open social installations.',
            'screenshot' => 'screenshot.png',
            'type' => 'theme',
            'base theme' => 'socialbase',
            'core' => '8.x',
            'libraries' => 
            array (
              0 => 'socialblue/brand',
              1 => 'socialblue/site-footer',
            ),
            'libraries-extend' => 
            array (
              'socialbase/base' => 
              array (
                0 => 'socialblue/base',
              ),
              'socialbase/alert' => 
              array (
                0 => 'socialblue/alert',
              ),
              'socialbase/badge' => 
              array (
                0 => 'socialblue/badge',
              ),
              'socialbase/button' => 
              array (
                0 => 'socialblue/button',
              ),
              'socialbase/cards' => 
              array (
                0 => 'socialblue/cards',
              ),
              'socialbase/form-controls' => 
              array (
                0 => 'socialblue/form-controls',
              ),
              'socialbase/list' => 
              array (
                0 => 'socialblue/list',
              ),
              'socialbase/spinner' => 
              array (
                0 => 'socialblue/spinner',
              ),
              'socialbase/breadcrumb' => 
              array (
                0 => 'socialblue/breadcrumb',
              ),
              'socialbase/dropdown' => 
              array (
                0 => 'socialblue/dropdown',
              ),
              'socialbase/file' => 
              array (
                0 => 'socialblue/file',
              ),
              'socialbase/form-elements' => 
              array (
                0 => 'socialblue/form-elements',
              ),
              'socialbase/form--input-groups' => 
              array (
                0 => 'socialblue/form--input-groups',
              ),
              'socialbase/like' => 
              array (
                0 => 'socialblue/like',
              ),
              'core/drupal.date' => 
              array (
                0 => 'socialblue/form--datepicker',
              ),
              'core/jquery.ui.datepicker' => 
              array (
                0 => 'socialblue/form--timepicker',
              ),
              'socialbase/form--password' => 
              array (
                0 => 'socialblue/form--password',
              ),
              'socialbase/pagination' => 
              array (
                0 => 'socialblue/pagination',
              ),
              'socialbase/popover' => 
              array (
                0 => 'socialblue/popover',
              ),
              'socialbase/nav-book' => 
              array (
                0 => 'socialblue/nav-book',
              ),
              'socialbase/nav-tabs' => 
              array (
                0 => 'socialblue/nav-tabs',
              ),
              'socialbase/navbar' => 
              array (
                0 => 'socialblue/navbar',
              ),
              'socialbase/select2' => 
              array (
                0 => 'socialblue/select2',
              ),
              'socialbase/teaser' => 
              array (
                0 => 'socialblue/teaser',
              ),
              'socialbase/tour' => 
              array (
                0 => 'socialblue/tour',
              ),
              'socialbase/comment' => 
              array (
                0 => 'socialblue/comment',
              ),
              'socialbase/hero' => 
              array (
                0 => 'socialblue/hero',
              ),
              'socialbase/message' => 
              array (
                0 => 'socialblue/message',
              ),
              'socialbase/meta' => 
              array (
                0 => 'socialblue/meta',
              ),
              'socialbase/modal' => 
              array (
                0 => 'socialblue/modal',
              ),
              'socialbase/offcanvas' => 
              array (
                0 => 'socialblue/offcanvas',
              ),
              'socialbase/stream' => 
              array (
                0 => 'socialblue/stream',
              ),
              'socialbase/page-node' => 
              array (
                0 => 'socialblue/page-node',
              ),
            ),
            'ckeditor_stylesheets' => 
            array (
              0 => 'assets/css/ckeditor.css',
            ),
            'component-libraries' => 
            array (
              'base' => 
              array (
                'paths' => 
                array (
                  0 => 'components/01-base',
                ),
              ),
              'atoms' => 
              array (
                'paths' => 
                array (
                  0 => 'components/02-atoms',
                ),
              ),
              'molecules' => 
              array (
                'paths' => 
                array (
                  0 => 'components/03-molecules',
                ),
              ),
              'organisms' => 
              array (
                'paths' => 
                array (
                  0 => 'components/04-organisms',
                ),
              ),
              'templates' => 
              array (
                'paths' => 
                array (
                  0 => 'components/05-templates',
                ),
              ),
              'pages' => 
              array (
                'paths' => 
                array (
                  0 => 'components/06-pages',
                ),
              ),
            ),
            'regions' => 
            array (
              'hidden' => 'Hidden',
              'header' => 'Header',
              'breadcrumb' => 'Breadcrumb',
              'hero' => 'Hero',
              'secondary_navigation' => 'Secondary navigation',
              'content_top' => 'Content top',
              'title' => 'Page title',
              'content' => 'Content',
              'complementary_top' => 'Complementary top',
              'complementary_bottom' => 'Complementary bottom',
              'content_bottom' => 'Content bottom',
              'sidebar_first' => 'Sidebar First',
              'sidebar_second' => 'Sidebar Second',
              'footer' => 'Footer',
            ),
          ),
        ),
      ),
    ),
  ),
);