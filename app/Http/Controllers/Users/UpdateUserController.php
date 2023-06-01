<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Users\Requests\UpdateUserRequest;
use Illuminate\Http\JsonResponse;

class UpdateUserController extends BaseUserController
{
    public function __invoke(UpdateUserRequest $request, int $id): JsonResponse
    {
        $user = $this->getUserService()->find($id);
        $user = $this->getUserService()->update($user, $request->getDTO());

        return response()->json($user);
    }
}
