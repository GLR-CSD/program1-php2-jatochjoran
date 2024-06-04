<?php
declare(strict_types=1);
class Album
{
private ?int $id;

private string $naam;

private string $artiesten;

private string $release_datum;

private string $url;

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getNaam(): string
    {
        return $this->naam;
    }

    /**
     * @param string $naam
     */
    public function setNaam(string $naam): void
    {
        $this->naam = $naam;
    }

    /**
     * @return string
     */
    public function getArtiesten(): string
    {
        return $this->artiesten;
    }

    /**
     * @param string $artiesten
     */
    public function setArtiesten(string $artiesten): void
    {
        $this->artiesten = $artiesten;
    }

    /**
     * @return string
     */
    public function getReleaseDatum(): string
    {
        return $this->release_datum;
    }

    /**
     * @param string $release_datum
     */
    public function setReleaseDatum(string $release_datum): void
    {
        $this->release_datum = $release_datum;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @param string $url
     */
    public function setUrl(string $url): void
    {
        $this->url = $url;
    }

    /**
     * @return string
     */
    public function getAfbeelding(): string
    {
        return $this->afbeelding;
    }

    /**
     * @param string $afbeelding
     */
    public function setAfbeelding(string $afbeelding): void
    {
        $this->afbeelding = $afbeelding;
    }

    /**
     * @return string
     */
    public function getPrijs(): string
    {
        return $this->prijs;
    }

    /**
     * @param string $prijs
     */
    public function setPrijs(string $prijs): void
    {
        $this->prijs = $prijs;
    }

private string $afbeelding;

private string $prijs;
}

