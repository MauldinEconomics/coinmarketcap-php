<?php

$finder = (new PhpCsFixer\Finder())
    ->in(__DIR__ . '/src/lib/')
;

return (new PhpCsFixer\Config())
    ->setRules([
        '@Symfony' => true,
        '@PHP73Migration' => true,
        'binary_operator_spaces' => [
            'default' => 'align_single_space_minimal',
            'operators' => [
                '='  => 'align_single_space_minimal',
                '=>' => 'align',
                '||' => 'align_single_space',
            ],
        ],
        'blank_line_before_statement' => [
            'statements' => [
                'for',
                'foreach',
                'if',
                'return',
                'try',
            ],
        ],
        'no_extra_blank_lines' => [
            'tokens' => [
                'extra',
                'parenthesis_brace_block',
                'square_brace_block',
                'use',
            ],
        ],
        'no_php4_constructor' => true,
        'ordered_class_elements' => [],
        'single_line_throw' => false,
    ])
    ->setRiskyAllowed(true)
    ->setFinder($finder)
;
