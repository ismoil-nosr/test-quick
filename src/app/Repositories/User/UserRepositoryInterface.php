<?php 

namespace App\Repositories\User;

interface UserRepositoryInterface
{
    public function updateSettings(object $user, array $data): bool;
}