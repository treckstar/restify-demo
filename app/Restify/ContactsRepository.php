<?php

namespace App\Restify;

use App\Models\Contact;
use Binaryk\LaravelRestify\Fields\BelongsTo;
use Binaryk\LaravelRestify\Http\Requests\RestifyRequest;

class ContactsRepository extends Repository
{
    public static string $model = Contact::class;

    public static array $search = [
        'name',
        'city',
        'phone',
    ];

    public static function related(): array
    {
        return [
            BelongsTo::make('organization', OrganizationRepository::class)->searchable('name'),
        ];
    }

    public function fields(RestifyRequest $request): array
    {
        return [
            id(),

            field('organization_id')->rules('required', 'exists:organizations,id'),

            field('name')->readonly(),

            field('email')->hideFromIndex(),

            field('first_name')
                ->required()
                ->hideFromIndex(),

            field('last_name')
                ->required()
                ->hideFromIndex(),

            field('city'),

            field('phone'),

            field('address')->hideFromIndex(),

            field('state')->hideFromIndex(),

            field('country')->hideFromIndex(),

            field('postal_code')->hideFromIndex(),
        ];
    }
}
