<?php

namespace App\Http\Controllers;

use App\UseCases\PlayerUseCase;
use Illuminate\Http\Request;
use App\Http\Requests\CreatePlayer;
use App\Http\Requests\EditPlayer;

class CompetitionController extends Controller
{

    protected $Player;
    protected $countries;
    protected $request;

    public function __construct(PlayerUseCase $Player, Request $Request)
    {
        $this->player = $Player;
        $this->countries = $Player->allCountry();
        $this->request = $Request;
    }

    public function index()
    {
        $players = $this->player->allPlayer($this->request);
        $countries = $this->player->allCountry();
        return view('player/index', [
            'players' => $players,
            'countries' => $this->countries,
            'request' => $this->request,
        ]);
    }

    public function show(int $player_id)
    {
        $player = $this->player->findPlayer($player_id);
        return view('player/edit', [
            'player' => $player,
            'countries' => $this->countries,
            'request' => $this->request,
        ]);
    }

    public function year(int $player_id)
    {
        $player = $this->player->findPlayer($player_id);
        return view('player/edit', [
            'player' => $player,
            'countries' => $this->countries,
            'request' => $this->request,
        ]);
    }

    public function country(int $player_id)
    {
        $player = $this->player->findPlayer($player_id);
        return view('player/edit', [
            'player' => $player,
            'countries' => $this->countries,
            'request' => $this->request,
        ]);
    }
}
