<?php

return PhpCsFixer\Config::create()
    ->setUsingCache(true)
    ->setFinder(
        PhpCsFixer\Finder::create()
            ->in(__DIR__)
    );

