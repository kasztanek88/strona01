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

        if (0 === strpos($pathinfo, '/user_account')) {
            // user_account
            if (0 === strpos($pathinfo, '/user_account/user') && preg_match('#^/user_account/user/(?P<email>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_user_account;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_account')), array (  '_controller' => 'AppBundle\\Controller\\UserAccount\\UserAccountController::UserAccountAction',));
            }
            not_user_account:

            if (0 === strpos($pathinfo, '/user_account/articles')) {
                // user_articles
                if ($pathinfo === '/user_account/articles') {
                    return array (  '_controller' => 'AppBundle\\Controller\\UserAccount\\UserAccountController::UserArticlesAction',  '_route' => 'user_articles',);
                }

                // new_article
                if ($pathinfo === '/user_account/articles/new') {
                    return array (  '_controller' => 'AppBundle\\Controller\\UserAccount\\UserAccountController::UserNewArticleAction',  '_route' => 'new_article',);
                }

                // CKnew_article
                if ($pathinfo === '/user_account/articles/CKnew') {
                    return array (  '_controller' => 'AppBundle\\Controller\\UserAccount\\UserAccountController::UserNewCKArticleAction',  '_route' => 'CKnew_article',);
                }

                // editme_url
                if (preg_match('#^/user_account/articles/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_editme_url;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'editme_url')), array (  '_controller' => 'AppBundle\\Controller\\UserAccount\\UserAccountController::UserEditAction',));
                }
                not_editme_url:

            }

            // user_misc
            if ($pathinfo === '/user_account/misc') {
                return array (  '_controller' => 'AppBundle\\Controller\\UserAccount\\UserAccountController::UserMiscAction',  '_route' => 'user_misc',);
            }

        }

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

        // KCFinder_browse
        if ($pathinfo === '/user_account/article/kcfinder/browse.php') {
            return array (  '_controller' => 'Ikadoc\\KCFinderBundle\\Controller\\ProxyController::proxyAction',  '_route' => 'KCFinder_browse',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
