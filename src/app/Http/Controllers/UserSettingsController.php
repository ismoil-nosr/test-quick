<?php

namespace App\Http\Controllers;

use App\Factories\NotifyProviderFactory;
use App\Repositories\User\UserRepositoryInterface;
use Illuminate\Http\Request;

class UserSettingsController extends Controller
{
    public function requestConfirm(Request $request): array
    {
        // логика получения авториозванного пользователя
        $user = new class{}; 

        $notifyProvider = NotifyProviderFactory::create($request->input('method'));
        $notifyProvider->sendOTP($user);
        
        return ['message' => 'OTP code sent'];
    }

    public function confirm(Request $request, UserRepositoryInterface $userRepository): array
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