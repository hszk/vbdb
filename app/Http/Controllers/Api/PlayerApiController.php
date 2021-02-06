<?php

namespace App\Http\Controllers\Api;

use App\UseCases\PlayerUseCase;
use Illuminate\Http\Request;

class PlayerApiController extends ApiController
{

    protected $Task;

    public function __construct(PlayerUseCase $Player)
    {
        $this->Player = $Player;
    }

    public function list()
    {
        $players = $this->Player->allPlayer();
        return response()->json([$players]);
    }

    public function find(int $player_id)
    {
        $player = $this->Player->findPlayer($player_id);
        return response()->json([$player]);
    }
}
