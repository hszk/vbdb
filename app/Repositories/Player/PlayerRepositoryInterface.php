<?php
namespace App\Repositories\Player;

interface PlayerRepositoryInterface
{
    public function allPlayer($search): object;
    public function allCountry(): object;
    public function findPlayer(int $player_id): object;
    public function createPlayer(array $data): object;
    public function updatePlayer(int $player_id, array $data): bool;
}
