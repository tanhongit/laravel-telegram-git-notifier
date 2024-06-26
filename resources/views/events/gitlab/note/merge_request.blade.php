<?php
/**
 * @var object $payload
 * @var string $event
 */

?>
💬 {!! __('tg-notifier::events/gitlab/note.title.merge_request', [
       'repo' => "🦊<a href='{$payload->object_attributes->url}'>{$payload->project->path_with_namespace}#{$payload->merge_request->iid}</a>",
       'user' => "<b>{$payload->user->name}</b>"
   ]
) !!}

🛠 <code>{{ $payload->merge_request->title }}</code>
🌳 {{ __('tg-notifier::app.branch') }}: {{ $payload->merge_request->source_branch }} -> {{ $payload->merge_request->target_branch }} 🎯
@include('tg-notifier::events.shared.partials.gitlab._body', compact('payload', 'event'))
