<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
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

        }

        // trc_core_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'trc_core_homepage');
            }

            return array (  '_controller' => 'TRC\\CoreBundle\\Controller\\DefaultController::indexAction',  '_route' => 'trc_core_homepage',);
        }

        // trc_core_logout
        if ($pathinfo === '/deconnexion') {
            return array (  '_controller' => 'TRC\\CoreBundle\\Controller\\DefaultController::logoutAction',  '_route' => 'trc_core_logout',);
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
