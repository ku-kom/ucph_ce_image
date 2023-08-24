<?php

/**
 * Icon Registry
 */

defined('TYPO3') || die();

return [
    // icon identifier
    'ucph_content_image_icon' => [
        'provider' => \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
        'source' => 'EXT:ucph_content_image/Resources/Public/Icons/Extension.svg',
    ],
];
