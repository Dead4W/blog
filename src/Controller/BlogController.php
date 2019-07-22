<?php
namespace Blog\Controller;

use Slim\Exception\HttpNotFoundException;
use Blog\Lists\PostList;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

/**
 * Class BlogController
 * @package Blog\Controller
 */
class BlogController extends AbstractController
{
    public function blog(ServerRequestInterface $request, ResponseInterface $response, $args)
    {
        $page = (int)$args['page'];

        /** @var PostList $posts */
        $posts = $this->container->get(PostList::class);

        if ($page > 1)
            $posts->setPage($page);

        $posts->build();

        if ($posts->getPage() > $posts->getTotalPages())
            throw new HttpNotFoundException($request);

        return $this->render($response, 'blog/index.phtml', [
            'page' => $posts->getPage(),
            'totalPages' => $posts->getTotalPages(),
            'posts' => $posts->getItems(),
        ]);
    }
}
