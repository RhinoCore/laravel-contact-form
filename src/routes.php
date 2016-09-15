<?php

$router->post('contact', ['as' => 'contact.sendt', 'uses' => 'ContactFormController@send']);