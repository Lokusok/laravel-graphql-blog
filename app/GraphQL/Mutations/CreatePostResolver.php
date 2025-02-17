<?php declare(strict_types=1);

namespace App\GraphQL\Mutations;

use App\Models\Post;
use Illuminate\Support\Facades\Log;

final readonly class CreatePostResolver
{
    /** @param  array{}  $args */
    public function __invoke(null $_, array $args)
    {
        Log::info('Sending email');

        return Post::create([
            'user_id' => $args['user_id'],
            'title' => $args['title'],
            'body' => $args['body'],
        ]);
    }
}
