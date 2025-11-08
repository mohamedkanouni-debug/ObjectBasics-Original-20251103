<?php
interface handle_function {
    public function handle($message);
}
class FileLogger implements handle_function {
 
    public function handle($message)
    {
        return 'Log to the file the message:' . $message;
    }
}

class DatabaseLogger extends FileLogger implements handle_function    {
 
    public function handle($message)
    {
        return "Log to the database the message:{$message}";
    }
}

class UserController {
    protected FileLogger $logger;

    public function __construct(FileLogger $logger)
    {
       $this->logger = $logger;
    }
    public function updateProfile()
    {
        // update the profile of a given user
        return $this->logger->handle(' Ali Ahmed has updated his profile.');
    }
}


$ctrl = new UserController(new FileLogger);

echo $ctrl->updateProfile() . PHP_EOL;
