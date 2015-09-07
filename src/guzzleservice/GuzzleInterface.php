<?php

namespace Guzzle;


interface GuzzleInterface {

    public function getReturnCode($uri);

    public function getReturnContent($uri);
}