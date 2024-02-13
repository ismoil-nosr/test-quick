<?php 

interface UserRepositoryInterface
{
    public function updateSettings(object $user, array $data): bool;
}