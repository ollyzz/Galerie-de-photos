<?php

class Client
{
    protected array $fournisseur = [];

    public function __construct(protected string $nom)
    {
    }

    public function getNom(): string
    {
        return $this->nom;
    }

    public function addFournisseur(Fournisseur $fournisseur)
    {
        $this->fournisseur[] = $fournisseur;
    }

    public function fiche()
    {
        $fiche = "\t$this->nom\n";
        foreach ($this->fournisseur as $fournisseur) {
            $fiche .= "\t\t{$fournisseur->getNom()} ({$fournisseur->getAdresse()})\n";
        }
        return $fiche;
    }
}