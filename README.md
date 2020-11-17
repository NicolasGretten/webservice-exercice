# HOPN.SPACE README

## Update current API from template
First, declare template into current template
```bash
git remote add template [URL of the template repo]
```

Then run git fetch to update the changes
```bash
git fetch --all
```

Then is possible to merge another branch from the new remote to the current one
```bash
git merge template/[branch to merge] [--allow-unrelated-histories]
```
## Documentation
[Official documentation](https://scribe.readthedocs.io/en/latest/documenting/index.html)

Documentation is accessible from endpoint / docs

Documentation generating
```bash
php artisan scribe:generate
```

## Database
### Create new table
```bash
php artisan make:migration create_[table_name]_table
```

### Run migrations
```bash
php artisan migrate --database=[database] [--path=database\migrations\[filename].php]]
```
### Seed data
[Official documentation](https://laravel.com/docs/7.x/seeding)
```
php artisan db:seed --class=[Class Name]
```

### Update columns
```bash
php artisan make:migration add_role_to_[table_name]_table --table=[table_name]
```
## Translations
[Official documentation](https://github.com/Astrotomic/laravel-translatable)

Get
```bash
$post = Post::first();
echo $post->translate('en')->title; // My first post

App::setLocale('en');
echo $post->title; // My first post

App::setLocale('de');
echo $post->title; // Mein erster Post
```

Post
```bash
$post = Post::first();
echo $post->translate('en')->title; // My first post

$post->translate('en')->title = 'My cool post';
$post->save();

$post = Post::first();
echo $post->translate('en')->title; // My cool post
```

## Create PUB/SUB
[Official documentation](https://github.com/amranidev/micro-bus)
```bash
Publisher::publish('user_created', $user);
```

Run queue pub/sub
```bash
php artisan queue:[listen,work] subscriber
```

## Queue
[Official documentation](https://lumen.laravel.com/docs/5.1/queues)
Run Queue
```bash
php artisan queue:listen --queue=[queue]
```
Delay
```bash
dispatch(new MyMailerJob)->delay(Carbon::now()->addMinutes(10));
```

## Misc
Return json from route with async param
```bash
return response()->json([$content], [code], ['async' => 'true']);
```
