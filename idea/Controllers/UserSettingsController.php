<?php

class UserSettingsController
{
    public function requestConfirm(array $data): array
    {
        // логика получения авториозванного пользователя
        $user = new class{}; 

        $notifyProvider = NotifyProviderFactory::create($data['method']);
        $notifyProvider->sendOTP($user);
        
        return ['message' => 'OTP code sent'];
    }

    public function confirm(array $data, UserRepositoryInterface $userRepository): array
    {
        // логика получения авториозванного пользователя
        $user = new class{}; 

        $otp = $data['code'];
        $notifyProvider = NotifyProviderFactory::create($data['method']);

        if ($notifyProvider->validateOTP($user, $otp)) {
            $userRepository->updateSettings($user, $data['settings']);

            return ['message' => 'Settings updated successfully'];
        }

        return ['message' => 'Invalid OTP code'];
    }
}