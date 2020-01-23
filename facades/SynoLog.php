<?php


    namespace KosmosKosmos\SynoChat\Facades;


    use Illuminate\Support\Facades\Facade;

    class SynoLog extends Facade {

        protected static function getFacadeAccessor() {
            return 'synolog';
        }
    }