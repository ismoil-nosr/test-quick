<?php 

class UserEloquentRepository implements UserRepositoryInterface
{
    public function updateSettings(object $user, array $data): bool
    {
        //логика обновления
        return true;
    }
}