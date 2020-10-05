<?php

/** Configuration options */

// Base dir for other paths related to generated .md files 
$baseDir = __DIR__ . '/../docs/';
// Base dir for raw documentation (.html files downloaded from LispWorks)
$baseRawDir = __DIR__ . '/raw-html';

// This is where the sidebar contents will be written to
$sidebarDest = $baseDir . '_sidebar.md';

// What files will be parsed
// glob => destination pairs
$toGenerate = [
    'f_*.htm' => 'functions/',
    'm_*.htm' => 'macros/',
    's_*.htm' => 'operators/'
];

function listFiles($glob = '*')
{
    // We want to list all files starting with
    // an f (functions) or an m (macros)
    return glob(__DIR__ . '/raw-html/' . $glob);
}

/**
 * Parse documentation info from HTML
 * @param mixed $filePath 
 * @return array 
 */
function parseFile($filePath)
{
    /**
     * We need to get several infos from any symbol :
     * - The type (function, macro...)
     * - The name
     * - The syntax
     * - The description
     * - Arguments description
     * - Examples
     */

    $symbol = [];
    $fileContents = file_get_contents($filePath);

    // Load the page into a DOM explorer
    $html = new DOMDocument;
    $html->preserveWhiteSpace = false;
    libxml_use_internal_errors(true);
    $html->loadHTML($fileContents);
    libxml_use_internal_errors(false);
    $xpath = new DOMXPath($html);
    $paragraphs = $xpath->query('//p | //pre');

    // We get some info from the file name
    $fileName = basename($filePath);

    // Object type (function, macro...)
    switch (mb_strcut($fileName, 0, 1)) {
        case 'f':
            $symbol['Type'] = 'Function';
            break;
        case 'm':
            $symbol['Type'] = 'Macro';
            break;
        default:
            $symbol['Type'] = 'Other';
            break;
    }

    $symbol['fileName'] = mb_strcut($fileName, mb_strpos($fileName, '_') + 1, mb_strpos($fileName, '.') - mb_strpos($fileName, '_') - 1);

    // We get the common name from the HTML file too
    $symbol['commonName'] = '';
    foreach ($xpath->query('//a[@name]') as $commonNameLink) {
        $symbol['commonName'] .= $commonNameLink->textContent;
    }


    // Get all important sections
    $sections = ['Syntax:', 'Arguments and Values:', 'Description:', 'Examples:'];
    $breakAt = 'Affected By:';
    $currentSection = null;

    foreach ($paragraphs as $paragraph) {
        $textContent = $paragraph->textContent;
        if (in_array($textContent, $sections)) {
            $currentSection = rtrim($textContent, ':');
        } elseif (strpos($textContent, $breakAt) !== false) {
            break;
        } else {
            if (array_key_exists($currentSection, $symbol)) {
                $symbol[$currentSection] .= rtrim($textContent);
            } else {
                $symbol[$currentSection] = rtrim($textContent);
            }
        }
    }

    return $symbol;
}

/**
 * Generates markdown from an associative array representing a docpage
 * @param array $arr 
 * @return string 
 */
function markdownFromArray(array $arr)
{
    $markdown = "<!-- Generated on " . date('d/m/Y') . " by https://github.com/anto2oo/clhs-evolved -->";

    // Add title
    $markdown .= "\n\n# " . $arr['commonName'];

    // Add Syntax
    $markdown .= "\n\n### Syntax\n";
    foreach (explode("\n", $arr['Syntax']) as $syntaxLine) {
        if (!empty(trim($syntaxLine))) {
            $markdown .= "`" . trim($syntaxLine) . "`  \n";
        }
    }

    // Add Arguments and Values
    $markdown .= "\n\n### Arguments and Values\n";
    $chunks = array_chunk(preg_split('/(---|--|\n)/', ltrim($arr['Arguments and Values'])), 2);
    $arguments = array_combine(array_column($chunks, 0), array_column($chunks, 1));

    if ($arguments) {
        foreach ($arguments as $argument => $value) {
            $markdown .= "- **" . trim($argument) . "** : $value   \n";
        }
    }

    // Add Description
    $markdown .= "\n\n### Description\n";
    $markdown .= str_replace("\n", "  \n", ltrim($arr['Description'])) . "\n\n";

    // Add Examples
    $markdown .= "\n\n### Examples\n";
    if (isset($arr['Examples'])) {
        $markdown .= "```lisp \n" . ltrim($arr['Examples']) . "\n```\n";
    } else {
        $markdown .= "No example  \n";
    }

    return $markdown;
}

/**
 * Generates markdown files for every file in a given glob
 * @param mixed $glob 
 * @param mixed $destination 
 * @return void 
 */
function generate($glob, $destination)
{
    global $sidebarDest;

    // We also want to generate sidebar (alongside regular files)
    $sidebarAppend = '';
    // Add the category name (functions, macros...) to the sidebar
    $sidebarName = ucfirst(rtrim($destination, '/'));
    $sidebarAppend .= "- $sidebarName \n";

    // Destination folder (if it doesn't exist, create it)
    $realDestination = __DIR__ . '/../docs/' . $destination;
    if (!is_dir($realDestination)) {
        if (!mkdir($realDestination) && !is_dir($realDestination)) {
            throw new \RuntimeException(sprintf('Directory "%s" was not created', $realDestination));
        }
    }

    // Iterate over every (raw html) file
    foreach (listFiles($glob) as $file) {
        // Parse its content
        $parsed = parseFile($file);
        // Render it to markdown
        $markdown = markdownFromArray($parsed);
        // Add it to the sidebar
        $subHeaderName = $parsed['commonName'];
        $subHeaderLink = $destination . $parsed['fileName'];
        $sidebarAppend .= "    - [$subHeaderName]($subHeaderLink) \n";

        // Write parsed data to a markdown file
        file_put_contents($realDestination . $parsed['fileName'] . '.md', $markdown);
    }

    // Append data to the sidebar
    file_put_contents($sidebarDest, $sidebarAppend, FILE_APPEND);
}


// Reset the sidebar
file_put_contents($sidebarDest, "- [About](readme) \n");

// Generate files
foreach($toGenerate as $glob => $dest){
    generate($glob, $dest);
}
