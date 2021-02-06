<?php

namespace App\UseCases;

use App\Repositories\Player\PlayerRepositoryInterface;

class PlayerUseCase
{
    protected $PlayerRepository;

    public function __construct(PlayerRepositoryInterface $PlayerRepository)
    {
        $this->PlayerRepository = $PlayerRepository;
    }

    /**
     * allPlayer
     *
     * @return object
     */
    public function allPlayer($request = []): object
    {
        // ビジネスロジックなど
        $search["player"] = $request->player ?? null;
        $search["country"] = $request->country ?? null;
        $search["sex"] = $request->sex ?? null;
        $search["pager"] = $request->pager ?? null;

        return $this->PlayerRepository->allPlayer($search);
    }

    /**
     * allContry
     *
     * @return object
     */
    public function allCountry(): object
    {
        // ビジネスロジックなど

        return $this->PlayerRepository->allCountry();
    }

    /**
     * find
     *
     * @param int $player_id
     * @return object
     */
    public function findPlayer(int $player_id): object
    {
        // ビジネスロジックなど

        return $this->PlayerRepository->findPlayer($player_id);
    }

    /**
     * createPlayer
     *
     * @param object $request
     * @return object
     */
    public function createPlayer(object $request): object
    {
        // ビジネスロジックなど
        $data['title'] = $request->title;
        $data['due_date'] = $request->due_date;

        return $this->PlayerRepository->createPlayer($data);
    }

    /**
     * update
     *
     * @param int $Player_id
     * @param object $request
     * @return bool
     */
    public function updatePlayer(int $player_id, object $request): bool
    {
        // ビジネスロジックなど
        $data['title'] = $request->title;
        $data['status'] = $request->status;
        $data['due_date'] = $request->due_date;

        return $this->PlayerRepository->updatePlayer($player_id, $data);
    }
}
