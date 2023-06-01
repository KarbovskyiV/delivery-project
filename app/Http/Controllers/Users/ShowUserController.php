<?php

namespace App\Http\Controllers\Users;

use Illuminate\Http\JsonResponse;

class ShowUserController extends BaseUserController
{
    public function __invoke(int $id): JsonResponse
    {
        $user = $this->getUserService()->find($id);

        return response()->json($user);
    }
}
