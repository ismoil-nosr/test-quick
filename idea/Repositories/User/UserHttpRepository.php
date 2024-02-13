<?php 

class UserHttpRepository implements UserRepositoryInterface
{
    public function updateSettings(object $user, array $data): bool
    {
        //логика обновления
        return true;
    }
}