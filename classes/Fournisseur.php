<?php
class Fournisseur
{
    public function __construct(protected string $nom, protected string $adresse)
    {
    }

    public function getAdresse() : string
    {
        return $this->adresse;
    }

    public function getNom() : string
    {
        return $this->nom;
    }
}