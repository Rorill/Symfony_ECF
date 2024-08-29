<?php

namespace App\DataFixtures;

use App\Entity\Books;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class BooksFixture extends Fixture
{

    public const NAME= [
    "Lucien",
    "Jean",
    "Alphone",
    "Jonathan",
    "Nicolas",
    "Julie",
    ];
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
       foreach (self::NAME as $books) {
           $book = new Books();
           $book
               ->setTitle($books)
               ->setAuthor($this->getReference('author_' . rand(0, 2)))
               ->setDescritpion("ceci est un livre")
               ->setpublicationDate(new \DateTime('random'))
               ->setUser($this->getReference('user_' . rand(0, 2)));
           $manager->persist($book);

        // $manager->persist($product);

        $manager->flush();
    }

}}
