<?php

namespace Miroc\LaravelAdminer;

use Config;

/**
 * Autologin with current Laravel database credentials
 */
class AdminerAutologinController extends AdminerController
{
    public function index()
    {
        if (! isset($_GET['db'])) {
            $database_config = Config::get('database.default');

            $database_driver = Config::get("database.connections.$database_config.driver");
            if ($database_driver === 'mysql') {
                $database_driver = 'server';
            }

            $server = Config::get("database.connections.$database_config.host");

            if (empty($server)) {
                $server = Config::get("database.connections.$database_config.write.host");
            }

            $_POST['auth']['driver'] = $database_driver;
            $_POST['auth']['server'] = $server;
            $_POST['auth']['db'] = Config::get("database.connections.$database_config.database");
            $_POST['auth']['username'] = Config::get("database.connections.$database_config.username");
            $_POST['auth']['password'] = Config::get("database.connections.$database_config.password");
        }

        parent::index();
    }
}
