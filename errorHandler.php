<?php
set_exception_handler(function (Throwable $exception) {

    $logger = new Logger('error_handler');

    $logger->log($exception->getMessage());
    die('Сервис временно недоступен. Приносим извинения за неудобство.');
});