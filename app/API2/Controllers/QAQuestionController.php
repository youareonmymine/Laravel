<?php

declare(strict_types=1);

namespace Meeting\Plus\API2\Controllers;

use Illuminate\Http\Response;
use SlimKit\PlusQuestion\Models\Question;

class QAQuestionController extends Controller
{
    /**
     * Create the controller instance.
     */
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    /**
     * Destory a Q&A question.
     * @param \SlimKit\PlusQuestion\Models\Question $question
     * @return mixed
     */
    public function destroy(Question $question)
    {
        $this->authorize('delete', $question);
        $question->delete();

        return new Response('', Response::HTTP_NO_CONTENT);
    }
}