<?php

declare(strict_types=1);

namespace Meeting\Plus\API2\Controllers;

use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use SlimKit\PlusQuestion\Models\Answer;

class QAAnswerController extends Controller
{
    /**
     * Create the controller instance.
     */
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    /**
     * Destory a Q&A Answer.
     * @param SlimKit\PlusQuestion\Models\Answer $answer
     * @return mixed
     */
    public function destroy(Answer $answer)
    {
        $this->authorize('delete', $answer);

        // Database transaction
        DB::transaction(function () use ($answer) {
            $answer->question()->decrement('answers_count', 1);
            $answer->delete();
        });

        return new Response('', Response::HTTP_NO_CONTENT);
    }
}