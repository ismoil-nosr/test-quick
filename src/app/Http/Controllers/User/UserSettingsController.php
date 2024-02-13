<?php

namespace App\Http\Controllers\User;

use App\Factories\NotifyProviderFactory;
use App\Http\Controllers\Controller;
use App\Http\Requests\User\UserSettings\ConfirmRequest;
use App\Http\Requests\User\UserSettings\RequestConfirmRequest;
use App\Repositories\User\UserRepositoryInterface;

class UserSettingsController extends Controller
{
    public function requestConfirm(RequestConfirmRequest $request): array
    {
        // логика получения авториозванного пользователя
        $user = new class{}; 

        $notifyProvider = NotifyProviderFactory::create($request->input('method'));
        $notifyProvider->sendOTP($user);
        
        return ['message' => 'OTP code sent'];
    }

    public function confirm(ConfirmRequest $request, UserRepositoryInterface $userRepository): array
    {
        // логика получения авториозванного пользователя
        $user = new class{}; 
        
        $otp = $request->input('code');
        $notifyProvider = NotifyProviderFactory::create($request->input('method'));

        if ($notifyProvider->validateOTP($user, $otp)) {
            $userRepository->updateSettings($user,  $request->input('settings'));

            return ['message' => 'Settings updated successfully'];
        }

        return ['message' => 'Invalid OTP code'];
    }
}