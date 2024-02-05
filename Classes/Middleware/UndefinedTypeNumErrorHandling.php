<?php
declare(strict_types=1);
namespace epochenapoleon\Sitepackage\Middleware;

use epochenapoleon\EpochenapoleonSitepackage\Exception\ConfigurationMissingException;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Throwable;
use TYPO3\CMS\Core\Site\Entity\Site;
use TYPO3\CMS\Core\Utility\MathUtility;

/**
 * Class UndefinedTypeNumErrorHandling
 * to simply show 404 page if a typeNum is given, that is not defined in siteconfiguration.
 * This avoids annoying log entries and delivers a 404 to the (e.g.) bot that is calling the outdated url.
 */
class UndefinedTypeNumErrorHandling implements MiddlewareInterface
{
    /**
     * @param ServerRequestInterface $request
     * @param RequestHandlerInterface $handler
     * @return ResponseInterface
     * @throws ConfigurationMissingException
     */
    public function process(ServerRequestInterface $request, RequestHandlerInterface $handler): ResponseInterface
    {
        if ($this->isTypeNumSet($request) && $this->isTypeNumAllowed($request) === false) {
            /** @var Site $site */
            $site = $request->getAttribute('site');
            try {
                $errorHandler = $site->getErrorHandler(404);
                return $errorHandler->handlePageError($request, 'Given type is not registered in site configuration');
            } catch (Throwable $exception) {
                throw new ConfigurationMissingException('No 404 error handler given in site configuration', 1643989065);
            }
        }
        return $handler->handle($request);
    }

    /**
     * @param ServerRequestInterface $request
     * @return bool
     */
    protected function isTypeNumSet(ServerRequestInterface $request): bool
    {
        return array_key_exists('type', $request->getQueryParams());
    }

    /**
     * @param ServerRequestInterface $request
     * @return bool
     */
    protected function isTypeNumAllowed(ServerRequestInterface $request): bool
    {
        /** @var Site $site */
        $site = $request->getAttribute('site');
        if (!empty($site->getConfiguration()['routeEnhancers']['PageTypeSuffix']['map'])) {
            $allowedTypeNums = array_values($site->getConfiguration()['routeEnhancers']['PageTypeSuffix']['map']);
            $type = $request->getQueryParams()['type'];
            if (MathUtility::canBeInterpretedAsInteger($type)) {
                return in_array((int)$type, $allowedTypeNums, true);
            }
        }
        return false;
    }
}
