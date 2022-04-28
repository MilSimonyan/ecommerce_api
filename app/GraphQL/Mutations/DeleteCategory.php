<?php

namespace App\GraphQL\Mutations;

use App\Models\Category;

final class DeleteCategory
{
    /**
     * @param  null  $_
     * @param  array{}  $args
     */
    public function __invoke($_, array $args)
    {
        $category = Category::find($args['id']);
        $status = $category->delete();

        return [
           'status' => $status,
           'message' => 'Category Deleted!!'
        ];
    }
}
