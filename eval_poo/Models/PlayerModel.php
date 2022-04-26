<?php

namespace Models;

class PlayerModel extends Bdd
{
    protected $id;

    protected $email;

    protected $nickname;


    public function __construct()
    {
        $this->table = 'player';
    }

    /**
     * Obtenir la valeur de id
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Définir la valeur de id
     *
     * @param int $id
     * @return  self
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Obtenir la valeur de email
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * Définir la valeur de email
     *
     * @param string $email
     * @return  self
     */
    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Obtenir la valeur de nickname
     */
    public function getNickname(): string
    {
        return $this->nickname;
    }

    /**
     * Définir la valeur de nickname
     *
     * @param string $nickname
     * @return  self
     */

    public function setNickname(string $nickname): self
    {
        $this->nickname = $nickname;

        return $this;
    }


}