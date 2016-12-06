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

        if (0 === strpos($pathinfo, '/a')) {
            if (0 === strpos($pathinfo, '/admin')) {
                if (0 === strpos($pathinfo, '/admin/users')) {
                    // admin_users_list
                    if ($pathinfo === '/admin/users') {
                        return array (  '_controller' => 'AppBundle\\Controller\\Admin\\UserAdminController::indexAction',  '_route' => 'admin_users_list',);
                    }

                    // admin_users_new
                    if ($pathinfo === '/admin/users/new') {
                        return array (  '_controller' => 'AppBundle\\Controller\\Admin\\UserAdminController::addAction',  '_route' => 'admin_users_new',);
                    }

                    // admin_users_edit
                    if (preg_match('#^/admin/users/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_users_edit')), array (  '_controller' => 'AppBundle\\Controller\\Admin\\UserAdminController::editAction',));
                    }

                }

                // paneladmin_url
                if ($pathinfo === '/admin/panel') {
                    return array (  '_controller' => 'AppBundle\\Controller\\Admin\\UserAdminController::panelAction',  '_route' => 'paneladmin_url',);
                }

                if (0 === strpos($pathinfo, '/admin/userlist')) {
                    // userlist_url
                    if ($pathinfo === '/admin/userlist') {
                        return array (  '_controller' => 'AppBundle\\Controller\\Admin\\UserAdminController::showUserAction',  '_route' => 'userlist_url',);
                    }

                    // edit_user_url
                    if (preg_match('#^/admin/userlist/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit_user_url')), array (  '_controller' => 'AppBundle\\Controller\\Admin\\UserAdminController::editUserAction',));
                    }

                }

            }

            if (0 === strpos($pathinfo, '/articles')) {
                // articels_url
                if ($pathinfo === '/articles') {
                    return array (  '_controller' => 'AppBundle\\Controller\\BlogController::articleAction',  '_route' => 'articels_url',);
                }

                // read_article
                if (preg_match('#^/articles/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'read_article')), array (  '_controller' => 'AppBundle\\Controller\\BlogController::showArticleAction',));
                }

            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            // security_login
            if ($pathinfo === '/login') {
                return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::loginAction',  '_route' => 'security_login',);
            }

            // security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'security_logout',);
            }

        }

        // resetting_url
        if ($pathinfo === '/resetting') {
            return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::resettingAction',  '_route' => 'resetting_url',);
        }

        // projects_url
        if ($pathinfo === '/projects') {
            return array (  '_controller' => 'AppBundle\\Controller\\TransitController::projectsAction',  '_route' => 'projects_url',);
        }

        // services_url
        if ($pathinfo === '/services') {
            return array (  '_controller' => 'AppBundle\\Controller\\TransitController::servicesAction',  '_route' => 'services_url',);
        }

        if (0 === strpos($pathinfo, '/users')) {
            // users_url
            if ($pathinfo === '/users') {
                return array (  '_controller' => 'AppBundle\\Controller\\TransitController::usersAction',  '_route' => 'users_url',);
            }

            // user_show_url
            if (preg_match('#^/users/(?P<user_name>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_user_show_url;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_show_url')), array (  '_controller' => 'AppBundle\\Controller\\TransitController::ShowUserAction',));
            }
            not_user_show_url:

        }

        // contact_url
        if ($pathinfo === '/contact') {
            return array (  '_controller' => 'AppBundle\\Controller\\TransitController::contactAction',  '_route' => 'contact_url',);
        }

        // user_account
        if (0 === strpos($pathinfo, '/user_account') && preg_match('#^/user_account/(?P<email>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_user_account;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_account')), array (  '_controller' => 'AppBundle\\Controller\\UserAccount\\UserAccountController::UserAccountAction',));
        }
        not_user_account:

        // user_register
        if ($pathinfo === '/register') {
            return array (  '_controller' => 'AppBundle\\Controller\\UserController::registerAction',  '_route' => 'user_register',);
        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\MainController::homepageAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
