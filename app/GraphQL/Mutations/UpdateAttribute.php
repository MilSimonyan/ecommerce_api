<?php

namespace App\GraphQL\Mutations;

use App\Models\Attribute;

final class UpdateAttribute
{
    /**
     * @param  null  $_
     * @param  array{}  $args
     */
    public function __invoke($_, array $args): Attribute
    {
        $attribute = Attribute::find($args['id']);
        if(isset($args['name'])){
            $attribute->name = $args['name'];
        }

        if(isset($args['type'])){
            $attribute->type = $args['type'];
        }

        $attribute->save();

        return $attribute;
    }
}
