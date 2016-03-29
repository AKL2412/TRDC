<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
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

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/clients')) {
            // trc_client_homepage
            if (rtrim($pathinfo, '/') === '/clients') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'trc_client_homepage');
                }

                return array (  '_controller' => 'TRC\\ClientBundle\\Controller\\DefaultController::indexAction',  '_route' => 'trc_client_homepage',);
            }

            // trc_client_recherche
            if ($pathinfo === '/clients/recherche') {
                return array (  '_controller' => 'TRC\\ClientBundle\\Controller\\DefaultController::rechercheAction',  '_route' => 'trc_client_recherche',);
            }

            // trc_client_consulter
            if (preg_match('#^/clients/(?P<radical>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'trc_client_consulter')), array (  '_controller' => 'TRC\\ClientBundle\\Controller\\DefaultController::consulterAction',));
            }

            // trc_client_ajouter_comptes
            if (preg_match('#^/clients/(?P<radical>[^/]++)/comptes$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'trc_client_ajouter_comptes')), array (  '_controller' => 'TRC\\ClientBundle\\Controller\\DefaultController::ajouterCompteAction',));
            }

            // trc_client_modifier_comptes
            if (preg_match('#^/clients/(?P<radical>[^/]++)/comptes/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'trc_client_modifier_comptes')), array (  '_controller' => 'TRC\\ClientBundle\\Controller\\DefaultController::ajouterCompteAction',));
            }

            // trc_client_voir_rubrique
            if (preg_match('#^/clients/(?P<radical>[^/]++)/voir/(?P<rubrique>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'trc_client_voir_rubrique')), array (  '_controller' => 'TRC\\ClientBundle\\Controller\\DefaultController::voirrubriqueAction',));
            }

            // trc_client_identite
            if (preg_match('#^/clients/(?P<radical>[^/]++)/identite$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'trc_client_identite')), array (  '_controller' => 'TRC\\ClientBundle\\Controller\\MAJController::identiteAction',));
            }

            // trc_client_coordonnee
            if (preg_match('#^/clients/(?P<radical>[^/]++)/coordonnées$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'trc_client_coordonnee')), array (  '_controller' => 'TRC\\ClientBundle\\Controller\\MAJController::coordonneesAction',));
            }

            // trc_client_employeur
            if (preg_match('#^/clients/(?P<radical>[^/]++)/employeur$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'trc_client_employeur')), array (  '_controller' => 'TRC\\ClientBundle\\Controller\\MAJController::employeurAction',));
            }

            // trc_client_profession
            if (preg_match('#^/clients/(?P<radical>[^/]++)/profession$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'trc_client_profession')), array (  '_controller' => 'TRC\\ClientBundle\\Controller\\MAJController::professionAction',));
            }

            // trc_client_revenu
            if (preg_match('#^/clients/(?P<radical>[^/]++)/revenu$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'trc_client_revenu')), array (  '_controller' => 'TRC\\ClientBundle\\Controller\\MAJController::revenuAction',));
            }

            // trc_client_logement
            if (preg_match('#^/clients/(?P<radical>[^/]++)/logement$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'trc_client_logement')), array (  '_controller' => 'TRC\\ClientBundle\\Controller\\MAJController::logementAction',));
            }

            // trc_client_pac
            if (preg_match('#^/clients/(?P<radical>[^/]++)/pac$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'trc_client_pac')), array (  '_controller' => 'TRC\\ClientBundle\\Controller\\MAJController::pacAction',));
            }

        }

        if (0 === strpos($pathinfo, '/ddc')) {
            // trcddc_homepage
            if (rtrim($pathinfo, '/') === '/ddc') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'trcddc_homepage');
                }

                return array (  '_controller' => 'TRC\\DDCBundle\\Controller\\DefaultController::indexAction',  '_route' => 'trcddc_homepage',);
            }

            // trcddc_init
            if (preg_match('#^/ddc/(?P<code>[^/\\-]++)\\-(?P<type>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'trcddc_init')), array (  '_controller' => 'TRC\\DDCBundle\\Controller\\DefaultController::initAction',));
            }

            // trcddc_def_client
            if (preg_match('#^/ddc/(?P<rs>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'trcddc_def_client')), array (  '_controller' => 'TRC\\DDCBundle\\Controller\\DefaultController::defclientAction',));
            }

            // trcddc_ddc_edp
            if (0 === strpos($pathinfo, '/ddc/edp') && preg_match('#^/ddc/edp/(?P<rc>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'trcddc_ddc_edp')), array (  '_controller' => 'TRC\\DDCBundle\\Controller\\DocsController::edpAction',));
            }

            // trcddc_ddc_upload_file
            if (0 === strpos($pathinfo, '/ddc/upload-file') && preg_match('#^/ddc/upload\\-file/(?P<rc>[^/]++)/(?P<type>edp|doc)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'trcddc_ddc_upload_file')), array (  '_controller' => 'TRC\\DDCBundle\\Controller\\DocsController::uploadAction',));
            }

            // trcddc_consulter
            if (0 === strpos($pathinfo, '/ddc/consulter') && preg_match('#^/ddc/consulter/(?P<rc>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'trcddc_consulter')), array (  '_controller' => 'TRC\\DDCBundle\\Controller\\DefaultController::ddcvoirAction',));
            }

            // trcddc_decision_commentaire_ddc
            if (preg_match('#^/ddc/(?P<rc>[^/]++)/decision\\-commentaire/(?P<phase>[^/]++)/(?P<etat>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'trcddc_decision_commentaire_ddc')), array (  '_controller' => 'TRC\\DDCBundle\\Controller\\DefaultController::decisionCommentaireAction',));
            }

            // trcddc_ajout_docs
            if (preg_match('#^/ddc/(?P<rs>[^/]++)/documents\\-joints\\-au\\-dossier$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'trcddc_ajout_docs')), array (  '_controller' => 'TRC\\DDCBundle\\Controller\\DocsController::ajoutAction',));
            }

            // trcddc_voir_docs
            if (preg_match('#^/ddc/(?P<rs>[^/]++)/voir\\-documents$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'trcddc_voir_docs')), array (  '_controller' => 'TRC\\DDCBundle\\Controller\\DocsController::voirAction',));
            }

            // trcddc_terminer_phase_etat_ddc
            if (preg_match('#^/ddc/(?P<rc>[^/]++)/terminer/(?P<etape>[^/]++)/(?P<codeEtape>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'trcddc_terminer_phase_etat_ddc')), array (  '_controller' => 'TRC\\DDCBundle\\Controller\\DocsController::terminerEtapeAction',));
            }

            // trcddc_get_client_ajax
            if ($pathinfo === '/ddc/client/ajax') {
                return array (  '_controller' => 'TRC\\DDCBundle\\Controller\\DefaultController::getajaxclientAction',  '_route' => 'trcddc_get_client_ajax',);
            }

        }

        if (0 === strpos($pathinfo, '/admin')) {
            // trc_admin_homepage
            if ($pathinfo === '/admin') {
                return array (  '_controller' => 'TRC\\AdminBundle\\Controller\\DefaultController::indexAction',  '_route' => 'trc_admin_homepage',);
            }

            if (0 === strpos($pathinfo, '/admin/utilisateur')) {
                if (0 === strpos($pathinfo, '/admin/utilisateurs')) {
                    // trc_admin_utilisateurs
                    if ($pathinfo === '/admin/utilisateurs') {
                        return array (  '_controller' => 'TRC\\AdminBundle\\Controller\\UtilisateursController::utilisateursAction',  '_route' => 'trc_admin_utilisateurs',);
                    }

                    // trc_admin_utilisateurs_ajouter
                    if ($pathinfo === '/admin/utilisateurs/ajouter') {
                        return array (  '_controller' => 'TRC\\AdminBundle\\Controller\\UtilisateursController::utilisateursAjouterAction',  '_route' => 'trc_admin_utilisateurs_ajouter',);
                    }

                }

                // trc_admin_utilisateurs_voir
                if (preg_match('#^/admin/utilisateur/(?P<matricule>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'trc_admin_utilisateurs_voir')), array (  '_controller' => 'TRC\\AdminBundle\\Controller\\UtilisateursController::utilisateursVoirAction',));
                }

                // trc_admin_utilisateurs_affectation_a_une_entite
                if (preg_match('#^/admin/utilisateur/(?P<matricule>[^/]++)/(?P<entite>Agence|CIC|BOC|Zone)/affectation$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'trc_admin_utilisateurs_affectation_a_une_entite')), array (  '_controller' => 'TRC\\AdminBundle\\Controller\\UtilisateursController::affectationAction',));
                }

                // trc_admin_affectation_de_profil_a_une_fonction
                if (preg_match('#^/admin/utilisateur/(?P<matricule>[^/]++)/(?P<entite>Agence|CIC|BOC|Zone)/affectation/(?P<idfonction>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'trc_admin_affectation_de_profil_a_une_fonction')), array (  '_controller' => 'TRC\\AdminBundle\\Controller\\UtilisateursController::affectationAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/entites')) {
                // trc_admin_entites
                if ($pathinfo === '/admin/entites') {
                    return array (  '_controller' => 'TRC\\AdminBundle\\Controller\\EntitesController::entitesAction',  '_route' => 'trc_admin_entites',);
                }

                // trc_admin_entites_ajouter
                if (0 === strpos($pathinfo, '/admin/entites/ajouter') && preg_match('#^/admin/entites/ajouter/(?P<entite>Agence|CIC|BOC|Zone)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'trc_admin_entites_ajouter')), array (  '_controller' => 'TRC\\AdminBundle\\Controller\\EntitesController::entitesAjoutAction',));
                }

                // trc_admin_entites_modifier
                if (0 === strpos($pathinfo, '/admin/entites/modifier') && preg_match('#^/admin/entites/modifier/(?P<entite>Agence|CIC|BOC|Zone)/(?P<matricule>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'trc_admin_entites_modifier')), array (  '_controller' => 'TRC\\AdminBundle\\Controller\\EntitesController::entitesAjoutAction',));
                }

                // trc_admin_entites_voir_une
                if (preg_match('#^/admin/entites/(?P<entite>Agence|CIC|BOC|Zone)/(?P<code>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'trc_admin_entites_voir_une')), array (  '_controller' => 'TRC\\AdminBundle\\Controller\\EntitesController::entitesVoirUneAction',));
                }

                // trc_admin_entites_par_categorie
                if (preg_match('#^/admin/entites/(?P<entite>Agence|CIC|BOC|Zone)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'trc_admin_entites_par_categorie')), array (  '_controller' => 'TRC\\AdminBundle\\Controller\\EntitesController::entitesParCategorieAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/profils')) {
                // trc_admin_profils
                if ($pathinfo === '/admin/profils') {
                    return array (  '_controller' => 'TRC\\AdminBundle\\Controller\\ProfilsController::ajouterAction',  '_route' => 'trc_admin_profils',);
                }

                // trc_admin_profils_voir
                if (preg_match('#^/admin/profils/(?P<matricule>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'trc_admin_profils_voir')), array (  '_controller' => 'TRC\\AdminBundle\\Controller\\ProfilsController::voirAction',));
                }

            }

            // trc_admin_systemes
            if ($pathinfo === '/admin/systemes') {
                return array (  '_controller' => 'TRC\\AdminBundle\\Controller\\SystemesController::systemesAction',  '_route' => 'trc_admin_systemes',);
            }

            if (0 === strpos($pathinfo, '/admin/crédits')) {
                // trc_admin_tdc
                if ($pathinfo === '/admin/crédits') {
                    return array (  '_controller' => 'TRC\\AdminBundle\\Controller\\CreditsController::creditsAction',  '_route' => 'trc_admin_tdc',);
                }

                // trc_admin_tdc_voir
                if (preg_match('#^/admin/crédits/(?P<code>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'trc_admin_tdc_voir')), array (  '_controller' => 'TRC\\AdminBundle\\Controller\\CreditsController::creditsvoirAction',));
                }

            }

        }

        // trc_core_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'trc_core_homepage');
            }

            return array (  '_controller' => 'TRC\\CoreBundle\\Controller\\DefaultController::indexAction',  '_route' => 'trc_core_homepage',);
        }

        // trc_core_error
        if ($pathinfo === '/erreur') {
            return array (  '_controller' => 'TRC\\CoreBundle\\Controller\\DefaultController::errorAction',  '_route' => 'trc_core_error',);
        }

        // trc_core_logout
        if ($pathinfo === '/deconnexion') {
            return array (  '_controller' => 'TRC\\CoreBundle\\Controller\\DefaultController::logoutAction',  '_route' => 'trc_core_logout',);
        }

        // trc_core_archiver
        if (0 === strpos($pathinfo, '/archivage') && preg_match('#^/archivage/(?P<classe>[^/]++)/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'trc_core_archiver')), array (  '_controller' => 'TRC\\CoreBundle\\Controller\\DefaultController::archiverAction',));
        }

        // trc_core_notification
        if (0 === strpos($pathinfo, '/notification') && preg_match('#^/notification/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'trc_core_notification')), array (  '_controller' => 'TRC\\CoreBundle\\Controller\\DefaultController::notificationAction',));
        }

        // trc_core_resume_ddc
        if (0 === strpos($pathinfo, '/resumeddc') && preg_match('#^/resumeddc/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'trc_core_resume_ddc')), array (  '_controller' => 'TRC\\CoreBundle\\Controller\\DefaultController::resumeAction',));
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
