<?php

declare(strict_types=1);

namespace wahibzakraoui\tamle;

use Donquixote\Cellbrush\Table\Table;
use Exception;
use Symfony\Component\Yaml\Yaml;

class Tamle
{
    /**
     * Create a new Skeleton Instance
     */
    public function __construct()
    {
        // constructor body
    }

    /**
     * Takes a YML file path and returns a PHP Array representation of the file
     * @param string $path
     * @return array
     */
    public function parseYamlToArray(string $path): array
    {
        $str = '';
        if (file_exists($path)) {
            $file = fopen($path, 'r');
            while (!feof($file)) {
                $str .= fgets($file);
            }
        }
        if (!empty($str)) {
            return Yaml::parse($str);
        }
        return [];
    }

    /**
     * @param array $array
     * @return string
     * @throws Exception
     */
    public function arrayToTable(array $array): string
    {
        if (is_array($array['table'])) {
            try {
                $table = Table::create()
                    ->addRowNames(['row0', 'row1', 'row2'])
                    ->addColNames(['col0', 'col1', 'col2'])
                    ->td('row0', 'col0', 'Diag 0')
                    ->td('row1', 'col1', 'Diag 1')
                    ->td('row2', 'col2', 'Diag 2');
                return $table->render();
            } catch (Exception $e) {
                die('Something wrong has happened @arrayToTable.');
            }
        }
        return '';
    }

}
