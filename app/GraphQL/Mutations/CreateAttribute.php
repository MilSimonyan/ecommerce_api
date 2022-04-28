<?php

namespace App\GraphQL\Mutations;

use App\Models\Attribute;

final class CreateAttribute
{
    /**
     * @param  null  $_
     * @param  array{}  $args
     */
    public function __invoke($_, array $args): Attribute
    {
        $attribute = new Attribute();

        $attribute->name  = $args['name'];
        $attribute->type  = $args['type'];

        $attribute->save();

        return $attribute;
    }
}
