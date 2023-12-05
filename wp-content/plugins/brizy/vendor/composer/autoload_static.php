<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9b3fbcd0a50532c2d9af25b9e8f0539c
{
    public static $prefixLengthsPsr4 = array (
        'e' => 
        array (
            'enshrined\\svgSanitize\\' => 22,
        ),
        'S' => 
        array (
            'Symfony\\Component\\Dotenv\\' => 25,
        ),
        'B' => 
        array (
            'BrizyPlaceholders\\' => 18,
            'BrizyPlaceholdersTests\\' => 23,
            'BrizyMerge\\' => 11,
            'BrizyMergeTests\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'enshrined\\svgSanitize\\' => 
        array (
            0 => __DIR__ . '/..' . '/enshrined/svg-sanitize/src',
        ),
        'Symfony\\Component\\Dotenv\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/dotenv',
        ),
        'BrizyPlaceholders\\' => 
        array (
            0 => __DIR__ . '/..' . '/bagrinsergiu/content-placeholder/lib',
        ),
        'BrizyPlaceholdersTests\\' => 
        array (
            0 => __DIR__ . '/..' . '/bagrinsergiu/content-placeholder/tests',
        ),
        'BrizyMerge\\' => 
        array (
            0 => __DIR__ . '/..' . '/bagrinsergiu/brizy-merge-page-assets/lib',
        ),
        'BrizyMergeTests\\' => 
        array (
            0 => __DIR__ . '/..' . '/bagrinsergiu/brizy-merge-page-assets/tests',
        ),
    );

    public static $prefixesPsr0 = array (
        'G' => 
        array (
            'Gaufrette' => 
            array (
                0 => __DIR__ . '/..' . '/knplabs/gaufrette/src',
            ),
        ),
        'B' => 
        array (
            'Brizy' => 
            array (
                0 => __DIR__ . '/..' . '/bagrinsergiu/brizy-migration-utils/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'pQuery' => __DIR__ . '/..' . '/tburry/pquery/pQuery.php',
        'pQuery\\AspEmbeddedNode' => __DIR__ . '/..' . '/tburry/pquery/gan_node_html.php',
        'pQuery\\CSSQueryTokenizer' => __DIR__ . '/..' . '/tburry/pquery/gan_selector_html.php',
        'pQuery\\CdataNode' => __DIR__ . '/..' . '/tburry/pquery/gan_node_html.php',
        'pQuery\\CommentNode' => __DIR__ . '/..' . '/tburry/pquery/gan_node_html.php',
        'pQuery\\ConditionalTagNode' => __DIR__ . '/..' . '/tburry/pquery/gan_node_html.php',
        'pQuery\\DoctypeNode' => __DIR__ . '/..' . '/tburry/pquery/gan_node_html.php',
        'pQuery\\DomNode' => __DIR__ . '/..' . '/tburry/pquery/gan_node_html.php',
        'pQuery\\EmbeddedNode' => __DIR__ . '/..' . '/tburry/pquery/gan_node_html.php',
        'pQuery\\Html5Parser' => __DIR__ . '/..' . '/tburry/pquery/gan_parser_html.php',
        'pQuery\\HtmlFormatter' => __DIR__ . '/..' . '/tburry/pquery/gan_formatter.php',
        'pQuery\\HtmlParser' => __DIR__ . '/..' . '/tburry/pquery/gan_parser_html.php',
        'pQuery\\HtmlParserBase' => __DIR__ . '/..' . '/tburry/pquery/gan_parser_html.php',
        'pQuery\\HtmlSelector' => __DIR__ . '/..' . '/tburry/pquery/gan_selector_html.php',
        'pQuery\\IQuery' => __DIR__ . '/..' . '/tburry/pquery/IQuery.php',
        'pQuery\\TextNode' => __DIR__ . '/..' . '/tburry/pquery/gan_node_html.php',
        'pQuery\\TokenizerBase' => __DIR__ . '/..' . '/tburry/pquery/gan_tokenizer.php',
        'pQuery\\XML2ArrayParser' => __DIR__ . '/..' . '/tburry/pquery/gan_xml2array.php',
        'pQuery\\XmlNode' => __DIR__ . '/..' . '/tburry/pquery/gan_node_html.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9b3fbcd0a50532c2d9af25b9e8f0539c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9b3fbcd0a50532c2d9af25b9e8f0539c::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit9b3fbcd0a50532c2d9af25b9e8f0539c::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit9b3fbcd0a50532c2d9af25b9e8f0539c::$classMap;

        }, null, ClassLoader::class);
    }
}
