<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/utilisateur')) {
            // fos_user_security_login
            if ($pathinfo === '/utilisateur/connexion') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
            }

            // fos_user_security_check
            if ($pathinfo === '/utilisateur/verification-connexion') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
            }

            // fos_user_security_logout
            if ($pathinfo === '/utilisateur/deconnexion') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }

            // fos_user_change_password
            if ($pathinfo === '/utilisateur/profil/changement-mot-de-passe') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
            }

            if (0 === strpos($pathinfo, '/utilisateur/groupe')) {
                // fos_user_group_list
                if ($pathinfo === '/utilisateur/groupe/list') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\GroupController::listAction',  '_route' => 'fos_user_group_list',);
                }

                // fos_user_group_new
                if ($pathinfo === '/utilisateur/groupe/nouveau') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\GroupController::newAction',  '_route' => 'fos_user_group_new',);
                }

                // fos_user_group_show
                if (0 === strpos($pathinfo, '/utilisateur/groupe/voir') && preg_match('#^/utilisateur/groupe/voir/(?P<groupName>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_group_show')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\GroupController::showAction',));
                }

                // fos_user_group_edit
                if (0 === strpos($pathinfo, '/utilisateur/groupe/editer') && preg_match('#^/utilisateur/groupe/editer/(?P<groupName>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_group_edit')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\GroupController::editAction',));
                }

                // fos_user_group_delete
                if (0 === strpos($pathinfo, '/utilisateur/groupe/supprimer') && preg_match('#^/utilisateur/groupe/supprimer/(?P<groupName>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_group_delete')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\GroupController::deleteAction',));
                }

            }

            if (0 === strpos($pathinfo, '/utilisateur/profil')) {
                // fos_user_profile_edit
                if ($pathinfo === '/utilisateur/profil/editer') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
                }

                // fos_user_profile_show
                if ($pathinfo === '/utilisateur/profil/voir') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
                }

            }

            if (0 === strpos($pathinfo, '/utilisateur/inscription')) {
                // fos_user_registration_register
                if ($pathinfo === '/utilisateur/inscription') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }

                if (0 === strpos($pathinfo, '/utilisateur/inscription/v')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/utilisateur/inscription/verification-email') {
                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }

                    if (0 === strpos($pathinfo, '/utilisateur/inscription/valid')) {
                        // fos_user_registration_confirm
                        if ($pathinfo === '/utilisateur/inscription/validation') {
                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',  '_route' => 'fos_user_registration_confirm',);
                        }

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/utilisateur/inscription/valide') {
                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }

                    }

                }

            }

            if (0 === strpos($pathinfo, '/utilisateur/mot-de-pass-oublie')) {
                // fos_user_resetting_request
                if ($pathinfo === '/utilisateur/mot-de-pass-oublie/demande') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }

                // fos_user_resetting_send_email
                if ($pathinfo === '/utilisateur/mot-de-pass-oublie/envoi-email') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }

                // fos_user_resetting_check_email
                if ($pathinfo === '/utilisateur/mot-de-pass-oublie/verif-email') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }

                // fos_user_resetting_reset
                if ($pathinfo === '/utilisateur/mot-de-pass-oublie/modification') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',  '_route' => 'fos_user_resetting_reset',);
                }

            }

        }

        // croangels_esv_ecommerce_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'croangels_esv_ecommerce_homepage');
            }

            return array (  '_controller' => 'Croangels\\ESV\\EcommerceBundle\\Controller\\DefaultController::indexAction',  '_route' => 'croangels_esv_ecommerce_homepage',);
        }

        if (0 === strpos($pathinfo, '/ws/get')) {
            // croangels_esv_ecommerce_ws_get_products
            if (0 === strpos($pathinfo, '/ws/get/products') && preg_match('#^/ws/get/products(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'croangels_esv_ecommerce_ws_get_products')), array (  '_controller' => 'Croangels\\ESV\\EcommerceBundle\\Controller\\WebservicesController::getProductsAction',  '_format' => 'json',));
            }

            // croangels_esv_ecommerce_ws_get_categories
            if (0 === strpos($pathinfo, '/ws/get/categories') && preg_match('#^/ws/get/categories(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'croangels_esv_ecommerce_ws_get_categories')), array (  '_controller' => 'Croangels\\ESV\\EcommerceBundle\\Controller\\WebservicesController::getCategoriesAction',  '_format' => 'json',));
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
