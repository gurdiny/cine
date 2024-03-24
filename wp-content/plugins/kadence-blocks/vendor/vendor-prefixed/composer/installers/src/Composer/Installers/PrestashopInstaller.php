<?php
/**
 * @license MIT
 *
 * Modified by kadencewp on 19-March-2024 using {@see https://github.com/BrianHenryIE/strauss}.
 */

namespace KadenceWP\KadenceBlocks\Composer\Installers;

class PrestashopInstaller extends BaseInstaller
{
    /** @var array<string, string> */
    protected $locations = array(
        'module' => 'modules/{$name}/',
        'theme'  => 'themes/{$name}/',
    );
}
