<?php 

namespace App\Repositories\Notify;

interface NotifyRepositoryInterface
{
    public function updateSettings(object $user, array $data): bool;
}