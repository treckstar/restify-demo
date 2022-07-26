<p align="center"><img src="/public/logo.png"></p>

This is a demo project that mimic the [inertia CRM example](https://demo.inertiajs.com/) in [Restify](https://github.com/BinarCode/laravel-restify).

## Installation

You can install the package via composer:

Clone the project into a folder. For simplicity name your folder as `retify-demo` (the postman collection uses this as a host).

Install dependencies: 

```bash
composer install
```

Prepare a MySQL database named `restify_demo` and run the migration:

```sh
php artisan migrate --seed
```

Now you should be able to load the list of organizations: 

```http request
GET http://restify-demo.test/api/restify/organizations
```

And contacts:

```http request
GET http://restify-demo.test/api/restify/contacts
```

## Authenticate

The seeded user has the email and password: 

```json
{
    "email": "johndoe@example.com",
    "password": "secret!"
}
```

So you can login with this account in postman: 

```http request
POST http://restify-demo.test/api/restify/login
```

Now uncomment the config `retify.middleware` of `auth:sanctum` so you can use the authorization token to perform the profile request:

```http request
GET http://restify-demo.test/api/restify/profile
```

## Postman 

Download the [Postman collection here](/public/Restify_Demo.postman_collection.json). And configure the `{{host}}` to `http://restify-demo.test` into the collection.

## Learn more

Here is a quick video of how I started this repo [loom video](https://www.loom.com/share/efeef8bf88ac4247850d6c68ca4253b5).

If you are a visual learner, checkout [our video course](https://www.binarcode.com/learn/restify) for the Laravel Restify.

[Restify documentation](https://restify.binarcode.com/).

[My twitter](https://twitter.com/LupacescuEuard).

### Security

If you discover any security related issues, please email eduard.lupacescu@binarcode.com instead of using the issue tracker.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

