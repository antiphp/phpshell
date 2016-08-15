<?php
/**
 * config file
 */

return [
    "invokables" => [
        // zend view
        \Zend\View\Renderer\PhpRenderer::class => \Zend\View\Renderer\PhpRenderer::class,

        // session storage
        \AntiPhp\PhpShell\SessionStorage\SessionStorage::class => \AntiPhp\PhpShell\SessionStorage\SessionStorage::class,
        \AntiPhp\PhpShell\SessionStorage\Save::class => \AntiPhp\PhpShell\SessionStorage\Save::class,

        // php class
        \AntiPhp\PhpShell\Php\PhpClass\PhpClass::class => \AntiPhp\PhpShell\Php\PhpClass\PhpClass::class,
        \AntiPhp\PhpShell\Php\PhpClass\Create::class => \AntiPhp\PhpShell\Php\PhpClass\Create::class,

        // php namespace
        \AntiPhp\PhpShell\Php\PhpNamespace\PhpNamespace::class => \AntiPhp\PhpShell\Php\PhpNamespace\PhpNamespace::class,

    ],

    "aliases" => [
        // zend view
        \Zend\View\Renderer\RendererInterface::class => \Zend\View\Renderer\PhpRenderer::class,

        // session storage
        \AntiPhp\PhpShell\SessionStorage\SessionStorageInterface::class => \AntiPhp\PhpShell\SessionStorage\SessionStorage::class,
        \AntiPhp\PhpShell\SessionStorage\SaveInterface::class => \AntiPhp\PhpShell\SessionStorage\Save::class,

        // php class
        \AntiPhp\PhpShell\Php\PhpClass\PhpClassInterface::class => \AntiPhp\PhpShell\Php\PhpClass\PhpClass::class,
        \AntiPhp\PhpShell\Php\PhpClass\CreateInterface::class => \AntiPhp\PhpShell\Php\PhpClass\Create::class,

        // php namespace
        \AntiPhp\PhpShell\Php\PhpNamespace\PhpNamespaceInterface::class => \AntiPhp\PhpShell\Php\PhpNamespace\PhpNamespace::class,
    ],

    "initializers" => [
        \AntiPhp\PhpShell\ServiceManager\Initializer::class,
        \AntiPhp\PhpShell\SessionStorage\Initializer::class
    ]
];

