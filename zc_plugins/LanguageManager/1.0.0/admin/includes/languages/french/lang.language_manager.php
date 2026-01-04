<?php

$define = [
    'HEADING_TITLE' => 'Gestionnaire de langue',
    'NAVBAR_TITLE' => 'Gestionnaire de langue',

    // Create Pack Section
    'BUTTON_CREATE_NEW_PACK' => 'Créer un nouveau pack de langue',
    'TEXT_CLONE_LABEL' => 'Cloner la version <strong>anglaise</strong> dans une nouvelle langue :',
    'TEXT_PLACEHOLDER_LANG_CODE' => 'par exemple : french',
    'TEXT_TITLE_LOWERCASE' => 'Lettres minuscules uniquement',
    'BUTTON_CREATE' => 'Créer',

    // Selector Section
    'TEXT_TARGET_LANGUAGE' => 'Langue :',
    'TEXT_FILE_TO_EDIT' => 'Fichier à modifier :',
    'TEXT_CHOOSE_FILE' => '-- Choisir un fichier --',

    // Modes & Legends
    'TEXT_MODE_BASIC' => 'Mode de base',
    'TEXT_MODE_ADVANCED' => 'Avancé / Développeur',
    'TEXT_SEARCH_PLACEHOLDER' => 'Mots clés ou texte de recherche...',

    'TEXT_LEGEND_BASIC_TITLE' => 'Mode de base :',
    'TEXT_LEGEND_BASIC_DESC' => 'Saisissez votre texte normalement. Les guillemets et les caractères spéciaux sont gérés automatiquement.',
    'TEXT_LEGEND_BASIC_NOTE' => 'Remarque : Les valeurs complexes (comme les constantes) sont verrouillées dans ce mode afin d’éviter les erreurs. Passez en mode Avancé pour les modifier.',

    'TEXT_LEGEND_ADVANCED_TITLE' => 'Mode avancé :',
    'TEXT_LEGEND_ADVANCED_DESC' => 'Vous modifiez du code PHP brut.',
    'TEXT_LEGEND_ADVANCED_RULES' => '<span class="text-danger">Règles :</span> Vous devez inclure des guillemets (par exemple, <code>\'Mon texte\'</code>) ou une syntaxe PHP valide (par exemple, <code>\'Bonjour \' . STORE_NAME</code>).',

    // Table
    'TABLE_HEADING_KEY' => 'Clé',
    'TABLE_HEADING_ORIGINAL' => 'Original (Code brut)',
    'TABLE_HEADING_OVERRIDE' => 'Votre remplacement',
    'TEXT_RAW_PHP' => '(PHP brut)',
    'TEXT_COMPLEX_LOCKED' => 'PHP COMPLEXE (Passez en mode avancé pour modifier)',
    'TEXT_CONTAINS_TOKEN' => 'ATTENTION : Contient %s',
    'TEXT_USE_DEFAULT' => 'Utiliser la valeur par défaut',
    'TEXT_USE_DEFAULT_LABEL' => 'Cocher cette case pour utiliser la valeur d’origine (supprime la valeur de remplacement)',

    'BUTTON_SAVE_CHANGES' => 'Enregistrer les modifications',

    // Messages & Errors (Create Pack)
    'ERROR_LANGUAGE_NAME_REQUIRED' => 'Erreur : Le nom de la langue est obligatoire.',
    'ERROR_CATALOG_LANG_EXISTS' => 'Erreur : la langue du catalogue « %s » existe déjà !',
    'ERROR_SOURCE_CATALOG_NOT_FOUND' => 'Erreur : Fichiers du catalogue source (%s) introuvables.',
    'ERROR_SOURCE_ADMIN_NOT_FOUND' => 'Erreur : Fichiers source de l’administration (%s) introuvables. Impossible de cloner.',
    'ERROR_COPY_CATALOG_LOADER' => 'Erreur : Impossible de copier le chargeur de catalogue.',
    'ERROR_COPY_ADMIN_LOADER' => 'Erreur : Impossible de copier le chargeur de l’administration.',
    'ERROR_SYNTAX_ERROR' => 'Fichier non enregistré en raison d’erreurs de syntaxe.',
    'ERROR_CANT_CREATE_DIR' => 'Erreur : Impossible de créer le répertoire ',
    'ERROR_CHECK_PERMISSIONS' => 'Erreur d’écriture : Vérifiez les autorisations pour ',
    'TEXT_SUCCESS_SAVED' => 'Les modifications %s ont été enregistrées avec succès dans ',
    'TEXT_OVERRIDES_REMOVED' => 'Toutes les modifications ont été supprimées. Fichier supprimé.',
    'PHP_SYNTAX_ERROR' => ' : Erreur de syntaxe',

    'SUCCESS_CATALOG_CREATED' => 'Fichiers de catalogue créés avec succès.',
    'SUCCESS_ADMIN_CREATED' => 'Fichiers de l’administration créés avec succès.',
    'SUCCESS_LANG_PACK_READY' => 'Le pack linguistique « %s » est prêt. Vous pouvez maintenant l’ajouter dans Localisation > Langues.',
];

return $define;
