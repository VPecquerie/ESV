<?php

namespace Croangels\ESV\UtilisateurBundle\Command;

use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Croangels\ESV\UtilisateurBundle\Entity\Utilisateur;
use FOS\UserBundle\Command\CreateUserCommand as BaseCommand;

class CreateUserCommand extends BaseCommand
{
    /**
     * @see Command
     */
    protected function configure()
    {
        parent::configure();
        $this->setName('croangels:user:create')
             ->getDefinition()->addArguments
            (array
              (
                new InputArgument('nom', InputArgument::REQUIRED, 'le nom'),
                new InputArgument('prenom', InputArgument::REQUIRED, 'le prenom'),
                new InputArgument('sexe', InputArgument::REQUIRED, 'le sexe'),
                new InputArgument('dateNaissance', InputArgument::REQUIRED, 'la date de naissance'),
                new InputArgument('adrVille', InputArgument::REQUIRED, 'la ville'),
                new InputArgument('adrRue', InputArgument::REQUIRED, 'la rue'),
                new InputArgument('adrPays', InputArgument::REQUIRED, 'le pays '),
                new InputArgument('adrCodePostal', InputArgument::REQUIRED, 'le code postal'),

              )
            );
    }

    /**
     * @see Command
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $username         = $input->getArgument('username');
        $email            = $input->getArgument('email');
        $password         = $input->getArgument('password');
        $inactive         = $input->getOption('inactive');
        $superadmin       = $input->getOption('super-admin');
        // CUSTOM FIELDS
        $prenom           = $input->getArgument('prenom');
        $nom              = $input->getArgument('nom');
        $sexe             = $input->getArgument('sexe');
        $dateNaissance    = $input->getArgument('dateNaissance');
        $adrVille         = $input->getArgument('adrVille');
        $adrRue           = $input->getArgument('adrRue');
        $adrPays          = $input->getArgument('adrPays');
        $adrCodePostal    = $input->getArgument('adrCodePostal');

        /** @var \FOS\UserBundle\Model\UserManager $user_manager */
        $user_manager = $this->getContainer()->get('fos_user.user_manager');

        /** @var \Acme\AcmeUserBundle\Entity\User $user */
        $user = $user_manager->createUser();
        $user->setUsername($username);
        $user->setEmail($email);
        $user->setPlainPassword($password);
        $user->setEnabled((Boolean) !$inactive);
        $user->setSuperAdmin((Boolean) $superadmin);

        // CUSTOM FIELDS
        $user->setPrenom($prenom);
        $user->setNom($nom);
        $user->setSexe($sexe);
        $user->setDateNaissance($dateNaissance);

        $user->setAdrCodePostal($adrCodePostal);
        $user->setAdrPays($adrPays);
        $user->setAdrVille($adrVille);
        $user->setAdrRue($adrRue);

        $user_manager->updateUser($user);

        $output->writeln(sprintf('L\'utilisateur <comment>%s</comment> a ete cree ', $username));
    }

    /**
     * @see Command
     */
    protected function interact(InputInterface $input, OutputInterface $output)
    {
        parent::interact($input, $output);
        if (!$input->getArgument('nom'))
        {
            $nom = $this->getHelper('dialog')->askAndValidate
            (
              $output,
              'Veuillez renseigner le nom :',
              function($nom)
              {
                if (empty($nom))
                {
                  throw new \Exception('Le nom ne peut etre nul.');
                }
                return $nom;
              }
            );
            $input->setArgument('nom', $nom);
        }

        if (!$input->getArgument('prenom'))
        {
          $prenom = $this->getHelper('dialog')->askAndValidate
          (
            $output,
            'Veuillez renseigner le prenom :',
            function($prenom)
            {
              if (empty($prenom))
              {
                throw new \Exception('Le prenom ne peut etre nul.');
              }

              return $prenom;
            }
          );
          $input->setArgument('prenom', $prenom);
        }

        foreach(array("sexe", "dateNaissance", "adrVille", "adrRue", "adrPays", "adrCodePostal") as $elementOptionnel)
        {
          if (!$input->getArgument($elementOptionnel))
          {
            $input->setArgument($elementOptionnel, null);
          }
        }

    }
}
