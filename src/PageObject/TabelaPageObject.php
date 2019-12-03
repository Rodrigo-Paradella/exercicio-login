<?php

namespace Forseti\Bot\Login\PageObject;

use Forseti\Bot\Login\Parser\TabelaParser;
use Forseti\Bot\Login\PageObject\AbstractPageObejct;

class TabelaPageObject extends AbstractPageObject
{
    protected $usuario;
    protected $senha;

    public function getResposta()
    {
        return $this->client->request('GET', 'http://192.168.1.98:81/login');
    }

    public function postLogar()
    {
        return $this->client->request('POST', 'http://192.168.1.98:81/login',
            [
                'form_params' => [
                    '_token' => $this->getParser()->getToken() ,
                    'email' => $this->usuario ,
                    'password' => $this->senha
                ]
            ]
        );
    }
    public function getHtmlLogin()
    {
        return $this->getResposta()->getBody()->getContents();
    }


    public function getParser()
    {
        return new TabelaParser($this->getHtmlLogin());
    }
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;
        return $this;
    }
    public function setSenha($senha)
    {
        $this->senha = $senha;
        return $this;
    }

}