<?php

namespace App\Restify;

use App\Models\Organization;
use Binaryk\LaravelRestify\Fields\HasMany;
use Binaryk\LaravelRestify\Http\Requests\RestifyRequest;

class OrganizationRepository extends Repository
{
    public static string $model = Organization::class;

    public static array $search = [
        'name',
        'city',
        'phone',
    ];

    public static function related(): array
    {
        return [
            HasMany::make('contacts')
        ];
    }

    public function fields(RestifyRequest $request): array
    {
        return [
            id(),

            field('name'),

            field('email')->hideFromIndex(),

            field('city'),

            field('phone'),

            field('address')->hideFromIndex(),

            field('state')->hideFromIndex(),

            field('country')->hideFromIndex(),

            field('postal_code')->hideFromIndex(),
        ];
    }
}
