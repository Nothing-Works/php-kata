<?php

class Video
{
}

class User
{
    public function download(Video $video)
    {
        if (!$this->subscribed()) {
            // when to return 'false' vs throw exception.
            // if it's a reasonable behaviour then handle by yourself
            // otherwise throw it if something is exceptional.
            throw new Exception('You must be subscribed to download videos');
        }
    }

    public function subscribed()
    {
        return false;
    }
}

$user = new User();
$user->download(new Video());

class UserDownloadController
{
    public function show()
    {
        try {
            $user = new User();
            $user->download(new Video());
        } catch (Exception $e) {
            var_dump($e);
        }
    }
}
