<?php

$router->post('contact', ['as' => 'contact.send', 'uses' => 'ContactFormController@send']);