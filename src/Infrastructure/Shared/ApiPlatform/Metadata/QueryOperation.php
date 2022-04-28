<?php

declare(strict_types=1);

namespace App\Infrastructure\Shared\ApiPlatform\Metadata;

use ApiPlatform\Metadata\HttpOperation;
use ApiPlatform\Metadata\CollectionOperationInterface;
use App\Application\Shared\Query\QueryInterface;

final class QueryOperation extends HttpOperation
{
    /**
     * @var class-string<QueryInterface>
     */
    private string $query;

    /**
     * @param class-string<QueryInterface> $query
     */
    public function __construct(
        ?string $uriTemplate = null,
        ?string $query = null,
        ?array $types = null,
        $formats = null,
        $inputFormats = null,
        $outputFormats = null,
        $uriVariables = null,
        ?string $routePrefix = null,
        ?string $routeName = null,
        ?array $defaults = null,
        ?array $requirements = null,
        ?array $options = null,
        ?bool $stateless = null,
        ?string $sunset = null,
        ?string $acceptPatch = null,
        $status = null,
        ?string $host = null,
        ?array $schemes = null,
        ?string $condition = null,
        ?string $controller = null,
        ?array $cacheHeaders = null,

        ?array $hydraContext = null,
        ?array $openapiContext = null,
        ?array $exceptionToStatus = null,

        ?bool $queryParameterValidationEnabled = null,

        // abstract operation arguments
        ?string $shortName = null,
        ?string $class = null,
        ?bool $paginationEnabled = null,
        ?string $paginationType = null,
        ?int $paginationItemsPerPage = null,
        ?int $paginationMaximumItemsPerPage = null,
        ?bool $paginationPartial = null,
        ?bool $paginationClientEnabled = null,
        ?bool $paginationClientItemsPerPage = null,
        ?bool $paginationClientPartial = null,
        ?bool $paginationFetchJoinCollection = null,
        ?bool $paginationUseOutputWalkers = null,
        ?array $paginationViaCursor = null,
        ?array $order = null,
        ?string $description = null,
        ?array $normalizationContext = null,
        ?array $denormalizationContext = null,
        ?string $security = null,
        ?string $securityMessage = null,
        ?string $securityPostDenormalize = null,
        ?string $securityPostDenormalizeMessage = null,
        ?string $securityPostValidation = null,
        ?string $securityPostValidationMessage = null,
        ?string $deprecationReason = null,
        ?array $filters = null,
        ?array $validationContext = null,
        $input = null,
        $output = null,
        $mercure = null,
        $messenger = null,
        ?bool $elasticsearch = null,
        ?int $urlGenerationStrategy = null,
        ?bool $read = null,
        ?bool $deserialize = null,
        ?bool $validate = null,
        ?bool $write = null,
        ?bool $serialize = null,
        ?bool $fetchPartial = null,
        ?bool $forceEager = null,
        ?int $priority = null,
        ?string $name = null,
        ?string $provider = null,
        ?string $processor = null,
        array $extraProperties = []

    ) {
        $this->query = $query;

        $args = func_get_args();

        // remove the extra query parameter
        unset($args[1]);

        parent::__construct(self::METHOD_GET, ...$args);
    }

    /**
     * @return class-string<QueryInterface>
     */
    public function getQuery(): string
    {
        return $this->query;
    }

    /**
     * @param class-string<QueryInterface> $query
     */
    public function withQuery(string $query): static
    {
        $self = clone $this;
        $self->query = $query;

        return $self;
    }
}