<?php

declare(strict_types=1);

namespace Meeting\Plus\Admin\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;
use Meeting\Plus\Support\Configuration;
use Meeting\Plus\Admin\Requests\UpdateImHelperUserRequest;

class ImHelperUserController extends Controller
{
    /**
     * Fetch im helper user id.
     *
     * @return \Illuminate\Http\JsonResponse
     * @author Seven Du <shiweidu@outlook.com>
     */
    public function fetch(): JsonResponse
    {
        return response()->json(['user' => config('im.helper-user')], 200);
    }

    /**
     * Update im helper user id.
     *
     * @param \Meeting\Plus\Admin\Requests\UpdateImHelperUserRequest $request
     * @param \Meeting\Plus\Support\Configuration $config
     * @return \Illuminate\Http\Response
     * @author Seven Du <shiweidu@outlook.com>
     */
    // public function update(UpdateImHelperUserRequest $request, Configuration $config): Response
    public function update(Request $request, Configuration $config): Response
    {
        $config->set('im.helper-user', $request->input('user', ''));

        return response('', 204);
    }
}
