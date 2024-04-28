<?php

Route::get('/films', function () {
    $films = Film::all();

    return response()->json($films);
});

Route::get('/films/{id}', function ($id) {
    $film = Film::find($id);

    if (!$film) {
        return response()->json(['error' => 'Film not found'], 404);
    }

    return response()->json($film);
});

Route::post('/films', function (Request $request) {
    $validator = Validator::make($request->all(), [
        'title' => 'required|string|max:255',
        'description' => 'nullable|string',
        'release_date' => 'nullable|date',
        'runtime' => 'nullable|integer',
        'director_id' => 'nullable|exists:directors,id',
    ]);

    if ($validator->fails()) {
        return response()->json($validator->errors(), 422);
    }

    $film = Film::create($request->all());

    return response()->json($film, 201);
});


Route::put('/films/{id}', function (Request $request, $id) {
    $film = Film::find($id);

    if (!$film) {
        return response()->json(['error' => 'Film not found'], 404);
    }

    $validator = Validator::make($request->all(), [
        'title' => 'required|string|max:255',
        'description' => 'nullable|string',
        'release_date' => 'nullable|date',
        'runtime' => 'nullable|integer',
        'director_id' => 'nullable|exists:directors,id',
    ]);

    if ($validator->fails()) {
        return response()->json($validator->errors(), 422);
    }

    $film->update($request->all());

    return response()->json($film);
});

Route::delete('/films/{id}', function ($id) {
    $film = Film::find($id);

    if (!$film) {
        return response()->json(['error' => 'Film not found'], 404);
    }

    $film->delete();

    return response()->json(null, 204);
});

