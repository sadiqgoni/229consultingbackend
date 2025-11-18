@php
    // State is typically the related User model (e.g., $record->user)
    $user = $getState();
    // Full table row record (e.g., Post, Comment, etc.)
    $row = $getRecord();
    $nameColumn = config('filamentblog.user.columns.name', 'name');
    $displayName = $user->$nameColumn ?? ($row->name ?? 'Guest');
    // Try common avatar accessors/columns
    $avatarUrl = $user->avatar ?? ($user->profile_photo_url ?? null);
@endphp

<div style="display: flex; gap: 8px; align-items: center; justify-content: center;" title="{{ $displayName }}">
    @if ($avatarUrl)
        <img src="{{ $avatarUrl }}" alt="{{ $displayName }}"
            style="width: 36px; height: 36px; border-radius: 50%; object-fit: cover;">
    @else
        <div style="width:36px;height:36px;border-radius:50%;background:#e5e7eb;color:#374151;display:flex;align-items:center;justify-content:center;font-weight:600;">
            {{ mb_strtoupper(mb_substr($displayName, 0, 1)) }}
        </div>
    @endif
</div>
