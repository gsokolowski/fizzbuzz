<?php

namespace FizzBuzz\Controller;

class Article extends AbstractController
{
    public function view()
    {

        $articleID = (int) $this->getRoutedParam('id');

        if (!$articleID) {
            throw new \Exception("Article ID is invalid", 404);
        }
        $articlesRepository = $this->app->container->get('ArticlesRepository');
        $article = $articlesRepository->findById($articleID);

        if (!is_array($article) or !count($article)) {
            throw new \Exception("Article not found", 404);
        }

        $urlSlug =  explode('/', $_SERVER['REQUEST_URI'] );
        if($urlSlug[2]!=$articleID.'-'.$article['slug']) {
            $location = 'http://fizzbuzz.local/read/'.$articleID.'-'.$article['slug'];
            header('Location: '.$location);
            exit;
        }
        $this->tpl->article = $article;

        $sectionsRepository = $this->app->container->get('SectionsRepository');
        $sections = $sectionsRepository->findAll();
        $this->tpl->sections = $sections;

        echo $this->tpl->render('nav/view.phtml');
        echo $this->tpl->render('article/view.phtml');
    }
}
