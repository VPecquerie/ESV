<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

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

        if (0 === strpos($pathinfo, '/panier')) {
            // croangels_esv_ecommerce_add_to_panier
            if (0 === strpos($pathinfo, '/panier/add') && preg_match('#^/panier/add(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'croangels_esv_ecommerce_add_to_panier')), array (  '_controller' => 'Croangels\\ESV\\EcommerceBundle\\Controller\\PanierController::addAction',  '_format' => 'json',));
            }

            // croangels_esv_ecommerce_voir_panier
            if ($pathinfo === '/panier/voir') {
                return array (  '_controller' => 'Croangels\\ESV\\EcommerceBundle\\Controller\\PanierController::voirAction',  '_format' => 'json',  '_route' => 'croangels_esv_ecommerce_voir_panier',);
            }

        }

        if (0 === strpos($pathinfo, '/admin')) {
            // sonata_admin_redirect
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sonata_admin_redirect');
                }

                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'sonata_admin_dashboard',  'permanent' => 'true',  '_route' => 'sonata_admin_redirect',);
            }

            // sonata_admin_dashboard
            if ($pathinfo === '/admin/dashboard') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::dashboardAction',  '_route' => 'sonata_admin_dashboard',);
            }

            if (0 === strpos($pathinfo, '/admin/core')) {
                // sonata_admin_retrieve_form_element
                if ($pathinfo === '/admin/core/get-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:retrieveFormFieldElementAction',  '_route' => 'sonata_admin_retrieve_form_element',);
                }

                // sonata_admin_append_form_element
                if ($pathinfo === '/admin/core/append-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:appendFormFieldElementAction',  '_route' => 'sonata_admin_append_form_element',);
                }

                // sonata_admin_short_object_information
                if (0 === strpos($pathinfo, '/admin/core/get-short-object-description') && preg_match('#^/admin/core/get\\-short\\-object\\-description(?:\\.(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_admin_short_object_information')), array (  '_controller' => 'sonata.admin.controller.admin:getShortObjectDescriptionAction',  '_format' => 'html',));
                }

                // sonata_admin_set_object_field_value
                if ($pathinfo === '/admin/core/set-object-field-value') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:setObjectFieldValueAction',  '_route' => 'sonata_admin_set_object_field_value',);
                }

            }

            // sonata_admin_search
            if ($pathinfo === '/admin/search') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::searchAction',  '_route' => 'sonata_admin_search',);
            }

            // sonata_admin_retrieve_autocomplete_items
            if ($pathinfo === '/admin/core/get-autocomplete-items') {
                return array (  '_controller' => 'sonata.admin.controller.admin:retrieveAutocompleteItemsAction',  '_route' => 'sonata_admin_retrieve_autocomplete_items',);
            }

            if (0 === strpos($pathinfo, '/admin/esv/ecommerce')) {
                if (0 === strpos($pathinfo, '/admin/esv/ecommerce/article')) {
                    // admin_esv_ecommerce_article_list
                    if ($pathinfo === '/admin/esv/ecommerce/article/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.article',  '_sonata_name' => 'admin_esv_ecommerce_article_list',  '_route' => 'admin_esv_ecommerce_article_list',);
                    }

                    // admin_esv_ecommerce_article_create
                    if ($pathinfo === '/admin/esv/ecommerce/article/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.article',  '_sonata_name' => 'admin_esv_ecommerce_article_create',  '_route' => 'admin_esv_ecommerce_article_create',);
                    }

                    // admin_esv_ecommerce_article_batch
                    if ($pathinfo === '/admin/esv/ecommerce/article/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.article',  '_sonata_name' => 'admin_esv_ecommerce_article_batch',  '_route' => 'admin_esv_ecommerce_article_batch',);
                    }

                    // admin_esv_ecommerce_article_edit
                    if (preg_match('#^/admin/esv/ecommerce/article/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_esv_ecommerce_article_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.article',  '_sonata_name' => 'admin_esv_ecommerce_article_edit',));
                    }

                    // admin_esv_ecommerce_article_delete
                    if (preg_match('#^/admin/esv/ecommerce/article/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_esv_ecommerce_article_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.article',  '_sonata_name' => 'admin_esv_ecommerce_article_delete',));
                    }

                    // admin_esv_ecommerce_article_show
                    if (preg_match('#^/admin/esv/ecommerce/article/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_esv_ecommerce_article_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.article',  '_sonata_name' => 'admin_esv_ecommerce_article_show',));
                    }

                    // admin_esv_ecommerce_article_export
                    if ($pathinfo === '/admin/esv/ecommerce/article/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.article',  '_sonata_name' => 'admin_esv_ecommerce_article_export',  '_route' => 'admin_esv_ecommerce_article_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/esv/ecommerce/categorie')) {
                    // admin_esv_ecommerce_categorie_list
                    if ($pathinfo === '/admin/esv/ecommerce/categorie/list') {
                        return array (  '_controller' => 'Croangels\\ESV\\EcommerceBundle\\Controller\\CategorieAdminController::listAction',  '_sonata_admin' => 'croangels_esv_ecommerce.admin.categorie',  '_sonata_name' => 'admin_esv_ecommerce_categorie_list',  '_route' => 'admin_esv_ecommerce_categorie_list',);
                    }

                    // admin_esv_ecommerce_categorie_create
                    if ($pathinfo === '/admin/esv/ecommerce/categorie/create') {
                        return array (  '_controller' => 'Croangels\\ESV\\EcommerceBundle\\Controller\\CategorieAdminController::createAction',  '_sonata_admin' => 'croangels_esv_ecommerce.admin.categorie',  '_sonata_name' => 'admin_esv_ecommerce_categorie_create',  '_route' => 'admin_esv_ecommerce_categorie_create',);
                    }

                    // admin_esv_ecommerce_categorie_batch
                    if ($pathinfo === '/admin/esv/ecommerce/categorie/batch') {
                        return array (  '_controller' => 'Croangels\\ESV\\EcommerceBundle\\Controller\\CategorieAdminController::batchAction',  '_sonata_admin' => 'croangels_esv_ecommerce.admin.categorie',  '_sonata_name' => 'admin_esv_ecommerce_categorie_batch',  '_route' => 'admin_esv_ecommerce_categorie_batch',);
                    }

                    // admin_esv_ecommerce_categorie_edit
                    if (preg_match('#^/admin/esv/ecommerce/categorie/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_esv_ecommerce_categorie_edit')), array (  '_controller' => 'Croangels\\ESV\\EcommerceBundle\\Controller\\CategorieAdminController::editAction',  '_sonata_admin' => 'croangels_esv_ecommerce.admin.categorie',  '_sonata_name' => 'admin_esv_ecommerce_categorie_edit',));
                    }

                    // admin_esv_ecommerce_categorie_delete
                    if (preg_match('#^/admin/esv/ecommerce/categorie/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_esv_ecommerce_categorie_delete')), array (  '_controller' => 'Croangels\\ESV\\EcommerceBundle\\Controller\\CategorieAdminController::deleteAction',  '_sonata_admin' => 'croangels_esv_ecommerce.admin.categorie',  '_sonata_name' => 'admin_esv_ecommerce_categorie_delete',));
                    }

                    // admin_esv_ecommerce_categorie_show
                    if (preg_match('#^/admin/esv/ecommerce/categorie/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_esv_ecommerce_categorie_show')), array (  '_controller' => 'Croangels\\ESV\\EcommerceBundle\\Controller\\CategorieAdminController::showAction',  '_sonata_admin' => 'croangels_esv_ecommerce.admin.categorie',  '_sonata_name' => 'admin_esv_ecommerce_categorie_show',));
                    }

                    // admin_esv_ecommerce_categorie_export
                    if ($pathinfo === '/admin/esv/ecommerce/categorie/export') {
                        return array (  '_controller' => 'Croangels\\ESV\\EcommerceBundle\\Controller\\CategorieAdminController::exportAction',  '_sonata_admin' => 'croangels_esv_ecommerce.admin.categorie',  '_sonata_name' => 'admin_esv_ecommerce_categorie_export',  '_route' => 'admin_esv_ecommerce_categorie_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/esv/ecommerce/articlevignette')) {
                    // admin_esv_ecommerce_articlevignette_list
                    if ($pathinfo === '/admin/esv/ecommerce/articlevignette/list') {
                        return array (  '_controller' => 'Croangels\\ESV\\EcommerceBundle\\Controller\\ArticleVignetteAdminController::listAction',  '_sonata_admin' => 'croangels_esv_ecommerce.admin.article_vignette',  '_sonata_name' => 'admin_esv_ecommerce_articlevignette_list',  '_route' => 'admin_esv_ecommerce_articlevignette_list',);
                    }

                    // admin_esv_ecommerce_articlevignette_create
                    if ($pathinfo === '/admin/esv/ecommerce/articlevignette/create') {
                        return array (  '_controller' => 'Croangels\\ESV\\EcommerceBundle\\Controller\\ArticleVignetteAdminController::createAction',  '_sonata_admin' => 'croangels_esv_ecommerce.admin.article_vignette',  '_sonata_name' => 'admin_esv_ecommerce_articlevignette_create',  '_route' => 'admin_esv_ecommerce_articlevignette_create',);
                    }

                    // admin_esv_ecommerce_articlevignette_batch
                    if ($pathinfo === '/admin/esv/ecommerce/articlevignette/batch') {
                        return array (  '_controller' => 'Croangels\\ESV\\EcommerceBundle\\Controller\\ArticleVignetteAdminController::batchAction',  '_sonata_admin' => 'croangels_esv_ecommerce.admin.article_vignette',  '_sonata_name' => 'admin_esv_ecommerce_articlevignette_batch',  '_route' => 'admin_esv_ecommerce_articlevignette_batch',);
                    }

                    // admin_esv_ecommerce_articlevignette_edit
                    if (preg_match('#^/admin/esv/ecommerce/articlevignette/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_esv_ecommerce_articlevignette_edit')), array (  '_controller' => 'Croangels\\ESV\\EcommerceBundle\\Controller\\ArticleVignetteAdminController::editAction',  '_sonata_admin' => 'croangels_esv_ecommerce.admin.article_vignette',  '_sonata_name' => 'admin_esv_ecommerce_articlevignette_edit',));
                    }

                    // admin_esv_ecommerce_articlevignette_delete
                    if (preg_match('#^/admin/esv/ecommerce/articlevignette/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_esv_ecommerce_articlevignette_delete')), array (  '_controller' => 'Croangels\\ESV\\EcommerceBundle\\Controller\\ArticleVignetteAdminController::deleteAction',  '_sonata_admin' => 'croangels_esv_ecommerce.admin.article_vignette',  '_sonata_name' => 'admin_esv_ecommerce_articlevignette_delete',));
                    }

                    // admin_esv_ecommerce_articlevignette_show
                    if (preg_match('#^/admin/esv/ecommerce/articlevignette/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_esv_ecommerce_articlevignette_show')), array (  '_controller' => 'Croangels\\ESV\\EcommerceBundle\\Controller\\ArticleVignetteAdminController::showAction',  '_sonata_admin' => 'croangels_esv_ecommerce.admin.article_vignette',  '_sonata_name' => 'admin_esv_ecommerce_articlevignette_show',));
                    }

                    // admin_esv_ecommerce_articlevignette_export
                    if ($pathinfo === '/admin/esv/ecommerce/articlevignette/export') {
                        return array (  '_controller' => 'Croangels\\ESV\\EcommerceBundle\\Controller\\ArticleVignetteAdminController::exportAction',  '_sonata_admin' => 'croangels_esv_ecommerce.admin.article_vignette',  '_sonata_name' => 'admin_esv_ecommerce_articlevignette_export',  '_route' => 'admin_esv_ecommerce_articlevignette_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/esv/ecommerce/commande')) {
                    // admin_esv_ecommerce_commande_list
                    if ($pathinfo === '/admin/esv/ecommerce/commande/list') {
                        return array (  '_controller' => 'Croangels\\ESV\\EcommerceBundle\\Controller\\CommandeAdminController::listAction',  '_sonata_admin' => 'croangels_esv_ecommerce.admin.commande',  '_sonata_name' => 'admin_esv_ecommerce_commande_list',  '_route' => 'admin_esv_ecommerce_commande_list',);
                    }

                    // admin_esv_ecommerce_commande_create
                    if ($pathinfo === '/admin/esv/ecommerce/commande/create') {
                        return array (  '_controller' => 'Croangels\\ESV\\EcommerceBundle\\Controller\\CommandeAdminController::createAction',  '_sonata_admin' => 'croangels_esv_ecommerce.admin.commande',  '_sonata_name' => 'admin_esv_ecommerce_commande_create',  '_route' => 'admin_esv_ecommerce_commande_create',);
                    }

                    // admin_esv_ecommerce_commande_batch
                    if ($pathinfo === '/admin/esv/ecommerce/commande/batch') {
                        return array (  '_controller' => 'Croangels\\ESV\\EcommerceBundle\\Controller\\CommandeAdminController::batchAction',  '_sonata_admin' => 'croangels_esv_ecommerce.admin.commande',  '_sonata_name' => 'admin_esv_ecommerce_commande_batch',  '_route' => 'admin_esv_ecommerce_commande_batch',);
                    }

                    // admin_esv_ecommerce_commande_edit
                    if (preg_match('#^/admin/esv/ecommerce/commande/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_esv_ecommerce_commande_edit')), array (  '_controller' => 'Croangels\\ESV\\EcommerceBundle\\Controller\\CommandeAdminController::editAction',  '_sonata_admin' => 'croangels_esv_ecommerce.admin.commande',  '_sonata_name' => 'admin_esv_ecommerce_commande_edit',));
                    }

                    // admin_esv_ecommerce_commande_delete
                    if (preg_match('#^/admin/esv/ecommerce/commande/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_esv_ecommerce_commande_delete')), array (  '_controller' => 'Croangels\\ESV\\EcommerceBundle\\Controller\\CommandeAdminController::deleteAction',  '_sonata_admin' => 'croangels_esv_ecommerce.admin.commande',  '_sonata_name' => 'admin_esv_ecommerce_commande_delete',));
                    }

                    // admin_esv_ecommerce_commande_show
                    if (preg_match('#^/admin/esv/ecommerce/commande/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_esv_ecommerce_commande_show')), array (  '_controller' => 'Croangels\\ESV\\EcommerceBundle\\Controller\\CommandeAdminController::showAction',  '_sonata_admin' => 'croangels_esv_ecommerce.admin.commande',  '_sonata_name' => 'admin_esv_ecommerce_commande_show',));
                    }

                    // admin_esv_ecommerce_commande_export
                    if ($pathinfo === '/admin/esv/ecommerce/commande/export') {
                        return array (  '_controller' => 'Croangels\\ESV\\EcommerceBundle\\Controller\\CommandeAdminController::exportAction',  '_sonata_admin' => 'croangels_esv_ecommerce.admin.commande',  '_sonata_name' => 'admin_esv_ecommerce_commande_export',  '_route' => 'admin_esv_ecommerce_commande_export',);
                    }

                }

            }

        }

        // fos_js_routing_js
        if (0 === strpos($pathinfo, '/js/routing') && preg_match('#^/js/routing(?:\\.(?P<_format>js|json))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_js_routing_js')), array (  '_controller' => 'fos_js_routing.controller:indexAction',  '_format' => 'js',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
