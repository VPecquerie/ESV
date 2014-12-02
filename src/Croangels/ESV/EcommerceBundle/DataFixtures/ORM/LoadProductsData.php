<?php
namespace Croangels\ESV\UtilisateurBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Croangels\ESV\EcommerceBundle\Entity\Commande;
use Croangels\ESV\EcommerceBundle\Entity\Categorie;
use Croangels\ESV\EcommerceBundle\Entity\LigneCommande;
use Croangels\ESV\EcommerceBundle\Entity\Article;
use Croangels\ESV\EcommerceBundle\Entity\ArticleVignette;

class LoadProductsData implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $racine = new Categorie();
        $racine ->setNom('Racine')
                ->setParent(null)
                ->setIcone(null)
                ->setDescription(null);
        $manager->persist($racine);

        $composants = new Categorie();
        $composants ->setNom('Composants')
                    ->setParent($racine)
                    ->setIcone('composants.png')
                    ->setDescription('Les composants de tout PC qui se respect !');
        $manager->persist($composants);

        $categoriesComposants = array
        (
          array
          (
            "nom"         => "CPU",
            "parent"      => $composants,
            "icone"       => "cpu.png",
            "description" => "Les processeurs sont des éléments indispensables d'un ordinateur moderne.",
          ),
          array
          (
            "nom"         => "RAM",
            "parent"      => $composants,
            "icone"       => "ram.png",
            "description" => "Les barrettes de mémoire RAM sont des éléments indispensables d'un ordinateur moderne.",
          ),
          array
          (
            "nom"         => "GPU",
            "parent"      => $composants,
            "icone"       => "gpu.png",
            "description" => "Les cartes graphiques sont des éléments indispensables d'un ordinateur moderne.",
          ),

        );



        foreach($categoriesComposants as $cat)
        {
          $composant[$cat['nom']] = new Categorie();
          $composant[$cat['nom']] ->setNom($cat['nom'])
                                  ->setParent($cat['parent'])
                                  ->setIcone($cat['icone'])
                                  ->setDescription($cat['description']);
          $manager->persist($composant[$cat['nom']]);
        }






        $articles = array
        (
          array
          (
            "libelle"           => "Intel Core i3",
            "descriptionCourte" => "Processeurs Intel Core i3",
            "descriptionLongue" => "Les processeurs Intel Core i3 sont les processeurs les plus performants à ce jour.",
            "tarif"             => 150,
            "ean"               => "123225541441",
            "categorie"         => "CPU",
            "vignettes"         => array
                                  (
                                    array
                                    (
                                      'title' => 'Logo Intel',
                                      'alt'   => 'Logo Intel',
                                      'src'   => 'categorie/CPU/Intel.png',
                                    ),
                                    array
                                    (
                                      'title' => 'Logo Intel Core i3',
                                      'alt'   => 'Logo Intel',
                                      'src'   => 'categorie/CPU/IntelCorei3.jpg',
                                    ),
                                  ),
          ),
          array
          (
            "libelle"           => "Intel Core i5",
            "descriptionCourte" => "Processeurs Intel Core i5",
            "descriptionLongue" => "Les processeurs Intel Core i5 sont les processeurs les plus performants à ce jour.",
            "tarif"             => 250,
            "ean"               => "123225541442",
            "categorie"         => "CPU",
            "vignettes"         => array
                                  (
                                    array
                                    (
                                      'title' => 'Logo Intel',
                                      'alt'   => 'Logo Intel',
                                      'src'   => 'categorie/CPU/Intel.png',
                                    ),
                                    array
                                    (
                                      'title' => 'Logo Intel Core i5',
                                      'alt'   => 'Logo Intel',
                                      'src'   => 'categorie/CPU/IntelCorei5.png',
                                    ),

                                  ),

          ),
          array
          (
            "libelle"           => "Intel Core i7",
            "descriptionCourte" => "Processeurs Intel Core i7",
            "descriptionLongue" => "Les processeurs Intel Core i7 sont les processeurs les plus performants à ce jour.",
            "tarif"             => 500,
            "ean"               => "123225541443",
            "categorie"         => "CPU",
            "vignettes"         => array
                                  (
                                    array
                                          (
                                            'title' => 'Logo Intel',
                                            'alt'   => 'Logo Intel',
                                            'src'   => 'categorie/CPU/Intel.png',
                                          ),
                                    array
                                          (
                                            'title' => 'Logo Intel Core i7',
                                            'alt'   => 'Logo Intel',
                                            'src'   => 'categorie/CPU/IntelCorei7.png',
                                          ),

                                  ),
          ),

          array
          (
            "libelle"           => "AMD FX 6350",
            "descriptionCourte" => "Processeurs AMD FX",
            "descriptionLongue" => "Les processeurs AMD FX sont les processeurs poccédant le meilleur rapport qualité/prix à ce jour.",
            "tarif"             => 120,
            "ean"               => "145225541443",
            "categorie"         => "CPU",
            "vignettes"         => array
            (
              array
              (
                'title' => 'Logo AMD',
                'alt'   => 'Logo AMD',
                'src'   => 'categorie/CPU/AMD.png',
              ),
              array
              (
                'title' => 'Logo AMD FX',
                'alt'   => 'Logo AMD FX',
                'src'   => 'categorie/CPU/AMD-FX.jpg',
              ),
              array
              (
                'title' => 'Logo AMD FX 6350',
                'alt'   => 'Logo AMD FX 6350',
                'src'   => 'categorie/CPU/AMD-FX-6350.jpg',
              ),
            ),
          ),
        );


        foreach($articles as $row)
        {
          $article = new Article();
          $article->setLibelle($row['libelle']);
          $article->setDescriptionCourte($row['descriptionCourte']);
          $article->setDescriptionLongue($row['descriptionLongue']);
          $article->setTarif($row['tarif']);
          $article->setEan($row['ean']);
          $article->setCategorie($composant[$row['categorie']]);
          $manager->persist($article);

          foreach($row['vignettes'] as $element)
          {
            $vignette = new ArticleVignette();
            $vignette ->setAlt($element['alt'])
                      ->setUrl($element['src'])
                      ->setTitle($element['title'])
                      ->setArticle($article);
            $manager->persist($vignette);
          }

        }

        $manager->flush();
    }
}
