<?php

namespace Dcat\Admin\Scaffold;

trait ShowCreator
{
    /**
     * @param string $primaryKey
     * @param array  $fields
     *
     * @return string
     */
    protected function generateShow(string $primaryKey = null, array $fields = [], $timestamps = null)
    {
        $fields = $fields ?: request('fields', []);

        $rows = [];

        foreach ($fields as $k => $field) {
            if (empty($field['name'])) {
                continue;
            }

            $rows[] = "            \$show->field('{$field['name']}');";
        }

        return trim(implode("\n", $rows));
    }
}
