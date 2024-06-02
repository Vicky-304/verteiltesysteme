<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Validation\StrictRules\CreditCardRules;
use CodeIgniter\Validation\StrictRules\FileRules;
use CodeIgniter\Validation\StrictRules\FormatRules;
use CodeIgniter\Validation\StrictRules\Rules;

class Validation extends BaseConfig
{
    // --------------------------------------------------------------------
    // Setup
    // --------------------------------------------------------------------

    /**
     * Stores the classes that contain the
     * rules that are available.
     *
     * @var list<string>
     */
    public array $ruleSets = [
        Rules::class,
        FormatRules::class,
        FileRules::class,
        CreditCardRules::class,
    ];

    /**
     * Specifies the views that are used to display the
     * errors.
     *
     * @var array<string, string>
     */
    public array $templates = [
        'list' => 'CodeIgniter\Validation\Views\list',
        'single' => 'CodeIgniter\Validation\Views\single',
    ];

    // --------------------------------------------------------------------
    // Rules
    // --------------------------------------------------------------------

    public $produkt = [
        'preis' => 'required|numeric',
        'bestand' => 'required|numeric',
        'gewicht' => 'required|numeric',
        'gewicht_einheit' => 'required|in_list[ml,l,g,kg,mg,st]',
        'name' => 'required',
    ];
    public $produkt_fehler = [
        'preis' => [
            'required' => 'Der Preis muss angegeben werden',
            'numeric' => 'Der Preis muss eine Zahl sein',
        ],
        'bestand' => [
            'required' => 'Der Bestand muss angegeben werden',
            'numeric' => 'Der Bestand muss eine Zahl sein',
        ],
        'gewicht' => [
            'required' => 'Das Gewicht muss angegeben werden',
            'numeric' => 'Das Gewicht muss eine Zahl sein',
        ],
        'gewicht_einheit' => [
            'required' => 'Die Gewichtseinheit muss angegeben werden',
            'in_list' => 'Die Gewichtseinheit muss ml, l, g, kg, mg oder st sein',
        ],
        'name' => [
            'required' => 'Der Name muss angegeben werden',
        ],
    ];













}
