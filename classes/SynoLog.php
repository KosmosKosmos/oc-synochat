<?php


    namespace KosmosKosmos\SynoChat\Classes;


    use Illuminate\Support\Facades\Log;
    use KosmosKosmos\SynoChat\Handler\SynologyChatHandler;
    use Monolog\Logger;

    class SynoLog {
        protected $logger;

        public function __construct($token, $url, $level = Logger::ERROR) {
            $this->logger = new Logger("custom");
            $this->logger->pushHandler(new SynologyChatHandler($token, $url, $level));
        }

        public function error($text) {
            return $this->logger->error($text);
        }
    }