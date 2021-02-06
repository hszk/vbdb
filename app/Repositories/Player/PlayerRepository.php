<?php

namespace App\Repositories\Player;

use App\Repositories\Player\PlayerRepositoryInterface;
use App\Models\Player;
use App\Models\Country;

class PlayerRepository implements PlayerRepositoryInterface
{
    /**
     * all
     *
     * @return object
     */
    public function allPlayer($search): object
    {
        $player = Player::select('players.*', 'players.name as player_name', 'countries.name as country_name')
                ->leftJoin('countries','players.country_id','=','countries.id');
        if($search["player"]){
            $player->where('players.name', 'LIKE', "%{$search["player"]}%");
        }
        if($search["country"]){
            $player->where('country_id', '=', $search["country"]);
        }
        if($search["sex"]){
            $player->where('sex', '=', $search["sex"]);
        }
        return $player->paginate($search["pager"]);
    }

    /**
     * all
     *
     * @return object
     */
    public function allCountry(): object
    {
        return Country::all();
    }

    /**
     * find
     *
     * @param int $player_id
     * @return object
     */
    public function findPlayer(int $player_id): object
    {
        return Player::find($player_id);
    }

    /**
     * create
     *
     * @param array $data
     * @return object
     */
    public function createPlayer(array $data): object
    {
        return Player::create($data);
    }

    /**
     * update
     *
     * @param int $player_id
     * @param array $data
     * @return bool
     */
    public function updatePlayer(int $player_id, array $data): bool
    {
        return Player::find($player_id)->fill($data)->save();
    }
}
