<?php
declare(strict_types=1);

interface DataSourceGateway
{
    public function get(): DataSource;
}