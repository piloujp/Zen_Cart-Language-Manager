<?php

$define = [
    'HEADING_TITLE' => 'Language Manager',
    'NAVBAR_TITLE' => 'Language Manager',

    // Create Pack Section
    'BUTTON_CREATE_NEW_PACK' => 'Create New Language Pack',
    'TEXT_NEW_LANGUAGE_SOURCE' => 'Source Language:',
    'TEXT_NEW_LANGUAGE_TARGET' => 'Target Language (lowercase):',
    'TEXT_PLACEHOLDER_LANG_CODE' => 'e.g. french',
    'TEXT_TITLE_LOWERCASE' => 'Lowercase letters only',
    'BUTTON_CREATE' => 'Create',

    // Selector Section
    'TEXT_TARGET_TEMPLATE' => 'Target Template:',
    'TEXT_TARGET_TEMPLATE_LIVE' => 'Live Store',
    'TEXT_TARGET_LANGUAGE' => 'Target Language:',
    'TEXT_FILE_TO_EDIT' => 'File to Edit:',
    'TEXT_CHOOSE_FILE' => '-- Choose File --',

    // Modes & Legends
    'TEXT_MODE_BASIC' => 'Basic Mode',
    'TEXT_MODE_ADVANCED' => 'Advanced / Developer',
    'TEXT_SEARCH_PLACEHOLDER' => 'Search keys or text...',
    'TEXT_LINKED_LANGUAGE_SUGGESTION' => '<strong>Suggestion:</strong> The language <code>%s</code> is linked to the <strong>%s</strong> template in your store settings.',
    'TEXT_LINKED_LANGUAGE_CURRENT' => 'You are currently editing overrides for: <em>%s</em>',
    'TEXT_LINKED_LANGUAGE_SWITCH' => 'Switch to %s',

     // Legends
    'TEXT_LEGEND_BASIC_TITLE' => 'Basic Mode:',
    'TEXT_LEGEND_BASIC_DESC' => 'Enter text normally. Quotes and special characters are handled automatically.',
    'TEXT_LEGEND_BASIC_NOTE' => 'Note: Complex values (like Constants) are locked in this mode to prevent errors. Switch to Advanced to edit them.',

    'TEXT_LEGEND_ADVANCED_TITLE' => 'Advanced Mode:',
    'TEXT_LEGEND_ADVANCED_DESC' => 'You are editing raw PHP code.',
    'TEXT_LEGEND_ADVANCED_RULES' => '<span class="text-danger">Rules:</span> You <strong>must</strong> include quotes (e.g., <code>\'My Text\'</code>) or valid PHP syntax (e.g., <code>\'Hello \' . STORE_NAME</code>).',

    // Table
    'TABLE_HEADING_KEY' => 'Key',
    'TABLE_HEADING_ORIGINAL' => 'Original (Raw Code)',
    'TABLE_HEADING_OVERRIDE' => 'Your Override',
    'TEXT_RAW_PHP' => '(RAW PHP)',
    'TEXT_COMPLEX_LOCKED' => 'COMPLEX PHP (Switch to Advanced Mode to Edit)',
    'TEXT_CONTAINS_TOKEN' => 'WARNING: Contains %s',
    'TEXT_USE_DEFAULT' => 'Use Default',
    'TEXT_USE_DEFAULT_LABEL' => 'Check to use the original value (deletes override)',

    'BUTTON_SAVE_CHANGES' => 'Save Changes',

    // Messages & Errors (Create Pack)
    'ERROR_LANGUAGE_NAME_REQUIRED' => 'Error: Language name is required.',
    'ERROR_CATALOG_LANG_EXISTS' => 'Error: Catalog Language "%s" already exists!',
    'ERROR_SOURCE_CATALOG_NOT_FOUND' => 'Error: Source Catalog files (%s) not found.',
    'ERROR_SOURCE_ADMIN_NOT_FOUND' => 'Error: Source Admin files (%s) not found. Cannot clone.',
    'ERROR_COPY_CATALOG_LOADER' => 'Error: Could not copy Catalog loader.',
    'ERROR_COPY_ADMIN_LOADER' => 'Error: Could not copy Admin loader.',
    'ERROR_SYNTAX_ERROR' => 'File NOT saved due to syntax errors.',
    'ERROR_CANT_CREATE_DIR' => 'Error: Could not create directory ',
    'ERROR_CHECK_PERMISSIONS' => 'Write Error: Check permissions for ',
    'TEXT_SUCCESS_SAVED' => 'Successfully saved %s overrides to ',
    'TEXT_OVERRIDES_REMOVED' => 'All overrides removed. File deleted.',
    'PHP_SYNTAX_ERROR' => ': Syntax Error',

    'SUCCESS_CATALOG_CREATED' => 'Catalog files created successfully.',
    'SUCCESS_ADMIN_CREATED' => 'Admin files created successfully.',
    'SUCCESS_LANG_PACK_READY' => 'Language Pack "%s" is ready. You can now add it in Localization > Languages.',
];

return $define;
