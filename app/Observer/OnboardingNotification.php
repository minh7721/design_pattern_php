<?php

namespace App\Observer;
class OnboardingNotification implements SplObserver
{
    private $admin_email;

    public function __construct($admin_email)
    {
        $this->admin_email = $admin_email;
    }


    /**
     * @inheritDoc
     */
    public function update(SplSubject $repository, string $event = null, $data = null): void
    {
//         mail($this->adminEmail,
//             "Onboarding required",
//             "We have a new user. Here's his info: " .json_encode($data));

        echo "OnboardingNotification: The notification has been emailed!\n";
    }
}