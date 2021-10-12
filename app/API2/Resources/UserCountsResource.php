<?php

declare(strict_types=1);

namespace Meeting\Plus\API2\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserCountsResource extends JsonResource
{
    /**
     * The resource to array.
     *
     * @param  Request  $request
     *
     * @return array
     * @author Seven Du <shiweidu@outlook.com>
     */
    public function toArray($request)
    : array {
        // unused the $request.
        unset($request);

        return [
            'user' => [
                'following'           => $this['user-following'] ?? 0,
                'liked'               => $this['user-liked'] ?? 0,
                'commented'           => $this['user-commented'] ?? 0,
                'system'              => $this['user-system'] ?? 0,
                'news-comment-pinned' => $this['user-news-comment-pinned'] ?? 0,
                'feed-comment-pinned' => $this['user-feed-comment-pinned'] ?? 0,
                'mutual'              => $this['user-mutual'] ?? 0,
                'at'                  => $this['at'] ?? 0,
                'group-join-pinned'   => $this['user-group-join-pinned'] ?? 0,
                'post-pinned'         => $this['user-post-pinned'] ?? 0,
                'post-comment-pinned' => $this['user-post-comment-pinned'] ?? 0,
            ],
        ];
    }
}
