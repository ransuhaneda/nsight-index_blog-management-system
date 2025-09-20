<?php declare(strict_types = 1);

return [
	'lastFullAnalysisTime' => 1757273325,
	'meta' => array (
  'cacheVersion' => 'v12-linesToIgnore',
  'phpstanVersion' => '2.1.22',
  'metaExtensions' => 
  array (
  ),
  'phpVersion' => 80401,
  'projectConfig' => '{conditionalTags: {Larastan\\Larastan\\Rules\\NoEnvCallsOutsideOfConfigRule: {phpstan.rules.rule: %noEnvCallsOutsideOfConfig%}, Larastan\\Larastan\\Rules\\NoModelMakeRule: {phpstan.rules.rule: %noModelMake%}, Larastan\\Larastan\\Rules\\NoUnnecessaryCollectionCallRule: {phpstan.rules.rule: %noUnnecessaryCollectionCall%}, Larastan\\Larastan\\Rules\\NoUnnecessaryEnumerableToArrayCallsRule: {phpstan.rules.rule: %noUnnecessaryEnumerableToArrayCalls%}, Larastan\\Larastan\\Rules\\OctaneCompatibilityRule: {phpstan.rules.rule: %checkOctaneCompatibility%}, Larastan\\Larastan\\Rules\\UnusedViewsRule: {phpstan.rules.rule: %checkUnusedViews%}, Larastan\\Larastan\\Rules\\ModelAppendsRule: {phpstan.rules.rule: %checkModelAppends%}, Larastan\\Larastan\\Rules\\NoAuthFacadeInRequestScopeRule: {phpstan.rules.rule: %checkAuthCallsWhenInRequestScope%}, Larastan\\Larastan\\Rules\\NoAuthHelperInRequestScopeRule: {phpstan.rules.rule: %checkAuthCallsWhenInRequestScope%}, Larastan\\Larastan\\ReturnTypes\\Helpers\\EnvFunctionDynamicFunctionReturnTypeExtension: {phpstan.broker.dynamicFunctionReturnTypeExtension: %generalizeEnvReturnType%}, Larastan\\Larastan\\ReturnTypes\\Helpers\\ConfigFunctionDynamicFunctionReturnTypeExtension: {phpstan.broker.dynamicFunctionReturnTypeExtension: %checkConfigTypes%}, Larastan\\Larastan\\ReturnTypes\\ConfigRepositoryDynamicMethodReturnTypeExtension: {phpstan.broker.dynamicMethodReturnTypeExtension: %checkConfigTypes%}, Larastan\\Larastan\\ReturnTypes\\ConfigFacadeCollectionDynamicStaticMethodReturnTypeExtension: {phpstan.broker.dynamicStaticMethodReturnTypeExtension: %checkConfigTypes%}, Larastan\\Larastan\\Rules\\ConfigCollectionRule: {phpstan.rules.rule: %checkConfigTypes%}}, parameters: {universalObjectCratesClasses: [Illuminate\\Http\\Request, Illuminate\\Support\\Optional], earlyTerminatingFunctionCalls: [abort, dd], mixinExcludeClasses: [Eloquent], bootstrapFiles: [bootstrap.php], checkOctaneCompatibility: false, noEnvCallsOutsideOfConfig: true, noModelMake: true, noUnnecessaryCollectionCall: true, noUnnecessaryCollectionCallOnly: [], noUnnecessaryCollectionCallExcept: [], noUnnecessaryEnumerableToArrayCalls: false, squashedMigrationsPath: [], databaseMigrationsPath: [], disableMigrationScan: false, disableSchemaScan: false, configDirectories: [], viewDirectories: [], checkModelProperties: false, checkUnusedViews: false, checkModelAppends: true, generalizeEnvReturnType: false, checkConfigTypes: false, checkAuthCallsWhenInRequestScope: false, level: max, paths: [/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app, /home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/config, /home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/database/factories, /home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/database/seeders, /home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/routes, /home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/routes, /home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests], excludePaths: {analyseAndScan: [%currentWorkingDirectory%/vendor, %currentWorkingDirectory%/storage, %currentWorkingDirectory%/bootstrap/cache, %currentWorkingDirectory%/node_modules], analyse: []}, fileExtensions: [php], tmpDir: /home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/storage/.phpstan}, rules: [Larastan\\Larastan\\Rules\\UselessConstructs\\NoUselessWithFunctionCallsRule, Larastan\\Larastan\\Rules\\UselessConstructs\\NoUselessValueFunctionCallsRule, Larastan\\Larastan\\Rules\\DeferrableServiceProviderMissingProvidesRule, Larastan\\Larastan\\Rules\\ConsoleCommand\\UndefinedArgumentOrOptionRule], services: [{class: Larastan\\Larastan\\Methods\\RelationForwardsCallsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\ModelForwardsCallsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\EloquentBuilderForwardsCallsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\HigherOrderTapProxyExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\HigherOrderCollectionProxyExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\StorageMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\Extension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\ModelFactoryMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\RedirectResponseMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\MacroMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\ViewWithMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Properties\\ModelAccessorExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\Properties\\ModelPropertyExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\Properties\\HigherOrderCollectionProxyPropertyExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\HigherOrderTapProxyExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Contracts\\Container\\Container}}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Container\\Container}}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Foundation\\Application}}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Contracts\\Foundation\\Application}}, {class: Larastan\\Larastan\\Properties\\ModelRelationsExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ModelOnlyDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ModelFactoryDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ModelDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AppMakeDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AuthExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\GuardDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AuthManagerExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\DateExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\GuardExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RequestFileExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RequestRouteExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RequestUserExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\EloquentBuilderExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RelationCollectionExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ModelFindExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\BuilderModelFindExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\TestCaseExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Support\\CollectionHelper}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\AuthExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\CollectExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\NowAndTodayExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\ResponseExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\ValidatorExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\LiteralExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\CollectionFilterRejectDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\CollectionWhereNotNullDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\NewModelQueryDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\FactoryDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: abort, negate: false}}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: abort, negate: true}}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: throw, negate: false}}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: throw, negate: true}}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\AppExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\ValueExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\StrExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\TapExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\StorageDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Types\\GenericEloquentCollectionTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: Larastan\\Larastan\\Types\\ViewStringTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: Larastan\\Larastan\\Rules\\OctaneCompatibilityRule}, {class: Larastan\\Larastan\\Rules\\NoEnvCallsOutsideOfConfigRule, arguments: {configDirectories: %configDirectories%}}, {class: Larastan\\Larastan\\Rules\\NoModelMakeRule}, {class: Larastan\\Larastan\\Rules\\NoUnnecessaryCollectionCallRule, arguments: {onlyMethods: %noUnnecessaryCollectionCallOnly%, excludeMethods: %noUnnecessaryCollectionCallExcept%}}, {class: Larastan\\Larastan\\Rules\\NoUnnecessaryEnumerableToArrayCallsRule}, {class: Larastan\\Larastan\\Rules\\ModelAppendsRule}, {class: Larastan\\Larastan\\Types\\GenericEloquentBuilderTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AppEnvironmentReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {class: Illuminate\\Foundation\\Application}}, {class: Larastan\\Larastan\\ReturnTypes\\AppEnvironmentReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {class: Illuminate\\Contracts\\Foundation\\Application}}, {class: Larastan\\Larastan\\ReturnTypes\\AppFacadeEnvironmentReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Types\\ModelProperty\\ModelPropertyTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension], arguments: {active: %checkModelProperties%}}, {class: Larastan\\Larastan\\Properties\\MigrationHelper, arguments: {databaseMigrationPath: %databaseMigrationsPath%, disableMigrationScan: %disableMigrationScan%, parser: @currentPhpVersionSimpleDirectParser, reflectionProvider: @reflectionProvider}}, {class: Larastan\\Larastan\\Properties\\SquashedMigrationHelper, arguments: {schemaPaths: %squashedMigrationsPath%, disableSchemaScan: %disableSchemaScan%}}, {class: Larastan\\Larastan\\Properties\\ModelCastHelper}, {class: Larastan\\Larastan\\Properties\\ModelPropertyHelper}, {class: Larastan\\Larastan\\Rules\\ModelRuleHelper}, {class: Larastan\\Larastan\\Methods\\BuilderHelper, arguments: {checkProperties: %checkModelProperties%}}, {class: Larastan\\Larastan\\Rules\\RelationExistenceRule, tags: [phpstan.rules.rule]}, {class: Larastan\\Larastan\\Rules\\CheckDispatchArgumentTypesCompatibleWithClassConstructorRule, arguments: {dispatchableClass: Illuminate\\Foundation\\Bus\\Dispatchable}, tags: [phpstan.rules.rule]}, {class: Larastan\\Larastan\\Rules\\CheckDispatchArgumentTypesCompatibleWithClassConstructorRule, arguments: {dispatchableClass: Illuminate\\Foundation\\Events\\Dispatchable}, tags: [phpstan.rules.rule]}, {class: Larastan\\Larastan\\Properties\\Schema\\MySqlDataTypeToPhpTypeConverter}, {class: Larastan\\Larastan\\LarastanStubFilesExtension, tags: [phpstan.stubFilesExtension]}, {class: Larastan\\Larastan\\Rules\\UnusedViewsRule}, {class: Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedEmailViewCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedViewMakeCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedViewFacadeMakeCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedRouteFacadeViewCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedViewInAnotherViewCollector, arguments: {parser: @currentPhpVersionSimpleDirectParser}}, {class: Larastan\\Larastan\\Support\\ViewFileHelper, arguments: {viewDirectories: %viewDirectories%}}, {class: Larastan\\Larastan\\ReturnTypes\\ApplicationMakeDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerMakeDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\ArgumentDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\HasArgumentDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\OptionDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\HasOptionDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\TranslatorGetReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\LangGetReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\TransHelperReturnTypeExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\DoubleUnderscoreHelperReturnTypeExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AppMakeHelper}, {class: Larastan\\Larastan\\Internal\\ConsoleApplicationResolver}, {class: Larastan\\Larastan\\Internal\\ConsoleApplicationHelper}, {class: Larastan\\Larastan\\Support\\HigherOrderCollectionProxyHelper}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\ConfigFunctionDynamicFunctionReturnTypeExtension}, {class: Larastan\\Larastan\\ReturnTypes\\ConfigRepositoryDynamicMethodReturnTypeExtension}, {class: Larastan\\Larastan\\ReturnTypes\\ConfigFacadeCollectionDynamicStaticMethodReturnTypeExtension}, {class: Larastan\\Larastan\\Support\\ConfigParser, arguments: {parser: @currentPhpVersionSimpleDirectParser, configPaths: %configDirectories%}}, {class: Larastan\\Larastan\\Internal\\ConfigHelper}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\EnvFunctionDynamicFunctionReturnTypeExtension}, {class: Larastan\\Larastan\\ReturnTypes\\FormRequestSafeDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Rules\\NoAuthFacadeInRequestScopeRule}, {class: Larastan\\Larastan\\Rules\\NoAuthHelperInRequestScopeRule}, {class: Larastan\\Larastan\\Rules\\ConfigCollectionRule}, {class: Carbon\\PHPStan\\MacroExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}]}',
  'analysedPaths' => 
  array (
    0 => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app',
    1 => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/config',
    2 => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/database/factories',
    3 => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/database/seeders',
    4 => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/routes',
    5 => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/routes',
    6 => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests',
  ),
  'scannedFiles' => 
  array (
  ),
  'composerLocks' => 
  array (
    '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/composer.lock' => 'c395571b21520b1316c614fc3ab44f41d340ae77',
  ),
  'composerInstalled' => 
  array (
    '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/installed.php' => 
    array (
      'versions' => 
      array (
        'brianium/paratest' => 
        array (
          'pretty_version' => 'v7.8.4',
          'version' => '7.8.4.0',
          'reference' => '130a9bf0e269ee5f5b320108f794ad03e275cad4',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../brianium/paratest',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'brick/math' => 
        array (
          'pretty_version' => '0.13.1',
          'version' => '0.13.1.0',
          'reference' => 'fc7ed316430118cc7836bf45faff18d5dfc8de04',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../brick/math',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'carbonphp/carbon-doctrine-types' => 
        array (
          'pretty_version' => '3.2.0',
          'version' => '3.2.0.0',
          'reference' => '18ba5ddfec8976260ead6e866180bd5d2f71aa1d',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../carbonphp/carbon-doctrine-types',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'composer/semver' => 
        array (
          'pretty_version' => '3.4.4',
          'version' => '3.4.4.0',
          'reference' => '198166618906cb2de69b95d7d47e5fa8aa1b2b95',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/./semver',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'cordoval/hamcrest-php' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'davedevelopment/hamcrest-php' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'dflydev/dot-access-data' => 
        array (
          'pretty_version' => 'v3.0.3',
          'version' => '3.0.3.0',
          'reference' => 'a23a2bf4f31d3518f3ecb38660c95715dfead60f',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../dflydev/dot-access-data',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'doctrine/deprecations' => 
        array (
          'pretty_version' => '1.1.5',
          'version' => '1.1.5.0',
          'reference' => '459c2f5dd3d6a4633d3b5f46ee2b1c40f57d3f38',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../doctrine/deprecations',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'doctrine/inflector' => 
        array (
          'pretty_version' => '2.1.0',
          'version' => '2.1.0.0',
          'reference' => '6d6c96277ea252fc1304627204c3d5e6e15faa3b',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../doctrine/inflector',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'doctrine/lexer' => 
        array (
          'pretty_version' => '3.0.1',
          'version' => '3.0.1.0',
          'reference' => '31ad66abc0fc9e1a1f2d9bc6a42668d2fbbcd6dd',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../doctrine/lexer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'dragonmantank/cron-expression' => 
        array (
          'pretty_version' => 'v3.4.0',
          'version' => '3.4.0.0',
          'reference' => '8c784d071debd117328803d86b2097615b457500',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../dragonmantank/cron-expression',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'egulias/email-validator' => 
        array (
          'pretty_version' => '4.0.4',
          'version' => '4.0.4.0',
          'reference' => 'd42c8731f0624ad6bdc8d3e5e9a4524f68801cfa',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../egulias/email-validator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'fakerphp/faker' => 
        array (
          'pretty_version' => 'v1.24.1',
          'version' => '1.24.1.0',
          'reference' => 'e0ee18eb1e6dc3cda3ce9fd97e5a0689a88a64b5',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../fakerphp/faker',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'fidry/cpu-core-counter' => 
        array (
          'pretty_version' => '1.3.0',
          'version' => '1.3.0.0',
          'reference' => 'db9508f7b1474469d9d3c53b86f817e344732678',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../fidry/cpu-core-counter',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'filp/whoops' => 
        array (
          'pretty_version' => '2.18.4',
          'version' => '2.18.4.0',
          'reference' => 'd2102955e48b9fd9ab24280a7ad12ed552752c4d',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../filp/whoops',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'fruitcake/php-cors' => 
        array (
          'pretty_version' => 'v1.3.0',
          'version' => '1.3.0.0',
          'reference' => '3d158f36e7875e2f040f37bc0573956240a5a38b',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../fruitcake/php-cors',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'graham-campbell/result-type' => 
        array (
          'pretty_version' => 'v1.1.3',
          'version' => '1.1.3.0',
          'reference' => '3ba905c11371512af9d9bdd27d99b782216b6945',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../graham-campbell/result-type',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'guzzlehttp/guzzle' => 
        array (
          'pretty_version' => '7.10.0',
          'version' => '7.10.0.0',
          'reference' => 'b51ac707cfa420b7bfd4e4d5e510ba8008e822b4',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../guzzlehttp/guzzle',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'guzzlehttp/promises' => 
        array (
          'pretty_version' => '2.3.0',
          'version' => '2.3.0.0',
          'reference' => '481557b130ef3790cf82b713667b43030dc9c957',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../guzzlehttp/promises',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'guzzlehttp/psr7' => 
        array (
          'pretty_version' => '2.8.0',
          'version' => '2.8.0.0',
          'reference' => '21dc724a0583619cd1652f673303492272778051',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../guzzlehttp/psr7',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'guzzlehttp/uri-template' => 
        array (
          'pretty_version' => 'v1.0.5',
          'version' => '1.0.5.0',
          'reference' => '4f4bbd4e7172148801e76e3decc1e559bdee34e1',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../guzzlehttp/uri-template',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'hamcrest/hamcrest-php' => 
        array (
          'pretty_version' => 'v2.1.1',
          'version' => '2.1.1.0',
          'reference' => 'f8b1c0173b22fa6ec77a81fe63e5b01eba7e6487',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../hamcrest/hamcrest-php',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'iamcal/sql-parser' => 
        array (
          'pretty_version' => 'v0.6',
          'version' => '0.6.0.0',
          'reference' => '947083e2dca211a6f12fb1beb67a01e387de9b62',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../iamcal/sql-parser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'illuminate/auth' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.26.4',
          ),
        ),
        'illuminate/broadcasting' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.26.4',
          ),
        ),
        'illuminate/bus' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.26.4',
          ),
        ),
        'illuminate/cache' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.26.4',
          ),
        ),
        'illuminate/collections' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.26.4',
          ),
        ),
        'illuminate/concurrency' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.26.4',
          ),
        ),
        'illuminate/conditionable' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.26.4',
          ),
        ),
        'illuminate/config' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.26.4',
          ),
        ),
        'illuminate/console' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.26.4',
          ),
        ),
        'illuminate/container' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.26.4',
          ),
        ),
        'illuminate/contracts' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.26.4',
          ),
        ),
        'illuminate/cookie' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.26.4',
          ),
        ),
        'illuminate/database' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.26.4',
          ),
        ),
        'illuminate/encryption' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.26.4',
          ),
        ),
        'illuminate/events' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.26.4',
          ),
        ),
        'illuminate/filesystem' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.26.4',
          ),
        ),
        'illuminate/hashing' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.26.4',
          ),
        ),
        'illuminate/http' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.26.4',
          ),
        ),
        'illuminate/log' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.26.4',
          ),
        ),
        'illuminate/macroable' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.26.4',
          ),
        ),
        'illuminate/mail' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.26.4',
          ),
        ),
        'illuminate/notifications' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.26.4',
          ),
        ),
        'illuminate/pagination' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.26.4',
          ),
        ),
        'illuminate/pipeline' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.26.4',
          ),
        ),
        'illuminate/process' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.26.4',
          ),
        ),
        'illuminate/queue' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.26.4',
          ),
        ),
        'illuminate/redis' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.26.4',
          ),
        ),
        'illuminate/routing' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.26.4',
          ),
        ),
        'illuminate/session' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.26.4',
          ),
        ),
        'illuminate/support' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.26.4',
          ),
        ),
        'illuminate/testing' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.26.4',
          ),
        ),
        'illuminate/translation' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.26.4',
          ),
        ),
        'illuminate/validation' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.26.4',
          ),
        ),
        'illuminate/view' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.26.4',
          ),
        ),
        'jean85/pretty-package-versions' => 
        array (
          'pretty_version' => '2.1.1',
          'version' => '2.1.1.0',
          'reference' => '4d7aa5dab42e2a76d99559706022885de0e18e1a',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../jean85/pretty-package-versions',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'joetannenbaum/chewie' => 
        array (
          'pretty_version' => '0.1.11',
          'version' => '0.1.11.0',
          'reference' => '7040f1c157e6756f45f49f4a821303cae3cfe424',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../joetannenbaum/chewie',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'kodova/hamcrest-php' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'larastan/larastan' => 
        array (
          'pretty_version' => 'v3.6.1',
          'version' => '3.6.1.0',
          'reference' => '3c223047e374befd1b64959784685d6ecccf66aa',
          'type' => 'phpstan-extension',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../larastan/larastan',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'laravel/breeze' => 
        array (
          'pretty_version' => 'v2.3.8',
          'version' => '2.3.8.0',
          'reference' => '1a29c5792818bd4cddf70b5f743a227e02fbcfcd',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../laravel/breeze',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laravel/framework' => 
        array (
          'pretty_version' => 'v12.26.4',
          'version' => '12.26.4.0',
          'reference' => '085a367a32ba86fcfa647bfc796098ae6f795b09',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../laravel/framework',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laravel/pail' => 
        array (
          'pretty_version' => 'v1.2.3',
          'version' => '1.2.3.0',
          'reference' => '8cc3d575c1f0e57eeb923f366a37528c50d2385a',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../laravel/pail',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'laravel/pint' => 
        array (
          'pretty_version' => 'v1.24.0',
          'version' => '1.24.0.0',
          'reference' => '0345f3b05f136801af8c339f9d16ef29e6b4df8a',
          'type' => 'project',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../laravel/pint',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'laravel/prompts' => 
        array (
          'pretty_version' => 'v0.3.6',
          'version' => '0.3.6.0',
          'reference' => '86a8b692e8661d0fb308cec64f3d176821323077',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../laravel/prompts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laravel/sail' => 
        array (
          'pretty_version' => 'v1.45.0',
          'version' => '1.45.0.0',
          'reference' => '019a2933ff4a9199f098d4259713f9bc266a874e',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../laravel/sail',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'laravel/serializable-closure' => 
        array (
          'pretty_version' => 'v2.0.4',
          'version' => '2.0.4.0',
          'reference' => 'b352cf0534aa1ae6b4d825d1e762e35d43f8a841',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../laravel/serializable-closure',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laravel/telescope' => 
        array (
          'pretty_version' => 'v5.11.3',
          'version' => '5.11.3.0',
          'reference' => '7684604e104e7755b70dcacfeee06888e2470689',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../laravel/telescope',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laravel/tinker' => 
        array (
          'pretty_version' => 'v2.10.1',
          'version' => '2.10.1.0',
          'reference' => '22177cc71807d38f2810c6204d8f7183d88a57d3',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../laravel/tinker',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/commonmark' => 
        array (
          'pretty_version' => '2.7.1',
          'version' => '2.7.1.0',
          'reference' => '10732241927d3971d28e7ea7b5712721fa2296ca',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../league/commonmark',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/config' => 
        array (
          'pretty_version' => 'v1.2.0',
          'version' => '1.2.0.0',
          'reference' => '754b3604fb2984c71f4af4a9cbe7b57f346ec1f3',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../league/config',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/flysystem' => 
        array (
          'pretty_version' => '3.30.0',
          'version' => '3.30.0.0',
          'reference' => '2203e3151755d874bb2943649dae1eb8533ac93e',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../league/flysystem',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/flysystem-local' => 
        array (
          'pretty_version' => '3.30.0',
          'version' => '3.30.0.0',
          'reference' => '6691915f77c7fb69adfb87dcd550052dc184ee10',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../league/flysystem-local',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/mime-type-detection' => 
        array (
          'pretty_version' => '1.16.0',
          'version' => '1.16.0.0',
          'reference' => '2d6702ff215bf922936ccc1ad31007edc76451b9',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../league/mime-type-detection',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/uri' => 
        array (
          'pretty_version' => '7.5.1',
          'version' => '7.5.1.0',
          'reference' => '81fb5145d2644324614cc532b28efd0215bda430',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../league/uri',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/uri-interfaces' => 
        array (
          'pretty_version' => '7.5.0',
          'version' => '7.5.0.0',
          'reference' => '08cfc6c4f3d811584fb09c37e2849e6a7f9b0742',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../league/uri-interfaces',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'maennchen/zipstream-php' => 
        array (
          'pretty_version' => '3.2.0',
          'version' => '3.2.0.0',
          'reference' => '9712d8fa4cdf9240380b01eb4be55ad8dcf71416',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../maennchen/zipstream-php',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'mockery/mockery' => 
        array (
          'pretty_version' => '1.6.12',
          'version' => '1.6.12.0',
          'reference' => '1f4efdd7d3beafe9807b08156dfcb176d18f1699',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../mockery/mockery',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'monolog/monolog' => 
        array (
          'pretty_version' => '3.9.0',
          'version' => '3.9.0.0',
          'reference' => '10d85740180ecba7896c87e06a166e0c95a0e3b6',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../monolog/monolog',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'mtdowling/cron-expression' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '^1.0',
          ),
        ),
        'myclabs/deep-copy' => 
        array (
          'pretty_version' => '1.13.4',
          'version' => '1.13.4.0',
          'reference' => '07d290f0c47959fd5eed98c95ee5602db07e0b6a',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../myclabs/deep-copy',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'nesbot/carbon' => 
        array (
          'pretty_version' => '3.10.2',
          'version' => '3.10.2.0',
          'reference' => '76b5c07b8a9d2025ed1610e14cef1f3fd6ad2c24',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../nesbot/carbon',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'nette/schema' => 
        array (
          'pretty_version' => 'v1.3.2',
          'version' => '1.3.2.0',
          'reference' => 'da801d52f0354f70a638673c4a0f04e16529431d',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../nette/schema',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'nette/utils' => 
        array (
          'pretty_version' => 'v4.0.8',
          'version' => '4.0.8.0',
          'reference' => 'c930ca4e3cf4f17dcfb03037703679d2396d2ede',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../nette/utils',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'nikic/php-parser' => 
        array (
          'pretty_version' => 'v5.6.1',
          'version' => '5.6.1.0',
          'reference' => 'f103601b29efebd7ff4a1ca7b3eeea9e3336a2a2',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../nikic/php-parser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'nunomaduro/collision' => 
        array (
          'pretty_version' => 'v8.8.2',
          'version' => '8.8.2.0',
          'reference' => '60207965f9b7b7a4ce15a0f75d57f9dadb105bdb',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../nunomaduro/collision',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'nunomaduro/termwind' => 
        array (
          'pretty_version' => 'v2.3.1',
          'version' => '2.3.1.0',
          'reference' => 'dfa08f390e509967a15c22493dc0bac5733d9123',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../nunomaduro/termwind',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'peckphp/peck' => 
        array (
          'pretty_version' => 'v0.1.3',
          'version' => '0.1.3.0',
          'reference' => '907d7221b057519627811c7c752d65ffa9163dc1',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../peckphp/peck',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'pestphp/pest' => 
        array (
          'pretty_version' => 'v3.8.4',
          'version' => '3.8.4.0',
          'reference' => '72cf695554420e21858cda831d5db193db102574',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../pestphp/pest',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'pestphp/pest-plugin' => 
        array (
          'pretty_version' => 'v3.0.0',
          'version' => '3.0.0.0',
          'reference' => 'e79b26c65bc11c41093b10150c1341cc5cdbea83',
          'type' => 'composer-plugin',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../pestphp/pest-plugin',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'pestphp/pest-plugin-arch' => 
        array (
          'pretty_version' => 'v3.1.1',
          'version' => '3.1.1.0',
          'reference' => 'db7bd9cb1612b223e16618d85475c6f63b9c8daa',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../pestphp/pest-plugin-arch',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'pestphp/pest-plugin-laravel' => 
        array (
          'pretty_version' => 'v3.2.0',
          'version' => '3.2.0.0',
          'reference' => '6801be82fd92b96e82dd72e563e5674b1ce365fc',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../pestphp/pest-plugin-laravel',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'pestphp/pest-plugin-mutate' => 
        array (
          'pretty_version' => 'v3.0.5',
          'version' => '3.0.5.0',
          'reference' => 'e10dbdc98c9e2f3890095b4fe2144f63a5717e08',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../pestphp/pest-plugin-mutate',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phar-io/manifest' => 
        array (
          'pretty_version' => '2.0.4',
          'version' => '2.0.4.0',
          'reference' => '54750ef60c58e43759730615a392c31c80e23176',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../phar-io/manifest',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phar-io/version' => 
        array (
          'pretty_version' => '3.2.1',
          'version' => '3.2.1.0',
          'reference' => '4f7fd7836c6f332bb2933569e566a0d6c4cbed74',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../phar-io/version',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpdocumentor/reflection-common' => 
        array (
          'pretty_version' => '2.2.0',
          'version' => '2.2.0.0',
          'reference' => '1d01c49d4ed62f25aa84a747ad35d5a16924662b',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../phpdocumentor/reflection-common',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpdocumentor/reflection-docblock' => 
        array (
          'pretty_version' => '5.6.3',
          'version' => '5.6.3.0',
          'reference' => '94f8051919d1b0369a6bcc7931d679a511c03fe9',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../phpdocumentor/reflection-docblock',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpdocumentor/type-resolver' => 
        array (
          'pretty_version' => '1.10.0',
          'version' => '1.10.0.0',
          'reference' => '679e3ce485b99e84c775d28e2e96fade9a7fb50a',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../phpdocumentor/type-resolver',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpoption/phpoption' => 
        array (
          'pretty_version' => '1.9.4',
          'version' => '1.9.4.0',
          'reference' => '638a154f8d4ee6a5cfa96d6a34dfbe0cffa9566d',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../phpoption/phpoption',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'phpstan/phpdoc-parser' => 
        array (
          'pretty_version' => '2.3.0',
          'version' => '2.3.0.0',
          'reference' => '1e0cd5370df5dd2e556a36b9c62f62e555870495',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../phpstan/phpdoc-parser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpstan/phpstan' => 
        array (
          'pretty_version' => '2.1.22',
          'version' => '2.1.22.0',
          'reference' => '41600c8379eb5aee63e9413fe9e97273e25d57e4',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../phpstan/phpstan',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-code-coverage' => 
        array (
          'pretty_version' => '11.0.11',
          'version' => '11.0.11.0',
          'reference' => '4f7722aa9a7b76aa775e2d9d4e95d1ea16eeeef4',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../phpunit/php-code-coverage',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-file-iterator' => 
        array (
          'pretty_version' => '5.1.0',
          'version' => '5.1.0.0',
          'reference' => '118cfaaa8bc5aef3287bf315b6060b1174754af6',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../phpunit/php-file-iterator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-invoker' => 
        array (
          'pretty_version' => '5.0.1',
          'version' => '5.0.1.0',
          'reference' => 'c1ca3814734c07492b3d4c5f794f4b0995333da2',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../phpunit/php-invoker',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-text-template' => 
        array (
          'pretty_version' => '4.0.1',
          'version' => '4.0.1.0',
          'reference' => '3e0404dc6b300e6bf56415467ebcb3fe4f33e964',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../phpunit/php-text-template',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-timer' => 
        array (
          'pretty_version' => '7.0.1',
          'version' => '7.0.1.0',
          'reference' => '3b415def83fbcb41f991d9ebf16ae4ad8b7837b3',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../phpunit/php-timer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/phpunit' => 
        array (
          'pretty_version' => '11.5.33',
          'version' => '11.5.33.0',
          'reference' => '5965e9ff57546cb9137c0ff6aa78cb7442b05cf6',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../phpunit/phpunit',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'psr/clock' => 
        array (
          'pretty_version' => '1.0.0',
          'version' => '1.0.0.0',
          'reference' => 'e41a24703d4560fd0acb709162f73b8adfc3aa0d',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../psr/clock',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/clock-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/container' => 
        array (
          'pretty_version' => '2.0.2',
          'version' => '2.0.2.0',
          'reference' => 'c71ecc56dfe541dbd90c5360474fbc405f8d5963',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../psr/container',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/container-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.1|2.0',
          ),
        ),
        'psr/event-dispatcher' => 
        array (
          'pretty_version' => '1.0.0',
          'version' => '1.0.0.0',
          'reference' => 'dbefd12671e8a14ec7f180cab83036ed26714bb0',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../psr/event-dispatcher',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/event-dispatcher-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/http-client' => 
        array (
          'pretty_version' => '1.0.3',
          'version' => '1.0.3.0',
          'reference' => 'bb5906edc1c324c9a05aa0873d40117941e5fa90',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../psr/http-client',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/http-client-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/http-factory' => 
        array (
          'pretty_version' => '1.1.0',
          'version' => '1.1.0.0',
          'reference' => '2b4765fddfe3b508ac62f829e852b1501d3f6e8a',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../psr/http-factory',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/http-factory-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/http-message' => 
        array (
          'pretty_version' => '2.0',
          'version' => '2.0.0.0',
          'reference' => '402d35bcb92c70c026d1a6a9883f06b2ead23d71',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../psr/http-message',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/http-message-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/log' => 
        array (
          'pretty_version' => '3.0.2',
          'version' => '3.0.2.0',
          'reference' => 'f16e1d5863e37f8d8c2a01719f5b34baa2b714d3',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../psr/log',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/log-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0|2.0|3.0',
            1 => '3.0.0',
          ),
        ),
        'psr/simple-cache' => 
        array (
          'pretty_version' => '3.0.0',
          'version' => '3.0.0.0',
          'reference' => '764e0b3939f5ca87cb904f570ef9be2d78a07865',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../psr/simple-cache',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/simple-cache-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0|2.0|3.0',
          ),
        ),
        'psy/psysh' => 
        array (
          'pretty_version' => 'v0.12.10',
          'version' => '0.12.10.0',
          'reference' => '6e80abe6f2257121f1eb9a4c55bf29d921025b22',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../psy/psysh',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'ralouphie/getallheaders' => 
        array (
          'pretty_version' => '3.0.3',
          'version' => '3.0.3.0',
          'reference' => '120b605dfeb996808c31b6477290a714d356e822',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../ralouphie/getallheaders',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'ramsey/collection' => 
        array (
          'pretty_version' => '2.1.1',
          'version' => '2.1.1.0',
          'reference' => '344572933ad0181accbf4ba763e85a0306a8c5e2',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../ramsey/collection',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'ramsey/uuid' => 
        array (
          'pretty_version' => '4.9.0',
          'version' => '4.9.0.0',
          'reference' => '4e0e23cc785f0724a0e838279a9eb03f28b092a0',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../ramsey/uuid',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'rector/rector' => 
        array (
          'pretty_version' => '2.1.4',
          'version' => '2.1.4.0',
          'reference' => 'fe613c528819222f8686a9a037a315ef9d4915b3',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../rector/rector',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'rhumsaa/uuid' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '4.9.0',
          ),
        ),
        'sebastian/cli-parser' => 
        array (
          'pretty_version' => '3.0.2',
          'version' => '3.0.2.0',
          'reference' => '15c5dd40dc4f38794d383bb95465193f5e0ae180',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../sebastian/cli-parser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/code-unit' => 
        array (
          'pretty_version' => '3.0.3',
          'version' => '3.0.3.0',
          'reference' => '54391c61e4af8078e5b276ab082b6d3c54c9ad64',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../sebastian/code-unit',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/code-unit-reverse-lookup' => 
        array (
          'pretty_version' => '4.0.1',
          'version' => '4.0.1.0',
          'reference' => '183a9b2632194febd219bb9246eee421dad8d45e',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../sebastian/code-unit-reverse-lookup',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/comparator' => 
        array (
          'pretty_version' => '6.3.2',
          'version' => '6.3.2.0',
          'reference' => '85c77556683e6eee4323e4c5468641ca0237e2e8',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../sebastian/comparator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/complexity' => 
        array (
          'pretty_version' => '4.0.1',
          'version' => '4.0.1.0',
          'reference' => 'ee41d384ab1906c68852636b6de493846e13e5a0',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../sebastian/complexity',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/diff' => 
        array (
          'pretty_version' => '6.0.2',
          'version' => '6.0.2.0',
          'reference' => 'b4ccd857127db5d41a5b676f24b51371d76d8544',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../sebastian/diff',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/environment' => 
        array (
          'pretty_version' => '7.2.1',
          'version' => '7.2.1.0',
          'reference' => 'a5c75038693ad2e8d4b6c15ba2403532647830c4',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../sebastian/environment',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/exporter' => 
        array (
          'pretty_version' => '6.3.0',
          'version' => '6.3.0.0',
          'reference' => '3473f61172093b2da7de1fb5782e1f24cc036dc3',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../sebastian/exporter',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/global-state' => 
        array (
          'pretty_version' => '7.0.2',
          'version' => '7.0.2.0',
          'reference' => '3be331570a721f9a4b5917f4209773de17f747d7',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../sebastian/global-state',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/lines-of-code' => 
        array (
          'pretty_version' => '3.0.1',
          'version' => '3.0.1.0',
          'reference' => 'd36ad0d782e5756913e42ad87cb2890f4ffe467a',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../sebastian/lines-of-code',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/object-enumerator' => 
        array (
          'pretty_version' => '6.0.1',
          'version' => '6.0.1.0',
          'reference' => 'f5b498e631a74204185071eb41f33f38d64608aa',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../sebastian/object-enumerator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/object-reflector' => 
        array (
          'pretty_version' => '4.0.1',
          'version' => '4.0.1.0',
          'reference' => '6e1a43b411b2ad34146dee7524cb13a068bb35f9',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../sebastian/object-reflector',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/recursion-context' => 
        array (
          'pretty_version' => '6.0.3',
          'version' => '6.0.3.0',
          'reference' => 'f6458abbf32a6c8174f8f26261475dc133b3d9dc',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../sebastian/recursion-context',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/type' => 
        array (
          'pretty_version' => '5.1.3',
          'version' => '5.1.3.0',
          'reference' => 'f77d2d4e78738c98d9a68d2596fe5e8fa380f449',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../sebastian/type',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/version' => 
        array (
          'pretty_version' => '5.0.2',
          'version' => '5.0.2.0',
          'reference' => 'c687e3387b99f5b03b6caa64c74b63e2936ff874',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../sebastian/version',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'soloterm/solo' => 
        array (
          'pretty_version' => 'v0.4.0',
          'version' => '0.4.0.0',
          'reference' => '80778094596b1489d3fbf22e3db990c2d752d8fe',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../soloterm/solo',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'spatie/image' => 
        array (
          'pretty_version' => '3.8.5',
          'version' => '3.8.5.0',
          'reference' => 'a63f60b7387ebeacab463e79a95deb7ffed75430',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../spatie/image',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'spatie/image-optimizer' => 
        array (
          'pretty_version' => '1.8.0',
          'version' => '1.8.0.0',
          'reference' => '4fd22035e81d98fffced65a8c20d9ec4daa9671c',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../spatie/image-optimizer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'spatie/laravel-medialibrary' => 
        array (
          'pretty_version' => '11.14.0',
          'version' => '11.14.0.0',
          'reference' => '7050a0d041be8c5c5ef5886967fbbbe578a54296',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../spatie/laravel-medialibrary',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'spatie/laravel-package-tools' => 
        array (
          'pretty_version' => '1.92.7',
          'version' => '1.92.7.0',
          'reference' => 'f09a799850b1ed765103a4f0b4355006360c49a5',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../spatie/laravel-package-tools',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'spatie/laravel-sluggable' => 
        array (
          'pretty_version' => '3.7.5',
          'version' => '3.7.5.0',
          'reference' => 'e4fdd519e043a2af02b52eec2c3be2dd2e262e27',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../spatie/laravel-sluggable',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'spatie/once' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'spatie/temporary-directory' => 
        array (
          'pretty_version' => '2.3.0',
          'version' => '2.3.0.0',
          'reference' => '580eddfe9a0a41a902cac6eeb8f066b42e65a32b',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../spatie/temporary-directory',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'staabm/side-effects-detector' => 
        array (
          'pretty_version' => '1.0.5',
          'version' => '1.0.5.0',
          'reference' => 'd8334211a140ce329c13726d4a715adbddd0a163',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../staabm/side-effects-detector',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'symfony/clock' => 
        array (
          'pretty_version' => 'v7.3.0',
          'version' => '7.3.0.0',
          'reference' => 'b81435fbd6648ea425d1ee96a2d8e68f4ceacd24',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../symfony/clock',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/console' => 
        array (
          'pretty_version' => 'v7.3.3',
          'version' => '7.3.3.0',
          'reference' => 'cb0102a1c5ac3807cf3fdf8bea96007df7fdbea7',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../symfony/console',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/css-selector' => 
        array (
          'pretty_version' => 'v7.3.0',
          'version' => '7.3.0.0',
          'reference' => '601a5ce9aaad7bf10797e3663faefce9e26c24e2',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../symfony/css-selector',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/deprecation-contracts' => 
        array (
          'pretty_version' => 'v3.6.0',
          'version' => '3.6.0.0',
          'reference' => '63afe740e99a13ba87ec199bb07bbdee937a5b62',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../symfony/deprecation-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/error-handler' => 
        array (
          'pretty_version' => 'v7.3.2',
          'version' => '7.3.2.0',
          'reference' => '0b31a944fcd8759ae294da4d2808cbc53aebd0c3',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../symfony/error-handler',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/event-dispatcher' => 
        array (
          'pretty_version' => 'v7.3.3',
          'version' => '7.3.3.0',
          'reference' => 'b7dc69e71de420ac04bc9ab830cf3ffebba48191',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../symfony/event-dispatcher',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/event-dispatcher-contracts' => 
        array (
          'pretty_version' => 'v3.6.0',
          'version' => '3.6.0.0',
          'reference' => '59eb412e93815df44f05f342958efa9f46b1e586',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../symfony/event-dispatcher-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/event-dispatcher-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '2.0|3.0',
          ),
        ),
        'symfony/finder' => 
        array (
          'pretty_version' => 'v7.3.2',
          'version' => '7.3.2.0',
          'reference' => '2a6614966ba1074fa93dae0bc804227422df4dfe',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../symfony/finder',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/http-foundation' => 
        array (
          'pretty_version' => 'v7.3.3',
          'version' => '7.3.3.0',
          'reference' => '7475561ec27020196c49bb7c4f178d33d7d3dc00',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../symfony/http-foundation',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/http-kernel' => 
        array (
          'pretty_version' => 'v7.3.3',
          'version' => '7.3.3.0',
          'reference' => '72c304de37e1a1cec6d5d12b81187ebd4850a17b',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../symfony/http-kernel',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/mailer' => 
        array (
          'pretty_version' => 'v7.3.3',
          'version' => '7.3.3.0',
          'reference' => 'a32f3f45f1990db8c4341d5122a7d3a381c7e575',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../symfony/mailer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/mime' => 
        array (
          'pretty_version' => 'v7.3.2',
          'version' => '7.3.2.0',
          'reference' => 'e0a0f859148daf1edf6c60b398eb40bfc96697d1',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../symfony/mime',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-ctype' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'reference' => 'a3cc8b044a6ea513310cbd48ef7333b384945638',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../symfony/polyfill-ctype',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-intl-grapheme' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'reference' => '380872130d3a5dd3ace2f4010d95125fde5d5c70',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../symfony/polyfill-intl-grapheme',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-intl-idn' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'reference' => '9614ac4d8061dc257ecc64cba1b140873dce8ad3',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../symfony/polyfill-intl-idn',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-intl-normalizer' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'reference' => '3833d7255cc303546435cb650316bff708a1c75c',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../symfony/polyfill-intl-normalizer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-mbstring' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'reference' => '6d857f4d76bd4b343eac26d6b539585d2bc56493',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../symfony/polyfill-mbstring',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-php80' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'reference' => '0cc9dd0f17f61d8131e7df6b84bd344899fe2608',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../symfony/polyfill-php80',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-php83' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'reference' => '17f6f9a6b1735c0f163024d959f700cfbc5155e5',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../symfony/polyfill-php83',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-php84' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'reference' => 'd8ced4d875142b6a7426000426b8abc631d6b191',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../symfony/polyfill-php84',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-php85' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'reference' => 'd4e5fcd4ab3d998ab16c0db48e6cbb9a01993f91',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../symfony/polyfill-php85',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-uuid' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'reference' => '21533be36c24be3f4b1669c4725c7d1d2bab4ae2',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../symfony/polyfill-uuid',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/process' => 
        array (
          'pretty_version' => 'v7.3.3',
          'version' => '7.3.3.0',
          'reference' => '32241012d521e2e8a9d713adb0812bb773b907f1',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../symfony/process',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/routing' => 
        array (
          'pretty_version' => 'v7.3.2',
          'version' => '7.3.2.0',
          'reference' => '7614b8ca5fa89b9cd233e21b627bfc5774f586e4',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../symfony/routing',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/service-contracts' => 
        array (
          'pretty_version' => 'v3.6.0',
          'version' => '3.6.0.0',
          'reference' => 'f021b05a130d35510bd6b25fe9053c2a8a15d5d4',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../symfony/service-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/string' => 
        array (
          'pretty_version' => 'v7.3.3',
          'version' => '7.3.3.0',
          'reference' => '17a426cce5fd1f0901fefa9b2a490d0038fd3c9c',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../symfony/string',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/translation' => 
        array (
          'pretty_version' => 'v7.3.3',
          'version' => '7.3.3.0',
          'reference' => 'e0837b4cbcef63c754d89a4806575cada743a38d',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../symfony/translation',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/translation-contracts' => 
        array (
          'pretty_version' => 'v3.6.0',
          'version' => '3.6.0.0',
          'reference' => 'df210c7a2573f1913b2d17cc95f90f53a73d8f7d',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../symfony/translation-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/translation-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '2.3|3.0',
          ),
        ),
        'symfony/uid' => 
        array (
          'pretty_version' => 'v7.3.1',
          'version' => '7.3.1.0',
          'reference' => 'a69f69f3159b852651a6bf45a9fdd149520525bb',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../symfony/uid',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/var-dumper' => 
        array (
          'pretty_version' => 'v7.3.3',
          'version' => '7.3.3.0',
          'reference' => '34d8d4c4b9597347306d1ec8eb4e1319b1e6986f',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../symfony/var-dumper',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/yaml' => 
        array (
          'pretty_version' => 'v7.3.3',
          'version' => '7.3.3.0',
          'reference' => 'd4f4a66866fe2451f61296924767280ab5732d9d',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../symfony/yaml',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'ta-tikoma/phpunit-architecture-test' => 
        array (
          'pretty_version' => '0.8.5',
          'version' => '0.8.5.0',
          'reference' => 'cf6fb197b676ba716837c886baca842e4db29005',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../ta-tikoma/phpunit-architecture-test',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'theseer/tokenizer' => 
        array (
          'pretty_version' => '1.2.3',
          'version' => '1.2.3.0',
          'reference' => '737eda637ed5e28c3413cb1ebe8bb52cbf1ca7a2',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../theseer/tokenizer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'tijsverkoyen/css-to-inline-styles' => 
        array (
          'pretty_version' => 'v2.3.0',
          'version' => '2.3.0.0',
          'reference' => '0d72ac1c00084279c1816675284073c5a337c20d',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../tijsverkoyen/css-to-inline-styles',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'vlucas/phpdotenv' => 
        array (
          'pretty_version' => 'v5.6.2',
          'version' => '5.6.2.0',
          'reference' => '24ac4c74f91ee2c193fa1aaa5c249cb0822809af',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../vlucas/phpdotenv',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'voku/portable-ascii' => 
        array (
          'pretty_version' => '2.0.3',
          'version' => '2.0.3.0',
          'reference' => 'b1d923f88091c6bf09699efcd7c8a1b1bfd7351d',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../voku/portable-ascii',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'webmozart/assert' => 
        array (
          'pretty_version' => '1.11.0',
          'version' => '1.11.0.0',
          'reference' => '11cb2199493b2f8a3b53e7f19068fc6aac760991',
          'type' => 'library',
          'install_path' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/composer/../webmozart/assert',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
      ),
    ),
  ),
  'executedFilesHashes' => 
  array (
    '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/larastan/larastan/bootstrap.php' => '28392079817075879815f110287690e80398fe5e',
    'phar:///home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/Attribute85.php' => '123dcd45f03f2463904087a66bfe2bc139760df0',
    'phar:///home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionAttribute.php' => '0b4b78277eb6545955d2ce5e09bff28f1f8052c8',
    'phar:///home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionIntersectionType.php' => 'a3e6299b87ee5d407dae7651758edfa11a74cb11',
    'phar:///home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionUnionType.php' => '1b349aa997a834faeafe05fa21bc31cae22bf2e2',
  ),
  'phpExtensions' => 
  array (
    0 => 'Core',
    1 => 'FFI',
    2 => 'PDO',
    3 => 'Phar',
    4 => 'Reflection',
    5 => 'SPL',
    6 => 'SimpleXML',
    7 => 'bcmath',
    8 => 'bz2',
    9 => 'calendar',
    10 => 'ctype',
    11 => 'curl',
    12 => 'date',
    13 => 'dba',
    14 => 'dom',
    15 => 'exif',
    16 => 'fileinfo',
    17 => 'filter',
    18 => 'ftp',
    19 => 'gd',
    20 => 'gettext',
    21 => 'gmp',
    22 => 'hash',
    23 => 'iconv',
    24 => 'igbinary',
    25 => 'imagick',
    26 => 'imap',
    27 => 'intl',
    28 => 'json',
    29 => 'ldap',
    30 => 'libxml',
    31 => 'mbstring',
    32 => 'mongodb',
    33 => 'mysqli',
    34 => 'mysqlnd',
    35 => 'openssl',
    36 => 'pcntl',
    37 => 'pcre',
    38 => 'pdo_mysql',
    39 => 'pdo_pgsql',
    40 => 'pdo_sqlite',
    41 => 'pgsql',
    42 => 'posix',
    43 => 'random',
    44 => 'readline',
    45 => 'redis',
    46 => 'session',
    47 => 'shmop',
    48 => 'soap',
    49 => 'sockets',
    50 => 'sodium',
    51 => 'sqlite3',
    52 => 'standard',
    53 => 'sysvmsg',
    54 => 'sysvsem',
    55 => 'sysvshm',
    56 => 'tokenizer',
    57 => 'xml',
    58 => 'xmlreader',
    59 => 'xmlwriter',
    60 => 'xsl',
    61 => 'zip',
    62 => 'zlib',
    63 => 'zstd',
  ),
  'stubFiles' => 
  array (
  ),
  'level' => 'max',
),
	'projectExtensionFiles' => array (
),
	'errorsCallback' => static function (): array { return array (
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Console/Commands/CleanDuplicateRows.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #2 $rows of method Illuminate\\Console\\Command::table() expects array|Illuminate\\Contracts\\Support\\Arrayable, mixed given.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Console/Commands/CleanDuplicateRows.php',
       'line' => 47,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Console/Commands/CleanDuplicateRows.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 45,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method App\\Console\\Commands\\CleanDuplicateRows::displayPreview() has no return type specified.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Console/Commands/CleanDuplicateRows.php',
       'line' => 51,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Console/Commands/CleanDuplicateRows.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 51,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.return',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method App\\Console\\Commands\\CleanDuplicateRows::displayPreview() has parameter $duplicateGroups with no type specified.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Console/Commands/CleanDuplicateRows.php',
       'line' => 51,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Console/Commands/CleanDuplicateRows.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 51,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.parameter',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    3 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Argument of an invalid type mixed supplied for foreach, only iterables are supported.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Console/Commands/CleanDuplicateRows.php',
       'line' => 56,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Console/Commands/CleanDuplicateRows.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 56,
       'nodeType' => 'PHPStan\\Node\\InForeachNode',
       'identifier' => 'foreach.nonIterable',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    4 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot access property $ids on mixed.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Console/Commands/CleanDuplicateRows.php',
       'line' => 57,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Console/Commands/CleanDuplicateRows.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 57,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.nonObject',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    5 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #2 $string of function explode expects string, mixed given.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Console/Commands/CleanDuplicateRows.php',
       'line' => 57,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Console/Commands/CleanDuplicateRows.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 57,
       'nodeType' => 'PhpParser\\Node\\Expr\\FuncCall',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    6 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot access property $name on mixed.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Console/Commands/CleanDuplicateRows.php',
       'line' => 65,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Console/Commands/CleanDuplicateRows.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 65,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.nonObject',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    7 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot call method count() on mixed.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Console/Commands/CleanDuplicateRows.php',
       'line' => 81,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Console/Commands/CleanDuplicateRows.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 81,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.nonObject',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    8 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #2 ...$values of function sprintf expects bool|float|int|string|null, mixed given.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Console/Commands/CleanDuplicateRows.php',
       'line' => 81,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Console/Commands/CleanDuplicateRows.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 78,
       'nodeType' => 'PhpParser\\Node\\Expr\\FuncCall',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    9 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot access property $ids on mixed.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Console/Commands/CleanDuplicateRows.php',
       'line' => 82,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Console/Commands/CleanDuplicateRows.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 82,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.nonObject',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    10 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot call method sum() on mixed.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Console/Commands/CleanDuplicateRows.php',
       'line' => 82,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Console/Commands/CleanDuplicateRows.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 82,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.nonObject',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    11 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #2 $string of function explode expects string, mixed given.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Console/Commands/CleanDuplicateRows.php',
       'line' => 82,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Console/Commands/CleanDuplicateRows.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 82,
       'nodeType' => 'PhpParser\\Node\\Expr\\FuncCall',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    12 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #3 ...$values of function sprintf expects bool|float|int|string|null, mixed given.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Console/Commands/CleanDuplicateRows.php',
       'line' => 82,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Console/Commands/CleanDuplicateRows.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 78,
       'nodeType' => 'PhpParser\\Node\\Expr\\FuncCall',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    13 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot call method sum() on mixed.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Console/Commands/CleanDuplicateRows.php',
       'line' => 83,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Console/Commands/CleanDuplicateRows.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 83,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.nonObject',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    14 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #4 ...$values of function sprintf expects bool|float|int|string|null, mixed given.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Console/Commands/CleanDuplicateRows.php',
       'line' => 83,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Console/Commands/CleanDuplicateRows.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 78,
       'nodeType' => 'PhpParser\\Node\\Expr\\FuncCall',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    15 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot access property $ids on mixed.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Console/Commands/CleanDuplicateRows.php',
       'line' => 84,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Console/Commands/CleanDuplicateRows.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 84,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.nonObject',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    16 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #2 $string of function explode expects string, mixed given.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Console/Commands/CleanDuplicateRows.php',
       'line' => 84,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Console/Commands/CleanDuplicateRows.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 84,
       'nodeType' => 'PhpParser\\Node\\Expr\\FuncCall',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    17 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method App\\Console\\Commands\\CleanDuplicateRows::processDuplicates() has no return type specified.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Console/Commands/CleanDuplicateRows.php',
       'line' => 91,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Console/Commands/CleanDuplicateRows.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 91,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.return',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    18 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method App\\Console\\Commands\\CleanDuplicateRows::processDuplicates() has parameter $duplicateGroups with no type specified.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Console/Commands/CleanDuplicateRows.php',
       'line' => 91,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Console/Commands/CleanDuplicateRows.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 91,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.parameter',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    19 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Argument of an invalid type mixed supplied for foreach, only iterables are supported.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Console/Commands/CleanDuplicateRows.php',
       'line' => 96,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Console/Commands/CleanDuplicateRows.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 96,
       'nodeType' => 'PHPStan\\Node\\InForeachNode',
       'identifier' => 'foreach.nonIterable',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    20 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot access property $ids on mixed.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Console/Commands/CleanDuplicateRows.php',
       'line' => 97,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Console/Commands/CleanDuplicateRows.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 97,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.nonObject',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    21 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #2 $string of function explode expects string, mixed given.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Console/Commands/CleanDuplicateRows.php',
       'line' => 97,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Console/Commands/CleanDuplicateRows.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 97,
       'nodeType' => 'PhpParser\\Node\\Expr\\FuncCall',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    22 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot access property $name on mixed.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Console/Commands/CleanDuplicateRows.php',
       'line' => 109,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Console/Commands/CleanDuplicateRows.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 109,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.nonObject',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Helpers/TimezoneHelper.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method App\\Helpers\\TimezoneHelper::getTimeZone() return type has no value type specified in iterable type array.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Helpers/TimezoneHelper.php',
       'line' => 8,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Helpers/TimezoneHelper.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 8,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/Auth/ConfirmablePasswordController.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot access property $email on App\\Models\\User|null.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/Auth/ConfirmablePasswordController.php',
       'line' => 28,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/Auth/ConfirmablePasswordController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 28,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.nonObject',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/Auth/EmailVerificationNotificationController.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot call method hasVerifiedEmail() on App\\Models\\User|null.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/Auth/EmailVerificationNotificationController.php',
       'line' => 16,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/Auth/EmailVerificationNotificationController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 16,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.nonObject',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot call method sendEmailVerificationNotification() on App\\Models\\User|null.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/Auth/EmailVerificationNotificationController.php',
       'line' => 20,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/Auth/EmailVerificationNotificationController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 20,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.nonObject',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/Auth/EmailVerificationPromptController.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot call method hasVerifiedEmail() on App\\Models\\User|null.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/Auth/EmailVerificationPromptController.php',
       'line' => 17,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/Auth/EmailVerificationPromptController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 17,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.nonObject',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/Auth/NewPasswordController.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #1 $value of static method Illuminate\\Support\\Facades\\Hash::make() expects string, mixed given.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/Auth/NewPasswordController.php',
       'line' => 46,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/Auth/NewPasswordController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 46,
       'nodeType' => 'PhpParser\\Node\\Expr\\StaticCall',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #1 $key of function __ expects string|null, mixed given.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/Auth/NewPasswordController.php',
       'line' => 58,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/Auth/NewPasswordController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 58,
       'nodeType' => 'PhpParser\\Node\\Expr\\FuncCall',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #1 $key of function __ expects string|null, mixed given.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/Auth/NewPasswordController.php',
       'line' => 60,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/Auth/NewPasswordController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 60,
       'nodeType' => 'PhpParser\\Node\\Expr\\FuncCall',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/Auth/PasswordController.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot call method update() on App\\Models\\User|null.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/Auth/PasswordController.php',
       'line' => 23,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/Auth/PasswordController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 23,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.nonObject',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot access offset \'password\' on mixed.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/Auth/PasswordController.php',
       'line' => 24,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/Auth/PasswordController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 24,
       'nodeType' => 'PhpParser\\Node\\Expr\\ArrayDimFetch',
       'identifier' => 'offsetAccess.nonOffsetAccessible',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #1 $value of static method Illuminate\\Support\\Facades\\Hash::make() expects string, mixed given.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/Auth/PasswordController.php',
       'line' => 24,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/Auth/PasswordController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 24,
       'nodeType' => 'PhpParser\\Node\\Expr\\StaticCall',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/Auth/RegisteredUserController.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #1 $value of static method Illuminate\\Support\\Facades\\Hash::make() expects string, mixed given.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/Auth/RegisteredUserController.php',
       'line' => 45,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/Auth/RegisteredUserController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 45,
       'nodeType' => 'PhpParser\\Node\\Expr\\StaticCall',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/Auth/VerifyEmailController.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot call method hasVerifiedEmail() on App\\Models\\User|null.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/Auth/VerifyEmailController.php',
       'line' => 17,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/Auth/VerifyEmailController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 17,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.nonObject',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot call method markEmailAsVerified() on App\\Models\\User|null.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/Auth/VerifyEmailController.php',
       'line' => 21,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/Auth/VerifyEmailController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 21,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.nonObject',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #1 $user of class Illuminate\\Auth\\Events\\Verified constructor expects Illuminate\\Contracts\\Auth\\MustVerifyEmail, App\\Models\\User|null given.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/Auth/VerifyEmailController.php',
       'line' => 22,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/Auth/VerifyEmailController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 22,
       'nodeType' => 'PhpParser\\Node\\Expr\\New_',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/CommentController.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot call method select() on mixed.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/CommentController.php',
       'line' => 18,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/CommentController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 18,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.nonObject',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot access offset \'comment\' on mixed.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/CommentController.php',
       'line' => 36,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/CommentController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 36,
       'nodeType' => 'PhpParser\\Node\\Expr\\ArrayDimFetch',
       'identifier' => 'offsetAccess.nonOffsetAccessible',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Property App\\Models\\Comment::$content (string) does not accept mixed.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/CommentController.php',
       'line' => 36,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/CommentController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 36,
       'nodeType' => 'PHPStan\\Node\\PropertyAssignNode',
       'identifier' => 'assign.propertyType',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    3 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Property App\\Models\\Comment::$user_id (int|null) does not accept int|string|null.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/CommentController.php',
       'line' => 37,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/CommentController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 37,
       'nodeType' => 'PHPStan\\Node\\PropertyAssignNode',
       'identifier' => 'assign.propertyType',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    4 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Property App\\Models\\Comment::$post_id (int|null) does not accept mixed.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/CommentController.php',
       'line' => 38,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/CommentController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 38,
       'nodeType' => 'PHPStan\\Node\\PropertyAssignNode',
       'identifier' => 'assign.propertyType',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    5 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method App\\Http\\Controllers\\CommentController::destroy() has no return type specified.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/CommentController.php',
       'line' => 45,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/CommentController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 45,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.return',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/FollowerController.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot call method toggle() on mixed.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/FollowerController.php',
       'line' => 13,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/FollowerController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 13,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.nonObject',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot call method count() on mixed.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/FollowerController.php',
       'line' => 16,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/FollowerController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 16,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.nonObject',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/LikeController.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot call method hasLiked() on App\\Models\\User|null.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/LikeController.php',
       'line' => 12,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/LikeController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 12,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.nonObject',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/PostController.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot call method latest() on mixed.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/PostController.php',
       'line' => 35,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/PostController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 35,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.nonObject',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot call method where() on mixed.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/PostController.php',
       'line' => 35,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/PostController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 35,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.nonObject',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot call method with() on mixed.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/PostController.php',
       'line' => 35,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/PostController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 35,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.nonObject',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    3 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot call method withCount() on mixed.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/PostController.php',
       'line' => 35,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/PostController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 35,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.nonObject',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    4 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot call method paginate() on mixed.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/PostController.php',
       'line' => 41,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/PostController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 41,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.nonObject',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    5 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot call method pluck() on mixed.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/PostController.php',
       'line' => 62,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/PostController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 62,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.nonObject',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    6 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot call method isNotEmpty() on mixed.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/PostController.php',
       'line' => 64,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/PostController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 64,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.nonObject',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    7 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot call method latest() on mixed.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/PostController.php',
       'line' => 82,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/PostController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 82,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.nonObject',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    8 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot call method posts() on App\\Models\\User|null.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/PostController.php',
       'line' => 82,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/PostController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 82,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.nonObject',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    9 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot call method with() on mixed.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/PostController.php',
       'line' => 82,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/PostController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 82,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.nonObject',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    10 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot call method withCount() on mixed.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/PostController.php',
       'line' => 82,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/PostController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 82,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.nonObject',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    11 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot call method paginate() on mixed.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/PostController.php',
       'line' => 87,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/PostController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 87,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.nonObject',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    12 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #1 $timeZone of method Carbon\\Carbon::setTimezone() expects DateTimeZone|int|string, mixed given.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/PostController.php',
       'line' => 115,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/PostController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 115,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    13 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #2 $time of static method Carbon\\Carbon::createFromFormat() expects string, mixed given.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/PostController.php',
       'line' => 149,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/PostController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 147,
       'nodeType' => 'PhpParser\\Node\\Expr\\StaticCall',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    14 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #3 $timezone of static method Carbon\\Carbon::createFromFormat() expects DateTimeZone|int|string|null, mixed given.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/PostController.php',
       'line' => 150,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/PostController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 147,
       'nodeType' => 'PhpParser\\Node\\Expr\\StaticCall',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    15 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot call method second() on Carbon\\Carbon|null.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/PostController.php',
       'line' => 153,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/PostController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 153,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.nonObject',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    16 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot call method setTimezone() on Carbon\\Carbon|null.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/PostController.php',
       'line' => 155,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/PostController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 155,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.nonObject',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    17 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #2 $time of static method Carbon\\Carbon::createFromFormat() expects string, mixed given.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/PostController.php',
       'line' => 214,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/PostController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 212,
       'nodeType' => 'PhpParser\\Node\\Expr\\StaticCall',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    18 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #3 $timezone of static method Carbon\\Carbon::createFromFormat() expects DateTimeZone|int|string|null, mixed given.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/PostController.php',
       'line' => 215,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/PostController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 212,
       'nodeType' => 'PhpParser\\Node\\Expr\\StaticCall',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    19 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot call method second() on Carbon\\Carbon|null.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/PostController.php',
       'line' => 218,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/PostController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 218,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.nonObject',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    20 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot call method setTimezone() on Carbon\\Carbon|null.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/PostController.php',
       'line' => 220,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/PostController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 220,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.nonObject',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/ProfileController.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot call method fill() on App\\Models\\User|null.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/ProfileController.php',
       'line' => 47,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/ProfileController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 47,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.nonObject',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot call method isDirty() on App\\Models\\User|null.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/ProfileController.php',
       'line' => 49,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/ProfileController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 49,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.nonObject',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot access property $email_verified_at on App\\Models\\User|null.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/ProfileController.php',
       'line' => 50,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/ProfileController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 50,
       'nodeType' => 'PHPStan\\Node\\PropertyAssignNode',
       'identifier' => 'property.nonObject',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    3 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot call method save() on App\\Models\\User|null.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/ProfileController.php',
       'line' => 53,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/ProfileController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 53,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.nonObject',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    4 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot call method clearMediaCollection() on App\\Models\\User|null.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/ProfileController.php',
       'line' => 56,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/ProfileController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 56,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.nonObject',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    5 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot call method addMediaFromRequest() on App\\Models\\User|null.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/ProfileController.php',
       'line' => 57,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/ProfileController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 57,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.nonObject',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    6 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot call method delete() on App\\Models\\User|null.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/ProfileController.php',
       'line' => 77,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/ProfileController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 77,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.nonObject',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/PublicProfileController.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot call method latest() on mixed.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/PublicProfileController.php',
       'line' => 12,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/PublicProfileController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 12,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.nonObject',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot call method where() on mixed.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/PublicProfileController.php',
       'line' => 12,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/PublicProfileController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 12,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.nonObject',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot call method with() on mixed.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/PublicProfileController.php',
       'line' => 12,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/PublicProfileController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 12,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.nonObject',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    3 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot call method withCount() on mixed.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/PublicProfileController.php',
       'line' => 12,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/PublicProfileController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 12,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.nonObject',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    4 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot call method paginate() on mixed.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/PublicProfileController.php',
       'line' => 18,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/PublicProfileController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 18,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.nonObject',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Requests/PostCreateRequest.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #1 $timeZone of method Carbon\\Carbon::setTimezone() expects DateTimeZone|int|string, mixed given.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Requests/PostCreateRequest.php',
       'line' => 36,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Requests/PostCreateRequest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 36,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot call method setTimezone() on Carbon\\Carbon|null.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Requests/PostCreateRequest.php',
       'line' => 47,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Requests/PostCreateRequest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 47,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.nonObject',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #2 $time of static method Carbon\\Carbon::createFromFormat() expects string, mixed given.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Requests/PostCreateRequest.php',
       'line' => 49,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Requests/PostCreateRequest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 47,
       'nodeType' => 'PhpParser\\Node\\Expr\\StaticCall',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    3 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method App\\Http\\Requests\\PostCreateRequest::messages() return type has no value type specified in iterable type array.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Requests/PostCreateRequest.php',
       'line' => 59,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Requests/PostCreateRequest.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 59,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Requests/PostUpdateRequest.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #1 $timeZone of method Carbon\\Carbon::setTimezone() expects DateTimeZone|int|string, mixed given.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Requests/PostUpdateRequest.php',
       'line' => 36,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Requests/PostUpdateRequest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 36,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot call method setTimezone() on Carbon\\Carbon|null.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Requests/PostUpdateRequest.php',
       'line' => 46,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Requests/PostUpdateRequest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 46,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.nonObject',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #2 $time of static method Carbon\\Carbon::createFromFormat() expects string, mixed given.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Requests/PostUpdateRequest.php',
       'line' => 48,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Requests/PostUpdateRequest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 46,
       'nodeType' => 'PhpParser\\Node\\Expr\\StaticCall',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    3 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method App\\Http\\Requests\\PostUpdateRequest::messages() return type has no value type specified in iterable type array.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Requests/PostUpdateRequest.php',
       'line' => 58,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Requests/PostUpdateRequest.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 58,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Requests/ProfileUpdateRequest.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot access property $id on App\\Models\\User|null.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Requests/ProfileUpdateRequest.php',
       'line' => 26,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Requests/ProfileUpdateRequest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 26,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.nonObject',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot access property $id on App\\Models\\User|null.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Requests/ProfileUpdateRequest.php',
       'line' => 35,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Requests/ProfileUpdateRequest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 35,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.nonObject',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Models/Comment.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method App\\Models\\Comment::post() return type with generic class Illuminate\\Database\\Eloquent\\Relations\\BelongsTo does not specify its types: TRelatedModel, TDeclaringModel',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Models/Comment.php',
       'line' => 12,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Models/Comment.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 12,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.generics',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method App\\Models\\Comment::user() return type with generic class Illuminate\\Database\\Eloquent\\Relations\\BelongsTo does not specify its types: TRelatedModel, TDeclaringModel',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Models/Comment.php',
       'line' => 16,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Models/Comment.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 16,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.generics',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Models/Follower.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method App\\Models\\Follower::user() has no return type specified.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Models/Follower.php',
       'line' => 14,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Models/Follower.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 14,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.return',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method App\\Models\\Follower::follower() has no return type specified.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Models/Follower.php',
       'line' => 19,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Models/Follower.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 19,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.return',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Models/Like.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method App\\Models\\Like::post() return type with generic class Illuminate\\Database\\Eloquent\\Relations\\BelongsTo does not specify its types: TRelatedModel, TDeclaringModel',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Models/Like.php',
       'line' => 15,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Models/Like.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 15,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.generics',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method App\\Models\\Like::user() return type with generic class Illuminate\\Database\\Eloquent\\Relations\\BelongsTo does not specify its types: TRelatedModel, TDeclaringModel',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Models/Like.php',
       'line' => 20,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Models/Like.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 20,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.generics',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Models/Post.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Class App\\Models\\Post uses generic trait Illuminate\\Database\\Eloquent\\Factories\\HasFactory but does not specify its types: TFactory',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Models/Post.php',
       'line' => 17,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Models/Post.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 17,
       'nodeType' => 'PhpParser\\Node\\Stmt\\TraitUse',
       'identifier' => 'missingType.generics',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method App\\Models\\Post::imageUrl() has no return type specified.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Models/Post.php',
       'line' => 55,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Models/Post.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 55,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.return',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method App\\Models\\Post::imageUrl() has parameter $conversionName with no type specified.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Models/Post.php',
       'line' => 55,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Models/Post.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 55,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.parameter',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    3 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #1 $conversionName of method Spatie\\MediaLibrary\\MediaCollections\\Models\\Media::hasGeneratedConversion() expects string, mixed given.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Models/Post.php',
       'line' => 61,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Models/Post.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 61,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    4 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #1 $conversionName of method Spatie\\MediaLibrary\\MediaCollections\\Models\\Media::getUrl() expects string, mixed given.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Models/Post.php',
       'line' => 62,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Models/Post.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 62,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    5 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method App\\Models\\Post::user() return type with generic class Illuminate\\Database\\Eloquent\\Relations\\BelongsTo does not specify its types: TRelatedModel, TDeclaringModel',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Models/Post.php',
       'line' => 108,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Models/Post.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 108,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.generics',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    6 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method App\\Models\\Post::category() return type with generic class Illuminate\\Database\\Eloquent\\Relations\\BelongsTo does not specify its types: TRelatedModel, TDeclaringModel',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Models/Post.php',
       'line' => 113,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Models/Post.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 113,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.generics',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    7 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method App\\Models\\Post::likes() return type with generic class Illuminate\\Database\\Eloquent\\Relations\\HasMany does not specify its types: TRelatedModel, TDeclaringModel',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Models/Post.php',
       'line' => 118,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Models/Post.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 118,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.generics',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    8 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method App\\Models\\Post::comments() return type with generic class Illuminate\\Database\\Eloquent\\Relations\\HasMany does not specify its types: TRelatedModel, TDeclaringModel',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Models/Post.php',
       'line' => 123,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Models/Post.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 123,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.generics',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    9 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method App\\Models\\Post::readTime() has parameter $wordsPerMinute with no type specified.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Models/Post.php',
       'line' => 128,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Models/Post.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 128,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.parameter',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    10 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Binary operation "/" between int and mixed results in an error.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Models/Post.php',
       'line' => 131,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Models/Post.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 131,
       'nodeType' => 'PhpParser\\Node\\Expr\\BinaryOp\\Div',
       'identifier' => 'binaryOp.invalid',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Models/User.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method App\\Models\\User::setUsernameAttribute() has no return type specified.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Models/User.php',
       'line' => 41,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Models/User.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 41,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.return',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method App\\Models\\User::setUsernameAttribute() has parameter $value with no type specified.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Models/User.php',
       'line' => 41,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Models/User.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 41,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.parameter',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #3 $subject of function str_replace expects array<string>|string, mixed given.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Models/User.php',
       'line' => 43,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Models/User.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 43,
       'nodeType' => 'PhpParser\\Node\\Expr\\FuncCall',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    3 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method App\\Models\\User::imageUrl() has parameter $conversionName with no type specified.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Models/User.php',
       'line' => 94,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Models/User.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 94,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.parameter',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    4 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #1 $conversionName of method Spatie\\MediaLibrary\\MediaCollections\\Models\\Media::getUrl() expects string, mixed given.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Models/User.php',
       'line' => 106,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Models/User.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 106,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    5 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #1 $conversionName of method Spatie\\MediaLibrary\\MediaCollections\\Models\\Media::hasGeneratedConversion() expects string, mixed given.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Models/User.php',
       'line' => 108,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Models/User.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 108,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    6 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method App\\Models\\User::posts() has no return type specified.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Models/User.php',
       'line' => 119,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Models/User.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 119,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.return',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    7 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method App\\Models\\User::following() has no return type specified.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Models/User.php',
       'line' => 124,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Models/User.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 124,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.return',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    8 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method App\\Models\\User::followers() has no return type specified.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Models/User.php',
       'line' => 129,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Models/User.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 129,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.return',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    9 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot call method exists() on mixed.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Models/User.php',
       'line' => 139,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Models/User.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 139,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.nonObject',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    10 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot call method where() on mixed.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Models/User.php',
       'line' => 139,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Models/User.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 139,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.nonObject',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    11 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method App\\Models\\User::isFollowedBy() should return bool but returns mixed.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Models/User.php',
       'line' => 139,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Models/User.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 139,
       'nodeType' => 'PhpParser\\Node\\Stmt\\Return_',
       'identifier' => 'return.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/config/session.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #1 $title of static method Illuminate\\Support\\Str::slug() expects string, bool|string given.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/config/session.php',
       'line' => 132,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/config/session.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 132,
       'nodeType' => 'PhpParser\\Node\\Expr\\StaticCall',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/database/factories/PostFactory.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Class Database\\Factories\\PostFactory extends generic class Illuminate\\Database\\Eloquent\\Factories\\Factory but does not specify its types: TModel',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/database/factories/PostFactory.php',
       'line' => 10,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/database/factories/PostFactory.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 10,
       'nodeType' => 'PHPStan\\Node\\InClassNode',
       'identifier' => 'missingType.generics',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot access property $id on App\\Models\\Category|null.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/database/factories/PostFactory.php',
       'line' => 22,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/database/factories/PostFactory.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 22,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.nonObject',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot access property $id on App\\Models\\User|null.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/database/factories/PostFactory.php',
       'line' => 23,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/database/factories/PostFactory.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 23,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.nonObject',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    3 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #1 $callback of method Illuminate\\Database\\Eloquent\\Factories\\Factory<Illuminate\\Database\\Eloquent\\Model>::afterCreating() expects Closure(Illuminate\\Database\\Eloquent\\Model): mixed, Closure(App\\Models\\Post): void given.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/database/factories/PostFactory.php',
       'line' => 30,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/database/factories/PostFactory.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 30,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    4 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #1 $url of method App\\Models\\Post::addMediaFromUrl() expects string, mixed given.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/database/factories/PostFactory.php',
       'line' => 47,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/database/factories/PostFactory.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 47,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/AuthenticationTest.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to an undefined method PHPUnit\\Framework\\TestCase::get().',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/AuthenticationTest.php',
       'line' => 6,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/AuthenticationTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 6,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot call method assertStatus() on mixed.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/AuthenticationTest.php',
       'line' => 8,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/AuthenticationTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 8,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.nonObject',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to an undefined method PHPUnit\\Framework\\TestCase::post().',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/AuthenticationTest.php',
       'line' => 14,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/AuthenticationTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 14,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    3 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to an undefined method PHPUnit\\Framework\\TestCase::assertAuthenticated().',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/AuthenticationTest.php',
       'line' => 19,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/AuthenticationTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 19,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    4 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot call method assertRedirect() on mixed.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/AuthenticationTest.php',
       'line' => 20,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/AuthenticationTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 20,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.nonObject',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    5 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to an undefined method PHPUnit\\Framework\\TestCase::post().',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/AuthenticationTest.php',
       'line' => 26,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/AuthenticationTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 26,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    6 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to an undefined method PHPUnit\\Framework\\TestCase::assertGuest().',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/AuthenticationTest.php',
       'line' => 31,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/AuthenticationTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 31,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    7 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to an undefined method PHPUnit\\Framework\\TestCase::actingAs().',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/AuthenticationTest.php',
       'line' => 37,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/AuthenticationTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 37,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    8 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot call method post() on mixed.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/AuthenticationTest.php',
       'line' => 37,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/AuthenticationTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 37,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.nonObject',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    9 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to an undefined method PHPUnit\\Framework\\TestCase::assertGuest().',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/AuthenticationTest.php',
       'line' => 39,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/AuthenticationTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 39,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    10 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot call method assertRedirect() on mixed.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/AuthenticationTest.php',
       'line' => 40,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/AuthenticationTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 40,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.nonObject',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/EmailVerificationTest.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to an undefined method PHPUnit\\Framework\\TestCase::actingAs().',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/EmailVerificationTest.php',
       'line' => 11,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/EmailVerificationTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 11,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot call method get() on mixed.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/EmailVerificationTest.php',
       'line' => 11,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/EmailVerificationTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 11,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.nonObject',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot call method assertStatus() on mixed.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/EmailVerificationTest.php',
       'line' => 13,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/EmailVerificationTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 13,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.nonObject',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    3 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to an undefined method PHPUnit\\Framework\\TestCase::actingAs().',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/EmailVerificationTest.php',
       'line' => 27,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/EmailVerificationTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 27,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    4 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot call method get() on mixed.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/EmailVerificationTest.php',
       'line' => 27,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/EmailVerificationTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 27,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.nonObject',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    5 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot call method hasVerifiedEmail() on App\\Models\\User|null.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/EmailVerificationTest.php',
       'line' => 30,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/EmailVerificationTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 30,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.nonObject',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    6 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot call method assertRedirect() on mixed.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/EmailVerificationTest.php',
       'line' => 31,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/EmailVerificationTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 31,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.nonObject',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    7 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to an undefined method PHPUnit\\Framework\\TestCase::actingAs().',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/EmailVerificationTest.php',
       'line' => 43,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/EmailVerificationTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 43,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    8 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot call method get() on mixed.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/EmailVerificationTest.php',
       'line' => 43,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/EmailVerificationTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 43,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.nonObject',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    9 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot call method hasVerifiedEmail() on App\\Models\\User|null.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/EmailVerificationTest.php',
       'line' => 45,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/EmailVerificationTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 45,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.nonObject',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/PasswordConfirmationTest.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to an undefined method PHPUnit\\Framework\\TestCase::actingAs().',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/PasswordConfirmationTest.php',
       'line' => 8,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/PasswordConfirmationTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 8,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot call method get() on mixed.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/PasswordConfirmationTest.php',
       'line' => 8,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/PasswordConfirmationTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 8,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.nonObject',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot call method assertStatus() on mixed.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/PasswordConfirmationTest.php',
       'line' => 10,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/PasswordConfirmationTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 10,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.nonObject',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    3 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to an undefined method PHPUnit\\Framework\\TestCase::actingAs().',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/PasswordConfirmationTest.php',
       'line' => 16,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/PasswordConfirmationTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 16,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    4 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot call method post() on mixed.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/PasswordConfirmationTest.php',
       'line' => 16,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/PasswordConfirmationTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 16,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.nonObject',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    5 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot call method assertRedirect() on mixed.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/PasswordConfirmationTest.php',
       'line' => 20,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/PasswordConfirmationTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 20,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.nonObject',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    6 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot call method assertSessionHasNoErrors() on mixed.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/PasswordConfirmationTest.php',
       'line' => 21,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/PasswordConfirmationTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 21,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.nonObject',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    7 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to an undefined method PHPUnit\\Framework\\TestCase::actingAs().',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/PasswordConfirmationTest.php',
       'line' => 27,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/PasswordConfirmationTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 27,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    8 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot call method post() on mixed.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/PasswordConfirmationTest.php',
       'line' => 27,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/PasswordConfirmationTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 27,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.nonObject',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    9 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot call method assertSessionHasErrors() on mixed.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/PasswordConfirmationTest.php',
       'line' => 31,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/PasswordConfirmationTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 31,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.nonObject',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/PasswordResetTest.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to an undefined method PHPUnit\\Framework\\TestCase::get().',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/PasswordResetTest.php',
       'line' => 8,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/PasswordResetTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 8,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot call method assertStatus() on mixed.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/PasswordResetTest.php',
       'line' => 10,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/PasswordResetTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 10,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.nonObject',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to an undefined method PHPUnit\\Framework\\TestCase::post().',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/PasswordResetTest.php',
       'line' => 18,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/PasswordResetTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 18,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    3 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to an undefined method PHPUnit\\Framework\\TestCase::post().',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/PasswordResetTest.php',
       'line' => 28,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/PasswordResetTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 28,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    4 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Binary operation "." between \'/reset-password/\' and mixed results in an error.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/PasswordResetTest.php',
       'line' => 31,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/PasswordResetTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 31,
       'nodeType' => 'PhpParser\\Node\\Expr\\BinaryOp\\Concat',
       'identifier' => 'binaryOp.invalid',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    5 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to an undefined method PHPUnit\\Framework\\TestCase::get().',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/PasswordResetTest.php',
       'line' => 31,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/PasswordResetTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 31,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    6 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot access property $token on mixed.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/PasswordResetTest.php',
       'line' => 31,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/PasswordResetTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 31,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.nonObject',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    7 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot call method assertStatus() on mixed.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/PasswordResetTest.php',
       'line' => 33,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/PasswordResetTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 33,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.nonObject',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    8 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to an undefined method PHPUnit\\Framework\\TestCase::post().',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/PasswordResetTest.php',
       'line' => 44,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/PasswordResetTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 44,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    9 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to an undefined method PHPUnit\\Framework\\TestCase::post().',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/PasswordResetTest.php',
       'line' => 47,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/PasswordResetTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 47,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    10 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot access property $token on mixed.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/PasswordResetTest.php',
       'line' => 48,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/PasswordResetTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 48,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.nonObject',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    11 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot call method assertRedirect() on mixed.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/PasswordResetTest.php',
       'line' => 54,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/PasswordResetTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 54,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.nonObject',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    12 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot call method assertSessionHasNoErrors() on mixed.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/PasswordResetTest.php',
       'line' => 54,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/PasswordResetTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 54,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.nonObject',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/PasswordUpdateTest.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to an undefined method PHPUnit\\Framework\\TestCase::actingAs().',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/PasswordUpdateTest.php',
       'line' => 9,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/PasswordUpdateTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 9,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot call method from() on mixed.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/PasswordUpdateTest.php',
       'line' => 9,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/PasswordUpdateTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 9,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.nonObject',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot call method put() on mixed.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/PasswordUpdateTest.php',
       'line' => 9,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/PasswordUpdateTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 9,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.nonObject',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    3 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot call method assertRedirect() on mixed.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/PasswordUpdateTest.php',
       'line' => 18,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/PasswordUpdateTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 18,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.nonObject',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    4 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot call method assertSessionHasNoErrors() on mixed.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/PasswordUpdateTest.php',
       'line' => 18,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/PasswordUpdateTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 18,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.nonObject',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    5 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to an undefined method PHPUnit\\Framework\\TestCase::actingAs().',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/PasswordUpdateTest.php',
       'line' => 28,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/PasswordUpdateTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 28,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    6 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot call method from() on mixed.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/PasswordUpdateTest.php',
       'line' => 28,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/PasswordUpdateTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 28,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.nonObject',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    7 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot call method put() on mixed.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/PasswordUpdateTest.php',
       'line' => 28,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/PasswordUpdateTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 28,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.nonObject',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    8 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot call method assertRedirect() on mixed.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/PasswordUpdateTest.php',
       'line' => 37,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/PasswordUpdateTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 37,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.nonObject',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    9 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot call method assertSessionHasErrorsIn() on mixed.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/PasswordUpdateTest.php',
       'line' => 37,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/PasswordUpdateTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 37,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.nonObject',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/RegistrationTest.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to an undefined method PHPUnit\\Framework\\TestCase::get().',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/RegistrationTest.php',
       'line' => 4,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/RegistrationTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 4,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot call method assertStatus() on mixed.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/RegistrationTest.php',
       'line' => 6,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/RegistrationTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 6,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.nonObject',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to an undefined method PHPUnit\\Framework\\TestCase::post().',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/RegistrationTest.php',
       'line' => 10,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/RegistrationTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 10,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    3 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to an undefined method PHPUnit\\Framework\\TestCase::assertAuthenticated().',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/RegistrationTest.php',
       'line' => 17,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/RegistrationTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 17,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    4 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot call method assertRedirect() on mixed.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/RegistrationTest.php',
       'line' => 18,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/RegistrationTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 18,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.nonObject',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/ExampleTest.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to an undefined method PHPUnit\\Framework\\TestCase::get().',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/ExampleTest.php',
       'line' => 4,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/ExampleTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 4,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot call method assertStatus() on mixed.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/ExampleTest.php',
       'line' => 6,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/ExampleTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 6,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.nonObject',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/ProfileTest.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to an undefined method PHPUnit\\Framework\\TestCase::actingAs().',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/ProfileTest.php',
       'line' => 8,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/ProfileTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 8,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot call method get() on mixed.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/ProfileTest.php',
       'line' => 8,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/ProfileTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 8,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.nonObject',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot call method assertOk() on mixed.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/ProfileTest.php',
       'line' => 12,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/ProfileTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 12,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.nonObject',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    3 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to an undefined method PHPUnit\\Framework\\TestCase::actingAs().',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/ProfileTest.php',
       'line' => 18,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/ProfileTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 18,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    4 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot call method patch() on mixed.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/ProfileTest.php',
       'line' => 18,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/ProfileTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 18,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.nonObject',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    5 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot call method assertRedirect() on mixed.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/ProfileTest.php',
       'line' => 25,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/ProfileTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 25,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.nonObject',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    6 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot call method assertSessionHasNoErrors() on mixed.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/ProfileTest.php',
       'line' => 25,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/ProfileTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 25,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.nonObject',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    7 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to an undefined method PHPUnit\\Framework\\TestCase::actingAs().',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/ProfileTest.php',
       'line' => 39,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/ProfileTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 39,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    8 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot call method patch() on mixed.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/ProfileTest.php',
       'line' => 39,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/ProfileTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 39,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.nonObject',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    9 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot call method assertRedirect() on mixed.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/ProfileTest.php',
       'line' => 46,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/ProfileTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 46,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.nonObject',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    10 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot call method assertSessionHasNoErrors() on mixed.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/ProfileTest.php',
       'line' => 46,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/ProfileTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 46,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.nonObject',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    11 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to an undefined method PHPUnit\\Framework\\TestCase::actingAs().',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/ProfileTest.php',
       'line' => 56,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/ProfileTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 56,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    12 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot call method delete() on mixed.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/ProfileTest.php',
       'line' => 56,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/ProfileTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 56,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.nonObject',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    13 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot call method assertRedirect() on mixed.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/ProfileTest.php',
       'line' => 62,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/ProfileTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 62,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.nonObject',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    14 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot call method assertSessionHasNoErrors() on mixed.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/ProfileTest.php',
       'line' => 62,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/ProfileTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 62,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.nonObject',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    15 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to an undefined method PHPUnit\\Framework\\TestCase::assertGuest().',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/ProfileTest.php',
       'line' => 66,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/ProfileTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 66,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    16 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to an undefined method PHPUnit\\Framework\\TestCase::actingAs().',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/ProfileTest.php',
       'line' => 73,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/ProfileTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 73,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    17 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot call method delete() on mixed.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/ProfileTest.php',
       'line' => 73,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/ProfileTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 73,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.nonObject',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    18 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot call method from() on mixed.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/ProfileTest.php',
       'line' => 73,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/ProfileTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 73,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.nonObject',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    19 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot call method assertRedirect() on mixed.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/ProfileTest.php',
       'line' => 80,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/ProfileTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 80,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.nonObject',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    20 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot call method assertSessionHasErrorsIn() on mixed.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/ProfileTest.php',
       'line' => 80,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/ProfileTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 80,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.nonObject',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Pest.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot call method toBe() on mixed.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Pest.php',
       'line' => 30,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Pest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 30,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.nonObject',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Undefined variable: $this',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Pest.php',
       'line' => 30,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Pest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 30,
       'nodeType' => 'PhpParser\\Node\\Expr\\Variable',
       'identifier' => 'variable.undefined',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Function something() has no return type specified.',
       'file' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Pest.php',
       'line' => 44,
       'canBeIgnored' => true,
       'filePath' => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Pest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 44,
       'nodeType' => 'PHPStan\\Node\\InFunctionNode',
       'identifier' => 'missingType.return',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
); },
	'locallyIgnoredErrorsCallback' => static function (): array { return array (
); },
	'linesToIgnore' => array (
),
	'unmatchedLineIgnores' => array (
),
	'collectedDataCallback' => static function (): array { return array (
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Console/Commands/CleanDuplicateRows.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Database\\Connection',
        1 => 'transaction',
        2 => 95,
      ),
    ),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Helpers/TimezoneHelper.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => 
    array (
      0 => 
      array (
        0 => 'ksort',
        1 => 28,
      ),
    ),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/Auth/AuthenticatedSessionController.php' => 
  array (
    'Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector' => 
    array (
      0 => 'auth.login',
    ),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/Auth/ConfirmablePasswordController.php' => 
  array (
    'Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector' => 
    array (
      0 => 'auth.confirm-password',
    ),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/Auth/EmailVerificationPromptController.php' => 
  array (
    'Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector' => 
    array (
      0 => 'auth.verify-email',
    ),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/Auth/NewPasswordController.php' => 
  array (
    'Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector' => 
    array (
      0 => 'auth.reset-password',
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => 
    array (
      0 => 
      array (
        0 => 'event',
        1 => 50,
      ),
    ),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/Auth/PasswordResetLinkController.php' => 
  array (
    'Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector' => 
    array (
      0 => 'auth.forgot-password',
    ),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/Auth/RegisteredUserController.php' => 
  array (
    'Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector' => 
    array (
      0 => 'auth.register',
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => 
    array (
      0 => 
      array (
        0 => 'event',
        1 => 48,
      ),
    ),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/Auth/VerifyEmailController.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => 
    array (
      0 => 
      array (
        0 => 'event',
        1 => 22,
      ),
    ),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/CommentController.php' => 
  array (
    'Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector' => 
    array (
      0 => 'comment.comment-section',
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => 
    array (
      0 => 
      array (
        0 => 'abort',
        1 => 48,
      ),
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureMethodCallCollector' => 
    array (
      0 => 
      array (
        0 => 
        array (
          0 => 'Illuminate\\Database\\Eloquent\\Model',
        ),
        1 => 'save',
        2 => 40,
      ),
    ),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/PostController.php' => 
  array (
    'Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector' => 
    array (
      0 => 'post.index',
      1 => 'post.index',
      2 => 'post.index',
      3 => 'post.index',
      4 => 'post.show',
      5 => 'post.create',
      6 => 'post.edit',
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => 
    array (
      0 => 
      array (
        0 => 'abort',
        1 => 179,
      ),
      1 => 
      array (
        0 => 'abort',
        1 => 196,
      ),
      2 => 
      array (
        0 => 'abort',
        1 => 243,
      ),
    ),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/ProfileController.php' => 
  array (
    'Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector' => 
    array (
      0 => 'profile.edit',
    ),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/PublicProfileController.php' => 
  array (
    'Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector' => 
    array (
      0 => 'profile.show',
    ),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Requests/Auth/LoginRequest.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Http\\Requests\\Auth\\LoginRequest',
        1 => 'authorize',
        2 => 'App\\Http\\Requests\\Auth\\LoginRequest',
      ),
      1 => 
      array (
        0 => 'App\\Http\\Requests\\Auth\\LoginRequest',
        1 => 'rules',
        2 => 'App\\Http\\Requests\\Auth\\LoginRequest',
      ),
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => 
    array (
      0 => 
      array (
        0 => 'event',
        1 => 66,
      ),
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\RateLimiter',
        1 => 'hit',
        2 => 45,
      ),
    ),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Requests/PostCreateRequest.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Http\\Requests\\PostCreateRequest',
        1 => 'authorize',
        2 => 'App\\Http\\Requests\\PostCreateRequest',
      ),
      1 => 
      array (
        0 => 'App\\Http\\Requests\\PostCreateRequest',
        1 => 'messages',
        2 => 'App\\Http\\Requests\\PostCreateRequest',
      ),
    ),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Requests/PostUpdateRequest.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Http\\Requests\\PostUpdateRequest',
        1 => 'authorize',
        2 => 'App\\Http\\Requests\\PostUpdateRequest',
      ),
      1 => 
      array (
        0 => 'App\\Http\\Requests\\PostUpdateRequest',
        1 => 'messages',
        2 => 'App\\Http\\Requests\\PostUpdateRequest',
      ),
    ),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Models/Post.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Models\\Post',
        1 => 'casts',
        2 => 'App\\Models\\Post',
      ),
    ),
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
      ),
      1 => 
      array (
        0 => 'Spatie\\MediaLibrary\\InteractsWithMedia',
      ),
      2 => 
      array (
        0 => 'Spatie\\Sluggable\\HasSlug',
      ),
    ),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Models/User.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Models\\User',
        1 => 'getDisplayUsernameAttribute',
        2 => 'App\\Models\\User',
      ),
      1 => 
      array (
        0 => 'App\\Models\\User',
        1 => 'casts',
        2 => 'App\\Models\\User',
      ),
    ),
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
        1 => 'Illuminate\\Notifications\\Notifiable',
        2 => 'Spatie\\MediaLibrary\\InteractsWithMedia',
      ),
    ),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Providers/TelescopeServiceProvider.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Laravel\\Telescope\\Telescope',
        1 => 'filter',
        2 => 24,
      ),
      1 => 
      array (
        0 => 'Laravel\\Telescope\\Telescope',
        1 => 'hideRequestParameters',
        2 => 43,
      ),
      2 => 
      array (
        0 => 'Laravel\\Telescope\\Telescope',
        1 => 'hideRequestHeaders',
        2 => 45,
      ),
      3 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Gate',
        1 => 'define',
        2 => 59,
      ),
    ),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/View/Components/AppLayout.php' => 
  array (
    'Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector' => 
    array (
      0 => 'layouts.app',
    ),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/View/Components/CategoryTabs.php' => 
  array (
    'Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector' => 
    array (
      0 => 'components.category-tabs',
    ),
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'App\\View\\Components\\CategoryTabs',
    ),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/View/Components/GuestLayout.php' => 
  array (
    'Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector' => 
    array (
      0 => 'layouts.guest',
    ),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/database/seeders/DatabaseSeeder.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Builder',
        1 => 'firstOrCreate',
        2 => 29,
      ),
    ),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/routes/auth.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Route',
        1 => 'post',
        2 => 18,
      ),
      1 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Route',
        1 => 'post',
        2 => 23,
      ),
      2 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Route',
        1 => 'post',
        2 => 53,
      ),
    ),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/AuthenticationTest.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => 
    array (
      0 => 
      array (
        0 => 'test',
        1 => 5,
      ),
      1 => 
      array (
        0 => 'test',
        1 => 11,
      ),
      2 => 
      array (
        0 => 'test',
        1 => 23,
      ),
      3 => 
      array (
        0 => 'test',
        1 => 34,
      ),
    ),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/EmailVerificationTest.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => 
    array (
      0 => 
      array (
        0 => 'test',
        1 => 8,
      ),
      1 => 
      array (
        0 => 'test',
        1 => 16,
      ),
      2 => 
      array (
        0 => 'test',
        1 => 34,
      ),
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureMethodCallCollector' => 
    array (
      0 => 
      array (
        0 => 
        array (
          0 => 'Pest\\Mixins\\Expectation',
        ),
        1 => 'toBeTrue',
        2 => 30,
      ),
      1 => 
      array (
        0 => 
        array (
          0 => 'Pest\\Mixins\\Expectation',
        ),
        1 => 'toBeFalse',
        2 => 45,
      ),
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Event',
        1 => 'fake',
        2 => 19,
      ),
    ),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/PasswordConfirmationTest.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => 
    array (
      0 => 
      array (
        0 => 'test',
        1 => 5,
      ),
      1 => 
      array (
        0 => 'test',
        1 => 13,
      ),
      2 => 
      array (
        0 => 'test',
        1 => 24,
      ),
    ),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/PasswordResetTest.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => 
    array (
      0 => 
      array (
        0 => 'test',
        1 => 7,
      ),
      1 => 
      array (
        0 => 'test',
        1 => 13,
      ),
      2 => 
      array (
        0 => 'test',
        1 => 23,
      ),
      3 => 
      array (
        0 => 'test',
        1 => 39,
      ),
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Notification',
        1 => 'fake',
        2 => 14,
      ),
      1 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Notification',
        1 => 'fake',
        2 => 24,
      ),
      2 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Notification',
        1 => 'fake',
        2 => 40,
      ),
    ),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/PasswordUpdateTest.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => 
    array (
      0 => 
      array (
        0 => 'test',
        1 => 6,
      ),
      1 => 
      array (
        0 => 'test',
        1 => 25,
      ),
    ),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/RegistrationTest.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => 
    array (
      0 => 
      array (
        0 => 'test',
        1 => 3,
      ),
      1 => 
      array (
        0 => 'test',
        1 => 9,
      ),
    ),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/ExampleTest.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => 
    array (
      0 => 
      array (
        0 => 'it',
        1 => 3,
      ),
    ),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/ProfileTest.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => 
    array (
      0 => 
      array (
        0 => 'test',
        1 => 5,
      ),
      1 => 
      array (
        0 => 'test',
        1 => 15,
      ),
      2 => 
      array (
        0 => 'test',
        1 => 36,
      ),
      3 => 
      array (
        0 => 'test',
        1 => 53,
      ),
      4 => 
      array (
        0 => 'test',
        1 => 70,
      ),
    ),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Pest.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\FunctionWithoutImpurePointsCollector' => 
    array (
      0 => 'something',
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureMethodCallCollector' => 
    array (
      0 => 
      array (
        0 => 
        array (
          0 => 'Pest\\PendingCalls\\UsesCall',
        ),
        1 => 'in',
        2 => 14,
      ),
    ),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Unit/ExampleTest.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => 
    array (
      0 => 
      array (
        0 => 'test',
        1 => 3,
      ),
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureMethodCallCollector' => 
    array (
      0 => 
      array (
        0 => 
        array (
          0 => 'Pest\\Mixins\\Expectation',
        ),
        1 => 'toBeTrue',
        2 => 4,
      ),
    ),
  ),
); },
	'dependencies' => array (
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Console/Commands/CleanDuplicateRows.php' => 
  array (
    'fileHash' => '375a57a9a3112e8a4ea45dc1572e03b9318dc494',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Helpers/TimezoneHelper.php' => 
  array (
    'fileHash' => 'e707027f0d88ca9e55909081ca8ee471f496ef10',
    'dependentFiles' => 
    array (
      0 => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/ProfileController.php',
    ),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/Auth/AuthenticatedSessionController.php' => 
  array (
    'fileHash' => 'cf83b6bbd07baea2c730f9eaf7e8ad005aa98dcb',
    'dependentFiles' => 
    array (
      0 => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/routes/auth.php',
    ),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/Auth/ConfirmablePasswordController.php' => 
  array (
    'fileHash' => 'eeee46cbb7476df5ee853590bf87a6e51b80cc74',
    'dependentFiles' => 
    array (
      0 => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/routes/auth.php',
    ),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/Auth/EmailVerificationNotificationController.php' => 
  array (
    'fileHash' => 'e66bf11b7a3ce9260d5ae7a6a3cd916df11805d6',
    'dependentFiles' => 
    array (
      0 => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/routes/auth.php',
    ),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/Auth/EmailVerificationPromptController.php' => 
  array (
    'fileHash' => '606dc87bb9232f15e67d9f2a30f66e3dd1a8b4b6',
    'dependentFiles' => 
    array (
      0 => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/routes/auth.php',
    ),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/Auth/NewPasswordController.php' => 
  array (
    'fileHash' => 'a8ea1d9956cf870f9aa5f356e5eff537b01c1469',
    'dependentFiles' => 
    array (
      0 => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/routes/auth.php',
    ),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/Auth/PasswordController.php' => 
  array (
    'fileHash' => '155d64155609df7f8b323a8b1f17322b6abdcdbb',
    'dependentFiles' => 
    array (
      0 => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/routes/auth.php',
    ),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/Auth/PasswordResetLinkController.php' => 
  array (
    'fileHash' => '086bdd57ec44918d3a2bfe98a098c1cbd8d16b9a',
    'dependentFiles' => 
    array (
      0 => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/routes/auth.php',
    ),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/Auth/RegisteredUserController.php' => 
  array (
    'fileHash' => 'bf5e5115fea85ac776693b2891a646871bf51828',
    'dependentFiles' => 
    array (
      0 => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/routes/auth.php',
    ),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/Auth/VerifyEmailController.php' => 
  array (
    'fileHash' => '2937923504829824c6405ec9ff5513db3d8194b5',
    'dependentFiles' => 
    array (
      0 => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/routes/auth.php',
    ),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/CommentController.php' => 
  array (
    'fileHash' => 'b22887e546da116642dceb6e60b1e332f7950484',
    'dependentFiles' => 
    array (
      0 => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/routes/web.php',
    ),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/Controller.php' => 
  array (
    'fileHash' => 'a33a5105f92c73a309c9f8a549905dcdf6dccbae',
    'dependentFiles' => 
    array (
      0 => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/Auth/AuthenticatedSessionController.php',
      1 => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/Auth/ConfirmablePasswordController.php',
      2 => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/Auth/EmailVerificationNotificationController.php',
      3 => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/Auth/EmailVerificationPromptController.php',
      4 => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/Auth/NewPasswordController.php',
      5 => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/Auth/PasswordController.php',
      6 => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/Auth/PasswordResetLinkController.php',
      7 => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/Auth/RegisteredUserController.php',
      8 => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/Auth/VerifyEmailController.php',
      9 => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/CommentController.php',
      10 => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/FollowerController.php',
      11 => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/LikeController.php',
      12 => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/PostController.php',
      13 => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/ProfileController.php',
      14 => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/PublicProfileController.php',
      15 => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/routes/auth.php',
      16 => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/routes/web.php',
    ),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/FollowerController.php' => 
  array (
    'fileHash' => 'cf4d332e2263ead11931b02eb4b775523f1165f0',
    'dependentFiles' => 
    array (
      0 => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/routes/web.php',
    ),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/LikeController.php' => 
  array (
    'fileHash' => '38f699ca954addf803187406911354cfa9dc4edc',
    'dependentFiles' => 
    array (
      0 => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/routes/web.php',
    ),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/PostController.php' => 
  array (
    'fileHash' => '4225075a0dc92335df91e61f2950d1ee5c5c11bb',
    'dependentFiles' => 
    array (
      0 => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/routes/web.php',
    ),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/ProfileController.php' => 
  array (
    'fileHash' => '539c03512c96efc8ba4502b61d5b4032966223a6',
    'dependentFiles' => 
    array (
      0 => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/routes/web.php',
    ),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/PublicProfileController.php' => 
  array (
    'fileHash' => '9e01b1610696830f661288f795269340058ead5e',
    'dependentFiles' => 
    array (
      0 => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/routes/web.php',
    ),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Requests/Auth/LoginRequest.php' => 
  array (
    'fileHash' => '52ec4b8a5bbd802539e609d80623c0134148f37f',
    'dependentFiles' => 
    array (
      0 => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/Auth/AuthenticatedSessionController.php',
    ),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Requests/PostCreateRequest.php' => 
  array (
    'fileHash' => '474450d10a88292b8bb496dbd7b21d27a6b966fe',
    'dependentFiles' => 
    array (
      0 => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/PostController.php',
    ),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Requests/PostUpdateRequest.php' => 
  array (
    'fileHash' => '13e32d1597b8e8f9d56eea50c9bb6f4e0f94b199',
    'dependentFiles' => 
    array (
      0 => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/PostController.php',
    ),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Requests/ProfileUpdateRequest.php' => 
  array (
    'fileHash' => '3ffaf27dff8e0be5507e8fc93e4bcb128b8c714d',
    'dependentFiles' => 
    array (
      0 => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/ProfileController.php',
    ),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Models/Category.php' => 
  array (
    'fileHash' => '5ae2c5435fbfe3f3a7197c56ec7053b7409a637d',
    'dependentFiles' => 
    array (
      0 => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/PostController.php',
      1 => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Models/Post.php',
      2 => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/View/Components/CategoryTabs.php',
      3 => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/database/factories/PostFactory.php',
      4 => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/database/seeders/DatabaseSeeder.php',
    ),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Models/Comment.php' => 
  array (
    'fileHash' => 'e0cf03274fc2fc51fb20b3fb94efe28cf30cc7c4',
    'dependentFiles' => 
    array (
      0 => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/CommentController.php',
      1 => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Models/Post.php',
    ),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Models/Follower.php' => 
  array (
    'fileHash' => '4fe6e7ced1645f599da772dfd97961aadc993e52',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Models/Like.php' => 
  array (
    'fileHash' => '48e41bba6f120f12939626661fe07a226777f941',
    'dependentFiles' => 
    array (
      0 => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Models/Post.php',
    ),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Models/Post.php' => 
  array (
    'fileHash' => '614c668d3ec687e9950a911268f514c200fe9915',
    'dependentFiles' => 
    array (
      0 => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/LikeController.php',
      1 => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/PostController.php',
      2 => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Models/Category.php',
      3 => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Models/Comment.php',
      4 => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Models/Like.php',
      5 => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Models/User.php',
      6 => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/database/factories/PostFactory.php',
      7 => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/database/seeders/PostSeeder.php',
    ),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Models/User.php' => 
  array (
    'fileHash' => '11248c9fa271972d9a95039473e8d8ef3ceb93aa',
    'dependentFiles' => 
    array (
      0 => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/Auth/ConfirmablePasswordController.php',
      1 => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/Auth/EmailVerificationNotificationController.php',
      2 => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/Auth/EmailVerificationPromptController.php',
      3 => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/Auth/NewPasswordController.php',
      4 => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/Auth/PasswordController.php',
      5 => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/Auth/RegisteredUserController.php',
      6 => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/Auth/VerifyEmailController.php',
      7 => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/FollowerController.php',
      8 => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/LikeController.php',
      9 => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/PostController.php',
      10 => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/ProfileController.php',
      11 => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/PublicProfileController.php',
      12 => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Requests/PostCreateRequest.php',
      13 => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Requests/PostUpdateRequest.php',
      14 => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Requests/ProfileUpdateRequest.php',
      15 => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Models/Comment.php',
      16 => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Models/Follower.php',
      17 => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Models/Like.php',
      18 => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Models/Post.php',
      19 => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Providers/TelescopeServiceProvider.php',
      20 => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/config/auth.php',
      21 => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/database/factories/PostFactory.php',
      22 => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/database/factories/UserFactory.php',
      23 => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/database/seeders/DatabaseSeeder.php',
      24 => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/AuthenticationTest.php',
      25 => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/EmailVerificationTest.php',
      26 => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/PasswordConfirmationTest.php',
      27 => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/PasswordResetTest.php',
      28 => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/PasswordUpdateTest.php',
      29 => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/ProfileTest.php',
    ),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Providers/AppServiceProvider.php' => 
  array (
    'fileHash' => '01bf9e5cf5bb666446625056b618445ae4749675',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Providers/TelescopeServiceProvider.php' => 
  array (
    'fileHash' => 'a8683a90f64a8c3bee4632530d40f3a0c002be84',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/View/Components/AppLayout.php' => 
  array (
    'fileHash' => '144a93db9d854f180991acb5474de1a699a1d85e',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/View/Components/CategoryTabs.php' => 
  array (
    'fileHash' => 'ed44be57879a858697a754f9b85ced4bf3546acd',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/View/Components/GuestLayout.php' => 
  array (
    'fileHash' => '18d31703058edf2f03018c5e3e257eb84aab4c3d',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/config/app.php' => 
  array (
    'fileHash' => '248b42420be2f4010a1597761cd348f374a5acd0',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/config/auth.php' => 
  array (
    'fileHash' => 'd14c6ca41850324dcf3bde4b8c4fe4635d21b02e',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/config/cache.php' => 
  array (
    'fileHash' => '740a310b2e153d013bba8733eef5a96d9ab38024',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/config/database.php' => 
  array (
    'fileHash' => 'd0fbc17721dc1efc622ac1380d72f7fe67d03f5a',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/config/filesystems.php' => 
  array (
    'fileHash' => '6e1e66753542ecbccfe730cfee0d623723be2986',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/config/logging.php' => 
  array (
    'fileHash' => 'f163e17e3d43b2aa18f20994b2d26c2ccabd5abc',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/config/mail.php' => 
  array (
    'fileHash' => '55990e37cb337eee513173e5c48479cbb1e5202e',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/config/queue.php' => 
  array (
    'fileHash' => '258c42a365b1b4bee36b69053966a3fd836a9394',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/config/services.php' => 
  array (
    'fileHash' => 'e5d2f1a1f6f4d2ebf16e796ab0ac542c572f43bf',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/config/session.php' => 
  array (
    'fileHash' => 'a131d62aba06ee4d064036ab24530211c2dd9a99',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/config/telescope.php' => 
  array (
    'fileHash' => 'e8fafbf86c27b9da63919e2061ab68ac665720e0',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/database/factories/PostFactory.php' => 
  array (
    'fileHash' => '12ae005f057ec0dbdd9f0a69861b7461fd8a83a8',
    'dependentFiles' => 
    array (
      0 => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/database/seeders/PostSeeder.php',
    ),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/database/factories/UserFactory.php' => 
  array (
    'fileHash' => '5f053a6ed39b90b33f1f759e0ec333479d40e5a5',
    'dependentFiles' => 
    array (
      0 => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Models/User.php',
      1 => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/database/seeders/DatabaseSeeder.php',
      2 => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/AuthenticationTest.php',
      3 => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/EmailVerificationTest.php',
      4 => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/PasswordConfirmationTest.php',
      5 => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/PasswordResetTest.php',
      6 => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/PasswordUpdateTest.php',
      7 => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/ProfileTest.php',
    ),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/database/seeders/DatabaseSeeder.php' => 
  array (
    'fileHash' => '92114302caed16c9be190f26e1e2026f7a15419c',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/database/seeders/PostSeeder.php' => 
  array (
    'fileHash' => '1fbc1c8e8f2796bd1bea42f83e605f8ddf7f7269',
    'dependentFiles' => 
    array (
      0 => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/database/seeders/DatabaseSeeder.php',
    ),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/routes/auth.php' => 
  array (
    'fileHash' => 'eb3ed6380065029a2b012488e018cbef472331b8',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/routes/console.php' => 
  array (
    'fileHash' => 'd5eca74147bf60b9d36b1786d312fc531ef65437',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/routes/web.php' => 
  array (
    'fileHash' => 'ffda4d96269fc41743f414587d98c6cfe18f2a35',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/AuthenticationTest.php' => 
  array (
    'fileHash' => '65ff268bda8ce89a85da664df7e2f0b5a0d5b17d',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/EmailVerificationTest.php' => 
  array (
    'fileHash' => '2c8bebdef01cb016c809e743acdff8d9368e7522',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/PasswordConfirmationTest.php' => 
  array (
    'fileHash' => '0fa9cf0865c1bd5cfd0f2be00093f8aa6b12509f',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/PasswordResetTest.php' => 
  array (
    'fileHash' => 'ca33b270b597054686684a315d031f1e25f7bce9',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/PasswordUpdateTest.php' => 
  array (
    'fileHash' => 'f3334ffa19b5ab4f3cebd02a597c75d5dbb1fa49',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/Auth/RegistrationTest.php' => 
  array (
    'fileHash' => '04a789163c1de6aab7ec7e368939e9ed3e477d41',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/ExampleTest.php' => 
  array (
    'fileHash' => '29d016ef9395c65d72901dde82eb43f16df04764',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Feature/ProfileTest.php' => 
  array (
    'fileHash' => '5f378108d8a2059a607de23c665f4a42a84de345',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Pest.php' => 
  array (
    'fileHash' => 'fc47d48dd79f29377ceb63e4fbd8fed798667105',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/TestCase.php' => 
  array (
    'fileHash' => '5f6caea662bb5a5fc2e674f9cffcc9e5fff09a94',
    'dependentFiles' => 
    array (
      0 => '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Pest.php',
    ),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Unit/ExampleTest.php' => 
  array (
    'fileHash' => 'f6d938489793d83c24084962e31d194e181ac80f',
    'dependentFiles' => 
    array (
    ),
  ),
),
	'exportedNodesCallback' => static function (): array { return array (
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Console/Commands/CleanDuplicateRows.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Console\\Commands\\CleanDuplicateRows',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Console\\Command',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'signature',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'description',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'handle',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'displayPreview',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'duplicateGroups',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'processDuplicates',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'duplicateGroups',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Helpers/TimezoneHelper.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Helpers\\TimezoneHelper',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getTimeZone',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/Auth/AuthenticatedSessionController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Auth\\AuthenticatedSessionController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'create',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Display the login view.
     */',
             'namespace' => 'App\\Http\\Controllers\\Auth',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'loginrequest' => 'App\\Http\\Requests\\Auth\\LoginRequest',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'store',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Handle an incoming authentication request.
     */',
             'namespace' => 'App\\Http\\Controllers\\Auth',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'loginrequest' => 'App\\Http\\Requests\\Auth\\LoginRequest',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'App\\Http\\Requests\\Auth\\LoginRequest',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'destroy',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Destroy an authenticated session.
     */',
             'namespace' => 'App\\Http\\Controllers\\Auth',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'loginrequest' => 'App\\Http\\Requests\\Auth\\LoginRequest',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/Auth/ConfirmablePasswordController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Auth\\ConfirmablePasswordController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'show',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Show the confirm password view.
     */',
             'namespace' => 'App\\Http\\Controllers\\Auth',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'validationexception' => 'Illuminate\\Validation\\ValidationException',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'store',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Confirm the user\'s password.
     */',
             'namespace' => 'App\\Http\\Controllers\\Auth',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'validationexception' => 'Illuminate\\Validation\\ValidationException',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/Auth/EmailVerificationNotificationController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Auth\\EmailVerificationNotificationController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'store',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Send a new email verification notification.
     */',
             'namespace' => 'App\\Http\\Controllers\\Auth',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/Auth/EmailVerificationPromptController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Auth\\EmailVerificationPromptController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__invoke',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Display the email verification prompt.
     */',
             'namespace' => 'App\\Http\\Controllers\\Auth',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse|Illuminate\\View\\View',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/Auth/NewPasswordController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Auth\\NewPasswordController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'create',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Display the password reset view.
     */',
             'namespace' => 'App\\Http\\Controllers\\Auth',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'user' => 'App\\Models\\User',
              'passwordreset' => 'Illuminate\\Auth\\Events\\PasswordReset',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'hash' => 'Illuminate\\Support\\Facades\\Hash',
              'password' => 'Illuminate\\Support\\Facades\\Password',
              'str' => 'Illuminate\\Support\\Str',
              'rules' => 'Illuminate\\Validation\\Rules',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'store',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Handle an incoming new password request.
     *
     * @throws \\Illuminate\\Validation\\ValidationException
     */',
             'namespace' => 'App\\Http\\Controllers\\Auth',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'user' => 'App\\Models\\User',
              'passwordreset' => 'Illuminate\\Auth\\Events\\PasswordReset',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'hash' => 'Illuminate\\Support\\Facades\\Hash',
              'password' => 'Illuminate\\Support\\Facades\\Password',
              'str' => 'Illuminate\\Support\\Str',
              'rules' => 'Illuminate\\Validation\\Rules',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/Auth/PasswordController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Auth\\PasswordController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'update',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Update the user\'s password.
     */',
             'namespace' => 'App\\Http\\Controllers\\Auth',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'hash' => 'Illuminate\\Support\\Facades\\Hash',
              'password' => 'Illuminate\\Validation\\Rules\\Password',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/Auth/PasswordResetLinkController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Auth\\PasswordResetLinkController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'create',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Display the password reset link request view.
     */',
             'namespace' => 'App\\Http\\Controllers\\Auth',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'password' => 'Illuminate\\Support\\Facades\\Password',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'store',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Handle an incoming password reset link request.
     *
     * @throws \\Illuminate\\Validation\\ValidationException
     */',
             'namespace' => 'App\\Http\\Controllers\\Auth',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'password' => 'Illuminate\\Support\\Facades\\Password',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/Auth/RegisteredUserController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Auth\\RegisteredUserController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'create',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
   * Display the registration view.
   */',
             'namespace' => 'App\\Http\\Controllers\\Auth',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'user' => 'App\\Models\\User',
              'registered' => 'Illuminate\\Auth\\Events\\Registered',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'hash' => 'Illuminate\\Support\\Facades\\Hash',
              'rules' => 'Illuminate\\Validation\\Rules',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'store',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
   * Handle an incoming registration request.
   *
   * @throws \\Illuminate\\Validation\\ValidationException
   */',
             'namespace' => 'App\\Http\\Controllers\\Auth',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'user' => 'App\\Models\\User',
              'registered' => 'Illuminate\\Auth\\Events\\Registered',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'hash' => 'Illuminate\\Support\\Facades\\Hash',
              'rules' => 'Illuminate\\Validation\\Rules',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/Auth/VerifyEmailController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Auth\\VerifyEmailController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__invoke',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Mark the authenticated user\'s email address as verified.
     */',
             'namespace' => 'App\\Http\\Controllers\\Auth',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'verified' => 'Illuminate\\Auth\\Events\\Verified',
              'emailverificationrequest' => 'Illuminate\\Foundation\\Auth\\EmailVerificationRequest',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Foundation\\Auth\\EmailVerificationRequest',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/CommentController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\CommentController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'index',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'store',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'destroy',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'comment',
               'type' => 'App\\Models\\Comment',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/Controller.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Controller',
       'phpDoc' => NULL,
       'abstract' => true,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/FollowerController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\FollowerController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'followUnfollow',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\JsonResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'user',
               'type' => 'App\\Models\\User',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/LikeController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\LikeController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'like',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\JsonResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'post',
               'type' => 'App\\Models\\Post',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/PostController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\PostController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'index',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
   * Display a listing of the resource.
   */',
             'namespace' => 'App\\Http\\Controllers',
             'uses' => 
            array (
              'postcreaterequest' => 'App\\Http\\Requests\\PostCreateRequest',
              'postupdaterequest' => 'App\\Http\\Requests\\PostUpdateRequest',
              'category' => 'App\\Models\\Category',
              'post' => 'App\\Models\\Post',
              'carbon' => 'Carbon\\Carbon',
              'view' => 'Illuminate\\View\\View',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'categoryPosts',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'category',
               'type' => 'App\\Models\\Category',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'followingPosts',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'myPosts',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'show',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
   * Display the specified resource.
   */',
             'namespace' => 'App\\Http\\Controllers',
             'uses' => 
            array (
              'postcreaterequest' => 'App\\Http\\Requests\\PostCreateRequest',
              'postupdaterequest' => 'App\\Http\\Requests\\PostUpdateRequest',
              'category' => 'App\\Models\\Category',
              'post' => 'App\\Models\\Post',
              'carbon' => 'Carbon\\Carbon',
              'view' => 'Illuminate\\View\\View',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'username',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'post',
               'type' => 'App\\Models\\Post',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'create',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
   * Show the form for creating a new resource.
   */',
             'namespace' => 'App\\Http\\Controllers',
             'uses' => 
            array (
              'postcreaterequest' => 'App\\Http\\Requests\\PostCreateRequest',
              'postupdaterequest' => 'App\\Http\\Requests\\PostUpdateRequest',
              'category' => 'App\\Models\\Category',
              'post' => 'App\\Models\\Post',
              'carbon' => 'Carbon\\Carbon',
              'view' => 'Illuminate\\View\\View',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'store',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
   * Store a newly created resource in storage.
   */',
             'namespace' => 'App\\Http\\Controllers',
             'uses' => 
            array (
              'postcreaterequest' => 'App\\Http\\Requests\\PostCreateRequest',
              'postupdaterequest' => 'App\\Http\\Requests\\PostUpdateRequest',
              'category' => 'App\\Models\\Category',
              'post' => 'App\\Models\\Post',
              'carbon' => 'Carbon\\Carbon',
              'view' => 'Illuminate\\View\\View',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'App\\Http\\Requests\\PostCreateRequest',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'edit',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
   * Show the form for editing the specified resource.
   */',
             'namespace' => 'App\\Http\\Controllers',
             'uses' => 
            array (
              'postcreaterequest' => 'App\\Http\\Requests\\PostCreateRequest',
              'postupdaterequest' => 'App\\Http\\Requests\\PostUpdateRequest',
              'category' => 'App\\Models\\Category',
              'post' => 'App\\Models\\Post',
              'carbon' => 'Carbon\\Carbon',
              'view' => 'Illuminate\\View\\View',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'post',
               'type' => 'App\\Models\\Post',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        8 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'update',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
   * Update the specified resource in storage.
   */',
             'namespace' => 'App\\Http\\Controllers',
             'uses' => 
            array (
              'postcreaterequest' => 'App\\Http\\Requests\\PostCreateRequest',
              'postupdaterequest' => 'App\\Http\\Requests\\PostUpdateRequest',
              'category' => 'App\\Models\\Category',
              'post' => 'App\\Models\\Post',
              'carbon' => 'Carbon\\Carbon',
              'view' => 'Illuminate\\View\\View',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'App\\Http\\Requests\\PostUpdateRequest',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'post',
               'type' => 'App\\Models\\Post',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        9 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'destroy',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
   * Remove the specified resource from storage.
   */',
             'namespace' => 'App\\Http\\Controllers',
             'uses' => 
            array (
              'postcreaterequest' => 'App\\Http\\Requests\\PostCreateRequest',
              'postupdaterequest' => 'App\\Http\\Requests\\PostUpdateRequest',
              'category' => 'App\\Models\\Category',
              'post' => 'App\\Models\\Post',
              'carbon' => 'Carbon\\Carbon',
              'view' => 'Illuminate\\View\\View',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'post',
               'type' => 'App\\Models\\Post',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/ProfileController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\ProfileController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'edit',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
   * Display the user\'s profile form.
   */',
             'namespace' => 'App\\Http\\Controllers',
             'uses' => 
            array (
              'profileupdaterequest' => 'App\\Http\\Requests\\ProfileUpdateRequest',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'redirect' => 'Illuminate\\Support\\Facades\\Redirect',
              'view' => 'Illuminate\\View\\View',
              'timezonehelper' => 'App\\Helpers\\TimezoneHelper',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'update',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
   * Update the user\'s profile information.
   */',
             'namespace' => 'App\\Http\\Controllers',
             'uses' => 
            array (
              'profileupdaterequest' => 'App\\Http\\Requests\\ProfileUpdateRequest',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'redirect' => 'Illuminate\\Support\\Facades\\Redirect',
              'view' => 'Illuminate\\View\\View',
              'timezonehelper' => 'App\\Helpers\\TimezoneHelper',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'App\\Http\\Requests\\ProfileUpdateRequest',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'destroy',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
   * Delete the user\'s account.
   */',
             'namespace' => 'App\\Http\\Controllers',
             'uses' => 
            array (
              'profileupdaterequest' => 'App\\Http\\Requests\\ProfileUpdateRequest',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'redirect' => 'Illuminate\\Support\\Facades\\Redirect',
              'view' => 'Illuminate\\View\\View',
              'timezonehelper' => 'App\\Helpers\\TimezoneHelper',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Controllers/PublicProfileController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\PublicProfileController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'show',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'user',
               'type' => 'App\\Models\\User',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Requests/Auth/LoginRequest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Requests\\Auth\\LoginRequest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Http\\FormRequest',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'authorize',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Determine if the user is authorized to make this request.
     */',
             'namespace' => 'App\\Http\\Requests\\Auth',
             'uses' => 
            array (
              'lockout' => 'Illuminate\\Auth\\Events\\Lockout',
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'ratelimiter' => 'Illuminate\\Support\\Facades\\RateLimiter',
              'str' => 'Illuminate\\Support\\Str',
              'validationexception' => 'Illuminate\\Validation\\ValidationException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'rules',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \\Illuminate\\Contracts\\Validation\\ValidationRule|array<mixed>|string>
     */',
             'namespace' => 'App\\Http\\Requests\\Auth',
             'uses' => 
            array (
              'lockout' => 'Illuminate\\Auth\\Events\\Lockout',
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'ratelimiter' => 'Illuminate\\Support\\Facades\\RateLimiter',
              'str' => 'Illuminate\\Support\\Str',
              'validationexception' => 'Illuminate\\Validation\\ValidationException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'authenticate',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Attempt to authenticate the request\'s credentials.
     *
     * @throws \\Illuminate\\Validation\\ValidationException
     */',
             'namespace' => 'App\\Http\\Requests\\Auth',
             'uses' => 
            array (
              'lockout' => 'Illuminate\\Auth\\Events\\Lockout',
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'ratelimiter' => 'Illuminate\\Support\\Facades\\RateLimiter',
              'str' => 'Illuminate\\Support\\Str',
              'validationexception' => 'Illuminate\\Validation\\ValidationException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'ensureIsNotRateLimited',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Ensure the login request is not rate limited.
     *
     * @throws \\Illuminate\\Validation\\ValidationException
     */',
             'namespace' => 'App\\Http\\Requests\\Auth',
             'uses' => 
            array (
              'lockout' => 'Illuminate\\Auth\\Events\\Lockout',
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'ratelimiter' => 'Illuminate\\Support\\Facades\\RateLimiter',
              'str' => 'Illuminate\\Support\\Str',
              'validationexception' => 'Illuminate\\Validation\\ValidationException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'throttleKey',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the rate limiting throttle key for the request.
     */',
             'namespace' => 'App\\Http\\Requests\\Auth',
             'uses' => 
            array (
              'lockout' => 'Illuminate\\Auth\\Events\\Lockout',
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'ratelimiter' => 'Illuminate\\Support\\Facades\\RateLimiter',
              'str' => 'Illuminate\\Support\\Str',
              'validationexception' => 'Illuminate\\Validation\\ValidationException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Requests/PostCreateRequest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Requests\\PostCreateRequest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Http\\FormRequest',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'authorize',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
   * Determine if the user is authorized to make this request.
   */',
             'namespace' => 'App\\Http\\Requests',
             'uses' => 
            array (
              'carbon' => 'Carbon\\Carbon',
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'rules',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
   * Get the validation rules that apply to the request.
   *
   * @return array<string, \\Illuminate\\Contracts\\Validation\\ValidationRule|array<mixed>|string>
   */',
             'namespace' => 'App\\Http\\Requests',
             'uses' => 
            array (
              'carbon' => 'Carbon\\Carbon',
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'prepareForValidation',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'messages',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Requests/PostUpdateRequest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Requests\\PostUpdateRequest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Http\\FormRequest',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'authorize',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
   * Determine if the user is authorized to make this request.
   */',
             'namespace' => 'App\\Http\\Requests',
             'uses' => 
            array (
              'carbon' => 'Carbon\\Carbon',
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'rules',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
   * Get the validation rules that apply to the request.
   *
   * @return array<string, \\Illuminate\\Contracts\\Validation\\ValidationRule|array<mixed>|string>
   */',
             'namespace' => 'App\\Http\\Requests',
             'uses' => 
            array (
              'carbon' => 'Carbon\\Carbon',
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'prepareForValidation',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'messages',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Http/Requests/ProfileUpdateRequest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Requests\\ProfileUpdateRequest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Http\\FormRequest',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'rules',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
   * Get the validation rules that apply to the request.
   *
   * @return array<string, \\Illuminate\\Contracts\\Validation\\ValidationRule|array<mixed>|string>
   */',
             'namespace' => 'App\\Http\\Requests',
             'uses' => 
            array (
              'user' => 'App\\Models\\User',
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
              'rule' => 'Illuminate\\Validation\\Rule',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Models/Category.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\Category',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Model',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'posts',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'mixed',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Models/Comment.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\Comment',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Model',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'post',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'user',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Models/Follower.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\Follower',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Model',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'UPDATED_AT',
               'value' => 'null',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'user',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'follower',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Models/Like.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\Like',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Model',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'UPDATED_AT',
               'value' => 'null',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'post',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'user',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Models/Post.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\Post',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Model',
       'implements' => 
      array (
        0 => 'Spatie\\MediaLibrary\\HasMedia',
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
        1 => 'Spatie\\MediaLibrary\\InteractsWithMedia',
        2 => 'Spatie\\Sluggable\\HasSlug',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'casts',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'registerMediaConversions',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'media',
               'type' => '?Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'registerMediaCollections',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'imageUrl',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'conversionName',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getSlugOptions',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Spatie\\Sluggable\\SlugOptions',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'user',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'category',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        8 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'likes',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        9 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'comments',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        10 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'readTime',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'float|int',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'wordsPerMinute',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Models/User.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\User',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Auth\\User',
       'implements' => 
      array (
        0 => 'Illuminate\\Contracts\\Auth\\MustVerifyEmail',
        1 => 'Spatie\\MediaLibrary\\HasMedia',
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
        1 => 'Illuminate\\Notifications\\Notifiable',
        2 => 'Spatie\\MediaLibrary\\InteractsWithMedia',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
   * The attributes that are mass assignable.
   *
   * @var list<string>
   */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'mustverifyemail' => 'Illuminate\\Contracts\\Auth\\MustVerifyEmail',
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'authenticatable' => 'Illuminate\\Foundation\\Auth\\User',
              'notifiable' => 'Illuminate\\Notifications\\Notifiable',
              'str' => 'Illuminate\\Support\\Str',
              'hasmedia' => 'Spatie\\MediaLibrary\\HasMedia',
              'interactswithmedia' => 'Spatie\\MediaLibrary\\InteractsWithMedia',
              'media' => 'Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getDisplayUsernameAttribute',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'setUsernameAttribute',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'value',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'hidden',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
   * The attributes that should be hidden for serialization.
   *
   * @var list<string>
   */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'mustverifyemail' => 'Illuminate\\Contracts\\Auth\\MustVerifyEmail',
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'authenticatable' => 'Illuminate\\Foundation\\Auth\\User',
              'notifiable' => 'Illuminate\\Notifications\\Notifiable',
              'str' => 'Illuminate\\Support\\Str',
              'hasmedia' => 'Spatie\\MediaLibrary\\HasMedia',
              'interactswithmedia' => 'Spatie\\MediaLibrary\\InteractsWithMedia',
              'media' => 'Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'casts',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
   * Get the attributes that should be cast.
   *
   * @return array<string, string>
   */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'mustverifyemail' => 'Illuminate\\Contracts\\Auth\\MustVerifyEmail',
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'authenticatable' => 'Illuminate\\Foundation\\Auth\\User',
              'notifiable' => 'Illuminate\\Notifications\\Notifiable',
              'str' => 'Illuminate\\Support\\Str',
              'hasmedia' => 'Spatie\\MediaLibrary\\HasMedia',
              'interactswithmedia' => 'Spatie\\MediaLibrary\\InteractsWithMedia',
              'media' => 'Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'registerMediaConversions',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'media',
               'type' => '?Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'registerMediaCollection',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'imageUrl',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'conversionName',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        8 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'posts',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        9 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'following',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        10 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'followers',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        11 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'isFollowedBy',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'user',
               'type' => '?App\\Models\\User',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        12 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'hasLiked',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'post',
               'type' => 'App\\Models\\Post',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Providers/AppServiceProvider.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Providers\\AppServiceProvider',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Support\\ServiceProvider',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'register',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Register any application services.
     */',
             'namespace' => 'App\\Providers',
             'uses' => 
            array (
              'serviceprovider' => 'Illuminate\\Support\\ServiceProvider',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'boot',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Bootstrap any application services.
     */',
             'namespace' => 'App\\Providers',
             'uses' => 
            array (
              'serviceprovider' => 'Illuminate\\Support\\ServiceProvider',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/Providers/TelescopeServiceProvider.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Providers\\TelescopeServiceProvider',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Laravel\\Telescope\\TelescopeApplicationServiceProvider',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'register',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
   * Register any application services.
   */',
             'namespace' => 'App\\Providers',
             'uses' => 
            array (
              'gate' => 'Illuminate\\Support\\Facades\\Gate',
              'incomingentry' => 'Laravel\\Telescope\\IncomingEntry',
              'telescope' => 'Laravel\\Telescope\\Telescope',
              'telescopeapplicationserviceprovider' => 'Laravel\\Telescope\\TelescopeApplicationServiceProvider',
              'user' => 'App\\Models\\User',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'hideSensitiveRequestDetails',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
   * Prevent sensitive request details from being logged by Telescope.
   */',
             'namespace' => 'App\\Providers',
             'uses' => 
            array (
              'gate' => 'Illuminate\\Support\\Facades\\Gate',
              'incomingentry' => 'Laravel\\Telescope\\IncomingEntry',
              'telescope' => 'Laravel\\Telescope\\Telescope',
              'telescopeapplicationserviceprovider' => 'Laravel\\Telescope\\TelescopeApplicationServiceProvider',
              'user' => 'App\\Models\\User',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'gate',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
   * Register the Telescope gate.
   *
   * This gate determines who can access Telescope in non-local environments.
   */',
             'namespace' => 'App\\Providers',
             'uses' => 
            array (
              'gate' => 'Illuminate\\Support\\Facades\\Gate',
              'incomingentry' => 'Laravel\\Telescope\\IncomingEntry',
              'telescope' => 'Laravel\\Telescope\\Telescope',
              'telescopeapplicationserviceprovider' => 'Laravel\\Telescope\\TelescopeApplicationServiceProvider',
              'user' => 'App\\Models\\User',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/View/Components/AppLayout.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\View\\Components\\AppLayout',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\View\\Component',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'render',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
   * Get the view / contents that represents the component.
   */',
             'namespace' => 'App\\View\\Components',
             'uses' => 
            array (
              'component' => 'Illuminate\\View\\Component',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/View/Components/CategoryTabs.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\View\\Components\\CategoryTabs',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\View\\Component',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
   * Create a new component instance.
   */',
             'namespace' => 'App\\View\\Components',
             'uses' => 
            array (
              'category' => 'App\\Models\\Category',
              'closure' => 'Closure',
              'view' => 'Illuminate\\Contracts\\View\\View',
              'component' => 'Illuminate\\View\\Component',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'render',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
   * Get the view / contents that represent the component.
   */',
             'namespace' => 'App\\View\\Components',
             'uses' => 
            array (
              'category' => 'App\\Models\\Category',
              'closure' => 'Closure',
              'view' => 'Illuminate\\Contracts\\View\\View',
              'component' => 'Illuminate\\View\\Component',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Contracts\\View\\View|Closure|string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/app/View/Components/GuestLayout.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\View\\Components\\GuestLayout',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\View\\Component',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'render',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the view / contents that represents the component.
     */',
             'namespace' => 'App\\View\\Components',
             'uses' => 
            array (
              'component' => 'Illuminate\\View\\Component',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/database/factories/PostFactory.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Database\\Factories\\PostFactory',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'model',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'definition',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'configure',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Database\\Factories\\PostFactory',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'addMediaToPost',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'post',
               'type' => 'App\\Models\\Post',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/database/factories/UserFactory.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Database\\Factories\\UserFactory',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * @extends \\Illuminate\\Database\\Eloquent\\Factories\\Factory<\\App\\Models\\User>
 */',
         'namespace' => 'Database\\Factories',
         'uses' => 
        array (
          'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
          'hash' => 'Illuminate\\Support\\Facades\\Hash',
          'str' => 'Illuminate\\Support\\Str',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'password',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
   * The current password being used by the factory.
   */',
             'namespace' => 'Database\\Factories',
             'uses' => 
            array (
              'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
              'hash' => 'Illuminate\\Support\\Facades\\Hash',
              'str' => 'Illuminate\\Support\\Str',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => '?string',
           'public' => false,
           'private' => false,
           'static' => true,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'definition',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
   * Define the model\'s default state.
   *
   * @return array<string, mixed>
   */',
             'namespace' => 'Database\\Factories',
             'uses' => 
            array (
              'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
              'hash' => 'Illuminate\\Support\\Facades\\Hash',
              'str' => 'Illuminate\\Support\\Str',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'unverified',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
   * Indicate that the model\'s email address should be unverified.
   */',
             'namespace' => 'Database\\Factories',
             'uses' => 
            array (
              'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
              'hash' => 'Illuminate\\Support\\Facades\\Hash',
              'str' => 'Illuminate\\Support\\Str',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'static',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/database/seeders/DatabaseSeeder.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Database\\Seeders\\DatabaseSeeder',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Seeder',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'run',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
   * Seed the application\'s database.
   */',
             'namespace' => 'Database\\Seeders',
             'uses' => 
            array (
              'category' => 'App\\Models\\Category',
              'post' => 'App\\Models\\Post',
              'user' => 'App\\Models\\User',
              'seeder' => 'Illuminate\\Database\\Seeder',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/database/seeders/PostSeeder.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Database\\Seeders\\PostSeeder',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Seeder',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'run',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/Pest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedFunctionNode::__set_state(array(
       'name' => 'something',
       'phpDoc' => NULL,
       'byRef' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/ransu/Desktop/WebDev/Deploy-Improve/nsight-index/tests/TestCase.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Tests\\TestCase',
       'phpDoc' => NULL,
       'abstract' => true,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Testing\\TestCase',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
); },
];
