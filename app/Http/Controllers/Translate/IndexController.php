<?php

namespace App\Http\Controllers\Translate;

use App\Http\Requests\CreateTranslationRequest;
use App\Translation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{


    public function index($appId, $moduleId, $languageId)
    {
        $items = Translation::where('appId', (int)$appId)
            ->where('moduleId', (int)$moduleId)
            ->where('languageId', (int)$languageId)
            ->get();

        return response()
            ->json($items);
    }


    public function createTranslate(CreateTranslationRequest $request)
    {
        $item = new Translation;
        $item->appId = (int)$request->input('appId');
        $item->moduleId = (int)$request->input('moduleId');
        $item->languageId = (int)$request->input('languageId');
        $item->title = $request->input('title');
        $item->save();

        return response()
            ->json(['status'=>true]);
    }
}
