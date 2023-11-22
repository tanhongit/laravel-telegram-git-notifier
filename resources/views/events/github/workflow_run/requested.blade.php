<?php
/**
 * @var $payload mixed
 */
?>

{!! __('tg-notifier::events/github/workflow_run.requested.title', ['user' => "<a href='{$payload->repository->html_url}'>{$payload->repository->full_name}</a>"]) !!}

{!! __('tg-notifier::events/github/workflow_run.requested.body', ['name' => $payload->workflow_run->name]) !!}

{!! __('tg-notifier::events/github/workflow_run.link', ['link' => "<a href='{$payload->workflow_run->html_url}'>{$payload->workflow_run->event} - {$payload->workflow_run->name}</a>"]) !!}
