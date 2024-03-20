<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\SkillsRequest;
use App\Http\Resources\SkillResource;
use App\Models\Skills;
use Illuminate\Http\Request;

class SkillsController extends Controller
{
    public function index()
    {
        return SkillResource::collection(Skills::all());
    }

    public function create(SkillsRequest $request)
    {
        return Skills::create($request->validated());
    }

    public function show(Skills $skill)
    {
        return new SkillResource($skill);
    }

    public function update(SkillsRequest $request, mixed $id)
    {
        return Skills::findOrFail($id)->update($request->validated());
    }

    public function destroy(mixed $id){
        $skills = Skills::findOrFail($id)->delete();
        return response()->json(["skills" => "Skills deleted successfully"]);
    }
}
