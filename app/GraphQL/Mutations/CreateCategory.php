<?php

namespace App\GraphQL\Mutations;


use App\Models\Category;

use Illuminate\Validation\Factory;

final class CreateCategory
{
    protected $validator;
    public function __construct(
        Factory $validator
    ){
        $this->validator = $validator;
    }

    /**
     * @param null $_
     * @param array{} $args
     * @param $validator
     * @return Category
     */
    public function __invoke($_, array $args, $validator) : Category
    {
        $this->validator->validate($args, [
            'name' => 'required|min:3|max:50',
            'description' => 'required|max:255',
        ]);

        $category = new Category();
        $category->name = $args['name'];
        $category->description = $args['description'];
        $category->save();

        return $category;
    }
}
