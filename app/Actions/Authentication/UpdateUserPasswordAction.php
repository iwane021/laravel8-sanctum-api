<?php

namespace App\Actions\Authentication;

use Lorisleiva\Actions\Concerns\AsAction;

class UpdateUserPasswordAction
{
    use AsAction;
    public string $commandSignature = 'user:update-password {user_id} {password}';
    public string $commandDescription = 'Updates the password a user.';

    public function handle(User $user, string $newPassword)
    {
        $user->password = Hash::make($newPassword);
        $user->save();
    }

    public function asCommand(Command $command)
    {
        dd($command);
        $user = User::findOrFail($command->argument('user_id'));

        $this->handle($user, $command->argument('password'));

        $command->line(sprintf('Password updated for %s.', $user->name));
    }

    public function asController(Request $request)
    {
        $this->handle(
            $request->user(),
            $request->get('password')
        );

        return redirect()->back();
    }
}
